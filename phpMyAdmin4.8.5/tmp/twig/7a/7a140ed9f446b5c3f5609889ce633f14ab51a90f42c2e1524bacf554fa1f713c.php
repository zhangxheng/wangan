<?php

/* privileges/delete_user_fieldset.twig */
class __TwigTemplate_74c89103ec6638257f0a02882bdb70d50f33aa07847a56543c9f265cc39d6c75 extends Twig_Template
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
        echo "<fieldset id=\"fieldset_delete_user\">
    <legend>";
        // line 3
        echo PhpMyAdmin\Util::getIcon("b_usrdrop");
        echo _gettext("Remove selected user accounts");
        // line 4
        echo "    </legend>
    <input type=\"hidden\" name=\"mode\" value=\"2\" />
    <p>(";
        // line 6
        echo _gettext("Revoke all active privileges from the users and delete them afterwards.");
        echo ")</p>
    <input type=\"checkbox\" title=\"";
        // line 7
        echo _gettext("Drop the databases that have the same names as the users.");
        echo "\"
        name=\"drop_users_db\" id=\"checkbox_drop_users_db\" />
    <label for=\"checkbox_drop_users_db\"
        title=\"";
        // line 10
        echo _gettext("Drop the databases that have the same names as the users.");
        echo "\">";
        // line 11
        echo _gettext("Drop the databases that have the same names as the users.");
        // line 12
        echo "    </label>
</fieldset>

<fieldset id=\"fieldset_delete_user_footer\" class=\"tblFooters\">
    <input type=\"submit\" name=\"delete\" value=\"";
        // line 16
        echo _gettext("Go");
        echo "\" id=\"buttonGo\" class=\"ajax\" />
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "privileges/delete_user_fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  44 => 12,  42 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 4,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "privileges/delete_user_fieldset.twig", "G:\\Web\\phpstudy\\phpstudy_pro\\WWW\\zhangheng\\phpMyAdmin4.8.5\\templates\\privileges\\delete_user_fieldset.twig");
    }
}
