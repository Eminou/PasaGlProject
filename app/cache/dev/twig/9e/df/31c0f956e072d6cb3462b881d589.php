<?php

/* PasaRequirementBundle:Manager:show.html.twig */
class __TwigTemplate_9edf31c0f956e072d6cb3462b881d589 extends Twig_Template
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
        echo "<h1>Manager</h1>

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
            <th>First_name</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Last_name</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Salt</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "salt"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Password</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "password"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Is_active</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "isactive"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 56
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
        return "PasaRequirementBundle:Manager:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 55,  36 => 11,  136 => 32,  130 => 23,  118 => 20,  110 => 43,  100 => 26,  85 => 30,  61 => 24,  114 => 43,  101 => 23,  98 => 37,  83 => 5,  76 => 31,  68 => 30,  65 => 26,  56 => 19,  21 => 1,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 10,  133 => 44,  124 => 30,  111 => 19,  80 => 26,  60 => 20,  52 => 22,  26 => 3,  97 => 25,  95 => 18,  88 => 15,  78 => 25,  71 => 14,  92 => 34,  86 => 38,  79 => 34,  25 => 7,  72 => 30,  64 => 15,  53 => 13,  42 => 14,  34 => 5,  29 => 4,  22 => 4,  19 => 1,  40 => 6,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 22,  120 => 39,  117 => 48,  103 => 36,  74 => 34,  47 => 17,  32 => 11,  24 => 3,  23 => 3,  17 => 1,  69 => 26,  63 => 18,  58 => 22,  49 => 11,  43 => 16,  37 => 10,  20 => 2,  139 => 33,  131 => 48,  128 => 43,  125 => 42,  121 => 48,  115 => 39,  107 => 36,  99 => 34,  96 => 45,  91 => 16,  82 => 5,  77 => 28,  75 => 27,  57 => 15,  50 => 15,  46 => 10,  44 => 14,  39 => 7,  33 => 6,  30 => 4,  27 => 8,  135 => 50,  129 => 47,  122 => 21,  116 => 56,  113 => 19,  108 => 40,  104 => 50,  102 => 37,  94 => 38,  89 => 16,  87 => 30,  84 => 28,  81 => 29,  73 => 27,  70 => 27,  67 => 24,  62 => 21,  59 => 12,  55 => 23,  51 => 18,  48 => 21,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
