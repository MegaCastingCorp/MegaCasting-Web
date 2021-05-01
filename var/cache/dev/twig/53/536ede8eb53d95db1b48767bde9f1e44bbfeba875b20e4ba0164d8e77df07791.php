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
class __TwigTemplate_e301d6bc88419fe3c10d4cb24c2e25f7839d8e28d5da1ca66b4ddc0fe9756709 extends Template
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
        echo "  <div class=\"container-fluid\">
    <div class=\"container-nav\">
      <div class=\"p-t-31 p-b-9 form-search\">
        <div class=\"input-group mb-3\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un casting\" aria-label=\"Rechercher un casting\"
            aria-describedby=\"button-addon2\">
          <div class=\"input-group-append\">
            <button type=\"button\" type=\"submit\" style=\"color: white;\" class=\"btn btn-search\"><i class=\"fas fa-search\"></i></button>
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
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MegaCasting - Accueil{% endblock %}

{% block body %}
  <div class=\"container-fluid\">
    <div class=\"container-nav\">
      <div class=\"p-t-31 p-b-9 form-search\">
        <div class=\"input-group mb-3\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un casting\" aria-label=\"Rechercher un casting\"
            aria-describedby=\"button-addon2\">
          <div class=\"input-group-append\">
            <button type=\"button\" type=\"submit\" style=\"color: white;\" class=\"btn btn-search\"><i class=\"fas fa-search\"></i></button>
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

{% endblock %}
", "home/index.html.twig", "E:\\GitHub\\MegaCasting-Web\\templates\\home\\index.html.twig");
    }
}
