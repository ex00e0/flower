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

/* admin_orders.html.twig */
class __TwigTemplate_c0f09c2183f503f815082d028d864c55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_orders.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_orders.html.twig", 1);
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

        yield "Все заказы";
        
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
        yield "   <main class=\"all_main\">
    <div class=\"big_void\"></div>
        <div class=\"catalogue_small\">
            <div class=\"r1 c2\"><div>ВСЕ ЗАКАЗЫ</div></div>
        </div>
        <div class=\"big_void\"></div>
       
    
    ";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "        <div class=\"empty_cart\">Заказов нет</div>
    ";
        } else {
            // line 20
            yield "        <div class=\"th_order\">
            <div></div>
            <div class=\"js_cent\">Номер</div>
            <div class=\"js_cent\">Дата</div>
            <div class=\"js_cent\">Сумма</div>
            <div class=\"js_cent\">Состав заказа</div>
            <div class=\"js_cent\">Статус</div>

        </div>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 30
                yield "        <div class=\"tr_order\">
            <div></div>
            <div>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "getId", [], "method", false, false, false, 32), "html", null, true);
                yield "</div>
                        <div>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "getDate", [], "method", false, false, false, 33), "d.m.Y H:i"), "html", null, true);
                yield "</div>
                        <div>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "getSum", [], "method", false, false, false, 34), "html", null, true);
                yield " ₽</div>
                        <div>
                            ";
                // line 36
                $context["compound"] = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "getCompound", [], "method", false, false, false, 36);
                // line 37
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 37, $this->source); })()));
                foreach ($context['_seq'] as $context["itemId"] => $context["quantity"]) {
                    // line 38
                    yield "                                <p>";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["itemNames"] ?? null), $context["itemId"], [], "array", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["itemNames"] ?? null), $context["itemId"], [], "array", false, false, false, 38)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["itemNames"] ?? null), $context["itemId"], [], "array", false, false, false, 38), "html", null, true)) : ("Неизвестный товар"));
                    yield ", Количество: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["quantity"], "html", null, true);
                    yield "</p>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['itemId'], $context['quantity'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                yield "                        </div>
            <div>
              <select name=\"order_status\" class=\"order-status\" data-order-id=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "getId", [], "method", false, false, false, 42), "html", null, true);
                yield "\">
    ";
                // line 43
                $context["statuses"] = ["создан", "отклонен", "принят", "выполнен"];
                // line 44
                yield "    
    ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 45, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 46
                    yield "        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "getStatus", [], "method", false, false, false, 46) == $context["status"])) {
                        yield "selected";
                    }
                    yield " ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "getStatus", [], "method", false, false, false, 46) == "отклонен") || (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "getStatus", [], "method", false, false, false, 46) == "выполнен")) || ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "getStatus", [], "method", false, false, false, 46) == "принят") && (($context["status"] == "создан") || ($context["status"] == "отклонен"))))) {
                        yield "disabled";
                    }
                    yield ">
            ";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
                    yield "
        </option>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "</select>

