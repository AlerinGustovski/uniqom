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

/* admin/create_model.html.twig */
class __TwigTemplate_fbc58249f01b5be6ead090c8ccb5816a4df96c9c183aac5cc22547aa1b6a2319 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/create_model.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/create_model.html.twig", 1);
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
        <div class=\"col-12 h1\">
            Создание новой модели
        </div>
    </div>

    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"card card-register p-3 w-100\">
                <form method=\"post\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <select name=\"stamp_id\" class=\"form-select\">
                                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stamps"]) || array_key_exists("stamps", $context) ? $context["stamps"] : (function () { throw new RuntimeError('Variable "stamps" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stamp"]) {
            // line 21
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stamp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                            </select>
                        </div>
                        <div class=\"col\">
                            <input type=\"text\" name=\"model\" class=\"form-control\" placeholder=\"Введите навание модели\">
                        </div>
                        <div class=\"col\">
                            <select class=\"form-select\" name=\"wheel\">
                                <option value=\"Правый руль\">Правый руль</option>
                                <option value=\"Левый руль\">Левый руль</option>
                            </select>
                        </div>
                        <div class=\"col text-center\">
                            <button class=\"btn btn-outline-success w-75\">Создать</button>
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
        return "admin/create_model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  81 => 21,  77 => 20,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container\">

    <div class=\"row mt-5\">
        <div class=\"col-12 h1\">
            Создание новой модели
        </div>
    </div>

    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"card card-register p-3 w-100\">
                <form method=\"post\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <select name=\"stamp_id\" class=\"form-select\">
                                {% for stamp in stamps %}
                                    <option value=\"{{ stamp.id }}\">{{ stamp.name }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"col\">
                            <input type=\"text\" name=\"model\" class=\"form-control\" placeholder=\"Введите навание модели\">
                        </div>
                        <div class=\"col\">
                            <select class=\"form-select\" name=\"wheel\">
                                <option value=\"Правый руль\">Правый руль</option>
                                <option value=\"Левый руль\">Левый руль</option>
                            </select>
                        </div>
                        <div class=\"col text-center\">
                            <button class=\"btn btn-outline-success w-75\">Создать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

{% endblock %}", "admin/create_model.html.twig", "C:\\OpenServer\\domains\\uniqom\\templates\\admin\\create_model.html.twig");
    }
}
