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
";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "204476b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_204476b_0") : $this->env->getExtension('assets')->getAssetUrl("css/204476b_part_1_main_1.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />";
        } else {
            // asset "204476b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_204476b") : $this->env->getExtension('assets')->getAssetUrl("css/204476b.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />";
        }
        unset($context["asset_url"]);
        // line 8
        echo "    </head>
    <body>
            ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 11
            echo "            <div class=\"flash-message\">
                <em>Notice</em>: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 15
        echo "            ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 31
        echo "
                <div class=\"content\">
                ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "                    </div>
                </div>
            </body>
        </html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administrator";
    }

    // line 15
    public function block_content_header($context, array $blocks = array())
    {
        // line 16
        echo "             <div class='cssmenu'>
                <ul>
                ";
        // line 18
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 26
        echo "                </ul>
                <span style=\"float: right;color:white;border:1px solid white;\">logged in as <strong>";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_logout"), "html", null, true);
        echo "\">Logout</a></span>
            </div>                   
                <div style=\"clear: both\"></div>
            ";
    }

    // line 18
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 19
        echo "                <li class='active'><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager"), "html", null, true);
        echo "\"><span>Manager</span></a></li>
                <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("collaborator"), "html", null, true);
        echo "\"><span>Collaborator</span></a></li>
                <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project"), "html", null, true);
        echo "\"><span>Project</span></a></li>
                <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feature"), "html", null, true);
        echo "\"><span>Feature</span></a></li>
                <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("exigency"), "html", null, true);
        echo "\"><span>Exigency</span></a></li>
                <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("progression"), "html", null, true);
        echo "\"><span>Progression</span></a></li>
                ";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
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
        return array (  143 => 34,  140 => 33,  130 => 23,  118 => 20,  100 => 27,  91 => 16,  121 => 48,  110 => 18,  85 => 29,  43 => 16,  112 => 55,  61 => 25,  119 => 21,  114 => 43,  101 => 25,  98 => 36,  96 => 34,  83 => 5,  76 => 33,  68 => 31,  65 => 15,  56 => 11,  21 => 1,  58 => 20,  50 => 8,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 24,  132 => 32,  127 => 46,  123 => 22,  109 => 39,  93 => 33,  90 => 32,  54 => 10,  133 => 44,  124 => 41,  111 => 19,  107 => 36,  80 => 26,  69 => 30,  63 => 18,  60 => 20,  52 => 22,  26 => 3,  97 => 26,  95 => 18,  88 => 15,  78 => 25,  75 => 24,  71 => 14,  92 => 33,  86 => 38,  79 => 34,  46 => 10,  37 => 10,  25 => 4,  82 => 5,  72 => 33,  64 => 15,  53 => 13,  49 => 11,  44 => 14,  42 => 7,  34 => 5,  29 => 4,  22 => 4,  33 => 6,  27 => 5,  19 => 1,  40 => 6,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 22,  120 => 39,  117 => 47,  103 => 36,  99 => 34,  77 => 35,  74 => 35,  57 => 15,  47 => 17,  39 => 7,  32 => 11,  24 => 3,  30 => 4,  23 => 3,  17 => 1,  135 => 50,  129 => 31,  122 => 21,  116 => 56,  113 => 19,  108 => 40,  104 => 50,  102 => 37,  94 => 33,  89 => 16,  87 => 30,  84 => 28,  81 => 36,  73 => 27,  70 => 29,  67 => 24,  62 => 21,  59 => 12,  55 => 23,  51 => 18,  48 => 21,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
