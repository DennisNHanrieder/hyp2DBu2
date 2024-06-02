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

/* quiz_modify.html.twig */
class __TwigTemplate_bf12649aa72bb1f13ebff0469be99a8f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "quiz_modify.html.twig", 1);
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
        echo "
    ";
        // line 7
        if (($context["success"] ?? null)) {
            // line 8
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 9
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 12
        echo "        <form action=\"";
        if (array_key_exists("quiz", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizmodify"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizcreate"), "html", null, true);
            echo " ";
        }
        echo "\" method=\"post\">

            <input type=\"hidden\" name=\"id\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "ID", [], "any", false, false, false, 14), "html", null, true);
        echo "\">

            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Title:</label>
                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "Title", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
            </div>

            <div class=\"mb-3\">
                <label for=\"description\" class=\"form-label\">Description:</label>
                <textarea class=\"form-control\" id=\"description\" name=\"description\" required>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "Description", [], "any", false, false, false, 23), "html", null, true);
        echo "</textarea>
            </div>

            <div class=\"mb-3\">
                <label for=\"category\" class=\"form-label\">Category:</label>
                <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "Category", [], "any", false, false, false, 28), "html", null, true);
        echo "\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"difficulty\" class=\"form-label\">Difficulty:</label>
                <select class=\"form-select\" id=\"difficulty\" name=\"difficulty\" required>
                    <option value=\"leicht\">Easy</option>
                    <option value=\"mittel\">Medium</option>
                    <option value=\"schwer\">Hard</option>
                </select>
            </div>

            <div class=\"mb-3\">
                <label for=\"status\" class=\"form-label\">Status:</label>
                <select class=\"form-select\" id=\"status\" name=\"status\" required>
                    <option value=\"public\">Public</option>
                    <option value=\"private\">Private</option>
                </select>
            </div>

            <div class=\"mb-3\">
                <label for=\"joinCode\" class=\"form-label\">Join Code:</label>
                <input type=\"text\" class=\"form-control\" id=\"joinCode\" name=\"joinCode\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "JoinCode", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
            </div>

            <div class=\"mb-3\">
                <label for=\"startedAt\" class=\"form-label\">Started At:</label>
                <input type=\"datetime-local\" class=\"form-control\" id=\"startedAt\" name=\"startedAt\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "StartedAt", [], "any", false, false, false, 55), "html", null, true);
        echo "\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"closedAt\" class=\"form-label\">Closed At:</label>
                <input type=\"datetime-local\" class=\"form-control\" id=\"closedAt\" name=\"closedAt\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "ClosedAt", [], "any", false, false, false, 60), "html", null, true);
        echo "\" required>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 63
        if (array_key_exists("quiz", $context)) {
            echo " Change ";
        } else {
            echo " Create ";
        }
        echo " Quiz</button>
        </form>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "quiz_modify.html.twig";
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
        return array (  156 => 63,  150 => 60,  142 => 55,  134 => 50,  109 => 28,  101 => 23,  93 => 18,  86 => 14,  72 => 12,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}QuizQuest{% endblock %}

{% block main %}

    {% if success %}
        <div class=\"alert alert-success\" role=\"alert\">
            {{ success }}
        </div>
    {% endif %}
        <form action=\"{% if quiz is defined %} {{ url_for('/quizmodify') }} {% else %} {{ url_for('/quizcreate') }} {% endif %}\" method=\"post\">

            <input type=\"hidden\" name=\"id\" value=\"{{ quiz.ID }}\">

            <div class=\"mb-3\">
                <label for=\"title\" class=\"form-label\">Title:</label>
                <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" required value=\"{{ quiz.Title }}\">
            </div>

            <div class=\"mb-3\">
                <label for=\"description\" class=\"form-label\">Description:</label>
                <textarea class=\"form-control\" id=\"description\" name=\"description\" required>{{ quiz.Description }}</textarea>
            </div>

            <div class=\"mb-3\">
                <label for=\"category\" class=\"form-label\">Category:</label>
                <input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" value=\"{{ quiz.Category }}\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"difficulty\" class=\"form-label\">Difficulty:</label>
                <select class=\"form-select\" id=\"difficulty\" name=\"difficulty\" required>
                    <option value=\"leicht\">Easy</option>
                    <option value=\"mittel\">Medium</option>
                    <option value=\"schwer\">Hard</option>
                </select>
            </div>

            <div class=\"mb-3\">
                <label for=\"status\" class=\"form-label\">Status:</label>
                <select class=\"form-select\" id=\"status\" name=\"status\" required>
                    <option value=\"public\">Public</option>
                    <option value=\"private\">Private</option>
                </select>
            </div>

            <div class=\"mb-3\">
                <label for=\"joinCode\" class=\"form-label\">Join Code:</label>
                <input type=\"text\" class=\"form-control\" id=\"joinCode\" name=\"joinCode\" value=\"{{ quiz.JoinCode }}\">
            </div>

            <div class=\"mb-3\">
                <label for=\"startedAt\" class=\"form-label\">Started At:</label>
                <input type=\"datetime-local\" class=\"form-control\" id=\"startedAt\" name=\"startedAt\" value=\"{{ quiz.StartedAt }}\" required>
            </div>

            <div class=\"mb-3\">
                <label for=\"closedAt\" class=\"form-label\">Closed At:</label>
                <input type=\"datetime-local\" class=\"form-control\" id=\"closedAt\" name=\"closedAt\" value=\"{{ quiz.ClosedAt }}\" required>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">{% if quiz is defined %} Change {% else %} Create {% endif %} Quiz</button>
        </form>

{% endblock main %}
", "quiz_modify.html.twig", "/var/www/html/teil-2-ubung-8a-teameins/QuizQuest/views/quiz_modify.html.twig");
    }
}
