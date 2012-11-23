<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_f24e1558e8fe0ff0e436e00bdd5a861b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["group_visible"] = false;
            // line 17
            echo "
        ";
            // line 19
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                if ((!$this->getContext($context, "group_visible"))) {
                    // line 20
                    echo "            ";
                    if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 21
                        echo "                ";
                        $context["group_visible"] = true;
                        // line 22
                        echo "            ";
                    }
                    // line 23
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 24
            echo "
        ";
            // line 25
            if ($this->getContext($context, "group_visible")) {
                // line 26
                echo "        <table class=\"zebra-striped sonata-ba-list bordered-table\">
            <thead>
                <tr>
                    <th colspan=\"3\">";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
                // line 34
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 35
                    echo "                    ";
                    if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 36
                        echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">";
                        // line 37
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                        echo "</td>
                            <td>
                                ";
                        // line 39
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 40
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                            echo "\">
                                        <img src=\"";
                            // line 41
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                            echo "\"  alt=\"";
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            echo "\" />";
                            // line 42
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            // line 43
                            echo "</a>
                                ";
                        }
                        // line 45
                        echo "                            </td>
                            <td>
                                ";
                        // line 47
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 48
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">
                                        <img src=\"";
                            // line 49
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html", null, true);
                            echo "\" alt=\"";
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            echo "\" />";
                            // line 50
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 51
                            echo "</a>
                                ";
                        }
                        // line 53
                        echo "                            </td>
                        </tr>
                    ";
                    }
                    // line 56
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 57
                echo "            </tbody>
        </table>
        ";
            }
            // line 60
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 60,  146 => 57,  140 => 56,  135 => 53,  131 => 51,  129 => 50,  124 => 49,  119 => 48,  117 => 47,  113 => 45,  109 => 43,  107 => 42,  102 => 41,  97 => 40,  95 => 39,  90 => 37,  87 => 36,  84 => 35,  72 => 29,  55 => 23,  52 => 22,  46 => 20,  29 => 15,  666 => 211,  663 => 210,  658 => 157,  654 => 154,  648 => 153,  644 => 151,  640 => 149,  635 => 148,  632 => 147,  629 => 146,  624 => 145,  621 => 144,  617 => 115,  614 => 114,  608 => 113,  603 => 110,  597 => 109,  589 => 107,  586 => 106,  582 => 105,  577 => 103,  574 => 102,  572 => 101,  569 => 100,  562 => 99,  559 => 98,  556 => 97,  553 => 96,  547 => 95,  544 => 93,  541 => 92,  536 => 91,  533 => 90,  531 => 89,  528 => 88,  521 => 83,  515 => 82,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 46,  480 => 45,  476 => 44,  472 => 43,  468 => 42,  464 => 41,  459 => 39,  455 => 38,  450 => 37,  447 => 36,  441 => 33,  437 => 32,  431 => 29,  426 => 27,  423 => 26,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 206,  394 => 203,  391 => 202,  389 => 201,  386 => 200,  380 => 198,  378 => 197,  375 => 196,  369 => 194,  367 => 193,  364 => 192,  358 => 190,  356 => 189,  352 => 187,  346 => 185,  344 => 184,  339 => 181,  333 => 178,  330 => 177,  328 => 176,  325 => 175,  320 => 172,  317 => 171,  303 => 170,  297 => 168,  294 => 167,  276 => 166,  270 => 164,  268 => 163,  264 => 161,  262 => 160,  258 => 158,  256 => 157,  252 => 155,  250 => 144,  247 => 143,  243 => 141,  237 => 139,  234 => 138,  231 => 137,  217 => 136,  211 => 134,  203 => 132,  200 => 131,  182 => 130,  179 => 129,  177 => 128,  174 => 127,  172 => 126,  164 => 120,  158 => 118,  154 => 116,  152 => 88,  148 => 86,  145 => 80,  143 => 79,  136 => 74,  130 => 72,  126 => 70,  123 => 69,  120 => 68,  103 => 66,  99 => 64,  96 => 63,  79 => 62,  76 => 61,  73 => 60,  65 => 25,  62 => 24,  60 => 55,  56 => 53,  54 => 36,  49 => 21,  42 => 20,  38 => 18,  36 => 17,  34 => 16,  30 => 14,  28 => 13,  24 => 11,  86 => 31,  80 => 34,  74 => 28,  71 => 27,  67 => 26,  63 => 24,  57 => 23,  51 => 35,  48 => 20,  44 => 19,  40 => 19,  37 => 17,  32 => 15,  26 => 14,);
    }
}
