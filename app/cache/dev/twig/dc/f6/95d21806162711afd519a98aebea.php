<?php

/* PasaRequirementBundle:Progression:index.html.twig */
class __TwigTemplate_dcf695d21806162711afd519a98aebea extends Twig_Template
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
        echo "<h1>Progression list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Percentage</th>
            <th>Progression_date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "        <tr>
            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("progression_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "percentage"), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            if ($this->getAttribute($this->getContext($context, "entity"), "progressiondate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "progressiondate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("progression_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("progression_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("progression_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle:Progression:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 34,  140 => 33,  130 => 23,  118 => 20,  100 => 27,  110 => 18,  85 => 33,  112 => 55,  61 => 25,  119 => 21,  114 => 43,  101 => 25,  98 => 36,  83 => 5,  76 => 33,  68 => 31,  65 => 15,  56 => 19,  21 => 1,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 24,  132 => 32,  127 => 46,  123 => 22,  109 => 39,  93 => 33,  90 => 32,  54 => 10,  133 => 44,  124 => 41,  111 => 19,  80 => 26,  60 => 20,  52 => 22,  26 => 3,  97 => 26,  95 => 18,  88 => 15,  78 => 25,  71 => 14,  92 => 38,  86 => 38,  79 => 34,  25 => 4,  72 => 33,  64 => 15,  53 => 13,  42 => 7,  34 => 5,  29 => 4,  22 => 4,  19 => 1,  40 => 6,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 22,  120 => 39,  117 => 47,  103 => 36,  74 => 35,  47 => 17,  32 => 11,  24 => 3,  23 => 3,  17 => 1,  69 => 24,  63 => 18,  58 => 20,  49 => 11,  43 => 16,  37 => 10,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 48,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 16,  82 => 5,  77 => 35,  75 => 27,  57 => 15,  50 => 18,  46 => 10,  44 => 14,  39 => 7,  33 => 6,  30 => 4,  27 => 5,  135 => 50,  129 => 31,  122 => 21,  116 => 56,  113 => 19,  108 => 40,  104 => 50,  102 => 37,  94 => 38,  89 => 16,  87 => 33,  84 => 28,  81 => 36,  73 => 27,  70 => 29,  67 => 24,  62 => 21,  59 => 12,  55 => 23,  51 => 18,  48 => 21,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
