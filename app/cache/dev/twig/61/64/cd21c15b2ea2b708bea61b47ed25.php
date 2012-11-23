<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_6164cd21c15b2ea2b708bea61b47ed25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "majors")), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "majors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, $this->getContext($context, "minors"))) {
            // line 18
            echo "        <h1>Some Recommandations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "minors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 136,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  288 => 124,  149 => 67,  175 => 66,  401 => 160,  363 => 142,  359 => 141,  354 => 139,  342 => 135,  326 => 126,  322 => 125,  305 => 118,  291 => 111,  280 => 106,  219 => 78,  213 => 85,  210 => 75,  206 => 73,  180 => 68,  169 => 75,  159 => 58,  166 => 73,  631 => 382,  622 => 376,  618 => 374,  616 => 370,  606 => 367,  601 => 365,  596 => 363,  592 => 361,  581 => 353,  575 => 350,  571 => 349,  565 => 346,  555 => 339,  537 => 327,  530 => 323,  523 => 319,  519 => 317,  517 => 314,  509 => 310,  499 => 303,  492 => 299,  460 => 280,  428 => 265,  416 => 258,  398 => 159,  392 => 242,  388 => 240,  340 => 210,  327 => 200,  308 => 184,  283 => 168,  274 => 165,  269 => 163,  201 => 80,  666 => 211,  663 => 210,  658 => 157,  654 => 154,  648 => 153,  644 => 151,  640 => 149,  635 => 148,  632 => 147,  629 => 146,  624 => 145,  621 => 144,  617 => 115,  614 => 114,  608 => 113,  603 => 110,  597 => 109,  589 => 107,  586 => 106,  582 => 105,  577 => 103,  569 => 100,  562 => 99,  559 => 98,  556 => 97,  547 => 334,  544 => 93,  541 => 92,  536 => 91,  531 => 89,  528 => 88,  521 => 83,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 294,  480 => 292,  472 => 43,  468 => 283,  464 => 41,  459 => 39,  455 => 38,  450 => 37,  447 => 36,  437 => 32,  431 => 29,  426 => 27,  423 => 263,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 206,  389 => 154,  386 => 200,  380 => 198,  375 => 232,  367 => 193,  344 => 184,  303 => 182,  294 => 167,  276 => 117,  264 => 98,  258 => 110,  256 => 93,  250 => 108,  247 => 143,  231 => 95,  174 => 62,  172 => 126,  164 => 59,  143 => 49,  462 => 138,  456 => 279,  413 => 130,  408 => 253,  405 => 128,  396 => 158,  394 => 203,  391 => 202,  382 => 237,  378 => 148,  376 => 115,  373 => 231,  371 => 113,  368 => 144,  364 => 192,  352 => 219,  349 => 138,  346 => 185,  339 => 133,  333 => 178,  328 => 176,  319 => 99,  317 => 171,  298 => 127,  296 => 126,  287 => 85,  282 => 121,  278 => 82,  273 => 102,  270 => 101,  267 => 100,  254 => 72,  251 => 71,  245 => 69,  243 => 141,  238 => 99,  235 => 107,  226 => 82,  216 => 61,  186 => 82,  324 => 91,  320 => 172,  295 => 177,  272 => 81,  265 => 78,  262 => 111,  260 => 157,  257 => 73,  248 => 107,  239 => 149,  234 => 138,  232 => 65,  229 => 94,  207 => 83,  170 => 63,  147 => 53,  585 => 354,  580 => 197,  574 => 102,  572 => 101,  566 => 190,  557 => 187,  553 => 96,  549 => 185,  542 => 184,  538 => 183,  533 => 90,  526 => 179,  518 => 177,  515 => 313,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 44,  473 => 285,  461 => 138,  458 => 136,  453 => 164,  451 => 277,  446 => 275,  444 => 137,  441 => 33,  438 => 135,  434 => 268,  425 => 124,  417 => 131,  415 => 121,  412 => 120,  404 => 252,  402 => 127,  399 => 126,  393 => 115,  385 => 152,  377 => 236,  374 => 147,  369 => 194,  366 => 107,  358 => 222,  356 => 140,  353 => 103,  345 => 136,  343 => 100,  335 => 95,  332 => 137,  330 => 177,  325 => 175,  323 => 135,  318 => 124,  301 => 128,  275 => 82,  271 => 114,  268 => 163,  266 => 79,  259 => 77,  255 => 109,  252 => 92,  237 => 86,  228 => 103,  221 => 99,  214 => 95,  199 => 57,  183 => 69,  157 => 55,  154 => 45,  114 => 34,  110 => 39,  106 => 35,  241 => 87,  236 => 98,  233 => 66,  225 => 64,  222 => 90,  220 => 138,  217 => 87,  203 => 81,  194 => 76,  191 => 53,  173 => 46,  168 => 44,  160 => 72,  155 => 17,  150 => 43,  144 => 43,  136 => 60,  10 => 43,  151 => 53,  36 => 7,  18 => 1,  98 => 66,  85 => 28,  83 => 26,  21 => 3,  76 => 24,  130 => 48,  112 => 46,  119 => 34,  101 => 35,  68 => 22,  61 => 28,  105 => 37,  100 => 27,  315 => 87,  312 => 96,  307 => 142,  302 => 141,  297 => 168,  292 => 83,  286 => 123,  279 => 167,  277 => 169,  249 => 74,  246 => 89,  244 => 66,  212 => 59,  208 => 111,  197 => 103,  182 => 80,  167 => 43,  163 => 73,  140 => 52,  118 => 36,  65 => 18,  66 => 21,  56 => 14,  45 => 9,  209 => 58,  205 => 129,  196 => 77,  192 => 54,  189 => 73,  178 => 71,  176 => 46,  165 => 60,  161 => 58,  152 => 88,  148 => 64,  145 => 49,  141 => 49,  134 => 48,  132 => 43,  127 => 35,  123 => 38,  109 => 36,  93 => 64,  90 => 31,  54 => 19,  133 => 49,  124 => 5,  111 => 33,  80 => 26,  60 => 16,  52 => 13,  97 => 26,  95 => 30,  88 => 32,  78 => 37,  71 => 37,  25 => 5,  72 => 22,  64 => 35,  53 => 23,  34 => 11,  92 => 23,  86 => 30,  79 => 20,  19 => 2,  42 => 10,  40 => 8,  29 => 4,  26 => 3,  224 => 91,  215 => 136,  211 => 134,  204 => 84,  200 => 87,  195 => 48,  193 => 102,  190 => 84,  188 => 69,  185 => 75,  179 => 115,  177 => 67,  171 => 67,  162 => 59,  158 => 57,  156 => 56,  153 => 68,  146 => 64,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 56,  103 => 28,  74 => 38,  47 => 12,  32 => 5,  24 => 3,  22 => 3,  23 => 12,  17 => 1,  69 => 21,  63 => 17,  58 => 26,  49 => 12,  43 => 11,  37 => 6,  20 => 2,  139 => 47,  131 => 61,  128 => 46,  125 => 36,  121 => 55,  115 => 50,  107 => 51,  99 => 33,  96 => 63,  91 => 31,  82 => 43,  77 => 25,  75 => 18,  57 => 27,  50 => 12,  46 => 13,  44 => 14,  39 => 12,  33 => 5,  30 => 7,  27 => 3,  135 => 41,  129 => 38,  122 => 58,  116 => 31,  113 => 40,  108 => 38,  104 => 40,  102 => 27,  94 => 32,  89 => 22,  87 => 41,  84 => 29,  81 => 28,  73 => 23,  70 => 21,  67 => 33,  62 => 22,  59 => 21,  55 => 19,  51 => 23,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 7,);
    }
}
