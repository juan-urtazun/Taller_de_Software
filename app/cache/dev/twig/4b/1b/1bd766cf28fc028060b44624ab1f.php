<?php

/* BackendBundle:Catedra:index.html.twig */
class __TwigTemplate_4b1b1bd766cf28fc028060b44624ab1f extends Twig_Template
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
        echo "catedra";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Listado de Catedras</h1>
";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"divinterna\">  
    <table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "GrillaRow", 1 => "GrillaRowAlt"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
            echo "\">
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catedra_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
            <td valign=\"middle\" align=\"center\" style=\"width:30px;\">
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catedra_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn/btn32/edit_item.png"), "html", null, true);
            echo "\" alt=\"Editar\" />
                </a>
            </td>
            <td valign=\"middle\" align=\"center\" style=\"width:30px;\">
                <a href=\"#\"><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn/btn32/delete_item.png"), "html", null, true);
            echo "\" alt=\"Eliminar\" /></a>
            </td>
        </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "    </tbody>
</table>
<table>
    <tr>
        <td class=\"tdcuerpomargen\">
            <a class=\"btnOficinaNew\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catedra_new"), "html", null, true);
        echo "\">
            </a>
        </td>
    </tr>
</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Catedra:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 30,  65 => 23,  66 => 12,  56 => 16,  45 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 22,  90 => 34,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 30,  60 => 10,  52 => 8,  97 => 38,  95 => 21,  88 => 29,  78 => 18,  71 => 25,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 3,  92 => 20,  86 => 33,  79 => 40,  19 => 2,  42 => 6,  40 => 8,  29 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 14,  47 => 7,  32 => 11,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 20,  63 => 22,  58 => 20,  49 => 11,  43 => 15,  37 => 4,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 27,  57 => 15,  50 => 15,  46 => 10,  44 => 6,  39 => 9,  33 => 6,  30 => 2,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 21,  87 => 32,  84 => 19,  81 => 26,  73 => 17,  70 => 26,  67 => 19,  62 => 14,  59 => 23,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 4,  35 => 7,  31 => 4,  28 => 2,);
    }
}
