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
        echo "Quiz - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "Title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "Title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <h2>Question ";
        // line 7
        echo twig_escape_filter($this->env, (($context["questionIndex"] ?? null) + 1), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, ($context["totalQuestions"] ?? null), "html", null, true);
        echo "</h2>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "Title", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>

    <form method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizshow"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"quiz_id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "ID", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"question_index\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["questionIndex"] ?? null), "html", null, true);
        echo "\">

        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["answers"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 15
            echo "            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"answer\" id=\"option";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "ID", [], "any", false, false, false, 16), "html", null, true);
            echo "\" required>
                <label class=\"form-check-label\" for=\"option";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "Title", [], "any", false, false, false, 18), "html", null, true);
            echo "
                </label>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        <button type=\"submit\" class=\"btn btn-primary mt-3\">Submit Answer</button>
    </form>
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
        return array (  136 => 22,  118 => 18,  114 => 17,  108 => 16,  105 => 15,  88 => 14,  83 => 12,  79 => 11,  75 => 10,  70 => 8,  64 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Quiz - {{ quiz.Title }}{% endblock %}

{% block main %}
    <h1>{{ quiz.Title }}</h1>
    <h2>Question {{ questionIndex + 1 }} of {{ totalQuestions }}</h2>
    <p>{{ question.Title }}</p>

    <form method=\"post\" action=\"{{ url_for(\"/quizshow\") }}\">
        <input type=\"hidden\" name=\"quiz_id\" value=\"{{ quiz.ID }}\">
        <input type=\"hidden\" name=\"question_index\" value=\"{{ questionIndex }}\">

        {% for answer in answers %}
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"answer\" id=\"option{{ loop.index }}\" value=\"{{ answer.ID }}\" required>
                <label class=\"form-check-label\" for=\"option{{ loop.index }}\">
                    {{ answer.Title }}
                </label>
            </div>
        {% endfor %}

        <button type=\"submit\" class=\"btn btn-primary mt-3\">Submit Answer</button>
    </form>
{% endblock %}
", "quiz_open.html.twig", "/var/www/html/teil-2-uebung-9-teameins/QuizQuest/views/quiz_open.html.twig");
    }
}
