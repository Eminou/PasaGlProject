<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_890e8282be63be0d2aa7dfc18dc54c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <img width=\"20\" height=\"28\" alt=\"Database\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <span title=\"";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_collector_, "time") * 1000)), "html", null, true);
        echo " ms\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "querycount"), "html", null, true);
        echo "</span>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/db.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 18
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "querycount"), "html", null, true);
        echo "</span>
        <span>";
        // line 19
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute($_collector_, "time") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Queries</h2>

    ";
        // line 27
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((!$this->getAttribute($_collector_, "querycount"))) {
            // line 28
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <ul class=\"alt\">
            ";
            // line 33
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "queries"));
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 34
                echo "                <li class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo ((($_i_ % 2 == 1)) ? ("odd") : ("even"));
                echo "\">
                    <div>
                        <code>";
                // line 36
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_query_, "sql"), "html", null, true);
                echo "</code>
                    </div>
                    <small>
                        <strong>Parameters</strong>: ";
                // line 39
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($_query_, "params")), "html", null, true);
                echo "<br />
                        <strong>Time</strong>: ";
                // line 40
                if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_query_, "executionMS") * 1000)), "html", null, true);
                echo " ms
                    </small>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 44
            echo "        </ul>
    ";
        }
        // line 46
        echo "
    <h2>Database Connections</h2>

    ";
        // line 49
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "connections")) {
            // line 50
            echo "        <table>
            <tr>
                <th>Name</th>
                <th>Service</th>
            </tr>
            ";
            // line 55
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "connections"));
            foreach ($context['_seq'] as $context["name"] => $context["service"]) {
                // line 56
                echo "                <tr>
                    <th>";
                // line 57
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</th>
                    <td>";
                // line 58
                if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
                echo twig_escape_filter($this->env, $_service_, "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "        </table>
    ";
        } else {
            // line 63
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 67
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 70
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "managers")) {
            // line 71
            echo "        <table>
            <tr>
                <th>Name</th>
                <th>Service</th>
            </tr>
            ";
            // line 76
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "managers"));
            foreach ($context['_seq'] as $context["name"] => $context["service"]) {
                // line 77
                echo "                <tr>
                    <th>";
                // line 78
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</th>
                    <td>";
                // line 79
                if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
                echo twig_escape_filter($this->env, $_service_, "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 82
            echo "        </table>
    ";
        } else {
            // line 84
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 27,  66 => 18,  60 => 15,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 33,  95 => 29,  82 => 25,  73 => 20,  67 => 17,  52 => 11,  22 => 4,  55 => 9,  45 => 6,  36 => 5,  109 => 20,  104 => 34,  96 => 32,  84 => 14,  80 => 24,  26 => 4,  92 => 28,  79 => 40,  57 => 14,  46 => 7,  29 => 6,  19 => 1,  27 => 3,  112 => 21,  102 => 19,  89 => 16,  63 => 14,  56 => 12,  50 => 6,  47 => 5,  44 => 6,  37 => 8,  34 => 6,  30 => 3,  43 => 7,  33 => 7,  25 => 2,  20 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  117 => 36,  113 => 34,  86 => 6,  83 => 25,  78 => 15,  68 => 9,  64 => 16,  61 => 15,  48 => 10,  39 => 8,  32 => 5,  24 => 4,  23 => 3,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 13,  51 => 10,  42 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
