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

/* base/homePage.html.twig */
class __TwigTemplate_76072e2beb29436a1654b9ff8712d32b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/homePage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/homePage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/homePage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<body id=\"container-body\">
    <div id=\"containerBodyHome\">
        <div id=\"histoire\">
            <h2 id=\"h2-histoire\">Histoire du jeu</h2>
            <div id=\"image-histoire\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fond/histoire.png"), "html", null, true);
        echo "\" alt=\"histoire du jeu\" class=\"w-100\">
            </div>
        </div>
        <!-- 1 ligne de card perso -->
        <h2 id=\"h2-perso\">Nos personnages</h2>
        <h3 id=\"h3-perso-humain\">Clan Humain</h3>
        <div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Archer Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsFemmeGood/cards_archerF.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"archer femme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Barbare Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsFemmeGood/cards_barbareF.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"barbare femme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Moine Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsFemmeGood/cards_moineF.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"moine femme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
          </div>
          <!-- 2eme ligne de card perso -->
          <div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsHommeGood/cards_archerH.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"archer Homme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Archer Homme</h5>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsHommeGood/cards_barbareH.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"barbare Homme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Barbare Homme</h5>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsHommeGood/cards_moineH.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"moine Homme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Moine Homme</h5>
                </div>
              </div>
            </div>
          </div>
          <!-- 3eme ligne de card perso -->
          <h3 id=\"h3-perso-esprit\">Clan Esprits</h3>
          <div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Archer Esprit Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsFemmeBad/cards_archerF_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"archer femme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Barbare Esprit Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsFemmeBad/cards_barbareF_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"barbare femme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Moine Esprit Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsFemmeBad/cards_moineF_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"moine femme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
          </div>
          <!-- 4eme ligne de card perso -->
          <div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsHommeBad/cards_archerH_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"archer Homme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Archer Esprit Homme</h5>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsHommeBad/cards_barbareH_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"barbare Homme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Barbare Esprit Homme</h5>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cardsHommeBad/cards_moineH_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"moine Homme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Moine Esprit Homme</h5>
                </div>
              </div>
            </div>
          </div>
          <!--Illustration-->
          <div id=\"containerIllustration\">
            <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fond/bg-frontpage.jpg"), "html", null, true);
        echo "\" alt=\"illustation site\">
        </div>
        <!--News-->
        <h2 id=\"h2-news-home\">News</h2>
        <div id=\"container-news-home\">
            <div id=\"cards-news-home\">
                <div id=\"title-news-home\"><p id=\"news-home\">Quoi de neuf</p></div>
            </div>
        </div>
        <!--Stat-->
        <h2 id=\"h2-stats-home\">Statistique du site</h2>
        <div id=\"container-stats-home\">
            <div id=\"cards-stats-home\">
                <div id=\"title-stats-home\"><p id=\"stat-home\">Stats du site</p></div>
                <div id=\"subtitle-home\"><p id=\"classement-stat-home\">Classement joueur</p></div>
                <ol id=\"nbr-stat-home\">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
        </div>
    </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base/homePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 144,  276 => 134,  264 => 125,  252 => 116,  238 => 105,  226 => 96,  214 => 87,  197 => 73,  185 => 64,  173 => 55,  159 => 44,  147 => 35,  135 => 26,  122 => 16,  115 => 11,  105 => 10,  87 => 8,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
{% endblock %}

{% block title %}{% endblock %}

{% block body %}
<body id=\"container-body\">
    <div id=\"containerBodyHome\">
        <div id=\"histoire\">
            <h2 id=\"h2-histoire\">Histoire du jeu</h2>
            <div id=\"image-histoire\">
                <img src=\"{{asset('images/fond/histoire.png')}}\" alt=\"histoire du jeu\" class=\"w-100\">
            </div>
        </div>
        <!-- 1 ligne de card perso -->
        <h2 id=\"h2-perso\">Nos personnages</h2>
        <h3 id=\"h3-perso-humain\">Clan Humain</h3>
        <div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Archer Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsFemmeGood/cards_archerF.png')}}\" class=\"card-img-top\" alt=\"archer femme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Barbare Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsFemmeGood/cards_barbareF.png')}}\" class=\"card-img-top\" alt=\"barbare femme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Moine Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsFemmeGood/cards_moineF.png')}}\" class=\"card-img-top\" alt=\"moine femme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
          </div>
          <!-- 2eme ligne de card perso -->
          <div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsHommeGood/cards_archerH.png')}}\" class=\"card-img-top\" alt=\"archer Homme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Archer Homme</h5>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsHommeGood/cards_barbareH.png')}}\" class=\"card-img-top\" alt=\"barbare Homme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Barbare Homme</h5>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsHommeGood/cards_moineH.png')}}\" class=\"card-img-top\" alt=\"moine Homme good\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Moine Homme</h5>
                </div>
              </div>
            </div>
          </div>
          <!-- 3eme ligne de card perso -->
          <h3 id=\"h3-perso-esprit\">Clan Esprits</h3>
          <div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Archer Esprit Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsFemmeBad/cards_archerF_MAL.png')}}\" class=\"card-img-top\" alt=\"archer femme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Barbare Esprit Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsFemmeBad/cards_barbareF_MAL.png')}}\" class=\"card-img-top\" alt=\"barbare femme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
            <div class=\"col\">
                <h5 class=\"card-title\" id=\"card-title-perso\">Moine Esprit Femme</h5>
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsFemmeBad/cards_moineF_MAL.png')}}\" class=\"card-img-top\" alt=\"moine femme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                </div>
              </div>
            </div>
          </div>
          <!-- 4eme ligne de card perso -->
          <div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsHommeBad/cards_archerH_MAL.png')}}\" class=\"card-img-top\" alt=\"archer Homme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Archer Esprit Homme</h5>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsHommeBad/cards_barbareH_MAL.png')}}\" class=\"card-img-top\" alt=\"barbare Homme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Barbare Esprit Homme</h5>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card h-100\" id=\"h-100\">
                <img src=\"{{asset('images/cards/cardsHommeBad/cards_moineH_MAL.png')}}\" class=\"card-img-top\" alt=\"moine Homme bad\" id=\"card-img-perso\">
                <div class=\"card-body\" id=\"card-body-perso\">
                  <p class=\"card-text\"></p>
                  <h5 class=\"card-title\" id=\"card-title-perso\">Moine Esprit Homme</h5>
                </div>
              </div>
            </div>
          </div>
          <!--Illustration-->
          <div id=\"containerIllustration\">
            <img src=\"{{asset('images/fond/bg-frontpage.jpg')}}\" alt=\"illustation site\">
        </div>
        <!--News-->
        <h2 id=\"h2-news-home\">News</h2>
        <div id=\"container-news-home\">
            <div id=\"cards-news-home\">
                <div id=\"title-news-home\"><p id=\"news-home\">Quoi de neuf</p></div>
            </div>
        </div>
        <!--Stat-->
        <h2 id=\"h2-stats-home\">Statistique du site</h2>
        <div id=\"container-stats-home\">
            <div id=\"cards-stats-home\">
                <div id=\"title-stats-home\"><p id=\"stat-home\">Stats du site</p></div>
                <div id=\"subtitle-home\"><p id=\"classement-stat-home\">Classement joueur</p></div>
                <ol id=\"nbr-stat-home\">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
        </div>
    </div>
</body>
{% endblock %}
", "base/homePage.html.twig", "C:\\Users\\matho\\Desktop\\TheAgeOfSpirits\\templates\\base\\homePage.html.twig");
    }
}
