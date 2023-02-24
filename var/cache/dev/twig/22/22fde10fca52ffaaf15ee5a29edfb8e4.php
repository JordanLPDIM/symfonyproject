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
<div class=\"container\">
  <h2 class=\"pb-4 pt-4\">Accueil</h2>
  <div class=\"row justify-content-center\">
    <div class=\"col-md-8\">
      <div class=\"mb-4\">
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
        <div class=\"input-group\">
          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "Content", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ecrire un tweet..."]]);
        echo "
          <div class=\"input-group-append\">
            <button type=\"submit\" class=\"btn btn-primary\">Tweeter</button>
          </div>
        </div>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
      </div>
      <ul class=\"list-group mb-4\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "        <li class=\"list-group-item\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <div>
              <h5 class=\"mb-0\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</h5>
              <small class=\"text-muted\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "date", [], "any", false, false, false, 34), "d/m/Y H:i"), "html", null, true);
            echo "</small>
            </div>
            <div>
              <button class=\"btn btn-sm btn-primary\">Like</button>
            </div>
          </div>
          <p class=\"mt-3 mb-0\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "content", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </ul>
    </div>
  </div>
</div>


<div class=\"position-absolute\" style=\"top: 60px; right: 30px;\">
  <p><img src=\"https://openweathermap.org/img/wn/";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["weatherIcon"]) || array_key_exists("weatherIcon", $context) ? $context["weatherIcon"] : (function () { throw new RuntimeError('Variable "weatherIcon" does not exist.', 50, $this->source); })()), "html", null, true);
        echo ".png\"> ";
        echo twig_escape_filter($this->env, (isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 50, $this->source); })()), "html", null, true);
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
        return array (  160 => 50,  151 => 43,  142 => 40,  133 => 34,  129 => 33,  124 => 30,  120 => 29,  114 => 26,  106 => 21,  101 => 19,  93 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

<div class=\"container\">
  <h2 class=\"pb-4 pt-4\">Accueil</h2>
  <div class=\"row justify-content-center\">
    <div class=\"col-md-8\">
      <div class=\"mb-4\">
        {{ form_start(form) }}
        <div class=\"input-group\">
          {{ form_widget(form.Content, {'attr': {'class': 'form-control', 'placeholder': 'Ecrire un tweet...'}}) }}
          <div class=\"input-group-append\">
            <button type=\"submit\" class=\"btn btn-primary\">Tweeter</button>
          </div>
        </div>
        {{ form_end(form) }}
      </div>
      <ul class=\"list-group mb-4\">
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
