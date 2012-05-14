<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_eb6ee2f61f35704fd660648dda42d49b extends Twig_Template
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
        echo "<div class=\"sf-exceptionreset\">

    <div class=\"block_exception\">
        <div class=\"block_exception_detected clear_fix\">
            <div class=\"illustration_exception\">
                <img alt=\"Exception detected!\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/exception_detected.gif"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"text_exception\">

                <div class=\"open_quote\">
                    <img alt=\"\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/open_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

                <h1>
                    ";
        // line 15
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo $this->env->getExtension('code')->formatFileFromText(strtr(twig_escape_filter($this->env, $this->getAttribute($_exception_, "message")), array("
" => "<br />")));
        echo "
                </h1>

                <div>
                    <strong>";
        // line 19
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo "</strong> ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo " - ";
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo $this->env->getExtension('code')->abbrClass($this->getAttribute($_exception_, "class"));
        echo "
                </div>

                ";
        // line 22
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $context["previous_count"] = twig_length_filter($this->env, $this->getAttribute($_exception_, "allPrevious"));
        // line 23
        echo "                ";
        if (isset($context["previous_count"])) { $_previous_count_ = $context["previous_count"]; } else { $_previous_count_ = null; }
        if ($_previous_count_) {
            // line 24
            echo "                    <div class=\"linked\"><span><strong>";
            if (isset($context["previous_count"])) { $_previous_count_ = $context["previous_count"]; } else { $_previous_count_ = null; }
            echo twig_escape_filter($this->env, $_previous_count_, "html", null, true);
            echo "</strong> linked Exception";
            if (isset($context["previous_count"])) { $_previous_count_ = $context["previous_count"]; } else { $_previous_count_ = null; }
            echo ((($_previous_count_ > 1)) ? ("s") : (""));
            echo ":</span>
                        <ul>
                            ";
            // line 26
            if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "allPrevious"));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 27
                echo "                                <li>
                                    ";
                // line 28
                if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($_previous_, "class"));
                echo " <a href=\"#traces_link_";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, ($_i_ + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces_";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, ($_i_ + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon_traces_";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, ($_i_ + 1), "html", null, true);
                echo "_open', 'icon_traces_";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, ($_i_ + 1), "html", null, true);
                echo "_close');\">&raquo;</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 31
            echo "                        </ul>
                    </div>
                ";
        }
        // line 34
        echo "
                <div class=\"close_quote\">
                    <img alt=\"\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/close_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

            </div>
        </div>
    </div>

    ";
        // line 43
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "toarray"));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 44
            echo "        ";
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            if (isset($context["previous_count"])) { $_previous_count_ = $context["previous_count"]; } else { $_previous_count_ = null; }
            $this->env->loadTemplate("TwigBundle:Exception:traces.html.twig")->display(array("exception" => $_e_, "position" => $_position_, "count" => $_previous_count_));
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "
    ";
        // line 47
        if (isset($context["logger"])) { $_logger_ = $context["logger"]; } else { $_logger_ = null; }
        if ($_logger_) {
            // line 48
            echo "        <div class=\"block\">
            <div class=\"logs clear_fix\">
                ";
            // line 50
            ob_start();
            // line 51
            echo "                <h2>
                    Logs&nbsp;
                    <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon_logs_open', 'icon_logs_close'); return false;\">
                        <img class=\"toggle\" id=\"icon_logs_open\" alt=\"+\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                        <img class=\"toggle\" id=\"icon_logs_close\" alt=\"-\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                    </a>
                </h2>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 59
            echo "
                ";
            // line 60
            if (isset($context["logger"])) { $_logger_ = $context["logger"]; } else { $_logger_ = null; }
            if ($this->getAttribute($_logger_, "counterrors")) {
                // line 61
                echo "                    <div class=\"error_count\">
                        <span>
                            ";
                // line 63
                if (isset($context["logger"])) { $_logger_ = $context["logger"]; } else { $_logger_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_logger_, "counterrors"), "html", null, true);
                echo " error";
                if (isset($context["logger"])) { $_logger_ = $context["logger"]; } else { $_logger_ = null; }
                echo ((($this->getAttribute($_logger_, "counterrors") > 1)) ? ("s") : (""));
                echo "
                        </span>
                    </div>
                ";
            }
            // line 67
            echo "
            </div>

            <div id=\"logs\">
                ";
            // line 71
            if (isset($context["logger"])) { $_logger_ = $context["logger"]; } else { $_logger_ = null; }
            $this->env->loadTemplate("TwigBundle:Exception:logs.html.twig")->display(array("logs" => $this->getAttribute($_logger_, "logs")));
            // line 72
            echo "            </div>

        </div>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if (isset($context["currentContent"])) { $_currentContent_ = $context["currentContent"]; } else { $_currentContent_ = null; }
        if ($_currentContent_) {
            // line 78
            echo "        <div class=\"block\">
            ";
            // line 79
            ob_start();
            // line 80
            echo "            <h2>
                Content of the Output&nbsp;
                <a href=\"#\" onclick=\"toggle('output_content'); switchIcons('icon_content_open', 'icon_content_close'); return false;\">
                    <img class=\"toggle\" id=\"icon_content_close\" alt=\"-\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                    <img class=\"toggle\" id=\"icon_content_open\" alt=\"+\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 88
            echo "
            <div id=\"output_content\" style=\"display: none\">
                ";
            // line 90
            if (isset($context["currentContent"])) { $_currentContent_ = $context["currentContent"]; } else { $_currentContent_ = null; }
            echo twig_escape_filter($this->env, $_currentContent_, "html", null, true);
            echo "
            </div>

            <div style=\"clear: both\"></div>
        </div>
    ";
        }
        // line 96
        echo "
</div>

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0 ; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, visibility1, visibility2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        visibility1 = icon1.style.visibility;
        visibility2 = icon2.style.visibility;

        icon1.style.visibility = visibility2;
        icon2.style.visibility = visibility1;
    }
//]]></script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 83,  219 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 54,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 44,  127 => 43,  117 => 36,  113 => 34,  86 => 28,  83 => 27,  78 => 26,  68 => 24,  64 => 23,  61 => 22,  48 => 19,  39 => 15,  32 => 11,  24 => 6,  23 => 5,  17 => 1,  144 => 46,  138 => 45,  130 => 46,  124 => 42,  121 => 41,  115 => 40,  111 => 38,  108 => 31,  99 => 32,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  77 => 21,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 13,  54 => 11,  51 => 10,  42 => 9,  38 => 8,  35 => 7,  31 => 9,  28 => 3,);
    }
}
