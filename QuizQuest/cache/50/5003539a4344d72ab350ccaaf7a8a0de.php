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

/* quiz_overview.html.twig */
class __TwigTemplate_d2714b9a15184fc46be30151f66d1ebb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "quiz_overview.html.twig", 1);
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

    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/join_quiz"), "html", null, true);
        echo "\" method=\"POST\"  style=\"display: flex; flex-direction: column; align-items: center; justify-content: center;\">
        <div class=\"form-group text-center col-2\">
            <label for=\"join-code\">Join Code:</label>
            <input type=\"text\" id=\"join-code\" name=\"join-code\" class=\"form-control\" required maxlength=\"5\" size=\"5\">
        </div>
        <div class=\"text-center mt-1\">
            <button type=\"submit\" class=\"btn btn-primary\">Join Quiz</button>
        </div>
    </form>

    <div class=\"container mt-4\">
        <h2>Open Games</h2>
        <div class=\"row\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quizzes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 27
            echo "                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img class=\"card-img-top\" src=\"https://lehrerweb.wien/fileadmin/_processed_/0/e/csm_quiz-2192590_1920_7feb491723.jpg\" alt=\"Card image\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "Title", [], "any", false, false, false, 31), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "Category", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "answeredQuestions", [], "any", false, false, false, 33), "html", null, true);
            echo " /  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "totalQuestions", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "Difficulty", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "StartedAt", [], "any", false, false, false, 35), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "ClosedAt", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <form method=\"get\" action=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizshow"), "html", null, true);
            echo "\">
                                        <button type=\"submit\" class=\"btn btn-success\" name=\"id\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "ID", [], "any", false, false, false, 41), "html", null, true);
            echo "\">Open</button>
                                    </form>
                                </div>
                                ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "role", [], "any", false, false, false, 44) == "Creator")) {
                // line 45
                echo "                                    <div class=\"col-3\">
                                        <form method=\"get\" action=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizmodify"), "html", null, true);
                echo "\">
                                            <button type=\"submit\" class=\"btn btn-warning\" name=\"id\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "ID", [], "any", false, false, false, 47), "html", null, true);
                echo "\">Modify</button>
                                        </form>
                                    </div>
                                    <div class=\"col-3\">
                                        <form method=\"get\" action=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizquestions"), "html", null, true);
                echo "\">
                                            <button type=\"submit\" class=\"btn btn-info\" name=\"id\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "ID", [], "any", false, false, false, 52), "html", null, true);
                echo "\">Questions</button>
                                        </form>
                                    </div>
                                    <div class=\"col-3\">
                                        <form method=\"post\" action=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizdelete"), "html", null, true);
                echo "\">
                                            <button type=\"submit\" class=\"btn btn-danger\" name=\"id\" value=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "ID", [], "any", false, false, false, 57), "html", null, true);
                echo "\">Delete</button>
                                        </form>
                                    </div>
                                ";
            }
            // line 61
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </div>
    </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "quiz_overview.html.twig";
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
        return array (  180 => 67,  169 => 61,  162 => 57,  158 => 56,  151 => 52,  147 => 51,  140 => 47,  136 => 46,  133 => 45,  131 => 44,  125 => 41,  121 => 40,  111 => 35,  107 => 34,  101 => 33,  97 => 32,  93 => 31,  87 => 27,  83 => 26,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
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

    <form action=\"{{ url_for(\"/join_quiz\") }}\" method=\"POST\"  style=\"display: flex; flex-direction: column; align-items: center; justify-content: center;\">
        <div class=\"form-group text-center col-2\">
            <label for=\"join-code\">Join Code:</label>
            <input type=\"text\" id=\"join-code\" name=\"join-code\" class=\"form-control\" required maxlength=\"5\" size=\"5\">
        </div>
        <div class=\"text-center mt-1\">
            <button type=\"submit\" class=\"btn btn-primary\">Join Quiz</button>
        </div>
    </form>

    <div class=\"container mt-4\">
        <h2>Open Games</h2>
        <div class=\"row\">
            {% for game in quizzes %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img class=\"card-img-top\" src=\"https://lehrerweb.wien/fileadmin/_processed_/0/e/csm_quiz-2192590_1920_7feb491723.jpg\" alt=\"Card image\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ game.Title }}</h5>
                            <p class=\"card-text\">{{ game.Category }}</p>
                            <p class=\"card-text\">{{ game.answeredQuestions }} /  {{ game.totalQuestions }}</p>
                            <p class=\"card-text\">{{ game.Difficulty }}</p>
                            <p class=\"card-text\">{{ game.StartedAt }} {{ game.ClosedAt }}</p>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <form method=\"get\" action=\"{{ url_for(\"/quizshow\") }}\">
                                        <button type=\"submit\" class=\"btn btn-success\" name=\"id\" value=\"{{ game.ID }}\">Open</button>
                                    </form>
                                </div>
                                {% if _session.role == 'Creator' %}
                                    <div class=\"col-3\">
                                        <form method=\"get\" action=\"{{ url_for(\"/quizmodify\") }}\">
                                            <button type=\"submit\" class=\"btn btn-warning\" name=\"id\" value=\"{{ game.ID }}\">Modify</button>
                                        </form>
                                    </div>
                                    <div class=\"col-3\">
                                        <form method=\"get\" action=\"{{ url_for(\"/quizquestions\") }}\">
                                            <button type=\"submit\" class=\"btn btn-info\" name=\"id\" value=\"{{ game.ID }}\">Questions</button>
                                        </form>
                                    </div>
                                    <div class=\"col-3\">
                                        <form method=\"post\" action=\"{{ url_for(\"/quizdelete\") }}\">
                                            <button type=\"submit\" class=\"btn btn-danger\" name=\"id\" value=\"{{ game.ID }}\">Delete</button>
                                        </form>
                                    </div>
                                {%  endif  %}

                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

{% endblock main %}", "quiz_overview.html.twig", "/var/www/html/teil-2-uebung-9-teameins/QuizQuest/views/quiz_overview.html.twig");
    }
}
