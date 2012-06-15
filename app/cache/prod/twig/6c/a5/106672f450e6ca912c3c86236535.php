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
        if ($this->getContext($context, "error")) {
            // line 8
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
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
        return array (  36 => 11,  143 => 34,  140 => 33,  130 => 23,  118 => 20,  100 => 27,  91 => 16,  121 => 48,  110 => 18,  85 => 33,  43 => 16,  112 => 55,  61 => 25,  119 => 21,  114 => 43,  101 => 25,  98 => 36,  96 => 34,  83 => 5,  76 => 33,  68 => 31,  65 => 15,  56 => 19,  21 => 1,  58 => 20,  50 => 15,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 24,  132 => 32,  127 => 46,  123 => 22,  109 => 39,  93 => 33,  90 => 32,  54 => 10,  133 => 44,  124 => 41,  111 => 19,  107 => 36,  80 => 26,  69 => 24,  63 => 18,  60 => 20,  52 => 22,  26 => 3,  97 => 26,  95 => 18,  88 => 15,  78 => 25,  75 => 27,  71 => 14,  92 => 38,  86 => 38,  79 => 34,  46 => 10,  37 => 10,  25 => 7,  82 => 5,  72 => 33,  64 => 15,  53 => 13,  49 => 11,  44 => 14,  42 => 14,  34 => 5,  29 => 4,  22 => 4,  33 => 10,  27 => 8,  19 => 1,  40 => 6,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 22,  120 => 39,  117 => 47,  103 => 36,  99 => 34,  77 => 35,  74 => 35,  57 => 15,  47 => 17,  39 => 7,  32 => 11,  24 => 3,  30 => 4,  23 => 3,  17 => 1,  135 => 50,  129 => 31,  122 => 21,  116 => 56,  113 => 19,  108 => 40,  104 => 50,  102 => 37,  94 => 38,  89 => 16,  87 => 33,  84 => 28,  81 => 36,  73 => 27,  70 => 29,  67 => 24,  62 => 21,  59 => 12,  55 => 23,  51 => 18,  48 => 21,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
