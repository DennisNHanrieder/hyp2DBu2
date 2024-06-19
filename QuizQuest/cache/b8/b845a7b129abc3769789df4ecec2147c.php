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

/* quiz_questions.html.twig */
class __TwigTemplate_f4129d457ca217361d3555612aa0a719 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "quiz_questions.html.twig", 1);
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
<hgroup>
    <h1>QuizQuest</h1>
    <p class=\"lead\">Your favorite quiz game!</p>
</hgroup>

<form action=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizquestions"), "html", null, true);
        echo " \" method=\"POST\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center;\">
    <div class=\"form-group text-center col-6\">
        <label for=\"question\">Question:</label>
        <input type=\"text\" id=\"question\" name=\"question\" class=\"form-control\" required>

        <label for=\"category\">Category:</label>
        <input type=\"text\" id=\"category\" name=\"category\" class=\"form-control\" required>

        <label for=\"correctAnswer\">Correct Answer:</label>
        <input type=\"text\" id=\"correctAnswer\" name=\"correctAnswer\" class=\"form-control\" required>

        <label for=\"wrongAnswer1\">Wrong Answer 1:</label>
        <input type=\"text\" id=\"wrongAnswer1\" name=\"wrongAnswer1\" class=\"form-control\" required>

        <label for=\"wrongAnswer2\">Wrong Answer 2:</label>
        <input type=\"text\" id=\"wrongAnswer2\" name=\"wrongAnswer2\" class=\"form-control\" required>

        <label for=\"wrongAnswer3\">Wrong Answer 3:</label>
        <input type=\"text\" id=\"wrongAnswer3\" name=\"wrongAnswer3\" class=\"form-control\" required>

        <input type=\"hidden\" id=\"quizId\" name=\"quizId\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["quiz"] ?? null), "ID", [], "any", false, false, false, 32), "html", null, true);
        echo "\">
        
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    </div>
</form>
    
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "quiz_questions.html.twig";
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
        return array (  89 => 32,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}QuizQuest{% endblock %}

{% block main %}

<hgroup>
    <h1>QuizQuest</h1>
    <p class=\"lead\">Your favorite quiz game!</p>
</hgroup>

<form action=\" {{ url_for('/quizquestions') }} \" method=\"POST\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center;\">
    <div class=\"form-group text-center col-6\">
        <label for=\"question\">Question:</label>
        <input type=\"text\" id=\"question\" name=\"question\" class=\"form-control\" required>

        <label for=\"category\">Category:</label>
        <input type=\"text\" id=\"category\" name=\"category\" class=\"form-control\" required>

        <label for=\"correctAnswer\">Correct Answer:</label>
        <input type=\"text\" id=\"correctAnswer\" name=\"correctAnswer\" class=\"form-control\" required>

        <label for=\"wrongAnswer1\">Wrong Answer 1:</label>
        <input type=\"text\" id=\"wrongAnswer1\" name=\"wrongAnswer1\" class=\"form-control\" required>

        <label for=\"wrongAnswer2\">Wrong Answer 2:</label>
        <input type=\"text\" id=\"wrongAnswer2\" name=\"wrongAnswer2\" class=\"form-control\" required>

        <label for=\"wrongAnswer3\">Wrong Answer 3:</label>
        <input type=\"text\" id=\"wrongAnswer3\" name=\"wrongAnswer3\" class=\"form-control\" required>

        <input type=\"hidden\" id=\"quizId\" name=\"quizId\" value=\"{{ quiz.ID }}\">
        
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    </div>
</form>
    
{% endblock main %}", "quiz_questions.html.twig", "/var/www/html/teil-2-uebung-9-teameins/QuizQuest/views/quiz_questions.html.twig");
    }
}
