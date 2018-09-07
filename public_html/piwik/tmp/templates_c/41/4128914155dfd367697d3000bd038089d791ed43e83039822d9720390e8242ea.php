<?php

/* @UserCountry/_updaterNextRunTime.twig */
class __TwigTemplate_71074b33245fccc91a3ff2ea757098f44d64e28bc6d4173409f5d5c581f72b43 extends Twig_Template
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
        if ( !twig_test_empty(((array_key_exists("nextRunTime", $context)) ? (_twig_default_filter(($context["nextRunTime"] ?? $this->getContext($context, "nextRunTime")))) : ("")))) {
            // line 2
            echo "  ";
            if ((twig_date_converter($this->env, $this->getAttribute(($context["nextRunTime"] ?? $this->getContext($context, "nextRunTime")), "getTimestamp", array(), "method")) <= twig_date_converter($this->env))) {
                // line 3
                echo "      ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterScheduledForNextRun")), "html", null, true);
                echo "
  ";
            } else {
                // line 5
                echo "      ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterWillRunNext", (("<strong>" . $this->getAttribute(($context["nextRunTime"] ?? $this->getContext($context, "nextRunTime")), "toString", array(), "method")) . "</strong>")));
                echo "
  ";
            }
        } else {
            // line 8
            echo "  ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterIsNotScheduledToRun")), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@UserCountry/_updaterNextRunTime.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  30 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if nextRunTime|default is not empty %}
  {% if date(nextRunTime.getTimestamp()) <= date() %}
      {{ 'UserCountry_UpdaterScheduledForNextRun'|translate }}
  {% else %}
      {{ 'UserCountry_UpdaterWillRunNext'|translate('<strong>' ~ nextRunTime.toString() ~ '</strong>')|raw }}
  {% endif %}
{% else %}
  {{ 'UserCountry_UpdaterIsNotScheduledToRun'|translate }}
{% endif %}", "@UserCountry/_updaterNextRunTime.twig", "/var/www/btnhd.com/public_html/piwik/plugins/UserCountry/templates/_updaterNextRunTime.twig");
    }
}
