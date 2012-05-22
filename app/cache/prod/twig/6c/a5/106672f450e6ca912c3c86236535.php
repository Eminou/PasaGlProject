<?php

/* PasaRequirementBundle:Secured:login.html.twig */
class __TwigTemplate_6ca5106672f450e6ca912c3c86236535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <h1>Authentication:</h1>

    <p>
        Enter youre username and password to be able to use the application:
    </p>

    ";
        // line 7
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 8
            echo "        <div class=\"error\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <input type=\"submit\" class=\"symfony-button-grey\" value=\"LOGIN\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  106 => 27,  103 => 26,  93 => 18,  75 => 24,  69 => 5,  59 => 19,  40 => 7,  21 => 1,  81 => 35,  72 => 30,  53 => 15,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 17,  87 => 27,  66 => 21,  60 => 15,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 33,  95 => 33,  82 => 27,  73 => 20,  67 => 17,  52 => 15,  22 => 4,  55 => 24,  45 => 14,  36 => 5,  109 => 20,  104 => 34,  96 => 32,  84 => 14,  80 => 24,  26 => 3,  92 => 33,  79 => 27,  57 => 14,  46 => 7,  29 => 4,  19 => 1,  27 => 5,  112 => 21,  102 => 38,  89 => 16,  63 => 14,  56 => 12,  50 => 14,  47 => 5,  44 => 14,  37 => 10,  34 => 6,  30 => 3,  43 => 16,  33 => 6,  25 => 7,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  117 => 36,  113 => 34,  86 => 36,  83 => 20,  78 => 16,  68 => 9,  64 => 20,  61 => 20,  48 => 17,  39 => 8,  32 => 5,  24 => 4,  23 => 3,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 38,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 13,  51 => 18,  42 => 9,  38 => 11,  35 => 10,  31 => 6,  28 => 8,);
    }
}
