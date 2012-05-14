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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
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
        return array (  22 => 4,  55 => 9,  45 => 6,  36 => 5,  109 => 20,  104 => 19,  96 => 18,  84 => 14,  80 => 12,  26 => 4,  92 => 39,  79 => 40,  57 => 22,  46 => 7,  29 => 6,  19 => 1,  27 => 3,  112 => 21,  102 => 19,  89 => 16,  63 => 14,  56 => 12,  50 => 6,  47 => 5,  44 => 6,  37 => 8,  34 => 6,  30 => 3,  43 => 7,  33 => 7,  25 => 2,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 83,  219 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 54,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 44,  127 => 43,  117 => 22,  113 => 34,  86 => 6,  83 => 27,  78 => 15,  68 => 9,  64 => 23,  61 => 13,  48 => 7,  39 => 8,  32 => 5,  24 => 4,  23 => 3,  17 => 1,  144 => 46,  138 => 45,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 38,  108 => 31,  99 => 32,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 11,  51 => 10,  42 => 9,  38 => 7,  35 => 4,  31 => 4,  28 => 4,);
    }
}
