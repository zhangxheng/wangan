<?php

/* display/export/selection.twig */
class __TwigTemplate_1f9b833983ae18ee48743eb1f39e1be445aff9cbb7cadf58d640ca05a389bd80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"exportoptions\" id=\"databases_and_tables\">
    ";
        // line 2
        if (((isset($context["export_type"]) ? $context["export_type"] : null) == "server")) {
            // line 3
            echo "        <h3>";
            echo _gettext("Databases:");
            echo "</h3>
    ";
        } elseif ((        // line 4
(isset($context["export_type"]) ? $context["export_type"] : null) == "database")) {
            // line 5
            echo "        <h3>";
            echo _gettext("Tables:");
            echo "</h3>
    ";
        }
        // line 7
        echo "    ";
        if ( !twig_test_empty((isset($context["multi_values"]) ? $context["multi_values"] : null))) {
            // line 8
            echo "        ";
            echo (isset($context["multi_values"]) ? $context["multi_values"] : null);
            echo "
    ";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "display/export/selection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  40 => 8,  37 => 7,  31 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/export/selection.twig", "G:\\Web\\phpstudy\\phpstudy_pro\\WWW\\zhangheng\\phpMyAdmin4.8.5\\templates\\display\\export\\selection.twig");
    }
}
