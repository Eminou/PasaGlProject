<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_cf3ce5d122afaebaa09ec6d5e0657cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array("SensioDistributionBundle::Configurator/form.html.twig", ));
        // line 7
        echo "    ";
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 8
        echo "
    <h1>Configure your Database</h1>
    <p>If your website needs a database connection, please configure it here.</p>

    ";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"symfony-form-column\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "driver"));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "host"));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
        </div>
        <div class=\"symfony-form-column\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "user"));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "password"));
        echo "
        </div>

        ";
        // line 24
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 260,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 207,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  725 => 188,  722 => 187,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  658 => 163,  656 => 162,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 149,  624 => 148,  621 => 147,  613 => 143,  611 => 142,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 126,  567 => 121,  559 => 120,  554 => 119,  548 => 117,  545 => 116,  543 => 115,  540 => 114,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 99,  511 => 98,  502 => 92,  498 => 91,  494 => 90,  490 => 89,  485 => 88,  479 => 86,  476 => 85,  474 => 84,  471 => 83,  455 => 79,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 61,  405 => 60,  400 => 59,  397 => 58,  394 => 57,  388 => 55,  386 => 54,  378 => 53,  374 => 51,  366 => 49,  361 => 48,  357 => 47,  352 => 46,  349 => 45,  347 => 44,  344 => 43,  335 => 39,  319 => 35,  300 => 32,  295 => 31,  292 => 30,  287 => 29,  285 => 28,  272 => 23,  270 => 22,  267 => 21,  259 => 17,  256 => 16,  253 => 15,  245 => 12,  237 => 7,  233 => 6,  226 => 4,  223 => 3,  219 => 288,  216 => 287,  206 => 271,  198 => 259,  191 => 242,  173 => 220,  167 => 217,  160 => 205,  155 => 196,  149 => 193,  147 => 187,  144 => 186,  332 => 137,  329 => 136,  323 => 37,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 33,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 27,  276 => 117,  238 => 99,  236 => 98,  231 => 95,  229 => 94,  222 => 90,  217 => 87,  213 => 85,  203 => 269,  201 => 260,  194 => 76,  183 => 236,  180 => 235,  175 => 225,  170 => 219,  157 => 204,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 14,  248 => 13,  235 => 107,  228 => 5,  221 => 99,  214 => 281,  207 => 83,  164 => 59,  151 => 53,  143 => 49,  140 => 52,  106 => 35,  154 => 54,  150 => 43,  45 => 9,  66 => 15,  36 => 6,  136 => 32,  130 => 48,  118 => 36,  100 => 27,  110 => 39,  85 => 28,  112 => 141,  61 => 16,  119 => 153,  114 => 146,  101 => 23,  98 => 37,  83 => 26,  76 => 24,  68 => 19,  65 => 17,  56 => 14,  21 => 3,  209 => 272,  205 => 82,  196 => 248,  192 => 78,  189 => 73,  178 => 226,  176 => 70,  165 => 212,  161 => 58,  152 => 195,  148 => 57,  145 => 49,  141 => 55,  134 => 174,  132 => 168,  127 => 161,  123 => 38,  109 => 140,  93 => 28,  90 => 31,  54 => 11,  133 => 49,  124 => 160,  111 => 33,  80 => 26,  60 => 16,  52 => 13,  26 => 3,  97 => 114,  95 => 30,  88 => 32,  78 => 25,  71 => 20,  92 => 98,  86 => 30,  79 => 76,  25 => 5,  72 => 22,  64 => 26,  53 => 23,  42 => 8,  34 => 5,  29 => 6,  22 => 3,  19 => 1,  40 => 9,  224 => 91,  215 => 90,  211 => 280,  204 => 84,  200 => 87,  195 => 80,  193 => 247,  190 => 78,  188 => 241,  185 => 239,  179 => 72,  177 => 67,  171 => 67,  162 => 211,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 182,  137 => 175,  126 => 39,  120 => 37,  117 => 147,  103 => 28,  74 => 70,  47 => 15,  32 => 5,  24 => 3,  23 => 3,  17 => 1,  69 => 42,  63 => 17,  58 => 16,  49 => 16,  43 => 11,  37 => 10,  20 => 2,  139 => 181,  131 => 48,  128 => 43,  125 => 41,  121 => 48,  115 => 39,  107 => 134,  99 => 33,  96 => 45,  91 => 27,  82 => 77,  77 => 71,  75 => 21,  57 => 15,  50 => 13,  46 => 11,  44 => 10,  39 => 7,  33 => 5,  30 => 7,  27 => 3,  135 => 41,  129 => 167,  122 => 154,  116 => 56,  113 => 40,  108 => 38,  104 => 133,  102 => 126,  94 => 113,  89 => 97,  87 => 83,  84 => 82,  81 => 24,  73 => 23,  70 => 21,  67 => 15,  62 => 21,  59 => 20,  55 => 20,  51 => 18,  48 => 12,  41 => 12,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
