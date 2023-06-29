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

/* front/client/registration.html.twig */
class __TwigTemplate_426a39f8b9b52b83d948c41d5655ebbd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/client/registration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/client/registration.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "front/client/registration.html.twig", 1);
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
        echo "  <h1>Inscription</h1>

  <p>
    Vous-êtes dèja inscrit ?
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_client_login");
        echo "\">Connéctez-vous</a>
  </p>


  ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

  <div class=\"form-group\">
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'row', ["label" => "Email :"]);
        // line 17
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "phone", [], "any", false, false, false, 21), 'row', ["label" => "Téléphone :"]);
        // line 23
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "password", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27), 'row', ["label" => "Mot de passe :"]);
        // line 29
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "password", [], "any", false, false, false, 33), "second", [], "any", false, false, false, 33), 'row', ["label" => "Confirmation :"]);
        // line 35
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lastname", [], "any", false, false, false, 39), 'row', ["label" => "Nom :"]);
        // line 41
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "firstname", [], "any", false, false, false, 45), 'row', ["label" => "Prénom :"]);
        // line 47
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "sexe", [], "any", false, false, false, 51), 'row', ["label" => "Genre :"]);
        // line 53
        echo "
  </div>

  <h3>Votre adresse</h3>

  <div class=\"form-group\">
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "address", [], "any", false, false, false, 59), "postCode", [], "any", false, false, false, 59), 'row', ["label" => "Code Postale :"]);
        // line 61
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "address", [], "any", false, false, false, 65), "city", [], "any", false, false, false, 65), 'row', ["label" => "Ville :"]);
        // line 67
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "address", [], "any", false, false, false, 71), "street", [], "any", false, false, false, 71), 'row', ["label" => "N° de rue :"]);
        // line 73
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "address", [], "any", false, false, false, 77), "country", [], "any", false, false, false, 77), 'row', ["label" => "Pays :"]);
        // line 79
        echo "
  </div>

  <div class=\"btn-group full-width\">
    <button class=\"btn\">
      <span class=\"label\">S'inscrire</span>
      <i class=\"fa-solid fa-paper-plane\"></i>
    </button>
  </div>
  ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/client/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 88,  171 => 79,  169 => 77,  163 => 73,  161 => 71,  155 => 67,  153 => 65,  147 => 61,  145 => 59,  137 => 53,  135 => 51,  129 => 47,  127 => 45,  121 => 41,  119 => 39,  113 => 35,  111 => 33,  105 => 29,  103 => 27,  97 => 23,  95 => 21,  89 => 17,  87 => 15,  81 => 12,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block main %}
  <h1>Inscription</h1>

  <p>
    Vous-êtes dèja inscrit ?
    <a href=\"{{ path('app_front_client_login') }}\">Connéctez-vous</a>
  </p>


  {{ form_start(form) }}

  <div class=\"form-group\">
    {{ form_row(form.email, {
      'label': 'Email :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.phone, {
      'label': 'Téléphone :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.password.first, {
      'label': 'Mot de passe :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.password.second, {
      'label': 'Confirmation :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.lastname, {
      'label': 'Nom :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.firstname, {
      'label': 'Prénom :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.sexe, {
      'label': 'Genre :',
    }) }}
  </div>

  <h3>Votre adresse</h3>

  <div class=\"form-group\">
    {{ form_row(form.address.postCode, {
      'label': 'Code Postale :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.address.city, {
      'label': 'Ville :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.address.street, {
      'label': 'N° de rue :',
    }) }}
  </div>

  <div class=\"form-group\">
    {{ form_row(form.address.country, {
      'label': 'Pays :',
    }) }}
  </div>

  <div class=\"btn-group full-width\">
    <button class=\"btn\">
      <span class=\"label\">S'inscrire</span>
      <i class=\"fa-solid fa-paper-plane\"></i>
    </button>
  </div>
  {{ form_end(form) }}
{% endblock %}
", "front/client/registration.html.twig", "/app/templates/front/client/registration.html.twig");
    }
}
