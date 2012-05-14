<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d97dcd7a421d44e16ea9755b3dccfcb6 extends Twig_Template
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
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,  40 => 7,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 45,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 11,  24 => 3,  23 => 5,  17 => 1,  69 => 14,  63 => 10,  58 => 9,  49 => 6,  43 => 15,  37 => 12,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 30,  77 => 28,  75 => 26,  57 => 22,  50 => 13,  46 => 11,  44 => 10,  39 => 15,  33 => 7,  30 => 9,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 38,  102 => 37,  94 => 31,  89 => 29,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 26,  67 => 20,  62 => 24,  59 => 23,  55 => 8,  51 => 11,  48 => 10,  41 => 14,  38 => 8,  35 => 8,  31 => 6,  28 => 3,);
    }
}
