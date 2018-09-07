<?php

/* @CoreHome/ReportRenderer/_htmlReportHeader.twig */
class __TwigTemplate_37f6e771957fd3b4759a9a1ff67e0776308694ba320894abe09f462a31a1c977 extends Twig_Template
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
        $context["fontStyle"] = "color:#0d0d0d;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Cantarell, 'Helvetica Neue', sans-serif; ";
        // line 2
        $context["styleParagraph"] = "font-size:15px;line-height:24px;margin:0 0 16px;";
        // line 3
        echo "
<html style=\"background-color:#edecec\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"generator\" content=\"Matomo Analytics\">
</head>

<body style=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, ($context["fontStyle"] ?? $this->getContext($context, "fontStyle")), "html", null, true);
        echo " line-height: 24px; margin:0 auto; max-width:1000px; background-color:rgb(255, 255, 255);box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);\">

  <a name=\"reportTop\"></a>

  <table style=\"width:100%; background-color:#37474f; padding:10px 0; margin: 0 0 25px 0; height:64px;\">
    <tr>
      <td>
          <a style=\"font-size:16px;padding:0 15px;color:#ffffff;height: 22px;display: inline-block;vertical-align: inherit;\" rel=\"noreferrer\" target=\"_blank\" href=\"";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, ($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")), "html", null, true);
        echo "\" style=\"lineheight:17px\">
              ";
        // line 20
        if ((($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo")) && ($context["logoHeader"] ?? $this->getContext($context, "logoHeader")))) {
            // line 21
            echo "                <img src=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["logoHeader"] ?? $this->getContext($context, "logoHeader")), "html", null, true);
            echo "\" height=\"20px\" width=\"auto\" />
              ";
        } else {
            // line 23
            echo "                  <img src=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")), "html", null, true);
            echo "/plugins/Morpheus/images/logo-email.png\" height=\"20px\" width=\"auto\" alt=\"Matomo, ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
            echo "\" />
              ";
        }
        // line 25
        echo "          </a>
      </td>
      <td align=\"right\">
          <a style=\"font-size:16px; padding:0 15px; color:#ffffff\" title=\"";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_TopLinkTooltip", ($context["websiteName"] ?? $this->getContext($context, "websiteName")))), "html", null, true);
        echo "\" target=\"_blank\" href=\"";
        echo \Piwik\piwik_escape_filter($this->env, ($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")), "html", null, true);
        echo call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "CoreHome", "action" => "index", "idSite" => ($context["idSite"] ?? $this->getContext($context, "idSite")), "period" => ($context["period"] ?? $this->getContext($context, "period")), "date" => ($context["date"] ?? $this->getContext($context, "date")), "token_auth" => null, "method" => null, "idReport" => null, "outputType" => null, "format" => null)));
        echo "\">
              ";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_Dashboard")), "html", null, true);
        echo "
          </a>
      </td>
    </tr>
  </table>

  <div style=\"margin:0 20px;\">
    <h2 style='";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, ($context["fontStyle"] ?? $this->getContext($context, "fontStyle")), "html", null, true);
        echo " color:#37474f; line-height:30px; margin:25px 0 15px 0;'>
        ";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_EmailHello")), "html", null, true);
        echo "
    </h2>

    <p style='";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, ($context["styleParagraph"] ?? $this->getContext($context, "styleParagraph")), "html", null, true);
        echo \Piwik\piwik_escape_filter($this->env, ($context["fontStyle"] ?? $this->getContext($context, "fontStyle")), "html", null, true);
        echo "'>
        ";
        // line 41
        if ((array_key_exists("isAttachedFile", $context) && ($context["isAttachedFile"] ?? $this->getContext($context, "isAttachedFile")))) {
            // line 42
            echo "        ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_PleaseFindAttachedFile", ($context["frequency"] ?? $this->getContext($context, "frequency")), ($context["reportTitle"] ?? $this->getContext($context, "reportTitle")))), "html", null, true);
            echo "
        ";
        } else {
            // line 44
            echo "        ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_PleaseFindBelow", ($context["period"] ?? $this->getContext($context, "period")), ($context["reportTitle"] ?? $this->getContext($context, "reportTitle")))), "html", null, true);
            echo "
        ";
        }
        // line 46
        echo "        <br />";
        echo \Piwik\piwik_escape_filter($this->env, ($context["description"] ?? $this->getContext($context, "description")), "html", null, true);
        echo "
        <br />";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRange")), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, ($context["prettyDate"] ?? $this->getContext($context, "prettyDate")), "html", null, true);
        echo "
        <br />";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_SentFromX", ($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")))), "html", null, true);
        echo "
    </p>

    ";
        // line 51
        if (($context["displaySegment"] ?? $this->getContext($context, "displaySegment"))) {
            // line 52
            echo "        <p style=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["styleParagraph"] ?? $this->getContext($context, "styleParagraph")), "html", null, true);
            echo \Piwik\piwik_escape_filter($this->env, ($context["fontStyle"] ?? $this->getContext($context, "fontStyle")), "html", null, true);
            echo "\">
            ";
            // line 53
            echo "ScheduledReports_CustomVisitorSegment";
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["segmentName"] ?? $this->getContext($context, "segmentName")), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if ((twig_length_filter($this->env, ($context["reportMetadata"] ?? $this->getContext($context, "reportMetadata"))) > 1)) {
            // line 58
            echo "        <h2 style=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["fontStyle"] ?? $this->getContext($context, "fontStyle")), "html", null, true);
            echo "font-weight:normal; font-size: ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["reportTitleTextSize"] ?? $this->getContext($context, "reportTitleTextSize")), "html", null, true);
            echo "pt;\">
            ";
            // line 59
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_TableOfContent")), "html", null, true);
            echo "
        </h2>
        <ul>
            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reportMetadata"] ?? $this->getContext($context, "reportMetadata")));
            foreach ($context['_seq'] as $context["_key"] => $context["metadata"]) {
                // line 63
                echo "                <li>
                    <a href=\"#";
                // line 64
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["metadata"], "uniqueId", array()), "html", null, true);
                echo "\" style=\"text-decoration:none; color: rgb(";
                echo \Piwik\piwik_escape_filter($this->env, ($context["reportTextColor"] ?? $this->getContext($context, "reportTextColor")), "html", null, true);
                echo ");\">
                        ";
                // line 65
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["metadata"], "name", array()), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/ReportRenderer/_htmlReportHeader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 69,  179 => 65,  173 => 64,  170 => 63,  166 => 62,  160 => 59,  153 => 58,  151 => 57,  148 => 56,  140 => 53,  134 => 52,  132 => 51,  126 => 48,  120 => 47,  115 => 46,  109 => 44,  103 => 42,  101 => 41,  96 => 40,  90 => 37,  86 => 36,  76 => 29,  69 => 28,  64 => 25,  56 => 23,  50 => 21,  48 => 20,  44 => 19,  34 => 12,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set fontStyle = \"color:#0d0d0d;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Cantarell, 'Helvetica Neue', sans-serif; \"%}
{% set styleParagraph = 'font-size:15px;line-height:24px;margin:0 0 16px;' %}

