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
        // line 27
        echo "
                <div class=\"content\">
                ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 31
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
        // line 22
        echo "                </ul>
                <span style=\"float: right;\">logged in as <strong>";
        // line 23
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
                ";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
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
        return array (  124 => 30,  121 => 29,  114 => 20,  111 => 19,  101 => 23,  98 => 22,  96 => 19,  89 => 16,  83 => 5,  76 => 31,  74 => 29,  70 => 27,  68 => 16,  65 => 15,  59 => 12,  54 => 10,  35 => 7,  31 => 6,  27 => 5,  21 => 1,  92 => 17,  85 => 33,  73 => 27,  67 => 24,  60 => 20,  56 => 11,  50 => 8,  47 => 17,  43 => 16,  29 => 4,  26 => 3,);
    }
}
