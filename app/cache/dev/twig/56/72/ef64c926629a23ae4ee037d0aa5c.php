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
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 10
            echo "            <div class=\"flash-message\">
                <em>Notice</em>: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
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
        return array (  103 => 27,  100 => 26,  91 => 18,  88 => 17,  81 => 20,  79 => 17,  76 => 16,  73 => 15,  67 => 5,  59 => 28,  57 => 26,  53 => 24,  51 => 15,  48 => 14,  42 => 11,  39 => 10,  37 => 9,  31 => 6,  27 => 5,  21 => 1,);
    }
}
