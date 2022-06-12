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

/* admin/edit_model.html.twig */
class __TwigTemplate_3e5935cc7e198531667bde36cd08dcf3c495d1b12a63756931ce822346b59926 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit_model.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/edit_model.html.twig", 1);
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
                ";
        // line 8
        if ((0 === twig_compare((isset($context["perm"]) || array_key_exists("perm", $context) ? $context["perm"] : (function () { throw new RuntimeError('Variable "perm" does not exist.', 8, $this->source); })()), 0))) {
            // line 9
            echo "                    Создание модели
                ";
        } else {
            // line 11
            echo "                    Редактирование модели
                ";
        }
        // line 13
        echo "            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <div class=\"card card-register p-3 w-100\">
                    <form method=\"post\">
                        <div class=\"row my-3 border-bottom\">
                            <div class=\"col-lg-2\">Марка</div>
                            <div class=\"col-lg-3\">Наименование модели</div>
                            <div class=\"col-lg-3\">Расположение руля</div>
                        </div>
                        <div class=\"row my-2\">
                            <div class=\"col-12 col-md-3 col-lg-2\">
                                ";
        // line 26
        if ((0 === twig_compare((isset($context["perm"]) || array_key_exists("perm", $context) ? $context["perm"] : (function () { throw new RuntimeError('Variable "perm" does not exist.', 26, $this->source); })()), 1))) {
            // line 27
            echo "                                    <select class=\"form-control\" disabled>
                                        <option value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stamps"]) || array_key_exists("stamps", $context) ? $context["stamps"] : (function () { throw new RuntimeError('Variable "stamps" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stamps"]) || array_key_exists("stamps", $context) ? $context["stamps"] : (function () { throw new RuntimeError('Variable "stamps" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</option>
                                    </select>
                                    ";
        } else {
            // line 31
            echo "                                        <select name=\"stamp_id\" class=\"form-select\">
                                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stamps"]) || array_key_exists("stamps", $context) ? $context["stamps"] : (function () { throw new RuntimeError('Variable "stamps" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["stamp"]) {
                // line 33
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "name", [], "any", false, false, false, 33), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stamp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                                        </select>
                                ";
        }
        // line 37
        echo "                            </div>
                            <div class=\"col-12 col-md-3 col-lg-3 my-2 my-md-0\">
                                <input type=\"text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "\" name=\"model_name\" class=\"form-control\">
                            </div>
                            <div class=\"col-12 col-md-3 col-lg-3 my-2 my-md-0\">
                                <select class=\"form-select\" name=\"wheel\" aria-label=\"Default select example\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 42, $this->source); })()), "wheel", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                                    <option value=\"Правый руль\">Правый руль</option>
                                    <option value=\"Левый руль\">Левый руль</option>
                                </select>
                            </div>
                            <div class=\"col my-2 my-md-0\">
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
        return "admin/edit_model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  129 => 39,  125 => 37,  121 => 35,  110 => 33,  106 => 32,  103 => 31,  95 => 28,  92 => 27,  90 => 26,  75 => 13,  71 => 11,  67 => 9,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"row mt-5\">
            <div class=\"col-12 h1\">
                {% if perm == 0 %}
                    Создание модели
                {% else %}
                    Редактирование модели
                {% endif %}
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <div class=\"card card-register p-3 w-100\">
                    <form method=\"post\">
                        <div class=\"row my-3 border-bottom\">
                            <div class=\"col-lg-2\">Марка</div>
                            <div class=\"col-lg-3\">Наименование модели</div>
                            <div class=\"col-lg-3\">Расположение руля</div>
                        </div>
                        <div class=\"row my-2\">
                            <div class=\"col-12 col-md-3 col-lg-2\">
                                {% if perm == 1 %}
                                    <select class=\"form-control\" disabled>
                                        <option value=\"{{ stamps.id }}\">{{ stamps.name }}</option>
                                    </select>
                                    {% else %}
                                        <select name=\"stamp_id\" class=\"form-select\">
                                            {% for stamp in stamps %}
                                                <option value=\"{{ stamp.id }}\">{{ stamp.name }}</option>
                                            {% endfor %}
                                        </select>
                                {% endif %}
                            </div>
                            <div class=\"col-12 col-md-3 col-lg-3 my-2 my-md-0\">
                                <input type=\"text\" value=\"{{ model.name }}\" name=\"model_name\" class=\"form-control\">
                            </div>
                            <div class=\"col-12 col-md-3 col-lg-3 my-2 my-md-0\">
                                <select class=\"form-select\" name=\"wheel\" aria-label=\"Default select example\" value=\"{{ model.wheel }}\">
                                    <option value=\"Правый руль\">Правый руль</option>
                                    <option value=\"Левый руль\">Левый руль</option>
                                </select>
                            </div>
                            <div class=\"col my-2 my-md-0\">
                                <button class=\"btn btn-outline-success\">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "admin/edit_model.html.twig", "C:\\OpenServer\\domains\\uniqom\\templates\\admin\\edit_model.html.twig");
    }
}
