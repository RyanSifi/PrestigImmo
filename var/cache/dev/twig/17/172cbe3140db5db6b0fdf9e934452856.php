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

/* front/client/profile.html.twig */
class __TwigTemplate_4901d97c190db9d731ca2bac35f07408 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/client/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/client/profile.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "front/client/profile.html.twig", 1);
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
        echo "  <h1>Mon Profil</h1>

  <div class=\"btn-group\">
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_client_logout");
        echo "\" class=\"btn btn-red\">
      <span class=\"label\">Me déconnécter</span>
      <i class=\"fa-solid fa-right-from-bracket\"></i>
    </a>
  </div>

  <h2>Mes Offres</h2>

  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "offers", [], "any", false, false, false, 15));
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
            // line 16
            echo "    ";
            if ( !(twig_get_attribute($this->env, $this->source, $context["offer"], "status", [], "any", false, false, false, 16) === constant("App\\Entity\\Offer::STATUS_OVER"))) {
                // line 17
                echo "      ";
                $this->loadTemplate("front/client/profile.html.twig", "front/client/profile.html.twig", 17, "1964504478")->display(twig_array_merge($context, ["realProperty" => twig_get_attribute($this->env, $this->source, $context["offer"], "realProperty", [], "any", false, false, false, 17)]));
                // line 53
                echo "    ";
            }
            // line 54
            echo "  ";
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
        // line 55
        echo "
  <h2>Mes information</h2>

  ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start');
        echo "

  <div class=\"form-group\">
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'row', ["label" => "Email :"]);
        // line 63
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "phone", [], "any", false, false, false, 67), 'row', ["label" => "Téléphone :"]);
        // line 69
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "password", [], "any", false, false, false, 73), "first", [], "any", false, false, false, 73), 'row', ["label" => "Mot de passe :"]);
        // line 75
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "password", [], "any", false, false, false, 79), "second", [], "any", false, false, false, 79), 'row', ["label" => "Confirmation :"]);
        // line 81
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "lastname", [], "any", false, false, false, 85), 'row', ["label" => "Nom :"]);
        // line 87
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "firstname", [], "any", false, false, false, 91), 'row', ["label" => "Prénom :"]);
        // line 93
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "sexe", [], "any", false, false, false, 97), 'row', ["label" => "Genre :"]);
        // line 99
        echo "
  </div>

  <h3>Votre adresse</h3>

  <div class=\"form-group\">
    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "address", [], "any", false, false, false, 105), "postCode", [], "any", false, false, false, 105), 'row', ["label" => "Code Postale :"]);
        // line 107
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "address", [], "any", false, false, false, 111), "city", [], "any", false, false, false, 111), 'row', ["label" => "Ville :"]);
        // line 113
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "address", [], "any", false, false, false, 117), "street", [], "any", false, false, false, 117), 'row', ["label" => "N° de rue :"]);
        // line 119
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "address", [], "any", false, false, false, 123), "country", [], "any", false, false, false, 123), 'row', ["label" => "Pays :"]);
        // line 125
        echo "
  </div>

  <div class=\"btn-group full-width\">
    <button class=\"btn\">
      <span class=\"label\">Envoyer</span>
      <i class=\"fa-solid fa-paper-plane\"></i>
    </button>
  </div>
  ";
        // line 134
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/client/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 134,  219 => 125,  217 => 123,  211 => 119,  209 => 117,  203 => 113,  201 => 111,  195 => 107,  193 => 105,  185 => 99,  183 => 97,  177 => 93,  175 => 91,  169 => 87,  167 => 85,  161 => 81,  159 => 79,  153 => 75,  151 => 73,  145 => 69,  143 => 67,  137 => 63,  135 => 61,  129 => 58,  124 => 55,  110 => 54,  107 => 53,  104 => 17,  101 => 16,  84 => 15,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block main %}
  <h1>Mon Profil</h1>

  <div class=\"btn-group\">
    <a href=\"{{ path('app_front_client_logout') }}\" class=\"btn btn-red\">
      <span class=\"label\">Me déconnécter</span>
      <i class=\"fa-solid fa-right-from-bracket\"></i>
    </a>
  </div>

  <h2>Mes Offres</h2>

  {% for offer in app.user.offers %}
    {% if offer.status is not constant('App\\\\Entity\\\\Offer::STATUS_OVER') %}
      {% embed 'front/partial/_realPropertyCard.html.twig' with { realProperty: offer.realProperty } %}
        {% block button %}
          <div class=\"btn-container\">
            <button class=\"btn btn-yellow\" type=\"button\">
              <span class=\"label\">Mon offre : {{ offer.price }}</span>
              <i class=\"fa-solid fa-euro-sign\"></i>
            </button>
          </div>
          <div class=\"btn-container\">
            {% if offer.status is constant('App\\\\Entity\\\\Offer::STATUS_WAITING') %}
              <button class=\"btn btn-yellow\" type=\"button\">
                <span class=\"label\">Status : {{ offer.status }}</span>
                <i class=\"fa-solid fa-user-tag\"></i>
              </button>
            {% endif %}

            {% if offer.status is constant('App\\\\Entity\\\\Offer::STATUS_VALIDATED') %}

              <h3>Votre offre est validé !</h3>
              <p>Vous n'avez plus qu'a régler les frais d'agence</p>

              <a href=\"{{ path('app_front_offer_checkout', {id: offer.id}) }}\" class=\"btn btn-green\">
                <span class=\"label\">Payer les frais d'agence {{ offer.agencyFee }}</span>
                <i class=\"fa-solid fa-euro-sign\"></i>
              </a>
            {% endif %}

            {% if offer.status is constant('App\\\\Entity\\\\Offer::STATUS_DENIED') %}
              <button class=\"btn btn-red\" type=\"button\">
                <span class=\"label\">Status : {{ offer.status }}</span>
                <i class=\"fa-solid fa-user-tag\"></i>
              </button>
            {% endif %}
          </div>
        {% endblock %}
      {% endembed %}
    {% endif %}
  {% endfor %}

  <h2>Mes information</h2>

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
      <span class=\"label\">Envoyer</span>
      <i class=\"fa-solid fa-paper-plane\"></i>
    </button>
  </div>
  {{ form_end(form) }}
{% endblock %}
", "front/client/profile.html.twig", "/app/templates/front/client/profile.html.twig");
    }
}


