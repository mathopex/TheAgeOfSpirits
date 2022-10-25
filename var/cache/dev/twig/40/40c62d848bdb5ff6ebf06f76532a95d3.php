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

/* regle/index.html.twig */
class __TwigTemplate_065840000ff8b1291fc672f270ea65b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "regle/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "regle/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "regle/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Règle du jeu";
        
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
        echo "<body id=\"body-regle\">
    <div id=\"containerBodyRegle\">
        <div id=\"regle\">
            <h2 id=\"h2-regle\">Règle du jeu</h2>
        </div>    
        <div class=\"card-regle\" id=\"card-regle\">
            <div class=\"card-body\" id=\"card-bg\">
                <h3 id=\"h3-regle\">Règle 1</h3>
                <p id=\"text-regle\">Le type de combat se déroule en 5 round</p>
            </div>
        </div>
        <div class=\"card-body\" id=\"card-bg\">
            <h3 id=\"h3-regle\">Règle 2</h3>
            <p id=\"text-regle\">Chaque  personnages à 3 actions par round attaque lourde, attaque légère ou défense</p>
        </div>
        <div class=\"card-body\" id=\"card-bg\">
            <h3 id=\"h3-regle\">Règle 3</h3>
            <p id=\"text-regle\">Chaque mouvement  contribue à des points que l'on perd</p>
        </div>
        <div class=\"card-body\" id=\"card-bg\">
            <h3 id=\"h3-regle\">Règle 4</h3>
            <p id=\"text-regle\">La stratégie est la meilleur des solutions pour gagner</p>
        </div>
        <div class=\"card-body\" id=\"card-bg\">
            <h3 id=\"h3-regle\">Règle 5</h3>
            <p id=\"text-regle\">A la fin des 5 rounds, celui qui à le moins de points de vie , perd.</p>
        </div>
        <br>
    </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "regle/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 10,  106 => 9,  87 => 7,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
{% endblock %}

{% block title %}Règle du jeu{% endblock %}

{% block body %}
<body id=\"body-regle\">
    <div id=\"containerBodyRegle\">
        <div id=\"regle\">
            <h2 id=\"h2-regle\">Règle du jeu</h2>
        </div>    
        <div class=\"card-regle\" id=\"card-regle\">
            <div class=\"card-body\" id=\"card-bg\">
                <h3 id=\"h3-regle\">Règle 1</h3>
                <p id=\"text-regle\">Le type de combat se déroule en 5 round</p>
            </div>
        </div>
        <div class=\"card-body\" id=\"card-bg\">
            <h3 id=\"h3-regle\">Règle 2</h3>
            <p id=\"text-regle\">Chaque  personnages à 3 actions par round attaque lourde, attaque légère ou défense</p>
        </div>
        <div class=\"card-body\" id=\"card-bg\">
            <h3 id=\"h3-regle\">Règle 3</h3>
            <p id=\"text-regle\">Chaque mouvement  contribue à des points que l'on perd</p>
        </div>
        <div class=\"card-body\" id=\"card-bg\">
            <h3 id=\"h3-regle\">Règle 4</h3>
            <p id=\"text-regle\">La stratégie est la meilleur des solutions pour gagner</p>
        </div>
        <div class=\"card-body\" id=\"card-bg\">
            <h3 id=\"h3-regle\">Règle 5</h3>
            <p id=\"text-regle\">A la fin des 5 rounds, celui qui à le moins de points de vie , perd.</p>
        </div>
        <br>
    </div>
</body>
{% endblock %}
", "regle/index.html.twig", "C:\\Users\\matho\\Desktop\\TheAgeOfSpirits\\templates\\regle\\index.html.twig");
    }
}
