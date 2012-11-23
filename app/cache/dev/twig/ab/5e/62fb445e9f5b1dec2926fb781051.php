<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_ab5e62fb445e9f5b1dec2926fb781051 extends Twig_Template
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
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 18
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 21
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 23
        echo "        </ul>
    </div>
";
    }

    // line 27
    public function block_side_menu($context, array $blocks = array())
    {
        if (array_key_exists("action", $context)) {
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array(), "list");
        }
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 60,  36 => 14,  18 => 1,  98 => 6,  85 => 37,  83 => 35,  21 => 3,  76 => 37,  130 => 36,  112 => 32,  119 => 48,  101 => 7,  68 => 29,  61 => 17,  105 => 28,  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 56,  118 => 30,  65 => 25,  66 => 19,  56 => 26,  45 => 17,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 44,  132 => 49,  127 => 46,  123 => 44,  109 => 43,  93 => 22,  90 => 37,  54 => 23,  133 => 44,  124 => 49,  111 => 37,  80 => 30,  60 => 27,  52 => 22,  97 => 40,  95 => 39,  88 => 23,  78 => 25,  71 => 30,  25 => 13,  72 => 29,  64 => 31,  53 => 9,  34 => 16,  92 => 5,  86 => 31,  79 => 33,  19 => 2,  42 => 16,  40 => 17,  29 => 15,  26 => 14,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 57,  142 => 54,  137 => 41,  126 => 47,  120 => 53,  117 => 47,  103 => 36,  74 => 28,  47 => 15,  32 => 15,  24 => 11,  22 => 6,  23 => 12,  17 => 1,  69 => 24,  63 => 24,  58 => 20,  49 => 21,  43 => 20,  37 => 16,  20 => 1,  139 => 26,  131 => 51,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 42,  99 => 29,  96 => 25,  91 => 33,  82 => 19,  77 => 16,  75 => 25,  57 => 23,  50 => 15,  46 => 21,  44 => 19,  39 => 15,  33 => 17,  30 => 3,  27 => 12,  135 => 53,  129 => 50,  122 => 38,  116 => 36,  113 => 45,  108 => 10,  104 => 43,  102 => 41,  94 => 36,  89 => 21,  87 => 36,  84 => 35,  81 => 26,  73 => 24,  70 => 30,  67 => 26,  62 => 24,  59 => 16,  55 => 23,  51 => 21,  48 => 20,  41 => 9,  38 => 10,  35 => 18,  31 => 5,  28 => 1,);
    }
}
