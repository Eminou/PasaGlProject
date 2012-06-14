<?php

/* PasaRequirementBundle:Progression:show.html.twig */
class __TwigTemplate_c8aceaf3f694bdd1e2c576cc2daa7ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PasaRequirementBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PasaRequirementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Progression</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Percentage</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "percentage"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Progression_date</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "progressiondate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("progression"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("progression_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("progression_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle:Progression:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 32,  130 => 23,  118 => 20,  110 => 18,  100 => 26,  85 => 33,  61 => 25,  114 => 20,  101 => 23,  98 => 22,  83 => 5,  76 => 31,  68 => 30,  65 => 15,  56 => 19,  21 => 1,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 10,  133 => 44,  124 => 30,  111 => 19,  80 => 26,  60 => 20,  52 => 12,  26 => 3,  97 => 25,  95 => 18,  88 => 15,  78 => 25,  71 => 14,  92 => 38,  86 => 28,  79 => 40,  25 => 4,  72 => 32,  64 => 15,  53 => 13,  42 => 7,  34 => 5,  29 => 4,  22 => 4,  19 => 1,  40 => 6,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 22,  120 => 39,  117 => 44,  103 => 36,  74 => 34,  47 => 17,  32 => 11,  24 => 3,  23 => 3,  17 => 1,  69 => 30,  63 => 18,  58 => 20,  49 => 11,  43 => 16,  37 => 10,  20 => 2,  139 => 33,  131 => 48,  128 => 43,  125 => 42,  121 => 29,  115 => 39,  107 => 36,  99 => 34,  96 => 19,  91 => 16,  82 => 5,  77 => 35,  75 => 24,  57 => 15,  50 => 15,  46 => 10,  44 => 14,  39 => 7,  33 => 6,  30 => 4,  27 => 5,  135 => 50,  129 => 47,  122 => 21,  116 => 42,  113 => 19,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 16,  87 => 32,  84 => 28,  81 => 36,  73 => 27,  70 => 27,  67 => 24,  62 => 21,  59 => 12,  55 => 14,  51 => 18,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
