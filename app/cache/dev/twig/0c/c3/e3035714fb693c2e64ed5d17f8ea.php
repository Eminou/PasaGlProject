<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_0cc3e3035714fb693c2e64ed5d17f8ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ($this->getContext($context, "tokens")) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tokens"));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 18
                echo "                    <tr>
                        <td><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "elements"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 28
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  56 => 17,  136 => 40,  114 => 30,  85 => 43,  76 => 39,  105 => 45,  98 => 40,  36 => 6,  100 => 52,  21 => 3,  61 => 28,  65 => 22,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 45,  93 => 33,  90 => 45,  54 => 19,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 20,  52 => 15,  26 => 3,  97 => 34,  95 => 47,  88 => 32,  78 => 25,  71 => 37,  92 => 47,  86 => 34,  79 => 20,  25 => 5,  72 => 17,  64 => 21,  53 => 23,  42 => 7,  34 => 11,  29 => 4,  22 => 3,  19 => 2,  40 => 9,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 38,  47 => 17,  32 => 8,  24 => 9,  23 => 29,  17 => 1,  69 => 26,  63 => 28,  58 => 26,  49 => 21,  43 => 8,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 28,  77 => 25,  75 => 18,  57 => 27,  50 => 10,  46 => 9,  44 => 8,  39 => 10,  33 => 6,  30 => 7,  27 => 9,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 53,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 42,  81 => 41,  73 => 28,  70 => 27,  67 => 31,  62 => 24,  59 => 22,  55 => 12,  51 => 18,  48 => 17,  41 => 7,  38 => 12,  35 => 7,  31 => 10,  28 => 3,);
    }
}
