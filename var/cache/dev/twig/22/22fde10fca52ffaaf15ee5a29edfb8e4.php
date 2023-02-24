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

/* home/index.html.twig */
class __TwigTemplate_6240e9e46011d1264aae75bc2e9f86df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    

 ";
        // line 13
        echo "

   <br />

    <div class=\"container\">
    <h2> Accueil </h2>
    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"btn btn-primary mb-4\">Ecrire un Tweet</a>
  <div class=\"row justify-content-center\">
    <div class=\"col-md-8\">
      <ul class=\"list-group mb-20\">
        
         ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "        <li class=\"list-group-item\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
            <h5 class=\"mb-0\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</h5>
            <small class=\"text-muted\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "date", [], "any", false, false, false, 29), "d/m/Y H:i"), "html", null, true);
            echo "</small>
            </div>
            <div>
            <button class=\"btn btn-sm btn-primary\">Like</button>
            </div>
        </div>
        <p class=\"mt-3 mb-0\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "content", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
        </li>

        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        <!-- ... -->
      </ul>
    </div>
  </div>
</div>

<div class=\"position-absolute\" style=\"top: 60px; right: 30px;\">
  <p><img src=\"https://openweathermap.org/img/wn/";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["weatherIcon"]) || array_key_exists("weatherIcon", $context) ? $context["weatherIcon"] : (function () { throw new RuntimeError('Variable "weatherIcon" does not exist.', 47, $this->source); })()), "html", null, true);
        echo ".png\"> ";
        echo twig_escape_filter($this->env, (isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " °C</p>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  142 => 40,  131 => 35,  122 => 29,  118 => 28,  113 => 25,  109 => 24,  101 => 19,  93 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    

 {#   <form action=\"{{ path('message_new') }}\" method=\"post\">
        <input type=\"text\" id=\"message\" name=\"message\" placeholder=\"Ecrivez votre msg..\">
        <input type=\"submit\" value=\"Envoyer\">
   </form> #}


   <br />

    <div class=\"container\">
    <h2> Accueil </h2>
    <a href=\"{{ path('app_home') }}\" class=\"btn btn-primary mb-4\">Ecrire un Tweet</a>
  <div class=\"row justify-content-center\">
    <div class=\"col-md-8\">
      <ul class=\"list-group mb-20\">
        
         {% for entity in entities %}
        <li class=\"list-group-item\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
            <h5 class=\"mb-0\">{{ entity.id }}</h5>
            <small class=\"text-muted\">{{ entity.date|date('d/m/Y H:i') }}</small>
            </div>
            <div>
            <button class=\"btn btn-sm btn-primary\">Like</button>
            </div>
        </div>
        <p class=\"mt-3 mb-0\">{{ entity.content }}</p>
        </li>

        
        {% endfor %}
        <!-- ... -->
      </ul>
    </div>
  </div>
</div>

<div class=\"position-absolute\" style=\"top: 60px; right: 30px;\">
  <p><img src=\"https://openweathermap.org/img/wn/{{ weatherIcon }}.png\"> {{temperature}} °C</p>
</div>


{% endblock %}
", "home/index.html.twig", "C:\\symfonyproject\\templates\\home\\index.html.twig");
    }
}
