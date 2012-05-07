<?php

/* PasaRequirementBundle:Manager:index.html.twig */
class __TwigTemplate_26d2670bb18907c81a036fc4b1dd8d41 extends Twig_Template
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
        echo "<h1>Manager list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Login</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 15
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "        <tr>
            <td><a href=\"";
            // line 17
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 18
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "firstname"), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "lastname"), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "login"), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "password"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 25
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager_show", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 28
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
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
        // line 34
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PasaRequirementBundle:Manager:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  92 => 34,  79 => 28,  72 => 25,  64 => 21,  59 => 20,  54 => 19,  49 => 18,  41 => 17,  38 => 16,  33 => 15,  17 => 1,);
    }
}