/* front/client/profile.html.twig */
class __TwigTemplate_4901d97c190db9d731ca2bac35f07408___1964504478 extends Template
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
        // line 17
        return "front/partial/_realPropertyCard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/client/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/client/profile.html.twig"));

        $this->parent = $this->loadTemplate("front/partial/_realPropertyCard.html.twig", "front/client/profile.html.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button"));

        // line 19
        echo "          <div class=\"btn-container\">
            <button class=\"btn btn-yellow\" type=\"button\">
              <span class=\"label\">Mon offre : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 21, $this->source); })()), "price", [], "any", false, false, false, 21), "html", null, true);
        echo "</span>
              <i class=\"fa-solid fa-euro-sign\"></i>
            </button>
          </div>
          <div class=\"btn-container\">
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) === constant("App\\Entity\\Offer::STATUS_WAITING"))) {
            // line 27
            echo "              <button class=\"btn btn-yellow\" type=\"button\">
                <span class=\"label\">Status : ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>
                <i class=\"fa-solid fa-user-tag\"></i>
              </button>
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33) === constant("App\\Entity\\Offer::STATUS_VALIDATED"))) {
            // line 34
            echo "
              <h3>Votre offre est validé !</h3>
              <p>Vous n'avez plus qu'a régler les frais d'agence</p>

              <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_offer_checkout", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-green\">
                <span class=\"label\">Payer les frais d'agence ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 39, $this->source); })()), "agencyFee", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
                <i class=\"fa-solid fa-euro-sign\"></i>
              </a>
            ";
        }
        // line 43
        echo "
            ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44) === constant("App\\Entity\\Offer::STATUS_DENIED"))) {
            // line 45
            echo "              <button class=\"btn btn-red\" type=\"button\">
                <span class=\"label\">Status : ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 46, $this->source); })()), "status", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>
                <i class=\"fa-solid fa-user-tag\"></i>
              </button>
            ";
        }
        // line 50
        echo "          </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/client/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 50,  505 => 46,  502 => 45,  500 => 44,  497 => 43,  490 => 39,  486 => 38,  480 => 34,  478 => 33,  475 => 32,  468 => 28,  465 => 27,  463 => 26,  455 => 21,  451 => 19,  441 => 18,  418 => 17,  230 => 134,  219 => 125,  217 => 123,  211 => 119,  209 => 117,  203 => 113,  201 => 111,  195 => 107,  193 => 105,  185 => 99,  183 => 97,  177 => 93,  175 => 91,  169 => 87,  167 => 85,  161 => 81,  159 => 79,  153 => 75,  151 => 73,  145 => 69,  143 => 67,  137 => 63,  135 => 61,  129 => 58,  124 => 55,  110 => 54,  107 => 53,  104 => 17,  101 => 16,  84 => 15,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block main %}
  <h1>Mon Profil</h1>

  <div class=\"btn-group\">
    <a href=\"{{ path('app_front_client_logout') }}\" class=\"btn btn-red\">
      <span class=\"label\">Me déconnécter</span>
      <i class=\"fa-solid fa-right-from-bracket\"></i>
    </a>
  </div>

  <h2>Mes Offres</h2>

  {% for offer in app.user.offers %}
    {% if offer.status is not constant('App\\\\Entity\\\\Offer::STATUS_OVER') %}
      {% embed 'front/partial/_realPropertyCard.html.twig' with { realProperty: offer.realProperty } %}
        {% block button %}
          <div class=\"btn-container\">
            <button class=\"btn btn-yellow\" type=\"button\">
              <span class=\"label\">Mon offre : {{ offer.price }}</span>
              <i class=\"fa-solid fa-euro-sign\"></i>
            </button>
          </div>
          <div class=\"btn-container\">
            {% if offer.status is constant('App\\\\Entity\\\\Offer::STATUS_WAITING') %}
              <button class=\"btn btn-yellow\" type=\"button\">
                <span class=\"label\">Status : {{ offer.status }}</span>
                <i class=\"fa-solid fa-user-tag\"></i>
              </button>
            {% endif %}

            {% if offer.status is constant('App\\\\Entity\\\\Offer::STATUS_VALIDATED') %}

              <h3>Votre offre est validé !</h3>
              <p>Vous n'avez plus qu'a régler les frais d'agence</p>

              <a href=\"{{ path('app_front_offer_checkout', {id: offer.id}) }}\" class=\"btn btn-green\">
                <span class=\"label\">Payer les frais d'agence {{ offer.agencyFee }}</span>
                <i class=\"fa-solid fa-euro-sign\"></i>
              </a>
            {% endif %}

            {% if offer.status is constant('App\\\\Entity\\\\Offer::STATUS_DENIED') %}
              <button class=\"btn btn-red\" type=\"button\">
                <span class=\"label\">Status : {{ offer.status }}</span>
                <i class=\"fa-solid fa-user-tag\"></i>
              </button>
            {% endif %}
          </div>
        {% endblock %}
      {% endembed %}
    {% endif %}
  {% endfor %}

  <h2>Mes information</h2>

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
      <span class=\"label\">Envoyer</span>
      <i class=\"fa-solid fa-paper-plane\"></i>
    </button>
  </div>
  {{ form_end(form) }}
{% endblock %}
", "front/client/profile.html.twig", "/app/templates/front/client/profile.html.twig");
    }
}
