<?php

/* console/toolbar.twig */
class __TwigTemplate_3b31c867c6337acde4dd14e6c30cbe61a6f081491d3502aa4ec524e1c03ebe68 extends Twig_Template
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
        echo "<div class=\"toolbar";
        echo twig_escape_filter($this->env, ($context["parent_div_classes"] ?? null), "html", null, true);
        echo "\">";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 3
            if ((isset($context["content"]) || array_key_exists("content", $context))) {
                // line 4
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["content"], 0, [], "array"), "html", null, true);
                echo "\">";
                // line 5
                echo (($this->getAttribute($context["content"], "image", [], "array", true, true)) ? ($this->getAttribute($context["content"], "image", [], "array")) : (""));
                echo "
            <span>";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["content"], 1, [], "array"), "html", null, true);
                echo "</span>
        </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "console/toolbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  37 => 6,  33 => 5,  29 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "console/toolbar.twig", "G:\\Web\\phpstudy\\phpstudy_pro\\WWW\\zhangheng\\phpMyAdmin4.8.5\\templates\\console\\toolbar.twig");
    }
}
