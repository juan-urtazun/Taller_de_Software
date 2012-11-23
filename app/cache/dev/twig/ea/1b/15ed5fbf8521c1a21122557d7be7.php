<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_ea1b15ed5fbf8521c1a21122557d7be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
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
        if (((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "edit"), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method")) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "show")) > 0))) {
            // line 18
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_edit", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "show"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "VIEW", 1 => $this->getContext($context, "object")), "method"))) {
            // line 21
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "show", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_show", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 23
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 24
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 26
        echo "        </ul>
    </div>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"row\">
        <div class=\"span9\">
            <table id=\"revisions\">
                <thead>
                    <tr>
                        <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 44
            echo "                        <tr>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "timestamp")), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "username"), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "history_view_revision", 1 => $this->getContext($context, "object"), 2 => array("revision" => $this->getAttribute($this->getContext($context, "revision"), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 51
        echo "                </tbody>
            </table>
        </div>
        <div id=\"revision-detail\" class=\"span12 revision-detail\">

        </div>
    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  110 => 46,  106 => 45,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 61,  203 => 56,  194 => 53,  191 => 52,  173 => 46,  168 => 44,  160 => 39,  155 => 17,  150 => 75,  144 => 43,  136 => 40,  10 => 43,  151 => 60,  36 => 14,  18 => 1,  98 => 6,  85 => 23,  83 => 22,  21 => 1,  76 => 37,  130 => 36,  112 => 32,  119 => 48,  101 => 7,  68 => 18,  61 => 22,  105 => 28,  100 => 34,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 71,  246 => 70,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 49,  167 => 85,  163 => 84,  140 => 56,  118 => 48,  65 => 24,  66 => 17,  56 => 24,  45 => 21,  209 => 58,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 47,  165 => 43,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 39,  132 => 49,  127 => 46,  123 => 35,  109 => 43,  93 => 25,  90 => 37,  54 => 18,  133 => 44,  124 => 49,  111 => 32,  80 => 36,  60 => 20,  52 => 11,  97 => 40,  95 => 39,  88 => 38,  78 => 28,  71 => 19,  25 => 14,  72 => 29,  64 => 26,  53 => 23,  34 => 18,  92 => 39,  86 => 31,  79 => 33,  19 => 11,  42 => 20,  40 => 17,  29 => 23,  26 => 22,  224 => 96,  215 => 90,  211 => 59,  204 => 84,  200 => 55,  195 => 80,  193 => 102,  190 => 78,  188 => 51,  185 => 76,  179 => 72,  177 => 71,  171 => 45,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 73,  142 => 54,  137 => 41,  126 => 46,  120 => 53,  117 => 34,  103 => 44,  74 => 28,  47 => 16,  32 => 17,  24 => 14,  22 => 6,  23 => 12,  17 => 1,  69 => 24,  63 => 16,  58 => 20,  49 => 21,  43 => 20,  37 => 25,  20 => 1,  139 => 41,  131 => 51,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 42,  99 => 43,  96 => 25,  91 => 33,  82 => 19,  77 => 16,  75 => 20,  57 => 13,  50 => 15,  46 => 21,  44 => 9,  39 => 15,  33 => 4,  30 => 3,  27 => 2,  135 => 53,  129 => 50,  122 => 38,  116 => 36,  113 => 45,  108 => 31,  104 => 30,  102 => 41,  94 => 36,  89 => 31,  87 => 36,  84 => 37,  81 => 29,  73 => 31,  70 => 30,  67 => 26,  62 => 24,  59 => 16,  55 => 23,  51 => 21,  48 => 16,  41 => 14,  38 => 6,  35 => 24,  31 => 5,  28 => 15,);
    }
}
