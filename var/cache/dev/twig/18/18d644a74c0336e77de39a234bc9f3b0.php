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

/* front/home/search.html.twig */
class __TwigTemplate_dd9ded40aac399969ae992838872a556 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/search.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "front/home/search.html.twig", 1);
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
<h1>Rechercher</h1>

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "

  <div class=\"form-couple\">
    <div class=\"form-group\">
      ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "page", [], "any", false, false, false, 11), 'row', ["label" => "Page :"]);
        // line 13
        echo "
    </div>
    <div class=\"form-group\">
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "limit", [], "any", false, false, false, 16), 'row', ["label" => "Limite :"]);
        // line 18
        echo "
    </div>
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "orderBy", [], "any", false, false, false, 24), 'row', ["label" => "Trier par :"]);
        // line 26
        echo "
    </div>
    <div class=\"form-group\">
      ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "direction", [], "any", false, false, false, 29), 'row', ["label" => "Sens :"]);
        // line 31
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36), 'row', ["label" => "Type :"]);
        // line 38
        echo "
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "minTotalArea", [], "any", false, false, false, 43), 'row', ["label" => "Surface min :"]);
        // line 45
        echo "
    </div>
    <div class=\"form-group\">
      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "maxTotalArea", [], "any", false, false, false, 48), 'row', ["label" => "Surface max :"]);
        // line 50
        echo "
    </div>
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "minPrice", [], "any", false, false, false, 56), 'row', ["label" => "Prix min :"]);
        // line 58
        echo "
    </div>
    <div class=\"form-group\">
      ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "maxPrice", [], "any", false, false, false, 61), 'row', ["label" => "Prix max :"]);
        // line 63
        echo "
    </div>
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "minRooms", [], "any", false, false, false, 69), 'row', ["label" => "Piéces min :"]);
        // line 71
        echo "
    </div>
    <div class=\"form-group\">
      ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "maxRooms", [], "any", false, false, false, 74), 'row', ["label" => "Piéces max :"]);
        // line 76
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "address", [], "any", false, false, false, 81), 'row', ["label" => "Adresse :"]);
        // line 83
        echo "
  </div>

<div class=\"btn-group full-width\">
  <button class=\"btn\" type=\"submit\">
    <span class=\"label\">Rechercher</span>
    <i class=\"fa-solid fa-magnifying-glass\"></i>
  </button>
</div>

";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "

";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realProperties"]) || array_key_exists("realProperties", $context) ? $context["realProperties"] : (function () { throw new RuntimeError('Variable "realProperties" does not exist.', 95, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["realProperty"]) {
            // line 96
            echo "
";
            // line 97
            $this->loadTemplate("front/home/search.html.twig", "front/home/search.html.twig", 97, "504968676")->display($context);
            // line 99
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realProperty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/home/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 101,  213 => 99,  211 => 97,  208 => 96,  191 => 95,  186 => 93,  174 => 83,  172 => 81,  165 => 76,  163 => 74,  158 => 71,  156 => 69,  148 => 63,  146 => 61,  141 => 58,  139 => 56,  131 => 50,  129 => 48,  124 => 45,  122 => 43,  115 => 38,  113 => 36,  106 => 31,  104 => 29,  99 => 26,  97 => 24,  89 => 18,  87 => 16,  82 => 13,  80 => 11,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block main %}

<h1>Rechercher</h1>

{{ form_start(form) }}

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.page, {
        'label': 'Page :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.limit, {
        'label': 'Limite :',
      }) }}
    </div>
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.orderBy, {
        'label': 'Trier par :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.direction, {
        'label': 'Sens :',
      }) }}
    </div>
  </div>

  <div class=\"form-group\">
    {{ form_row(form.type, {
      'label': 'Type :',
    }) }}
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.minTotalArea, {
        'label': 'Surface min :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.maxTotalArea, {
        'label': 'Surface max :',
      }) }}
    </div>
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.minPrice, {
        'label': 'Prix min :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.maxPrice, {
        'label': 'Prix max :',
      }) }}
    </div>
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.minRooms, {
        'label': 'Piéces min :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.maxRooms, {
        'label': 'Piéces max :',
      }) }}
    </div>
  </div>

  <div class=\"form-group\">
    {{ form_row(form.address, {
      'label': 'Adresse :',
    }) }}
  </div>

<div class=\"btn-group full-width\">
  <button class=\"btn\" type=\"submit\">
    <span class=\"label\">Rechercher</span>
    <i class=\"fa-solid fa-magnifying-glass\"></i>
  </button>
</div>

{{ form_end(form) }}

{% for realProperty in realProperties %}

{% embed 'front/partial/_realPropertyCard.html.twig' %}
{% endembed %}

{% endfor %}

{% endblock %}
", "front/home/search.html.twig", "/app/templates/front/home/search.html.twig");
    }
}


/* front/home/search.html.twig */
class __TwigTemplate_dd9ded40aac399969ae992838872a556___504968676 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 97
        return "front/partial/_realPropertyCard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/search.html.twig"));

        $this->parent = $this->loadTemplate("front/partial/_realPropertyCard.html.twig", "front/home/search.html.twig", 97);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/home/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 97,  228 => 101,  213 => 99,  211 => 97,  208 => 96,  191 => 95,  186 => 93,  174 => 83,  172 => 81,  165 => 76,  163 => 74,  158 => 71,  156 => 69,  148 => 63,  146 => 61,  141 => 58,  139 => 56,  131 => 50,  129 => 48,  124 => 45,  122 => 43,  115 => 38,  113 => 36,  106 => 31,  104 => 29,  99 => 26,  97 => 24,  89 => 18,  87 => 16,  82 => 13,  80 => 11,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block main %}

<h1>Rechercher</h1>

{{ form_start(form) }}

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.page, {
        'label': 'Page :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.limit, {
        'label': 'Limite :',
      }) }}
    </div>
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.orderBy, {
        'label': 'Trier par :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.direction, {
        'label': 'Sens :',
      }) }}
    </div>
  </div>

  <div class=\"form-group\">
    {{ form_row(form.type, {
      'label': 'Type :',
    }) }}
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.minTotalArea, {
        'label': 'Surface min :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.maxTotalArea, {
        'label': 'Surface max :',
      }) }}
    </div>
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.minPrice, {
        'label': 'Prix min :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.maxPrice, {
        'label': 'Prix max :',
      }) }}
    </div>
  </div>

  <div class=\"form-couple\">
    <div class=\"form-group\">
      {{ form_row(form.minRooms, {
        'label': 'Piéces min :',
      }) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.maxRooms, {
        'label': 'Piéces max :',
      }) }}
    </div>
  </div>

  <div class=\"form-group\">
    {{ form_row(form.address, {
      'label': 'Adresse :',
    }) }}
  </div>

<div class=\"btn-group full-width\">
  <button class=\"btn\" type=\"submit\">
    <span class=\"label\">Rechercher</span>
    <i class=\"fa-solid fa-magnifying-glass\"></i>
  </button>
</div>

{{ form_end(form) }}

{% for realProperty in realProperties %}

{% embed 'front/partial/_realPropertyCard.html.twig' %}
{% endembed %}

{% endfor %}

{% endblock %}
", "front/home/search.html.twig", "/app/templates/front/home/search.html.twig");
    }
}
