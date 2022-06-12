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

/* admin/stamps.html.twig */
class __TwigTemplate_66f0ac86762e1323ae81b83386af07cd118aaf5c3f3b8c621014ba8f5e1b58da extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stamps.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/stamps.html.twig", 1);
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

        <div class=\"row mt-5 border-bottom pb-2\">
            <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2\">
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_page");
        echo "\" class=\"btn btn-outline-success w-75\">Модели</a>
            </div>
            ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-sm-0\">
                    <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_page");
            echo "\" class=\"btn btn-outline-success w-75\">Пользователи</a>
                </div>
            ";
        }
        // line 17
        echo "            <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-md-0\">
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stamps_page");
        echo "\" class=\"btn btn-outline-success w-75 active\">Марки</a>
            </div>
        </div>

        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "            <div class=\"row mt-5\">
                <div class=\"col-12\">
                    <a class=\"btn btn-success\" href=\"/admin/stamp/0\">Создать марку автомобиля</a>
                </div>
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <div class=\"card card-register p-4 w-100\">
                    <div class=\"row border-bottom h5 text-muted\">
                        <div class=\"col\">Наименование</div>
                    </div>
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stamps"]) || array_key_exists("stamps", $context) ? $context["stamps"] : (function () { throw new RuntimeError('Variable "stamps" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stamp"]) {
            // line 37
            echo "                        <div class=\"row border-bottom h6 my-3\">
                            <div class=\"col-12 col-sm mb-3 mb-sm-0\">
                                ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "
                            </div>
                            ";
            // line 41
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 42
                echo "                                <div class=\"col\">
                                    <a class=\"btn btn-outline-success\" href=\"/admin/stamp/";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\">Редактировть</a>
                                </div>
                            ";
            }
            // line 46
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 47
                echo "                                <div class=\"col\">
                                    <a class=\"btn btn-outline-danger\" href=\"/admin/delete_stamp/";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "id", [], "any", false, false, false, 48), "html", null, true);
                echo "\">Удалить</a>
                                </div>
                            ";
            }
            // line 51
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stamp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/stamps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  148 => 51,  142 => 48,  139 => 47,  136 => 46,  130 => 43,  127 => 42,  125 => 41,  120 => 39,  116 => 37,  112 => 36,  103 => 29,  95 => 23,  93 => 22,  86 => 18,  83 => 17,  77 => 14,  74 => 13,  72 => 12,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


    <div class=\"container\">

        <div class=\"row mt-5 border-bottom pb-2\">
            <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2\">
                <a href=\"{{ path('models_page') }}\" class=\"btn btn-outline-success w-75\">Модели</a>
            </div>
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-sm-0\">
                    <a href=\"{{ path('users_page') }}\" class=\"btn btn-outline-success w-75\">Пользователи</a>
                </div>
            {% endif %}
            <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-md-0\">
                <a href=\"{{ path('stamps_page') }}\" class=\"btn btn-outline-success w-75 active\">Марки</a>
            </div>
        </div>

        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"row mt-5\">
                <div class=\"col-12\">
                    <a class=\"btn btn-success\" href=\"/admin/stamp/0\">Создать марку автомобиля</a>
                </div>
            </div>
        {% endif %}

        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <div class=\"card card-register p-4 w-100\">
                    <div class=\"row border-bottom h5 text-muted\">
                        <div class=\"col\">Наименование</div>
                    </div>
                    {% for stamp in stamps %}
                        <div class=\"row border-bottom h6 my-3\">
                            <div class=\"col-12 col-sm mb-3 mb-sm-0\">
                                {{ stamp.name }}
                            </div>
                            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
                                <div class=\"col\">
                                    <a class=\"btn btn-outline-success\" href=\"/admin/stamp/{{ stamp.id }}\">Редактировть</a>
                                </div>
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') %}
                                <div class=\"col\">
                                    <a class=\"btn btn-outline-danger\" href=\"/admin/delete_stamp/{{ stamp.id }}\">Удалить</a>
                                </div>
                            {% endif %}
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>


{% endblock %}", "admin/stamps.html.twig", "C:\\OpenServer\\domains\\uniqom\\templates\\admin\\stamps.html.twig");
    }
}
