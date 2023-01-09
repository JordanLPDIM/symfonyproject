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

/* weather/show.html.twig */
class __TwigTemplate_37ff4c32fcf5ba538d3f80e50687b6e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/show.html.twig"));

        // line 1
        echo "
<form method=\"get\">
    <label for=\"city\">Ville:</label>
    <input type=\"text\" name=\"city\" id=\"city\" required>
    <button type=\"submit\">Valider</button>
</form>


";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9) != null)) {
            // line 10
            echo "    <p>La température à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
            echo " est de
";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 11, $this->source); })()), "main", [], "any", false, false, false, 11), "temp", [], "any", false, false, false, 11), "html", null, true);
            echo "°C.</p>
";
        } else {
            // line 13
            echo "    <p>Entrez une ville</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "weather/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  60 => 11,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form method=\"get\">
    <label for=\"city\">Ville:</label>
    <input type=\"text\" name=\"city\" id=\"city\" required>
    <button type=\"submit\">Valider</button>
</form>


{% if weatherData.name != null %}
    <p>La température à {{ weatherData.name }} est de
{{ weatherData.main.temp }}°C.</p>
{% else %}
    <p>Entrez une ville</p>
{% endif %}
", "weather/show.html.twig", "C:\\symfonyproject\\templates\\weather\\show.html.twig");
    }
}
