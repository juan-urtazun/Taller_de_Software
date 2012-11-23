<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_141ec066e7b3123a8a2d4f71df03ecb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 17
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 18
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "
            ";
        // line 21
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 22
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 24
        echo "        </ul>
    </div>
";
    }

    // line 28
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array(), "list");
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"sonata-ba-delete\">

        <h1>";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_batch_confirmation", array(), "SonataAdminBundle");
        echo "</h1>

        ";
        // line 35
        if ($this->getAttribute($this->getContext($context, "data"), "all_elements")) {
            // line 36
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("message_batch_all_confirmation", array(), "SonataAdminBundle");
            // line 37
            echo "        ";
        } else {
            // line 38
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "idx")), array("%count%" => twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "idx"))), "SonataAdminBundle");
            // line 39
            echo "        ";
        }
        // line 40
        echo "
        <div class=\"actions\">
            <form action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "batch", 1 => $this->getAttribute($this->getContext($context, "admin"), "filterParameters")), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\" />
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getContext($context, "data")), "html", null, true);
        echo "\" />

                <div style=\"display: none\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
                </div>

                <input type=\"submit\" class=\"btn danger\" value=\"";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("btn_execute_batch_action", array(), "SonataAdminBundle");
        echo "\" />

                ";
        // line 52
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 53
            echo "                    ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("delete_or", array(), "SonataAdminBundle");
            // line 54
            echo "
                    <a class=\"btn success\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a>
                ";
        }
        // line 57
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 199,  580 => 197,  574 => 195,  572 => 194,  566 => 190,  557 => 187,  553 => 186,  549 => 185,  542 => 184,  538 => 183,  533 => 181,  526 => 179,  518 => 177,  515 => 176,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 151,  473 => 150,  461 => 138,  458 => 137,  453 => 164,  451 => 150,  446 => 147,  444 => 137,  441 => 136,  438 => 135,  434 => 131,  425 => 124,  417 => 122,  415 => 121,  412 => 120,  404 => 118,  402 => 117,  399 => 116,  393 => 115,  385 => 113,  377 => 111,  374 => 110,  369 => 109,  366 => 107,  358 => 105,  356 => 104,  353 => 103,  345 => 101,  343 => 100,  335 => 95,  332 => 94,  330 => 93,  325 => 90,  323 => 89,  318 => 86,  301 => 84,  275 => 82,  271 => 81,  268 => 80,  266 => 79,  259 => 77,  255 => 76,  252 => 75,  237 => 69,  228 => 67,  221 => 65,  214 => 63,  199 => 57,  183 => 52,  157 => 47,  154 => 46,  114 => 46,  110 => 171,  106 => 45,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 64,  203 => 56,  194 => 53,  191 => 52,  173 => 46,  168 => 44,  160 => 48,  155 => 17,  150 => 75,  144 => 43,  136 => 40,  10 => 43,  151 => 45,  36 => 15,  18 => 11,  98 => 42,  85 => 37,  83 => 22,  21 => 11,  76 => 29,  130 => 36,  112 => 32,  119 => 32,  101 => 39,  68 => 30,  61 => 28,  105 => 169,  100 => 34,  315 => 85,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 83,  286 => 5,  279 => 172,  277 => 169,  249 => 74,  246 => 70,  244 => 71,  212 => 112,  208 => 111,  197 => 103,  182 => 49,  167 => 85,  163 => 49,  140 => 56,  118 => 48,  65 => 30,  66 => 17,  56 => 24,  45 => 25,  209 => 58,  205 => 58,  196 => 56,  192 => 54,  189 => 77,  178 => 93,  176 => 47,  165 => 50,  161 => 61,  152 => 76,  148 => 44,  145 => 43,  141 => 49,  134 => 39,  132 => 52,  127 => 35,  123 => 34,  109 => 47,  93 => 134,  90 => 28,  54 => 23,  133 => 44,  124 => 49,  111 => 32,  80 => 35,  60 => 20,  52 => 11,  97 => 40,  95 => 135,  88 => 38,  78 => 28,  71 => 31,  25 => 14,  72 => 29,  64 => 17,  53 => 25,  34 => 20,  92 => 19,  86 => 17,  79 => 61,  19 => 11,  42 => 18,  40 => 17,  29 => 15,  26 => 14,  224 => 66,  215 => 90,  211 => 62,  204 => 84,  200 => 55,  195 => 80,  193 => 102,  190 => 78,  188 => 53,  185 => 76,  179 => 72,  177 => 51,  171 => 45,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 56,  142 => 42,  137 => 41,  126 => 50,  120 => 52,  117 => 47,  103 => 44,  74 => 13,  47 => 28,  32 => 13,  24 => 12,  22 => 12,  23 => 12,  17 => 1,  69 => 24,  63 => 16,  58 => 15,  49 => 29,  43 => 20,  37 => 21,  20 => 11,  139 => 54,  131 => 51,  128 => 55,  125 => 54,  121 => 48,  115 => 50,  107 => 42,  99 => 43,  96 => 23,  91 => 39,  82 => 36,  77 => 14,  75 => 33,  57 => 24,  50 => 24,  46 => 21,  44 => 9,  39 => 23,  33 => 17,  30 => 3,  27 => 13,  135 => 57,  129 => 50,  122 => 53,  116 => 31,  113 => 45,  108 => 30,  104 => 30,  102 => 26,  94 => 40,  89 => 132,  87 => 74,  84 => 73,  81 => 29,  73 => 31,  70 => 19,  67 => 31,  62 => 28,  59 => 16,  55 => 26,  51 => 21,  48 => 22,  41 => 25,  38 => 24,  35 => 18,  31 => 12,  28 => 15,);
    }
}
