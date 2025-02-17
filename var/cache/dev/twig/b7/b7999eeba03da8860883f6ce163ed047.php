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

/* index.html copy_xque.twig */
class __TwigTemplate_e1f4f21179b41c59042c4339ffa0683d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html copy_xque.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html copy_xque.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html copy_xque.twig", 1);
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

        yield "Hello PostsController!";
        
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
    <main>
        <section class=\"hero\">
            <h1>Создаём любовь через цветы</h1>
            <p>Мы выращиваем наши цветы с любовью и вниманием специально для вас.</p>
            <a href=\"catalog.html\" class=\"btn\">Перейти в каталог</a>
        </section>
        
        <section class=\"products\">
            <div class=\"product\">
                <img src=\"flower1.jpg\" alt=\"Букет дня\">
                <h3>Букет дня</h3>
                <p>3800 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower2.jpg\" alt=\"Букет недели\">
                <h3>Букет недели</h3>
                <p>7300 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower3.jpg\" alt=\"Композиция 'Lee'\">
                <h3>Композиция \"Lee\"</h3>
                <p>4200 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower4.jpg\" alt=\"Композиция 'Sea Lo'\">
                <h3>Композиция \"Sea Lo\"</h3>
                <p>5400 руб.</p>
            </div>
        </section>
         <section class=\"products\">
            <div class=\"product\">
                <img src=\"flower1.jpg\" alt=\"Букет дня\">
                <h3>Букет дня</h3>
                <p>3800 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower2.jpg\" alt=\"Букет недели\">
                <h3>Букет недели</h3>
                <p>7300 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower3.jpg\" alt=\"Композиция 'Lee'\">
                <h3>Композиция \"Lee\"</h3>
                <p>4200 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower4.jpg\" alt=\"Композиция 'Sea Lo'\">
                <h3>Композиция \"Sea Lo\"</h3>
                <p>5400 руб.</p>
            </div>
        </section>
        
        <section class=\"delivery\">
            <h2>Доставка</h2>
            <div>
                <p>Курьером по Москве - 600 руб.</p>
            </div>
            <div>
                <p>Срочная доставка по Москве - 1500 руб.</p>
            </div>
            <div>
                <p>В другие города - 3000 руб.</p>
            </div>
            <a href=\"#\" class=\"btn\">Сделать заказ</a>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2025 Kami Flowers. Все права защищены.</p>
    </footer>


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
        return "index.html copy_xque.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PostsController!{% endblock %}

{% block body %}

    <main>
        <section class=\"hero\">
            <h1>Создаём любовь через цветы</h1>
            <p>Мы выращиваем наши цветы с любовью и вниманием специально для вас.</p>
            <a href=\"catalog.html\" class=\"btn\">Перейти в каталог</a>
        </section>
        
        <section class=\"products\">
            <div class=\"product\">
                <img src=\"flower1.jpg\" alt=\"Букет дня\">
                <h3>Букет дня</h3>
                <p>3800 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower2.jpg\" alt=\"Букет недели\">
                <h3>Букет недели</h3>
                <p>7300 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower3.jpg\" alt=\"Композиция 'Lee'\">
                <h3>Композиция \"Lee\"</h3>
                <p>4200 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower4.jpg\" alt=\"Композиция 'Sea Lo'\">
                <h3>Композиция \"Sea Lo\"</h3>
                <p>5400 руб.</p>
            </div>
        </section>
         <section class=\"products\">
            <div class=\"product\">
                <img src=\"flower1.jpg\" alt=\"Букет дня\">
                <h3>Букет дня</h3>
                <p>3800 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower2.jpg\" alt=\"Букет недели\">
                <h3>Букет недели</h3>
                <p>7300 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower3.jpg\" alt=\"Композиция 'Lee'\">
                <h3>Композиция \"Lee\"</h3>
                <p>4200 руб.</p>
            </div>
            <div class=\"product\">
                <img src=\"flower4.jpg\" alt=\"Композиция 'Sea Lo'\">
                <h3>Композиция \"Sea Lo\"</h3>
                <p>5400 руб.</p>
            </div>
        </section>
        
        <section class=\"delivery\">
            <h2>Доставка</h2>
            <div>
                <p>Курьером по Москве - 600 руб.</p>
            </div>
            <div>
                <p>Срочная доставка по Москве - 1500 руб.</p>
            </div>
            <div>
                <p>В другие города - 3000 руб.</p>
            </div>
            <a href=\"#\" class=\"btn\">Сделать заказ</a>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2025 Kami Flowers. Все права защищены.</p>
    </footer>


{% endblock %}
 ", "index.html copy_xque.twig", "C:\\OSPanel\\domains\\flower\\templates\\index.html copy_xque.twig");
    }
}
