<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/stamp_page.html.twig */
class __TwigTemplate_5365e2336819cc7ce72b7aabcc347521c5fcb2c153fa35fd53d5a409e01928ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stamp_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/stamp_page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row mt-5\">
            <div class=\"col-12 h2\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card card-register p-4 w-100\">
                    <form method=\"post\">
                        <div class=\"row\">
                            ";
        // line 15
        if ((0 !== twig_compare((isset($context["perm"]) || array_key_exists("perm", $context) ? $context["perm"] : (function () { throw new RuntimeError('Variable "perm" does not exist.', 15, $this->source); })()), 0))) {
            // line 16
            echo "                            <div class=\"col\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stamp"]) || array_key_exists("stamp", $context) ? $context["stamp"] : (function () { throw new RuntimeError('Variable "stamp" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
            echo "</div>
                            ";
        }
        // line 18
        echo "                            <div class=\"col\">
                                <input type=\"text\" name=\"stamp_name\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stamp"]) || array_key_exists("stamp", $context) ? $context["stamp"] : (function () { throw new RuntimeError('Variable "stamp" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col\">
                                <button class=\"btn btn-outline-success\">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/stamp_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  80 => 18,  74 => 16,  72 => 15,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"row mt-5\">
            <div class=\"col-12 h2\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card card-register p-4 w-100\">
                    <form method=\"post\">
                        <div class=\"row\">
                            {% if perm != 0 %}
                            <div class=\"col\">{{ stamp.id }}</div>
                            {% endif %}
                            <div class=\"col\">
                                <input type=\"text\" name=\"stamp_name\" class=\"form-control\" value=\"{{ stamp.name }}\">
                            </div>
                            <div class=\"col\">
                                <button class=\"btn btn-outline-success\">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "admin/stamp_page.html.twig", "C:\\OpenServer\\domains\\uniqom\\templates\\admin\\stamp_page.html.twig");
    }
}