<html style=\"background-color:#edecec\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"generator\" content=\"Matomo Analytics\">
</head>

<body style=\"{{fontStyle}} line-height: 24px; margin:0 auto; max-width:1000px; background-color:rgb(255, 255, 255);box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);\">

  <a name=\"reportTop\"></a>

  <table style=\"width:100%; background-color:#37474f; padding:10px 0; margin: 0 0 25px 0; height:64px;\">
    <tr>
      <td>
          <a style=\"font-size:16px;padding:0 15px;color:#ffffff;height: 22px;display: inline-block;vertical-align: inherit;\" rel=\"noreferrer\" target=\"_blank\" href=\"{{ piwikUrl }}\" style=\"lineheight:17px\">
              {% if isCustomLogo and logoHeader %}
                <img src=\"{{ logoHeader }}\" height=\"20px\" width=\"auto\" />
              {% else %}
                  <img src=\"{{ piwikUrl }}/plugins/Morpheus/images/logo-email.png\" height=\"20px\" width=\"auto\" alt=\"Matomo, {{ 'General_OpenSourceWebAnalytics'|translate }}\" />
              {% endif %}
          </a>
      </td>
      <td align=\"right\">
          <a style=\"font-size:16px; padding:0 15px; color:#ffffff\" title=\"{{'Dashboard_TopLinkTooltip'|translate(websiteName)}}\" target=\"_blank\" href=\"{{ piwikUrl }}{{ linkTo({'module': 'CoreHome', 'action': 'index', 'idSite': idSite, 'period': period, 'date': date, 'token_auth': null, 'method': null, 'idReport': null, 'outputType': null, 'format': null})|raw }}\">
              {{ 'Dashboard_Dashboard'|translate }}
          </a>
      </td>
    </tr>
  </table>

  <div style=\"margin:0 20px;\">
    <h2 style='{{fontStyle}} color:#37474f; line-height:30px; margin:25px 0 15px 0;'>
        {{'ScheduledReports_EmailHello'|translate}}
    </h2>

    <p style='{{styleParagraph}}{{fontStyle}}'>
        {% if isAttachedFile is defined and isAttachedFile %}
        {{ 'ScheduledReports_PleaseFindAttachedFile'|translate(frequency, reportTitle) }}
        {% else %}
        {{'ScheduledReports_PleaseFindBelow'|translate(period,reportTitle)}}
        {% endif %}
        <br />{{ description }}
        <br />{{ 'General_DateRange'|translate }} {{ prettyDate }}
        <br />{{ 'ScheduledReports_SentFromX'|translate(piwikUrl) }}
    </p>

    {% if displaySegment %}
        <p style=\"{{styleParagraph}}{{fontStyle}}\">
            {{ 'ScheduledReports_CustomVisitorSegment' }} {{ segmentName }}
        </p>
    {% endif %}

    {% if reportMetadata|length > 1 %}
        <h2 style=\"{{fontStyle}}font-weight:normal; font-size: {{ reportTitleTextSize }}pt;\">
            {{ 'ScheduledReports_TableOfContent'|translate }}
        </h2>
        <ul>
            {% for metadata in reportMetadata %}
                <li>
                    <a href=\"#{{ metadata.uniqueId }}\" style=\"text-decoration:none; color: rgb({{ reportTextColor }});\">
                        {{ metadata.name }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}
", "@CoreHome/ReportRenderer/_htmlReportHeader.twig", "/var/www/btnhd.com/public_html/piwik/plugins/CoreHome/templates/ReportRenderer/_htmlReportHeader.twig");
    }
}
