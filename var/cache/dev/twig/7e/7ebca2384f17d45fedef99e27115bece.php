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

/* index.html.twig */
class __TwigTemplate_e20d18dce56381759fbd19b14b80adfd extends Template
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

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Цветочный салон</title>
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 11
        yield "
        ";
        // line 12
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 14
        yield "    </head>
    <body>
        
        <header class=\"header_main\">
            <div class=\"nav_row\">
                <div class=\"logo r1 c1\">FLOWER</div>
                <nav class=\"nav_main r1 c3\">
                  <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">Главная</a>
                    <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        yield "\">Каталог</a>
                    
                   
                    ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            yield "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 27
                yield "                         <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_items");
                yield "\">Все товары</a> 
                            <a href=\"";
                // line 28
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
                yield "\">Все заказы</a> 
                         <a href=\"";
                // line 29
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                yield "\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/enter.png"), "html", null, true);
                yield "\" ></a>

                        ";
            } else {
                // line 32
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
                yield "#about_us\">О нас</a>
                         <a href=\"";
                // line 33
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders");
                yield "\">Заказы</a> 
                         <a href=\"";
                // line 34
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
                yield "\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shopping-cart (1).png"), "html", null, true);
                yield "\" ></a>
                         <a href=\"";
                // line 35
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                yield "\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/enter.png"), "html", null, true);
                yield "\" ></a>
                         ";
            }
            // line 37
            yield "                    ";
        } else {
            // line 38
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
            yield "#about_us\">О нас</a>
                        <a href=\"";
            // line 39
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
            yield "#footer\">Контакты</a>
                        <a href=\"";
            // line 40
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/enter.png"), "html", null, true);
            yield "\" ></a>
                    
                    ";
        }
        // line 43
        yield "
                </nav>
            </div>
            <div class=\"header_info\">
                <div class=\"r2 c1 hi_1\">СОЗДАЕМ ЛЮБОВЬ <br> ЧЕРЕЗ ЦВЕТЫ</div>
                <div class=\"r4 c1 hi_2\">мы выращиваем наши цветы с любовью и заботой <br> специально для вас, <br> чтобы вы всегда могли любоваться <br> свежим и красивым букетом от Flower</div>
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        yield "\" class=\"r5 c1 hi_3\"><div>ПЕРЕЙТИ В КАТАЛОГ</div></a>
            </div>
        </header>
    <main>
        <section class=\"cat_main\">
            <div class=\"r1 c2 ct_1\"><div>НАШИ ЦВЕТЫ</div></div>
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        yield "\" class=\"r1 c4 ct_2\"><div>посмотреть все</div></a>
            <div class=\"r2 c2 ct_3\">
            ";
        // line 57
        $context["counter"] = 1;
        // line 58
        yield "             ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["catalogue"]) || array_key_exists("catalogue", $context) ? $context["catalogue"] : (function () { throw new RuntimeError('Variable "catalogue" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            yield "           
                <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("item_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 60)]), "html", null, true);
            yield "\">
                    <div><img src=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/items/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getImage", [], "method", false, false, false, 61))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 61), "html", null, true);
            yield "\" class=\"image_index_size\"></div>
                    <div>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 62), "html", null, true);
            yield "</div>
                    <div>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPrice", [], "method", false, false, false, 63), "html", null, true);
            yield " ₽</div>
                </a>
             ";
            // line 65
            if ((((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 65, $this->source); })()) == 1) || ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 65, $this->source); })()) == 3))) {
                // line 66
                yield "               
               <div></div>

            ";
            }
            // line 70
            yield "             ";
            if (((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 70, $this->source); })()) == 2)) {
                // line 71
                yield "               
               <div></div>  <div></div>  <div></div>

            ";
            }
            // line 75
            yield "
                 
                 ";
            // line 77
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 77, $this->source); })()) + 1);
            // line 78
            yield "            
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "               
            </div>
        </section>
        <section class=\"about_us\" id=\"about_us\">
            <div class=\"c2\">Наш цветочный салон работает уже 8 лет. Мы создаем букеты для вас на 8 марта, свадьбу или вообще без повода. Доставим в любую точку города любые букеты из нашего обширного каталога.</div>
        </section>
    </main>
        <footer id=\"footer\">
            <div class=\"address r1 c2\">Наш адрес - г.Уфа, ул.Кирова, 65</div>
            <div class=\"phone r1 c3\">Номер телефона - +7999-899-89-89</div>
            <div class=\"logo r1 c4\">FLOWER</div>
        </footer>
    </body>
