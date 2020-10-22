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

/* css/index.css */
class __TwigTemplate_f4a59e81ca120f4e892e7b15b0acfb6b070552075307d2c3649b30e943e2d750 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/index.css"));

        // line 1
        echo "/* Container pour toutes les pages */
.container-fluid {
    background-image: url(../img/font.jpg);
    background-size: cover;
    height: 450px;
}

/* .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 450px;
} */

.btn-search {
    background-color: #23b5b5;
    width: 50px;
}

.form-search {
    width: 600px;
}

/* CSS Logo barre de navigation */
.logo {
    margin-top: 10px;
    margin-bottom: 10px;
    padding-right: 15px;
    width: 140px;
}

.parasearch {
    font-family: Montserrat-SemiBold;
    font-size: 16px;
    color: white;
    line-height: 1.5;
}

/* Page Contact */
.contact-title {
    color: rgb(255, 255, 255);
    margin: 0 auto;
}

.contact-title:after{
    content: \"\";
    border-bottom: 5px solid white;
    width: 4rem;
    display: block;
    margin: auto;
    margin-top: 5px;
}

.contact-bloc {
    display: flex;
    align-items: center;
}

.contact-bloc-1 {
    margin-right: 10px;
    text-align: center;
    width: 33%;
}

.contact-bloc-2 {
    margin-right: 10px;
    text-align: center;
    width: 33%;
}

.contact-bloc-3 {
    margin-right: 10px;
    text-align: center;
    width: 33%;
}

.icon {
    color: #23b5b5;
    font-size: 45px;
}



/* Page des castings */
.card {
    margin-top: 10px;
}

.btn-postuler {
    color: #23b5b5;
}


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/index.css";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* Container pour toutes les pages */
.container-fluid {
    background-image: url(../img/font.jpg);
    background-size: cover;
    height: 450px;
}

/* .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 450px;
} */

.btn-search {
    background-color: #23b5b5;
    width: 50px;
}

.form-search {
    width: 600px;
}

/* CSS Logo barre de navigation */
.logo {
    margin-top: 10px;
    margin-bottom: 10px;
    padding-right: 15px;
    width: 140px;
}

.parasearch {
    font-family: Montserrat-SemiBold;
    font-size: 16px;
    color: white;
    line-height: 1.5;
}

/* Page Contact */
.contact-title {
    color: rgb(255, 255, 255);
    margin: 0 auto;
}

.contact-title:after{
    content: \"\";
    border-bottom: 5px solid white;
    width: 4rem;
    display: block;
    margin: auto;
    margin-top: 5px;
}

.contact-bloc {
    display: flex;
    align-items: center;
}

.contact-bloc-1 {
    margin-right: 10px;
    text-align: center;
    width: 33%;
}

.contact-bloc-2 {
    margin-right: 10px;
    text-align: center;
    width: 33%;
}

.contact-bloc-3 {
    margin-right: 10px;
    text-align: center;
    width: 33%;
}

.icon {
    color: #23b5b5;
    font-size: 45px;
}



/* Page des castings */
.card {
    margin-top: 10px;
}

.btn-postuler {
    color: #23b5b5;
}


", "css/index.css", "C:\\Users\\Matéo\\Documents\\MegaCasting-Web\\templates\\css\\index.css");
    }
}
