<?php

/* PasaRequirementBundle:Exigency:index.html.twig */
class __TwigTemplate_8693a1c456a01fff7b96ec8ba3b7c1db extends Twig_Template
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
        echo "<h1>Exigency list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Functionality</th>
            <th>Number</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Charge</th>
            <th>Start_date</th>
            <th>End_date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 18
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "        <tr>
            <td><a href=\"";
            // line 20
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("exigency_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 21
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "functionality"), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "number"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "description"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "priority"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "charge"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "startdate")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "startdate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 27
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            if ($this->getAttribute($_entity_, "enddate")) {
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "enddate"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 31
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("exigency_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 34
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("exigency_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
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
        // line 40
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("exigency_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle:Exigency:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  103 => 34,  72 => 25,  114 => 53,  100 => 47,  81 => 35,  70 => 24,  49 => 19,  40 => 12,  21 => 3,  69 => 32,  41 => 19,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 45,  118 => 39,  90 => 35,  87 => 35,  66 => 18,  60 => 27,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 33,  95 => 29,  82 => 25,  73 => 31,  67 => 24,  52 => 21,  22 => 4,  55 => 9,  45 => 6,  36 => 18,  109 => 52,  104 => 34,  96 => 31,  84 => 14,  80 => 30,  26 => 4,  92 => 42,  79 => 40,  57 => 22,  46 => 7,  29 => 4,  19 => 1,  27 => 3,  112 => 21,  102 => 19,  89 => 16,  63 => 21,  56 => 12,  50 => 6,  47 => 16,  44 => 20,  37 => 8,  34 => 6,  30 => 3,  43 => 7,  33 => 11,  25 => 7,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  117 => 36,  113 => 34,  86 => 6,  83 => 30,  78 => 15,  68 => 9,  64 => 16,  61 => 15,  48 => 10,  39 => 15,  32 => 5,  24 => 4,  23 => 3,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 29,  91 => 17,  88 => 16,  85 => 27,  77 => 26,  74 => 33,  71 => 19,  65 => 27,  62 => 23,  58 => 8,  54 => 18,  51 => 10,  42 => 9,  38 => 8,  35 => 7,  31 => 13,  28 => 4,);
    }
}
