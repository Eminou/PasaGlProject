<?php

/* PasaRequirementBundle::manager_layout.html.twig */
class __TwigTemplate_e98f2e3f163e4866dd20aa1188515250 extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_204476b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/204476b_part_1_main_1.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />";
        } else {
            // asset "204476b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_204476b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/204476b.css");
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
        echo "
            ";
        // line 16
        $this->displayBlock('content_header', $context, $blocks);
        // line 29
        echo "
                <div class=\"content\">
                ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "                    </div>
                </div>
            </body>
        </html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Manager";
    }

    // line 16
    public function block_content_header($context, array $blocks = array())
    {
        // line 17
        echo "             <div class='cssmenu'>
                <ul>
                ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 24
        echo "                </ul>
                <span style=\"float: right;\">logged in as <strong>";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_logout"), "html", null, true);
        echo "\">Logout</a></span>
            </div>                   
                <div style=\"clear: both\"></div>
            ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li class='active'><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("managerfront_project"), "html", null, true);
        echo "\"><span>Project</span></a></li>
                <li class='active'><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("managerfront_exigency"), "html", null, true);
        echo "\"><span>Exigency</span></a></li>
                <li class='active'><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("managerfront_collaborator"), "html", null, true);
        echo "\"><span>Collaborator</span></a></li>
                ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "                ";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle::manager_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 21,  114 => 20,  101 => 25,  98 => 24,  83 => 5,  76 => 33,  68 => 16,  65 => 15,  56 => 11,  21 => 1,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 32,  127 => 46,  123 => 22,  109 => 39,  93 => 33,  90 => 32,  54 => 10,  133 => 44,  124 => 41,  111 => 19,  80 => 26,  60 => 16,  52 => 12,  26 => 3,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  92 => 17,  86 => 28,  79 => 40,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  42 => 7,  34 => 5,  29 => 4,  22 => 4,  19 => 1,  40 => 6,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 31,  47 => 19,  32 => 11,  24 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 20,  49 => 11,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 19,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 15,  50 => 8,  46 => 10,  44 => 8,  39 => 7,  33 => 6,  30 => 4,  27 => 5,  135 => 50,  129 => 31,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 16,  87 => 32,  84 => 28,  81 => 26,  73 => 21,  70 => 29,  67 => 19,  62 => 21,  59 => 12,  55 => 14,  51 => 13,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
