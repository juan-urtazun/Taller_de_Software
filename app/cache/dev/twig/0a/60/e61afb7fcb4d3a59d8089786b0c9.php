<?php

/* BackendBundle:Catedra:show.html.twig */
class __TwigTemplate_0a60e61afb7fcb4d3a59d8089786b0c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backend.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "oficina";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Datos de la Catedra ";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_catedra"), "html", null, true);
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_catedra_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Modificar Catedra
        </a>
    </li>
    <li>
        <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_catedra_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
            <button type=\"submit\">Borrar oficina</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Catedra:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 30,  65 => 23,  66 => 12,  56 => 16,  45 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 22,  90 => 35,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 30,  60 => 17,  52 => 8,  97 => 38,  95 => 21,  88 => 29,  78 => 29,  71 => 25,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 4,  92 => 20,  86 => 34,  79 => 40,  19 => 2,  42 => 6,  40 => 6,  29 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 14,  47 => 7,  32 => 11,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 20,  63 => 22,  58 => 20,  49 => 11,  43 => 7,  37 => 4,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 27,  57 => 15,  50 => 15,  46 => 10,  44 => 6,  39 => 9,  33 => 6,  30 => 2,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 21,  87 => 32,  84 => 19,  81 => 26,  73 => 17,  70 => 24,  67 => 19,  62 => 14,  59 => 23,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 4,  35 => 7,  31 => 4,  28 => 3,);
    }
}
