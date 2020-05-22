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

/* basket/index2.html.twig */
class __TwigTemplate_e519980dfae7b3008f9fdd3114f4a60ef6601192d4400d25b2022cbe587ec8e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/index2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "basket/index2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello BasketController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container mt-3\">

        <h2>Mon panier</h2>
        <div class=\"col-md-10\">

            <table class=\"table table-striped table-hover\" width=\"100%\">
                <thead>
                <tr>
                    <th>Références</th>
                    <th>Nom</th>
                    <th></th>
                    <th>Quantité</th>
                    <th>PrixUT</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Panier est vide</td>
                    </tr>

                    <form  action=\"\"  method=\"get\">
                        <tr>
                            <td></td>
                            <td></td>
                            <td>

                            </td>
                            <td class=\"form-inline\">

                                <input class=\"form-control\" type=\"number\" style=\"width: 30%\" max=\"99\" min=\"1\" name=\"qte\" onchange=\"this.form.submit()\"/>
                                &nbsp;<a href=\"#\"><i  class=\"fa fa-trash\"></i></a>
                            </td>
                            <td> €</td>
                            <td> €</td>
                        </tr>

                    </form>

                </tbody>
                <tfoot>
                <tr>
                    <th colspan=\"5\" class=\"text-right\">Total Commande:</th>
                    <th>  €</th>
                </tr>
                </tfoot>

            </table>
            <p class=\"card-text\">
                <a class=\"btn btn-primary\" role=\"button\"  href=\"#\">Vider le panier</a>
            </p>
        </div>
        <div class=\"col-md-4\"></div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "basket/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BasketController!{% endblock %}

{% block body %}

    <div class=\"container mt-3\">

        <h2>Mon panier</h2>
        <div class=\"col-md-10\">

            <table class=\"table table-striped table-hover\" width=\"100%\">
                <thead>
                <tr>
                    <th>Références</th>
                    <th>Nom</th>
                    <th></th>
                    <th>Quantité</th>
                    <th>PrixUT</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Panier est vide</td>
                    </tr>

                    <form  action=\"\"  method=\"get\">
                        <tr>
                            <td></td>
                            <td></td>
                            <td>

                            </td>
                            <td class=\"form-inline\">

                                <input class=\"form-control\" type=\"number\" style=\"width: 30%\" max=\"99\" min=\"1\" name=\"qte\" onchange=\"this.form.submit()\"/>
                                &nbsp;<a href=\"#\"><i  class=\"fa fa-trash\"></i></a>
                            </td>
                            <td> €</td>
                            <td> €</td>
                        </tr>

                    </form>

                </tbody>
                <tfoot>
                <tr>
                    <th colspan=\"5\" class=\"text-right\">Total Commande:</th>
                    <th>  €</th>
                </tr>
                </tfoot>

            </table>
            <p class=\"card-text\">
                <a class=\"btn btn-primary\" role=\"button\"  href=\"#\">Vider le panier</a>
            </p>
        </div>
        <div class=\"col-md-4\"></div>
    </div>

{% endblock %}
", "basket/index2.html.twig", "/opt/lampp/htdocs/BasketProduct/templates/basket/index2.html.twig");
    }
}
