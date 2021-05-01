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

/* offer/index.html.twig */
class __TwigTemplate_67867ca03ebaa18ec14050a021aede4c1e31259e6c74f421eb7ff7e3c698b0df extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offer/index.html.twig", 1);
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
        echo "  <div class=\"container-fluid\">
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

  ";
        // line 20
        echo "
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-1\">
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
              <div class=\"col-8\">
                  Les annonces
                  ";
        // line 53
        echo "              </div>
          </div>
      </div>

    ";
        // line 76
        echo "
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "offer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 76,  106 => 53,  87 => 20,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MegaCasting - Castings{% endblock %}


{% block body %}
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

  {# <div class=\"container d-flex justify-content-around flex-wrap mt-3 mb-3\"> #}

      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-1\">
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
              <div class=\"col-8\">
                  Les annonces
                  {#
                  {% for offer in offers %}
                <div class=\"card\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src=\" {{ asset(\"img/film-production.jpg\") }}\" alt=\"Image casting film\">
                    <div id=\"Film\" class=\"card-body\">
                        <h5 class=\"card-title\">{{ offer.name }}</h5>
                        <p class=\"card-text\">{{ offer.jobdescription }}</p>
                        <p class=\"card-text font-weight-bold\">Publier le : {{ offer.publishdatetime|date(\"d/m/Y\") }}</p>
                        <p class=\"card-text font-weight-bold\">Commence le : {{ offer.startcontractdate|date(\"d/m/Y\") }}</p>
                        <p class=\"card-text font-weight-bold\">Poste à pourvoir : {{ offer.postcount}}</p>

                        <a href=\"#\" class=\"btn btn-postuler\">Postuler</a>
                    </div>
                </div>
            {% endfor %}
                  #}
              </div>
          </div>
      </div>

    {# <div class=\"card\" style=\"width: 18rem;\">
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
    </div> #}

  </div>

{% endblock %}
", "offer/index.html.twig", "E:\\GitHub\\MegaCasting-Web\\templates\\offer\\index.html.twig");
    }
}
