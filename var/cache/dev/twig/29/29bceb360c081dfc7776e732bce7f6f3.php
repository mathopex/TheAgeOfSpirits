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
    <!--   <div id=\"head-container\">

            <div id=\"headerGD\">
                <div id=\"headerG\">
                    <img  id=\"img-logo\"src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/LOGOwhite.png"), "html", null, true);
        echo "\" alt=\"logo\"></a></div>
                </div>

                <div id=\"headerD\">
                    <ul id=\"menu\">
                            <li id=\"active\"><a href=\"#\">Accueil</a></li>
                            <li><a href=\"#\">Règle du jeux</a></li>
                            <li><a href=\"#\">News</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li><a href=\"#\">Statistiques du site</a></li>
                            <li><a href=\"#\">Admin</a></li>
                    </ul>
                </div>

            </div>


    </div>-->
    <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar-light\">
        <a class=\"navbar-brand\" href=\"#\">
            <img  id=\"img-logo\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/LOGOwhite.png"), "html", null, true);
        echo "\" alt=\"logo\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbar\">
            <div class=\"navbar-nav\" id=\"menu\">
                <a class=\"nav-item nav-link active\" href=\"#\">Accueil</a>
                <a class=\"nav-item nav-link\" href=\"#\">Règles du jeux</a>
                <a class=\"nav-item nav-link\" href=\"#\">News</a>
                <a class=\"nav-item nav-link\" href=\"#\">Contact</a>
                <a class=\"nav-item nav-link\" href=\"#\">statistiques du site</a>
                <a class=\"nav-item nav-link\" href=\"#\">Admin</a>
            </div>
        </div>
    </nav>

    <h1 id=\"h1\" style=\"font-family: 'MedievalSharp', cursive;\">The Age Of Spirits</h1>
    <div id=\"subHead\">
        <div id=\"btn-headG\">
                <button id=\"btn-header-inscription\" type=\"button\">Inscription</button>
        </div>
        <div id=\"btn-headD\">
                <button id=\"btn-header-connexion\" type=\"button\">Connexion</button>
         </div>
    </div>
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
        return array (  74 => 27,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Partie Header-->
<header>
    <!--   <div id=\"head-container\">

            <div id=\"headerGD\">
                <div id=\"headerG\">
                    <img  id=\"img-logo\"src=\"{{asset('images/logo/LOGOwhite.png')}}\" alt=\"logo\"></a></div>
                </div>

                <div id=\"headerD\">
                    <ul id=\"menu\">
                            <li id=\"active\"><a href=\"#\">Accueil</a></li>
                            <li><a href=\"#\">Règle du jeux</a></li>
                            <li><a href=\"#\">News</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li><a href=\"#\">Statistiques du site</a></li>
                            <li><a href=\"#\">Admin</a></li>
                    </ul>
                </div>

            </div>


    </div>-->
    <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar-light\">
        <a class=\"navbar-brand\" href=\"#\">
            <img  id=\"img-logo\" src=\"{{asset('images/logo/LOGOwhite.png')}}\" alt=\"logo\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbar\">
            <div class=\"navbar-nav\" id=\"menu\">
                <a class=\"nav-item nav-link active\" href=\"#\">Accueil</a>
                <a class=\"nav-item nav-link\" href=\"#\">Règles du jeux</a>
                <a class=\"nav-item nav-link\" href=\"#\">News</a>
                <a class=\"nav-item nav-link\" href=\"#\">Contact</a>
                <a class=\"nav-item nav-link\" href=\"#\">statistiques du site</a>
                <a class=\"nav-item nav-link\" href=\"#\">Admin</a>
            </div>
        </div>
    </nav>

    <h1 id=\"h1\" style=\"font-family: 'MedievalSharp', cursive;\">The Age Of Spirits</h1>
    <div id=\"subHead\">
        <div id=\"btn-headG\">
                <button id=\"btn-header-inscription\" type=\"button\">Inscription</button>
        </div>
        <div id=\"btn-headD\">
                <button id=\"btn-header-connexion\" type=\"button\">Connexion</button>
         </div>
    </div>
    <p id=\"speach\">The Age of Spirits est un jeu navigateur qui permet de créer son personnage dans le royaume de Bolateria et de choisir son camp pour combattre les humains ou les esprits</p>
</header>
", "partials/_header.html.twig", "C:\\Users\\matho\\Desktop\\TheAgeOfSpirits\\templates\\partials\\_header.html.twig");
    }
}
