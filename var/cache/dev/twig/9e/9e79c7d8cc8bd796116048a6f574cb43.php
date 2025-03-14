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

/* admin_items.html.twig */
class __TwigTemplate_68381249201dd05db6c1dd412eed1ad7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_items.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_items.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_items.html.twig", 1);
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

        yield "Все товары";
        
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            yield "    <script> alert('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "')</script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "      <main class=\"all_main\">
    <div class=\"big_void\"></div>
        <div class=\"catalogue_small\">
            <div class=\"r1 c2\"><div>ВСЕ ТОВАРЫ</div></div>
        </div>
        <div class=\"big_void\"></div>
       
   
    ";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "        <div class=\"empty_cart\">Нет товаров</div>
    ";
        } else {
            // line 20
            yield "        <div class=\"th_cart\">
           <a href=\"";
            // line 21
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("item_create");
            yield "\" class=\"button_create c5-7\">создать новый товар</a>
        </div>
        <div class=\"big_void\"></div>

        <div class=\"th_cart\">
            <div></div>
            <div>Фото</div>
            <div>Название</div>
            <div class=\"js_cent\">Цена</div>
            <div class=\"js_cent\">В наличии</div>
           <div class=\"js_cent\">Действия</div>
        </div>
        ";
            // line 33
            $context["sum"] = 0;
            // line 34
            yield "         ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                yield "                     <div class=\"tr_cart\">
                        <div></div>
                        <div class=\"cart_img\"><img src=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/items/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getImage", [], "method", false, false, false, 37))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 37), "html", null, true);
                yield "\" class=\"cart_image\"></div>
                        <div>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 38), "html", null, true);
                yield "</div>
                        <div class=\"js_cent\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPrice", [], "method", false, false, false, 39), "html", null, true);
                yield " ₽</div>
                        <div class=\"js_cent\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getLast", [], "method", false, false, false, 40), "html", null, true);
                yield "</div>
                         <div class=\"js_cent\">
                    <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("item_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 42)]), "html", null, true);
                yield "\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/free-icon-edit-1159633.png"), "html", null, true);
                yield "\" class=\"button-items\"></a>
                    <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("item_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 43)]), "html", null, true);
                yield "\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/free-icon-remove-folder-circular-button-8345013.png"), "html", null, true);
                yield "\" class=\"button-items\"></a>

                </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "   
    ";
        }
        // line 50
        yield "      <div id=\"empty_px\"></div>
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
        return "admin_items.html.twig";
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
        return array (  200 => 50,  196 => 48,  183 => 43,  177 => 42,  172 => 40,  168 => 39,  164 => 38,  158 => 37,  154 => 35,  149 => 34,  147 => 33,  132 => 21,  129 => 20,  125 => 18,  123 => 17,  113 => 9,  104 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Все товары{% endblock %}

{% block body %}
{% for message in app.flashes('success') %}
    <script> alert('{{ message }}')</script>
{% endfor %}
      <main class=\"all_main\">
    <div class=\"big_void\"></div>
        <div class=\"catalogue_small\">
            <div class=\"r1 c2\"><div>ВСЕ ТОВАРЫ</div></div>
        </div>
        <div class=\"big_void\"></div>
       
   
    {% if items is empty %}
        <div class=\"empty_cart\">Нет товаров</div>
    {% else %}
        <div class=\"th_cart\">
           <a href=\"{{ path('item_create') }}\" class=\"button_create c5-7\">создать новый товар</a>
        </div>
        <div class=\"big_void\"></div>

        <div class=\"th_cart\">
            <div></div>
            <div>Фото</div>
            <div>Название</div>
            <div class=\"js_cent\">Цена</div>
            <div class=\"js_cent\">В наличии</div>
           <div class=\"js_cent\">Действия</div>
        </div>
        {% set sum = 0 %}
         {% for item in items %}
                     <div class=\"tr_cart\">
                        <div></div>
                        <div class=\"cart_img\"><img src=\"{{ asset('images/items/' ~ item.getImage()) }}\" alt=\"{{ item.getName() }}\" class=\"cart_image\"></div>
                        <div>{{ item.getName() }}</div>
                        <div class=\"js_cent\">{{ item.getPrice() }} ₽</div>
                        <div class=\"js_cent\">{{ item.getLast() }}</div>
                         <div class=\"js_cent\">
                    <a href=\"{{ path('item_edit', { 'id': item.getId() }) }}\"><img src=\"{{ asset('images/free-icon-edit-1159633.png') }}\" class=\"button-items\"></a>
                    <a href=\"{{ path('item_delete', { 'id': item.getId() }) }}\"><img src=\"{{ asset('images/free-icon-remove-folder-circular-button-8345013.png') }}\" class=\"button-items\"></a>

                </div>
                    </div>
                {% endfor %}
   
    {% endif %}
      <div id=\"empty_px\"></div>
       </main>
   
{% endblock %}
", "admin_items.html.twig", "C:\\OSPanel\\domains\\flower\\templates\\admin_items.html.twig");
    }
}
