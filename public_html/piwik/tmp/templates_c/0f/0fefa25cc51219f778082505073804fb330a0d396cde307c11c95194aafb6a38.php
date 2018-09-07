<?php

/* @UsersManager/index.twig */
class __TwigTemplate_0e080e52deb14b38560dc5f98ef6385a6d16dd26f23ee5ea6a9479613273f2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'websiteAccessTable' => array($this, 'block_websiteAccessTable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ManageAccess")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div piwik-content-block
     content-title=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
        echo "\"
     feature=\"true\"
     style=\"width:800px;\"
     help-url=\"https://matomo.org/docs/manage-users/\"
    >
<div ng-controller=\"ManageUserAccessController as manageUserAccess\">
    <div id=\"sites\" class=\"usersManager\">
        <section class=\"sites_selector_container\">
            <p>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MainDescription")), "html", null, true);
        echo "</p>

            ";
        // line 18
        ob_start();
        // line 19
        echo "                <strong>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ApplyToAllWebsites")), "html", null, true);
        echo "</strong>
            ";
        $context["applyAllSitesText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
            <div piwik-siteselector
                 show-selected-site=\"true\"
                 only-sites-with-admin-access=\"true\"
                 class=\"sites_autocomplete\"
                 ng-model=\"manageUserAccess.site\"
                 ng-change=\"manageUserAccess.siteChanged()\"
                 siteid=\"";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, ($context["idSiteSelected"] ?? $this->getContext($context, "idSiteSelected")), "html", null, true);
        echo "\"
                 sitename=\"";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, ($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName")), "html", null, true);
        echo "\"
                 all-sites-text=\"";
        // line 30
        echo ($context["applyAllSitesText"] ?? $this->getContext($context, "applyAllSitesText"));
        echo "\"
                 all-sites-location=\"top\"
                 id=\"usersManagerSiteSelect\"
                 switch-site-on-select=\"false\"></div>
        </section>
    </div>

    ";
        // line 37
        $this->displayBlock('websiteAccessTable', $context, $blocks);
        // line 315
        echo "
";
    }

    // line 37
    public function block_websiteAccessTable($context, array $blocks = array())
    {
        // line 38
        echo "
    ";
        // line 39
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@UsersManager/index.twig", 39);
        // line 40
        echo "
    <div piwik-activity-indicator class=\"loadingManageUserAccess\" loading=\"manageUserAccess.isLoading\"></div>
    <div id=\"accessUpdated\" style=\"vertical-align:top;\"></div>

    ";
        // line 44
        if (($context["anonymousHasViewAccess"] ?? $this->getContext($context, "anonymousHasViewAccess"))) {
            // line 45
            echo "        <br/>
        <div class=\"alert alert-warning\">
            ";
            // line 47
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter(array(0 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess", "'anonymous'", "'view'")), 1 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess2"))), " "), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 50
        echo "
    <table piwik-content-table id=\"manageUserAccess\">
        <thead>
        <tr>
            <th class='first'>";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
        echo "</th>
            <th>";
        // line 55
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
        echo "</th>
            <th>";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivNone")), "html", null, true);
        echo "</th>
            <th>";
        // line 57
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivView")), "html", null, true);
        echo " <a href=\"https://matomo.org/faq/general/faq_70/\" rel=\"noreferrer\" target=\"_blank\" class=\"helpLink\"><span class=\"icon-help\"></span></a></th>
            <th>";
        // line 58
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivAdmin")), "html", null, true);
        echo " <a href=\"https://matomo.org/faq/general/faq_69/\" rel=\"noreferrer\" target=\"_blank\" class=\"helpLink\"><span class=\"icon-help\"></span></a></th>
        </tr>
        </thead>

        <tbody>

        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usersAccessByWebsite"] ?? $this->getContext($context, "usersAccessByWebsite")));
        foreach ($context['_seq'] as $context["login"] => $context["access"]) {
            // line 65
            echo "
            ";
            // line 66
            ob_start();
            // line 67
            echo "              <img src='plugins/UsersManager/images/ok.png' class='accessGranted'
                ";
            // line 68
            if (($context["access"] == "noaccess")) {
                // line 69
                echo "                title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UserHasNoPermission", $context["login"], call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivNone")), ($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName")))), "html", null, true);
                echo "\"
                ";
            } elseif ((            // line 70
$context["access"] == "view")) {
                // line 71
                echo "                title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UserHasPermission", $context["login"], call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivView")), ($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName")))), "html", null, true);
                echo "\"
                ";
            } elseif ((            // line 72
$context["access"] == "admin")) {
                // line 73
                echo "                title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UserHasPermission", $context["login"], call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivAdmin")), ($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName")))), "html", null, true);
                echo "\"
                ";
            }
            // line 75
            echo "              />
            ";
            $context["accesValid"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 77
            echo "            ";
            ob_start();
            echo "<span title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExceptionSuperUserAccess")), "html", null, true);
            echo "\">N/A</span>";
            $context["superUserAccess"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 78
            echo "
            ";
            // line 79
            if ((($context["userIsSuperUser"] ?? $this->getContext($context, "userIsSuperUser")) || (($context["hasOnlyAdminAccess"] ?? $this->getContext($context, "hasOnlyAdminAccess")) && (($context["access"] != "noaccess") || (($context["idSiteSelected"] ?? $this->getContext($context, "idSiteSelected")) == "all"))))) {
                // line 80
                echo "            <tr data-login=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["login"], "html_attr");
                echo "\">
                <td id='login'>";
                // line 81
                echo \Piwik\piwik_escape_filter($this->env, $context["login"], "html", null, true);
                echo "</td>
                <td>";
                // line 82
                echo $this->getAttribute(($context["usersAliasByLogin"] ?? $this->getContext($context, "usersAliasByLogin")), $context["login"], array(), "array");
                echo "</td>
                <td id='noaccess'>
                    ";
                // line 84
                if (twig_in_filter($context["login"], ($context["superUserLogins"] ?? $this->getContext($context, "superUserLogins")))) {
                    // line 85
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["superUserAccess"] ?? $this->getContext($context, "superUserAccess")), "html", null, true);
                    echo "
                    ";
                } elseif (((                // line 86
$context["access"] == "noaccess") && (($context["idSiteSelected"] ?? $this->getContext($context, "idSiteSelected")) != "all"))) {
                    // line 87
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["accesValid"] ?? $this->getContext($context, "accesValid")), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 89
                    echo "                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                             ng-click='manageUserAccess.setAccess(";
                    // line 90
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                    echo ", \"noaccess\")'
                             title=\"";
                    // line 91
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_RemoveUserAccess", $context["login"], ($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName")))), "html_attr");
                    echo "\"
                        />
                    ";
                }
                // line 93
                echo "&nbsp;</td>
                <td id='view'>
                    ";
                // line 95
                if (twig_in_filter($context["login"], ($context["superUserLogins"] ?? $this->getContext($context, "superUserLogins")))) {
                    // line 96
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["superUserAccess"] ?? $this->getContext($context, "superUserAccess")), "html", null, true);
                    echo "
                    ";
                } elseif (((                // line 97
$context["access"] == "view") && (($context["idSiteSelected"] ?? $this->getContext($context, "idSiteSelected")) != "all"))) {
                    // line 98
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["accesValid"] ?? $this->getContext($context, "accesValid")), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 100
                    echo "                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                             ng-click='manageUserAccess.setAccess(";
                    // line 101
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                    echo ", \"view\")'
                             title=\"";
                    // line 102
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_GiveUserAccess", $context["login"], call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivView")), ($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName")))), "html_attr");
                    echo "\"
                        />
                    ";
                }
                // line 104
                echo "&nbsp;</td>
                <td id='admin'>
                    ";
                // line 106
                if (twig_in_filter($context["login"], ($context["superUserLogins"] ?? $this->getContext($context, "superUserLogins")))) {
                    // line 107
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["superUserAccess"] ?? $this->getContext($context, "superUserAccess")), "html", null, true);
                    echo "
                    ";
                } elseif ((                // line 108
$context["login"] == "anonymous")) {
                    // line 109
                    echo "                        N/A
                    ";
                } else {
                    // line 111
                    echo "                        ";
                    if ((($context["access"] == "admin") && (($context["idSiteSelected"] ?? $this->getContext($context, "idSiteSelected")) != "all"))) {
                        // line 112
                        echo "                            ";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["accesValid"] ?? $this->getContext($context, "accesValid")), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 114
                        echo "                            <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                                 ng-click='manageUserAccess.setAccess(";
                        // line 115
                        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                        echo ", \"admin\")'
                                 title=\"";
                        // line 116
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_GiveUserAccess", $context["login"], call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivAdmin")), ($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName")))), "html_attr");
                        echo "\"
                            />
                        ";
                    }
                    // line 118
                    echo "&nbsp;
                    ";
                }
                // line 120
                echo "                </td>
            </tr>
            ";
            }
            // line 123
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['login'], $context['access'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        </tbody>
    </table>

    ";
        // line 127
        if (($context["hasOnlyAdminAccess"] ?? $this->getContext($context, "hasOnlyAdminAccess"))) {
            // line 128
            echo "        <div class=\"tableActionBar\">
            <div ng-controller=\"GiveUserViewAccessController as giveViewAccess\" piwik-form>
                <button id=\"showGiveViewAccessForm\"
                        ng-show=\"!giveViewAccess.showForm\" ng-click=\"giveViewAccess.showViewAccessForm()\">
                    <span class=\"icon-add\"></span>
                    ";
            // line 133
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_GiveViewAccessTitle", (("\"" . ($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName"))) . "\"")));
            echo "
                </button>

                <form id=\"giveViewAccessForm\" ng-show=\"giveViewAccess.showForm\">
                    <div piwik-field uicontrol=\"text\" name=\"user_invite\"
                         ng-model=\"giveViewAccess.usernameOrEmail\"
                         full-width=\"true\"
                         title=\"";
            // line 140
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_EnterUsernameOrEmail")), "html_attr");
            echo "\"
                         >
                    </div>

                    <div piwik-save-button id=\"giveUserAccessToViewReports\"
                         onconfirm=\"giveViewAccess.giveAccess()\"
                           saving=\"giveViewAccess.isLoading\"
                           value=\"";
            // line 147
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_GiveViewAccess", (("'" . ($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName"))) . "'"))), "html_attr");
            echo "\"></div>

                </form>
            </div>
        </div>
        <div id=\"ajaxErrorGiveViewAccess\">

        </div>
    ";
        }
        // line 156
        echo "</div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>";
        // line 160
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangeAllConfirm", "<span class='login'></span>"));
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 161
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 162
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<div class=\"ui-confirm\" id=\"confirmAnonymousAccess\">
    <h2>";
        // line 166
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousAccessConfirmation")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 167
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 168
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

