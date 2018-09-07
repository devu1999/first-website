
// right click management and ctr+shift+i console inspect elements prevented....

 
var message="Right Click Disabled";
var global1="";
document.onkeydown = function (e) {
    e = e || window.event;//Get event
	     if (e.keyCode == 123)//for F12 key
     {
           preventKeypress(e)
     }
	 if (e.keyCode == 93)//for right key
     {
          alertMessage(message)
		  return false;  
     }
	//for control key
    e = e||window.event // IE support
    var c = e.keyCode
    var ctrlDown = e.ctrlKey||e.metaKey // Mac support
	 // Check for Alt+Gr (http://en.wikipedia.org/wiki/AltGr_key)
    if (ctrlDown && e.altKey) return true

    // Check for ctrl+a, c, v and f are allowed
    else if (ctrlDown && c==65) return true // a
    else if (ctrlDown && c==67) return true // c
    else if (ctrlDown && c==70) return true // f
    else if (ctrlDown && c==86) return true // v
    else if (ctrlDown && c==80) return true // p
    else if (ctrlDown && c==88) return true // x
    else if (ctrlDown && c==37) return true // right arrow
    else if (ctrlDown && c==38) return true // right arrow
    else if (ctrlDown && c==39) return true // right arrow
    else if (ctrlDown && c==40) return true // right arrow
	if((c!=17) && (ctrlDown)){
		preventKeypress(e)
	}
	 
};
	function frameload(obj){
		if(obj){
			if(parent.frames[obj]) parent.frames[obj].location.reload();			
		}else{
			if(parent.frames['data']) parent.frames['data'].location.reload();
			if(parent.frames['frtop']) parent.frames['frtop'].location.reload();
		}
	 }
	function preventKeypress(e){
		//console.log(message);
		o=parent.document.getElementById('prot');
		if(o) o.innerHTML='<font color=ff0000><b></b></font>'
		o1=parent.parent.document.getElementById('prot'); 
		if(o1) o1.innerHTML='<font color=ff0000><b></b></font>'
		e.preventDefault();
		return false
	}  
	/////////////////////////////////// Plumware Protection... Action denied
	function clickIE4(){
		if (event.button==2){
			preventKeypress(event)
		}
	}

	function clickNS4(e){
		if (document.layers||document.getElementById&&!document.all){
			if (e.which==2||e.which==3){
				preventKeypress(e)
			}
		}
	}

	function WordCount(obj,w) { 
	  str = document.getElementById(obj).value;
	  str1 = document.getElementById(obj).value.length;
	  k = str.split(" ").length;
	  if(str1>0 && k<w){
		alertMessage('Please enter minimum '+w+' words.',obj);
		//document.getElementById(obj).focus(); 
		return false;
	  }
	}


	if (document.layers){
		document.captureEvents(Event.MOUSEDOWN);
		document.onmousedown=clickNS4;
	}
	else if (document.all&&!document.getElementById){
		document.onmousedown=clickIE4;
	}
	function hidemenus(){
		elms = parent.document.getElementsByTagName('table');
		lx=elms.length;
		for (i=0;i<lx;i++){
			idx=elms[i].id;
			if(idx.substring(0,5)=='menu_'){
				elms[i].style.display='none';
			}
		}
		if(parent.document.getElementsByTagName('div')){
			elms = parent.document.getElementsByTagName('div');
			if(parent.document.getElementById('menuimg'))parent.document.getElementById('menuimg').style.display='none';
			lx=elms.length;
			for (i=0;i<lx;i++){
				idx=elms[i].id;
				if(idx.substring(0,5)=='menu_'){
					elms[i].style.display='none';
				}
			}
		}
	}
	
	function showprogress(){  //  displays the progress icon and hides the entry form 
		//document.getElementById('prog').style.display='block';
		//document.getElementById('fedit').style.display='none';
	}
	
	//  hides the progress icon and hides the entry form 
	//  generally called from the code segment
	function hideprogress(){  
		//if(parent.document.getElementById('prog'))parent.document.getElementById('prog').style.display='none';
		//if(parent.document.getElementById('fedit'))parent.document.getElementById('fedit').style.display='block';
	}	
	var hlrow;
	function hlme(o,v){
		var tb = document.getElementById('listtable'); 
		for (var i=0;i < tb.rows.length;i++){
			var row = tb.rows[i];
			if(v==1) row.style.backgroundColor='ffffff';
			if(v==1) row.style.color='333333';
			if((o==row) && (v==1)) row.style.backgroundColor='d3dadf';
			if((o==row) && (v==1)) row.style.color='ffffff';
			if((o==row) && (v==1)) hlrow=row;
			if((row!=hlrow)) row.style.backgroundColor='ffffff';
			if((o==row) && (v==0) && (row!=hlrow)){
				row.style.backgroundColor='eceff1';
			}
		} 
	} 

	// -------------  Drag Drop functions start
	var fromId;
	var toId;
	function allowDrop(ev){
		ev.preventDefault();
	}

	function drag(ev,pg){
		ev.dataTransfer.setData('Text',ev.target.id);
		fromId = ev.target.id;
	}

	function drop(ev,pg){
		ev.preventDefault(); 
		var data=ev.dataTransfer.getData('Text');
		toId = ev.target.id;
		url='do.php?pw='+pg+'&fromId='+fromId+'&toId='+toId+'&rty=dragslno'
		//alert(url);
		if(fromId!=toId) document.getElementById('edtframe').src=url;
	} 
	
	//  for showing popup links actions
	function showpopup(fr,e){
		if(document.getElementById('searchadvance')) document.getElementById('searchadvance').style.display='none';
		oxy=MouseXY(e);
		
		o=parent.document.getElementById('popup');
		o.contentWindow.document.write("<img src='res/images/preloader.gif' style='padding: 60px 60px;'>");
		o.style.display='block'
		if(fr=='')fr='bottom'	
		pos = scrollpos(); 
		ScrossY=pos.y;
		if(fr=='top')o.style.top=oxy.y+99-ScrossY;  //  93 is offset of top frame
		if(fr=='bottom'){
			if(ScrossY>200) ScrossY= 0;
			o.style.top=465-ScrossY;  //  93 is offset of top frame
		}
		//if(o.style.top<'0px') alert(o.style.top);
		o.style.left=31;
		o.style.backgroundColor='#ffffff';
		o.style.border='1px solid #888888';
		if(fr=='bottom')o.style.left=80;
	}
	
	
	// -------------  Drag Drop functions end
	
	function hidepopup(){  //  hides the index page action popup div/ iframe
		if(parent.document.getElementById('popup')) parent.document.getElementById('popup').style.display='none'; //  hide popup for safety

	}
	//function to open the popup frame
	function openPopup(t,l,w,h){ //t-top,l-left,w-width,h-height
		o = parent.document.getElementById('popup');
		if(o){
			objS = o.style;
			objS.display = 'block';
			objS.top=t;
			objS.left=l;
			objS.width=w;
			objS.height=h;
			objS.backgroundColor='#ffffff';
			objS.border='1px solid #888888';
			//objS.className = 'popup';
		}else{
			alert('Popup object not found');
		}
	}
	// shows the selected tab for the edit page
	function showTab(tabname){
		elmstd = document.getElementsByTagName('td');
		lx=elmstd.length;
		//  highlight the tab pressed
		for (i=0;i<lx;i++){
			idx=elmstd[i].id;
			if(idx.substring(0,4)=='tab_'){
				elmstd[i].className='tabnormal'
				if(idx==tabname) elmstd[i].className='tabsel';
			}
		}
		
		
		elms = document.getElementsByTagName('table');
		lx   = elms.length;
		for (i=0;i<lx;i++){
			idx=elms[i].id;
			if(idx.substring(0,4)=='tab_') elms[i].style.display='none';
			if(elms[i].id==tabname) elms[i].style.display='block';
		}
	}
	//To submit the form
	function formsubmit(){
		//if(document.getElementById('addnew')) document.getElementById('addnew').style.display='none'; //  protect from double insert
		elms = document.getElementsByTagName('*');
		lx   = elms.length;
		er='';
		for (i=0;i<lx;i++){
			if (elms[i].name){
				if (elms[i].name.substr(0,4)=='txt_'){
					xdata=elms[i].getAttribute('tags');
					if((xdata) && (xdata.indexOf('Required')>0) && (elms[i].value=='') ){
						er=er+'<li>'+elms[i].getAttribute('cap')+'\n</li>';
						ct=elms[i];
					}
				}
				if (elms[i].name=='nw'  || elms[i].name.substr(0,3)=='nw_'){
					xdata=elms[i].getAttribute('tags');
					if((xdata) && (xdata.indexOf('Required')>0) && (elms[i].value=='')){
						er=er+'<li>'+elms[i].getAttribute('cap')+'\n</li>';
						ct=elms[i];
					}
				}
			}
		}
		
		if(er!=''){ 
			alertMessage('Please enter value for<ul>'+er+'</ul>');
			//if(document.getElementById('prog')) document.getElementById('prog').style.display='none';
			//if(document.getElementById('fedit')) document.getElementById('fedit').style.display='block';
			//ct.focus();
			//if(document.getElementById('addnew'))document.getElementById('addnew').style.display='block';
			return false;
		}
		
		
        FormIsValid=FormValidate();
		FormIsValid1=ValidateCaptcha();
		FormIsValid2=Validate();
		if(FormIsValid===false  || FormIsValid1===false || FormIsValid2===false){ 
			console.log('ok');
			//if(document.getElementById('prog')) document.getElementById('prog').style.display='none';
			//if(document.getElementById('fedit')) document.getElementById('fedit').style.display='block';
			//if(document.getElementById('addnew'))document.getElementById('addnew').style.display='block';
			return false;
		}
		if(document.getElementById('edtable')) document.getElementById('edtable').style.display='none';
		return true;

	}
	function alertMessagePClose(content,p,reloadfr,lourl){
		var btn1css;
		btn1text ="Ok";
		title = "Alert";
		if (btn1text == '') {
			btn1css = "hidecss";
		} else {
			btn1css = "showcss";
		}
		$(window.parent.document.getElementById('lblMessage')).html(content);
		dlg1 = $(window.parent.document.getElementById('dialog'));
		dlg1 = dlg1.dialog({
			closeOnEscape: false,
			open: function(event, ui) {
				$(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
			},
			resizable: false,
			title: title,
			modal: true,
			width: '300px',
			height: 'auto',
			position: { my: 'top', at: 'top+50' },
			bgiframe: false,
			buttons: [
							{
								text: btn1text,
								"class": btn1css,
								click: function () {
									dlg1.dialog('close');
									if(p=='Yes') parent.document.getElementById('popup').style.display='none';
									if(reloadfr) frameload(reloadfr);
									if(lourl) parent.parent.window.location.href=lourl;
								}
							}
						]
		});
		
	}
	function alertMessage(content,obj,tt){
		var btn1css;
		btn1text ="Ok";
		title = "Alert";
		if(tt) title=tt;
		if (btn1text == '') {
			btn1css = "hidecss";
		} else {
			btn1css = "showcss";
		}
		$(window.parent.document.getElementById('lblMessage')).html(content);
		dlg1 = $(window.parent.document.getElementById('dialog'));
		dlg1 = dlg1.dialog({
			closeOnEscape: false,
			open: function(event, ui) {
				$(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
			},
			resizable: false,
			title: title,
			modal: true,
			width: '300px',
			height: 'auto',
			position: { my: 'top', at: 'top+50' },
			bgiframe: false,
			buttons: [
							{
								text: btn1text,
								"class": btn1css,
								click: function () {
									dlg1.dialog('close');
									if(obj){
										if(document.getElementById(obj)) document.getElementById(obj).focus();
									}else{
										fld = fldfcs();
										if(document.getElementById(fld)) document.getElementById(fld).focus();
									}
									
								}
							}
						]
		});
		
	}
	function alertMessagePHP(content,url){ 
		var btn1css;
		btn1text ="Ok";
		title = "Alert";
		if (btn1text == '') {
			btn1css = "hidecss";
		} else {
			btn1css = "showcss";
		}
		$(window.parent.parent.document.getElementById('lblMessage')).html(content);
		dlg1 = $(window.parent.parent.document.getElementById('dialog'));
		dlg1 = dlg1.dialog({
			closeOnEscape: false,
			open: function(event, ui) {
				$(".ui-dialog-titlebar-close", ui.dialog | ui).hide();
			},
			resizable: false,
			title: title,
			modal: true,
			width: '300px',
			height: 'auto',
			bgiframe: false,
			position: { my: 'top', at: 'top+50' },
			buttons: [
							{
								text: btn1text,
								"class": btn1css,
								click: function () {
									dlg1.dialog('close');
									if(url) parent.parent.frames['data'].location.href=url; 
									
								}
							}
						]
		});
	}
	
	function alertConfirmMessage(content,yesurl,nourl,fr='data'){ 
		var btn1css;
		btn1text ="Yes";
		btn2text = "No";
		title = "Alert";
		if (btn1text == '') {
			btn1css = "hidecss";
		} else {
			btn1css = "showcss";
		}
		if (btn2text == '') {
			btn2css = "hidecss";
		} else {
			btn2css = "showcss";
		}
		$(window.parent.parent.document.getElementById('lblMessage')).html(content);
		dlg1 = $(window.parent.parent.document.getElementById('dialog'));
		dlg1 = dlg1.dialog({
			resizable: false,
			title: title,
			modal: true,
			width: '300px',
			height: 'auto',
			bgiframe: false,
			position: { my: 'top', at: 'top+50' },
			buttons: [
						{
							text: btn1text,
							"class": btn1css,
							click: function () {
								dlg1.dialog('close');
								if(yesurl)parent.parent.frames[fr].location.href=yesurl;
							}
						},
						{
							text: btn2text,
							"class": btn2css,
							click: function () {
								dlg1.dialog('close');
								if(nourl) parent.parent.frames[fr].location.href=nourl;
							}
						}
                    ]
		});
		 


		
		
	}
	
	function alertConfirmMessagePHP(content){ 
		var btn1css;
		btn1text ="Yes";
		btn2text = "No";
		title = "Alert";
		yesurl = "true";
		nourl = "false";
		if (btn1text == '') {
			btn1css = "hidecss";
		} else {
			btn1css = "showcss";
		}
		if (btn2text == '') {
			btn2css = "hidecss";
		} else {
			btn2css = "showcss";
		}
		$(window.parent.parent.document.getElementById('lblMessage')).html(content);
		dlg1 = $(window.parent.parent.document.getElementById('dialog'));
		dlg1 = dlg1.dialog({
			resizable: false,
			title: title,
			modal: true,
			width: '300px',
			height: 'auto',
			bgiframe: false,
			position: { my: 'top', at: 'top+50' },
			buttons: [
						{
							text: btn1text,
							"class": btn1css,
							click: function () {
								dlg1.dialog('close');
								if(yesurl)return yesurl;
							}
						},
						{
							text: btn2text,
							"class": btn2css,
							click: function () {
								dlg1.dialog('close');
								if(nourl) return nourl;
							}
						}
                    ]
		});
		 


		
		
	}
	//For focus field
	function fldfcs(){
		// if(document.getElementById('fedit'))document.getElementById('fedit').style.display='';
		// if(document.getElementById('edit2formdiv'))document.getElementById('edit2formdiv').style.display='';
		// if(parent.document.getElementById('edit2formdiv'))parent.document.getElementById('edit2formdiv').style.display='';
		// if(parent.document.getElementById('fedit'))parent.document.getElementById('fedit').style.display='';
		elms = document.getElementsByTagName('*');
		lx   = elms.length;
		er='';fd='';
		for (i=0;i<lx;i++){
			if (elms[i].name){
				if (elms[i].name.substr(0,4)=='txt_'){ 
					xdata=elms[i].getAttribute('tags');
					if((xdata) && (xdata.indexOf('Required')>0) && (elms[i].value=='' || elms[i].value==0) ){
						if(fd==''){
							fd = elms[i].id;
						}
					}
				}
				if (elms[i].name=='nw'  || elms[i].name.substr(0,3)=='nw_'){
					xdata=elms[i].getAttribute('tags');
					if((xdata) && (xdata.indexOf('Required')>0) && (elms[i].value=='')){
						if(fd==''){
							fd = elms[i].id;
						}
					}
				}
			}
		}
		if(fd!=''){
			return fd;
		}
	}
	function ValidateCaptcha(){
		if(document.getElementById('cap')){
			if(document.getElementById('cap').value!=document.getElementById('originalcap').value){
				alertMessage('Captcha Not Matched...Please enter again');
				return false;		
			}
		}
		return true;
	}
	function Validate(){
		if(document.getElementById('otpkey').value==""){
			alertMessage('OTP is not entered... Please enter');
			return false;	
		}
		return true;
	} 
	//  check all check boxes of a edit control
	function checkAll(ctrl,truefalse){
		o=document.getElementById(ctrl);
		n=o.name;
		var x=document.getElementsByTagName('input');
		document.getElementById(ctrl).value=''
		for(i=0;i<(x.length);i++){
			if(x[i].name=='chk_'+n){
				if(truefalse==1)x[i].checked = true
				if(truefalse!=1)x[i].checked = false
				checked =x[i].checked 
				tvalue=document.getElementById(ctrl).value;
				if((checked) && (tvalue!='')) document.getElementById(ctrl).value=tvalue+'~'+x[i].id
				if((checked) && (tvalue=='')) document.getElementById(ctrl).value=x[i].id;
			}
		}
		
	}
	//  Push check boxes to control
	function multicontrol(obj,ctrl){
		n=obj.name;
		var x=document.getElementsByTagName('input');
		//If we deselect any check box clearing ctrl value...
		document.getElementById(ctrl).value=''
		for(i=0;i<(x.length);i++){
			if(x[i].name==n){
				checked =x[i].checked 
				tvalue=document.getElementById(ctrl).value;
				if((checked) && (tvalue!='')) document.getElementById(ctrl).value=tvalue+'~'+x[i].id
				if((checked) && (tvalue=='')) document.getElementById(ctrl).value=x[i].id;
			}
		}
	}
	
	

	//  list field pagination
	function setPage(v){
		pg=parseInt(document.getElementById('pageno').value);
		if(isNaN(pg)) pg=1;
		if (v==0) pg=1;
		if (v==1) pg++;;
		if (v==2) pg--;
		//if (v==9) pg=9999;
		if(pg<1) pg=1;
		if(isNaN(pg)) pg=1;
		if (v>2) pg=v;
		document.getElementById('pageno').value=pg; 
		submitListPage(v);
	}
	//  search field enter key handling
	function ListPage(e){
		var unicode=e.keyCode? e.keyCode : e.charCode; 
		if(unicode==13){  //  enter kay
			document.getElementById('pageno').value=0;
			frmList.submit();
			return true;
		}
	}

	//  reloading the list page on refresh click
	function pagereload(){
		o=parent.document.getElementById('popup')
		if(o) o.style.display = 'none';
		o=parent.document.getElementById('middle')
		if(o) o.style.display = 'none';
		location.reload();
	}
			
	// field help display on click of caption
	function fieldhelp(fid,e){ 
		oxy=MouseXY(e);
		o=document.getElementById('fhelp');
		o.style.top=oxy.y+13;
		o.style.left=10;
		url='pw_db_utils.php?_&open=free&id='+fid+'&rty=fldhelp' 
		document.getElementById('edtframe').src=url;  
	}
	// mouse click position
	var IE = document.all?true:false;
	// if (!IE) document.captureEvents(Event.MOUSEMOVE)
	var tempX = 0;
	var tempY = 0;
	function MouseXY(e) {
		if (IE) { // grab the x-y pos.s if browser is IE
			tempX = event.clientX + document.body.scrollLeft;
			tempY = event.clientY + document.body.scrollTop;
		}
		else {  // grab the x-y pos.s if browser is NS
			tempX = e.pageX||e.layerX;;
			tempY = e.pageY||e.layerY;
		}
		if (tempX < 0){tempX = 0;}
		if (tempY < 0){tempY = 0;}
		this.x = tempX;
		this.y = tempY;
		return this; 
	}
	
	//  sizing of the iframes as required
	//  List-Data Layout //  Standard Layout 
	function framesizing2(par1,par2){
		objtop=parent.document.getElementById('tdtop');
		objbottom=parent.document.getElementById('tdbottom');
		objdata=parent.document.getElementById('tddata');
		
		objbottom.style.height='0px'
		objbottom.style.width=par1
		objtop.style.width=par1
		objtop.style.height='100%'
		objdata.style.width=par2
	}
	function framesizing(par){
		objtop=parent.document.getElementById('tdtop');
		objbottom=parent.document.getElementById('tdbottom');
		objdata=parent.document.getElementById('tddata');
 		if(objdata) objdata.style.width='35%';
		objtop.style.width='65%';
		objdata.style.display=''
		objbottom.style.display=''
		
		if(par=='List-Data Layout') objbottom.style.height='0px'
		if(par=='List-Data Layout') objbottom.style.width='65%'
		if(par=='List-Data Layout') objtop.style.width='65%'
		if(par=='List-Data Layout') objtop.style.height='100%'
		if(par=='List-Data Layout') objdata.style.width='35%'
		if(par=='List-Data Layout') objbottom.style.display='none'

		if(par=='Standard Layout') objtop.style.height='60%'
		if(par=='Standard Layout') objtop.style.width='65%'
		if(par=='Standard Layout') objdata.style.width='35%'
		if(par=='Standard Layout') objbottom.style.height='40%' 
		if(par=='Standard Layout') objbottom.style.width='65%'

		if(par=='Bottom Layout') objtop.style.height='30%'
		if(par=='Bottom Layout') objtop.style.width='65%'
		if(par=='Bottom Layout') objdata.style.width='35%'
		if(par=='Bottom Layout') objbottom.style.height='70%' 
		if(par=='Bottom Layout') objbottom.style.width='65%'
		
		if(par=='Middle') objbottom.style.height='0px'
		if(par=='Middle') objbottom.style.width='55%'
		if(par=='Middle') objtop.style.width='55%'
		if(par=='Middle') objtop.style.height='100%'
		if(par=='Middle') objdata.style.width='45%'

		if(par=='Top') objdata.style.width='1%'
		if(par=='Top') objtop.style.width='100%'
		if(par=='Top') objtop.style.height='99%'
		if(par=='Top') objbottom.style.height='0px'
		if(par=='Top') objbottom.style.width='100%'
		if(par=='Top') objdata.style.height='100%'
		if(par=='Top') objdata.style.display='none'
		if(par=='Top') objbottom.style.display='none'
		
		if(par=='Menu') objbottom.style.width='20%'
		if(par=='Menu') objdata.style.width='80%'
		if(par=='Menu') objtop.style.width='20%'		
		if(par=='Menu') objbottom.style.height='0px'
		if(par=='Menu') objtop.style.height='100%'
		if(par=='Menu') objbottom.style.display='none'
		
		//For Poc WCB form
		if(par=='Edit Full') objbottom.style.width='0px'
		if(par=='Edit Full') objdata.style.width='100%'
		if(par=='Edit Full') objtop.style.width='0px'		
		if(par=='Edit Full') objbottom.style.height='0px'
		if(par=='Edit Full') objtop.style.height='100%'
		    
		if(par=='Menus') objbottom.style.width='25%'
		if(par=='Menus') objdata.style.width='80%'
		if(par=='Menus') objtop.style.width='25%'	     	
		if(par=='Menus') objbottom.style.height='0px'
		if(par=='Menus') objtop.style.height='100%'
		if(par=='Menus') objbottom.style.display='none'

		if(par=='Data') objbottom.style.width='0%'
		if(par=='Data') objdata.style.width='100%'
		if(par=='Data') objdata.style.height='100%'
		if(par=='Data') objtop.style.width='0%'		
		if(par=='Data') objbottom.style.height='0px'
		if(par=='Data') objtop.style.height='0%' 
		
		if(par=='Bsshedule') objbottom.style.height='0px'
		if(par=='Bsshedule') objbottom.style.width='45%'
		if(par=='Bsshedule') objtop.style.width='45%'
		if(par=='Bsshedule') objtop.style.height='100%'
		if(par=='Bsshedule') objdata.style.width='35%'
		
		if(par=='Left') objbottom.style.width='0%'
		if(par=='Left') objdata.style.width='100%'
		if(par=='Left') objdata.style.height='100%'
		if(par=='Left') objtop.style.width='30%'		
		if(par=='Left') objbottom.style.height='0px'
		if(par=='Left') objtop.style.height='0%' 
		if(par=='Left') objbottom.style.display='none'
		
		if(par=='Leftm') objbottom.style.width='0%'
		if(par=='Leftm') objdata.style.width='100%'
		if(par=='Leftm') objdata.style.height='100%'
		if(par=='Leftm') objtop.style.width='40%'		
		if(par=='Leftm') objbottom.style.height='0px'
		if(par=='Leftm') objtop.style.height='0%' 
		if(par=='Leftm') objbottom.style.display='none'
		
		if(par=='List-Data Layout2') objbottom.style.width='0%' 
		if(par=='List-Data Layout2') objdata.style.width='100%'
		if(par=='List-Data Layout2') objdata.style.height='100%'
		if(par=='List-Data Layout2') objtop.style.width='40%'		
		if(par=='List-Data Layout2') objbottom.style.height='0px'
		if(par=='List-Data Layout2') objtop.style.height='100%' 
		if(par=='List-Data Layout2') objbottom.style.display='none'
		
		// if(par=='Top Bottom') objtop.style.width='100%'
		// if(par=='Top Bottom') objtop.style.height='40%'
		// if(par=='Top Bottom') objbottom.style.height='400px' 
		// if(par=='Top Bottom') objbottom.style.width='100%'
		// if(par=='Top Bottom') objdata.style.height='100%'
		// if(par=='Top Bottom') objdata.style.width='0%'
		// if(par=='Top Bottom') objdata.style.display='none'
		
		if(par=='Top Bottom'){
		   objtop.style.width='100%'
		   objtop.style.height='40%'
		   objbottom.style.height='400px'
		   objbottom.style.width='100%'
		   objdata.style.height='100%'
		   objdata.style.width='0'
		   objdata.style.display='none'
		}
		
	}
	
	var fxstate='xx';
	function resizeX(par){
		w=window.name;
		if((par=='ft') && (fxstate=='xx' )){ //  full top
			parent.document.getElementById('tdtop').style.display='none'
			parent.document.getElementById('tdbottom').style.display='none'
			parent.document.getElementById('tddata').style.display='none'
			parent.document.getElementById('td'+w).style.display='block'
			parent.document.getElementById('td'+w).style.width='100%'
			parent.document.getElementById('td'+w).style.height='100%'
			fxstate='ft';
			return true;
		}
		if(fxstate!='xx'){
			parent.document.getElementById('tdtop').style.width='65%'
			parent.document.getElementById('tdtop').style.height='65%'
			parent.document.getElementById('tdbottom').style.width='35%'
			parent.document.getElementById('tdbottom').style.height='35%'
			parent.document.getElementById('tddata').style.height='100%'
			parent.document.getElementById('tddata').style.width='35%'
			parent.document.getElementById('tdtop').style.display='block'
			parent.document.getElementById('tdbottom').style.display='block'
			parent.document.getElementById('tddata').style.display='block'
			fxstate='xx';
			return true;
		}
	}
	
	function patternCheck(obj,objEvent,pat){
		//  obj =this, objEvent=event, pat='actual pattern you wanted'
		//  pattern x-any, A-upper, a-Lower, 9-Numeric and decimal, $-#$-/,
		//  usage onkeypress='return patcheck(this,event,"999-999-9999");'
		if (pat.toUpperCase()=="PHONE") pat='999-999-9999';
		if (pat.toUpperCase()=="U") pat='AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
		if (pat.toUpperCase()=="L") pat='aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
		if (pat.toUpperCase()=="X") pat='xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
		pat=pat+'*';
		low='~_ abcdefghijklmnopqrstuvwxyz,$-.();/1234567890';
		upp='~_ ABCDEFGHIJKLMNOPQRSTUVWXYZ,$-.();/1234567890';
		spl='~_#$-/,@';
		dot='.';   //  auto replacement pattern
		dash='-';  //  auto replacement pattern
		num='___-0.123456789';
		iKeyCode=0;
		if(window.event){
			iKeyCode = objEvent.keyCode;
		}
			else if(objEvent.which){
			iKeyCode = objEvent.which;
		}
		var str1=obj.value;
		var strlen=str1.length;
		var actualkey=String.fromCharCode(iKeyCode)
		
		actualkeyUpper=actualkey.toUpperCase();
		actualkeyLower=actualkey.toLowerCase();
		patstr=pat.substr(strlen,1)
		patstrnext=pat.substr(strlen+1,1)
		iKeyCode=45;
		if (patstr=='*') {
			alertMessage('Data Complete');
			return false;
		}
		if (patstrnext==dot){
			obj.value=str1+actualkey+dot;
			return false;
		}	
		if (patstrnext==dash){
			obj.value=str1+actualkey+dash;
			return false;
		}
		if ((patstr=='9') && (num.indexOf(actualkey)<0)){
			alertMessage('Expecting only \n['+num+'] characters');
			return false;
		}		
		if ((patstr=='9') && (num.indexOf(actualkey)>0)){
			obj.value=str1+actualkey;
			return false;
		}	
		if ((patstr=='9') && (actualkey=='.') && (str1.indexOf('.'))>0){
			alertMessage('Decimal already present');
			return false;
		}
		if ((patstr=='$') && (spl.indexOf(actualkey)<0)){
			alertMessage('Expecting only \n['+spl+'] characters');
			return false;
		}	
		if ((patstr=='$') && (spl.indexOf(actualkey)>0)){
			obj.value=str1+actualkey;
			return false;
		}
		if ((patstr=='A') && ((upp.indexOf(actualkey)>0) || (low.indexOf(actualkey)>0))){
			obj.value=str1+actualkeyUpper;
			return false;
		}	
		if (patstr=='x' && ((low.indexOf(actualkey)<0) || (upp.indexOf(actualkey)<0))){
			obj.value=str1+actualkey;
			return false;
		}			
		if (patstr=='a' && ((upp.indexOf(actualkey)>0) || (low.indexOf(actualkey)>0))){
			obj.value=str1+actualkeyLower; 
			return false;
		}	
		return false; 
	}
	//Used in Terms Control
	function openpicker(id){ 
		url = "pw_db_utils.php?rty=picker&id="+id;
		window.open(url,"Editor","height=430 width=300 left=100 top=200 scrollbars=0 resizable=1");
	} 
	function openupload(url){ 
        window.open(url,"Editor","height=400, width=450 left=100 top=200  resizable=1"); //scrollbars=0
	}
	function opennormalpicker(typ,ctrls){
		//alert(parent.document.getElementById('popup'));
		paramurl="&x=1";
		var paramarr=ctrls.split(',');
		for (i=0;i<paramarr.length;i++){
			o=document.getElementById(paramarr[i]);
			if(o) paramurl += '&param'+i+'='+o.value;
		}
		url = "do.php?_&pw=pw_datapicker.php&rty="+typ+paramurl;
		parent.document.getElementById('popup').src=url;
		parent.document.getElementById('popup').style.display='block';
		parent.document.getElementById('popup').style.top=150;
		parent.document.getElementById('popup').style.left=200;
		parent.document.getElementById('popup').style.width=350;
		parent.document.getElementById('popup').style.height=400;
		
	
	}	
	function opendatapicker(id,hid,hpg,typ,ctrls,s){
		var paramarr=ctrls.split(",");
		paramurl="&x=1&hpg="+hpg+"&hid="+hid;
		if(s) paramurl +='&search='+s;
		for (i=0;i<paramarr.length;i++){
			o=document.getElementById(paramarr[i]);
			if(o) paramurl += '&param'+i+'='+o.value;
		}
		
		url = "pw_datapicker.php?rty="+typ+"&id="+id+paramurl;
		
		parent.document.getElementById('popup').src=url;
		parent.document.getElementById('popup').style.display='block';
		parent.document.getElementById('popup').style.top=150;
		parent.document.getElementById('popup').style.left=200;
		parent.document.getElementById('popup').style.width=350;
		parent.document.getElementById('popup').style.height=400;
		
		//window.open(url,"Editor","height=400 width=350 left=200 top=150 scrollbars=0 resizable=1");
	}
	
	function toggleDisplay2(objId){    // Toggles the display of any object display
        obj=document.getElementById(objId)
		if (obj.style.display=="") obj.style.display='block'
        if (obj.style.display=='block') {
           obj.style.display='none';
           }else{
           obj.style.display='block';
           }
    }
	
	function openURL(url,params){
		myWindow = window.open(url,"Editor",params); 
		myWindow.focus();
	}
	//used in Stepped control
	function setScale(fld,valu){  //  use for scaling control
		document.getElementById(fld).value=valu
		for(i=0;i<=10;i++){
			ob=document.getElementById('scaleimg'+fld+i)
			ob.src='res/images/grey.gif'
			if(i==valu)document.getElementById('scaleimg'+fld+i).src='res/images/red.gif'
		}
		setOpenerSessionRefresh(fld);

	}
	//Used in Slider control
	function slideme2(cname,xnum){
		temp=document.getElementById(cname).value;
		v=parseInt(temp);
		document.getElementById(cname+'_'+v).src='res/images/slider_line.gif';
		document.getElementById(cname).value=xnum;
		document.getElementById(cname+'_'+xnum).src='res/images/slider_bullet.gif';	
		setOpenerSessionRefresh(cname);
	}
	
	//  Prints the contents into printer by opening into a new frame...
	function printDiv(dx){
		var divToPrint=document.getElementById(dx);
		var newWin=window.open('','Print-Window','width=1000,height=650,top=50,left=50');
		newWin.document.open();
		newWin.document.write('<html><head><style>#in {display:none}</style><body   onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
		newWin.document.close();
		setTimeout(function(){newWin.close();},10);

	}
	
	function myPrint(divName){
		var printContents = document.getElementById(divName).innerHTML;
		var originalContents = document.body.innerHTML;
		document.body.innerHTML = printContents;
		window.print();
		document.body.innerHTML = originalContents;
	}
	//Future date validation (19-02-2016)
	function todayFuture(o,dd,mm,yy,fld){
		var today = new Date();
		var tdd = today.getDate();
		var tmm = today.getMonth()+1; //January is 0!
		var tyy = today.getFullYear();
		if(yy<tyy){
			alertMessage('Invalid Date.. only Future dates are allowed');
			//setTimeout(fld+".focus();",0);
			return false;
		}
		if(yy==tyy && mm<tmm){
			alertMessage ('Invalid Date.. only Future dates are allowed');
			//setTimeout(fld+".focus();",0);
			return false;
		}
		if(yy==tyy && mm==tmm && dd<tdd){
			alertMessage ('Invalid Date..only Future dates are allowed');
			//setTimeout(fld+".focus();",0);
			return false;
		}
		return true;
	}
	//past date validation
	function todayPast(o,dd,mm,yy,fld){
		var today = new Date();
		var tdd = today.getDate();
		var tmm = today.getMonth()+1; //January is 0!
		var tyy = today.getFullYear();
		if(yy>tyy){
			alertMessage ('Invalid Date. Only Past dates are allowed');
			setTimeout(fld+".focus();",0);
			return false;
		}
		if(yy==tyy && mm>tmm){
			alertMessage ('Invalid Date. Only Past dates are allowed');
			setTimeout(fld+".focus();",0);
			return false;
		}
		if(yy==tyy && mm==tmm && dd>tdd){
			alertMessage ('Invalid Date. Only Past dates are allowed');
			o.value=''
			setTimeout(fld+".focus();",0);
			return false;
		}
		return true;
	}
	//  Manages the date
	function manageDate(o,t,b,e,fb,fe,fp,fld){ //fp --> future past
		if (o.value.length==6) o.value=o.value.substr(0,2)+'-'+o.value.substr(2,2)+'-'+o.value.substr(4,2);
		if ( (o.value=='t') || (o.value=='T')) o.value=t;
		if ( (o.value=='b') || (o.value=='B')) o.value=b;
		if ( (o.value=='e') || (o.value=='E')) o.value=e;
		if ( (o.value=='fb') || (o.value=='FB')) o.value=fb;
		if ( (o.value=='fe') || (o.value=='FE')) o.value=fe;
		// T - Today
		// B - Month first
		// E - Month End
		// FB - Financial Begining
		// FE - Financial End
		checkDate(o,'01-01-1901','31-12-2099');
		dd = (o.value.substr(0,2));
		mm = (o.value.substr(3,2));
		yy = (o.value.substr(6,4));
		ymd = (yy+'-'+mm+'-'+dd);
		if(yy.length!=4 && yy.length!=0){
			alertMessage ('Invalid Year');
			setTimeout(fld+".focus();",0);
			o.value=''
			o.focus();
			return ; 
	    }
	   if (((ymd<'1901-01-01') || (ymd>'2099-12-31')) && ymd!='0000-00-00'){
		   //////////// o.value=t;
			alertMessage ('Invalid Date');
			setTimeout(fld+".focus();",0);
		  return;
		}
		ctrl     = o.name.substr(0,3).toUpperCase();
		ctrlname = o.name.toUpperCase().substr(3);
		if(fp=='Future')todayFuture(o,dd,mm,yy,fld);
		if(fp=='Past')todayPast(o,dd,mm,yy,fld);
	}
	
	// Checking the date
	function checkDate(cont1,dlow,dhigh){
		inDate=cont1.value
		//  dlow and high ,indate format is dd-mm-yy
		if (inDate==""){
			inDate="00-00-0000"
			return
		   }
		dateStyle='DMY';
		delimiter="-";
		err="";
		pos1=inDate.indexOf(delimiter) ; dd=parseInt(inDate.substr(0,pos1),10)
		pos2=inDate.indexOf(delimiter,pos1+1) ; mm=parseInt(inDate.substr(pos1+1,(pos2-pos1-1)),10)
		yy=parseInt(inDate.substr(pos2+1),10)
		if (yy>0 && yy<100) yy=yy+2000
		ddLimit=30
		if (mm==2) ddLimit=28
		if (mm==1 || mm==3 || mm==5 || mm==7 || mm==8 || mm==10 || mm==12) ddLimit=31
		leap=parseInt(yy/4)*4
		if (leap==yy && mm==2) ddLimit=29
		if (dd<1 || dd>ddLimit || mm<1 || mm>12 || yy<1)  err="Invalid Date"
		if (err!="" && inDate!='00-00-0000'){
			cont1.focus()
			alertMessage(err+" ["+dd+"-"+mm+"-"+yy+"]");
			cont1.value=''
			cont1.focus();
			return false;
		}else{
			if(inDate!='00-00-0000'){
				if(dd < 10) dd="0"+dd;
				if(mm < 10) mm="0"+mm;
				dmy=dd+'-'+mm+'-'+yy;
				cont1.value=dmy
				dmy = dmy2ymd(dmy);
				dlow = dmy2ymd(dlow);
				dhigh = dmy2ymd(dhigh);
				if ((isNaN(dd)) || (isNaN(mm)) || (isNaN(yy))){
					alertMessage('Invalid Date');
					cont1.value=''
					cont1.focus();
					return false;
				}
				if (dmy<dlow){
					alertMessage('Valid Date Range is '+dlow+' to '+dhigh);
					cont1.value=''
					cont1.focus();
					return false;
				}
				if (dmy>dhigh){
					alertMessage('Valid Date Range is '+dlow+' to '+dhigh);
					cont1.value='';
					cont1.focus();
					return false;
				}
				return true;
			}
		}
	}
	
	//This will the format dd-mm-yy to yy-mm-dd
	function dmy2ymd(dmy){
		temp = dmy.substr(6,4)+'-'+dmy.substr(3,2)+'-'+dmy.substr(0,2);
		return temp;
	}
	
	//This will the format yy-mm-dd to dd-mm-yy
	function ymd2dmy(ymd){
		temp = ymd.substr(8,2)+'-'+ymd.substr(5,2)+'-'+ymd.substr(0,4);
		return temp;
	}
	
	// Java script Function that will allow only Numeric characters
    function AllowNumeric(objEvent,obj){
			valu=obj.value;
			valuedecimals=valu.split('.');
			decimals = valuedecimals.length;
			var iKeyCode;
			if(window.event){
               iKeyCode = objEvent.keyCode;
            }
            else if(objEvent.which){
                  iKeyCode = objEvent.which;
            }
			//alert(iKeyCode);
			if  (iKeyCode==46 && decimals>1)   {  //  46 is decimal && decimals>1
				alertMessage('Only one decimal allowed...');
				iKeyCode=0;
				return false;
			}
			objid = '';
			if(obj) objid= obj.id;
            if(((iKeyCode<=1 && iKeyCode>=7) || (iKeyCode>=9 && iKeyCode<=45) || (iKeyCode>=58 && iKeyCode<=255) || iKeyCode==47) && iKeyCode!=45){
                if (iKeyCode!=13 && iKeyCode!=45) {
                    alertMessage('Numbers Only',objid);
					$('#'+objid).blur();
                    iKeyCode=0;
                     return false;
                }
				alertMessage('Only Numaric values are allowed.....',objid);
				$('#'+objid).blur();
				iKeyCode=0;
				return false;
            }
			if (iKeyCode==45 && objid!='' && objid!='txt__1R5MSX0k' && objid!='txt__1R5MSX' && objid!='txt__1km5RSX' && objid!='txt__1km5RSX0k' ) {
				alertMessage(' Negative Values are not allowed',objid);
				$('#'+objid).blur();
				iKeyCode=0;
				return false;
            }
            return true; 
    } 
	
	
	scrollpos = function() { 
		return { 
	'x': window.pageXOffset ? window.pageXOffset : document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft, 'y': window.pageYOffset ? window.pageYOffset : document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop 
	}}; 
	
//  thread control JS
	var oldThreadValue='';
	function showthread(v){
		if(v==1){
			document.getElementById('ptxt').style.display='block';
			document.getElementById('ctxa').style.display='none';
			}else{
			document.getElementById('ptxt').style.display='none';
			document.getElementById('ctxa').style.display='block';
		}
	}
	function pushthread(curr,pr){
		if(oldThreadValue=='') oldThreadValue = document.getElementById(pr).value;
			//alert(oldThreadValue);

		//oldThreadValue = prev=document.getElementById(pr);

		v=oldThreadValue+'<hr>'+curr.value;
		document.getElementById('ptxt').innerHTML=v;
		document.getElementById(pr).value=v;
	}
	
	// Copy the value from field to another field
	function DuplicateField(from,to){
		document.getElementById(to).value=document.getElementById(from).value;
	}
	
	//  end thread control JS

	function stats1(ctr,cty){
		o=document.getElementById(ctr);
		xv=o.value;
		xv=xv.replace(/[\n\r]/g, ',');
		o.value=xv;
		//alert(xv);
		arr1=xv.split(",");
		kount=arr1.length;
		tot=0;
		mx= -999999999;
		mi= 999999999;
		str='';
		for (i=0;i<kount;i++){
			v=parseFloat(arr1[i]);
			if(isNaN(v)) v=0;
			tot=tot+v;
			if(mx<v) mx=v;
			if(mi>v) mi=v;
		}
		avg=tot/kount;
		tot=Math.round(tot,3);
		avg=Math.round(avg * 100)/100
		dev=0;
		for (i=0;i<kount;i++){
			v=parseFloat(arr1[i]);
			if(isNaN(v)) v=0;
			dev=dev+((v-avg)*(v-avg));
			v=v*100/mx
			if(i<(kount-1)) str=str+v.toString()+',';
			if(i==(kount-1)) str=str+v.toString();
		}
		stdev=Math.sqrt(dev/kount);
		stdev=Math.round(stdev * 100)/100
		coefdev=avg/stdev
		coefdev=Math.round(coefdev * 100)/100
		ran=mx-mi;
		ran=Math.round(ran * 100)/100
		cpk=ran/stdev;
		w=300;
		bw=(w-(2*(kount+2)))/kount
		bw=Math.round(bw);
		cpk=Math.round(cpk * 100)/100
		//alert('Total:'+tot+'\nKount:'+kount+'\nAverage:'+avg+'\nMax:'+mx+'\nStd Dev:'+stdev);
		//im=document.getElementById('img1');img1.src='https://chart.googleapis.com/chart?cht=bvg&chs=250x100&chd=t:60,40,80&chl=Hello|World|abc';
		im=document.getElementById('img1');
		im.src='https://chart.googleapis.com/chart?cht='+cty+'&chbh='+bw+',2,2&chs=290x100&chd=t:'+str;
		htm='<table style=\"width:'+w+'px\" class=list>'
		//htm=htm+'<tr><td>Data</td><td>'+xv+'</td></tr>';
		htm=htm+'<tr><td>Total</td><td>'+tot+'</td></tr>';
		htm=htm+'<tr><td>Min</td><td>'+mi+'</td></tr>';
		htm=htm+'<tr><td>Max</td><td>'+mx+'</td></tr>';
		htm=htm+'<tr><td>Range</td><td>'+ran+'</td></tr>';
		htm=htm+'<tr><td>Count</td><td>'+kount+'</td></tr>';
		htm=htm+'<tr><td>Average</td><td>'+avg+'</td></tr>';
		htm=htm+'<tr><td nowrap>Std Deviation</td><td>'+stdev+'</td></tr>';
		htm=htm+'<tr><td nowrap>Coef Deviation</td><td>'+coefdev+'</td></tr>';
		htm=htm+'<tr><td nowrap>CPk</td><td>'+cpk+'</td></tr>';
		htm=htm+'</table>';
		document.getElementById('tx').innerHTML=htm
	}
	
	
	//  finds the difference between to date controls, Returns days lapsed
	function pwdatediff(ctr1,ctr2,delim){
		xd1=document.getElementById(ctr1).value;
		xd2=document.getElementById(ctr2).value;
		arr1=xd1.split(delim); // delim is generally - hyphen char
		arr2=xd2.split(delim);
		d1=arr1[1]+'/'+arr1[0]+'/'+arr1[2];
		d2=arr2[1]+'/'+arr2[0]+'/'+arr2[2];
		dd1=new Date(d1);
		dd2=new Date(d2);
		var datediff = dd1.getTime() - dd2.getTime(); 
		v=(datediff / (24*60*60*1000)); 
		return v;
	}
	function emailcheck(obj,objid) { 
	
		str=obj.value;
		str=trimAll(str);
		obj.value=str;

		if (str=='') return true;

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		var err=''
		if (str.indexOf(at)==-1)                                                    err = "Invalid E-mail ID"
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)     err = "Invalid E-mail ID"
		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)  err = "Invalid E-mail ID"
		if (str.indexOf(at,(lat+1))!=-1)                                            err = "Invalid E-mail ID";
		if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)       err = "Invalid E-mail ID"
		if (str.indexOf(dot,(lat+2))==-1)                                           err = "Invalid E-mail ID"
		if (str.indexOf(" ")!=-1)                                                   err = "Invalid E-mail ID"

		if (err==''){

		   return true
		}else{
			alertMessage("Invalid Email..  Please correct",objid);
			return false
		}
	}
	function trimAll(sString){
		while (sString.substring(0,1) == ' '){
		   sString = sString.substring(1, sString.length);
		}
		while (sString.substring(sString.length-1, sString.length) == ' '){
		   sString = sString.substring(0,sString.length-1);
		}
		return sString;
	}
 

	function promptMess(elm,mess,icon_prev,icon_next){
		prompos=document.getElementById('promx');
		
		obj1=document.getElementById(elm);
		w=window.innerWidth
		oimg=document.getElementById('helpmeimg');
		if(obj1){
			elpos=findPos(obj1);
			oimg.style.top=elpos[0]+17;
			oimg.style.left=elpos[1]+5;
			leftpoint=elpos[1];
			if(leftpoint>(w-200)) leftpoint=w-200;
			prompos.style.top=elpos[0]+24;
			prompos.style.left=leftpoint-5;
			prompos.innerHTML="<b>Plumware Help</b><img src='res/css/standard/close.png' onclick=\"document.getElementById('helpmeimg').style.display='none';document.getElementById('promx').style.display='none';\" width='13' height='13' title='Close' style='cursor:hand; position:absolute; top:8px;right:8px;'><hr class='hr-style'>"+mess+"<hr class='hr-style'><div style='float:right;'>"+icon_prev+icon_next+"</div>";
		}
	}
	function findPos(obj) {
		var obj2 = obj;
		var curtop = 0;
		var curleft = 0;
		if (document.getElementById || document.all) {
			do  {
				curleft += obj.offsetLeft-obj.scrollLeft;
				curtop += obj.offsetTop-obj.scrollTop;
				obj = obj.offsetParent;
				obj2 = obj2.parentNode;
				while (obj2!=obj) {
					curleft -= obj2.scrollLeft;
					curtop -= obj2.scrollTop;
					obj2 = obj2.parentNode;
				}
			} while (obj.offsetParent)
		} else if (document.layers) {
			curtop += obj.y;
			curleft += obj.x;
		}
		return [curtop, curleft];
	}   // end of findPos()
	//  replaces all occurances
	function replaceAll(find, replace, str) {
	  return str.replace(new RegExp(find, 'g'), replace);
	}
	
	// get lat long
	function getLocation(ctr) {
		if (navigator.geolocation) {
			var startPos;
				navigator.geolocation.getCurrentPosition(function(position) {
				startPos = position;
				document.getElementById(ctr).value = startPos.coords.latitude+','+startPos.coords.longitude;
			  });		
		}else { 
			alertMessage("Geolocation is not supported by this browser.");
		}
	}
	
	// tabs js //
	$(document).ready(function(){
			$('.tabs-block table td:nth-child(1)').addClass('db-menu-sel');
			$('.db-menu').click(function(){
				$('.db-menu').removeClass('db-menu-sel');
				$(this).addClass('db-menu-sel');
			});
		});
	//For CSV Based Control Filling
	$(function () {
	$("#csvupload").bind("click", function () {
		global1="";
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
        if (regex.test($("#fileUpload").val().toLowerCase())) {
            if (typeof (FileReader) != "undefined") {
                var reader = new FileReader();
                reader.onload = function (e) {
                    //var table = $("<table />");
                    var rows = e.target.result.split("\n");
                    for (var i = 0; i < rows.length-1; i++) {
                        //var row = $("<tr />");
                        var cells = rows[i].split(",");
                        for (var j = 0; j < cells.length; j++) {
                            //var cell = $("<td />");
                           // cell.html(cells[j]);
							global1 = global1+cells[j]+',';
							//row.append(cell);
                        }
						global1 = global1.slice(0,-1);
						global1 = global1+';'; 
						//alert(global1);
                        //table.append(row);
                    }
					global1=global1.replace(/(\r\n|\n|\r)/gm,"");

                    //$("#dvCSV").html('');
                    //$("#dvCSV").append(table);
                }
                reader.readAsText($("#fileUpload")[0].files[0]);
            } else {
                alertMessage("This browser does not support HTML5.");
            }
        } else {
            alertMessage("Please upload a valid CSV file.");
        }
		
    });
});

