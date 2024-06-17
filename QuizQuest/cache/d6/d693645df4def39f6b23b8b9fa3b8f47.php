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

/* quiz_open.html.twig */
class __TwigTemplate_f5fee80a66e425d0d289a05ac002f87b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "quiz_open.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "QuizQuest - Quiz";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"mb-3\">
        <label for=\"difficulty\" class=\"form-label\">Answer</label>
        <select class=\"form-select\" id=\"Answer\" name=\"Answer\" required>
            <option value=\"\">Easy</option>

            //hier sollen so viele Buttons wie es für diese Fragen Antworten gibt, erscheinen

        </select>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "quiz_open.html.twig";
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
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}QuizQuest - Quiz{% endblock %}

{% block main %}
    <div class=\"mb-3\">
        <label for=\"difficulty\" class=\"form-label\">Answer</label>
        <select class=\"form-select\" id=\"Answer\" name=\"Answer\" required>
            <option value=\"\">Easy</option>

            //hier sollen so viele Buttons wie es für diese Fragen Antworten gibt, erscheinen

        </select>
    </div>
{% endblock main %}

", "quiz_open.html.twig", "/var/www/html/teil-2-uebung-9-teameins/QuizQuest/views/quiz_open.html.twig");
    }
}
