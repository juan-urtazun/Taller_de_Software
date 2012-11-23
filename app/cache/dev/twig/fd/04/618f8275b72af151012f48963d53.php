<?php

/* BackendBundle:Default:login.html.twig */
class __TwigTemplate_fd04618f8275b72af151012f48963d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_index"), "html", null, true);
        echo "\" >
            <div class=\"logo\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/login/24.png"), "html", null, true);
        echo "\" alt=\"\" />
            </div>
            <div id=\"block\">

                <div class=\"form\">
                    <p class=\"login-box\">Login</p>
                    <input type=\"text\" value=\"Usuario\"/>
                    <input type=\"text\" value=\"*******\"/>
                    <p class=\"btn\">
                        <input type=\"submit\" value=\"Login\"/>
                    </p>
                    <ul class=\"nav-path\">
                        <li><a href=\"#\">Recuperar Contraseña</a></li>
                    </ul>
                    <i class=\"ctop\">&nbsp;</i>
                    <i class=\"cbottom\">&nbsp;</i>
                    
                </div>
                <br>
                <br>
                <h1>PARA INGRESAR AL SISTEMA SOLO PRESIONEN \"LOGIN\"</h1>
            </div>
                
        </form>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Acceso a Sistema de Concurso Docentes";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 30,  65 => 23,  66 => 23,  56 => 10,  45 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 44,  132 => 49,  127 => 46,  123 => 44,  109 => 31,  93 => 28,  90 => 35,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 30,  60 => 17,  52 => 8,  97 => 38,  95 => 21,  88 => 29,  78 => 5,  71 => 25,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 3,  92 => 20,  86 => 34,  79 => 40,  19 => 2,  42 => 6,  40 => 6,  29 => 2,  26 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 23,  47 => 14,  32 => 9,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 24,  63 => 14,  58 => 20,  49 => 8,  43 => 13,  37 => 10,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 36,  99 => 29,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 25,  57 => 15,  50 => 15,  46 => 7,  44 => 6,  39 => 11,  33 => 6,  30 => 6,  27 => 4,  135 => 50,  129 => 47,  122 => 38,  116 => 35,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 10,  89 => 21,  87 => 7,  84 => 6,  81 => 26,  73 => 18,  70 => 17,  67 => 19,  62 => 22,  59 => 23,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 4,  35 => 3,  31 => 4,  28 => 2,);
    }
}
