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

/* index.html.twig */
class __TwigTemplate_ddced905a53d3948fb75d1271c4746d841ae83dff362861d6333b6e8306cb1a1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_page");
        echo "\" class=\"btn btn-outline-success w-75\">Модели</a>
            </div>
            ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "                <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-sm-0\">
                    <a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_page");
            echo "\" class=\"btn btn-outline-success w-75\">Пользователи</a>
                </div>
            ";
        }
        // line 15
        echo "            <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-md-0\">
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stamps_page");
        echo "\" class=\"btn btn-outline-success w-75\">Марки</a>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  81 => 15,  75 => 12,  72 => 11,  70 => 10,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
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
                <a href=\"{{ path('stamps_page') }}\" class=\"btn btn-outline-success w-75\">Марки</a>
            </div>
        </div>
    </div>

{% endblock %}", "index.html.twig", "C:\\OpenServer\\domains\\uniqom\\templates\\index.html.twig");
    }
}
