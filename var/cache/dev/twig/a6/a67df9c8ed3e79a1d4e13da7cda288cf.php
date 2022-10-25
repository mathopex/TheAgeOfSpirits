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
class __TwigTemplate_c73a840d05bfbd374fc37ee682c5bd43 extends Template
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
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
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

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<body id=\"container-body\">
\t\t<div id=\"containerBodyHome\">
\t\t\t<div id=\"histoire\">
\t\t\t\t<h2 id=\"h2-histoire\">Histoire du jeu</h2>
\t\t\t\t<div id=\"image-histoire\">
\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fond/histoire.png"), "html", null, true);
        echo "\" alt=\"histoire du jeu\" class=\"w-100\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- 1 ligne de card perso -->
\t\t\t<h2 id=\"h2-perso\">Nos personnages</h2>
\t\t\t<h3 id=\"h3-perso-humain\">Clan Humain</h3>
\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Archer Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_archerF.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"archer femme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Barbare Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_barbareF.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"barbare femme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Moine Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_moineF.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"moine femme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- 2eme ligne de card perso -->
\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_archerH.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"archer Homme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Archer Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_barbareH.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"barbare Homme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Barbare Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_moineH.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"moine Homme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Moine Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- 3eme ligne de card perso -->
\t\t\t<h3 id=\"h3-perso-esprit\">Clan Esprits</h3>
\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Archer Esprit Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_archerF_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"archer femme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Barbare Esprit Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_barbareF_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"barbare femme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Moine Esprit Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_moineF_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"moine femme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- 4eme ligne de card perso -->
\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_archerH_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"archer Homme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Archer Esprit Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_barbareH_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"barbare Homme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Barbare Esprit Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/persos/cards_moineH_MAL.png"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"moine Homme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Moine Esprit Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--Illustration-->
\t\t\t<div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t  <div class=\"carousel-item active\">
\t\t\t\t\t<img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carousel/banderole-admin1.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"carousel-item\">
\t\t\t\t\t<img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carousel/banderole-admin2.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t  </div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t  </div>
\t\t
\t\t\t<!--News-->
\t\t\t<h2 id=\"h2-news-home\">News</h2>
\t\t
\t\t\t<div id=\"container-news-home\">\t
\t\t\t\t";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 161
            echo "\t\t\t\t<div id=\"cards-news-home\">
\t\t\t\t\t<div id=\"title-news-home\">
\t\t\t\t\t\t<p id=\"news-home\">";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 163), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"message-news-home\">
\t\t\t\t\t\t<p id=\"news-home-message\">";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "message", [], "any", false, false, false, 166), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"date-news-home\">
\t\t\t\t\t\t";
            // line 169
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "createdAt", [], "any", false, false, false, 169), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"author-news-home\">
\t\t\t\t\t\t";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "author", [], "any", false, false, false, 172), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t</div>

\t\t\t
\t\t\t<!--Stat-->
\t\t\t<h2 id=\"h2-stats-home\">Statistique du site</h2>
\t\t\t<div id=\"container-stats-home\">
\t\t\t\t<div id=\"cards-stats-home\">
\t\t\t\t\t<div id=\"title-stats-home\">
\t\t\t\t\t\t<p id=\"stat-home\">Stats du site</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"subtitle-home\">
\t\t\t\t\t\t<p id=\"classement-stat-home\">Classement joueur</p>

