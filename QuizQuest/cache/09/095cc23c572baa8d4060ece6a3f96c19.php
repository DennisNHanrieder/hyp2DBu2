<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login.html.twig */
class __TwigTemplate_426f1278950d36754a937f663e52d503 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "QuizQuest";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"border p-3 mt-5\">
    <h3>Login</h3>
    ";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 10
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 13
        echo "    <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/login"), "html", null, true);
        echo "\">
        <div class=\"mb-1\">
            <label for=\"username\" class=\"form-label\">Username</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\"
                   placeholder=\"Your username\" aria-describedby=\"usernameHelp\" autocomplete=\"username\" required>
        </div>

        <div class=\"mb-5\">
            <label for=\"password\" class=\"form-label\">Password</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"
                   placeholder=\"Your password\" aria-describedby=\"passwordHelp\" autocomplete=\"current-password\" required>
        <div class=\"mt-2 mb-5\">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </div>
    </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 10,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}QuizQuest{% endblock title %}

{% block main %}
<div class=\"border p-3 mt-5\">
    <h3>Login</h3>
    {% if error %}
        <div class=\"alert alert-danger\" role=\"alert\">
            {{ error }}
        </div>
    {% endif %}
    <form method=\"post\" action=\"{{ url_for(\"/login\") }}\">
        <div class=\"mb-1\">
            <label for=\"username\" class=\"form-label\">Username</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\"
                   placeholder=\"Your username\" aria-describedby=\"usernameHelp\" autocomplete=\"username\" required>
        </div>

        <div class=\"mb-5\">
            <label for=\"password\" class=\"form-label\">Password</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"
                   placeholder=\"Your password\" aria-describedby=\"passwordHelp\" autocomplete=\"current-password\" required>
        <div class=\"mt-2 mb-5\">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </div>
    </form>
</div>
{% endblock main %}
", "login.html.twig", "/var/www/html/teil-2-ubung-8a-teameins/QuizQuest/views/login.html.twig");
    }
}
