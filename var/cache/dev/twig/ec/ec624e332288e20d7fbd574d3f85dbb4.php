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

/* front/offer/make.html.twig */
class __TwigTemplate_b07274454d864469a6f8fec5d58f3ae8 extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/offer/make.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/offer/make.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "front/offer/make.html.twig", 1);
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
<h1>Faire une offre</h1>

";
        // line 7
        $this->loadTemplate("front/offer/make.html.twig", "front/offer/make.html.twig", 7, "2080180517")->display($context);
        // line 42
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/offer/make.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 42,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block main %}

<h1>Faire une offre</h1>

{% embed 'front/partial/_realPropertyCard.html.twig' %}

{% block button %}

  {{ form_start(form) }}

  <div class=\"form-group\">
    {{ form_row(form.price, {
      'label': 'Prix de votre offre :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.cash, {
      'label': 'Cash ? :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.message, {
      'label': 'Parlez-nous de cette offre :',
    }) }}
  </div>

  <div class=\"btn-container\">
    <button type=\"submit\" class=\"btn btn-yellow\">
      <span class=\"label\">Envoyer l'offre</span>
      <i class=\"fa-solid fa-pen-nib\"></i>
    </button>
  </div>

  {{ form_end(form) }}
{% endblock %}

{% endembed %}

{% endblock %}
", "front/offer/make.html.twig", "/app/templates/front/offer/make.html.twig");
    }
}


/* front/offer/make.html.twig */
class __TwigTemplate_b07274454d864469a6f8fec5d58f3ae8___2080180517 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'button' => [$this, 'block_button'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "front/partial/_realPropertyCard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/offer/make.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/offer/make.html.twig"));

        $this->parent = $this->loadTemplate("front/partial/_realPropertyCard.html.twig", "front/offer/make.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        // line 10
        echo "
  ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "

  <div class=\"form-group\">
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), 'row', ["label" => "Prix de votre offre :"]);
        // line 16
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "cash", [], "any", false, false, false, 20), 'row', ["label" => "Cash ? :"]);
        // line 22
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "message", [], "any", false, false, false, 26), 'row', ["label" => "Parlez-nous de cette offre :"]);
        // line 28
        echo "
  </div>

  <div class=\"btn-container\">
    <button type=\"submit\" class=\"btn btn-yellow\">
      <span class=\"label\">Envoyer l'offre</span>
      <i class=\"fa-solid fa-pen-nib\"></i>
    </button>
  </div>

  ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/offer/make.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 38,  230 => 28,  228 => 26,  222 => 22,  220 => 20,  214 => 16,  212 => 14,  206 => 11,  203 => 10,  193 => 9,  170 => 7,  75 => 42,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block main %}

<h1>Faire une offre</h1>

{% embed 'front/partial/_realPropertyCard.html.twig' %}

{% block button %}

  {{ form_start(form) }}

  <div class=\"form-group\">
    {{ form_row(form.price, {
      'label': 'Prix de votre offre :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.cash, {
      'label': 'Cash ? :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.message, {
      'label': 'Parlez-nous de cette offre :',
    }) }}
  </div>

  <div class=\"btn-container\">
    <button type=\"submit\" class=\"btn btn-yellow\">
      <span class=\"label\">Envoyer l'offre</span>
      <i class=\"fa-solid fa-pen-nib\"></i>
    </button>
  </div>

  {{ form_end(form) }}
{% endblock %}

{% endembed %}

{% endblock %}
", "front/offer/make.html.twig", "/app/templates/front/offer/make.html.twig");
    }
}
