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

/* admin/user_page.html.twig */
class __TwigTemplate_68f8cc356beb00c850e2d2e94c985230711538a586d0ca909bc4388d2f5d6d0e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/user_page.html.twig", 1);
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
        <div class=\"col-2\">
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\" class=\"btn btn-outline-success w-75\">Пользователи</a>
        </div>
        <div class=\"col-2\">
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stamps");
        echo "\" class=\"btn btn-outline-success w-75\">Марки</a>
        </div>
        <div class=\"col-2\">
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_models");
        echo "\" class=\"btn btn-outline-success w-75\">Модели</a>
        </div>
    </div>

    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"card card-register p-4 w-50\">
                <div class=\"row\">
                    <div class=\"col-12 h4\">
                        User ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"row h5\">
                    <div class=\"col-6 text-muted\">
                        <div class=\"row gap-2\">
                            <div class=\"col-12\">
                                email
                            </div>
                            <div class=\"col-12\">
                                password
                            </div>
                            ";
        // line 36
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "roles", [], "any", false, false, false, 36))) {
            // line 37
            echo "                                <div class=\"col-12\">
                                    role
                                </div>
                            ";
        }
        // line 41
        echo "                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row gap-2\">
                            <div class=\"col-12\">
                                ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-12\">
                                ";
        // line 52
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "roles", [], "any", false, false, false, 52))) {
            // line 53
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "roles", [], "any", false, false, false, 53), "html", null, true);
            echo "
                                ";
        }
        // line 55
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/user_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 55,  134 => 53,  132 => 52,  126 => 49,  120 => 46,  113 => 41,  107 => 37,  105 => 36,  90 => 24,  78 => 15,  72 => 12,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container\">

    <div class=\"row mt-5 border-bottom pb-2\">
        <div class=\"col-2\">
            <a href=\"{{ path('admin_users') }}\" class=\"btn btn-outline-success w-75\">Пользователи</a>
        </div>
        <div class=\"col-2\">
            <a href=\"{{ path('admin_stamps') }}\" class=\"btn btn-outline-success w-75\">Марки</a>
        </div>
        <div class=\"col-2\">
            <a href=\"{{ path('admin_models') }}\" class=\"btn btn-outline-success w-75\">Модели</a>
        </div>
    </div>

    <div class=\"row mt-5\">
        <div class=\"col-12\">
            <div class=\"card card-register p-4 w-50\">
                <div class=\"row\">
                    <div class=\"col-12 h4\">
                        User {{ user.id }}
                    </div>
                </div>
                <div class=\"row h5\">
                    <div class=\"col-6 text-muted\">
                        <div class=\"row gap-2\">
                            <div class=\"col-12\">
                                email
                            </div>
                            <div class=\"col-12\">
                                password
                            </div>
                            {% if user.roles is empty %}
                                <div class=\"col-12\">
                                    role
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row gap-2\">
                            <div class=\"col-12\">
                                {{ user.email }}
                            </div>
                            <div class=\"col-12\">
                                {{ user.password }}
                            </div>
                            <div class=\"col-12\">
                                {% if user.roles is empty %}
                                    {{ user.roles }}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

{% endblock %}", "admin/user_page.html.twig", "C:\\OpenServer\\domains\\uniqom\\templates\\admin\\user_page.html.twig");
    }
}
