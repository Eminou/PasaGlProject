<?php

/* PasaRequirementBundle:ManagerFront:project_new.html.twig */
class __TwigTemplate_f64c7e6f80661364a48232769a480dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PasaRequirementBundle::manager_layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PasaRequirementBundle::manager_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Project creation</h1>

<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle:ManagerFront:project_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  121 => 29,  114 => 20,  101 => 23,  98 => 22,  96 => 19,  83 => 5,  76 => 31,  68 => 16,  65 => 15,  56 => 11,  21 => 1,  58 => 20,  50 => 15,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 10,  133 => 44,  124 => 30,  111 => 19,  107 => 36,  80 => 26,  69 => 30,  63 => 18,  60 => 16,  52 => 12,  26 => 3,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  75 => 24,  71 => 14,  92 => 17,  86 => 28,  79 => 40,  46 => 10,  37 => 10,  25 => 4,  82 => 27,  72 => 16,  64 => 15,  53 => 13,  49 => 11,  44 => 14,  42 => 7,  34 => 5,  29 => 4,  22 => 4,  33 => 6,  27 => 5,  19 => 1,  40 => 6,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  99 => 34,  77 => 35,  74 => 29,  57 => 15,  47 => 19,  39 => 7,  32 => 11,  24 => 3,  30 => 4,  23 => 3,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 16,  87 => 28,  84 => 28,  81 => 36,  73 => 21,  70 => 27,  67 => 19,  62 => 21,  59 => 12,  55 => 14,  51 => 18,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
