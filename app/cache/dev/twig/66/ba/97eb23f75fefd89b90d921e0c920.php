<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_66ba97eb23f75fefd89b90d921e0c920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  18 => 1,  98 => 6,  85 => 37,  83 => 35,  21 => 2,  76 => 37,  130 => 36,  112 => 32,  119 => 42,  101 => 7,  68 => 23,  61 => 28,  105 => 28,  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 30,  65 => 29,  66 => 20,  56 => 26,  45 => 14,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 44,  132 => 49,  127 => 46,  123 => 44,  109 => 31,  93 => 22,  90 => 28,  54 => 25,  133 => 44,  124 => 54,  111 => 37,  80 => 28,  60 => 13,  52 => 22,  97 => 38,  95 => 21,  88 => 23,  78 => 25,  71 => 17,  25 => 7,  72 => 36,  64 => 31,  53 => 9,  34 => 3,  92 => 5,  86 => 27,  79 => 33,  19 => 2,  42 => 6,  40 => 11,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 41,  126 => 47,  120 => 53,  117 => 44,  103 => 36,  74 => 24,  47 => 15,  32 => 11,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 24,  63 => 15,  58 => 20,  49 => 21,  43 => 7,  37 => 4,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 36,  99 => 29,  96 => 25,  91 => 33,  82 => 22,  77 => 21,  75 => 25,  57 => 26,  50 => 15,  46 => 19,  44 => 6,  39 => 15,  33 => 6,  30 => 3,  27 => 3,  135 => 50,  129 => 47,  122 => 38,  116 => 36,  113 => 35,  108 => 10,  104 => 43,  102 => 37,  94 => 36,  89 => 21,  87 => 32,  84 => 19,  81 => 26,  73 => 24,  70 => 30,  67 => 16,  62 => 14,  59 => 16,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 10,  35 => 5,  31 => 6,  28 => 4,);
    }
}
