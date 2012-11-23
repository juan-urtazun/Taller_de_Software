<?php

/* BackendBundle:Tipodecargo:index.html.twig */
class __TwigTemplate_6be669f636af545c21ff813128bd7e04 extends Twig_Template
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
        echo "tipodecargo";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Listado de Tipos de Cargos</h1>
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
                <th>Duraci&oacute;n</th>
                <th>Nombre</th>
                <th>C&oacute;digo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
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
            // line 21
            echo "            <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "GrillaRow", 1 => "GrillaRowAlt"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
            echo "\">
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocargo_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "duracion"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "codigo"), "html", null, true);
            echo "</td>
                <td valign=\"middle\" align=\"center\" style=\"width:30px;\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocargo_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn/btn32/edit_item.png"), "html", null, true);
            echo "\" alt=\"Editar\" />
                    </a>
                </td>
                <td valign=\"middle\" align=\"center\" style=\"width:30px;\">
                    <a href=\"#\"><img src=\"";
            // line 32
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
        // line 36
        echo "        </tbody>
    </table>
    <table>
        <tr>
            <td class=\"tdcuerpomargen\">
                <a class=\"btnOficinaNew\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocargo_new"), "html", null, true);
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
        return "BackendBundle:Tipodecargo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  112 => 32,  119 => 42,  101 => 27,  68 => 23,  61 => 21,  105 => 28,  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 30,  65 => 22,  66 => 20,  56 => 11,  45 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 44,  132 => 49,  127 => 46,  123 => 44,  109 => 31,  93 => 22,  90 => 28,  54 => 14,  133 => 44,  124 => 54,  111 => 37,  80 => 28,  60 => 20,  52 => 12,  97 => 38,  95 => 21,  88 => 23,  78 => 25,  71 => 17,  25 => 4,  72 => 16,  64 => 15,  53 => 9,  34 => 3,  92 => 24,  86 => 27,  79 => 40,  19 => 2,  42 => 6,  40 => 6,  29 => 2,  26 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 41,  126 => 47,  120 => 53,  117 => 44,  103 => 36,  74 => 24,  47 => 14,  32 => 9,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 24,  63 => 15,  58 => 20,  49 => 9,  43 => 7,  37 => 4,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 36,  99 => 29,  96 => 25,  91 => 33,  82 => 22,  77 => 21,  75 => 25,  57 => 15,  50 => 15,  46 => 8,  44 => 6,  39 => 11,  33 => 6,  30 => 3,  27 => 2,  135 => 50,  129 => 47,  122 => 38,  116 => 35,  113 => 40,  108 => 40,  104 => 43,  102 => 37,  94 => 36,  89 => 21,  87 => 32,  84 => 19,  81 => 26,  73 => 24,  70 => 24,  67 => 16,  62 => 14,  59 => 16,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 6,  35 => 5,  31 => 4,  28 => 2,);
    }
}
