<?php

/* ::base.html.twig */
class __TwigTemplate_559fe39962a8fa0619d9d0160c2a305b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
            'documentReady' => array($this, 'block_documentReady'),
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
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('javascripts', $context, $blocks);
        // line 9
        echo "    </head>
    <body class=\"body\">
        <!-- NO MODIFICAR - Banner de Sessión -->
        <div class=\"sesion\">
            <div id=\"barrasesion\" class=\"barrasesion\">
            <div class=\"sesioncenter\">
            <img alt=\"\" class=\"imgico\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/session/logo30.png"), "html", null, true);
        echo "\"/>
            <div class=\"divtitulo\">Facultad de Cs. M&eacute;dicas</div>
            <div class=\"divbarrasesion\">
            <ul id=\"itemsbarrasesion\">
             <ol id=\"barlogon\">
                <li><a class=\"menuboton1\"><img alt=\"\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/session/usuario.png"), "html", null, true);
        echo "\"/>
                    <span>
                        ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "                            Usuario: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "
                         ";
        } else {
            // line 25
            echo "                            Usuario: Anónimo
                        ";
        }
        // line 27
        echo "                        </span></a>
                </li>
                <li>
                    <a href=\"#\" class=\"menuboton1\"><img alt=\"\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/session/config.png"), "html", null, true);
        echo "\"/>Configuración</a>
                    <div class=\"sub\">
                        <ul>
                            <li><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/session/cuenta.png"), "html", null, true);
        echo "\"/><div><a href=\"#\">Configuración de Cuenta</a></div></li>
                            <li><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/session/ayuda.png"), "html", null, true);
        echo "\"/><div><a href=\"#\">Contacto y Ayuda</a></div></li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\" class=\"menuboton1\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/session/cerrar.png"), "html", null, true);
        echo "\"/>Cerrar Sesión</a></li>
             </ol>
            </ul>
            </div>
        </div>
            </div>
        </div>
        <!-- FIN NO MODIFICAR - Banner de Sessión -->
        <div class=\"contenedor\">
            <!-- INICIO. Medio Página -->
            <div class=\"mid\">
                <!-- INICIO. Tabla Sup -->
                <table class=\"tmidsup\">
                    <tr class=\"trmidsup\">
                        <td class=\"sa1\"></td>
                        <td class=\"sa2\"></td>
                        <td class=\"sa3\" rowspan=\"2\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/></td>
                        <td class=\"sa4\"></td>
                        <td class=\"sa5\">
                            <span><a href=\"#\">Sistema de Concurso Docente</a>  </span>
                            <div><img alt=\"\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/></div>
                        </td>
                        <td class=\"sa6\"></td>
                        <td class=\"sa7\"></td>
                    </tr>
                    <tr class=\"trmidsup\">
                        <td class=\"sb1\"></td>
                        <td class=\"sb2\"></td>
                        <td class=\"sb4\"></td>
                        <!-- INICIO. Menu -->
                        <td class=\"menu\">
                            <ul id=\"topnav\">
                                <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_index"), "html", null, true);
        echo "\" class=\"menuboton1\">Inicio</a></li>
                                <li>
                                    <a href=\"#\" class=\"menuboton2\">Oficina</a>
                                    <div class=\"sub\">
                                        <ul>
                                            <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oficina_new"), "html", null, true);
        echo "\">Alta</a></li>
                                            <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oficina"), "html", null, true);
        echo "\">Administración</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"menuboton2\">Concurso</a>
                                    <div class=\"sub\">
                                        <ul>
                                            <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("concurso_new"), "html", null, true);
        echo "\">Alta</a></li>
                                            <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("concurso"), "html", null, true);
        echo "\">Administración</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"menuboton2\">Catedra</a>
                                    <div class=\"sub\">
                                        <ul>
                                            <li><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catedra_new"), "html", null, true);
        echo "\">Alta</a></li>
                                            <li><a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catedra"), "html", null, true);
        echo "\">Administración</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"menuboton2\">Persona</a>
                                    <div class=\"sub\">
                                        <ul>
                                            <li><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_new"), "html", null, true);
        echo "\">Alta</a></li>
                                            <li><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona"), "html", null, true);
        echo "\">Administración</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"menuboton2\">Tipo de Cargo</a>
                                    <div class=\"sub\">
                                        <ul>
                                            <li><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocargo_new"), "html", null, true);
        echo "\">Alta</a></li>
                                            <li><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipocargo"), "html", null, true);
        echo "\">Administración</a></li>
                                        </ul>
                                    </div>
                                </li>
                                
                                <li class=\"botonfin\"><div class=\"botonfinal\"></div></li>
                            </ul> 
                        </td>
                        <!-- FIN. Menu -->
                        <td class=\"sb6\"></td>
                        <td class=\"sb7\"></td>
                    </tr>
                    <tr class=\"trmidsup\">
                        <td class=\"sc1\"></td>
                        <td class=\"sc2\"></td>
                        <td class=\"sc3\"></td>
                        <td class=\"sc4\"></td>
                        <td class=\"sc5\"></td>
                        <td class=\"sc6\"></td>
                        <td class=\"sc7\"></td>
                    </tr>
                </table>
                <!-- FIN. Tabla Sup -->
                <!-- INICIO. Tabla Medio -->
                <table class=\"tmidmid\">
                    <tr class=\"trmidmid\"><td class=\"b1\"></td>
                        <!-- INICIO. TD MEDIO -->
                        <td class=\"tdmed\">
                            <!-- INICIO. CONTENT MASTER -->
                            ";
        // line 141
        $this->displayBlock('titulo', $context, $blocks);
        // line 142
        echo "                            ";
        $this->displayBlock('body', $context, $blocks);
        // line 143
        echo "                            <!-- INICIO. CONTENT MASTER -->
                        </td>
                        <!-- FIN. TD MEDIO -->
                        <td class=\"b3\"></td>
                    </tr>
                    <tr class=\"trmidinf\"><td class=\"c1\"></td><td class=\"c2\"></td><td class=\"c3\"></td></tr>    
                </table>
                <!-- FIN. Tabla Medio -->
                <!-- INICIO. Pie de Página -->
                <div class=\"bot\">
                    <div class=\"bot1\">
                        <div class=\"footer_links\">
                            <strong>© medicina.</strong> 
                            <a href=\"#\">Sobre</a>
                            <a href=\"#\">Terminos del Servicio</a> 
                            <a href=\"#\">Contacto y Ayuda</a> 
                        </div>
                    </div>
                    <div class=\"bot2\">
                        Sistema Desarrollado por Grupo 1
                    </div>
                </div>
                <!-- FIN. Pie de Página -->
            </div>
            <!-- FIN. Medio Página -->
        </div>     
            ";
        // line 169
        $this->displayBlock('documentReady', $context, $blocks);
        // line 172
        echo "    </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de Concursos Docentes";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 141
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 142
    public function block_body($context, array $blocks = array())
    {
    }

    // line 169
    public function block_documentReady($context, array $blocks = array())
    {
        // line 170
        echo "
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 54,  65 => 23,  66 => 12,  56 => 9,  45 => 7,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 34,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 30,  60 => 10,  52 => 8,  97 => 38,  95 => 21,  88 => 29,  78 => 25,  71 => 25,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 3,  92 => 20,  86 => 33,  79 => 40,  19 => 2,  42 => 9,  40 => 8,  29 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 14,  47 => 7,  32 => 11,  24 => 3,  22 => 3,  23 => 1,  17 => 1,  69 => 20,  63 => 22,  58 => 20,  49 => 11,  43 => 15,  37 => 4,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 58,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 27,  57 => 15,  50 => 15,  46 => 10,  44 => 6,  39 => 9,  33 => 6,  30 => 2,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 14,  59 => 23,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 4,  35 => 7,  31 => 4,  28 => 2,);
    }
}
