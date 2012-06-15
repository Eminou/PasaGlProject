<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_ec93b010038c7277516f53ddcb327f33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'field_rows' => array($this, 'block_field_rows'),
            'field_row' => array($this, 'block_field_row'),
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_field_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_field_label($context, array $blocks = array())
    {
        // line 25
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 27
        if ($this->getContext($context, "required")) {
            // line 28
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 30
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  180 => 68,  175 => 66,  170 => 63,  157 => 55,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  164 => 59,  151 => 53,  106 => 35,  154 => 54,  150 => 43,  45 => 9,  66 => 15,  36 => 8,  143 => 49,  140 => 52,  130 => 48,  118 => 36,  100 => 27,  110 => 43,  85 => 28,  112 => 55,  61 => 17,  119 => 47,  114 => 34,  101 => 23,  98 => 37,  83 => 26,  76 => 39,  68 => 19,  65 => 16,  56 => 14,  21 => 3,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 57,  145 => 49,  141 => 55,  134 => 24,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 28,  90 => 36,  54 => 12,  133 => 49,  124 => 30,  111 => 33,  80 => 25,  60 => 14,  52 => 13,  26 => 3,  97 => 30,  95 => 30,  88 => 32,  78 => 25,  71 => 20,  92 => 23,  86 => 27,  79 => 24,  25 => 5,  72 => 17,  64 => 21,  53 => 23,  42 => 10,  34 => 5,  29 => 5,  22 => 3,  19 => 2,  40 => 9,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 48,  103 => 28,  74 => 21,  47 => 11,  32 => 6,  24 => 3,  23 => 3,  17 => 1,  69 => 21,  63 => 28,  58 => 16,  49 => 12,  43 => 8,  37 => 10,  20 => 2,  139 => 47,  131 => 48,  128 => 43,  125 => 41,  121 => 48,  115 => 39,  107 => 36,  99 => 34,  96 => 45,  91 => 27,  82 => 25,  77 => 22,  75 => 18,  57 => 13,  50 => 13,  46 => 11,  44 => 10,  39 => 7,  33 => 7,  30 => 7,  27 => 4,  135 => 41,  129 => 43,  122 => 21,  116 => 56,  113 => 43,  108 => 40,  104 => 40,  102 => 37,  94 => 32,  89 => 22,  87 => 26,  84 => 29,  81 => 29,  73 => 23,  70 => 18,  67 => 24,  62 => 22,  59 => 21,  55 => 20,  51 => 18,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