\t\t\t\t\t</div>
\t\t\t\t\t<ol id=\"nbr-stat-home\">
\t\t\t\t\t\t";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persos"]) || array_key_exists("persos", $context) ? $context["persos"] : (function () { throw new RuntimeError('Variable "persos" does not exist.', 192, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 193
            echo "\t\t\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "pseudo", [], "any", false, false, false, 193), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "nbVictoire", [], "any", false, false, false, 193), "html", null, true);
            echo "</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
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
        return array (  380 => 195,  369 => 193,  365 => 192,  348 => 177,  337 => 172,  331 => 169,  325 => 166,  319 => 163,  315 => 161,  311 => 160,  298 => 150,  292 => 147,  277 => 135,  265 => 126,  253 => 117,  239 => 106,  227 => 97,  215 => 88,  198 => 74,  186 => 65,  174 => 56,  160 => 45,  148 => 36,  136 => 27,  123 => 17,  116 => 12,  106 => 11,  88 => 9,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t{{parent()}}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">

{% endblock %}

{% block title %}{% endblock %}

{% block body %}
\t<body id=\"container-body\">
\t\t<div id=\"containerBodyHome\">
\t\t\t<div id=\"histoire\">
\t\t\t\t<h2 id=\"h2-histoire\">Histoire du jeu</h2>
\t\t\t\t<div id=\"image-histoire\">
\t\t\t\t\t<img src=\"{{asset('images/fond/histoire.png')}}\" alt=\"histoire du jeu\" class=\"w-100\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- 1 ligne de card perso -->
\t\t\t<h2 id=\"h2-perso\">Nos personnages</h2>
\t\t\t<h3 id=\"h3-perso-humain\">Clan Humain</h3>
\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Archer Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_archerF.png')}}\" class=\"card-img-top\" alt=\"archer femme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Barbare Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_barbareF.png')}}\" class=\"card-img-top\" alt=\"barbare femme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Moine Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_moineF.png')}}\" class=\"card-img-top\" alt=\"moine femme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- 2eme ligne de card perso -->
\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_archerH.png')}}\" class=\"card-img-top\" alt=\"archer Homme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Archer Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_barbareH.png')}}\" class=\"card-img-top\" alt=\"barbare Homme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Barbare Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_moineH.png')}}\" class=\"card-img-top\" alt=\"moine Homme good\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Moine Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- 3eme ligne de card perso -->
\t\t\t<h3 id=\"h3-perso-esprit\">Clan Esprits</h3>
\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Archer Esprit Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_archerF_MAL.png')}}\" class=\"card-img-top\" alt=\"archer femme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Barbare Esprit Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_barbareF_MAL.png')}}\" class=\"card-img-top\" alt=\"barbare femme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Moine Esprit Femme</h5>
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_moineF_MAL.png')}}\" class=\"card-img-top\" alt=\"moine femme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- 4eme ligne de card perso -->
\t\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\" id=\"card-persos\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_archerH_MAL.png')}}\" class=\"card-img-top\" alt=\"archer Homme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Archer Esprit Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_barbareH_MAL.png')}}\" class=\"card-img-top\" alt=\"barbare Homme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Barbare Esprit Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card h-100\" id=\"h-100\">
\t\t\t\t\t\t<img src=\"{{asset('images/cards/persos/cards_moineH_MAL.png')}}\" class=\"card-img-top\" alt=\"moine Homme bad\" id=\"card-img-perso\">
\t\t\t\t\t\t<div class=\"card-body\" id=\"card-body-perso\">
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t\t<h5 class=\"card-title\" id=\"card-title-perso\">Moine Esprit Homme</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--Illustration-->
\t\t\t<div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t  <div class=\"carousel-item active\">
\t\t\t\t\t<img src=\"{{asset('images/carousel/banderole-admin1.png')}}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"carousel-item\">
\t\t\t\t\t<img src=\"{{asset('images/carousel/banderole-admin2.png')}}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t  </div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t  </div>
\t\t
\t\t\t<!--News-->
\t\t\t<h2 id=\"h2-news-home\">News</h2>
\t\t
\t\t\t<div id=\"container-news-home\">\t
\t\t\t\t{% for new in news %}
\t\t\t\t<div id=\"cards-news-home\">
\t\t\t\t\t<div id=\"title-news-home\">
\t\t\t\t\t\t<p id=\"news-home\">{{ new.title}}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"message-news-home\">
\t\t\t\t\t\t<p id=\"news-home-message\">{{new.message }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"date-news-home\">
\t\t\t\t\t\t{{ new.createdAt|date('d/m/Y')}}
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"author-news-home\">
\t\t\t\t\t\t{{ new.author}}
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t\t
\t\t\t<!--Stat-->
\t\t\t<h2 id=\"h2-stats-home\">Statistique du site</h2>
\t\t\t<div id=\"container-stats-home\">
\t\t\t\t<div id=\"cards-stats-home\">
\t\t\t\t\t<div id=\"title-stats-home\">
\t\t\t\t\t\t<p id=\"stat-home\">Stats du site</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"subtitle-home\">
\t\t\t\t\t\t<p id=\"classement-stat-home\">Classement joueur</p>

\t\t\t\t\t</div>
\t\t\t\t\t<ol id=\"nbr-stat-home\">
\t\t\t\t\t\t{% for perso in persos %}
\t\t\t\t\t\t\t<li>{{perso.pseudo}} {{perso.nbVictoire}}</li>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
{% endblock %}
", "base/homePage.html.twig", "C:\\Users\\matho\\Desktop\\TheAgeOfSpirits\\templates\\base\\homePage.html.twig");
    }
}
