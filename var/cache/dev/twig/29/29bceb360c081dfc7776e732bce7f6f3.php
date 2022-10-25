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

/* partials/_header.html.twig */
class __TwigTemplate_453b0d16b35d47db6d0dd32dfc3a377d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        echo "<!-- Partie Header-->
<header>
    <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar-light\">
        <a class=\"navbar-brand\" href=\"#\">
            <img  id=\"img-logo\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/LOGOwhite.png"), "html", null, true);
        echo "\" alt=\"logo\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbar\">
            <div class=\"navbar-nav\" id=\"menu\">
                <a class=\"nav-item nav-link active\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\">Accueil</a>
                <a class=\"nav-item nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("regle");
        echo "\">Règles du jeux</a>
                <a class=\"nav-item nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">News</a>
                <a class=\"nav-item nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                <a class=\"nav-item nav-link\" href=\"#\">statistiques du site</a>
                ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                <a class=\"nav-item nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\">Admin</a>
                ";
        }
        // line 20
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 21
            echo "                    <a class=\"nav-item nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre");
            echo "\">Membre</a>
\t\t\t\t";
        }
        // line 23
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 24
            echo "                    <a class=\"nav-item nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("combat_list");
            echo "\">Combat</a>
\t\t\t\t";
        }
        // line 26
        echo "            </div>
        </div>
        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "\t\t\t<li class=\"nav-item dropdown\" id=\"btn-deconnexion\">
\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_gestion");
            echo "\">Gestion des utilisateurs</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Gestion du chat</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_gestion");
            echo "\">Gestion des contacts</a></li>
\t\t\t\t\t";
            // line 35
            echo "\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t";
        }
        // line 39
        echo "            <ul class=\"navbar-nav mb-2 mb-lg-0\">
                ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) {
            // line 41
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" id=\"btn-nav-deconnexion\">Deconnexion</a>
                    </li>
                    ";
        } else {
            // line 45
            echo "                ";
        }
        // line 46
        echo "            </ul>
    </nav>

    <h1 id=\"h1\" style=\"font-family: 'MedievalSharp', cursive;\">The Age Of Spirits</h1>
    <div id=\"subHead\">
        ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) {
            // line 52
            echo "
        ";
        } else {
            // line 54
            echo "
        <div id=\"btn-headG\">
                <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn btn-lg btn-dark\" id=\"btn-header-inscription\">Inscription</a>
        </div>
        <div id=\"btn-headD\">
                <a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-lg btn-dark\" id=\"btn-header-connexion\">Connexion</a>
         </div>
        ";
        }
        // line 62
        echo "    </div>
    <p id=\"speach\">The Age of Spirits est un jeu navigateur qui permet de créer son personnage dans le royaume de Bolateria et de choisir son camp pour combattre les humains ou les esprits</p>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 62,  167 => 59,  161 => 56,  157 => 54,  153 => 52,  151 => 51,  144 => 46,  141 => 45,  135 => 42,  132 => 41,  130 => 40,  127 => 39,  121 => 35,  117 => 33,  112 => 31,  108 => 29,  106 => 28,  102 => 26,  96 => 24,  93 => 23,  87 => 21,  84 => 20,  78 => 18,  76 => 17,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Partie Header-->
<header>
    <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar-light\">
        <a class=\"navbar-brand\" href=\"#\">
            <img  id=\"img-logo\" src=\"{{asset('images/logo/LOGOwhite.png')}}\" alt=\"logo\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbar\">
            <div class=\"navbar-nav\" id=\"menu\">
                <a class=\"nav-item nav-link active\" href=\"{{ path('home_page') }}\">Accueil</a>
                <a class=\"nav-item nav-link\" href=\"{{ path('regle') }}\">Règles du jeux</a>
                <a class=\"nav-item nav-link\" href=\"{{ path('news') }}\">News</a>
                <a class=\"nav-item nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                <a class=\"nav-item nav-link\" href=\"#\">statistiques du site</a>
                {% if is_granted('ROLE_ADMIN') %}
                <a class=\"nav-item nav-link\" href=\"{{ path('admin_dashboard') }}\">Admin</a>
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                    <a class=\"nav-item nav-link\" href=\"{{ path('membre') }}\">Membre</a>
\t\t\t\t{% endif %}
                {% if is_granted('ROLE_USER') %}
                    <a class=\"nav-item nav-link\" href=\"{{ path('combat_list') }}\">Combat</a>
\t\t\t\t{% endif %}
            </div>
        </div>
        {% if app.user %}
\t\t\t<li class=\"nav-item dropdown\" id=\"btn-deconnexion\">
\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('user_gestion') }}\">Gestion des utilisateurs</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Gestion du chat</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('contact_gestion') }}\">Gestion des contacts</a></li>
\t\t\t\t\t{# liens pour les pages ROLE_USER #}
\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t{% endif %}
            <ul class=\"navbar-nav mb-2 mb-lg-0\">
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\" id=\"btn-nav-deconnexion\">Deconnexion</a>
                    </li>
                    {% else %}
                {% endif %}
            </ul>
    </nav>

    <h1 id=\"h1\" style=\"font-family: 'MedievalSharp', cursive;\">The Age Of Spirits</h1>
    <div id=\"subHead\">
        {% if app.user %}

        {% else %}

        <div id=\"btn-headG\">
                <a href=\"{{ path('registration') }}\" class=\"btn btn-lg btn-dark\" id=\"btn-header-inscription\">Inscription</a>
        </div>
        <div id=\"btn-headD\">
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-lg btn-dark\" id=\"btn-header-connexion\">Connexion</a>
         </div>
        {% endif %}
    </div>
    <p id=\"speach\">The Age of Spirits est un jeu navigateur qui permet de créer son personnage dans le royaume de Bolateria et de choisir son camp pour combattre les humains ou les esprits</p>
</header>
", "partials/_header.html.twig", "C:\\Users\\matho\\Desktop\\TheAgeOfSpirits\\templates\\partials\\_header.html.twig");
    }
}
