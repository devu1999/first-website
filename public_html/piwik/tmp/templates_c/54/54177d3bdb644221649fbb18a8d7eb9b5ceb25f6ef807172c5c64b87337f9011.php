<?php

/* @Insights/insightVisualization.twig */
class __TwigTemplate_0111e504ee00fa39541a38de6e633447574bef9c396cfc593611499fdde8fbe9 extends Twig_Template
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
        if ((array_key_exists("cannotDisplayReport", $context) && ($context["cannotDisplayReport"] ?? $this->getContext($context, "cannotDisplayReport")))) {
            // line 2
            echo "    ";
            $this->loadTemplate("@Insights/cannotDisplayReport.twig", "@Insights/insightVisualization.twig", 2)->display($context);
        } else {
            // line 4
            echo "    ";
            $context["metadata"] = $this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getAllTableMetadata", array());
            // line 5
            echo "    ";
            $context["consideredGrowth"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_TitleConsideredInsightsGrowth", $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "minGrowthPercentPositive", array()), call_user_func_array($this->env->getFilter('prettyDate')->getCallable(), array($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "lastDate", array()), $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "period", array())))));
            // line 6
            echo "    ";
            $context["consideredChanges"] = "";
            // line 7
            echo "
    ";
            // line 8
            if (($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "minChangeMovers", array()) && ($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "minChangeMovers", array()) > 1))) {
                // line 9
                echo "        ";
                $context["consideredChanges"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_IgnoredChanges", $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "minChangeMovers", array())));
                // line 10
                echo "    ";
            }
            // line 11
            echo "
    <div class=\"insightsDataTable\" title=\"";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, ($context["consideredGrowth"] ?? $this->getContext($context, "consideredGrowth")), "html_attr");
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, ($context["consideredChanges"] ?? $this->getContext($context, "consideredChanges")), "html_attr");
            echo "\">
        ";
            // line 13
            if ($this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getRowsCount", array())) {
                // line 14
                echo "            <table class=\"dataTable\">

                <thead>
                    ";
                // line 17
                $this->loadTemplate("@Insights/table_header.twig", "@Insights/insightVisualization.twig", 17)->display($context);
                // line 18
                echo "                </thead>

                <tbody>
                    ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dataTable"] ?? $this->getContext($context, "dataTable")), "getRows", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 22
                    echo "                        ";
                    $this->loadTemplate("@Insights/table_row.twig", "@Insights/insightVisualization.twig", 22)->display($context);
                    // line 23
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                </tbody>
            </table>
        ";
            } else {
                // line 27
                echo "            <div class=\"pk-emptyDataTable\">
                ";
                // line 28
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Insights_NoResultMatchesCriteria")), "html", null, true);
                echo "
            </div>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            $this->loadTemplate("@Insights/insightControls.twig", "@Insights/insightVisualization.twig", 32)->display($context);
            // line 33
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@Insights/insightVisualization.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  119 => 32,  116 => 31,  110 => 28,  107 => 27,  102 => 24,  88 => 23,  85 => 22,  68 => 21,  63 => 18,  61 => 17,  56 => 14,  54 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if cannotDisplayReport is defined and cannotDisplayReport %}
    {% include \"@Insights/cannotDisplayReport.twig\" %}
{% else %}
    {% set metadata = dataTable.getAllTableMetadata%}
    {% set consideredGrowth = 'Insights_TitleConsideredInsightsGrowth'|translate(metadata.minGrowthPercentPositive, metadata.lastDate|prettyDate(metadata.period)) %}
    {% set consideredChanges = '' %}

    {% if metadata.minChangeMovers and metadata.minChangeMovers > 1 %}
        {% set consideredChanges = 'Insights_IgnoredChanges'|translate(metadata.minChangeMovers) %}
    {% endif %}

    <div class=\"insightsDataTable\" title=\"{{ consideredGrowth|e('html_attr') }} {{ consideredChanges|e('html_attr') }}\">
        {% if dataTable.getRowsCount %}
            <table class=\"dataTable\">

                <thead>
                    {% include \"@Insights/table_header.twig\" %}
                </thead>

                <tbody>
                    {% for row in dataTable.getRows %}
                        {% include \"@Insights/table_row.twig\" %}
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <div class=\"pk-emptyDataTable\">
                {{ 'Insights_NoResultMatchesCriteria'|translate }}
            </div>
        {% endif %}

        {% include \"@Insights/insightControls.twig\" %}
    </div>
{% endif %}", "@Insights/insightVisualization.twig", "/var/www/btnhd.com/public_html/piwik/plugins/Insights/templates/insightVisualization.twig");
    }
}
