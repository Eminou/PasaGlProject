<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6879e29fb9c1da827fabf13a57306a52 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  97 => 22,  95 => 21,  88 => 19,  78 => 17,  75 => 16,  71 => 14,  92 => 20,  86 => 6,  79 => 40,  46 => 14,  37 => 8,  25 => 4,  82 => 18,  72 => 16,  64 => 15,  53 => 13,  49 => 9,  44 => 8,  42 => 7,  34 => 7,  29 => 4,  22 => 4,  33 => 5,  27 => 4,  19 => 1,  40 => 6,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 45,  117 => 44,  103 => 36,  99 => 34,  77 => 39,  74 => 27,  57 => 9,  47 => 19,  39 => 5,  32 => 11,  24 => 3,  30 => 4,  23 => 3,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 24,  102 => 37,  94 => 31,  89 => 20,  87 => 28,  84 => 27,  81 => 26,  73 => 21,  70 => 26,  67 => 12,  62 => 24,  59 => 23,  55 => 14,  51 => 11,  48 => 10,  41 => 6,  38 => 6,  35 => 7,  31 => 5,  28 => 3,);
    }
}
