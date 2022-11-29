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

/* parts/nav.html.twig */
class __TwigTemplate_439b71f0f50ff8f09f7417002cfaa403 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/nav.html.twig"));

        // line 1
        echo "<nav>
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/reims_logo.jpg"), "html", null, true);
        echo "\" alt=\"Logo de Reims\" />

    <ul>
        <li><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5) == "app_home")) ? ("link-active") : (""));
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        echo "\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "get", [0 => "_route"], "method", false, false, false, 6) == "app_events")) ? ("link-active") : (""));
        echo "\">Événements</a></li>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">À propos</a></li>
        <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8) == "app_contact")) ? ("link-active") : (""));
        echo "\">Contact</a></li>

        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "            <div class=\"account\">
                <i class=\"fa-solid fa-user\"></i>
            </div>
        ";
        } else {
            // line 15
            echo "            <li><a class=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">S'identifier</a></li>
        ";
        }
        // line 17
        echo "    </ul>
</nav>

<script>
    const nav = document.querySelector('nav');

    addEventListener('scroll', () => {
        if(window.scrollY <= 10) {
            nav.style.boxShadow = 'none';
        } else {
            nav.style.boxShadow = '3px 3px 11.5px -5.5px #dddddd';
        }
    });
</script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "parts/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  83 => 15,  77 => 11,  75 => 10,  68 => 8,  64 => 7,  58 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
    <img src=\"{{ asset('build/reims_logo.jpg') }}\" alt=\"Logo de Reims\" />

    <ul>
        <li><a href=\"{{ path('app_home') }}\" class=\"{{ app.request.get('_route') == 'app_home' ? 'link-active' }}\">Accueil</a></li>
        <li><a href=\"{{ path('app_events') }}\" class=\"{{ app.request.get('_route') == 'app_events' ? 'link-active' }}\">Événements</a></li>
        <li><a href=\"{{ path('app_home') }}\">À propos</a></li>
        <li><a href=\"{{ path('app_contact') }}\" class=\"{{ app.request.get('_route') == 'app_contact' ? 'link-active' }}\">Contact</a></li>

        {% if app.user %}
            <div class=\"account\">
                <i class=\"fa-solid fa-user\"></i>
            </div>
        {% else %}
            <li><a class=\"button\" href=\"{{ path('app_login') }}\">S'identifier</a></li>
        {% endif %}
    </ul>
</nav>

<script>
    const nav = document.querySelector('nav');

    addEventListener('scroll', () => {
        if(window.scrollY <= 10) {
            nav.style.boxShadow = 'none';
        } else {
            nav.style.boxShadow = '3px 3px 11.5px -5.5px #dddddd';
        }
    });
</script>

{#{% if is_granted('ROLE_ADMIN') %}#}
{#    <li><a href=\"{{ path('admin') }}\">Administration</a></li>#}
{#{% endif %}#}", "parts/nav.html.twig", "/Users/jules/Desktop/Cours/SAE301/www/templates/parts/nav.html.twig");
    }
}
