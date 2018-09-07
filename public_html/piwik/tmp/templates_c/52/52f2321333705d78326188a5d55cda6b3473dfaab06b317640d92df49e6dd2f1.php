<?php

/* @CorePluginsAdmin/plugins.twig */
class __TwigTemplate_45b1b69ac99a427c4913a5cdadde0938f3703ade758f5fb2fb98d7fb0b753602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin.twig", "@CorePluginsAdmin/plugins.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["plugins"] = $this->loadTemplate("@CorePluginsAdmin/macros.twig", "@CorePluginsAdmin/plugins.twig", 4);
        // line 6
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginsManagement")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
        // line 10
        $this->loadTemplate("@Marketplace/uploadPluginDialog.twig", "@CorePluginsAdmin/plugins.twig", 10)->display($context);
        // line 11
        echo "
    <div piwik-content-intro>
        <h2 piwik-enriched-headline>
            ";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
        echo "
        </h2>

        <p>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginsExtendPiwik")), "html", null, true);
        echo "
            ";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OncePluginIsInstalledYouMayActivateHere")), "html", null, true);
        echo "

            ";
        // line 20
        if (($context["isMarketplaceEnabled"] ?? $this->getContext($context, "isMarketplaceEnabled"))) {
            // line 21
            echo "                ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_TeaserExtendPiwikByPlugin", (("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browsePlugins", "sort" => "")))) . "\">"), "</a>", "<a href=\"#\" class=\"uploadPlugin\">", "</a>"));
            // line 26
            echo "
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        if ( !($context["isPluginsAdminEnabled"] ?? $this->getContext($context, "isPluginsAdminEnabled"))) {
            // line 30
            echo "                <br/>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_DoMoreContactPiwikAdmins")), "html", null, true);
            echo "
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ChangeLookByManageThemes", (("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "themes")))) . "\">"), "</a>"));
        echo "
        </p>
    </div>

    ";
        // line 37
        if (twig_length_filter($this->env, ($context["pluginsHavingUpdate"] ?? $this->getContext($context, "pluginsHavingUpdate")))) {
            // line 38
            echo "        <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, ($context["pluginsHavingUpdate"] ?? $this->getContext($context, "pluginsHavingUpdate"))), "html", null, true);
            echo " Update(s) available\">

            <p>";
            // line 40
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InfoPluginUpdateIsRecommended")), "html", null, true);
            echo "</p>

            ";
            // line 42
            echo $context["plugins"]->gettablePluginUpdates(($context["pluginsHavingUpdate"] ?? $this->getContext($context, "pluginsHavingUpdate")), ($context["updateNonce"] ?? $this->getContext($context, "updateNonce")), ($context["isMultiServerEnvironment"] ?? $this->getContext($context, "isMultiServerEnvironment")));
            echo "
        </div>
    ";
        }
        // line 45
        echo "
    <div piwik-content-block content-title=\"";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstalledPlugins")), "html_attr");
        echo "\"
         class=\"pluginsManagement\"
         piwik-plugin-management>

        ";
        // line 50
        echo $context["plugins"]->getpluginsFilter();
        echo "

        ";
        // line 52
        echo $context["plugins"]->gettablePlugins(($context["pluginsInfo"] ?? $this->getContext($context, "pluginsInfo")), ($context["pluginNamesHavingSettings"] ?? $this->getContext($context, "pluginNamesHavingSettings")), ($context["activateNonce"] ?? $this->getContext($context, "activateNonce")), ($context["deactivateNonce"] ?? $this->getContext($context, "deactivateNonce")), ($context["uninstallNonce"] ?? $this->getContext($context, "uninstallNonce")), false, ($context["marketplacePluginNames"] ?? $this->getContext($context, "marketplacePluginNames")), ($context["isPluginsAdminEnabled"] ?? $this->getContext($context, "isPluginsAdminEnabled")));
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/plugins.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  122 => 50,  115 => 46,  112 => 45,  106 => 42,  101 => 40,  95 => 38,  93 => 37,  86 => 33,  83 => 32,  77 => 30,  75 => 29,  72 => 28,  68 => 26,  65 => 21,  63 => 20,  58 => 18,  54 => 17,  48 => 14,  43 => 11,  41 => 10,  38 => 9,  35 => 8,  31 => 2,  27 => 6,  25 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'admin.twig' %}

{% import '@CorePluginsAdmin/macros.twig' as plugins %}

{% set title %}{{ 'CorePluginsAdmin_PluginsManagement'|translate }}{% endset %}

{% block content %}

    {% include '@Marketplace/uploadPluginDialog.twig' %}

    <div piwik-content-intro>
        <h2 piwik-enriched-headline>
            {{ title|e('html_attr') }}
        </h2>

        <p>{{ 'CorePluginsAdmin_PluginsExtendPiwik'|translate }}
            {{ 'CorePluginsAdmin_OncePluginIsInstalledYouMayActivateHere'|translate }}

            {% if isMarketplaceEnabled %}
                {{ 'CorePluginsAdmin_TeaserExtendPiwikByPlugin'|translate(
                    '<a href=\"' ~ linkTo({'action':'browsePlugins', 'sort': ''}) ~ '\">',
                    '</a>',
                    '<a href=\"#\" class=\"uploadPlugin\">',
                    '</a>'
                )|raw }}
            {% endif %}

            {% if not isPluginsAdminEnabled %}
                <br/>{{ 'CorePluginsAdmin_DoMoreContactPiwikAdmins'|translate }}
            {% endif %}

            {{ 'CorePluginsAdmin_ChangeLookByManageThemes'|translate('<a href=\"' ~ linkTo({'action': 'themes'}) ~'\">', '</a>')|raw }}
        </p>
    </div>

    {% if pluginsHavingUpdate|length %}
        <div piwik-content-block content-title=\"{{ pluginsHavingUpdate|length }} Update(s) available\">

            <p>{{ 'CorePluginsAdmin_InfoPluginUpdateIsRecommended'|translate }}</p>

            {{ plugins.tablePluginUpdates(pluginsHavingUpdate, updateNonce, isMultiServerEnvironment) }}
        </div>
    {% endif %}

    <div piwik-content-block content-title=\"{{ 'CorePluginsAdmin_InstalledPlugins'|translate|e('html_attr') }}\"
         class=\"pluginsManagement\"
         piwik-plugin-management>

        {{ plugins.pluginsFilter() }}

        {{ plugins.tablePlugins(pluginsInfo, pluginNamesHavingSettings, activateNonce, deactivateNonce, uninstallNonce, false, marketplacePluginNames, isPluginsAdminEnabled) }}

    </div>

{% endblock %}", "@CorePluginsAdmin/plugins.twig", "/var/www/btnhd.com/public_html/piwik/plugins/CorePluginsAdmin/templates/plugins.twig");
    }
}
