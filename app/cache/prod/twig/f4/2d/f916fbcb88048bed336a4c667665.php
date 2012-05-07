<?php

/* PasaRequirementBundle:Manager:show.html.twig */
class __TwigTemplate_f42df916fbcb88048bed336a4c667665 extends Twig_Template
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
        echo "<h1>Manager</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>First_name</th>
            <td>";
        // line 11
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "firstname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Last_name</th>
            <td>";
        // line 15
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "lastname"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Login</th>
            <td>";
        // line 19
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "login"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Password</th>
            <td>";
        // line 23
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "password"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 35
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 40
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manager_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 41
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
        return "PasaRequirementBundle:Manager:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 41,  85 => 40,  76 => 35,  68 => 30,  57 => 23,  49 => 19,  41 => 15,  33 => 11,  25 => 7,  17 => 1,);
    }
}
