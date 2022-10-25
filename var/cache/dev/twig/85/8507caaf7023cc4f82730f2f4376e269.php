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

/* partials/_footer.html.twig */
class __TwigTemplate_cd94a0bff10b007bcad01cd1ab5935c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 1
        echo "<!--Footer-->
<footer>
    <div id=\"container-footer\">
        <div id=\"logo_footer\">
          <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/LOGOwhite.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"200\"></a></div>
        </div>
        <div id=\"nav-footer\">
          <ul id=\"navbar\">
              <li id=\"active\"><a href=\"#\">Accueil</a></li>
              <li><a href=\"#\">Règle du jeux</a></li>
              <li><a href=\"#\">News</a></li>
              <li><a href=\"#\">Contact</a></li>
              <li><a href=\"#\">Statistiques du site</a></li>
              <li><a href=\"#\">Admin</a></li>
      </ul>
  </div>
        </div>
  </div>
  <div id=\"copyright\">
      <p id=\"copy\" style=\"font-family: 'MedievalSharp', cursive;\">© 2021-2022 SAFIR NEZZAR - REMY GLEVEAU - LATGE JESSICA</p>
  </div>

</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Footer-->
<footer>
    <div id=\"container-footer\">
        <div id=\"logo_footer\">
          <img src=\"{{asset('images/logo/LOGOwhite.png')}}\" alt=\"logo\" width=\"200\"></a></div>
        </div>
        <div id=\"nav-footer\">
          <ul id=\"navbar\">
              <li id=\"active\"><a href=\"#\">Accueil</a></li>
              <li><a href=\"#\">Règle du jeux</a></li>
              <li><a href=\"#\">News</a></li>
              <li><a href=\"#\">Contact</a></li>
              <li><a href=\"#\">Statistiques du site</a></li>
              <li><a href=\"#\">Admin</a></li>
      </ul>
  </div>
        </div>
  </div>
  <div id=\"copyright\">
      <p id=\"copy\" style=\"font-family: 'MedievalSharp', cursive;\">© 2021-2022 SAFIR NEZZAR - REMY GLEVEAU - LATGE JESSICA</p>
  </div>

</footer>
", "partials/_footer.html.twig", "C:\\Users\\matho\\Desktop\\TheAgeOfSpirits\\templates\\partials\\_footer.html.twig");
    }
}
