<?php

/* ::base.html.twig */
class __TwigTemplate_e723feb5969556a8b526bcbaeb16d1b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 48,  135 => 48,  128 => 43,  97 => 30,  126 => 56,  41 => 7,  106 => 27,  103 => 26,  93 => 38,  75 => 24,  69 => 25,  59 => 19,  40 => 10,  21 => 1,  81 => 35,  72 => 30,  53 => 15,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 17,  87 => 27,  66 => 21,  60 => 15,  146 => 50,  136 => 41,  122 => 43,  107 => 34,  101 => 33,  95 => 33,  82 => 27,  73 => 20,  67 => 11,  52 => 15,  22 => 4,  55 => 24,  45 => 12,  36 => 5,  109 => 37,  104 => 45,  96 => 32,  84 => 28,  80 => 24,  26 => 3,  92 => 33,  79 => 27,  57 => 6,  46 => 7,  29 => 4,  19 => 1,  27 => 5,  112 => 50,  102 => 34,  89 => 29,  63 => 14,  56 => 23,  50 => 14,  47 => 5,  44 => 14,  37 => 10,  34 => 6,  30 => 3,  43 => 16,  33 => 7,  25 => 7,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  117 => 36,  113 => 34,  86 => 36,  83 => 20,  78 => 16,  68 => 9,  64 => 24,  61 => 20,  48 => 21,  39 => 8,  32 => 5,  24 => 4,  23 => 3,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 55,  115 => 37,  111 => 36,  108 => 34,  99 => 38,  94 => 30,  91 => 17,  88 => 16,  85 => 34,  77 => 30,  74 => 26,  71 => 19,  65 => 16,  62 => 10,  58 => 8,  54 => 13,  51 => 5,  42 => 11,  38 => 11,  35 => 10,  31 => 6,  28 => 8,);
    }
}
