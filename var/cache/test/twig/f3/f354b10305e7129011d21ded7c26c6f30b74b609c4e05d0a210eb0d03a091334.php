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

/* product/index.html.twig */
class __TwigTemplate_fecf7faf8e02b5a35e02ff40e5e44c2484618eaa444a40a90ce8909a8339eaa7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        echo "Product";
        
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

    <div class=\"container mt-4\">
        <h3>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product Catalog", [], "messages");
        echo "</h3>
        <p class=\"card-text\">
            <a class=\"btn btn-primary\" role=\"button\"  href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.export.json");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export json products", [], "messages");
        echo "</a>
        </p>

        <p class=\"card-text\">
            <a class=\"btn btn-primary\" role=\"button\"  href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.export.csv");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export CSV products", [], "messages");
        echo "</a>
        </p>

        <div class=\"row flex\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "                <div class=\"col-3\">
                    <div class=\"car text-center\" >
                        <div style=\"border-style: groove;background-color: white\" >
                            ";
            // line 24
            echo "                            <div id=\"easyadmin-lightbox-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                                ";
            // line 26
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["product"], "imageFile"), "html", null, true);
            echo "\" class=\"image-style\"  height=\"200\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"card-body\" style=\"background-color: #F5F5F5\">
                                <h5 class=\"card-title\">
                                    <a id=\"produits\" href=\"#\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</a>
                                </h5>
                                <p class=\"card-text\">
                                    ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "
                                </p>
                                <div class=\"text-danger\" >";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 35), "html", null, true);
            echo " €</div>
                                <p class=\"card-text\">
                                    <a class=\"btn btn-primary\" role=\"button\"  href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 37), "id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Details...</a>
                                </p>
                            </div>
                        </div>
                    </div></br>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            <div class=\"navigation navigator-center\">
                ";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 45, $this->source); })()));
        echo "
            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 45,  169 => 44,  156 => 37,  151 => 35,  146 => 33,  140 => 30,  130 => 26,  125 => 24,  120 => 20,  116 => 19,  107 => 15,  98 => 11,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product{% endblock %}

{% block body %}


    <div class=\"container mt-4\">
        <h3>{%trans%}Product Catalog{%endtrans%}</h3>
        <p class=\"card-text\">
            <a class=\"btn btn-primary\" role=\"button\"  href=\"{{ path('product.export.json') }}\">{%trans%}Export json products{%endtrans%}</a>
        </p>

        <p class=\"card-text\">
            <a class=\"btn btn-primary\" role=\"button\"  href=\"{{ path('product.export.csv') }}\">{%trans%}Export CSV products{%endtrans%}</a>
        </p>

        <div class=\"row flex\">
            {% for product in products %}
                <div class=\"col-3\">
                    <div class=\"car text-center\" >
                        <div style=\"border-style: groove;background-color: white\" >
                            {#<img  class=\"image-style\" src=\"#\" height=\"200\" alt=\"{{ product.nom }}\" />#}
                            <div id=\"easyadmin-lightbox-{{ product.id }}\" class=\"easyadmin-lightbox\">
                                {# the second parameter is the name of the property with the UploadableField annotation #}
                                <img src=\"{{ vich_uploader_asset(product, 'imageFile') }}\" class=\"image-style\"  height=\"200\" alt=\"{{ product.nom }}\">
                            </div>
                            <div class=\"card-body\" style=\"background-color: #F5F5F5\">
                                <h5 class=\"card-title\">
                                    <a id=\"produits\" href=\"#\">{{ product.nom }}</a>
                                </h5>
                                <p class=\"card-text\">
                                    {{ product.description}}
                                </p>
                                <div class=\"text-danger\" >{{ product.prix }} €</div>
                                <p class=\"card-text\">
                                    <a class=\"btn btn-primary\" role=\"button\"  href=\"{{ path('product.show', {slug: product.slug , id: product.id }) }}\">Details...</a>
                                </p>
                            </div>
                        </div>
                    </div></br>
                </div>
            {% endfor %}
            <div class=\"navigation navigator-center\">
                {{ knp_pagination_render(products) }}
            </div>

        </div>
    </div>

{% endblock %}
", "product/index.html.twig", "/opt/lampp/htdocs/BasketProduct/templates/product/index.html.twig");
    }
}
