<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_a498af84161265635ca7d368d4d1e5cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["url"] = (($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getContext($context, "url")), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => $this->getContext($context, "url"), 1 => array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo " method=\"POST\">

            ";
            // line 11
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 12
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 13
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                </div>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 18
            echo "
            ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 20
                echo "                <fieldset ";
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    echo "class=\"sonata-ba-fielset-collapsed\"";
                }
                echo ">
                    <legend>
                        ";
                // line 22
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    // line 23
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\" title=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_expand", array(), "SonataAdminBundle");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 25
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                        ";
                }
                // line 27
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 31
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 32
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"));
                        echo "
                            ";
                    }
                    // line 34
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 35
                echo "                    </div>
                </fieldset>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 38
            echo "
            ";
            // line 39
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 40
            echo "
            ";
            // line 41
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
            echo "

            ";
            // line 43
            $this->displayBlock('formactions', $context, $blocks);
            // line 73
            echo "        </form>
    ";
        }
        // line 75
        echo "
";
    }

    // line 17
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
    }

    // line 39
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
    }

    // line 43
    public function block_formactions($context, array $blocks = array())
    {
        // line 44
        echo "            <div class=\"actions\">
                ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
            // line 46
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 47
                echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            } else {
                // line 49
                echo "                        <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            }
            // line 51
            echo "                ";
        } else {
            // line 52
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "admin"), "supportsPreviewMode")) {
                // line 53
                echo "                        <input class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_preview", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            }
            // line 55
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 56
                echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update_and_edit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_edit_again", array(), "SonataAdminBundle");
                echo "\"/>

                        ";
                // line 58
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 59
                    echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle");
                    echo "\"/>
                        ";
                }
                // line 61
                echo "
                        ";
                // line 62
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "delete"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "DELETE", 1 => $this->getContext($context, "object")), "method"))) {
                    // line 63
                    echo "                            ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("delete_or", array(), "SonataAdminBundle");
                    // line 64
                    echo "                            <a class=\"btn danger\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "delete", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_delete", array(), "SonataAdminBundle");
                    echo "</a>
                        ";
                }
                // line 66
                echo "                    ";
            } else {
                // line 67
                echo "                        <input class=\"btn primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_edit_again", array(), "SonataAdminBundle");
                echo "\"/>
                        <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                // line 68
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            }
            // line 70
            echo "                ";
        }
        // line 71
        echo "            </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 61,  203 => 56,  194 => 53,  191 => 52,  173 => 46,  168 => 44,  160 => 39,  155 => 17,  150 => 75,  144 => 43,  136 => 40,  10 => 43,  151 => 60,  36 => 14,  18 => 1,  98 => 6,  85 => 23,  83 => 22,  21 => 1,  76 => 37,  130 => 36,  112 => 32,  119 => 48,  101 => 7,  68 => 18,  61 => 22,  105 => 28,  100 => 34,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 71,  246 => 70,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 49,  167 => 85,  163 => 84,  140 => 56,  118 => 30,  65 => 25,  66 => 17,  56 => 26,  45 => 17,  209 => 58,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 47,  165 => 43,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 39,  132 => 49,  127 => 46,  123 => 35,  109 => 43,  93 => 25,  90 => 37,  54 => 12,  133 => 44,  124 => 49,  111 => 32,  80 => 30,  60 => 27,  52 => 11,  97 => 40,  95 => 39,  88 => 23,  78 => 28,  71 => 19,  25 => 13,  72 => 29,  64 => 23,  53 => 18,  34 => 16,  92 => 32,  86 => 31,  79 => 33,  19 => 2,  42 => 16,  40 => 17,  29 => 15,  26 => 14,  224 => 96,  215 => 90,  211 => 59,  204 => 84,  200 => 55,  195 => 80,  193 => 102,  190 => 78,  188 => 51,  185 => 76,  179 => 72,  177 => 71,  171 => 45,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 73,  142 => 54,  137 => 41,  126 => 46,  120 => 53,  117 => 34,  103 => 35,  74 => 28,  47 => 16,  32 => 15,  24 => 11,  22 => 6,  23 => 12,  17 => 1,  69 => 24,  63 => 16,  58 => 20,  49 => 21,  43 => 20,  37 => 16,  20 => 1,  139 => 41,  131 => 38,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 42,  99 => 27,  96 => 25,  91 => 33,  82 => 19,  77 => 16,  75 => 20,  57 => 13,  50 => 15,  46 => 21,  44 => 9,  39 => 15,  33 => 4,  30 => 3,  27 => 2,  135 => 53,  129 => 50,  122 => 38,  116 => 36,  113 => 45,  108 => 31,  104 => 30,  102 => 41,  94 => 36,  89 => 31,  87 => 36,  84 => 35,  81 => 29,  73 => 24,  70 => 26,  67 => 26,  62 => 24,  59 => 16,  55 => 23,  51 => 21,  48 => 20,  41 => 14,  38 => 6,  35 => 5,  31 => 5,  28 => 1,);
    }
}
