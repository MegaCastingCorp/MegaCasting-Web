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

/* home/index.html.twig */
class __TwigTemplate_8201456fd4f9405340eb0b6d423021f2ab2c1dbe376743fd12639fcb3b980df0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MegaCasting - Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
      aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Accueil<span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"view-castings.php\" id=\"navbarDropdown\" role=\"button\"
            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Castings
          </a>
          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <a class=\"dropdown-item\" href=\"view-castings.php\">Tout les castings</a>
            <a class=\"dropdown-item\" href=\"#Film\">Cinema</a>
            <a class=\"dropdown-item\" href=\"#\">Musique</a>
            <a class=\"dropdown-item\" href=\"#\">Théatre</a>
            <a class=\"dropdown-item\" href=\"#\">Danse</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"contact.html\">Contact</a>
        </li>
      </ul>
      <a href=\"view-login.php\">
        <button type=\"button\" type=\"submit\" style=\"color: white;\" class=\"btn btn-info\">
          Connexion / Inscription
        </button>
      </a>
    </div>
  </nav>
  <div class=\"container-fluid\">
    <div class=\"container-nav\">
      <div class=\"p-t-31 p-b-9 form-search\">
        <div class=\"input-group mb-3\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un casting\" aria-label=\"Rechercher un casting\"
            aria-describedby=\"button-addon2\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-search\" type=\"button\" id=\"button-addon2\"><i class=\"fas fa-search\"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div style=\"height: 400px\" class=\"container d-flex flex-wrap mt-5\">
      <h1 class=\"mb-3\">MegaCasting</h1>
      <p>
        Parce que le milieu artistique est un monde qui compte beaucoup d'abus, MegaProduction
        à créer un site Internet de castings « MegaCasting » qui serait à la fois clair,
        professionnel et digne de confiance.
      </p>
      <p>
        C'est pour cette raison que MegaCastings
        s’engage à être au contraire actifs et
        réactifs en permanence dans leur
        recherche de castings auprès d’un réseau
        de partenaires ; c'est également pour cette
        raison que MegaCastings vérifiera systématiquement les informations des
        professionnels souhaitant publier des
        castings en les contactant par téléphone
        afin de garantir le sérieux des annonces.
      </p>
      <p>
        MegaCastings se veut être un point de rencontre entre professionnels à la recherche de
        nouveaux talents et artistes désireux de faire leur entrée dans le monde du spectacle.
        Le business model de MegaCastings repose sur la facturation des diffusions des offres de
        casting. Plusieurs systèmes de packs existent (pack 10 castings, pack 100 castings, pack
        illimité et pack sur mesure). Pour information, une offre peut coûter jusqu’à 500€ pour 30
        jours de diffusions.
      </p>
    </div>
    <footer>
      <div class=\"card text-center\">
        <div class=\"card-header\">
          <img src=\"../assets/img/Logo.png\" alt=\"Logo\" class=\"logo\">
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MegaCasting - Accueil{% endblock %}

{% block body %}
 <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <img src=\"{{ asset('img/Logo.png') }}\" alt=\"Logo\" class=\"logo\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
      aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Accueil<span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"view-castings.php\" id=\"navbarDropdown\" role=\"button\"
            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Castings
          </a>
          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <a class=\"dropdown-item\" href=\"view-castings.php\">Tout les castings</a>
            <a class=\"dropdown-item\" href=\"#Film\">Cinema</a>
            <a class=\"dropdown-item\" href=\"#\">Musique</a>
            <a class=\"dropdown-item\" href=\"#\">Théatre</a>
            <a class=\"dropdown-item\" href=\"#\">Danse</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"contact.html\">Contact</a>
        </li>
      </ul>
      <a href=\"view-login.php\">
        <button type=\"button\" type=\"submit\" style=\"color: white;\" class=\"btn btn-info\">
          Connexion / Inscription
        </button>
      </a>
    </div>
  </nav>
  <div class=\"container-fluid\">
    <div class=\"container-nav\">
      <div class=\"p-t-31 p-b-9 form-search\">
        <div class=\"input-group mb-3\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un casting\" aria-label=\"Rechercher un casting\"
            aria-describedby=\"button-addon2\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-search\" type=\"button\" id=\"button-addon2\"><i class=\"fas fa-search\"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div style=\"height: 400px\" class=\"container d-flex flex-wrap mt-5\">
      <h1 class=\"mb-3\">MegaCasting</h1>
      <p>
        Parce que le milieu artistique est un monde qui compte beaucoup d'abus, MegaProduction
        à créer un site Internet de castings « MegaCasting » qui serait à la fois clair,
        professionnel et digne de confiance.
      </p>
      <p>
        C'est pour cette raison que MegaCastings
        s’engage à être au contraire actifs et
        réactifs en permanence dans leur
        recherche de castings auprès d’un réseau
        de partenaires ; c'est également pour cette
        raison que MegaCastings vérifiera systématiquement les informations des
        professionnels souhaitant publier des
        castings en les contactant par téléphone
        afin de garantir le sérieux des annonces.
      </p>
      <p>
        MegaCastings se veut être un point de rencontre entre professionnels à la recherche de
        nouveaux talents et artistes désireux de faire leur entrée dans le monde du spectacle.
        Le business model de MegaCastings repose sur la facturation des diffusions des offres de
        casting. Plusieurs systèmes de packs existent (pack 10 castings, pack 100 castings, pack
        illimité et pack sur mesure). Pour information, une offre peut coûter jusqu’à 500€ pour 30
        jours de diffusions.
      </p>
    </div>
    <footer>
      <div class=\"card text-center\">
        <div class=\"card-header\">
          <img src=\"../assets/img/Logo.png\" alt=\"Logo\" class=\"logo\">
          <h5 class=\"card-title\">©Théo LEQUIPE - Matéo GASSEAU</h5>
          <p class=\"card-text\">MegaCasting est un outil pour le projet de BTS SIO Option SLAM.</p>
        </div>
      </div>
    </footer>

{% endblock %}
", "home/index.html.twig", "C:\\Users\\Matéo\\Documents\\MegaCasting-Web\\templates\\home\\index.html.twig");
    }
}