";
        // line 171
        if (($context["userIsSuperUser"] ?? $this->getContext($context, "userIsSuperUser"))) {
            // line 172
            echo "<div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagement")), "html_attr");
            echo "\">
    <div class=\"ui-confirm\" id=\"confirmUserRemove\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 175
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 176
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"confirmTokenRegenerate\">
        <h2>";
            // line 180
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TokenRegenerateConfirm")), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 181
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 182
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>
    <div class=\"ui-confirm\" id=\"confirmTokenRegenerateSelf\">
        <h2>";
            // line 185
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TokenRegenerateConfirmSelf")), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 186
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 187
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>

    <br/>
    <p>";
            // line 191
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagementMainDescription")), "html", null, true);
            echo "
        ";
            // line 192
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ThereAreCurrentlyNRegisteredUsers", (("<b>" . ($context["usersCount"] ?? $this->getContext($context, "usersCount"))) . "</b>")));
            echo "</p>
    ";
            // line 193
            $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@UsersManager/index.twig", 193);
            // line 194
            echo "
    <div class=\"user\" ng-controller=\"ManageUsersController as manageUsers\">
        <div piwik-activity-indicator class=\"loadingManageUsers\" loading=\"manageUsers.isLoading\"></div>

        <table piwik-content-table id=\"users\">
            <thead>
            <tr>
                <th>";
            // line 201
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "</th>
                <th>";
            // line 202
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "</th>
                <th>";
            // line 203
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html", null, true);
            echo "</th>
                <th>";
            // line 204
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
                ";
            // line 205
            if ((array_key_exists("showLastSeen", $context) && ($context["showLastSeen"] ?? $this->getContext($context, "showLastSeen")))) {
                // line 206
                echo "                <th>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_LastSeen")), "html", null, true);
                echo "</th>
                ";
            }
            // line 208
            echo "                <th>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
            echo "</th>
                <th>";
            // line 209
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
            echo "</th>
            </tr>
            </thead>

            <tbody>
            ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["i"] => $context["user"]) {
                // line 215
                echo "                ";
                if (($this->getAttribute($context["user"], "login", array()) != "anonymous")) {
                    // line 216
                    echo "                    <tr class=\"editable\" id=\"row";
                    echo \Piwik\piwik_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">
                        <td id=\"userLogin\" class=\"editable\" ng-click='manageUsers.editUser(\"row";
                    // line 217
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'>";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
                    echo "</td>
                        <td id=\"password\" class=\"editable\" ng-click='manageUsers.editUser(\"row";
                    // line 218
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'>-</td>
                        <td id=\"email\" class=\"editable\" ng-click='manageUsers.editUser(\"row";
                    // line 219
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'>";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                    echo "</td>
                        <td id=\"alias\" class=\"editable\" ng-click='manageUsers.editUser(\"row";
                    // line 220
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'>";
                    echo $this->getAttribute($context["user"], "alias", array());
                    echo "</td>
                        ";
                    // line 221
                    if ($this->getAttribute($context["user"], "last_seen", array(), "any", true, true)) {
                        // line 222
                        echo "                        <td id=\"last_seen\">";
                        if (twig_test_empty($this->getAttribute($context["user"], "last_seen", array()))) {
                            echo "-";
                        } else {
                            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeAgo", $this->getAttribute($context["user"], "last_seen", array())));
                        }
                        echo "</td>
                        ";
                    }
                    // line 224
                    echo "                        <td class=\"center\">
                            <button ng-click='manageUsers.editUser(\"row";
                    // line 225
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["i"], "js"), "html", null, true);
                    echo "\")'
                                    class=\"edituser table-action\" title=\"";
                    // line 226
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                    echo "\">
                                <span class=\"icon-edit\"></span>
                            </button>
                        </td>
                        <td class=\"center\">
                            <button class=\"deleteuser table-action\"
                                    ng-click='manageUsers.deleteUser(";
                    // line 232
                    echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["user"], "login", array())), "html", null, true);
                    echo ")'
                                    title=\"";
                    // line 233
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                    echo "\">
                                <span class=\"icon-delete\"></span>
                            </button>
                        </td>
                    </tr>
                ";
                }
                // line 239
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "            </tbody>
        </table>

        <div class=\"tableActionBar\">
            <button class=\"add-user\" ng-click=\"manageUsers.createUser()\" ng-show=\"manageUsers.showCreateUser\">
                <span class=\"icon-add\"></span>
                ";
            // line 246
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AddUser")), "html", null, true);
            echo "
            </button>
        </div>
    </div>
