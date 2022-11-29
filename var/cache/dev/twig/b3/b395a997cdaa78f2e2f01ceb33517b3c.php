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

/* events/index.html.twig */
class __TwigTemplate_c051e1744332e7cf3ea75316e7a67193 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "events/index.html.twig", 1);
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
        <article class=\"event\">
            <img src=\"https://ngproductions.fr/wp-content/uploads/2022/06/Template-Affiche-Siteweb-Damso.jpg\" alt=\"\">
            <div>
                <h2>Titre de l'événement</h2>
                <span>Le 19 juin 2022 à 15h<br>Concert</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci, asperiores. Accusamus, ad
                    alias aliquid asperiores atque autem beatae commodi consequatur cumque cupiditate delectus dolorum ea enim eos exercitationem explicabo.<br>
                    facilis fuga fugiat hic id illum impedit incidunt inventore ipsa ipsam ipsum iste iure iusto laboriosam laborum laudantium libero magnam magni.
                </p>
                <a class=\"button\" href=\"#\">En savoir plus</a>
            </div>
        </article>

        <article class=\"event\">
            <img src=\"https://ngproductions.fr/wp-content/uploads/2022/06/Template-Affiche-Siteweb-Damso.jpg\" alt=\"\">
            <div>
                <h2>Titre de l'événement</h2>
                <span>Le 19 juin 2022 à 15h<br>Concert</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci, asperiores. Accusamus, ad
                    alias aliquid asperiores atque autem beatae commodi consequatur cumque cupiditate delectus dolorum ea enim eos exercitationem explicabo.<br>
                    facilis fuga fugiat hic id illum impedit incidunt inventore ipsa ipsam ipsum iste iure iusto laboriosam laborum laudantium libero magnam magni.
                </p>
                <a class=\"button\" href=\"#\">En savoir plus</a>
            </div>
        </article>

        <article class=\"event\">
            <img src=\"https://ngproductions.fr/wp-content/uploads/2022/06/Template-Affiche-Siteweb-Damso.jpg\" alt=\"\">
            <div>
                <h2>Titre de l'événement</h2>
                <span>Le 19 juin 2022 à 15h<br>Concert</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci, asperiores. Accusamus, ad
                    alias aliquid asperiores atque autem beatae commodi consequatur cumque cupiditate delectus dolorum ea enim eos exercitationem explicabo.<br>
                    facilis fuga fugiat hic id illum impedit incidunt inventore ipsa ipsam ipsum iste iure iusto laboriosam laborum laudantium libero magnam magni.
                </p>
                <a class=\"button\" href=\"#\">En savoir plus</a>
            </div>
        </article>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "events/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
        <article class=\"event\">
            <img src=\"https://ngproductions.fr/wp-content/uploads/2022/06/Template-Affiche-Siteweb-Damso.jpg\" alt=\"\">
            <div>
                <h2>Titre de l'événement</h2>
                <span>Le 19 juin 2022 à 15h<br>Concert</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci, asperiores. Accusamus, ad
                    alias aliquid asperiores atque autem beatae commodi consequatur cumque cupiditate delectus dolorum ea enim eos exercitationem explicabo.<br>
                    facilis fuga fugiat hic id illum impedit incidunt inventore ipsa ipsam ipsum iste iure iusto laboriosam laborum laudantium libero magnam magni.
                </p>
                <a class=\"button\" href=\"#\">En savoir plus</a>
            </div>
        </article>

        <article class=\"event\">
            <img src=\"https://ngproductions.fr/wp-content/uploads/2022/06/Template-Affiche-Siteweb-Damso.jpg\" alt=\"\">
            <div>
                <h2>Titre de l'événement</h2>
                <span>Le 19 juin 2022 à 15h<br>Concert</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci, asperiores. Accusamus, ad
                    alias aliquid asperiores atque autem beatae commodi consequatur cumque cupiditate delectus dolorum ea enim eos exercitationem explicabo.<br>
                    facilis fuga fugiat hic id illum impedit incidunt inventore ipsa ipsam ipsum iste iure iusto laboriosam laborum laudantium libero magnam magni.
                </p>
                <a class=\"button\" href=\"#\">En savoir plus</a>
            </div>
        </article>

        <article class=\"event\">
            <img src=\"https://ngproductions.fr/wp-content/uploads/2022/06/Template-Affiche-Siteweb-Damso.jpg\" alt=\"\">
            <div>
                <h2>Titre de l'événement</h2>
                <span>Le 19 juin 2022 à 15h<br>Concert</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci, asperiores. Accusamus, ad
                    alias aliquid asperiores atque autem beatae commodi consequatur cumque cupiditate delectus dolorum ea enim eos exercitationem explicabo.<br>
                    facilis fuga fugiat hic id illum impedit incidunt inventore ipsa ipsam ipsum iste iure iusto laboriosam laborum laudantium libero magnam magni.
                </p>
                <a class=\"button\" href=\"#\">En savoir plus</a>
            </div>
        </article>
    </section>
{% endblock %}
", "events/index.html.twig", "/Users/jules/Desktop/Cours/SAE301/www/templates/events/index.html.twig");
    }
}
