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

/* base.html.twig */
class __TwigTemplate_0bddd17e9d2b5212b157f47983279a6f extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
         <header class=\"header_all\">
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/enter (1).png"), "html", null, true);
                yield "\" ></a>

                        ";
            } else {
                // line 32
                yield "                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
                yield "\">О нас</a>
                         <a href=\"";
                // line 33
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders");
                yield "\">Заказы</a> 
                         <a href=\"";
                // line 34
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
                yield "\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shopping-cart (2).png"), "html", null, true);
                yield "\" ></a>
                         <a href=\"";
                // line 35
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                yield "\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/enter (1).png"), "html", null, true);
                yield "\" ></a>
                         ";
            }
            // line 37
            yield "                    ";
        } else {
            // line 38
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
            yield "\">О нас</a>
                        <a href=\"catalog.html\">Контакты</a>
                        <a href=\"";
            // line 40
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/enter (1).png"), "html", null, true);
            yield "\" ></a>
                    
                    ";
        }
        // line 43
        yield "

                </nav>
            </div>
        </header>
       
        ";
        // line 49
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 50
        yield "        
        <script>
        if (document.body.scrollHeight < document.documentElement.clientHeight) {
            let diff = document.documentElement.clientHeight - document.body.scrollHeight;
            document.getElementById('empty_px').style.height = `\${diff}px`;
        }
        </script>
    </body>
</html>";
        
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

    // line 49
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  227 => 49,  216 => 13,  203 => 12,  188 => 8,  175 => 7,  156 => 50,  154 => 49,  146 => 43,  138 => 40,  132 => 38,  129 => 37,  122 => 35,  116 => 34,  112 => 33,  107 => 32,  99 => 29,  95 => 28,  90 => 27,  87 => 26,  85 => 25,  79 => 22,  75 => 21,  66 => 14,  64 => 12,  61 => 11,  59 => 7,  51 => 1,);
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
        
         <header class=\"header_all\">
            <div class=\"nav_row\">
                <div class=\"logo r1 c1\">FLOWER</div>
                <nav class=\"nav_main r1 c3\">
                    <a href=\"{{path('app_index')}}\">Главная</a>
                    <a href=\"{{path('catalogue')}}\">Каталог</a>
                    
                   
                    {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                        {% if is_granted('ROLE_ADMIN') %}
                         <a href=\"{{ path('admin_items') }}\">Все товары</a> 
                            <a href=\"{{ path('admin_orders') }}\">Все заказы</a> 
                         <a href=\"{{path('logout')}}\"><img src=\"{{ asset('images/enter (1).png') }}\" ></a>

                        {% else %}
                        <a href=\"{{path('app_index')}}\">О нас</a>
                         <a href=\"{{path('orders')}}\">Заказы</a> 
                         <a href=\"{{path('cart')}}\"><img src=\"{{ asset('images/shopping-cart (2).png') }}\" ></a>
                         <a href=\"{{path('logout')}}\"><img src=\"{{ asset('images/enter (1).png') }}\" ></a>
                         {% endif %}
                    {% else %}
                        <a href=\"{{path('app_index')}}\">О нас</a>
                        <a href=\"catalog.html\">Контакты</a>
                        <a href=\"{{path('app_login')}}\"><img src=\"{{ asset('images/enter (1).png') }}\" ></a>
                    
                    {% endif %}


                </nav>
            </div>
        </header>
       
        {% block body %}{% endblock %}
        
        <script>
        if (document.body.scrollHeight < document.documentElement.clientHeight) {
            let diff = document.documentElement.clientHeight - document.body.scrollHeight;
            document.getElementById('empty_px').style.height = `\${diff}px`;
        }
        </script>
    </body>
</html>", "base.html.twig", "C:\\OSPanel\\domains\\flower\\templates\\base.html.twig");
    }
}
