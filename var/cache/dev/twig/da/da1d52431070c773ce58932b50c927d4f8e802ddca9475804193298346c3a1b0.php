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

/* admin/models.html.twig */
class __TwigTemplate_db50889952dfcd97301aeeece034a056fa834aabee196c7e7c5592729e4e7af1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/models.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/models.html.twig", 1);
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
        echo "\" class=\"btn btn-outline-success w-75 active\">Модели</a>
            </div>
            ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 mt-sm-0\">
                    <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_page");
            echo "\" class=\"btn btn-outline-success w-75\">Пользователи</a>
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
                <form method=\"get\">
                    <div class=\"row\">
                        <div class=\"col-8 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3\">
                            <select class=\"form-select\" name=\"searchstamps\">
                                ";
        // line 27
        if ((0 !== twig_compare((isset($context["stamp"]) || array_key_exists("stamp", $context) ? $context["stamp"] : (function () { throw new RuntimeError('Variable "stamp" does not exist.', 27, $this->source); })()), ""))) {
            // line 28
            echo "                                    <option></option>
                                    <option value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stamp"]) || array_key_exists("stamp", $context) ? $context["stamp"] : (function () { throw new RuntimeError('Variable "stamp" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stamp"]) || array_key_exists("stamp", $context) ? $context["stamp"] : (function () { throw new RuntimeError('Variable "stamp" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</option>
                                    ";
        } else {
            // line 31
            echo "                                        <option disabled selected>Поиск моделей по марке</option>
                                ";
        }
        // line 33
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stamps"]) || array_key_exists("stamps", $context) ? $context["stamps"] : (function () { throw new RuntimeError('Variable "stamps" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stamp"]) {
            // line 34
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stamp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            </select>
                        </div>
                        <div class=\"col\">
                            <button class=\"btn btn-outline-success\">Поиск</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <form method=\"get\">
                    <div class=\"row\">
                        <div class=\"col-8 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Введите имя модели\" name=\"searchfor\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["searchfor"]) || array_key_exists("searchfor", $context) ? $context["searchfor"] : (function () { throw new RuntimeError('Variable "searchfor" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col\">
                            <button class=\"btn btn-outline-success\">Поиск</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        ";
        // line 61
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 62
            echo "            <div class=\"row mt-3\">
                <div class=\"col-12\">
                    <a href=\"/admin/model/0\" class=\"btn btn-outline-success\">Создать модель</a>
                </div>
            </div>
        ";
        }
        // line 68
        echo "
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <div class=\"card card-register p-4 w-100\">
                    <div class=\"row border-bottom h6 text-muted\">
                        <div class=\"col-6 col-sm-6 col-md-3 col-lg\">Имя модели</div>
                        <div class=\"col-6 col-sm-6 col-md-4 col-lg\">Расположение руля</div>
                        <div class=\"col-md col-lg\"></div>
                    </div>
                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 78
            echo "                        <div class=\"row border-bottom h6 my-3\">
                            <div class=\"col-6 col-sm-6 col-md-3 col-lg\">
                                ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "
                            </div>
                            <div class=\"col-6 col-sm-6 col-md-4 col-lg\">
                                ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "wheel", [], "any", false, false, false, 83), "html", null, true);
            echo "
                            </div>
                            <div class=\"col-6 col-sm col-md col-lg mt-3 mt-md-0\">
                                <div class=\"row\">
                                    ";
            // line 87
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 88
                echo "                                        <div class=\"col-12 col-sm-6\">
                                            <a href=\"/admin/model/";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "id", [], "any", false, false, false, 89), "html", null, true);
                echo "\" class=\"btn btn-outline-success\">Редактировать</a>
                                        </div>
                                    ";
            }
            // line 92
            echo "                                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 93
                echo "                                        <div class=\"col-12 col-sm-6 my-2 mt-sm-0\">
                                            <a href=\"/admin/delete_model/";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "id", [], "any", false, false, false, 94), "html", null, true);
                echo "\" class=\"btn btn-outline-danger\">Удалить</a>
                                        </div>
                                    ";
            }
            // line 97
            echo "                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/models.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 101,  225 => 97,  219 => 94,  216 => 93,  213 => 92,  207 => 89,  204 => 88,  202 => 87,  195 => 83,  189 => 80,  185 => 78,  181 => 77,  170 => 68,  162 => 62,  160 => 61,  147 => 51,  130 => 36,  119 => 34,  114 => 33,  110 => 31,  103 => 29,  100 => 28,  98 => 27,  85 => 17,  82 => 16,  76 => 13,  73 => 12,  71 => 11,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">

        <div class=\"row mt-5 border-bottom pb-2\">
            <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2\">
                <a href=\"{{ path('models_page') }}\" class=\"btn btn-outline-success w-75 active\">Модели</a>
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

        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <form method=\"get\">
                    <div class=\"row\">
                        <div class=\"col-8 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3\">
                            <select class=\"form-select\" name=\"searchstamps\">
                                {% if stamp != '' %}
                                    <option></option>
                                    <option value=\"{{ stamp.id }}\" selected>{{ stamp.name }}</option>
                                    {% else %}
                                        <option disabled selected>Поиск моделей по марке</option>
                                {% endif %}
                                {% for stamp in stamps %}
                                    <option value=\"{{ stamp.id }}\">{{ stamp.name }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"col\">
                            <button class=\"btn btn-outline-success\">Поиск</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <form method=\"get\">
                    <div class=\"row\">
                        <div class=\"col-8 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Введите имя модели\" name=\"searchfor\" value=\"{{ searchfor }}\">
                        </div>
                        <div class=\"col\">
                            <button class=\"btn btn-outline-success\">Поиск</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"row mt-3\">
                <div class=\"col-12\">
                    <a href=\"/admin/model/0\" class=\"btn btn-outline-success\">Создать модель</a>
                </div>
            </div>
        {% endif %}

        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <div class=\"card card-register p-4 w-100\">
                    <div class=\"row border-bottom h6 text-muted\">
                        <div class=\"col-6 col-sm-6 col-md-3 col-lg\">Имя модели</div>
                        <div class=\"col-6 col-sm-6 col-md-4 col-lg\">Расположение руля</div>
                        <div class=\"col-md col-lg\"></div>
                    </div>
                    {% for model in models %}
                        <div class=\"row border-bottom h6 my-3\">
                            <div class=\"col-6 col-sm-6 col-md-3 col-lg\">
                                {{ model.name }}
                            </div>
                            <div class=\"col-6 col-sm-6 col-md-4 col-lg\">
                                {{ model.wheel }}
                            </div>
                            <div class=\"col-6 col-sm col-md col-lg mt-3 mt-md-0\">
                                <div class=\"row\">
                                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
                                        <div class=\"col-12 col-sm-6\">
                                            <a href=\"/admin/model/{{ model.id }}\" class=\"btn btn-outline-success\">Редактировать</a>
                                        </div>
                                    {% endif %}
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <div class=\"col-12 col-sm-6 my-2 mt-sm-0\">
                                            <a href=\"/admin/delete_model/{{ model.id }}\" class=\"btn btn-outline-danger\">Удалить</a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "admin/models.html.twig", "C:\\OpenServer\\domains\\uniqom\\templates\\admin\\models.html.twig");
    }
}
