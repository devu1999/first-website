<?php

/* @Live/getLastVisitsStart.twig */
class __TwigTemplate_9830297348f7b570a600477b9f509494d64fd150bc03d6d7a937bfbf8e782631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["maxPagesDisplayedByVisitor"] = 100;
        // line 3
        echo "
<ul id=\"visitsLive\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["visitors"] ?? $this->getContext($context, "visitors")), "getRows", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 6
            echo "        <li id=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "idVisit"), "method"), "html", null, true);
            echo "\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "idVisit", array()), "html", null, true);
            echo "</div>
            <div title=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo "\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">";
            // line 9
            echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "serverTimestamp"), "method");
            echo "</span>
                ";
            // line 10
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Live.visitorLogWidgetViewBeforeVisitInfo", $context["visitor"]));
            echo "
                ";
            // line 11
            $context["year"] = twig_date_format_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "serverTimestamp"), "method"), "Y");
            // line 12
            echo "                <span class=\"realTimeWidget_datetime\">";
            echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["visitor"], "getColumn", array(0 => "serverDatePretty"), "method"), array(($context["year"] ?? $this->getContext($context, "year")) => " ")), "html", null, true);
            echo " - ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "serverTimePretty"), "method"), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitDuration"), "method") > 0)) {
                echo "(";
                echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitDurationPretty"), "method");
                echo ")";
            }
            echo "</span>
                ";
            // line 13
            if ( !twig_test_empty((($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method"), false)) : (false)))) {
                // line 14
                echo "                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ViewVisitorProfile")), "html", null, true);
                echo " ";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method"))) {
                    echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method");
                }
                echo "\" data-visitor-id=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
                echo "\">
                        ";
                // line 15
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method"))) {
                    echo "<br/>";
                }
                // line 16
                echo "                        <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/>
                        ";
                // line 17
                echo (($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method"), "")) : (""));
                echo "
                    </a>
                ";
            }
            // line 20
            echo "                <br />

                ";
            // line 22
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Live.renderVisitorIcons", $context["visitor"]));
            echo "

                <span class=\"referrer\">
                    ";
            // line 25
            $this->loadTemplate("@Referrers/_visitorDetails.twig", "@Live/getLastVisitsStart.twig", 25)->display(array_merge($context, array("visitInfo" => $context["visitor"])));
            // line 26
            echo "                 </span>
            </div>
            <div id=\"";
            // line 28
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "idVisit"), "method"), "html_attr");
            echo "_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo "\"
                      >";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo ":</span>&nbsp;
                ";
            // line 32
            $context["col"] = 0;
            // line 33
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 34
                echo "                    ";
                if (($this->getAttribute($context["loop"], "index", array()) <= ($context["maxPagesDisplayedByVisitor"] ?? $this->getContext($context, "maxPagesDisplayedByVisitor")))) {
                    // line 35
                    echo "
                        ";
                    // line 36
                    if ((($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder") || ($this->getAttribute($context["action"], "type", array()) == "ecommerceAbandonedCart"))) {
                        // line 37
                        echo "                            ";
                        ob_start();
                        // line 38
                        if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                            // line 39
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_EcommerceOrder")), "html", null, true);
                        } else {
                            // line 41
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AbandonedCart")), "html", null, true);
                        }
                        // line 43
                        echo "
 - ";
                        // line 44
                        if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                            // line 45
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            echo ":";
                        } else {
                            // line 47
                            ob_start();
                            // line 48
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                            // line 50
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LeftInCart", ($context["revenueLeft"] ?? $this->getContext($context, "revenueLeft")))), "html", null, true);
                            echo ":";
                        }
                        // line 51
                        echo " ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), ($context["idSite"] ?? $this->getContext($context, "idSite"))));
                        // line 53
                        echo "
 - ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                        // line 54
                        echo "
";
                        // line 55
                        if ( !twig_test_empty($this->getAttribute($context["action"], "itemDetails", array()))) {
                            // line 56
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "itemDetails", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                // line 57
                                echo "
# ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "itemSKU", array()), "html", null, true);
                                if ( !twig_test_empty($this->getAttribute($context["product"], "itemName", array()))) {
                                    echo ": ";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "itemName", array()), "html", null, true);
                                }
                                if ( !twig_test_empty($this->getAttribute($context["product"], "itemCategory", array()))) {
                                    echo " (";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "itemCategory", array()), "html", null, true);
                                    echo ")";
                                }
                                echo ", ";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                                echo ": ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "html", null, true);
                                echo ", ";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Price")), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["product"], "price", array()), ($context["idSite"] ?? $this->getContext($context, "idSite"))));
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                        }
                        // line 60
                        echo "                            ";
                        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 61
                        echo "                            <span title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
                        echo "\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"";
                        // line 62
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                        echo "\"/>
                                ";
                        // line 63
                        if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                            // line 64
                            echo "                                    ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), ($context["idSite"] ?? $this->getContext($context, "idSite"))));
                            echo "
                                ";
                        }
                        // line 66
                        echo "                            </span>

                        ";
                    } else {
                        // line 69
                        echo "
                            ";
                        // line 70
                        $context["col"] = (($context["col"] ?? $this->getContext($context, "col")) + 1);
                        // line 71
                        echo "                            ";
                        if ((($context["col"] ?? $this->getContext($context, "col")) >= 9)) {
                            // line 72
                            echo "                                ";
                            $context["col"] = 0;
                            // line 73
                            echo "                            ";
                        }
                        // line 74
                        echo "\t\t\t    
                            ";
                        // line 75
                        if ($this->getAttribute($context["action"], "url", array(), "any", true, true)) {
                            // line 76
                            echo "                            <a href=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
                            echo "\" target=\"_blank\">
                            ";
                        }
                        // line 78
                        echo "                                ";
                        if (($this->getAttribute($context["action"], "type", array()) == "action")) {
                            // line 80
                            ob_start();
                            // line 81
                            if ( !twig_test_empty($this->getAttribute($context["action"], "pageTitle", array()))) {
                                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute($context["action"], "pageTitle", array())));
                            }
                            // line 82
                            echo "
