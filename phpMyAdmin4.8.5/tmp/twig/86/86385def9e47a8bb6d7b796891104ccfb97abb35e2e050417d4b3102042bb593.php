<?php

/* server/databases/databases_header.twig */
class __TwigTemplate_7547b2a5cafbdcfd04fc5c5d1795d41ce1af85e7e13a95fc61f916224b2098ce extends Twig_Template
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
        echo "<div id=\"tableslistcontainer\">";
        // line 2
        echo PhpMyAdmin\Util::getListNavigator(        // line 3
($context["database_count"] ?? null),         // line 4
($context["pos"] ?? null),         // line 5
($context["url_params"] ?? null), "server_databases.php", "frame_content",         // line 8
($context["max_db_list"] ?? null));
        // line 9
        echo "
    <form class=\"ajax\" action=\"server_databases.php\" method=\"post\" name=\"dbStatsForm\" id=\"dbStatsForm\">";
        // line 11
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        // line 12
        $context["url_params"] = twig_array_merge(($context["url_params"] ?? null), ["sort_by" => "SCHEMA_NAME", "sort_order" => ((((        // line 14
($context["sort_by"] ?? null) == "SCHEMA_NAME") && (($context["sort_order"] ?? null) == "asc"))) ? ("desc") : ("asc"))]);
        // line 16
        echo "        <div class=\"responsivetable\">
            <table id=\"tabledatabases\" class=\"data\">";
        // line 18
        $this->loadTemplate("server/databases/table_header.twig", "server/databases/databases_header.twig", 18)->display(["url_params" =>         // line 19
($context["url_params"] ?? null), "sort_by" =>         // line 20
($context["sort_by"] ?? null), "sort_order" =>         // line 21
($context["sort_order"] ?? null), "sort_order_text" => (((        // line 22
($context["sort_order"] ?? null) == "asc")) ? (_gettext("Ascending")) : (_gettext("Descending"))), "column_order" =>         // line 23
($context["column_order"] ?? null), "first_database" =>         // line 24
($context["first_database"] ?? null), "master_replication" =>         // line 25
($context["master_replication"] ?? null), "slave_replication" =>         // line 26
($context["slave_replication"] ?? null), "is_superuser" =>         // line 27
($context["is_superuser"] ?? null), "allow_user_drop_database" =>         // line 28
($context["allow_user_drop_database"] ?? null)]);
    }

    public function getTemplateName()
    {
        return "server/databases/databases_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 28,  47 => 27,  46 => 26,  45 => 25,  44 => 24,  43 => 23,  42 => 22,  41 => 21,  40 => 20,  39 => 19,  38 => 18,  35 => 16,  33 => 14,  32 => 12,  30 => 11,  27 => 9,  25 => 8,  24 => 5,  23 => 4,  22 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/databases/databases_header.twig", "G:\\Web\\phpstudy\\phpstudy_pro\\WWW\\zhangheng\\phpMyAdmin4.8.5\\templates\\server\\databases\\databases_header.twig");
    }
}