//  you can set any control as manadory on the flu using javascript

function setMandatory(ctr){
	tx=document.getElementById(ctr).getAttribute("tags");
	document.getElementById(ctr).setAttribute("tags",tx+"~Required");
}

// Ajax div management sastry jun 2015
function ajx(e,pg,q,h,w) {
	oxy=MouseXY(e);
	pos = scrollpos(); 
	ScrollY=pos.y;
	if(h=='') h='100px';
	if(w=='') h='60px';
    d=document.getElementById('ajxdiv');
	d.style.left=oxy.x-10;
	d.style.top=oxy.y+10; //-ScrollY;
	d.style.display='block'
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('ajxdiv').innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open('GET',pg+'?q='+q,true);
	xmlhttp.send();
	d.style.display='block'
	
}
//To show error in edit page (19-06-2015)
 function editError(msg,e){
	o2=document.getElementById('edterr');
	if(o2) o2.innerHTML='<font color=ff0000><b>'+msg+'</b></font>'
	return false
}

// set changed/picked values in to session for popups
	function setOpenerSessionRefresh(str1){
		vArray = str1.split(',');
		url='pw_db_edit.php?sr=1';
		for(i=0;i<(vArray.length);i++){
			k=vArray[i];
			o = parent.frames['data'].document.getElementById(k);
			// alert(o.value)
			// o = window.opener.document.getElementById(k);
			if(o) url=url+'&'+o.name+'='+o.value;
			
		}
		myframe = parent.frames['data'].document.getElementById('ifdatapick');
		if(myframe) myframe.src=url;
		
	}

