<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_0eb4ad10932c568b6dd86d084dc0d710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        } else {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "value"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue")), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 199,  580 => 197,  574 => 195,  572 => 194,  566 => 190,  557 => 187,  553 => 186,  549 => 185,  542 => 184,  538 => 183,  533 => 181,  526 => 179,  518 => 177,  515 => 176,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 151,  473 => 150,  461 => 138,  458 => 137,  453 => 164,  451 => 150,  446 => 147,  444 => 137,  441 => 136,  438 => 135,  434 => 131,  425 => 124,  417 => 122,  415 => 121,  412 => 120,  404 => 118,  402 => 117,  399 => 116,  393 => 115,  385 => 113,  377 => 111,  374 => 110,  369 => 109,  366 => 107,  358 => 105,  356 => 104,  353 => 103,  345 => 101,  343 => 100,  335 => 95,  332 => 94,  330 => 93,  325 => 90,  323 => 89,  318 => 86,  301 => 84,  275 => 82,  271 => 81,  268 => 80,  266 => 79,  259 => 77,  255 => 76,  252 => 75,  237 => 69,  228 => 67,  221 => 65,  214 => 63,  199 => 57,  183 => 52,  157 => 47,  154 => 46,  114 => 46,  110 => 171,  106 => 45,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 64,  203 => 56,  194 => 53,  191 => 52,  173 => 46,  168 => 44,  160 => 48,  155 => 17,  150 => 75,  144 => 43,  136 => 40,  10 => 43,  151 => 45,  36 => 18,  18 => 11,  98 => 42,  85 => 37,  83 => 22,  21 => 11,  76 => 29,  130 => 36,  112 => 48,  119 => 32,  101 => 39,  68 => 30,  61 => 18,  105 => 46,  100 => 34,  315 => 85,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 83,  286 => 5,  279 => 172,  277 => 169,  249 => 74,  246 => 70,  244 => 71,  212 => 112,  208 => 111,  197 => 103,  182 => 49,  167 => 85,  163 => 49,  140 => 56,  118 => 48,  65 => 30,  66 => 17,  56 => 24,  45 => 25,  209 => 58,  205 => 58,  196 => 56,  192 => 54,  189 => 77,  178 => 93,  176 => 47,  165 => 50,  161 => 61,  152 => 76,  148 => 44,  145 => 43,  141 => 49,  134 => 39,  132 => 52,  127 => 35,  123 => 34,  109 => 47,  93 => 134,  90 => 28,  54 => 23,  133 => 44,  124 => 49,  111 => 32,  80 => 35,  60 => 20,  52 => 11,  97 => 43,  95 => 135,  88 => 38,  78 => 26,  71 => 31,  25 => 14,  72 => 29,  64 => 17,  53 => 25,  34 => 7,  92 => 41,  86 => 38,  79 => 61,  19 => 11,  42 => 20,  40 => 26,  29 => 14,  26 => 13,  224 => 66,  215 => 90,  211 => 62,  204 => 84,  200 => 55,  195 => 80,  193 => 102,  190 => 78,  188 => 53,  185 => 76,  179 => 72,  177 => 51,  171 => 45,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 56,  142 => 42,  137 => 41,  126 => 50,  120 => 52,  117 => 47,  103 => 44,  74 => 13,  47 => 28,  32 => 15,  24 => 14,  22 => 12,  23 => 12,  17 => 1,  69 => 24,  63 => 28,  58 => 17,  49 => 15,  43 => 20,  37 => 21,  20 => 11,  139 => 54,  131 => 51,  128 => 55,  125 => 54,  121 => 48,  115 => 50,  107 => 42,  99 => 44,  96 => 23,  91 => 39,  82 => 36,  77 => 14,  75 => 33,  57 => 24,  50 => 24,  46 => 21,  44 => 9,  39 => 23,  33 => 17,  30 => 16,  27 => 15,  135 => 57,  129 => 50,  122 => 53,  116 => 31,  113 => 45,  108 => 30,  104 => 30,  102 => 45,  94 => 40,  89 => 132,  87 => 74,  84 => 73,  81 => 35,  73 => 33,  70 => 32,  67 => 20,  62 => 28,  59 => 27,  55 => 16,  51 => 21,  48 => 22,  41 => 25,  38 => 17,  35 => 18,  31 => 5,  28 => 15,);
    }
}
