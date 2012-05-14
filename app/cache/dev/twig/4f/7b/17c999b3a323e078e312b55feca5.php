<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_4f7b17c999b3a323e078e312b55feca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  136 => 40,  114 => 30,  85 => 43,  76 => 27,  105 => 45,  98 => 40,  36 => 18,  100 => 52,  21 => 1,  61 => 23,  65 => 22,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 45,  93 => 33,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 27,  52 => 15,  26 => 3,  97 => 34,  95 => 47,  88 => 29,  78 => 25,  71 => 14,  92 => 47,  86 => 34,  79 => 39,  25 => 7,  72 => 16,  64 => 24,  53 => 22,  42 => 7,  34 => 5,  29 => 3,  22 => 4,  19 => 1,  40 => 7,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 35,  47 => 13,  32 => 11,  24 => 9,  23 => 29,  17 => 1,  69 => 26,  63 => 24,  58 => 9,  49 => 21,  43 => 12,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 35,  77 => 25,  75 => 37,  57 => 23,  50 => 14,  46 => 17,  44 => 8,  39 => 10,  33 => 5,  30 => 4,  27 => 5,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 53,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 42,  81 => 41,  73 => 28,  70 => 27,  67 => 31,  62 => 24,  59 => 22,  55 => 21,  51 => 13,  48 => 17,  41 => 11,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
