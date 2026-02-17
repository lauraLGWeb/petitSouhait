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

/* idea/index.html.twig */
class __TwigTemplate_2b38674ea01d62abbc9053b23145a8fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "idea/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "idea/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Ajouter une idée";
        
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
        yield "    <p> voici nos idées</p>

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 9
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                yield "                <div class=\"flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">
                    ";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
<form method=\"GET\" action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_idee");
        yield "\">
    <label for=\"familyMembers\"> De qui souhaite-tu voir les idées :</label>

    <select name=\"membre\" id=\"familyMembers\" onchange=\"this.form.submit()\">
        <option value=\"\">-- Fais ton choix --</option>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Users"]) || array_key_exists("Users", $context) ? $context["Users"] : (function () { throw new RuntimeError('Variable "Users" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["User"]) {
            // line 22
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["User"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "\"
                ";
            // line 23
            if (((isset($context["selectedUser"]) || array_key_exists("selectedUser", $context) ? $context["selectedUser"] : (function () { throw new RuntimeError('Variable "selectedUser" does not exist.', 23, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedUser"]) || array_key_exists("selectedUser", $context) ? $context["selectedUser"] : (function () { throw new RuntimeError('Variable "selectedUser" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23) == CoreExtension::getAttribute($this->env, $this->source, $context["User"], "id", [], "any", false, false, false, 23)))) {
                // line 24
                yield "                     selected
                ";
            }
            // line 25
            yield ">
                ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["User"], "firstName", [], "any", false, false, false, 26), "html", null, true);
            yield "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['User'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "    </select>
</form>



    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ideas"]) || array_key_exists("ideas", $context) ? $context["ideas"] : (function () { throw new RuntimeError('Variable "ideas" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["idea"]) {
            // line 35
            yield "        <section class=\"ideaCard\">
            <div>
                <h2> ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "title", [], "any", false, false, false, 37), "html", null, true);
            yield "</h2>
                <p>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "comment", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
                <p>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "price", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>
                <p>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "picture", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                <p>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "user", [], "any", false, false, false, 41), "FirstName", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
            </div>
        </section>";
            $context['_iterated'] = true;
        }
        // line 43
        if (!$context['_iterated']) {
            // line 44
            yield "            <p>Sélectionne une personne pour voir ses idées.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['idea'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "
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
        return "idea/index.html.twig";
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
        return array (  219 => 46,  212 => 44,  210 => 43,  203 => 41,  199 => 40,  195 => 39,  191 => 38,  187 => 37,  183 => 35,  178 => 34,  171 => 29,  162 => 26,  159 => 25,  155 => 24,  153 => 23,  148 => 22,  144 => 21,  136 => 16,  133 => 15,  127 => 14,  118 => 11,  113 => 10,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une idée{% endblock %}

{% block body %}
    <p> voici nos idées</p>

        {% for type, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message|trans }}
                </div>
            {% endfor %}
        {% endfor %}

<form method=\"GET\" action=\"{{ path('app_idee') }}\">
    <label for=\"familyMembers\"> De qui souhaite-tu voir les idées :</label>

    <select name=\"membre\" id=\"familyMembers\" onchange=\"this.form.submit()\">
        <option value=\"\">-- Fais ton choix --</option>
        {% for User in Users %}
            <option value=\"{{ User.id }}\"
                {% if selectedUser and selectedUser.id == User.id %}
                     selected
                {% endif %}>
                {{ User.firstName }}
            </option>
        {% endfor %}
    </select>
</form>



    {% for idea in ideas %}
        <section class=\"ideaCard\">
            <div>
                <h2> {{ idea.title }}</h2>
                <p>{{ idea.comment }}</p>
                <p>{{ idea.price }}</p>
                <p>{{ idea.picture }}</p>
                <p>{{ idea.user.FirstName }}</p>
            </div>
        </section>{% else %}
            <p>Sélectionne une personne pour voir ses idées.</p>
    {% endfor %}

{% endblock %}", "idea/index.html.twig", "/Applications/MAMP/htdocs/dw6/projets/PetitSouhait/templates/idea/index.html.twig");
    }
}
