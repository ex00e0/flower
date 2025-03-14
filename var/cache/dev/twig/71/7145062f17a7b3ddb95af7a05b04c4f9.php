<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* item_form.html.twig */
class __TwigTemplate_807d6a3c977c2a9fd00977232059f013 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "item_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "item_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "item_form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <main class=\"all_main\">
    <div class=\"big_void\"></div>

        <div class=\"catalogue_small\">
            <div class=\"r1 c2\"><div>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</div></div>
        </div>
        <div class=\"big_void\"></div>

            
            
        <form action=\"";
        // line 16
        yield (((array_key_exists("item", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("item_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("item_create")));
        yield "\" 
      method=\"post\" enctype=\"multipart/form-data\">
    
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "_token", [], "any", false, false, false, 19), 'row');
        yield "

    <label for=\"name\">Название</label>
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), 'widget', ["attr" => ["type" => "text"]]);
        yield "
    <div class=\"error_error\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'errors');
        yield "</div>

     <label for=\"description\">Описание</label>
    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'widget', ["attr" => ["type" => "text"]]);
        yield "
    <div class=\"error_error\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'errors');
        yield "</div>

    <label for=\"imageFile\">Изображение</label>
    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "imageFile", [], "any", false, false, false, 30), 'widget', ["attr" => ["type" => "file", "accept" => "image/*"]]);
        yield "
    <div class=\"error_error\">";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "imageFile", [], "any", false, false, false, 31), 'errors');
        yield "</div>

    ";
        // line 33
        if ((array_key_exists("item", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33))) {
            // line 34
            yield "        <div class=\"image_in_form\">
            <p>Текущее изображение:</p>
            <img src=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/items/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36))), "html", null, true);
            yield "\" class=\"img_form\">
        </div>
    ";
        }
        // line 39
        yield "
    <label for=\"price\">Цена</label>
    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "price", [], "any", false, false, false, 41), 'widget', ["attr" => ["type" => "text"]]);
        yield "
    <div class=\"error_error\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "price", [], "any", false, false, false, 42), 'errors');
        yield "</div>

    <label for=\"last\">Количество в наличии</label>
    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "last", [], "any", false, false, false, 45), 'widget', ["attr" => ["type" => "number", "min" => "0"]]);
        yield "
    <div class=\"error_error\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "last", [], "any", false, false, false, 46), 'errors');
        yield "</div>

    <input type=\"submit\" value=\"отправить\">
</form>

    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "item_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  186 => 46,  182 => 45,  176 => 42,  172 => 41,  168 => 39,  162 => 36,  158 => 34,  156 => 33,  151 => 31,  147 => 30,  141 => 27,  137 => 26,  131 => 23,  127 => 22,  121 => 19,  115 => 16,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <main class=\"all_main\">
    <div class=\"big_void\"></div>

        <div class=\"catalogue_small\">
            <div class=\"r1 c2\"><div>{{ title }}</div></div>
        </div>
        <div class=\"big_void\"></div>

            
            
        <form action=\"{{ item is defined and item.id ? path('item_edit', {'id': item.id}) : path('item_create') }}\" 
      method=\"post\" enctype=\"multipart/form-data\">
    
    {{ form_row(form._token) }}

    <label for=\"name\">Название</label>
    {{ form_widget(form.name, {'attr': {'type': 'text'}}) }}
    <div class=\"error_error\">{{ form_errors(form.name) }}</div>

     <label for=\"description\">Описание</label>
    {{ form_widget(form.description, {'attr': {'type': 'text'}}) }}
    <div class=\"error_error\">{{ form_errors(form.description) }}</div>

    <label for=\"imageFile\">Изображение</label>
    {{ form_widget(form.imageFile, {'attr': {'type': 'file', 'accept': 'image/*'}}) }}
    <div class=\"error_error\">{{ form_errors(form.imageFile) }}</div>

    {% if item is defined and item.image %}
        <div class=\"image_in_form\">
            <p>Текущее изображение:</p>
            <img src=\"{{ asset('images/items/' ~ item.image) }}\" class=\"img_form\">
        </div>
    {% endif %}

    <label for=\"price\">Цена</label>
    {{ form_widget(form.price, {'attr': {'type': 'text'}}) }}
    <div class=\"error_error\">{{ form_errors(form.price) }}</div>

    <label for=\"last\">Количество в наличии</label>
    {{ form_widget(form.last, {'attr': {'type': 'number', 'min': '0'}}) }}
    <div class=\"error_error\">{{ form_errors(form.last) }}</div>

    <input type=\"submit\" value=\"отправить\">
</form>

    </main>
{% endblock %}
", "item_form.html.twig", "C:\\OSPanel\\domains\\flower\\templates\\item_form.html.twig");
    }
}
