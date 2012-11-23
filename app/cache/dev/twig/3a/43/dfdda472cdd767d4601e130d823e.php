<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_3a43dfdda472cdd767d4601e130d823e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "user"), "html", null, true);
            echo "

        ";
            // line 5
            if ($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN")) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getContext($context, "sonata_user"), "getImpersonatingRoute"), array("_switch_user" => "_exit")), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 6,  33 => 5,  27 => 3,  25 => 13,  23 => 12,  18 => 1,  151 => 60,  146 => 57,  140 => 56,  135 => 53,  131 => 51,  129 => 50,  124 => 49,  119 => 48,  117 => 47,  113 => 45,  109 => 43,  107 => 42,  102 => 41,  97 => 40,  95 => 39,  90 => 37,  87 => 36,  84 => 35,  72 => 29,  55 => 23,  52 => 22,  46 => 20,  29 => 12,  666 => 211,  663 => 210,  658 => 157,  654 => 154,  648 => 153,  644 => 151,  640 => 149,  635 => 148,  632 => 147,  629 => 146,  624 => 145,  621 => 144,  617 => 115,  614 => 114,  608 => 113,  603 => 110,  597 => 109,  589 => 107,  586 => 106,  582 => 105,  577 => 103,  574 => 102,  572 => 101,  569 => 100,  562 => 99,  559 => 98,  556 => 97,  553 => 96,  547 => 95,  544 => 93,  541 => 92,  536 => 91,  533 => 90,  531 => 89,  528 => 88,  521 => 83,  515 => 82,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 46,  480 => 45,  476 => 44,  472 => 43,  468 => 42,  464 => 41,  459 => 39,  455 => 38,  450 => 37,  447 => 36,  441 => 33,  437 => 32,  431 => 29,  426 => 27,  423 => 26,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 206,  394 => 203,  391 => 202,  389 => 201,  386 => 200,  380 => 198,  378 => 197,  375 => 196,  369 => 194,  367 => 193,  364 => 192,  358 => 190,  356 => 189,  352 => 187,  346 => 185,  344 => 184,  339 => 181,  333 => 178,  330 => 177,  328 => 176,  325 => 175,  320 => 172,  317 => 171,  303 => 170,  297 => 168,  294 => 167,  276 => 166,  270 => 164,  268 => 163,  264 => 161,  262 => 160,  258 => 158,  256 => 157,  252 => 155,  250 => 144,  247 => 143,  243 => 141,  237 => 139,  234 => 138,  231 => 137,  217 => 136,  211 => 134,  203 => 132,  200 => 131,  182 => 130,  179 => 129,  177 => 128,  174 => 127,  172 => 126,  164 => 120,  158 => 118,  154 => 116,  152 => 88,  148 => 86,  145 => 80,  143 => 79,  136 => 74,  130 => 72,  126 => 70,  123 => 69,  120 => 68,  103 => 66,  99 => 64,  96 => 63,  79 => 62,  76 => 61,  73 => 60,  65 => 25,  62 => 24,  60 => 55,  56 => 53,  54 => 36,  49 => 21,  42 => 20,  38 => 18,  36 => 17,  34 => 16,  30 => 14,  28 => 13,  24 => 2,  86 => 31,  80 => 34,  74 => 28,  71 => 27,  67 => 26,  63 => 24,  57 => 23,  51 => 35,  48 => 20,  44 => 9,  40 => 19,  37 => 17,  32 => 15,  26 => 14,);
    }
}
