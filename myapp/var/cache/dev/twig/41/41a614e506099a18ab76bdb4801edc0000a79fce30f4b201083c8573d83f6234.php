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

/* logs.html.twig */
class __TwigTemplate_9913957b0e1b9908cecf02225ecca9b5780ab55c7171e87ba4a4ce967606fb51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "logs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Logs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"container-fluid\">
        <div class=\"row\"><div class=\"col text-center h1\">Logs</div></div>
        <hr/>
        <div class=\"row\"><div class=\"col text-center\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["joke"]) || array_key_exists("joke", $context) ? $context["joke"] : (function () { throw new RuntimeError('Variable "joke" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</div></div>
        <div class=\"row\"><div id=\"joke\" class=\"col text-center\"></div></div>
        <div class=\"row\">
            <div class=\"col\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">Request Url</th>
                        <th scope=\"col\">Redirect Url</th>
                        <th scope=\"col\">Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 23
            echo "                        <tr>
                            <td><a href=\"#";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "getId", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "getId", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></td>
                            <td><a href=\"#";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "getId", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "getRequestUrl", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></td>
                            <td><a href=\"#";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "getId", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "getRedirectUrl", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></td>
                            <td><a href=\"#";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "getId", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "getTime", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"col\">
                <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 30,  135 => 27,  129 => 26,  123 => 25,  117 => 24,  114 => 23,  110 => 22,  93 => 8,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Logs{% endblock %}
{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\"><div class=\"col text-center h1\">Logs</div></div>
        <hr/>
        <div class=\"row\"><div class=\"col text-center\">{{ joke }}</div></div>
        <div class=\"row\"><div id=\"joke\" class=\"col text-center\"></div></div>
        <div class=\"row\">
            <div class=\"col\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">Request Url</th>
                        <th scope=\"col\">Redirect Url</th>
                        <th scope=\"col\">Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for request in requests %}
                        <tr>
                            <td><a href=\"#{{ request.getId }}\">{{ request.getId }}</a></td>
                            <td><a href=\"#{{ request.getId }}\">{{ request.getRequestUrl }}</a></td>
                            <td><a href=\"#{{ request.getId }}\">{{ request.getRedirectUrl }}</a></td>
                            <td><a href=\"#{{ request.getId }}\">{{ request.getTime }}</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"col\">
                <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
            </div>
        </div>
    </div>

{% endblock %}", "logs.html.twig", "/Users/tiagoandre/Projects/integrityChallenge/templates/logs.html.twig");
    }
}
