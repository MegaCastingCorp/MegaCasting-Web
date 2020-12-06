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

/* signin/index.html.twig */
class __TwigTemplate_56d019e754561e3cf664ef27808e41f21c5beaf1dd02a0b76d84b790f75e43c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "signin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MegaCasting - Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t<link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/animate/animate.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/util.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    
  <div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\">
\t\t\t\t<div class=\"login100-pic\">
\t\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" alt=\"IMG\">
\t\t\t\t</div>

\t\t\t\t<form class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\tInscription
\t\t\t\t\t</span>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Nom requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"text\" placeholder=\"Nom\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Prénom requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"text\" placeholder=\"Prenom\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Email valide requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Mot de passe est requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Mot de passe\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Mot de passe est requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Comfirmation mot de passe\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

                    <div class=\"form-check\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"client\" id=\"client\" value=\"client\">
                          <label class=\"form-check-label\" for=\"client\">
                            Client
                          </label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"producteur\" id=\"producteur\" value=\"producer\">
                          <label class=\"form-check-label\" for=\"producteur\">
                            Produteur
                          </label>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-12\">
\t\t\t\t\t\t<a class=\"txt2\" href=\"#\">
\t\t\t\t\t\t\tNom d'utilisateur / Mot de passe ?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-136\">
\t\t\t\t\t\t<a class=\"txt2\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        echo "\">
\t\t\t\t\t\t\tPas encore de compte ?
\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

    ";
        // line 107
        $this->displayBlock('script', $context, $blocks);
        // line 114
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 108
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
\t</script>
\t<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "signin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 112,  243 => 110,  239 => 109,  234 => 108,  227 => 107,  219 => 114,  217 => 107,  204 => 97,  127 => 23,  120 => 18,  113 => 17,  104 => 13,  100 => 12,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  80 => 7,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MegaCasting - Inscription{% endblock %}

    {% block stylesheets %}
\t<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/favicon.ico') }}\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('vendor/animate/animate.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('vendor/select2/select2.min.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/util.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/main.css') }}\">
    {% endblock %}


{% block body %}
    
  <div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\">
\t\t\t\t<div class=\"login100-pic\">
\t\t\t\t\t<img src=\"{{ asset('img/Logo.png') }}\" alt=\"IMG\">
\t\t\t\t</div>

\t\t\t\t<form class=\"login100-form validate-form\">
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\tInscription
\t\t\t\t\t</span>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Nom requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"text\" placeholder=\"Nom\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Prénom requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"text\" placeholder=\"Prenom\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Email valide requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Mot de passe est requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Mot de passe\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Mot de passe est requis\">
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\" placeholder=\"Comfirmation mot de passe\">
\t\t\t\t\t\t<span class=\"focus-input100\"></span>
\t\t\t\t\t\t<span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

                    <div class=\"form-check\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"client\" id=\"client\" value=\"client\">
                          <label class=\"form-check-label\" for=\"client\">
                            Client
                          </label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"producteur\" id=\"producteur\" value=\"producer\">
                          <label class=\"form-check-label\" for=\"producteur\">
                            Produteur
                          </label>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-12\">
\t\t\t\t\t\t<a class=\"txt2\" href=\"#\">
\t\t\t\t\t\t\tNom d'utilisateur / Mot de passe ?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-136\">
\t\t\t\t\t\t<a class=\"txt2\" href=\"{{ path(\"signin\")}}\">
\t\t\t\t\t\t\tPas encore de compte ?
\t\t\t\t\t\t\t<i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

    {% block script %}
\t<script src=\"{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
\t<script src=\"{{ asset('vendor/bootstrap/js/popper.js') }}\"></script>
\t<script src=\"{{ asset('vendor/select2/select2.min.js') }}\"></script>
\t</script>
\t<script src=\"{{ asset('js/main.js') }}\"></script>
    {% endblock %}

{% endblock %}
", "signin/index.html.twig", "C:\\Users\\tete-\\Desktop\\MegaCasting\\MegaCasting-Symfo\\templates\\signin\\index.html.twig");
    }
}
