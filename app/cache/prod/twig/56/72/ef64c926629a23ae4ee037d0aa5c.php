<?php

/* PasaRequirementBundle::layout.html.twig */
class __TwigTemplate_5672ef64c926629a23ae4ee037d0aa5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
            ";
        // line 9
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "notice"), "method")) {
            // line 10
            echo "            <div class=\"flash-message\">
                <em>Notice</em>: ";
            // line 11
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('content_header', $context, $blocks);
        // line 24
        echo "
                <div class=\"content\">
                ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "                    </div>
                </div>
            </body>
        </html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Exigency";
    }

    // line 15
    public function block_content_header($context, array $blocks = array())
    {
        // line 16
        echo "            <div id=\"menu\" style=\"float: right\">
                    ";
        // line 17
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 20
        echo "                </div>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 17
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 18
        echo "                    <span>logged in as <strong>";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_app_, "user")) ? ($this->getAttribute($this->getAttribute($_app_, "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_logout"), "html", null, true);
        echo "\">Logout</a></span> 
                    ";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "                ";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  103 => 26,  93 => 18,  75 => 15,  69 => 5,  59 => 26,  40 => 10,  21 => 1,  81 => 17,  72 => 30,  53 => 15,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 17,  87 => 27,  66 => 18,  60 => 15,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 33,  95 => 29,  82 => 25,  73 => 20,  67 => 17,  52 => 11,  22 => 4,  55 => 24,  45 => 14,  36 => 5,  109 => 20,  104 => 34,  96 => 32,  84 => 14,  80 => 24,  26 => 3,  92 => 28,  79 => 40,  57 => 14,  46 => 7,  29 => 4,  19 => 1,  27 => 5,  112 => 21,  102 => 19,  89 => 16,  63 => 14,  56 => 12,  50 => 14,  47 => 5,  44 => 6,  37 => 9,  34 => 6,  30 => 3,  43 => 11,  33 => 7,  25 => 2,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  117 => 36,  113 => 34,  86 => 36,  83 => 20,  78 => 16,  68 => 9,  64 => 25,  61 => 28,  48 => 10,  39 => 8,  32 => 5,  24 => 4,  23 => 3,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 13,  51 => 10,  42 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
