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

<p>La température à ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo " est de
";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weatherData"]) || array_key_exists("weatherData", $context) ? $context["weatherData"] : (function () { throw new RuntimeError('Variable "weatherData" does not exist.', 9, $this->source); })()), "main", [], "any", false, false, false, 9), "temp", [], "any", false, false, false, 9), "html", null, true);
        echo "°C.</p>

";
        
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
        return array (  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form method=\"get\">
    <label for=\"city\">Ville:</label>
    <input type=\"text\" name=\"city\" id=\"city\" required>
    <button type=\"submit\">Valider</button>
</form>

<p>La température à {{ weatherData.name }} est de
{{ weatherData.main.temp }}°C.</p>

", "weather/show.html.twig", "C:\\symfonyproject\\templates\\weather\\show.html.twig");
    }
}