</div>

<div piwik-content-block
     id=\"super_user_access\"
     style=\"width:800px;\"
     content-title=\"";
            // line 255
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagement")), "html_attr");
            echo "\">

    <div ng-controller=\"ManageSuperUserController as manageSuperUser\">

        <p>";
            // line 259
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementMainDescription")), "html", null, true);
            echo " <br/>
        ";
            // line 260
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementGrantMore")), "html", null, true);
            echo "</p>

        <div piwik-activity-indicator class=\"loadingManageSuperUser\" loading=\"manageSuperUser.isLoading\"></div>

        <div id=\"superUserAccessUpdated\" style=\"vertical-align:top;\"></div>

        <table piwik-content-table id=\"superUserAccess\" >
            <thead>
            <tr>
                <th class='first'>";
            // line 269
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
            echo "</th>
                <th>";
            // line 270
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
                <th>";
            // line 271
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SuperUser")), "html", null, true);
            echo " <a href=\"https://matomo.org/faq/general/faq_35/\" rel=\"noreferrer\" target=\"_blank\" class=\"helpLink\"><span class=\"icon-help\"></span></a></th>
            </tr>
            </thead>

            <tbody>
            ";
            // line 276
            if ((twig_length_filter($this->env, ($context["users"] ?? $this->getContext($context, "users"))) > 1)) {
                // line 277
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["usersAliasByLogin"] ?? $this->getContext($context, "usersAliasByLogin")));
                foreach ($context['_seq'] as $context["login"] => $context["alias"]) {
                    if (($context["login"] != "anonymous")) {
                        // line 278
                        echo "                    <tr>
                        <td id='login'>";
                        // line 279
                        echo \Piwik\piwik_escape_filter($this->env, $context["login"], "html", null, true);
                        echo "</td>
                        <td>";
                        // line 280
                        echo $context["alias"];
                        echo "</td>
                        <td id='superuser'>
                            ";
                        // line 282
                        if (twig_in_filter($context["login"], ($context["superUserLogins"] ?? $this->getContext($context, "superUserLogins")))) {
                            // line 283
                            echo "                                <img src='plugins/UsersManager/images/ok.png' class='accessGranted'
                                     ng-click='manageSuperUser.removeSuperUserAccess(";
                            // line 284
                            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                            echo ")' />
                            ";
                        }
                        // line 286
                        echo "                            ";
                        if ( !twig_in_filter($context["login"], ($context["superUserLogins"] ?? $this->getContext($context, "superUserLogins")))) {
                            // line 287
                            echo "                                <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                                     ng-click='manageSuperUser.giveSuperUserAccess(";
                            // line 288
                            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter($context["login"]), "html", null, true);
                            echo ")' />
                            ";
                        }
                        // line 290
                        echo "                            &nbsp;
                        </td>
                    </tr>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['login'], $context['alias'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 294
                echo "            ";
            } else {
                // line 295
                echo "                <tr>
                    <td colspan=\"3\">
                        ";
                // line 297
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_NoUsersExist")), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
            }
            // line 301
            echo "            </tbody>
        </table>

        <div class=\"ui-confirm\" id=\"superUserAccessConfirm\">
            <h2> </h2>
            <input role=\"yes\" type=\"button\" value=\"";
            // line 306
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
            <input role=\"no\" type=\"button\" value=\"";
            // line 307
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
        </div>

    </div>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "@UsersManager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  736 => 307,  732 => 306,  725 => 301,  718 => 297,  714 => 295,  711 => 294,  701 => 290,  696 => 288,  693 => 287,  690 => 286,  685 => 284,  682 => 283,  680 => 282,  675 => 280,  671 => 279,  668 => 278,  662 => 277,  660 => 276,  652 => 271,  648 => 270,  644 => 269,  632 => 260,  628 => 259,  621 => 255,  609 => 246,  601 => 240,  595 => 239,  586 => 233,  582 => 232,  573 => 226,  569 => 225,  566 => 224,  556 => 222,  554 => 221,  548 => 220,  542 => 219,  538 => 218,  532 => 217,  527 => 216,  524 => 215,  520 => 214,  512 => 209,  507 => 208,  501 => 206,  499 => 205,  495 => 204,  491 => 203,  487 => 202,  483 => 201,  474 => 194,  472 => 193,  468 => 192,  464 => 191,  457 => 187,  453 => 186,  449 => 185,  443 => 182,  439 => 181,  435 => 180,  428 => 176,  424 => 175,  417 => 172,  415 => 171,  409 => 168,  405 => 167,  401 => 166,  394 => 162,  390 => 161,  386 => 160,  380 => 156,  368 => 147,  358 => 140,  348 => 133,  341 => 128,  339 => 127,  334 => 124,  328 => 123,  323 => 120,  319 => 118,  313 => 116,  309 => 115,  306 => 114,  300 => 112,  297 => 111,  293 => 109,  291 => 108,  286 => 107,  284 => 106,  280 => 104,  274 => 102,  270 => 101,  267 => 100,  261 => 98,  259 => 97,  254 => 96,  252 => 95,  248 => 93,  242 => 91,  238 => 90,  235 => 89,  229 => 87,  227 => 86,  222 => 85,  220 => 84,  215 => 82,  211 => 81,  206 => 80,  204 => 79,  201 => 78,  194 => 77,  190 => 75,  184 => 73,  182 => 72,  177 => 71,  175 => 70,  170 => 69,  168 => 68,  165 => 67,  163 => 66,  160 => 65,  156 => 64,  147 => 58,  143 => 57,  139 => 56,  135 => 55,  131 => 54,  125 => 50,  119 => 47,  115 => 45,  113 => 44,  107 => 40,  105 => 39,  102 => 38,  99 => 37,  94 => 315,  92 => 37,  82 => 30,  78 => 29,  74 => 28,  65 => 21,  59 => 19,  57 => 18,  52 => 16,  41 => 8,  37 => 6,  34 => 5,  30 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.twig' %}

{% set title %}{{ 'UsersManager_ManageAccess'|translate }}{% endset %}

{% block content %}

<div piwik-content-block
     content-title=\"{{ title|e('html_attr') }}\"
     feature=\"true\"
     style=\"width:800px;\"
     help-url=\"https://matomo.org/docs/manage-users/\"
    >
<div ng-controller=\"ManageUserAccessController as manageUserAccess\">
    <div id=\"sites\" class=\"usersManager\">
        <section class=\"sites_selector_container\">
            <p>{{ 'UsersManager_MainDescription'|translate }}</p>

            {% set applyAllSitesText %}
                <strong>{{ 'UsersManager_ApplyToAllWebsites'|translate }}</strong>
            {% endset %}

            <div piwik-siteselector
                 show-selected-site=\"true\"
                 only-sites-with-admin-access=\"true\"
                 class=\"sites_autocomplete\"
                 ng-model=\"manageUserAccess.site\"
                 ng-change=\"manageUserAccess.siteChanged()\"
                 siteid=\"{{ idSiteSelected }}\"
                 sitename=\"{{ defaultReportSiteName }}\"
                 all-sites-text=\"{{ applyAllSitesText|raw }}\"
                 all-sites-location=\"top\"
                 id=\"usersManagerSiteSelect\"
                 switch-site-on-select=\"false\"></div>
        </section>
    </div>

    {% block websiteAccessTable %}

    {% import 'ajaxMacros.twig' as ajax %}

    <div piwik-activity-indicator class=\"loadingManageUserAccess\" loading=\"manageUserAccess.isLoading\"></div>
    <div id=\"accessUpdated\" style=\"vertical-align:top;\"></div>

    {% if anonymousHasViewAccess %}
        <br/>
        <div class=\"alert alert-warning\">
            {{ ['UsersManager_AnonymousUserHasViewAccess'|translate(\"'anonymous'\",\"'view'\"), 'UsersManager_AnonymousUserHasViewAccess2'|translate]|join(' ') }}
        </div>
    {% endif %}

    <table piwik-content-table id=\"manageUserAccess\">
        <thead>
        <tr>
            <th class='first'>{{ 'UsersManager_User'|translate }}</th>
            <th>{{ 'UsersManager_Alias'|translate }}</th>
            <th>{{ 'UsersManager_PrivNone'|translate }}</th>
            <th>{{ 'UsersManager_PrivView'|translate }} <a href=\"https://matomo.org/faq/general/faq_70/\" rel=\"noreferrer\" target=\"_blank\" class=\"helpLink\"><span class=\"icon-help\"></span></a></th>
            <th>{{ 'UsersManager_PrivAdmin'|translate }} <a href=\"https://matomo.org/faq/general/faq_69/\" rel=\"noreferrer\" target=\"_blank\" class=\"helpLink\"><span class=\"icon-help\"></span></a></th>
        </tr>
        </thead>

        <tbody>

        {% for login,access in usersAccessByWebsite %}

            {% set accesValid %}
              <img src='plugins/UsersManager/images/ok.png' class='accessGranted'
                {% if access == 'noaccess' %}
                title=\"{{'UsersManager_UserHasNoPermission'|translate(login,'UsersManager_PrivNone'|translate,defaultReportSiteName)}}\"
                {% elseif access == 'view' %}
                title=\"{{'UsersManager_UserHasPermission'|translate(login,'UsersManager_PrivView'|translate,defaultReportSiteName)}}\"
                {% elseif access == 'admin' %}
                title=\"{{'UsersManager_UserHasPermission'|translate(login,'UsersManager_PrivAdmin'|translate,defaultReportSiteName)}}\"
                {% endif %}
              />
            {% endset %}
            {% set superUserAccess %}<span title=\"{{ 'UsersManager_ExceptionSuperUserAccess'|translate }}\">N/A</span>{% endset %}

            {% if userIsSuperUser or (hasOnlyAdminAccess and (access!='noaccess' or idSiteSelected == 'all'))  %}
            <tr data-login=\"{{ login|e('html_attr') }}\">
                <td id='login'>{{ login }}</td>
                <td>{{ usersAliasByLogin[login]|raw }}</td>
                <td id='noaccess'>
                    {% if login in superUserLogins %}
                        {{ superUserAccess }}
                    {% elseif access=='noaccess' and idSiteSelected != 'all' %}
                        {{ accesValid }}
                    {% else %}
                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                             ng-click='manageUserAccess.setAccess({{ login|json_encode}}, \"noaccess\")'
                             title=\"{{'UsersManager_RemoveUserAccess'|translate(login,defaultReportSiteName)|e('html_attr')}}\"
                        />
                    {% endif %}&nbsp;</td>
                <td id='view'>
                    {% if login in superUserLogins %}
                        {{ superUserAccess }}
                    {% elseif access == 'view' and idSiteSelected != 'all' %}
                        {{ accesValid }}
                    {% else %}
                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                             ng-click='manageUserAccess.setAccess({{ login|json_encode}}, \"view\")'
                             title=\"{{'UsersManager_GiveUserAccess'|translate(login,'UsersManager_PrivView'|translate,defaultReportSiteName)|e('html_attr')}}\"
                        />
                    {% endif %}&nbsp;</td>
                <td id='admin'>
                    {% if login in superUserLogins %}
                        {{ superUserAccess }}
                    {% elseif login == 'anonymous' %}
                        N/A
                    {% else %}
                        {% if access == 'admin' and idSiteSelected != 'all' %}
                            {{ accesValid }}
                        {% else %}
                            <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                                 ng-click='manageUserAccess.setAccess({{ login|json_encode}}, \"admin\")'
                                 title=\"{{'UsersManager_GiveUserAccess'|translate(login,'UsersManager_PrivAdmin'|translate,defaultReportSiteName)|e('html_attr')}}\"
                            />
                        {% endif %}&nbsp;
                    {% endif %}
                </td>
            </tr>
            {% endif %}
        {% endfor %}
        </tbody>
    </table>

    {% if hasOnlyAdminAccess %}
        <div class=\"tableActionBar\">
            <div ng-controller=\"GiveUserViewAccessController as giveViewAccess\" piwik-form>
                <button id=\"showGiveViewAccessForm\"
                        ng-show=\"!giveViewAccess.showForm\" ng-click=\"giveViewAccess.showViewAccessForm()\">
                    <span class=\"icon-add\"></span>
                    {{ 'UsersManager_GiveViewAccessTitle'|translate('\"' ~ defaultReportSiteName ~ '\"')|raw }}
                </button>

                <form id=\"giveViewAccessForm\" ng-show=\"giveViewAccess.showForm\">
                    <div piwik-field uicontrol=\"text\" name=\"user_invite\"
                         ng-model=\"giveViewAccess.usernameOrEmail\"
                         full-width=\"true\"
                         title=\"{{ 'UsersManager_EnterUsernameOrEmail'|translate|e('html_attr') }}\"
                         >
                    </div>

                    <div piwik-save-button id=\"giveUserAccessToViewReports\"
                         onconfirm=\"giveViewAccess.giveAccess()\"
                           saving=\"giveViewAccess.isLoading\"
                           value=\"{{ 'UsersManager_GiveViewAccess'|translate(\"'\" ~ defaultReportSiteName ~ \"'\")|e('html_attr') }}\"></div>

                </form>
            </div>
        </div>
        <div id=\"ajaxErrorGiveViewAccess\">

        </div>
    {% endif %}
</div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>{{ 'UsersManager_ChangeAllConfirm'|translate(\"<span class='login'></span>\")|raw }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>

<div class=\"ui-confirm\" id=\"confirmAnonymousAccess\">
    <h2>{{ 'UsersManager_AnonymousAccessConfirmation'|translate }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>

{% if userIsSuperUser %}
<div piwik-content-block content-title=\"{{ 'UsersManager_UsersManagement'|translate|e('html_attr') }}\">
    <div class=\"ui-confirm\" id=\"confirmUserRemove\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"confirmTokenRegenerate\">
        <h2>{{ 'UsersManager_TokenRegenerateConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>
    <div class=\"ui-confirm\" id=\"confirmTokenRegenerateSelf\">
        <h2>{{ 'UsersManager_TokenRegenerateConfirmSelf'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <br/>
    <p>{{ 'UsersManager_UsersManagementMainDescription'|translate }}
        {{ 'UsersManager_ThereAreCurrentlyNRegisteredUsers'|translate(\"<b>\"~usersCount~\"</b>\")|raw }}</p>
    {% import 'ajaxMacros.twig' as ajax %}

    <div class=\"user\" ng-controller=\"ManageUsersController as manageUsers\">
        <div piwik-activity-indicator class=\"loadingManageUsers\" loading=\"manageUsers.isLoading\"></div>

        <table piwik-content-table id=\"users\">
            <thead>
            <tr>
                <th>{{ 'General_Username'|translate }}</th>
                <th>{{ 'General_Password'|translate }}</th>
                <th>{{ 'UsersManager_Email'|translate }}</th>
                <th>{{ 'UsersManager_Alias'|translate }}</th>
                {% if showLastSeen is defined and showLastSeen %}
                <th>{{ 'UsersManager_LastSeen'|translate }}</th>
                {% endif %}
                <th>{{ 'General_Edit'|translate }}</th>
                <th>{{ 'General_Delete'|translate }}</th>
            </tr>
            </thead>

            <tbody>
            {% for i,user in users %}
                {% if user.login != 'anonymous' %}
                    <tr class=\"editable\" id=\"row{{ i }}\">
                        <td id=\"userLogin\" class=\"editable\" ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'>{{ user.login }}</td>
                        <td id=\"password\" class=\"editable\" ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'>-</td>
                        <td id=\"email\" class=\"editable\" ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'>{{ user.email }}</td>
                        <td id=\"alias\" class=\"editable\" ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'>{{ user.alias|raw }}</td>
                        {% if user.last_seen is defined %}
                        <td id=\"last_seen\">{% if user.last_seen is empty %}-{% else %}{{ 'General_TimeAgo'|translate(user.last_seen)|raw }}{% endif %}</td>
                        {% endif %}
                        <td class=\"center\">
                            <button ng-click='manageUsers.editUser(\"row{{ i|e('js') }}\")'
                                    class=\"edituser table-action\" title=\"{{ 'General_Edit'|translate }}\">
                                <span class=\"icon-edit\"></span>
                            </button>
                        </td>
                        <td class=\"center\">
                            <button class=\"deleteuser table-action\"
                                    ng-click='manageUsers.deleteUser({{ user.login|json_encode }})'
                                    title=\"{{ 'General_Delete'|translate }}\">
                                <span class=\"icon-delete\"></span>
                            </button>
                        </td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>

        <div class=\"tableActionBar\">
            <button class=\"add-user\" ng-click=\"manageUsers.createUser()\" ng-show=\"manageUsers.showCreateUser\">
                <span class=\"icon-add\"></span>
                {{ 'UsersManager_AddUser'|translate }}
            </button>
        </div>
    </div>
</div>

<div piwik-content-block
     id=\"super_user_access\"
     style=\"width:800px;\"
     content-title=\"{{ 'UsersManager_SuperUserAccessManagement'|translate|e('html_attr') }}\">

    <div ng-controller=\"ManageSuperUserController as manageSuperUser\">

        <p>{{ 'UsersManager_SuperUserAccessManagementMainDescription'|translate }} <br/>
        {{ 'UsersManager_SuperUserAccessManagementGrantMore'|translate }}</p>

        <div piwik-activity-indicator class=\"loadingManageSuperUser\" loading=\"manageSuperUser.isLoading\"></div>

        <div id=\"superUserAccessUpdated\" style=\"vertical-align:top;\"></div>

        <table piwik-content-table id=\"superUserAccess\" >
            <thead>
            <tr>
                <th class='first'>{{ 'UsersManager_User'|translate }}</th>
                <th>{{ 'UsersManager_Alias'|translate }}</th>
                <th>{{ 'Installation_SuperUser'|translate }} <a href=\"https://matomo.org/faq/general/faq_35/\" rel=\"noreferrer\" target=\"_blank\" class=\"helpLink\"><span class=\"icon-help\"></span></a></th>
            </tr>
            </thead>

            <tbody>
            {% if users|length > 1 %}
                {% for login,alias in usersAliasByLogin if login != 'anonymous' %}
                    <tr>
                        <td id='login'>{{ login }}</td>
                        <td>{{ alias|raw }}</td>
                        <td id='superuser'>
                            {% if login in superUserLogins %}
                                <img src='plugins/UsersManager/images/ok.png' class='accessGranted'
                                     ng-click='manageSuperUser.removeSuperUserAccess({{ login|json_encode}})' />
                            {% endif %}
                            {% if not (login in superUserLogins) %}
                                <img src='plugins/UsersManager/images/no-access.png' class='updateAccess'
                                     ng-click='manageSuperUser.giveSuperUserAccess({{ login|json_encode }})' />
                            {% endif %}
                            &nbsp;
                        </td>
                    </tr>
                {% endfor %}
            {% else %}
                <tr>
                    <td colspan=\"3\">
                        {{ 'UsersManager_NoUsersExist'|translate }}
                    </td>
                </tr>
            {% endif %}
            </tbody>
        </table>

        <div class=\"ui-confirm\" id=\"superUserAccessConfirm\">
            <h2> </h2>
            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
            <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
        </div>

    </div>
</div>

{% endif %}
{% endblock %}

{% endblock %}
", "@UsersManager/index.twig", "/var/www/btnhd.com/public_html/piwik/plugins/UsersManager/templates/index.twig");
    }
}