// set changed/picked values in to session for forms or onchange actions 
	function setSelfSessionRefresh(str1){
		vArray = str1.split(',');
		url='pw_db_edit.php?sr=1';
		for(i=0;i<(vArray.length);i++){
			k=vArray[i];
			o = window.document.getElementById(k);
			if(o) url=url+'&'+o.name+'='+o.value;
		}
		myframe=window.document.getElementById('ifdatapick'); 
		if(myframe) myframe.src=url;
	}
	function getPromptEntity(mess,name,code,status){
			// alert('xxx');
			v1 = document.getElementById(name).value;
			v2 = document.getElementById(code).value;
			v3 = document.getElementById(status).value;
			if(v3=='Active' && v2=='CASH VENDOR'){
				reply = prompt(mess, v1);
				if(!reply)	reply = v1;
				document.getElementById(name).value = reply
			}else{
				if(v2!='CASH VENDOR')	alert('Name can not be changed for this Vendor'); 
				else if(v3!='Active')	alert('Document is posted or closed etc...  no editing possible');
			}
	}
	 function AllowAlpha(objEvent){
		 if(window.event){
               iKeyCode = objEvent.keyCode;
            }
            else if(objEvent.which){
                  iKeyCode = objEvent.which;
            }
       if ((iKeyCode==13) || (iKeyCode==16) || (iKeyCode==8)) {  //Enter or shift keys or backspace
            return true;
        }
		if((iKeyCode>=97 && iKeyCode<=122) || (iKeyCode>=65 && iKeyCode<=90) || (iKeyCode==32)){
			return true;
		}else{
			alertMessage('Alphabets Only');
			return false;
		}
		
        if( (iKeyCode>=1 && iKeyCode<=12) || (iKeyCode>=14 && iKeyCode<=31)  || (iKeyCode>=33 && iKeyCode<37) || (iKeyCode>=33 && iKeyCode<=36) || (iKeyCode>=42 && iKeyCode<44) || (iKeyCode>=91 && iKeyCode<=94) || (iKeyCode==96) ||(iKeyCode>=123 && iKeyCode<=255 )){
			alertMessage('Alphabets Only-');
            return false;
        }
        return true;
    }  
	function Specialcharacters(objEvent){ 
	
		 if(window.event){ 
               iKeyCode = objEvent.keyCode;
            }
            else if(objEvent.which){
                  iKeyCode = objEvent.which;
            }
         if( (iKeyCode>=32 && iKeyCode<=44) || (iKeyCode==47)  || (iKeyCode>=58 && iKeyCode<63) || (iKeyCode>=91 && iKeyCode<=94) || (iKeyCode==96) || (iKeyCode>123) ){
			alertMessage('Special characters are not allowed');
            return false;
        } else
        return true; 
		
    }
	function CalTdsValues() {
		onAmt = document.getElementById('txt__1XRE1q').value;
		percent = document.getElementById('txt__1XREG5m').value;
		value = onAmt * (percent/100) + 0.5;
		if(isNaN(value))	value = 0;
		document.getElementById('txt__1XREYe1fqX').value = parseInt(value);
	}
