<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_de2b2fd161c362d6a29acc2ce965a12c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ($this->getContext($context, "error")) {
            // line 5
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    <div class=\"logo\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/login/24.png"), "html", null, true);
        echo "\" alt=\"\" />
    </div>
    <div id=\"block\">
        <div class=\"form\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
            <p class=\"login-box\">Iniciar Sesión</p>
            <div>
                <label class=\"labelInput\" for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input class=\"inputText\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />

                <label class=\"labelInput\" for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input class=\"inputText\" type=\"password\" id=\"password\" name=\"_password\" />

                <input class=\"btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                <label class=\"labelCeck\" for=\"remember_me\">
                    <input class=\"inputCheck\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </label>

                <i class=\"ctop\"> </i>
                <i class=\"cbottom\"> </i>
            </div>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  18 => 1,  98 => 6,  85 => 37,  83 => 35,  21 => 3,  76 => 37,  130 => 36,  112 => 32,  119 => 42,  101 => 7,  68 => 23,  61 => 17,  105 => 28,  100 => 26,  315 => 170,  312 => 169,  307 => 142,  302 => 141,  297 => 8,  292 => 6,  286 => 5,  279 => 172,  277 => 169,  249 => 143,  246 => 142,  244 => 141,  212 => 112,  208 => 111,  197 => 103,  182 => 94,  167 => 85,  163 => 84,  140 => 70,  118 => 30,  65 => 29,  66 => 19,  56 => 26,  45 => 14,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 93,  176 => 70,  165 => 63,  161 => 61,  152 => 76,  148 => 75,  145 => 56,  141 => 49,  134 => 44,  132 => 49,  127 => 46,  123 => 44,  109 => 31,  93 => 22,  90 => 28,  54 => 25,  133 => 44,  124 => 54,  111 => 37,  80 => 28,  60 => 13,  52 => 22,  97 => 38,  95 => 21,  88 => 23,  78 => 25,  71 => 17,  25 => 4,  72 => 22,  64 => 31,  53 => 9,  34 => 5,  92 => 5,  86 => 27,  79 => 33,  19 => 2,  42 => 6,  40 => 8,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 102,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 41,  126 => 47,  120 => 53,  117 => 44,  103 => 36,  74 => 24,  47 => 15,  32 => 5,  24 => 11,  22 => 6,  23 => 3,  17 => 1,  69 => 24,  63 => 15,  58 => 20,  49 => 21,  43 => 7,  37 => 7,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 35,  121 => 40,  115 => 39,  107 => 36,  99 => 29,  96 => 25,  91 => 33,  82 => 22,  77 => 21,  75 => 25,  57 => 16,  50 => 15,  46 => 11,  44 => 9,  39 => 10,  33 => 6,  30 => 3,  27 => 3,  135 => 50,  129 => 47,  122 => 38,  116 => 36,  113 => 35,  108 => 10,  104 => 43,  102 => 37,  94 => 36,  89 => 21,  87 => 32,  84 => 19,  81 => 26,  73 => 24,  70 => 30,  67 => 16,  62 => 14,  59 => 16,  55 => 10,  51 => 13,  48 => 8,  41 => 9,  38 => 10,  35 => 5,  31 => 5,  28 => 1,);
    }
}
