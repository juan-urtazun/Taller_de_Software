<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_3ad3c32c5a79c3033249e6f1bab978ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupname" => $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 6
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  18 => 1,  98 => 6,  85 => 37,  83 => 35,  21 => 3,  76 => 37,  130 => 36,  112 => 32,  119 => 42,  101 => 7,  68 => 23,  61 => 28,  105 => 28,  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 30,  65 => 29,  66 => 20,  56 => 26,  45 => 14,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 44,  132 => 49,  127 => 46,  123 => 44,  109 => 31,  93 => 22,  90 => 28,  54 => 25,  133 => 44,  124 => 54,  111 => 37,  80 => 28,  60 => 13,  52 => 22,  97 => 38,  95 => 21,  88 => 23,  78 => 25,  71 => 17,  25 => 4,  72 => 36,  64 => 31,  53 => 9,  34 => 3,  92 => 5,  86 => 27,  79 => 33,  19 => 2,  42 => 6,  40 => 11,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 41,  126 => 47,  120 => 53,  117 => 44,  103 => 36,  74 => 24,  47 => 15,  32 => 11,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 24,  63 => 15,  58 => 20,  49 => 21,  43 => 7,  37 => 4,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 36,  99 => 29,  96 => 25,  91 => 33,  82 => 22,  77 => 21,  75 => 25,  57 => 26,  50 => 15,  46 => 19,  44 => 6,  39 => 15,  33 => 6,  30 => 3,  27 => 3,  135 => 50,  129 => 47,  122 => 38,  116 => 36,  113 => 35,  108 => 10,  104 => 43,  102 => 37,  94 => 36,  89 => 21,  87 => 32,  84 => 19,  81 => 26,  73 => 24,  70 => 30,  67 => 16,  62 => 14,  59 => 16,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 10,  35 => 5,  31 => 5,  28 => 4,);
    }
}
