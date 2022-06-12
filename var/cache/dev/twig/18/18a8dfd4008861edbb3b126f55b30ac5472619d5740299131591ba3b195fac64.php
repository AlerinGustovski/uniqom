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

/* admin/users.html.twig */
class __TwigTemplate_ff0494fcc1f14f7bffdea421e9f1f49c55500298fdac24fe0f03b0863d00a362 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users.html.twig", 1);
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
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("models_page");
        echo "\" class=\"btn btn-outline-success w-75\">Модели</a>
            </div>
            ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-sm-0\">
                    <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_page");
            echo "\" class=\"btn btn-outline-success w-75 active\">Пользователи</a>
                </div>
            ";
        }
        // line 16
        echo "            <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-md-0\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stamps_page");
        echo "\" class=\"btn btn-outline-success w-75\">Марки</a>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-12\">
                ";
        // line 23
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
            // line 24
            echo "
                ";
        }
        // line 26
        echo "            </div>
        </div>

        <div class=\"row mt-5 d-bloc d-md-none\">
            <div class=\"col-12\">
                <div class=\"card card-register p-3 w-100\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "                        <div class=\"row my-3 border-bottom\">
                            <div class=\"col-4\">id</div>
                            <div class=\"col-8\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</div>
                            <div class=\"col-4\">email</div>
                            <div class=\"col-8\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 37), "html", null, true);
            echo "</div>
                            <div class=\"col-4\">role</div>
                            <div class=\"col-8\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 39), 0, [], "array", false, false, false, 39), "html", null, true);
            echo "</div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>
            </div>
        </div>

        <div class=\"row mt-5 d-none d-md-block\">
            <div class=\"col-12\">
                <div class=\"card card-register p-3 w-100\">
                    <div class=\"row my-2 border-bottom\">
                        <div class=\"col-3\">id</div>
                        <div class=\"col-3\">email</div>

                        <div class=\"col-3\">role</div>
                    </div>
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 56
            echo "                        <div class=\"row my-2 border-bottom\">
                            <div class=\"col-3\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</div>
                            <div class=\"col-3\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 58), "html", null, true);
            echo "</div>

                            <div class=\"col-3\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 60), 0, [], "array", false, false, false, 60), "html", null, true);
            echo "</div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 63,  166 => 60,  161 => 58,  157 => 57,  154 => 56,  150 => 55,  135 => 42,  126 => 39,  121 => 37,  116 => 35,  112 => 33,  108 => 32,  100 => 26,  96 => 24,  94 => 23,  85 => 17,  82 => 16,  76 => 13,  73 => 12,  71 => 11,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
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
                    <a href=\"{{ path('users_page') }}\" class=\"btn btn-outline-success w-75 active\">Пользователи</a>
                </div>
            {% endif %}
            <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-md-0\">
                <a href=\"{{ path('stamps_page') }}\" class=\"btn btn-outline-success w-75\">Марки</a>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-12\">
                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}

                {% endif %}
            </div>
        </div>

        <div class=\"row mt-5 d-bloc d-md-none\">
            <div class=\"col-12\">
                <div class=\"card card-register p-3 w-100\">
                    {% for user in users %}
                        <div class=\"row my-3 border-bottom\">
                            <div class=\"col-4\">id</div>
                            <div class=\"col-8\">{{ user.id }}</div>
                            <div class=\"col-4\">email</div>
                            <div class=\"col-8\">{{ user.email }}</div>
                            <div class=\"col-4\">role</div>
                            <div class=\"col-8\">{{ user.roles[0] }}</div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>

        <div class=\"row mt-5 d-none d-md-block\">
            <div class=\"col-12\">
                <div class=\"card card-register p-3 w-100\">
                    <div class=\"row my-2 border-bottom\">
                        <div class=\"col-3\">id</div>
                        <div class=\"col-3\">email</div>

                        <div class=\"col-3\">role</div>
                    </div>
                    {% for user in users %}
                        <div class=\"row my-2 border-bottom\">
                            <div class=\"col-3\">{{ user.id }}</div>
                            <div class=\"col-3\">{{ user.email }}</div>

                            <div class=\"col-3\">{{ user.roles[0] }}</div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "admin/users.html.twig", "C:\\OpenServer\\domains\\uniqom\\templates\\admin\\users.html.twig");
    }
}
