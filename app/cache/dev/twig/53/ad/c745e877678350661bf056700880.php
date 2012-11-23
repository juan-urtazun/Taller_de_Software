<?php

/* BackendBundle:Concurso:new.html.twig */
class __TwigTemplate_53adc745e877678350661bf056700880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backend.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
            'documentReady' => array($this, 'block_documentReady'),
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
        echo "oficina";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Crear Concurso</h1>
";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"divinterna\">  
     <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("concurso_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        <div class=\"divinterna\">  
        ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
     </div>
    <div class=\"divbotones\">
        <button class=\"btnaceptar\" type=\"submit\"></button>
        <button class=\"btncancelar\" type=\"button\"  onclick='window.location.href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("concurso"), "html", null, true);
        echo "\"'></button>
    </div>
";
    }

    // line 17
    public function block_documentReady($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("documentReady", $context, $blocks);
        echo "
        <script type=\"text/javascript\" >
            \$('.date').datepicker({ dateFormat: 'dd/mm/yy' })
            </script>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Concurso:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 30,  65 => 23,  66 => 23,  56 => 10,  45 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 44,  132 => 49,  127 => 46,  123 => 44,  109 => 31,  93 => 28,  90 => 35,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 30,  60 => 17,  52 => 8,  97 => 38,  95 => 21,  88 => 29,  78 => 24,  71 => 25,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 3,  92 => 20,  86 => 34,  79 => 40,  19 => 2,  42 => 6,  40 => 6,  29 => 2,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 23,  47 => 7,  32 => 11,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 24,  63 => 14,  58 => 20,  49 => 8,  43 => 6,  37 => 4,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 36,  99 => 29,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 25,  57 => 15,  50 => 15,  46 => 7,  44 => 6,  39 => 9,  33 => 6,  30 => 2,  27 => 4,  135 => 50,  129 => 47,  122 => 38,  116 => 35,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 21,  87 => 27,  84 => 19,  81 => 26,  73 => 18,  70 => 17,  67 => 19,  62 => 22,  59 => 23,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 4,  35 => 3,  31 => 4,  28 => 2,);
    }
}
