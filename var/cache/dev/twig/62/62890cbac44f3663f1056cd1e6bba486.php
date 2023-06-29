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

/* admin/offer/list.html.twig */
class __TwigTemplate_5e615f190c41edab15caf6b65a292e45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/offer/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/offer/list.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/offer/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<h1>Liste des offres</h1>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 7, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 8
            echo "
  ";
            // line 9
            $this->loadTemplate("admin/offer/list.html.twig", "admin/offer/list.html.twig", 9, "1578476780")->display(twig_array_merge($context, ["realProperty" => twig_get_attribute($this->env, $this->source,             // line 10
$context["offer"], "realProperty", [], "any", false, false, false, 10)]));
            // line 46
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/offer/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 48,  96 => 46,  94 => 10,  93 => 9,  90 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block main %}

<h1>Liste des offres</h1>

{% for offer in offers %}

  {% embed 'front/partial/_realPropertyCard.html.twig' with {
    realProperty: offer.realProperty
  } %}

    {% block details %}
      <div class=\"detail\">
        <i class=\"fa-solid fa-user\"></i>
        <p>Par {{ offer.client.firstname }} {{ offer.client.lastname }}</p>
      </div>
      <div class=\"detail\">
        <i class=\"fa-regular fa-calendar\"></i>
        <p>Le {{ offer.createdAt|date('d/m/Y à H:i') }}</p>
      </div>
    {% endblock %}

    {% block button %}
        <div class=\"btn-container\">
          <button class=\"btn btn-yellow\" type=\"button\">
            <span class=\"label\">Montant : {{ offer.price }}</span>
            <i class=\"fa-solid fa-euro-sign\"></i>
          </button>
        </div>
        <div class=\"btn-container\">
          <a href=\"{{ path('app_admin_offer_validate', {id: offer.id}) }}\" class=\"btn btn-green\">
            <span class=\"label\">Valider</span>
            <i class=\"fa-solid fa-check\"></i>
          </a>
        </div>
        <div class=\"btn-container\">
          <a href=\"{{ path('app_admin_offer_denied', {id: offer.id}) }}\" class=\"btn btn-red\">
            <span class=\"label\">Refuser</span>
            <i class=\"fa-solid fa-xmark\"></i>
          </a>
        </div>
    {% endblock %}

  {% endembed %}

{% endfor %}

{% endblock %}
", "admin/offer/list.html.twig", "/app/templates/admin/offer/list.html.twig");
    }
}


/* admin/offer/list.html.twig */
class __TwigTemplate_5e615f190c41edab15caf6b65a292e45___1578476780 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'details' => [$this, 'block_details'],
            'button' => [$this, 'block_button'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "front/partial/_realPropertyCard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/offer/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/offer/list.html.twig"));

        $this->parent = $this->loadTemplate("front/partial/_realPropertyCard.html.twig", "admin/offer/list.html.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "details"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "details"));

        // line 14
        echo "      <div class=\"detail\">
        <i class=\"fa-solid fa-user\"></i>
        <p>Par ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 16, $this->source); })()), "client", [], "any", false, false, false, 16), "firstname", [], "any", false, false, false, 16), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 16, $this->source); })()), "client", [], "any", false, false, false, 16), "lastname", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
      </div>
      <div class=\"detail\">
        <i class=\"fa-regular fa-calendar\"></i>
        <p>Le ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20), "d/m/Y à H:i"), "html", null, true);
        echo "</p>
      </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        // line 25
        echo "        <div class=\"btn-container\">
          <button class=\"btn btn-yellow\" type=\"button\">
            <span class=\"label\">Montant : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 27, $this->source); })()), "price", [], "any", false, false, false, 27), "html", null, true);
        echo "</span>
            <i class=\"fa-solid fa-euro-sign\"></i>
          </button>
        </div>
        <div class=\"btn-container\">
          <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_offer_validate", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"btn btn-green\">
            <span class=\"label\">Valider</span>
            <i class=\"fa-solid fa-check\"></i>
          </a>
        </div>
        <div class=\"btn-container\">
          <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_offer_denied", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\" class=\"btn btn-red\">
            <span class=\"label\">Refuser</span>
            <i class=\"fa-solid fa-xmark\"></i>
          </a>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/offer/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 38,  294 => 32,  286 => 27,  282 => 25,  272 => 24,  259 => 20,  250 => 16,  246 => 14,  236 => 13,  213 => 9,  111 => 48,  96 => 46,  94 => 10,  93 => 9,  90 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block main %}

<h1>Liste des offres</h1>

{% for offer in offers %}

  {% embed 'front/partial/_realPropertyCard.html.twig' with {
    realProperty: offer.realProperty
  } %}

    {% block details %}
      <div class=\"detail\">
        <i class=\"fa-solid fa-user\"></i>
        <p>Par {{ offer.client.firstname }} {{ offer.client.lastname }}</p>
      </div>
      <div class=\"detail\">
        <i class=\"fa-regular fa-calendar\"></i>
        <p>Le {{ offer.createdAt|date('d/m/Y à H:i') }}</p>
      </div>
    {% endblock %}

    {% block button %}
        <div class=\"btn-container\">
          <button class=\"btn btn-yellow\" type=\"button\">
            <span class=\"label\">Montant : {{ offer.price }}</span>
            <i class=\"fa-solid fa-euro-sign\"></i>
          </button>
        </div>
        <div class=\"btn-container\">
          <a href=\"{{ path('app_admin_offer_validate', {id: offer.id}) }}\" class=\"btn btn-green\">
            <span class=\"label\">Valider</span>
            <i class=\"fa-solid fa-check\"></i>
          </a>
        </div>
        <div class=\"btn-container\">
          <a href=\"{{ path('app_admin_offer_denied', {id: offer.id}) }}\" class=\"btn btn-red\">
            <span class=\"label\">Refuser</span>
            <i class=\"fa-solid fa-xmark\"></i>
          </a>
        </div>
    {% endblock %}

  {% endembed %}

{% endfor %}

{% endblock %}
", "admin/offer/list.html.twig", "/app/templates/admin/offer/list.html.twig");
    }
}
