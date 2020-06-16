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

/* basket/nbarticle.html.twig */
class __TwigTemplate_cfdacddc262ffebfdc6d2ff627bb1195c8722abf88554e394cbb6fb87133c1dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/nbarticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/nbarticle.html.twig"));

        // line 1
        echo "<a  ";
        if (0 !== twig_compare((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 1, $this->source); })()), 0)) {
            echo " class=\"btn btn-success\"  ";
        } else {
            echo " class=\"btn btn-light\" ";
        }
        echo " role=\"button\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("basket");
        echo "\">
    <i class=\"fas fa-shopping-cart\"></i>
    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Basket", [], "messages");
        // line 4
        echo "    <span class=\"badge badge-light\">
        ";
        // line 5
        if (0 === twig_compare((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 5, $this->source); })()), 0)) {
            // line 6
            echo "            0
        ";
        } else {
            // line 8
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "
        ";
        }
        // line 10
        echo "    </span>
</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "basket/nbarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  66 => 8,  62 => 6,  60 => 5,  57 => 4,  55 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a  {% if articles != 0 %} class=\"btn btn-success\"  {% else %} class=\"btn btn-light\" {% endif %} role=\"button\" href=\"{{ path('basket') }}\">
    <i class=\"fas fa-shopping-cart\"></i>
    {% trans from \"messages\"  %}Your Basket{% endtrans %}
    <span class=\"badge badge-light\">
        {% if articles == 0 %}
            0
        {% else %}
            {{ articles }}
        {% endif %}
    </span>
</a>", "basket/nbarticle.html.twig", "/opt/lampp/htdocs/BasketProduct/templates/basket/nbarticle.html.twig");
    }
}
