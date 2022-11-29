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

/* events/events.html.twig */
class __TwigTemplate_5a909b39845348836b99febb926ea429 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/events.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "events/events.html.twig", 1);
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

        echo "Événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("events");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <header>
        <span><a href=\"/\">Accueil</a> / Événements</span>
        <h1>Nos Événements</h1>
    </header>

    <section class=\"search\">
        <input type=\"search\" placeholder=\"Rechercher un événement, un genre ou une date...\">
";
        // line 37
        echo "    </section>

    <section class=\"events\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 41
            echo "            <article class=\"event\">
                <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 42))), "html", null, true);
            echo "\" alt=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo ">
                <div>
                    <h2>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</h2>
                    <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 45), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "genre", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
                    <p>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                    <a class=\"button\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">En savoir plus</a>
                </div>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "events/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 51,  154 => 47,  150 => 46,  144 => 45,  140 => 44,  133 => 42,  130 => 41,  126 => 40,  121 => 37,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Événements{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('events') }}
{% endblock %}

{% block body %}
    <header>
        <span><a href=\"/\">Accueil</a> / Événements</span>
        <h1>Nos Événements</h1>
    </header>

    <section class=\"search\">
        <input type=\"search\" placeholder=\"Rechercher un événement, un genre ou une date...\">
{#        <div class=\"wrapper\">#}
{#            <div class=\"icon\">#}
{#                <i id=\"left\" class=\"ri-arrow-left-s-line\"></i>#}
{#            </div>#}
{#            <ul class=\"filters\">#}
{#                <li class=\"filter\">Récent</li>#}
{#                <li class=\"filter\">Populaire</li>#}
{#                <li class=\"filter\">En plein air</li>#}
{#                <li class=\"filter\">En intérieur</li>#}
{#                <li class=\"filter\">Pour toute la famille</li>#}
{#                <li class=\"filter\">Enfants</li>#}
{#                <li class=\"filter\">Ados</li>#}
{#                <li class=\"filter\">Adultes</li>#}
{#                <li class=\"filter\">Concerts & Spectacles</li>#}
{#                <li class=\"filter\">Marchés</li>#}
{#            </ul>#}
{#            <div class=\"icon\">#}
{#                <i id=\"right\" class=\"ri-arrow-right-s-line\"></i>#}
{#            </div>#}
{#        </div>#}
    </section>

    <section class=\"events\">
        {% for event in events %}
            <article class=\"event\">
                <img src=\"{{ asset(\"build/\" ~ event.image) }}\" alt={{ event.name }}>
                <div>
                    <h2>{{ event.name }}</h2>
                    <span>{{ event.date }}<br>{{ event.genre }}</span>
                    <p>{{ event.description }}</p>
                    <a class=\"button\" href=\"{{ path('app_events', {id: event.id}) }}\">En savoir plus</a>
                </div>
            </article>
        {% endfor %}
    </section>
{% endblock %}
", "events/events.html.twig", "/Users/jules/Desktop/Cours/SAE301/www/templates/events/events.html.twig");
    }
}
