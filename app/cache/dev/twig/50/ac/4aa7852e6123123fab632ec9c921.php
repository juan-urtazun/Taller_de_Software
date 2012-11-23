<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_50ac4aa7852e6123123fab632ec9c921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'generic_label' => array($this, 'block_generic_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'field_row' => array($this, 'block_field_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('generic_label', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('field_row', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('collection_widget', $context, $blocks);
    }

    // line 13
    public function block_generic_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 16
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " required")));
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
            // line 19
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 20
            echo $this->getContext($context, "widget");
            echo "
            <span>
                ";
            // line 22
            if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                // line 23
                echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
            } else {
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "translationDomain")), "html", null, true);
            }
            // line 27
            echo "            </span>
        </label>
    ";
        } else {
            // line 30
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 31
            if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                // line 32
                echo "                ";
                echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                echo "
            ";
            } else {
                // line 34
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "translationDomain")), "html", null, true);
                echo "
            ";
            }
            // line 36
            echo "            ";
            echo (($this->getContext($context, "required")) ? ("*") : (""));
            echo "
        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        ob_start();
        // line 44
        echo "        id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            if (($this->getContext($context, "attrname") == "class")) {
                echo "inputs-list ";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "        ";
        if (!twig_in_filter("class", twig_get_array_keys_filter($this->getContext($context, "attr")))) {
            echo "class=\"inputs-list\"";
        }
        // line 47
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 51
        ob_start();
        // line 52
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 53
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 55
                echo "            <li>
                ";
                // line 56
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "child"), null, array("in_list_checkbox" => true, "widget" => $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"))));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 59
            echo "        </ul>
    ";
        } else {
            // line 61
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 62
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 63
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 65
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 66
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 67
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 68
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 69
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 71
                echo "        ";
            }
            // line 72
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 73
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_field_row($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, "sonata_admin_enabled"))) || (!$this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")))) {
            // line 81
            echo "        ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null)));
            echo "
        ";
            // line 82
            echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
            echo "
        ";
            // line 83
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "
    ";
        } else {
            // line 85
            echo "        <div class=\"clearfix";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 86
            $this->displayBlock('label', $context, $blocks);
            // line 93
            echo "
            <div class=\"input sonata-ba-field sonata-ba-field-";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">

                ";
            // line 96
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "

                ";
            // line 98
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help")) {
                // line 99
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help"), "html", null, true);
                echo "</span>
                ";
            }
            // line 101
            echo "
                ";
            // line 102
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 103
                echo "                    <div class=\"sonata-ba-field-error-messages\">
                        ";
                // line 104
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                    </div>
                ";
            }
            // line 107
            echo "            </div>
        </div>
    ";
        }
    }

    // line 86
    public function block_label($context, array $blocks = array())
    {
        // line 87
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 88
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "name"));
            echo "
                ";
        } else {
            // line 90
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
            echo "
                ";
        }
        // line 92
        echo "            ";
    }

    // line 112
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 113
        ob_start();
        // line 114
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 115
        if ($this->getContext($context, "allow_delete")) {
            // line 116
            echo "            <a href=\"#\" class=\"sonata-collection-delete\"></a>
        ";
        }
        // line 118
        echo "        ";
        echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 123
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 124
        ob_start();
        // line 125
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 126
            echo "        ";
            $context["child"] = $this->getContext($context, "prototype");
            // line 127
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks)));
            // line 128
            echo "    ";
        }
        // line 129
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 130
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        ";
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 132
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 134
        echo "        ";
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
        ";
        // line 135
        if ($this->getContext($context, "allow_add")) {
            // line 136
            echo "            <div><a href=\"#\" class=\"sonata-collection-add\"></a></div>
        ";
        }
        // line 138
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 138,  456 => 135,  413 => 130,  408 => 129,  405 => 128,  396 => 125,  394 => 124,  391 => 123,  382 => 118,  378 => 116,  376 => 115,  373 => 114,  371 => 113,  368 => 112,  364 => 92,  352 => 88,  349 => 87,  346 => 86,  339 => 107,  333 => 104,  328 => 102,  319 => 99,  317 => 98,  298 => 93,  296 => 86,  287 => 85,  282 => 83,  278 => 82,  273 => 81,  270 => 80,  267 => 79,  254 => 72,  251 => 71,  245 => 69,  243 => 68,  238 => 67,  235 => 66,  226 => 63,  216 => 61,  186 => 51,  324 => 91,  320 => 89,  295 => 84,  272 => 81,  265 => 78,  262 => 77,  260 => 76,  257 => 73,  248 => 67,  239 => 64,  234 => 63,  232 => 65,  229 => 61,  207 => 54,  170 => 44,  147 => 42,  585 => 199,  580 => 197,  574 => 195,  572 => 194,  566 => 190,  557 => 187,  553 => 186,  549 => 185,  542 => 184,  538 => 183,  533 => 181,  526 => 179,  518 => 177,  515 => 176,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 151,  473 => 150,  461 => 138,  458 => 136,  453 => 164,  451 => 134,  446 => 147,  444 => 137,  441 => 136,  438 => 135,  434 => 132,  425 => 124,  417 => 131,  415 => 121,  412 => 120,  404 => 118,  402 => 127,  399 => 126,  393 => 115,  385 => 113,  377 => 111,  374 => 110,  369 => 109,  366 => 107,  358 => 90,  356 => 104,  353 => 103,  345 => 101,  343 => 100,  335 => 95,  332 => 94,  330 => 103,  325 => 101,  323 => 89,  318 => 88,  301 => 94,  275 => 82,  271 => 81,  268 => 79,  266 => 79,  259 => 77,  255 => 76,  252 => 75,  237 => 69,  228 => 67,  221 => 65,  214 => 63,  199 => 57,  183 => 50,  157 => 47,  154 => 46,  114 => 46,  110 => 19,  106 => 45,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 64,  203 => 56,  194 => 53,  191 => 53,  173 => 46,  168 => 44,  160 => 48,  155 => 17,  150 => 43,  144 => 43,  136 => 40,  10 => 43,  151 => 45,  36 => 18,  18 => 11,  98 => 42,  85 => 37,  83 => 37,  21 => 13,  76 => 29,  130 => 36,  112 => 46,  119 => 32,  101 => 16,  68 => 30,  61 => 15,  105 => 44,  100 => 34,  315 => 87,  312 => 96,  307 => 142,  302 => 141,  297 => 8,  292 => 83,  286 => 5,  279 => 172,  277 => 169,  249 => 74,  246 => 70,  244 => 66,  212 => 59,  208 => 111,  197 => 103,  182 => 49,  167 => 43,  163 => 49,  140 => 56,  118 => 21,  65 => 30,  66 => 6,  56 => 13,  45 => 25,  209 => 58,  205 => 58,  196 => 54,  192 => 54,  189 => 77,  178 => 47,  176 => 46,  165 => 42,  161 => 61,  152 => 76,  148 => 44,  145 => 33,  141 => 49,  134 => 39,  132 => 26,  127 => 35,  123 => 31,  109 => 47,  93 => 134,  90 => 39,  54 => 75,  133 => 44,  124 => 49,  111 => 32,  80 => 36,  60 => 27,  52 => 123,  97 => 43,  95 => 135,  88 => 38,  78 => 9,  71 => 7,  25 => 3,  72 => 29,  64 => 16,  53 => 25,  34 => 49,  92 => 40,  86 => 38,  79 => 61,  19 => 2,  42 => 79,  40 => 58,  29 => 41,  26 => 13,  224 => 62,  215 => 90,  211 => 62,  204 => 84,  200 => 55,  195 => 48,  193 => 102,  190 => 78,  188 => 52,  185 => 76,  179 => 47,  177 => 51,  171 => 45,  162 => 41,  158 => 45,  156 => 60,  153 => 44,  146 => 56,  142 => 32,  137 => 36,  126 => 24,  120 => 22,  117 => 49,  103 => 44,  74 => 13,  47 => 112,  32 => 42,  24 => 11,  22 => 2,  23 => 12,  17 => 11,  69 => 30,  63 => 5,  58 => 3,  49 => 122,  43 => 60,  37 => 50,  20 => 2,  139 => 54,  131 => 34,  128 => 55,  125 => 32,  121 => 48,  115 => 50,  107 => 30,  99 => 25,  96 => 23,  91 => 14,  82 => 36,  77 => 14,  75 => 8,  57 => 26,  50 => 24,  46 => 61,  44 => 111,  39 => 78,  33 => 17,  30 => 32,  27 => 13,  135 => 57,  129 => 25,  122 => 53,  116 => 31,  113 => 20,  108 => 30,  104 => 30,  102 => 27,  94 => 22,  89 => 20,  87 => 12,  84 => 73,  81 => 35,  73 => 19,  70 => 18,  67 => 17,  62 => 28,  59 => 14,  55 => 5,  51 => 74,  48 => 72,  41 => 4,  38 => 41,  35 => 40,  31 => 16,  28 => 15,);
    }
}
