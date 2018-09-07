<?php

/* @ProfessionalServices/promoBelowCampaigns.twig */
class __TwigTemplate_e0d7429c6180e520c77ab86a333d31f3d79d870081698690c0273fd06d142907 extends Twig_Template
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
        echo "<p style=\"margin-top:3em\" class=\" alert-info alert\">Did you know?
    <br/> <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/docs/tracking-campaigns/\">Campaign tracking</a> lets you measure the effectiveness of your marketing campaigns such as emails marketing, paid search, banner ads, affiliates links, etc.
    Use the <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/docs/tracking-campaigns/\">URL Builder tool</a> to create your links with new URL campaign parameters.
    ";
        // line 4
        if (($context["displayMarketingCampaignsReportingAd"] ?? $this->getContext($context, "displayMarketingCampaignsReportingAd"))) {
            // line 5
            echo "        <br/> Install our <a target=\"_blank\" rel=\"noreferrer\" href=\"https://plugins.matomo.org/MarketingCampaignsReporting\">Marketing Campaigns Reporting plugin</a> to get even more campaigns reports and new segments for up to five marketing channels (campaign, source, medium, keyword, content).
    ";
        }
        // line 7
        echo "    ";
        if (($context["multiChannelConversionAttributionAd"] ?? $this->getContext($context, "multiChannelConversionAttributionAd"))) {
            // line 8
            echo "        <br />
        Discover how much each campaign truly contributes to your success by applying attribution models using the <a target=\"_blank\" rel=\"noreferrer\" href=\"https://plugins.piwik.org/MarketingCampaignsReporting\">Multi Channel Conversion Attribution</a> premium feature.
    ";
        }
        // line 11
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoBelowCampaigns.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  33 => 8,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p style=\"margin-top:3em\" class=\" alert-info alert\">Did you know?
    <br/> <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/docs/tracking-campaigns/\">Campaign tracking</a> lets you measure the effectiveness of your marketing campaigns such as emails marketing, paid search, banner ads, affiliates links, etc.
    Use the <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/docs/tracking-campaigns/\">URL Builder tool</a> to create your links with new URL campaign parameters.
    {% if displayMarketingCampaignsReportingAd %}
        <br/> Install our <a target=\"_blank\" rel=\"noreferrer\" href=\"https://plugins.matomo.org/MarketingCampaignsReporting\">Marketing Campaigns Reporting plugin</a> to get even more campaigns reports and new segments for up to five marketing channels (campaign, source, medium, keyword, content).
    {% endif %}
    {% if multiChannelConversionAttributionAd %}
        <br />
        Discover how much each campaign truly contributes to your success by applying attribution models using the <a target=\"_blank\" rel=\"noreferrer\" href=\"https://plugins.piwik.org/MarketingCampaignsReporting\">Multi Channel Conversion Attribution</a> premium feature.
    {% endif %}
</p>", "@ProfessionalServices/promoBelowCampaigns.twig", "/var/www/btnhd.com/public_html/piwik/plugins/ProfessionalServices/templates/promoBelowCampaigns.twig");
    }
}
