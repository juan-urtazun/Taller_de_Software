<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_666c5b29a5f4c3a332346dd66b187c2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (($this->getContext($context, "inline") == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "field_element"), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name"));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "field_element"));
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "field_element"));
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "field_element"));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  110 => 46,  106 => 45,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 61,  203 => 56,  194 => 53,  191 => 52,  173 => 46,  168 => 44,  160 => 39,  155 => 17,  150 => 75,  144 => 43,  136 => 40,  10 => 43,  151 => 60,  36 => 14,  18 => 1,  98 => 6,  85 => 23,  83 => 22,  21 => 1,  76 => 21,  130 => 36,  112 => 32,  119 => 48,  101 => 7,  68 => 18,  61 => 16,  105 => 28,  100 => 34,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 71,  246 => 70,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 49,  167 => 85,  163 => 84,  140 => 56,  118 => 48,  65 => 24,  66 => 17,  56 => 24,  45 => 21,  209 => 58,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 47,  165 => 43,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 39,  132 => 49,  127 => 46,  123 => 35,  109 => 43,  93 => 25,  90 => 28,  54 => 18,  133 => 44,  124 => 49,  111 => 32,  80 => 23,  60 => 20,  52 => 11,  97 => 40,  95 => 39,  88 => 38,  78 => 28,  71 => 19,  25 => 14,  72 => 29,  64 => 17,  53 => 23,  34 => 18,  92 => 39,  86 => 31,  79 => 33,  19 => 11,  42 => 20,  40 => 17,  29 => 23,  26 => 22,  224 => 96,  215 => 90,  211 => 59,  204 => 84,  200 => 55,  195 => 80,  193 => 102,  190 => 78,  188 => 51,  185 => 76,  179 => 72,  177 => 71,  171 => 45,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 73,  142 => 54,  137 => 41,  126 => 46,  120 => 53,  117 => 34,  103 => 44,  74 => 28,  47 => 28,  32 => 17,  24 => 14,  22 => 6,  23 => 12,  17 => 1,  69 => 24,  63 => 16,  58 => 15,  49 => 29,  43 => 26,  37 => 25,  20 => 11,  139 => 41,  131 => 51,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 42,  99 => 43,  96 => 25,  91 => 33,  82 => 19,  77 => 16,  75 => 20,  57 => 13,  50 => 15,  46 => 21,  44 => 9,  39 => 15,  33 => 4,  30 => 3,  27 => 2,  135 => 53,  129 => 50,  122 => 38,  116 => 36,  113 => 45,  108 => 31,  104 => 30,  102 => 41,  94 => 36,  89 => 31,  87 => 36,  84 => 25,  81 => 29,  73 => 31,  70 => 19,  67 => 26,  62 => 24,  59 => 16,  55 => 14,  51 => 21,  48 => 16,  41 => 25,  38 => 24,  35 => 24,  31 => 5,  28 => 15,);
    }
}
