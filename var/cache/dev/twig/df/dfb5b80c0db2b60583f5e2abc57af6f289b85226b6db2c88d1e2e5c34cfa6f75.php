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
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "flashBag", [], "any", false, false, false, 10), "all", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["type"] => $context["flash_messages"]) {
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 13
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th>Produit</th>
                    <th>prix</th>
                    <th>Quantité</th>
                    <th>Total</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 29
        if (0 === twig_compare(twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 29, $this->source); })())), 0)) {
            // line 30
            echo "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Panier est vide</td>
                    </tr>
                ";
        }
        // line 34
        echo "
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "                    <form  action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket.add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"  method=\"get\">
                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>

                        <td class=\"form-inline\">
                            ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42), "html", null, true);
            echo "&nbsp;
                            <input class=\"form-control\" type=\"number\" style=\"width: 25%\" max=\"99\" min=\"1\" name=\"qte\" onchange=\"this.form.submit()\"/>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket.remove", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
                                <i  class=\"fa fa-trash\"></i>
                            </a>
                        </td>

                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "calcTotalPrice", [], "any", false, false, false, 49), "html", null, true);
            echo " €</td>



                    </tr>
                    </form>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th colspan=\"3\" class=\"text-right\">Total Commande:</th>
                    <th>";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 61, $this->source); })()), "html", null, true);
        echo " </th>
                </tr>
                <tr>
                    <th colspan=\"5\" class=\"text-right\">
                        <p class=\"card-text\">
                            <a class=\"btn btn-primary\" role=\"button\"  href=\"";
        // line 66
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
        return array (  209 => 66,  201 => 61,  195 => 57,  181 => 49,  173 => 44,  168 => 42,  162 => 39,  158 => 38,  152 => 36,  148 => 35,  145 => 34,  139 => 30,  137 => 29,  123 => 17,  117 => 16,  108 => 13,  103 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BasketController!{% endblock %}

{% block body %}
    <div class=\"container mt-3\">

        <h2>Mon panier</h2>
        <div class=\"col-md-10\">
            {% for type, flash_messages in app.session.flashBag.all %}
                {% for msg in flash_messages %}
                    <div class=\"alert alert-{{ type }}\">
                        {{ msg }}
                    </div>
                {% endfor %}
            {% endfor %}

            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th>Produit</th>
                    <th>prix</th>
                    <th>Quantité</th>
                    <th>Total</th>

                </tr>
                </thead>
                <tbody>
                {% if  products | length == 0  %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Panier est vide</td>
                    </tr>
                {% endif %}

                {% for product in products  %}
                    <form  action=\"{{ path('basket.add',{\"id\": product.id}) }}\"  method=\"get\">
                    <tr>
                        <td>{{ product.nom }}</td>
                        <td>{{ product.prix }}</td>

                        <td class=\"form-inline\">
                            {{ product.quantity }}&nbsp;
                            <input class=\"form-control\" type=\"number\" style=\"width: 25%\" max=\"99\" min=\"1\" name=\"qte\" onchange=\"this.form.submit()\"/>
                            <a href=\"{{ path('basket.remove', {'id': product.id}) }}\">
                                <i  class=\"fa fa-trash\"></i>
                            </a>
                        </td>

                        <td>{{ product.calcTotalPrice }} €</td>



                    </tr>
                    </form>

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