<script>
   document.addEventListener('DOMContentLoaded', function () {
    function updateOrderStatus(select) {
        select.addEventListener('change', function () {
            let orderId = this.dataset.orderId;
            let newStatus = this.value;

            fetch(`/update-order-status/\${orderId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ status: newStatus })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Статус заказа обновлён');

                    // Перерисовка <select> с новыми условиями
                    let updatedSelect = document.createElement('select');
                    updatedSelect.classList.add('order-status');
                    updatedSelect.dataset.orderId = orderId;

                    let statuses = ['создан', 'отклонен', 'принят', 'выполнен'];
                    statuses.forEach(status => {
                        let option = document.createElement('option');
                        option.value = status;
                        option.textContent = status;

                        // Устанавливаем выбранный статус
                        if (status === newStatus) {
                            option.selected = true;
                        }

                        // Отключаем статусы, если они не соответствуют порядку
                        if (
                            (newStatus === 'отклонен') ||
                            (newStatus === 'принят' && status === 'создан') ||
                             (newStatus === 'принят' && status === 'отклонен') ||
                            (newStatus === 'выполнен')
                        ) {
                            option.disabled = true;
                        }

                        updatedSelect.appendChild(option);
                    });

                    this.replaceWith(updatedSelect);
                    updateOrderStatus(updatedSelect); // Повторно вешаем обработчик
                } else {
                    alert('Ошибка: ' + data.message);
                }
            })
            .catch(error => console.error('Ошибка:', error));
        });
    }

    // Инициализация обработчиков для всех select
    document.querySelectorAll('.order-status').forEach(select => {
        updateOrderStatus(select);
    });
});

</script>
            
            </div>

        </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "    ";
        }
        // line 124
        yield "    <div id=\"empty_px\"></div>
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
        return "admin_orders.html.twig";
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
        return array (  299 => 124,  296 => 123,  218 => 50,  209 => 47,  196 => 46,  192 => 45,  189 => 44,  187 => 43,  183 => 42,  179 => 40,  168 => 38,  163 => 37,  161 => 36,  156 => 34,  152 => 33,  148 => 32,  144 => 30,  140 => 29,  129 => 20,  125 => 18,  123 => 17,  113 => 9,  104 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Все заказы{% endblock %}

{% block body %}
{% for message in app.flashes('success') %}
    <script> alert('{{ message }}')</script>
{% endfor %}
   <main class=\"all_main\">
    <div class=\"big_void\"></div>
        <div class=\"catalogue_small\">
            <div class=\"r1 c2\"><div>ВСЕ ЗАКАЗЫ</div></div>
        </div>
        <div class=\"big_void\"></div>
       
    
    {% if orders is empty %}
        <div class=\"empty_cart\">Заказов нет</div>
    {% else %}
        <div class=\"th_order\">
            <div></div>
            <div class=\"js_cent\">Номер</div>
            <div class=\"js_cent\">Дата</div>
            <div class=\"js_cent\">Сумма</div>
            <div class=\"js_cent\">Состав заказа</div>
            <div class=\"js_cent\">Статус</div>

        </div>
        {% for order in orders %}
        <div class=\"tr_order\">
            <div></div>
            <div>{{ order.getId() }}</div>
                        <div>{{ order.getDate()|date('d.m.Y H:i') }}</div>
                        <div>{{ order.getSum() }} ₽</div>
                        <div>
                            {% set compound = order.getCompound() %}
                            {% for itemId, quantity in compound %}
                                <p>{{itemNames[itemId] ?? 'Неизвестный товар' }}, Количество: {{ quantity }}</p>
                            {% endfor %}
                        </div>
            <div>
              <select name=\"order_status\" class=\"order-status\" data-order-id=\"{{ order.getId() }}\">
    {% set statuses = ['создан', 'отклонен', 'принят', 'выполнен'] %}
    
    {% for status in statuses %}
        <option value=\"{{ status }}\" {% if order.getStatus() == status %}selected{% endif %} {% if (order.getStatus() == 'отклонен') or (order.getStatus() == 'выполнен') or (order.getStatus() == 'принят' and (status == 'создан' or status == 'отклонен') ) %}disabled{% endif %}>
            {{ status }}
        </option>
    {% endfor %}
</select>

<script>
   document.addEventListener('DOMContentLoaded', function () {
    function updateOrderStatus(select) {
        select.addEventListener('change', function () {
            let orderId = this.dataset.orderId;
            let newStatus = this.value;

            fetch(`/update-order-status/\${orderId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ status: newStatus })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Статус заказа обновлён');

                    // Перерисовка <select> с новыми условиями
                    let updatedSelect = document.createElement('select');
                    updatedSelect.classList.add('order-status');
                    updatedSelect.dataset.orderId = orderId;

                    let statuses = ['создан', 'отклонен', 'принят', 'выполнен'];
                    statuses.forEach(status => {
                        let option = document.createElement('option');
                        option.value = status;
                        option.textContent = status;

                        // Устанавливаем выбранный статус
                        if (status === newStatus) {
                            option.selected = true;
                        }

                        // Отключаем статусы, если они не соответствуют порядку
                        if (
                            (newStatus === 'отклонен') ||
                            (newStatus === 'принят' && status === 'создан') ||
                             (newStatus === 'принят' && status === 'отклонен') ||
                            (newStatus === 'выполнен')
                        ) {
                            option.disabled = true;
                        }

                        updatedSelect.appendChild(option);
                    });

                    this.replaceWith(updatedSelect);
                    updateOrderStatus(updatedSelect); // Повторно вешаем обработчик
                } else {
                    alert('Ошибка: ' + data.message);
                }
            })
            .catch(error => console.error('Ошибка:', error));
        });
    }

    // Инициализация обработчиков для всех select
    document.querySelectorAll('.order-status').forEach(select => {
        updateOrderStatus(select);
    });
});

</script>
            
            </div>

        </div>
         {% endfor %}
    {% endif %}
    <div id=\"empty_px\"></div>
    </main>
   
{% endblock %}
", "admin_orders.html.twig", "C:\\OSPanel\\domains\\flower\\templates\\admin_orders.html.twig");
    }
}
