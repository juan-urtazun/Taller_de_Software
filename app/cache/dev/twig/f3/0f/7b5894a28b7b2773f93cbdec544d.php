<?php

/* BackendBundle:Tipodecargo:edit.html.twig */
class __TwigTemplate_f30f7b5894a28b7b2773f93cbdec544d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backend.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
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

    // line 2
    public function block_id($context, array $blocks = array())
    {
        echo "tipodecargo";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Editar Tipo de Cargo</h1>
";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocargo_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    <div class=\"divinterna\">  
        ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "edit_form"));
        echo "
    </div>
    <div class=\"divbotones\">
        <button class=\"btnaceptar\" type=\"submit\"></button>
        <button class=\"btncancelar\" type=\"button\"  onclick='window.location.href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocargo"), "html", null, true);
        echo "\"'></button>
    </div>
</form>        
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Tipodecargo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 48,  119 => 42,  101 => 33,  68 => 23,  61 => 21,  105 => 30,  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 30,  65 => 22,  66 => 20,  56 => 11,  45 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 44,  132 => 49,  127 => 46,  123 => 44,  109 => 31,  93 => 22,  90 => 28,  54 => 14,  133 => 44,  124 => 54,  111 => 37,  80 => 28,  60 => 13,  52 => 12,  97 => 38,  95 => 21,  88 => 29,  78 => 25,  71 => 17,  25 => 4,  72 => 16,  64 => 15,  53 => 9,  34 => 3,  92 => 20,  86 => 27,  79 => 40,  19 => 2,  42 => 6,  40 => 6,  29 => 2,  26 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 47,  120 => 53,  117 => 44,  103 => 36,  74 => 24,  47 => 14,  32 => 9,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 24,  63 => 15,  58 => 20,  49 => 9,  43 => 7,  37 => 4,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 36,  99 => 29,  96 => 34,  91 => 33,  82 => 26,  77 => 25,  75 => 25,  57 => 15,  50 => 15,  46 => 8,  44 => 6,  39 => 11,  33 => 6,  30 => 3,  27 => 2,  135 => 50,  129 => 47,  122 => 38,  116 => 35,  113 => 40,  108 => 40,  104 => 43,  102 => 37,  94 => 36,  89 => 21,  87 => 32,  84 => 19,  81 => 26,  73 => 24,  70 => 24,  67 => 16,  62 => 14,  59 => 16,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 6,  35 => 5,  31 => 4,  28 => 2,);
    }
}
