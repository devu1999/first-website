<?php

/* @CorePluginsAdmin/safemode.twig */
class __TwigTemplate_a6753981e1ea51c9932d961866308ee22df164cf7d50e5fd7ef8230dca985eb3 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <style type=\"text/css\">
            html, body {
                background-color: white;
            }
            td {
                border: 1px solid #ccc;
                border-collapse: collapse;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
                border: 0px;
            }
            a {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
        <title>A fatal error occurred</title>
    </head>
    <body>

        <h1>A fatal error occurred</h1>

        <div style=\"width: 640px\">

        ";
        // line 33
        if ((($context["isAllowedToTroubleshootAsSuperUser"] ?? $this->getContext($context, "isAllowedToTroubleshootAsSuperUser")) ||  !($context["isAnonymousUser"] ?? $this->getContext($context, "isAnonymousUser")))) {
            // line 34
            echo "            <p>
                The following error just broke Matomo";
            // line 35
            if (($context["showVersion"] ?? $this->getContext($context, "showVersion"))) {
                echo " (v";
                echo \Piwik\piwik_escape_filter($this->env, ($context["piwikVersion"] ?? $this->getContext($context, "piwikVersion")), "html", null, true);
                echo ")";
            }
            echo ":
            </p>
            <pre>";
            // line 37
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "message", array()), "html", null, true);
            echo "</pre>
            <p>in</p>
            <pre>";
            // line 39
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "file", array()), "html", null, true);
            echo " line ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "line", array()), "html", null, true);
            echo "</pre>

            <hr>
            <h3>Troubleshooting</h3>

            Follow these steps to solve the issue or report it to the team:
            <ul>
                <li>
                    If you have just updated Matomo to the latest version, please try to restart your web server.
                    This will clear the PHP opcache which may solve the problem.
                </li>
                <li>
                    If this is the first time you see this error, please try refresh the page.
                </li>
                <li>
                    <strong>If this error continues to happen</strong>, we appreciate if you send the
                    <a href=\"mailto:hello@matomo.org?subject=";
            // line 55
            echo \Piwik\piwik_escape_filter($this->env, ("Fatal error in Matomo " . \Piwik\piwik_escape_filter($this->env, ($context["piwikVersion"] ?? $this->getContext($context, "piwikVersion")), "url")), "html", null, true);
            echo "&body=";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "message", array()), "url"), "html", null, true);
            echo "%20in%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "file", array()), "url"), "html", null, true);
            echo "%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "line", array()), "url"), "html", null, true);
            echo "%20using%20PHP%20";
            echo \Piwik\piwik_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
            echo "\">error report</a>
                    to the Matomo team.
                </li>
            </ul>
            <hr/>

        ";
        }
        // line 62
        echo "
        ";
        // line 63
        if ((($context["isAllowedToTroubleshootAsSuperUser"] ?? $this->getContext($context, "isAllowedToTroubleshootAsSuperUser")) || ($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser")))) {
            // line 64
            echo "
            <h3>Further troubleshooting</h3>
            <p>
                If this error continues to happen, you may be able to fix this issue by disabling one or more of
                the Third-Party plugins. If you don't know which plugin is causing this error, we recommend to first disable any plugin not created by \"Matomo\" and not created by \"InnoCraft\".
                You can enable plugin again afterwards in the
                <a rel=\"noreferrer\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=plugins\">Plugins</a>
                or <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=themes\">Themes</a> page under
                settings at any time.

                ";
            // line 74
            if (($context["pluginCausesIssue"] ?? $this->getContext($context, "pluginCausesIssue"))) {
                // line 75
                echo "                    Based on the error message, the issue is probably caused by the plugin <strong>";
                echo \Piwik\piwik_escape_filter($this->env, ($context["pluginCausesIssue"] ?? $this->getContext($context, "pluginCausesIssue")), "html", null, true);
                echo "</strong>.
                ";
            }
            // line 77
            echo "            </p>
            <table>
                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                if (($this->getAttribute($context["plugin"], "uninstallable", array()) && $this->getAttribute($context["plugin"], "activated", array()))) {
                    // line 80
                    echo "                    <tr ";
                    if ((0 == $this->getAttribute($context["loop"], "index", array()) % 2)) {
                        echo "style=\"background-color: #eeeeee\"";
                    }
                    echo ">
                        <td style=\"min-width:200px;\">
                            ";
                    // line 82
                    echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                    echo "
                        </td>
                        <td>
                            ";
                    // line 85
                    echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "version", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "version", array()), "")) : ("")), "html", null, true);
                    echo "
                        </td>
                        <td>
                            <a href=\"index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                    // line 88
                    echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                    echo "&nonce=";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["deactivateNonce"] ?? $this->getContext($context, "deactivateNonce")), "html", null, true);
                    if ( !twig_test_empty(($context["deactivateIAmSuperUserSalt"] ?? $this->getContext($context, "deactivateIAmSuperUserSalt")))) {
                        echo "&i_am_super_user=";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["deactivateIAmSuperUserSalt"] ?? $this->getContext($context, "deactivateIAmSuperUserSalt")), "html", null, true);
                    }
                    echo "\"
                               target=\"_blank\">deactivate</a>
                        </td>
                    </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            </table>

            ";
            // line 95
            $context["uninstalledPluginsFound"] = false;
            // line 96
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                if (($this->getAttribute($context["plugin"], "uninstallable", array()) &&  !$this->getAttribute($context["plugin"], "activated", array()))) {
                    // line 97
                    echo "                ";
                    $context["uninstalledPluginsFound"] = true;
                    // line 98
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "
            ";
            // line 100
            if (($context["uninstalledPluginsFound"] ?? $this->getContext($context, "uninstalledPluginsFound"))) {
                // line 101
                echo "
                <p>
                    If this error still occurs after disabling all plugins, you might want to consider uninstalling some
                    plugins. Keep in mind: The plugin will be completely removed from your platform.
                </p>

                <table>
                    ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                    if (($this->getAttribute($context["plugin"], "uninstallable", array()) &&  !$this->getAttribute($context["plugin"], "activated", array()))) {
                        // line 109
                        echo "                        <tr ";
                        if ((0 == $this->getAttribute($context["loop"], "index", array()) % 2)) {
                            echo "style=\"background-color: #eeeeee\"";
                        }
                        echo ">
                            <td style=\"min-width:200px;\">
                                ";
                        // line 111
                        echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                        echo "
                            </td>
                            <td>
                                <a href=\"index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                        // line 114
                        echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                        echo "&nonce=";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["uninstallNonce"] ?? $this->getContext($context, "uninstallNonce")), "html", null, true);
                        echo "\"
                                   target=\"_blank\" onclick=\"return confirm('";
                        // line 115
                        echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UninstallConfirm", $context["pluginName"])), "js"), "html", null, true);
                        echo "')\">uninstall</a>
                            </td>
                        </tr>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "                </table>
            ";
            }
            // line 121
            echo "
        ";
        } elseif (        // line 122
($context["isAnonymousUser"] ?? $this->getContext($context, "isAnonymousUser"))) {
            // line 123
            echo "
            <p>Please contact the system administrator, or <a href=\"?module=";
            // line 124
            echo \Piwik\piwik_escape_filter($this->env, ($context["loginModule"] ?? $this->getContext($context, "loginModule")), "html", null, true);
            echo "\">login to Matomo</a> to learn more.</p>

        ";
        } else {
            // line 127
            echo "            <p>
                If this error continues to happen you may want to send an
                <a href=\"mailto:";
            // line 129
            echo \Piwik\piwik_escape_filter($this->env, ($context["emailSuperUser"] ?? $this->getContext($context, "emailSuperUser")), "html", null, true);
            echo "?subject=";
            echo \Piwik\piwik_escape_filter($this->env, ("Fatal error in Matomo " . \Piwik\piwik_escape_filter($this->env, ($context["piwikVersion"] ?? $this->getContext($context, "piwikVersion")), "url")), "html", null, true);
            echo "&body=";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "message", array()), "url"), "html", null, true);
            echo "%20in%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "file", array()), "url"), "html", null, true);
            echo "%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "line", array()), "url"), "html", null, true);
            echo "%20using%20PHP%20";
            echo \Piwik\piwik_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
            echo "\">error report</a>
                to your system administrator.
            </p>
        ";
        }
        // line 133
        echo "

        ";
        // line 135
        if (( !($context["isAllowedToTroubleshootAsSuperUser"] ?? $this->getContext($context, "isAllowedToTroubleshootAsSuperUser")) &&  !($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser")))) {
            // line 136
            echo "            <p>If you are Super User, but cannot login because of this error, you can still troubleshoot further. Follow these steps:
                <br/>1) open the config/config.ini.php file and look for the <code>salt</code> value under <code>[General]</code>.
                <br/>2) edit this current URL you are viewing and add the following text (replacing <code>salt_value_from_config</code> by the <code>salt</code> value from the config file):
                <br/><br/><code>index.php?i_am_super_user=salt_value_from_config&....</code>
            </p>
        ";
        }
        // line 142
        echo "

        </div>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/safemode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 142,  318 => 136,  316 => 135,  312 => 133,  295 => 129,  291 => 127,  285 => 124,  282 => 123,  280 => 122,  277 => 121,  273 => 119,  259 => 115,  253 => 114,  247 => 111,  239 => 109,  228 => 108,  219 => 101,  217 => 100,  214 => 99,  207 => 98,  204 => 97,  198 => 96,  196 => 95,  192 => 93,  171 => 88,  165 => 85,  159 => 82,  151 => 80,  140 => 79,  136 => 77,  130 => 75,  128 => 74,  116 => 64,  114 => 63,  111 => 62,  93 => 55,  72 => 39,  67 => 37,  58 => 35,  55 => 34,  53 => 33,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <style type=\"text/css\">
            html, body {
                background-color: white;
            }
            td {
                border: 1px solid #ccc;
                border-collapse: collapse;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
                border: 0px;
            }
            a {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
        <title>A fatal error occurred</title>
    </head>
    <body>

        <h1>A fatal error occurred</h1>

        <div style=\"width: 640px\">

        {% if isAllowedToTroubleshootAsSuperUser or not isAnonymousUser %}
            <p>
                The following error just broke Matomo{% if showVersion %} (v{{ piwikVersion }}){% endif %}:
            </p>
            <pre>{{ lastError.message }}</pre>
            <p>in</p>
            <pre>{{ lastError.file }} line {{ lastError.line }}</pre>

            <hr>
            <h3>Troubleshooting</h3>

            Follow these steps to solve the issue or report it to the team:
            <ul>
                <li>
                    If you have just updated Matomo to the latest version, please try to restart your web server.
                    This will clear the PHP opcache which may solve the problem.
                </li>
                <li>
                    If this is the first time you see this error, please try refresh the page.
                </li>
                <li>
                    <strong>If this error continues to happen</strong>, we appreciate if you send the
                    <a href=\"mailto:hello@matomo.org?subject={{ 'Fatal error in Matomo ' ~ piwikVersion|e('url') }}&body={{ lastError.message|e('url') }}%20in%20{{ lastError.file|e('url') }}%20{{ lastError.line|e('url') }}%20using%20PHP%20{{ constant('PHP_VERSION') }}\">error report</a>
                    to the Matomo team.
                </li>
            </ul>
            <hr/>

        {% endif %}

        {% if isAllowedToTroubleshootAsSuperUser or isSuperUser %}

            <h3>Further troubleshooting</h3>
            <p>
                If this error continues to happen, you may be able to fix this issue by disabling one or more of
                the Third-Party plugins. If you don't know which plugin is causing this error, we recommend to first disable any plugin not created by \"Matomo\" and not created by \"InnoCraft\".
                You can enable plugin again afterwards in the
                <a rel=\"noreferrer\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=plugins\">Plugins</a>
                or <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=themes\">Themes</a> page under
                settings at any time.

                {% if pluginCausesIssue %}
                    Based on the error message, the issue is probably caused by the plugin <strong>{{ pluginCausesIssue }}</strong>.
                {% endif %}
            </p>
            <table>
                {% for pluginName, plugin in plugins if plugin.uninstallable and plugin.activated %}
                    <tr {% if loop.index is divisibleby(2) %}style=\"background-color: #eeeeee\"{% endif %}>
                        <td style=\"min-width:200px;\">
                            {{ pluginName }}
                        </td>
                        <td>
                            {{ plugin.info.version|default('') }}
                        </td>
                        <td>
                            <a href=\"index.php?module=CorePluginsAdmin&action=deactivate&pluginName={{ pluginName }}&nonce={{ deactivateNonce }}{% if deactivateIAmSuperUserSalt is not empty %}&i_am_super_user={{ deactivateIAmSuperUserSalt }}{% endif %}\"
                               target=\"_blank\">deactivate</a>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            {% set uninstalledPluginsFound = false %}
            {% for pluginName, plugin in plugins if plugin.uninstallable and not plugin.activated %}
                {% set uninstalledPluginsFound = true %}
            {% endfor %}

            {% if uninstalledPluginsFound %}

                <p>
                    If this error still occurs after disabling all plugins, you might want to consider uninstalling some
                    plugins. Keep in mind: The plugin will be completely removed from your platform.
                </p>

                <table>
                    {% for pluginName, plugin in plugins if plugin.uninstallable and not plugin.activated %}
                        <tr {% if loop.index is divisibleby(2) %}style=\"background-color: #eeeeee\"{% endif %}>
                            <td style=\"min-width:200px;\">
                                {{ pluginName }}
                            </td>
                            <td>
                                <a href=\"index.php?module=CorePluginsAdmin&action=uninstall&pluginName={{ pluginName }}&nonce={{ uninstallNonce }}\"
                                   target=\"_blank\" onclick=\"return confirm('{{ 'CorePluginsAdmin_UninstallConfirm'|translate(pluginName)|e('js') }}')\">uninstall</a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            {% endif %}

        {% elseif isAnonymousUser %}

            <p>Please contact the system administrator, or <a href=\"?module={{ loginModule }}\">login to Matomo</a> to learn more.</p>

        {% else %}
            <p>
                If this error continues to happen you may want to send an
                <a href=\"mailto:{{ emailSuperUser }}?subject={{ 'Fatal error in Matomo ' ~ piwikVersion|e('url') }}&body={{ lastError.message|e('url') }}%20in%20{{ lastError.file|e('url') }}%20{{ lastError.line|e('url') }}%20using%20PHP%20{{ constant('PHP_VERSION') }}\">error report</a>
                to your system administrator.
            </p>
        {% endif %}


        {% if not isAllowedToTroubleshootAsSuperUser and not isSuperUser %}
            <p>If you are Super User, but cannot login because of this error, you can still troubleshoot further. Follow these steps:
                <br/>1) open the config/config.ini.php file and look for the <code>salt</code> value under <code>[General]</code>.
                <br/>2) edit this current URL you are viewing and add the following text (replacing <code>salt_value_from_config</code> by the <code>salt</code> value from the config file):
                <br/><br/><code>index.php?i_am_super_user=salt_value_from_config&....</code>
            </p>
        {% endif %}


        </div>

    </body>
</html>", "@CorePluginsAdmin/safemode.twig", "/var/www/btnhd.com/public_html/piwik/plugins/CorePluginsAdmin/templates/safemode.twig");
    }
}
