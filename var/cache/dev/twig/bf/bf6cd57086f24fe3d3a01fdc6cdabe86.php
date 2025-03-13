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

/* cart.html.twig */
class __TwigTemplate_0d696de40e88cd1b4a2810a6458df6db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart.html.twig", 1);
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

        yield "Моя корзина";
        
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
            <div class=\"r1 c2\"><div>ВАША КОРЗИНА</div></div>
        </div>
        <div class=\"big_void\"></div>
       
   
    ";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "        <div class=\"empty_cart\">Корзина пуста</div>
    ";
        } else {
            // line 20
            yield "        <div class=\"th_cart\">
            <div></div>
            <div>Фото</div>
            <div>Название</div>
            <div class=\"js_cent\">Цена</div>
            <div class=\"js_cent\">Количество</div>
            <div class=\"js_cent\">Итого</div>
        </div>
        ";
            // line 28
            $context["sum"] = 0;
            // line 29
            yield "         ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
                // line 30
                yield "                    ";
                $context["item"] = CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "getItem", [], "method", false, false, false, 30);
                // line 31
                yield "                     <div class=\"tr_cart\">
                        <div></div>
                        <div class=\"cart_img\"><img src=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/items/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "getImage", [], "method", false, false, false, 33))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "getName", [], "method", false, false, false, 33), "html", null, true);
                yield "\" class=\"cart_image\"></div>
                        <div>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "getName", [], "method", false, false, false, 34), "html", null, true);
                yield "</div>
                        <div class=\"js_cent\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "getPrice", [], "method", false, false, false, 35), "html", null, true);
                yield " ₽</div>
                       <div class=\"cart_button_pm\">
                        <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "getId", [], "method", false, false, false, 37)]), "html", null, true);
                yield "\">−</a>
                        <div>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "getAddon", [], "any", false, false, false, 38), "html", null, true);
                yield "</div>
                        <a href=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "getId", [], "method", false, false, false, 39)]), "html", null, true);
                yield "\">+</a>
                        </div>
                        <div class=\"js_cent\">";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "getPrice", [], "method", false, false, false, 41) * CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "getAddon", [], "any", false, false, false, 41)), "html", null, true);
                yield " ₽</div>
                        ";
                // line 42
                $context["sum"] = ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 42, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "getPrice", [], "method", false, false, false, 42) * CoreExtension::getAttribute($this->env, $this->source, $context["cart"], "getAddon", [], "any", false, false, false, 42)));
                // line 43
                yield "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cart'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                  <div class=\"th_cart\">
        </div>
    <div class=\"th_cart\">
            <div class=\"c2-all r1 as_cent\">Сумма: ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 48, $this->source); })()), "html", null, true);
            yield " ₽</div>
            <div class=\"c6 r1 one_button_cart\">
                        <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("make_order", ["sum" => (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 50, $this->source); })())]), "html", null, true);
            yield "\" >заказать</a>
                    </div>
        </div>
    ";
        }
        // line 54
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
        return "cart.html.twig";
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
        return array (  211 => 54,  204 => 50,  199 => 48,  194 => 45,  187 => 43,  185 => 42,  181 => 41,  176 => 39,  172 => 38,  168 => 37,  163 => 35,  159 => 34,  153 => 33,  149 => 31,  146 => 30,  141 => 29,  139 => 28,  129 => 20,  125 => 18,  123 => 17,  113 => 9,  104 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Моя корзина{% endblock %}

{% block body %}
{% for message in app.flashes('success') %}
    <script> alert('{{ message }}')</script>
{% endfor %}
      <main class=\"all_main\">
    <div class=\"big_void\"></div>
        <div class=\"catalogue_small\">
            <div class=\"r1 c2\"><div>ВАША КОРЗИНА</div></div>
        </div>
        <div class=\"big_void\"></div>
       
   
    {% if cartItems is empty %}
        <div class=\"empty_cart\">Корзина пуста</div>
    {% else %}
        <div class=\"th_cart\">
            <div></div>
            <div>Фото</div>
            <div>Название</div>
            <div class=\"js_cent\">Цена</div>
            <div class=\"js_cent\">Количество</div>
            <div class=\"js_cent\">Итого</div>
        </div>
        {% set sum = 0 %}
         {% for cart in cartItems %}
                    {% set item = cart.getItem() %}
                     <div class=\"tr_cart\">
                        <div></div>
                        <div class=\"cart_img\"><img src=\"{{ asset('images/items/' ~ item.getImage()) }}\" alt=\"{{ item.getName() }}\" class=\"cart_image\"></div>
                        <div>{{ item.getName() }}</div>
                        <div class=\"js_cent\">{{ item.getPrice() }} ₽</div>
                       <div class=\"cart_button_pm\">
                        <a href=\"{{ path('cart_remove', {'id': item.getId()}) }}\">−</a>
                        <div>{{ cart.getAddon }}</div>
                        <a href=\"{{ path('cart_add', {'id': item.getId()}) }}\">+</a>
                        </div>
                        <div class=\"js_cent\">{{ item.getPrice() * cart.getAddon }} ₽</div>
                        {% set sum = sum + item.getPrice() * cart.getAddon %}
                    </div>
                {% endfor %}
                  <div class=\"th_cart\">
        </div>
    <div class=\"th_cart\">
            <div class=\"c2-all r1 as_cent\">Сумма: {{sum}} ₽</div>
            <div class=\"c6 r1 one_button_cart\">
                        <a href=\"{{ path('make_order', {'sum': sum}) }}\" >заказать</a>
                    </div>
        </div>
    {% endif %}
      <div id=\"empty_px\"></div>
       </main>
   
{% endblock %}
", "cart.html.twig", "C:\\OSPanel\\domains\\flower\\templates\\cart.html.twig");
    }
}
