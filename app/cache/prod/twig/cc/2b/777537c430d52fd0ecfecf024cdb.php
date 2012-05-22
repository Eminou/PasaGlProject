<?php

/* PasaRequirementBundle:Collaborator:edit.html.twig */
class __TwigTemplate_cc2b777537c430d52fd0ecfecf024cdb extends Twig_Template
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
        echo "<h1>Collaborator edit</h1>

<form action=\"";
        // line 6
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("collaborator_update", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_edit_form_);
        echo ">
    ";
        // line 7
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($_edit_form_);
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("collaborator"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 20
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("collaborator_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 21
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($_delete_form_);
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle:Collaborator:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 48,  135 => 48,  128 => 43,  97 => 30,  126 => 56,  41 => 7,  106 => 27,  103 => 26,  93 => 38,  75 => 24,  69 => 25,  59 => 19,  40 => 7,  21 => 1,  81 => 35,  72 => 30,  53 => 15,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 17,  87 => 27,  66 => 21,  60 => 15,  146 => 50,  136 => 41,  122 => 43,  107 => 34,  101 => 33,  95 => 33,  82 => 27,  73 => 20,  67 => 17,  52 => 15,  22 => 4,  55 => 24,  45 => 14,  36 => 5,  109 => 37,  104 => 45,  96 => 32,  84 => 28,  80 => 24,  26 => 3,  92 => 33,  79 => 27,  57 => 14,  46 => 7,  29 => 4,  19 => 1,  27 => 5,  112 => 50,  102 => 34,  89 => 29,  63 => 14,  56 => 23,  50 => 14,  47 => 5,  44 => 14,  37 => 10,  34 => 6,  30 => 3,  43 => 16,  33 => 6,  25 => 7,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  117 => 36,  113 => 34,  86 => 36,  83 => 20,  78 => 16,  68 => 9,  64 => 24,  61 => 20,  48 => 21,  39 => 8,  32 => 5,  24 => 4,  23 => 3,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 55,  115 => 37,  111 => 36,  108 => 34,  99 => 38,  94 => 30,  91 => 17,  88 => 16,  85 => 34,  77 => 30,  74 => 26,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 13,  51 => 18,  42 => 9,  38 => 11,  35 => 10,  31 => 6,  28 => 8,);
    }
}
