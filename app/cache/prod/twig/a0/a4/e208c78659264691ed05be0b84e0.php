<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a0a4e208c78659264691ed05be0b84e0 extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $_exception_)));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  34 => 6,  30 => 4,  43 => 7,  33 => 4,  25 => 3,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 83,  219 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 54,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 44,  127 => 43,  117 => 36,  113 => 34,  86 => 28,  83 => 27,  78 => 26,  68 => 24,  64 => 23,  61 => 22,  48 => 19,  39 => 15,  32 => 11,  24 => 6,  23 => 3,  17 => 1,  144 => 46,  138 => 45,  130 => 46,  124 => 42,  121 => 41,  115 => 40,  111 => 38,  108 => 31,  99 => 32,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  77 => 21,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 13,  54 => 11,  51 => 10,  42 => 9,  38 => 8,  35 => 7,  31 => 9,  28 => 3,);
    }
}
