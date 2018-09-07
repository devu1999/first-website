<?php

/* @Insights/insightControls.twig */
class __TwigTemplate_41dc777ebb74c101d25967951a599b388a88f233c2826471d2690abdb6b1af02 extends Twig_Template
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
        // line 1
        echo "<div class=\"controls\">

    ";
        // line 3
        if ((($context["period"] ?? $this->getContext($context, "period")) != "range")) {
            // line 4
            echo "
        ";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_ControlComparedToDescription")), "html", null, true);
            echo "

        ";
            // line 7
            if ((($context["period"] ?? $this->getContext($context, "period")) == "day")) {
                // line 8
                echo "            <div class=\"row\">
                <div class=\"col s12 m6 l4 input-field\">
                    <select size=\"1\" name=\"comparedToXPeriodsAgo\">
                        <option value=\"1\" ";
                // line 11
                if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "compared_to_x_periods_ago", array()) == 1)) {
                    echo "selected";
                }
                echo ">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_DayComparedToPreviousDay")), "html", null, true);
                echo "</option>
                        <option value=\"7\" ";
                // line 12
                if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "compared_to_x_periods_ago", array()) == 7)) {
                    echo "selected";
                }
                echo ">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_DayComparedToPreviousWeek")), "html", null, true);
                echo "</option>
                        <option value=\"365\" ";
                // line 13
                if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "compared_to_x_periods_ago", array()) == 365)) {
                    echo "selected";
                }
                echo ">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_DayComparedToPreviousYear")), "html", null, true);
                echo "</option>
                    </select>
                </div>
            </div>
        ";
            } elseif ((            // line 17
($context["period"] ?? $this->getContext($context, "period")) == "month")) {
                // line 18
                echo "            <div class=\"row\">
                <div class=\"col s12 m6 l4 input-field\">
                    <select size=\"1\" name=\"comparedToXPeriodsAgo\">
                        <option value=\"1\" ";
                // line 21
                if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "compared_to_x_periods_ago", array()) == 1)) {
                    echo "selected";
                }
                echo ">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_MonthComparedToPreviousMonth")), "html", null, true);
                echo "</option>
                        <option value=\"12\" ";
                // line 22
                if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "compared_to_x_periods_ago", array()) == 12)) {
                    echo "selected";
                }
                echo ">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_MonthComparedToPreviousYear")), "html", null, true);
                echo "</option>
                    </select>
                </div>
            </div>
        ";
            } elseif ((            // line 26
($context["period"] ?? $this->getContext($context, "period")) == "week")) {
                // line 27
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_WeekComparedToPreviousWeek")), "html", null, true);
                echo "
        ";
            } elseif ((            // line 28
($context["period"] ?? $this->getContext($context, "period")) == "year")) {
                // line 29
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_YearComparedToPreviousYear")), "html", null, true);
                echo "
        ";
            }
            // line 31
            echo "        ";
        }
        // line 32
        echo "    </div>

    ";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_Filter")), "html", null, true);
        echo "

    <div class=\"row\">
        <div class=\"col s12 m4 l4 input-field\">
            <select size=\"1\" name=\"filterBy\" title=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_ControlFilterByDescription")), "html_attr");
        echo "\">
                <option ";
        // line 39
        if ( !$this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "filter_by", array())) {
            echo "selected";
        }
        echo " value=\"all\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
        echo "</option>
                <option ";
        // line 40
        if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "filter_by", array()) == "movers")) {
            echo "selected";
        }
        echo " value=\"movers\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_FilterOnlyMovers")), "html", null, true);
        echo "</option>
                <option ";
        // line 41
        if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "filter_by", array()) == "new")) {
            echo "selected";
        }
        echo " value=\"new\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_FilterOnlyNew")), "html", null, true);
        echo "</option>
                <option ";
        // line 42
        if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "filter_by", array()) == "disappeared")) {
            echo "selected";
        }
        echo " value=\"disappeared\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_FilterOnlyDisappeared")), "html", null, true);
        echo "</option>
            </select>
        </div>

        <div class=\"col s12 m6 l4 input-field\">
            <select size=\"1\" name=\"showIncreaseOrDecrease\" title=\"Show increaser and/or decreaser\">
                <option value=\"both\" ";
        // line 48
        if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "limit_increaser", array()) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "limit_decreaser", array()))) {
            echo "selected";
        }
        echo ">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_FilterIncreaserAndDecreaser")), "html", null, true);
        echo "</option>
                <option value=\"increase\" ";
        // line 49
        if (($this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "limit_increaser", array()) &&  !$this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "limit_decreaser", array()))) {
            echo "selected";
        }
        echo ">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_FilterOnlyIncreaser")), "html", null, true);
        echo "</option>
                <option value=\"decrease\" ";
        // line 50
        if (( !$this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "limit_increaser", array()) && $this->getAttribute(($context["properties"] ?? $this->getContext($context, "properties")), "limit_decreaser", array()))) {
            echo "selected";
        }
        echo ">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_FilterOnlyDecreaser")), "html", null, true);
        echo "</option>
            </select>
        </div><div class=\"col s12 m1 l4\">&nbsp;</div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Insights/insightControls.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 50,  171 => 49,  163 => 48,  150 => 42,  142 => 41,  134 => 40,  126 => 39,  122 => 38,  115 => 34,  111 => 32,  108 => 31,  102 => 29,  100 => 28,  95 => 27,  93 => 26,  82 => 22,  74 => 21,  69 => 18,  67 => 17,  56 => 13,  48 => 12,  40 => 11,  35 => 8,  33 => 7,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"controls\">

    {% if period != 'range' %}

        {{ 'Insights_ControlComparedToDescription'|translate }}

        {% if period == 'day' %}
            <div class=\"row\">
                <div class=\"col s12 m6 l4 input-field\">
                    <select size=\"1\" name=\"comparedToXPeriodsAgo\">
                        <option value=\"1\" {% if properties.compared_to_x_periods_ago == 1 %}selected{% endif %}>{{ 'Insights_DayComparedToPreviousDay'|translate }}</option>
                        <option value=\"7\" {% if properties.compared_to_x_periods_ago == 7 %}selected{% endif %}>{{ 'Insights_DayComparedToPreviousWeek'|translate }}</option>
                        <option value=\"365\" {% if properties.compared_to_x_periods_ago == 365 %}selected{% endif %}>{{ 'Insights_DayComparedToPreviousYear'|translate }}</option>
                    </select>
                </div>
            </div>
        {% elseif period == 'month' %}
            <div class=\"row\">
                <div class=\"col s12 m6 l4 input-field\">
                    <select size=\"1\" name=\"comparedToXPeriodsAgo\">
                        <option value=\"1\" {% if properties.compared_to_x_periods_ago == 1 %}selected{% endif %}>{{ 'Insights_MonthComparedToPreviousMonth'|translate }}</option>
                        <option value=\"12\" {% if properties.compared_to_x_periods_ago == 12 %}selected{% endif %}>{{ 'Insights_MonthComparedToPreviousYear'|translate }}</option>
                    </select>
                </div>
            </div>
        {% elseif period == 'week' %}
            {{ 'Insights_WeekComparedToPreviousWeek'|translate }}
        {% elseif period == 'year' %}
            {{ 'Insights_YearComparedToPreviousYear'|translate }}
        {% endif %}
        {% endif %}
    </div>

    {{ 'Insights_Filter'|translate }}

    <div class=\"row\">
        <div class=\"col s12 m4 l4 input-field\">
            <select size=\"1\" name=\"filterBy\" title=\"{{ 'Insights_ControlFilterByDescription'|translate|e('html_attr') }}\">
                <option {% if not properties.filter_by %}selected{% endif %} value=\"all\">{{ 'General_All'|translate }}</option>
                <option {% if properties.filter_by == 'movers' %}selected{% endif %} value=\"movers\">{{ 'Insights_FilterOnlyMovers'|translate }}</option>
                <option {% if properties.filter_by == 'new' %}selected{% endif %} value=\"new\">{{ 'Insights_FilterOnlyNew'|translate }}</option>
                <option {% if properties.filter_by == 'disappeared' %}selected{% endif %} value=\"disappeared\">{{ 'Insights_FilterOnlyDisappeared'|translate }}</option>
            </select>
        </div>

        <div class=\"col s12 m6 l4 input-field\">
            <select size=\"1\" name=\"showIncreaseOrDecrease\" title=\"Show increaser and/or decreaser\">
                <option value=\"both\" {% if properties.limit_increaser and properties.limit_decreaser %}selected{%endif%}>{{ 'Insights_FilterIncreaserAndDecreaser'|translate }}</option>
                <option value=\"increase\" {% if properties.limit_increaser and not properties.limit_decreaser %}selected{%endif%}>{{ 'Insights_FilterOnlyIncreaser'|translate }}</option>
                <option value=\"decrease\" {% if not properties.limit_increaser and properties.limit_decreaser %}selected{%endif%}>{{ 'Insights_FilterOnlyDecreaser'|translate }}</option>
            </select>
        </div><div class=\"col s12 m1 l4\">&nbsp;</div>

    </div>
</div>", "@Insights/insightControls.twig", "/var/www/btnhd.com/public_html/piwik/plugins/Insights/templates/insightControls.twig");
    }
}
