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

/* casting/index.html.twig */
class __TwigTemplate_63a0e1514ad050ed0fe3f0cb13fb03497a0555d1f1411eda01866fc13f1c8698 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "casting/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "casting/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MegaCasting - Castings";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <img src=\"";
        // line 8
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
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
        </li>
        <li class=\"nav-item active dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"view-castings.php\" id=\"navbarDropdown\" role=\"button\"
            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
            Castings<span class=\"sr-only\">(current)</span>
          </a>
          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"#\">Tout les castings</a>
            <a class=\"dropdown-item\" href=\"#Film\">Cinema</a>
            <a class=\"dropdown-item\" href=\"#\">Musique</a>
            <a class=\"dropdown-item\" href=\"#\">Théatre</a>
            <a class=\"dropdown-item\" href=\"#\">Danse</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
        </li>
      </ul>
        <a href=\"view-login.php\">
        <button type=\"button\" type=\"submit\" style=\"color: white;\" class=\"btn btn-login\">
          Connexion / Inscription
        </button>
      </a>
    </div>
  </nav>
  
  <div class=\"container-fluid\">
    <div class=\"container-nav\">
      <div class=\"p-t-31 p-b-9 form-search\">
        <div class=\"input-group mb-3\">
          <h1 class=\"contact-title\">
            Castings
          </h1>
        </div>
      </div>
    </div>
  </div>

  <div class=\"container\">
   <div class=\"dropdown\">
      <button class=\"btn btn-secondary dropdown-toggle mt-3\" type=\"button\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Catégories
      </button>
      <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu2\">
        <button class=\"dropdown-item\" type=\"button\">Action</button>
        <button class=\"dropdown-item\" type=\"button\">Another action</button>
        <button class=\"dropdown-item\" type=\"button\">Something else here</button>
      </div>
    </div>
  </div>

  <div class=\"container d-flex justify-content-around flex-wrap mt-3 mb-3\">  

    <div class=\"card\" style=\"width: 18rem;\">
    <img class=\"card-img-top\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/film-production.jpg"), "html", null, true);
        echo "\" alt=\"Image casting film\">
    <div id=\"Film\" class=\"card-body\">
      <h5 class=\"card-title\">Casting Film</h5>
      <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href=\"#\" class=\"btn btn-postuler\">Postuler
      </a>
    </div>
    </div>

    <div class=\"card\" style=\"width: 18rem;\">
    <img class=\"card-img-top\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/studio.jpg"), "html", null, true);
        echo "\" alt=\"Image casting musique\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">Casting Musique</h5>
      <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href=\"#\" class=\"btn btn-postuler\">Postuler
      </a>
    </div>
    </div>

    <div class=\"card\" style=\"width: 18rem;\">
    <img class=\"card-img-top\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/theatre.jpg"), "html", null, true);
        echo "\" alt=\"Image casting theatre\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">Casting Théatre</h5>
      <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href=\"#\" class=\"btn btn-postuler\">Postuler
      </a>
    </div>
    </div>

  </div>

    <footer>
      <div class=\"card text-center\">
        <div class=\"card-header\">
          <img src=\"";
        // line 106
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
        return "casting/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 106,  175 => 92,  162 => 82,  149 => 72,  107 => 33,  88 => 17,  76 => 8,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MegaCasting - Castings{% endblock %}


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
        <li class=\"nav-item active dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"view-castings.php\" id=\"navbarDropdown\" role=\"button\"
            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
            Castings<span class=\"sr-only\">(current)</span>
          </a>
          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"#\">Tout les castings</a>
            <a class=\"dropdown-item\" href=\"#Film\">Cinema</a>
            <a class=\"dropdown-item\" href=\"#\">Musique</a>
            <a class=\"dropdown-item\" href=\"#\">Théatre</a>
            <a class=\"dropdown-item\" href=\"#\">Danse</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path(\"contact\") }}\">Contact</a>
        </li>
      </ul>
        <a href=\"view-login.php\">
        <button type=\"button\" type=\"submit\" style=\"color: white;\" class=\"btn btn-login\">
          Connexion / Inscription
        </button>
      </a>
    </div>
  </nav>
  
  <div class=\"container-fluid\">
    <div class=\"container-nav\">
      <div class=\"p-t-31 p-b-9 form-search\">
        <div class=\"input-group mb-3\">
          <h1 class=\"contact-title\">
            Castings
          </h1>
        </div>
      </div>
    </div>
  </div>

  <div class=\"container\">
   <div class=\"dropdown\">
      <button class=\"btn btn-secondary dropdown-toggle mt-3\" type=\"button\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Catégories
      </button>
      <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu2\">
        <button class=\"dropdown-item\" type=\"button\">Action</button>
        <button class=\"dropdown-item\" type=\"button\">Another action</button>
        <button class=\"dropdown-item\" type=\"button\">Something else here</button>
      </div>
    </div>
  </div>

  <div class=\"container d-flex justify-content-around flex-wrap mt-3 mb-3\">  

    <div class=\"card\" style=\"width: 18rem;\">
    <img class=\"card-img-top\" src=\"{{ asset(\"img/film-production.jpg\") }}\" alt=\"Image casting film\">
    <div id=\"Film\" class=\"card-body\">
      <h5 class=\"card-title\">Casting Film</h5>
      <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href=\"#\" class=\"btn btn-postuler\">Postuler
      </a>
    </div>
    </div>

    <div class=\"card\" style=\"width: 18rem;\">
    <img class=\"card-img-top\" src=\"{{ asset(\"img/studio.jpg\") }}\" alt=\"Image casting musique\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">Casting Musique</h5>
      <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href=\"#\" class=\"btn btn-postuler\">Postuler
      </a>
    </div>
    </div>

    <div class=\"card\" style=\"width: 18rem;\">
    <img class=\"card-img-top\" src=\"{{ asset(\"img/theatre.jpg\") }}\" alt=\"Image casting theatre\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">Casting Théatre</h5>
      <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href=\"#\" class=\"btn btn-postuler\">Postuler
      </a>
    </div>
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

{% endblock %}
", "casting/index.html.twig", "C:\\Users\\Matéo\\Documents\\MegaCasting-Web\\templates\\casting\\index.html.twig");
    }
}
