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

/* item_detail.html.twig */
class __TwigTemplate_8e5c255eee3918e002696131d1aede6d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "item_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "item_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "item_detail.html.twig", 1);
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

        yield "Каталог";
        
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
        yield "

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "    <script> alert('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "')</script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "
<main>
<div class=\"big_void\"></div>
        <div class=\"catalogue_small\">
            <div class=\"r1 c2\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "getName", [], "method", false, false, false, 15), "html", null, true);
        yield "<div></div></div>
        </div>
        <div class=\"big_void\"></div>
        <section class=\"one_item\">
            <div class=\"ct_img c2 r1-all\"><img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/items/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "getImage", [], "method", false, false, false, 19))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "getName", [], "method", false, false, false, 19), "html", null, true);
        yield "\" class=\"image_one_item\"></div>
             <div class=\"one_desc c4 r1\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "getDescription", [], "method", false, false, false, 20), "html", null, true);
        yield "</div>
             <div class=\"one_price c4 r2\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "getPrice", [], "method", false, false, false, 21), "html", null, true);
        yield " ₽</div>

             ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 24
            yield "                ";
            $context["in_cart"] = false;
            // line 25
            yield "                ";
            $context["quantity"] = 0;
            // line 26
            yield "
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cart_item"]) {
                // line 28
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cart_item"], "getItem", [], "any", false, false, false, 28), "id", [], "method", false, false, false, 28) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "getId", [], "method", false, false, false, 28))) {
                    // line 29
                    yield "                        ";
                    $context["in_cart"] = true;
                    // line 30
                    yield "                        ";
                    $context["quantity"] = CoreExtension::getAttribute($this->env, $this->source, $context["cart_item"], "getAddon", [], "method", false, false, false, 30);
                    // line 31
                    yield "                    ";
                }
                // line 32
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cart_item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "
                ";
            // line 34
            if ((isset($context["in_cart"]) || array_key_exists("in_cart", $context) ? $context["in_cart"] : (function () { throw new RuntimeError('Variable "in_cart" does not exist.', 34, $this->source); })())) {
                // line 35
                yield "                    <div class=\"r3 c4 one_button_pm\">
                        <a href=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "getId", [], "method", false, false, false, 36)]), "html", null, true);
                yield "\">−</a>
                        <div>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 37, $this->source); })()), "html", null, true);
                yield "</div>
                        <a href=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "getId", [], "method", false, false, false, 38)]), "html", null, true);
                yield "\">+</a>
                    </div>
                ";
            } else {
                // line 41
                yield "                    <div class=\"r3 c4 one_button\">
                        <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "getId", [], "method", false, false, false, 42)]), "html", null, true);
                yield "\" >добавить в корзину</a>
                    </div>
                ";
            }
            // line 45
            yield "                ";
        } else {
            // line 46
            yield "                    <div class=\"r3 c4 one_price\">Для добавления в корзину авторизуйтесь</div>
                ";
        }
        // line 48
        yield "
        </section>
       
    </main>
<div class=\"big_void\"></div>

       
    
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
        return "item_detail.html.twig";
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
        return array (  216 => 48,  212 => 46,  209 => 45,  203 => 42,  200 => 41,  194 => 38,  190 => 37,  186 => 36,  183 => 35,  181 => 34,  178 => 33,  172 => 32,  169 => 31,  166 => 30,  163 => 29,  160 => 28,  156 => 27,  153 => 26,  150 => 25,  147 => 24,  145 => 23,  140 => 21,  136 => 20,  130 => 19,  123 => 15,  117 => 11,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Каталог{% endblock %}

{% block body %}


{% for message in app.flashes('success') %}
    <script> alert('{{ message }}')</script>
{% endfor %}

<main>
<div class=\"big_void\"></div>
        <div class=\"catalogue_small\">
            <div class=\"r1 c2\">{{ item.getName() }}<div></div></div>
        </div>
        <div class=\"big_void\"></div>
        <section class=\"one_item\">
            <div class=\"ct_img c2 r1-all\"><img src=\"{{ asset('images/items/' ~ item.getImage()) }}\" alt=\"{{ item.getName() }}\" class=\"image_one_item\"></div>
             <div class=\"one_desc c4 r1\">{{ item.getDescription() }}</div>
             <div class=\"one_price c4 r2\">{{ item.getPrice() }} ₽</div>

             {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {% set in_cart = false %}
                {% set quantity = 0 %}

                {% for cart_item in cartItems %}
                    {% if cart_item.getItem.id() == item.getId() %}
                        {% set in_cart = true %}
                        {% set quantity = cart_item.getAddon() %}
                    {% endif %}
                {% endfor %}

                {% if in_cart %}
                    <div class=\"r3 c4 one_button_pm\">
                        <a href=\"{{ path('cart_remove', {'id': item.getId()}) }}\">−</a>
                        <div>{{ quantity }}</div>
                        <a href=\"{{ path('cart_add', {'id': item.getId()}) }}\">+</a>
                    </div>
                {% else %}
                    <div class=\"r3 c4 one_button\">
                        <a href=\"{{ path('cart_add', {'id': item.getId()}) }}\" >добавить в корзину</a>
                    </div>
                {% endif %}
                {% else %}
                    <div class=\"r3 c4 one_price\">Для добавления в корзину авторизуйтесь</div>
                {% endif %}

        </section>
       
    </main>
<div class=\"big_void\"></div>

       
    
{% endblock %}
", "item_detail.html.twig", "C:\\OSPanel\\domains\\flower\\templates\\item_detail.html.twig");
    }
}
