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

/* includes/article_form.html.twig */
class __TwigTemplate_0b81a87b70132bf37d6a131481305f46587e056d1478f008bfce3a7d92222aed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/article_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/article_form.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["class" => "row"]]);
        echo "
\t<div class=\"input-field col s12 m12 l12\">
\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "picture", [], "any", false, false, false, 6), 'widget');
        echo "
\t</div>

\t<div class=\"input-field col s12 m6 l6\">
\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), 'widget', ["attr" => ["placeholder" => "Titre de l'article"]]);
        echo "
\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'label', ["label" => "Le titre de votre article"]);
        echo "
\t\t<span class=\"error\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), 'errors');
        echo "</span>
\t</div>

\t<div class=\"input-field col s12 m6 l6\">
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "categories", [], "any", false, false, false, 16), 'widget');
        echo "
\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "categories", [], "any", false, false, false, 17), 'label', ["label" => "Choisissez un ou plusieurs catégories"]);
        echo "
\t</div>

\t<div class=\"input-field col s12 m12 l12\">
\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "materialize-textarea", "placeholder" => "Le contenu de l'article"]]);
        echo "
\t</div>
\t<div class=\"input-field col s12 m12 l12\">
\t\t<p>
\t\t\t<label>
\t\t        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "isPublished", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "filled-in"]]);
        echo "
\t\t        <span>Publier</span>
\t      \t</label>
      \t</p>
\t</div>

\t<div class=\"input-field col s12 m12 l12\">
\t\t<input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-primary\">
\t</div>
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/article_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  95 => 26,  87 => 21,  80 => 17,  76 => 16,  69 => 12,  65 => 11,  61 => 10,  54 => 6,  49 => 4,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# templates/includes/article_form.html.twig #}

{{ form_start(form , {'attr':{'class':'row'}}) }}
\t<div class=\"input-field col s12 m12 l12\">
\t\t{{ form_widget(form.picture) }}
\t</div>

\t<div class=\"input-field col s12 m6 l6\">
\t\t{{ form_widget(form.title, {'attr': {'placeholder': 'Titre de l\\'article'}}) }}
\t\t{{ form_label(form.title, 'Le titre de votre article') }}
\t\t<span class=\"error\">{{ form_errors(form.title)}}</span>
\t</div>

\t<div class=\"input-field col s12 m6 l6\">
\t\t{{ form_widget(form.categories) }}
\t\t{{ form_label(form.categories , 'Choisissez un ou plusieurs catégories') }}
\t</div>

\t<div class=\"input-field col s12 m12 l12\">
\t\t{{ form_widget(form.content, {'attr': {'class': 'materialize-textarea', 'placeholder': 'Le contenu de l\\'article'}}) }}
\t</div>
\t<div class=\"input-field col s12 m12 l12\">
\t\t<p>
\t\t\t<label>
\t\t        {{ form_widget(form.isPublished, {'attr': {'class': 'filled-in'}}) }}
\t\t        <span>Publier</span>
\t      \t</label>
      \t</p>
\t</div>

\t<div class=\"input-field col s12 m12 l12\">
\t\t<input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-primary\">
\t</div>
{{ form_end(form) }}

", "includes/article_form.html.twig", "/Users/macbookair/Desktop/ProjetSymfony/CaveaVin/templates/includes/article_form.html.twig");
    }
}
