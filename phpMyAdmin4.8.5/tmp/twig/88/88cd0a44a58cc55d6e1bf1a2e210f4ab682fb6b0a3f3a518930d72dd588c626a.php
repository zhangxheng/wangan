<?php

/* display/export/options_format.twig */
class __TwigTemplate_4afac37a27aba62409c89f1e60fc362f1a1119bcbf65707c6a5a0e6c53b2a24a extends Twig_Template
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
        echo "<div class=\"exportoptions\" id=\"format_specific_opts\">
    <h3>";
        // line 2
        echo _gettext("Format-specific options:");
        echo "</h3>
    <p class=\"no_js_msg\" id=\"scroll_to_options_msg\">
        ";
        // line 4
        echo _gettext("Scroll down to fill in the options for the selected format and ignore the options for other formats.");
        // line 5
        echo "    </p>
    ";
        // line 6
        echo (isset($context["options"]) ? $context["options"] : null);
        echo "
</div>

";
        // line 9
        if ((isset($context["can_convert_kanji"]) ? $context["can_convert_kanji"] : null)) {
            // line 10
            echo "    ";
            // line 11
            echo "    <div class=\"exportoptions\" id=\"kanji_encoding\">
        <h3>";
            // line 12
            echo _gettext("Encoding Conversion:");
            echo "</h3>
        ";
            // line 13
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "display/export/options_format.twig", 13)->display($context);
            // line 14
            echo "    </div>
";
        }
        // line 16
        echo "
<div class=\"exportoptions\" id=\"submit\">
    <input type=\"submit\" value=\"";
        // line 18
        echo _gettext("Go");
        echo "\" id=\"buttonGo\"";
        // line 21
        if (((isset($context["exec_time_limit"]) ? $context["exec_time_limit"] : null) > 0)) {
            // line 22
            echo "            onclick=\"check_time_out(";
            echo twig_escape_filter($this->env, (isset($context["exec_time_limit"]) ? $context["exec_time_limit"] : null), "html", null, true);
            echo ")\"";
        }
        // line 23
        echo ">
</div>
";
    }

    public function getTemplateName()
    {
        return "display/export/options_format.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  64 => 22,  62 => 21,  59 => 18,  55 => 16,  51 => 14,  49 => 13,  45 => 12,  42 => 11,  40 => 10,  38 => 9,  32 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/export/options_format.twig", "G:\\Web\\phpstudy\\phpstudy_pro\\WWW\\zhangheng\\phpMyAdmin4.8.5\\templates\\display\\export\\options_format.twig");
    }
}
