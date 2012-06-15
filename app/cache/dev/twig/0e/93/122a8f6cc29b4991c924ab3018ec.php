<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_0e93122a8f6cc29b4991c924ab3018ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table>
<thead>
    <tr>
        <th scope=\"col\">Key</th>
        <th scope=\"col\">Value</th>
    </tr>
</thead>
<tbody>
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($this->getContext($context, "bag"), "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "        <tr>
            <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($this->getAttribute($this->getContext($context, "bag"), "get", array(0 => $this->getContext($context, "key")), "method")), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  136 => 32,  130 => 23,  118 => 20,  100 => 26,  110 => 43,  85 => 30,  112 => 55,  61 => 28,  119 => 21,  114 => 43,  101 => 23,  98 => 37,  83 => 5,  76 => 39,  68 => 16,  65 => 25,  56 => 11,  21 => 3,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 32,  127 => 46,  123 => 22,  109 => 39,  93 => 33,  90 => 32,  54 => 10,  133 => 44,  124 => 30,  111 => 19,  80 => 26,  60 => 27,  52 => 22,  26 => 5,  97 => 25,  95 => 18,  88 => 15,  78 => 25,  71 => 37,  92 => 34,  86 => 38,  79 => 20,  25 => 5,  72 => 17,  64 => 35,  53 => 23,  42 => 14,  34 => 11,  29 => 4,  22 => 3,  19 => 2,  40 => 9,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 22,  120 => 39,  117 => 48,  103 => 36,  74 => 38,  47 => 15,  32 => 8,  24 => 3,  23 => 3,  17 => 1,  69 => 26,  63 => 28,  58 => 26,  49 => 11,  43 => 16,  37 => 10,  20 => 2,  139 => 33,  131 => 48,  128 => 43,  125 => 42,  121 => 48,  115 => 39,  107 => 36,  99 => 34,  96 => 45,  91 => 16,  82 => 43,  77 => 28,  75 => 18,  57 => 27,  50 => 15,  46 => 10,  44 => 14,  39 => 7,  33 => 5,  30 => 7,  27 => 9,  135 => 50,  129 => 31,  122 => 21,  116 => 56,  113 => 19,  108 => 40,  104 => 50,  102 => 37,  94 => 38,  89 => 16,  87 => 30,  84 => 28,  81 => 29,  73 => 27,  70 => 27,  67 => 24,  62 => 21,  59 => 12,  55 => 23,  51 => 23,  48 => 21,  41 => 9,  38 => 12,  35 => 6,  31 => 10,  28 => 3,);
    }
}
