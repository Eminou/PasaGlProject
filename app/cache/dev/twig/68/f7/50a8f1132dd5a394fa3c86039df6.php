<?php

/* PasaRequirementBundle:Manager:new.html.twig */
class __TwigTemplate_68f750a8f1132dd5a394fa3c86039df6 extends Twig_Template
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
        echo "<h1>Manager creation</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle:Manager:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 45,  98 => 40,  36 => 18,  100 => 52,  21 => 3,  61 => 24,  65 => 25,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 45,  93 => 33,  90 => 34,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 31,  60 => 27,  52 => 12,  26 => 3,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  92 => 47,  86 => 34,  79 => 40,  25 => 7,  72 => 16,  64 => 15,  53 => 22,  42 => 7,  34 => 5,  29 => 4,  22 => 4,  19 => 1,  40 => 19,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 35,  47 => 19,  32 => 11,  24 => 3,  23 => 3,  17 => 1,  69 => 26,  63 => 24,  58 => 9,  49 => 21,  43 => 20,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 35,  77 => 25,  75 => 27,  57 => 23,  50 => 18,  46 => 19,  44 => 16,  39 => 15,  33 => 5,  30 => 4,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 53,  102 => 40,  94 => 33,  89 => 20,  87 => 32,  84 => 42,  81 => 26,  73 => 27,  70 => 26,  67 => 31,  62 => 24,  59 => 23,  55 => 21,  51 => 13,  48 => 17,  41 => 9,  38 => 12,  35 => 14,  31 => 13,  28 => 3,);
    }
}
