<?php

/* WebProfilerBundle:Profiler:admin.html.twig */
class __TwigTemplate_91d56c5a170e8088008fef261f7c018b extends Twig_Template
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
        echo "<div class=\"search import clearfix\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/import.png"), "html", null, true);
        echo "\" />
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_import"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div style=\"margin-bottom: 10px\">
            &raquo;&nbsp;<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "\">Purge</a>
        </div>
        <div style=\"margin-bottom: 10px\">
            &raquo;&nbsp;<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "\">Export</a>
        </div>
        &raquo;&nbsp;<label for=\"file\">Import</label><br />
        <input type=\"file\" name=\"file\" id=\"file\" /><br />
        <button type=\"submit\">
            <span class=\"border_l\">
                <span class=\"border_r\">
                    <span class=\"btn_bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear_fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 55,  36 => 6,  136 => 32,  130 => 23,  118 => 20,  110 => 43,  100 => 26,  85 => 30,  61 => 28,  114 => 43,  101 => 23,  98 => 37,  83 => 5,  76 => 39,  68 => 22,  65 => 25,  56 => 19,  21 => 3,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 19,  133 => 44,  124 => 30,  111 => 19,  80 => 26,  60 => 20,  52 => 22,  26 => 3,  97 => 25,  95 => 18,  88 => 32,  78 => 25,  71 => 37,  92 => 34,  86 => 38,  79 => 20,  25 => 5,  72 => 17,  64 => 21,  53 => 23,  42 => 14,  34 => 11,  29 => 4,  22 => 3,  19 => 2,  40 => 9,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 22,  120 => 39,  117 => 48,  103 => 36,  74 => 38,  47 => 17,  32 => 8,  24 => 3,  23 => 3,  17 => 1,  69 => 26,  63 => 28,  58 => 26,  49 => 11,  43 => 16,  37 => 10,  20 => 2,  139 => 33,  131 => 48,  128 => 43,  125 => 42,  121 => 48,  115 => 39,  107 => 36,  99 => 34,  96 => 45,  91 => 16,  82 => 28,  77 => 25,  75 => 18,  57 => 27,  50 => 15,  46 => 10,  44 => 14,  39 => 12,  33 => 9,  30 => 7,  27 => 9,  135 => 50,  129 => 47,  122 => 21,  116 => 56,  113 => 19,  108 => 40,  104 => 50,  102 => 37,  94 => 38,  89 => 16,  87 => 30,  84 => 28,  81 => 29,  73 => 27,  70 => 27,  67 => 24,  62 => 21,  59 => 12,  55 => 23,  51 => 18,  48 => 21,  41 => 9,  38 => 12,  35 => 7,  31 => 10,  28 => 7,);
    }
}
