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

/* appUnity/index.html */
class __TwigTemplate_12557dbfe806ad5c50a802f13fbc5fd9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appUnity/index.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appUnity/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-us\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <title>TheageOfSpirits</title>
    <!-- <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/TemplateData/favicon.ico"), "html", null, true);
        echo "\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/TemplateData/style.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/TemplateData/UnityProgress.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Build/UnityLoader.js"), "html", null, true);
        echo "\"></script>
    <script>
      var unityInstance = UnityLoader.instantiate(\"unityContainer\", \"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Build/appUnity.json"), "html", null, true);
        echo "\", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class=\"webgl-content\">
      <div id=\"unityContainer\" style=\"width: 960px; height: 600px\"></div>
      <div class=\"footer\">
        <!-- <div class=\"webgl-logo\"></div> -->
        <div class=\"fullscreen\" onclick=\"unityInstance.SetFullscreen(1)\"></div>
        <!-- <div class=\"title\">TheageOfSpirits</div> -->
      </div>
    </div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "appUnity/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-us\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <title>TheageOfSpirits</title>
    <!-- <link rel=\"shortcut icon\" href=\"{{asset('images/TemplateData/favicon.ico')}}\"> -->
    <link rel=\"stylesheet\" href=\"{{asset('images/TemplateData/style.css')}}\">
    <script src=\"{{asset('images/TemplateData/UnityProgress.js')}}\"></script>
    <script src=\"{{asset('js/Build/UnityLoader.js')}}\"></script>
    <script>
      var unityInstance = UnityLoader.instantiate(\"unityContainer\", \"{{asset('js/Build/appUnity.json')}}\", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class=\"webgl-content\">
      <div id=\"unityContainer\" style=\"width: 960px; height: 600px\"></div>
      <div class=\"footer\">
        <!-- <div class=\"webgl-logo\"></div> -->
        <div class=\"fullscreen\" onclick=\"unityInstance.SetFullscreen(1)\"></div>
        <!-- <div class=\"title\">TheageOfSpirits</div> -->
      </div>
    </div>
  </body>
</html>
", "appUnity/index.html", "C:\\Users\\matho\\Desktop\\TheAgeOfSpirits\\templates\\appUnity\\index.html");
    }
}
