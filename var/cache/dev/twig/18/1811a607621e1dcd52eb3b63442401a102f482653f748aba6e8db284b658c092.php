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

/* contact/index.html.twig */
class __TwigTemplate_7fcf5a39042998995b8ba696a4a2d0b3cdfd1333a13253804ba694da17afc091 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MegaCasting - Contact";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
      aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"castings.php\" id=\"navbarDropdown\" role=\"button\"
            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Castings
          </a>
          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
        echo "\">Tout les castings</a>
            <a class=\"dropdown-item\" href=\"#Film\">Cinema</a>
            <a class=\"dropdown-item\" href=\"#\">Musique</a>
            <a class=\"dropdown-item\" href=\"#\">Théatre</a>
            <a class=\"dropdown-item\" href=\"#\">Danse</a>
          </div>
        </li>
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Contact<span class=\"sr-only\">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class=\"container-fluid\">
    <div class=\"container-nav\">
      <div class=\"p-t-31 p-b-9 form-search\">
        <div class=\"input-group mb-3\">
          <h1 class=\"contact-title\">Contactez nous</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Bloc 1 -->
  <div class=\"container contact-bloc mt-5 mb-5\">
    <div class=\"contact-bloc-1\">
      <i class=\"fas fa-map-marked-alt icon mb-5\"></i>
      <p class=\"mb-0 mt-3\">Institut d'Informatique Appliquée</p>
      <p>5 Boulevard de l'Industrie, Saint-Berthevin</p>
    </div>
    <div class=\"contact-bloc-2\">
      <i class=\"fas fa-phone icon mb-5\"></i>
      <p class=\"mb-0 mt-3\">06.19.50.61.13</p>
      <p>07.82.02.09.17</p>
    </div>
    <div class=\"contact-bloc-3\">
      <i class=\"fas fa-at icon mb-5\"></i>
      <p class=\"mb-0 mt-3\">m.gasseau@iia-laval.fr</p>
      <p>t.lequipe@iia-laval.fr</p>
    </div>
  </div>

    <footer>
      <div class=\"card text-center\">
        <div class=\"card-header\">
          <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\">
          <h5 class=\"card-title\">©Théo LEQUIPE - Matéo GASSEAU</h5>
          <p class=\"card-text\">MegaCasting est un outil pour le projet de BTS SIO Option SLAM.</p>
        </div>
      </div>
    </footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 71,  100 => 26,  89 => 18,  77 => 9,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MegaCasting - Contact{% endblock %}


{% block body %}

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <img src=\"{{ asset('img/Logo.png') }}\" alt=\"Logo\" class=\"logo\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
      aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path(\"home\") }}\">Accueil</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"castings.php\" id=\"navbarDropdown\" role=\"button\"
            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Castings
          </a>
          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <a class=\"dropdown-item\" href=\"{{ path(\"offer\") }}\">Tout les castings</a>
            <a class=\"dropdown-item\" href=\"#Film\">Cinema</a>
            <a class=\"dropdown-item\" href=\"#\">Musique</a>
            <a class=\"dropdown-item\" href=\"#\">Théatre</a>
            <a class=\"dropdown-item\" href=\"#\">Danse</a>
          </div>
        </li>
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Contact<span class=\"sr-only\">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class=\"container-fluid\">
    <div class=\"container-nav\">
      <div class=\"p-t-31 p-b-9 form-search\">
        <div class=\"input-group mb-3\">
          <h1 class=\"contact-title\">Contactez nous</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Bloc 1 -->
  <div class=\"container contact-bloc mt-5 mb-5\">
    <div class=\"contact-bloc-1\">
      <i class=\"fas fa-map-marked-alt icon mb-5\"></i>
      <p class=\"mb-0 mt-3\">Institut d'Informatique Appliquée</p>
      <p>5 Boulevard de l'Industrie, Saint-Berthevin</p>
    </div>
    <div class=\"contact-bloc-2\">
      <i class=\"fas fa-phone icon mb-5\"></i>
      <p class=\"mb-0 mt-3\">06.19.50.61.13</p>
      <p>07.82.02.09.17</p>
    </div>
    <div class=\"contact-bloc-3\">
      <i class=\"fas fa-at icon mb-5\"></i>
      <p class=\"mb-0 mt-3\">m.gasseau@iia-laval.fr</p>
      <p>t.lequipe@iia-laval.fr</p>
    </div>
  </div>

    <footer>
      <div class=\"card text-center\">
        <div class=\"card-header\">
          <img src=\"{{ asset('img/Logo.png') }}\" alt=\"Logo\" class=\"logo\">
          <h5 class=\"card-title\">©Théo LEQUIPE - Matéo GASSEAU</h5>
          <p class=\"card-text\">MegaCasting est un outil pour le projet de BTS SIO Option SLAM.</p>
        </div>
      </div>
    </footer>

{% endblock %}", "contact/index.html.twig", "C:\\Users\\tete-\\Desktop\\MegaCasting\\MegaCasting-Symfo\\templates\\contact\\index.html.twig");
    }
}
