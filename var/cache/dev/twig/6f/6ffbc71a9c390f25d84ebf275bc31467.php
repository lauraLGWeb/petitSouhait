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
            'CSS' => [$this, 'block_CSS'],
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

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_CSS(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        // line 8
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/ideas.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "    <section class=\"pageContainer\">

        <h1> Voici nos idées</h1>

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                yield "                    <div class=\"flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">
                        ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
    ";
        // line 27
        yield "
        <form class=\"filter-form\" method=\"GET\" action=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_idee");
        yield "\">
            <label for=\"familyMembers\"> De qui souhaite-tu voir les idées :</label>

            <select name=\"membre\" id=\"familyMembers\" onchange=\"this.form.submit()\">
                <option value=\"\">-- Fais ton choix --</option>

                ";
        // line 35
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Users"]) || array_key_exists("Users", $context) ? $context["Users"] : (function () { throw new RuntimeError('Variable "Users" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["User"]) {
            // line 36
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["User"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "\"
                    ";
            // line 38
            yield "                        ";
            if (((isset($context["selectedUser"]) || array_key_exists("selectedUser", $context) ? $context["selectedUser"] : (function () { throw new RuntimeError('Variable "selectedUser" does not exist.', 38, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedUser"]) || array_key_exists("selectedUser", $context) ? $context["selectedUser"] : (function () { throw new RuntimeError('Variable "selectedUser" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38) == CoreExtension::getAttribute($this->env, $this->source, $context["User"], "id", [], "any", false, false, false, 38)))) {
                // line 39
                yield "                            selected
                        ";
            }
            // line 40
            yield ">
                        ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["User"], "firstName", [], "any", false, false, false, 41), "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['User'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "            </select>
        </form>


        ";
        // line 49
        yield "        <div class=\"ideas-grid\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ideas"]) || array_key_exists("ideas", $context) ? $context["ideas"] : (function () { throw new RuntimeError('Variable "ideas" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["idea"]) {
            // line 51
            yield "                <section class=\"ideaCard\">
                    <h2>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "title", [], "any", false, false, false, 52), "html", null, true);
            yield "</h2>
                    <p class=\"idea-comment\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "comment", [], "any", false, false, false, 53), "html", null, true);
            yield "</p>
                    <span class=\"idea-price\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "price", [], "any", false, false, false, 54), "html", null, true);
            yield " €</span>
                    ";
            // line 55
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "picture", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "picture", [], "any", false, false, false, 56), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "title", [], "any", false, false, false, 56), "html", null, true);
                yield "\" loading=\"lazy\">
                    ";
            } else {
                // line 58
                yield "                        <div class=\"idea-placeholder\">🎁</div>
                    ";
            }
            // line 60
            yield "
                    ";
            // line 62
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifyIdea", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["idea"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"btn-actuality\">
                            ";
                // line 64
                yield "Modifier";
                yield " →
                        </a>
                    ";
            }
            // line 67
            yield "
                </section>
            ";
            $context['_iterated'] = true;
        }
        // line 69
        if (!$context['_iterated']) {
            // line 70
            yield "                <p class=\"empty-state\">il n'y a encore aucune idée de proposée </p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['idea'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "        </div>
    </section>
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
        return array (  282 => 72,  275 => 70,  273 => 69,  267 => 67,  261 => 64,  256 => 63,  253 => 62,  250 => 60,  246 => 58,  238 => 56,  236 => 55,  232 => 54,  228 => 53,  224 => 52,  221 => 51,  216 => 50,  213 => 49,  207 => 44,  198 => 41,  195 => 40,  191 => 39,  188 => 38,  183 => 36,  178 => 35,  169 => 28,  166 => 27,  163 => 25,  157 => 24,  148 => 21,  143 => 20,  138 => 19,  134 => 18,  128 => 14,  115 => 13,  101 => 8,  88 => 7,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une idée{% endblock %}



{% block CSS %}
    <link rel=\"stylesheet\" href=\"{{ asset('styles/ideas.css') }}\">
{% endblock %}



{% block body %}
    <section class=\"pageContainer\">

        <h1> Voici nos idées</h1>

            {% for type, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}

    {# to choose the personn's name  #}

        <form class=\"filter-form\" method=\"GET\" action=\"{{ path('app_idee') }}\">
            <label for=\"familyMembers\"> De qui souhaite-tu voir les idées :</label>

            <select name=\"membre\" id=\"familyMembers\" onchange=\"this.form.submit()\">
                <option value=\"\">-- Fais ton choix --</option>

                {# get all the user #}
                {% for User in Users %}
                    <option value=\"{{ User.id }}\"
                    {# get the ideas form the selected person #}
                        {% if selectedUser and selectedUser.id == User.id %}
                            selected
                        {% endif %}>
                        {{ User.firstName }}
                    </option>
                {% endfor %}
            </select>
        </form>


        {# each gift card idea #}
        <div class=\"ideas-grid\">
            {% for idea in ideas %}
                <section class=\"ideaCard\">
                    <h2>{{ idea.title }}</h2>
                    <p class=\"idea-comment\">{{ idea.comment }}</p>
                    <span class=\"idea-price\">{{ idea.price }} €</span>
                    {% if idea.picture %}
                        <img src=\"{{ idea.picture }}\" alt=\"{{ idea.title }}\" loading=\"lazy\">
                    {% else %}
                        <div class=\"idea-placeholder\">🎁</div>
                    {% endif %}

                    {# only the admin can modify #}
                    {% if app.user %}
                        <a href=\"{{ path('app_modifyIdea', {'id': idea.id}) }}\" class=\"btn-actuality\">
                            {{ 'Modifier' }} →
                        </a>
                    {% endif %}

                </section>
            {% else %}
                <p class=\"empty-state\">il n'y a encore aucune idée de proposée </p>
            {% endfor %}
        </div>
    </section>
{% endblock %}", "idea/index.html.twig", "/Applications/MAMP/htdocs/dw6/projets/PetitSouhait/templates/idea/index.html.twig");
    }
}
