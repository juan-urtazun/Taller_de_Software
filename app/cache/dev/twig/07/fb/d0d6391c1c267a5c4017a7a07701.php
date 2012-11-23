<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_07fbd0d6391c1c267a5c4017a7a07701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array("SensioDistributionBundle::Configurator/form.html.twig", ));
        // line 7
        echo "    ";
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 8
        echo "
    <h1>Configure your Database</h1>
    <p>If your website needs a database connection, please configure it here.</p>

    ";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"symfony-form-column\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "driver"));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "host"));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
        </div>
        <div class=\"symfony-form-column\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "user"));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "password"));
        echo "
        </div>

        ";
        // line 24
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 260,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 207,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  725 => 188,  722 => 187,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  656 => 162,  653 => 161,  645 => 157,  642 => 156,  637 => 154,  626 => 149,  613 => 143,  611 => 142,  600 => 137,  595 => 135,  584 => 130,  579 => 128,  567 => 121,  554 => 119,  548 => 117,  545 => 116,  543 => 115,  540 => 114,  532 => 108,  525 => 103,  516 => 100,  514 => 99,  511 => 98,  498 => 91,  490 => 89,  485 => 88,  474 => 84,  471 => 83,  432 => 72,  429 => 71,  419 => 65,  407 => 61,  397 => 58,  361 => 48,  357 => 47,  347 => 44,  300 => 32,  285 => 28,  253 => 15,  223 => 3,  198 => 259,  329 => 136,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 33,  288 => 124,  149 => 193,  175 => 225,  401 => 160,  363 => 142,  359 => 141,  354 => 139,  342 => 135,  326 => 126,  322 => 125,  305 => 118,  291 => 111,  280 => 106,  219 => 288,  213 => 85,  210 => 75,  206 => 271,  180 => 235,  169 => 75,  159 => 58,  166 => 73,  631 => 382,  622 => 376,  618 => 374,  616 => 370,  606 => 367,  601 => 365,  596 => 363,  592 => 134,  581 => 129,  575 => 350,  571 => 349,  565 => 346,  555 => 339,  537 => 327,  530 => 104,  523 => 319,  519 => 101,  517 => 314,  509 => 310,  499 => 303,  492 => 299,  460 => 280,  428 => 265,  416 => 64,  398 => 159,  392 => 242,  388 => 55,  340 => 210,  327 => 200,  308 => 184,  283 => 168,  274 => 165,  269 => 163,  201 => 260,  666 => 211,  663 => 210,  658 => 163,  654 => 154,  648 => 153,  644 => 151,  640 => 155,  635 => 148,  632 => 147,  629 => 150,  624 => 148,  621 => 147,  617 => 115,  614 => 114,  608 => 141,  603 => 110,  597 => 136,  589 => 107,  586 => 106,  582 => 105,  577 => 127,  569 => 100,  562 => 99,  559 => 120,  556 => 97,  547 => 334,  544 => 93,  541 => 92,  536 => 91,  531 => 89,  528 => 88,  521 => 83,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 294,  480 => 292,  472 => 43,  468 => 283,  464 => 41,  459 => 39,  455 => 79,  450 => 77,  447 => 36,  437 => 32,  431 => 29,  426 => 27,  423 => 263,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 59,  389 => 154,  386 => 54,  380 => 198,  375 => 232,  367 => 193,  344 => 43,  303 => 182,  294 => 167,  276 => 117,  264 => 98,  258 => 110,  256 => 16,  250 => 14,  247 => 143,  231 => 95,  174 => 62,  172 => 126,  164 => 59,  143 => 49,  462 => 138,  456 => 279,  413 => 63,  408 => 253,  405 => 60,  396 => 158,  394 => 57,  391 => 202,  382 => 237,  378 => 53,  376 => 115,  373 => 231,  371 => 113,  368 => 144,  364 => 192,  352 => 46,  349 => 45,  346 => 185,  339 => 133,  333 => 178,  328 => 176,  319 => 35,  317 => 171,  298 => 127,  296 => 126,  287 => 29,  282 => 27,  278 => 82,  273 => 102,  270 => 22,  267 => 21,  254 => 72,  251 => 71,  245 => 12,  243 => 141,  238 => 99,  235 => 107,  226 => 4,  216 => 287,  186 => 82,  324 => 91,  320 => 172,  295 => 31,  272 => 23,  265 => 78,  262 => 111,  260 => 157,  257 => 73,  248 => 13,  239 => 149,  234 => 138,  232 => 65,  229 => 94,  207 => 83,  170 => 219,  147 => 187,  585 => 354,  580 => 197,  574 => 126,  572 => 101,  566 => 190,  557 => 187,  553 => 96,  549 => 185,  542 => 184,  538 => 183,  533 => 90,  526 => 179,  518 => 177,  515 => 313,  512 => 175,  506 => 162,  502 => 92,  500 => 159,  494 => 90,  483 => 153,  479 => 86,  476 => 85,  473 => 285,  461 => 138,  458 => 136,  453 => 78,  451 => 277,  446 => 275,  444 => 137,  441 => 33,  438 => 135,  434 => 73,  425 => 124,  417 => 131,  415 => 121,  412 => 120,  404 => 252,  402 => 127,  399 => 126,  393 => 115,  385 => 152,  377 => 236,  374 => 51,  369 => 194,  366 => 49,  358 => 222,  356 => 140,  353 => 103,  345 => 136,  343 => 100,  335 => 39,  332 => 137,  330 => 177,  325 => 175,  323 => 37,  318 => 124,  301 => 128,  275 => 82,  271 => 114,  268 => 163,  266 => 79,  259 => 17,  255 => 109,  252 => 92,  237 => 7,  228 => 5,  221 => 99,  214 => 281,  199 => 57,  183 => 236,  157 => 204,  154 => 45,  114 => 146,  110 => 39,  106 => 35,  241 => 87,  236 => 98,  233 => 6,  225 => 64,  222 => 90,  220 => 138,  217 => 87,  203 => 269,  194 => 76,  191 => 242,  173 => 220,  168 => 44,  160 => 205,  155 => 196,  150 => 43,  144 => 186,  136 => 60,  10 => 43,  151 => 53,  36 => 6,  18 => 1,  98 => 66,  85 => 28,  83 => 26,  21 => 3,  76 => 24,  130 => 48,  112 => 141,  119 => 153,  101 => 35,  68 => 22,  61 => 16,  105 => 37,  100 => 27,  315 => 87,  312 => 96,  307 => 142,  302 => 141,  297 => 168,  292 => 30,  286 => 123,  279 => 167,  277 => 169,  249 => 74,  246 => 89,  244 => 66,  212 => 59,  208 => 111,  197 => 103,  182 => 80,  167 => 217,  163 => 73,  140 => 52,  118 => 36,  65 => 17,  66 => 21,  56 => 14,  45 => 9,  209 => 272,  205 => 129,  196 => 248,  192 => 54,  189 => 73,  178 => 226,  176 => 46,  165 => 212,  161 => 58,  152 => 195,  148 => 64,  145 => 49,  141 => 49,  134 => 174,  132 => 168,  127 => 161,  123 => 38,  109 => 140,  93 => 28,  90 => 31,  54 => 11,  133 => 49,  124 => 160,  111 => 33,  80 => 26,  60 => 14,  52 => 13,  97 => 114,  95 => 30,  88 => 32,  78 => 37,  71 => 20,  25 => 5,  72 => 43,  64 => 26,  53 => 13,  34 => 5,  92 => 98,  86 => 30,  79 => 76,  19 => 1,  42 => 8,  40 => 8,  29 => 6,  26 => 3,  224 => 91,  215 => 136,  211 => 280,  204 => 84,  200 => 87,  195 => 48,  193 => 247,  190 => 84,  188 => 241,  185 => 239,  179 => 115,  177 => 67,  171 => 67,  162 => 211,  158 => 57,  156 => 56,  153 => 68,  146 => 64,  142 => 182,  137 => 175,  126 => 39,  120 => 37,  117 => 147,  103 => 28,  74 => 70,  47 => 15,  32 => 5,  24 => 3,  22 => 3,  23 => 12,  17 => 1,  69 => 42,  63 => 17,  58 => 26,  49 => 2,  43 => 8,  37 => 6,  20 => 2,  139 => 181,  131 => 61,  128 => 46,  125 => 36,  121 => 55,  115 => 50,  107 => 134,  99 => 125,  96 => 63,  91 => 27,  82 => 77,  77 => 71,  75 => 21,  57 => 15,  50 => 12,  46 => 13,  44 => 14,  39 => 7,  33 => 5,  30 => 7,  27 => 3,  135 => 41,  129 => 167,  122 => 154,  116 => 31,  113 => 40,  108 => 38,  104 => 133,  102 => 126,  94 => 113,  89 => 97,  87 => 83,  84 => 82,  81 => 24,  73 => 23,  70 => 18,  67 => 27,  62 => 21,  59 => 20,  55 => 14,  51 => 23,  48 => 12,  41 => 7,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