";
                            // line 83
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "
";
                            // line 84
                            if ($this->getAttribute($context["action"], "timeSpentPretty", array(), "any", true, true)) {
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeOnPage")), "html", null, true);
                                echo ": ";
                                echo $this->getAttribute($context["action"], "timeSpentPretty", array());
                            }
                            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                            // line 86
                            echo "                                    <img src=\"plugins/Live/images/file";
                            echo \Piwik\piwik_escape_filter($this->env, ($context["col"] ?? $this->getContext($context, "col")), "html", null, true);
                            echo ".png\" title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif ((($this->getAttribute(                        // line 87
$context["action"], "type", array()) == "outlink") || ($this->getAttribute($context["action"], "type", array()) == "download"))) {
                            // line 88
                            echo "                                    <img class='iconPadding' src=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 89
                            if ($this->getAttribute($context["action"], "url", array(), "any", true, true)) {
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
                                echo " - ";
                            }
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif (($this->getAttribute(                        // line 90
$context["action"], "type", array()) == "search")) {
                            // line 91
                            echo "                                    <img class='iconPadding' src=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 92
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_SubmenuSitesearch")), "html", null, true);
                            echo ": ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "siteSearchKeyword", array()), "html", null, true);
                            echo " - ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif ( !twig_test_empty((($this->getAttribute(                        // line 93
$context["action"], "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "eventCategory", array()), false)) : (false)))) {
                            // line 94
                            echo "                                    <img  class=\"iconPadding\" src='";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "'
                                        title=\"";
                            // line 95
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Event")), "html", null, true);
                            echo " ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventCategory", array()), "html", null, true);
                            echo " - ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventAction", array()), "html", null, true);
                            echo " ";
                            if ($this->getAttribute($context["action"], "eventName", array(), "any", true, true)) {
                                echo "- ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventName", array()), "html", null, true);
                            }
                            echo " ";
                            if ($this->getAttribute($context["action"], "eventValue", array(), "any", true, true)) {
                                echo "- ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "eventValue", array()), "html", null, true);
                            }
                            echo "\"/>
                                ";
                        } elseif (((($this->getAttribute(                        // line 96
$context["action"], "type", array()) == "goal") || ($this->getAttribute($context["action"], "type", array()) == twig_constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER"))) || ($this->getAttribute(                        // line 97
$context["action"], "type", array()) == twig_constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART")))) {
                            // line 98
                            echo "                                    <img class='iconPadding' src=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 99
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "goalName", array()), "html", null, true);
                            echo " - ";
                            if (($this->getAttribute($context["action"], "revenue", array()) > 0)) {
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), ($context["idSite"] ?? $this->getContext($context, "idSite"))));
                                echo " - ";
                            }
                            echo " ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "\"/>
                                ";
                        }
                        // line 101
                        echo "                            ";
                        if ($this->getAttribute($context["action"], "url", array(), "any", true, true)) {
                            // line 102
                            echo "                            </a>
                            ";
                        }
                        // line 104
                        echo "                        ";
                    }
                    // line 105
                    echo "                    ";
                }
                // line 106
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "
                ";
            // line 108
            if ((twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method")) > ($context["maxPagesDisplayedByVisitor"] ?? $this->getContext($context, "maxPagesDisplayedByVisitor")))) {
                // line 109
                echo "                    (";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_MorePagesNotDisplayed")), "html", null, true);
                echo ")
                ";
            }
            // line 111
            echo "            </div>
        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "</ul>
<script type=\"text/javascript\">
\$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
    e.preventDefault();
    broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
    return false;
});
</script>
";
    }

    public function getTemplateName()
    {
        return "@Live/getLastVisitsStart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 114,  433 => 111,  427 => 109,  425 => 108,  422 => 107,  408 => 106,  405 => 105,  402 => 104,  398 => 102,  395 => 101,  381 => 99,  376 => 98,  374 => 97,  373 => 96,  355 => 95,  350 => 94,  348 => 93,  340 => 92,  335 => 91,  333 => 90,  325 => 89,  320 => 88,  318 => 87,  311 => 86,  304 => 84,  300 => 83,  297 => 82,  293 => 81,  291 => 80,  288 => 78,  282 => 76,  280 => 75,  277 => 74,  274 => 73,  271 => 72,  268 => 71,  266 => 70,  263 => 69,  258 => 66,  250 => 64,  248 => 63,  244 => 62,  239 => 61,  236 => 60,  210 => 57,  206 => 56,  204 => 55,  201 => 54,  197 => 53,  194 => 51,  190 => 50,  187 => 48,  185 => 47,  181 => 45,  179 => 44,  176 => 43,  173 => 41,  170 => 39,  168 => 38,  165 => 37,  163 => 36,  160 => 35,  157 => 34,  139 => 33,  137 => 32,  133 => 31,  127 => 30,  122 => 28,  118 => 26,  116 => 25,  110 => 22,  106 => 20,  100 => 17,  97 => 16,  93 => 15,  82 => 14,  80 => 13,  67 => 12,  65 => 11,  61 => 10,  57 => 9,  51 => 8,  47 => 7,  42 => 6,  25 => 5,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# some users view thousands of pages which can crash the browser viewing Live! #}
{% set maxPagesDisplayedByVisitor=100 %}

<ul id=\"visitsLive\">
    {% for visitor in visitors.getRows() %}
        <li id=\"{{ visitor.getColumn('idVisit') }}\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">{{ visitor.idVisit }}</div>
            <div title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">{{ visitor.getColumn('serverTimestamp')|raw }}</span>
                {{ postEvent('Live.visitorLogWidgetViewBeforeVisitInfo', visitor) }}
                {% set year = visitor.getColumn('serverTimestamp')|date('Y') %}
                <span class=\"realTimeWidget_datetime\">{{ visitor.getColumn('serverDatePretty')|replace({(year): ' '}) }} - {{ visitor.getColumn('serverTimePretty') }} {% if visitor.getColumn('visitDuration') > 0 %}({{ visitor.getColumn('visitDurationPretty')|raw }}){% endif %}</span>
                {% if visitor.getColumn('visitorId')|default(false) is not empty %}
                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.getColumn('userId') is not empty %}{{ visitor.getColumn('userId')|raw }}{% endif %}\" data-visitor-id=\"{{ visitor.getColumn('visitorId') }}\">
                        {% if visitor.getColumn('userId') is not empty %}<br/>{% endif %}
                        <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/>
                        {{ visitor.getColumn('userId')|default('')|raw }}
                    </a>
                {% endif %}
                <br />

                {{ postEvent('Live.renderVisitorIcons', visitor) }}

                <span class=\"referrer\">
                    {% include \"@Referrers/_visitorDetails.twig\" with {'visitInfo': visitor} %}
                 </span>
            </div>
            <div id=\"{{ visitor.getColumn('idVisit')|e('html_attr') }}_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\"
                      >{{ 'General_Actions'|translate }}:</span>&nbsp;
                {% set col = 0 %}
                {% for action in visitor.getColumn('actionDetails') %}
                    {% if loop.index <= maxPagesDisplayedByVisitor %}

                        {% if action.type == 'ecommerceOrder' or action.type == 'ecommerceAbandonedCart' %}
                            {% set title %}
                                {%- if action.type == 'ecommerceOrder' %}
                                    {{- 'Goals_EcommerceOrder'|translate -}}
                                {% else %}
                                    {{- 'Goals_AbandonedCart'|translate -}}
                                {% endif %}
                                {{- \"\\n - \" -}}
                                {%- if action.type == 'ecommerceOrder' -%}
                                    {{- 'General_ColumnRevenue'|translate -}}:
                                  {%- else -%}
                                    {%- set revenueLeft -%}
                                        {{- 'General_ColumnRevenue'|translate -}}
                                    {%- endset -%}
                                    {{- 'Goals_LeftInCart'|translate(revenueLeft) -}}:
                                {%- endif %} {{ action.revenue|money(idSite)|raw -}}

                                {{- \"\\n - \" -}}{{- action.serverTimePretty -}}
                                {{- \"\\n\" -}}
                                {% if action.itemDetails is not empty -%}
                                    {% for product in action.itemDetails -%}
                                        {{- \"\\n# \" -}}{{ product.itemSKU }}{% if product.itemName is not empty %}: {{ product.itemName }}{% endif %}{% if product.itemCategory is not empty %} ({{ product.itemCategory }}){% endif %}, {{ 'General_Quantity'|translate }}: {{ product.quantity }}, {{ 'General_Price'|translate }}: {{ product.price|money(idSite)|raw }}
                                    {%- endfor %}
                                {%- endif %}
                            {% endset %}
                            <span title=\"{{- title -}}\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"{{ action.icon }}\"/>
                                {% if action.type == 'ecommerceOrder' %}
                                    {{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }}
                                {% endif %}
                            </span>

                        {% else %}

                            {% set col = col + 1 %}
                            {% if col >= 9 %}
                                {% set col = 0 %}
                            {% endif %}
\t\t\t    
                            {% if action.url is defined %}
                            <a href=\"{{ action.url }}\" target=\"_blank\">
                            {% endif %}
                                {% if action.type == 'action' %}
{# white spacing matters as Chrome tooltip display whitespaces #}
{% set title %}
{% if action.pageTitle is not empty %}{{ action.pageTitle|rawSafeDecoded }}{% endif %}

{{ action.serverTimePretty }}
{% if action.timeSpentPretty is defined %}{{ 'General_TimeOnPage'|translate }}: {{ action.timeSpentPretty|raw }}{% endif %}
{%- endset %}
                                    <img src=\"plugins/Live/images/file{{ col }}.png\" title=\"{{- title -}}\"/>
                                {% elseif action.type == 'outlink' or action.type == 'download' %}
                                    <img class='iconPadding' src=\"{{ action.icon }}\"
                                         title=\"{% if action.url is defined %}{{ action.url }} - {% endif %}{{ action.serverTimePretty }}\"/>
                                {% elseif action.type == 'search' %}
                                    <img class='iconPadding' src=\"{{ action.icon }}\"
                                         title=\"{{ 'Actions_SubmenuSitesearch'|translate }}: {{ action.siteSearchKeyword }} - {{ action.serverTimePretty }}\"/>
                                {% elseif action.eventCategory|default(false) is not empty %}
                                    <img  class=\"iconPadding\" src='{{ action.icon }}'
                                        title=\"{{ 'Events_Event'|translate }} {{ action.eventCategory }} - {{ action.eventAction }} {% if action.eventName is defined %}- {{ action.eventName }}{% endif %} {% if action.eventValue is defined %}- {{ action.eventValue }}{% endif %}\"/>
                                {% elseif action.type == 'goal' or action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER') or
                                          action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART') %}
                                    <img class='iconPadding' src=\"{{ action.icon }}\"
                                         title=\"{{ action.goalName }} - {% if action.revenue > 0 %}{{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }} - {% endif %} {{ action.serverTimePretty }}\"/>
                                {% endif %}
                            {% if action.url is defined %}
                            </a>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endfor %}

                {% if visitor.getColumn('actionDetails')|length > maxPagesDisplayedByVisitor %}
                    ({{ 'Live_MorePagesNotDisplayed'|translate }})
                {% endif %}
            </div>
        </li>
    {% endfor %}
</ul>
<script type=\"text/javascript\">
\$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
    e.preventDefault();
    broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
    return false;
});
</script>
", "@Live/getLastVisitsStart.twig", "/var/www/btnhd.com/public_html/piwik/plugins/Live/templates/getLastVisitsStart.twig");
    }
}
