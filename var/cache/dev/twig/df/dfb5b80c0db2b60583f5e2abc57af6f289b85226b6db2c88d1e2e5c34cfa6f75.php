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

/* basket/index.html.twig */
class __TwigTemplate_9dafa68564eb3f4e98834cd39372be94b15c05819eda477573f135641ac83cef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "basket/index.html.twig", 1);
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
        echo "    <div class=\"container mt-3\">

        <h2>Mon panier</h2>
        <div class=\"col-md-10\">

            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th>Produit</th>
                    <th>prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>sup</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        if (0 === twig_compare(twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 22, $this->source); })())), 0)) {
            // line 23
            echo "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Panier est vide</td>
                    </tr>
                ";
        }
        // line 27
        echo "
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "
                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "calcTotalPrice", [], "any", false, false, false, 34), "html", null, true);
            echo " €</td>

                        <td class=\"form-inline\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket.remove", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">
                                <i  class=\"fa fa-trash\"></i>
                            </a>
                        </td>

                    </tr>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th colspan=\"3\" class=\"text-right\">Total Commande:</th>
                    <th>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " </th>
                </tr>
                <tr>
                    <th colspan=\"5\" class=\"text-right\">
                        <p class=\"card-text\">
                            <a class=\"btn btn-primary\" role=\"button\"  href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket.clear");
        echo "\">Vider le panier</a>
                        </p>
                    </th>

                </tr>
                </tfoot>

            </table>

        </div>
        <div class=\"col-md-4\"></div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "basket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 55,  164 => 50,  158 => 46,  143 => 37,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  121 => 29,  117 => 28,  114 => 27,  108 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BasketController!{% endblock %}

{% block body %}
    <div class=\"container mt-3\">

        <h2>Mon panier</h2>
        <div class=\"col-md-10\">

            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th>Produit</th>
                    <th>prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>sup</th>
                </tr>
                </thead>
                <tbody>
                {% if  products | length == 0  %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Panier est vide</td>
                    </tr>
                {% endif %}

                {% for product in products  %}

                    <tr>
                        <td>{{ product.nom }}</td>
                        <td>{{ product.prix }}</td>
                        <td>{{ product.quantity }}</td>
                        <td>{{ product.calcTotalPrice }} €</td>

                        <td class=\"form-inline\">
                            <a href=\"{{ path('basket.remove', {'id': product.id}) }}\">
                                <i  class=\"fa fa-trash\"></i>
                            </a>
                        </td>

                    </tr>


                {% endfor %}
                </tbody>
                <tfoot>
                <tr>
                    <th colspan=\"3\" class=\"text-right\">Total Commande:</th>
                    <th>{{ totalPrice }} </th>
                </tr>
                <tr>
                    <th colspan=\"5\" class=\"text-right\">
                        <p class=\"card-text\">
                            <a class=\"btn btn-primary\" role=\"button\"  href=\"{{ path('basket.clear') }}\">Vider le panier</a>
                        </p>
                    </th>

                </tr>
                </tfoot>

            </table>

        </div>
        <div class=\"col-md-4\"></div>
    </div>


{% endblock %}
", "basket/index.html.twig", "/opt/lampp/htdocs/BasketProduct/templates/basket/index.html.twig");
    }
}
