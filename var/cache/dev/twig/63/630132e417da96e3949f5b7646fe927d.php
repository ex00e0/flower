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
class __TwigTemplate_9e20e6f453a899c74d672ec141399d51 extends Template
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
                    <a href=\"index.html\">Главная</a>
                    <a href=\"catalog.html\">Каталог</a>
                    <a href=\"catalog.html\">О нас</a>
                   
                    ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            yield "                         <a href=\"delivery.html\">Заказы</a> 
                         <a href=\"login.html\"><img src=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shopping-cart (1).png"), "html", null, true);
            yield "\" ></a>
                    ";
        } else {
            // line 29
            yield "                        <a href=\"catalog.html\">Контакты</a>
                        <a href=\"login.html\"><img src=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/enter.png"), "html", null, true);
            yield "\" ></a>
                    ";
        }
        // line 32
        yield "
                </nav>
            </div>
            <div class=\"header_info\">
                <div class=\"r2 c1 hi_1\">СОЗДАЕМ ЛЮБОВЬ <br> ЧЕРЕЗ ЦВЕТЫ</div>
            </div>
        </header>
        


    <main>
        
    </main>

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
        return array (  164 => 13,  151 => 12,  136 => 8,  123 => 7,  96 => 32,  91 => 30,  88 => 29,  83 => 27,  80 => 26,  78 => 25,  65 => 14,  63 => 12,  60 => 11,  58 => 7,  50 => 1,);
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
                    <a href=\"index.html\">Главная</a>
                    <a href=\"catalog.html\">Каталог</a>
                    <a href=\"catalog.html\">О нас</a>
                   
                    {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                         <a href=\"delivery.html\">Заказы</a> 
                         <a href=\"login.html\"><img src=\"{{ asset('images/shopping-cart (1).png') }}\" ></a>
                    {% else %}
                        <a href=\"catalog.html\">Контакты</a>
                        <a href=\"login.html\"><img src=\"{{ asset('images/enter.png') }}\" ></a>
                    {% endif %}

                </nav>
            </div>
            <div class=\"header_info\">
                <div class=\"r2 c1 hi_1\">СОЗДАЕМ ЛЮБОВЬ <br> ЧЕРЕЗ ЦВЕТЫ</div>
            </div>
        </header>
        


    <main>
        
    </main>

    </body>
</html>
 ", "index.html.twig", "C:\\OSPanel\\domains\\flower\\templates\\index.html.twig");
    }
}
