<?php

/* SonataUserBundle:Admin:Security/login.html.twig */
class __TwigTemplate_1e13da0c7060cc247413f1c660b1b28a extends Twig_Template
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
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 14
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check"), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"logo\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/login/24.png"), "html", null, true);
        echo "\" alt=\"\" />
            </div>
            ";
        // line 21
        if ($this->getContext($context, "error")) {
            // line 22
            echo "               <div class=\"alert-message error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
            ";
        }
        // line 24
        echo "
            <div id=\"block\">
                <div class=\"form\">
                    <p class=\"login-box\">Iniciar Sesión</p>
                    <div>
                        <label class=\"labelInput\"  for=\"username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input class=\"inputText\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />

                        <label class=\"labelInput\"  for=\"password\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input class=\"inputText\" type=\"password\" id=\"password\" name=\"_password\" />

                        <input type=\"submit\" class=\"btn\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                        <label class=\"labelCeck\" for=\"remember_me\">
                            <input class=\"inputCheck\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        </label>

                        <i class=\"ctop\"> </i>
                        <i class=\"cbottom\"> </i>
                    </div>
                </div>
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
        return "SonataUserBundle:Admin:Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 10,  133 => 7,  130 => 6,  124 => 5,  108 => 39,  101 => 35,  95 => 32,  90 => 30,  86 => 29,  79 => 24,  73 => 22,  71 => 21,  66 => 19,  61 => 18,  52 => 15,  47 => 14,  43 => 13,  39 => 11,  37 => 10,  32 => 9,  30 => 6,  26 => 5,  20 => 1,);
    }
}
