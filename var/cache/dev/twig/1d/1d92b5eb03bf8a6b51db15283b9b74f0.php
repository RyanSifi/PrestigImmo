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

/* front/partial/_realPropertyCard.html.twig */
class __TwigTemplate_fe26437f4476ad88b7bac5d2c3504c02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'details' => [$this, 'block_details'],
            'button' => [$this, 'block_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partial/_realPropertyCard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partial/_realPropertyCard.html.twig"));

        // line 10
        echo "<div class=\"card\">
  <p class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 11, $this->source); })()), "label", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
  <div class=\"img-container\">
    ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 13, $this->source); })()), "pictures", [], "any", false, false, false, 13) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 13, $this->source); })()), "pictures", [], "any", false, false, false, 13)))) {
            // line 14
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 14, $this->source); })()), "pictures", [], "any", false, false, false, 14), 0, [], "array", false, false, false, 14), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 14, $this->source); })()), "label", [], "any", false, false, false, 14), "html", null, true);
            echo "\" />
    ";
        }
        // line 16
        echo "  </div>
  <div class=\"detail-container\">
    ";
        // line 18
        $this->displayBlock('details', $context, $blocks);
        // line 44
        echo "  ";
        $this->displayBlock('button', $context, $blocks);
        // line 52
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "details"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "details"));

        // line 19
        echo "      <div class=\"detail\">
        <i class=\"fa-solid fa-location-dot\"></i>
        <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 21, $this->source); })()), "address", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
      </div>
      <div class=\"detail\">
        <i class=\"fa-solid fa-door-open\"></i>
        <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 25, $this->source); })()), "numberOfRooms", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
      </div>
      <div class=\"detail\">
        <i class=\"fa-solid fa-house\"></i>
        <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 29, $this->source); })()), "totalArea", [], "any", false, false, false, 29), "html", null, true);
        echo " m2</p>

      </div>
      <div class=\"detail\">
        <i class=\"fa-solid fa-ruler-combined\"></i>
        <p>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 34, $this->source); })()), "liveableArea", [], "any", false, false, false, 34), "html", null, true);
        echo " m2</p>
      </div>
    </div>
    <div class=\"price-container\">
      <div class=\"price\">
        <p>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 39, $this->source); })()), "price", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
        <i class=\"fa-solid fa-euro-sign\"></i>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        // line 45
        echo "    <div class=\"btn-container\">
      <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_offer_make", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["realProperty"]) || array_key_exists("realProperty", $context) ? $context["realProperty"] : (function () { throw new RuntimeError('Variable "realProperty" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"btn btn-yellow\">
        <span class=\"label\">Faire une offre</span>
        <i class=\"fa-solid fa-pen-nib\"></i>
      </a>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/partial/_realPropertyCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  152 => 45,  142 => 44,  127 => 39,  119 => 34,  111 => 29,  104 => 25,  97 => 21,  93 => 19,  83 => 18,  72 => 52,  69 => 44,  67 => 18,  63 => 16,  55 => 14,  53 => 13,  48 => 11,  45 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  Contient l'affichage d'une carte d'un bien immobilier.

  Ce petit template doit se « embed », car il utilise
  lui même un système de block.

  Vous pouvez en apprendre plus sur embed ici :
  https://twig.symfony.com/doc/2.x/tags/embed.html
#}
<div class=\"card\">
  <p class=\"title\">{{ realProperty.label }}</p>
  <div class=\"img-container\">
    {% if realProperty.pictures and not realProperty.pictures is empty %}
      <img src=\"{{ realProperty.pictures[0] }}\" alt=\"{{ realProperty.label }}\" />
    {% endif %}
  </div>
  <div class=\"detail-container\">
    {% block details %}
      <div class=\"detail\">
        <i class=\"fa-solid fa-location-dot\"></i>
        <p>{{ realProperty.address }}</p>
      </div>
      <div class=\"detail\">
        <i class=\"fa-solid fa-door-open\"></i>
        <p>{{ realProperty.numberOfRooms }}</p>
      </div>
      <div class=\"detail\">
        <i class=\"fa-solid fa-house\"></i>
        <p>{{ realProperty.totalArea }} m2</p>

      </div>
      <div class=\"detail\">
        <i class=\"fa-solid fa-ruler-combined\"></i>
        <p>{{ realProperty.liveableArea }} m2</p>
      </div>
    </div>
    <div class=\"price-container\">
      <div class=\"price\">
        <p>{{ realProperty.price }}</p>
        <i class=\"fa-solid fa-euro-sign\"></i>
      </div>
    </div>
  {% endblock %}
  {% block button %}
    <div class=\"btn-container\">
      <a href=\"{{ path('app_front_offer_make', {id: realProperty.id}) }}\" class=\"btn btn-yellow\">
        <span class=\"label\">Faire une offre</span>
        <i class=\"fa-solid fa-pen-nib\"></i>
      </a>
    </div>
  {% endblock %}
</div>
", "front/partial/_realPropertyCard.html.twig", "/app/templates/front/partial/_realPropertyCard.html.twig");
    }
}
