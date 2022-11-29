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

/* registration/register.html.twig */
class __TwigTemplate_3403ead140b17447d86f18f5bacfe926 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Inscription";
        
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
        echo "    <section class=\"login\">
        <section id=\"login-right\">

            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
                <h1>Créez votre compte</h1>

                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'row', ["label" => "Email :", "attr" => ["placeholder" => "adresse@mail.fr"]]);
        // line 17
        echo "

                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "plainPassword", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), 'row', ["attr" => ["placeholder" => "SuperMotDePasse365\$"]]);
        // line 23
        echo "

                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "plainPassword", [], "any", false, false, false, 25), "second", [], "any", false, false, false, 25), 'row', ["attr" => ["placeholder" => "SuperMotDePasse365\$"]]);
        // line 29
        echo "

                <div class=\"conditions\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "agreeTerms", [], "any", false, false, false, 32), 'row', ["label" => (((("J'accepte les <a class=\"links\" target=\"_blank\" href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu")) . "\">") . "conditions d'utilisation") . "</a>"), "label_html" => true, "attr" => ["class" => "conditions_checkbox"]]);
        // line 38
        echo "
                </div>

                <button type=\"submit\" class=\"btn button\">S'inscrire</button>
                <p>Déjà un compte ? <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">S'identifier</a></p>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
        </section>

        <section id=\"login-left\"></section>
    </section>

    <script>

        const left = document.querySelector('#login-left');
        const checkbox = document.querySelector('.conditions_checkbox');
        const parent = checkbox.parentElement;

        parent.style.display = 'flex';
        parent.style.flexDirection = 'row-reverse';
        parent.style.justifyContent = 'flex-end';
        parent.style.gap = '15px';
        parent.style.order = '2';
        parent.style.marginBottom = '20px';
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  126 => 42,  120 => 38,  118 => 32,  113 => 29,  111 => 25,  107 => 23,  105 => 19,  101 => 17,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
    <section class=\"login\">
        <section id=\"login-right\">

            {{ form_start(registrationForm) }}
                <h1>Créez votre compte</h1>

                {{ form_row(registrationForm.email, {
                    label: 'Email :',
                    'attr': {
                        'placeholder': 'adresse@mail.fr'
                    }
                }) }}

                {{ form_row(registrationForm.plainPassword.first, {
                    'attr': {
                        'placeholder': 'SuperMotDePasse365\$'
                    }
                }) }}

                {{ form_row(registrationForm.plainPassword.second, {
                    'attr': {
                        'placeholder': 'SuperMotDePasse365\$'
                    }
                }) }}

                <div class=\"conditions\">
                    {{ form_row(registrationForm.agreeTerms, {
                        label: 'J\\'accepte les <a class=\"links\" target=\"_blank\" href=\"' ~ path(\"app_cgu\") ~ '\">' ~ \"conditions d'utilisation\" ~ '</a>',
                        label_html: true,
                        'attr': {
                            'class': 'conditions_checkbox'
                        }
                    }) }}
                </div>

                <button type=\"submit\" class=\"btn button\">S'inscrire</button>
                <p>Déjà un compte ? <a href=\"{{ path('app_login') }}\">S'identifier</a></p>
            {{ form_end(registrationForm) }}
        </section>

        <section id=\"login-left\"></section>
    </section>

    <script>

        const left = document.querySelector('#login-left');
        const checkbox = document.querySelector('.conditions_checkbox');
        const parent = checkbox.parentElement;

        parent.style.display = 'flex';
        parent.style.flexDirection = 'row-reverse';
        parent.style.justifyContent = 'flex-end';
        parent.style.gap = '15px';
        parent.style.order = '2';
        parent.style.marginBottom = '20px';
    </script>
{% endblock %}
", "registration/register.html.twig", "/Users/jules/Desktop/Cours/SAE301/www/templates/registration/register.html.twig");
    }
}
