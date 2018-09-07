    // Variables for referencing the canvas and 2dcanvas context
    var canvas,ctx;
	var dotwidth=0;
    // Variables to keep track of the mouse position and left-button status 
    var oldx,oldy,mouseX,mouseY,mouseDown=0;
	var signString='';
    // Draws a dot at a specific position on the supplied canvas name
    // Parameters are: A canvas context, the x position, the y position, the size of the dot
	//document.ontouchmove = function(e){ e.preventDefault(); } 
    function drawDot(ctx,x,y,size) {
        // Let's use black by setting RGB values to 0, and 255 alpha (completely opaque)
        r=0; g=0; b=0; a=255;

        // Select a fill style
        ctx.fillStyle = "rgba("+r+","+g+","+b+","+(a/255)+")";

        // Draw a filled circle
        ctx.beginPath();
        ctx.arc(x, y, size, 0, Math.PI*2, true); 
        ctx.closePath();
        ctx.fill();
		//  drawing line to fill any gap for fast writing
		if(oldx>0){
			ctx.beginPath();
			ctx.lineWidth = dotwidth+3;
			ctx.moveTo(oldx, oldy);
			ctx.lineTo(x,y);
			ctx.stroke();
		}
		signString=signString+x+','+y+'//'; 
		
		//  end of line drawing
		oldx=x;
		oldy=y;
    } 

    // Clear the canvas context using the canvas width and height
    function clearCanvas(canvas,ctx,ctr) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
		document.getElementById(ctr).value='';
		signString='';
    }
	
	function drawSign(ctx,ctr){
		signString=document.getElementById(ctr).value;
		r=0; g=0; b=0; a=255;
		ctx.lineWidth = dotwidth+3;;
        ctx.fillStyle = "rgba("+r+","+g+","+b+","+(a/255)+")";
		spoints=signString.split("//");
		for(i=0;i<spoints.length;i++){
			pointsXY=spoints[i].split(",");
			if((i>0) && (pointsXY[0]>0) && (oldx>0)){
				ctx.beginPath();
				ctx.moveTo(oldx, oldy);
				ctx.lineTo(pointsXY[0],pointsXY[1]);
				ctx.stroke();
			}
			oldx=pointsXY[0];
			oldy=pointsXY[1];
		}
		
	}

    // Keep track of the mouse button being pressed and draw a dot at current location
    function sketchpad_mouseDown() {
        mouseDown=1;
		signString=signString+'0,0//'
        drawDot(ctx,mouseX,mouseY,dotwidth);
    }

    // Keep track of the mouse button being released
    function sketchpad_mouseUp() {
		oldx=0;
		oldy=0;
        mouseDown=0;
		//alert(signString)
    }

    // Kepp track of the mouse position and draw a dot if mouse button is currently pressed
    function sketchpad_mouseMove(e) { 
        // Update the mouse co-ordinates when moved
        getMousePos(e);

        // Draw a dot if the mouse button is currently being pressed
        if (mouseDown==1) {
            drawDot(ctx,mouseX,mouseY,dotwidth);
        }
    }

    // Get the current mouse position relative to the top-left of the canvas
    function getMousePos(e) {
        if (!e)
            var e = event;

        if (e.offsetX) {
            mouseX = e.offsetX;
            mouseY = e.offsetY;
        }
        else if (e.layerX) {
            mouseX = e.layerX;
            mouseY = e.layerY;
        }
     }


    // Set-up the canvas and add our event handlers after the page has loaded
    function initSign() {
        // Get the specific canvas element from the HTML document
        document.getElementById('signsave').style.display='inline';
        document.getElementById('signclear').style.display='inline';
        canvas = document.getElementById('sketchpad');
		canvas.style.display='block'
        // If the browser supports the canvas tag, get the 2d drawing context for this canvas
        if (canvas.getContext)
            ctx = canvas.getContext('2d');

        // Check that we have a valid context to draw on/with before adding event handlers
        if (ctx) {
            canvas.addEventListener('mousedown', sketchpad_mouseDown, false);
            canvas.addEventListener('mousemove', sketchpad_mouseMove, false);
            window.addEventListener('mouseup', sketchpad_mouseUp, false);
        }
    }
	
	function Create2DArray(rows,columns) {
	   var x = new Array(rows);
	   for (var i = 0; i < rows; i++) {
		   x[i] = new Array(columns);
	   }
	   return x;
	}
	
	function signSave(ctr){
		c=document.getElementById(ctr);
		c.value=c.value+'0,0//'+signString
	}