</html>
 ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html.twig";
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
        return array (  296 => 13,  283 => 12,  268 => 8,  255 => 7,  230 => 81,  222 => 78,  220 => 77,  216 => 75,  210 => 71,  207 => 70,  201 => 66,  199 => 65,  194 => 63,  190 => 62,  184 => 61,  180 => 60,  177 => 59,  172 => 58,  170 => 57,  165 => 55,  156 => 49,  148 => 43,  140 => 40,  136 => 39,  131 => 38,  128 => 37,  121 => 35,  115 => 34,  111 => 33,  106 => 32,  98 => 29,  94 => 28,  89 => 27,  86 => 26,  84 => 25,  78 => 22,  74 => 21,  65 => 14,  63 => 12,  60 => 11,  58 => 7,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Цветочный салон</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

        {% endblock %}

        {% block javascripts %}
        {% endblock %}
    </head>
    <body>
        
        <header class=\"header_main\">
            <div class=\"nav_row\">
                <div class=\"logo r1 c1\">FLOWER</div>
                <nav class=\"nav_main r1 c3\">
                  <a href=\"{{path('app_index')}}\">Главная</a>
                    <a href=\"{{path('catalogue')}}\">Каталог</a>
                    
                   
                    {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                        {% if is_granted('ROLE_ADMIN') %}
                         <a href=\"{{ path('admin_items') }}\">Все товары</a> 
                            <a href=\"{{ path('admin_orders') }}\">Все заказы</a> 
                         <a href=\"{{path('logout')}}\"><img src=\"{{ asset('images/enter.png') }}\" ></a>

                        {% else %}
                        <a href=\"{{path('app_index')}}#about_us\">О нас</a>
                         <a href=\"{{path('orders')}}\">Заказы</a> 
                         <a href=\"{{path('cart')}}\"><img src=\"{{ asset('images/shopping-cart (1).png') }}\" ></a>
                         <a href=\"{{path('logout')}}\"><img src=\"{{ asset('images/enter.png') }}\" ></a>
                         {% endif %}
                    {% else %}
                        <a href=\"{{path('app_index')}}#about_us\">О нас</a>
                        <a href=\"{{path('app_index')}}#footer\">Контакты</a>
                        <a href=\"{{path('app_login')}}\"><img src=\"{{ asset('images/enter.png') }}\" ></a>
                    
                    {% endif %}

                </nav>
            </div>
            <div class=\"header_info\">
                <div class=\"r2 c1 hi_1\">СОЗДАЕМ ЛЮБОВЬ <br> ЧЕРЕЗ ЦВЕТЫ</div>
                <div class=\"r4 c1 hi_2\">мы выращиваем наши цветы с любовью и заботой <br> специально для вас, <br> чтобы вы всегда могли любоваться <br> свежим и красивым букетом от Flower</div>
                <a href=\"{{path('catalogue')}}\" class=\"r5 c1 hi_3\"><div>ПЕРЕЙТИ В КАТАЛОГ</div></a>
            </div>
        </header>
    <main>
        <section class=\"cat_main\">
            <div class=\"r1 c2 ct_1\"><div>НАШИ ЦВЕТЫ</div></div>
            <a href=\"{{path('catalogue')}}\" class=\"r1 c4 ct_2\"><div>посмотреть все</div></a>
            <div class=\"r2 c2 ct_3\">
            {% set counter = 1 %}
             {% for item in catalogue %}
           
                <a href=\"{{ path('item_detail', {'id': item.getId()}) }}\">
                    <div><img src=\"{{ asset('images/items/' ~ item.getImage()) }}\" alt=\"{{ item.getName() }}\" class=\"image_index_size\"></div>
                    <div>{{ item.getName() }}</div>
                    <div>{{ item.getPrice() }} ₽</div>
                </a>
             {% if counter == 1 or counter == 3 %}
               
               <div></div>

            {%endif%}
             {% if counter == 2 %}
               
               <div></div>  <div></div>  <div></div>

            {%endif%}

                 
                 {% set counter = counter + 1 %}
            
                    
                {% endfor %}
               
            </div>
        </section>
        <section class=\"about_us\" id=\"about_us\">
            <div class=\"c2\">Наш цветочный салон работает уже 8 лет. Мы создаем букеты для вас на 8 марта, свадьбу или вообще без повода. Доставим в любую точку города любые букеты из нашего обширного каталога.</div>
        </section>
    </main>
        <footer id=\"footer\">
            <div class=\"address r1 c2\">Наш адрес - г.Уфа, ул.Кирова, 65</div>
            <div class=\"phone r1 c3\">Номер телефона - +7999-899-89-89</div>
            <div class=\"logo r1 c4\">FLOWER</div>
        </footer>
    </body>
</html>
 ", "index.html.twig", "C:\\OSPanel\\domains\\flower\\templates\\index.html.twig");
    }
}
