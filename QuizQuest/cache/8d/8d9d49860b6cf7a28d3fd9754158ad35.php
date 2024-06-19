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

/* base.html.twig */
class __TwigTemplate_b5cc8d5ea6f7234234146e30cb832f7e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "</head>
<body>
<div class=\"container\">
    <header class=\"d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom\">
        ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 66
        echo "    </header>

    <main>
        ";
        // line 69
        $this->displayBlock('main', $context, $blocks);
        // line 71
        echo "    </main>

    <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
        ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "    </footer>
</div>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getFunction('get_base_path')->getCallable()(), "html", null, true);
        echo "/../views/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getFunction('get_base_path')->getCallable()(), "html", null, true);
        echo "/../views/js/main.js\"></script>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFunction('get_base_path')->getCallable()(), "html", null, true);
        echo "/../views/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getFunction('get_base_path')->getCallable()(), "html", null, true);
        echo "/../views/css/main.css\">
        <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFunction('get_base_path')->getCallable()(), "html", null, true);
        echo "/../views/images/fhooe-router-logo.svg\" type=\"image/svg+xml\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/js/bootstrap-select-country.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/js/bootstrap-select-country.min.js\"></script>
    ";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "QuizQuest";
    }

    // line 18
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/"), "html", null, true);
        echo "\"
               class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none\">
                <span class=\"fs-4\">QuizQuest</span>
            </a>

            <ul class=\"nav nav-pills\">

                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "isLoggedin", [], "any", true, true, false, 26)) {
            // line 27
            echo "
                    ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "role", [], "any", false, false, false, 28) == "Creator")) {
                // line 29
                echo "                        <li class=\"nav-item\">
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizcreate"), "html", null, true);
                echo "\" class=\"nav-link\">New Quiz</a>
                        </li>
                    ";
            }
            // line 33
            echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/logout"), "html", null, true);
            echo "\">Logout</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/quizoverview"), "html", null, true);
            echo "\" class=\"nav-link\">Quizzes</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/Leaderboard"), "html", null, true);
            echo "\" class=\"nav-link\">Leaderboard</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/badges"), "html", null, true);
            echo "\"class=\"nav-link\">My Badges</a>
                    </li>

                ";
        } else {
            // line 51
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/login"), "html", null, true);
            echo "\" class=\"nav-link\">Login</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/register"), "html", null, true);
            echo "\" class=\"nav-link\">Register</a>
                    </li>
                ";
        }
        // line 59
        echo "
                <li class=\"nav-item\">
                    ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "
                </li>

            </ul>
        ";
    }

    // line 69
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "        ";
    }

    // line 74
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "            <div class=\"col-lg-9 d-flex align-items-center\">
                QuizQuest, 2024
            </div>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  226 => 75,  222 => 74,  218 => 70,  214 => 69,  205 => 61,  201 => 59,  195 => 56,  188 => 52,  185 => 51,  178 => 47,  171 => 43,  164 => 39,  157 => 35,  153 => 33,  147 => 30,  144 => 29,  142 => 28,  139 => 27,  137 => 26,  126 => 19,  122 => 18,  115 => 6,  107 => 10,  103 => 9,  99 => 8,  94 => 6,  91 => 5,  87 => 4,  79 => 82,  75 => 81,  71 => 79,  69 => 74,  64 => 71,  62 => 69,  57 => 66,  55 => 18,  49 => 14,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head %}
        <meta charset=\"UTF-8\">
        <title>{% block title %}QuizQuest{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"{{ get_base_path() }}/../views/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ get_base_path() }}/../views/css/main.css\">
        <link rel=\"icon\" href=\"{{ get_base_path() }}/../views/images/fhooe-router-logo.svg\" type=\"image/svg+xml\">
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/js/bootstrap-select-country.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select-country@4.2.0/dist/js/bootstrap-select-country.min.js\"></script>
    {% endblock head %}
</head>
<body>
<div class=\"container\">
    <header class=\"d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom\">
        {% block header %}
            <a href=\"{{ url_for(\"/\") }}\"
               class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none\">
                <span class=\"fs-4\">QuizQuest</span>
            </a>

            <ul class=\"nav nav-pills\">

                {% if _session.isLoggedin is defined %}

                    {% if _session.role == \"Creator\" %}
                        <li class=\"nav-item\">
                            <a href=\"{{ url_for(\"/quizcreate\") }}\" class=\"nav-link\">New Quiz</a>
                        </li>
                    {% endif %}

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ url_for(\"/logout\") }}\">Logout</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ url_for(\"/quizoverview\") }}\" class=\"nav-link\">Quizzes</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ url_for(\"/Leaderboard\") }}\" class=\"nav-link\">Leaderboard</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ url_for('/badges') }}\"class=\"nav-link\">My Badges</a>
                    </li>

                {% else %}
                    <li class=\"nav-item\">
                        <a href=\"{{ url_for(\"/login\") }}\" class=\"nav-link\">Login</a>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ url_for(\"/register\") }}\" class=\"nav-link\">Register</a>
                    </li>
                {% endif %}

                <li class=\"nav-item\">
                    {{ user.id }}
                </li>

            </ul>
        {% endblock header %}
    </header>

    <main>
        {% block main %}
        {% endblock main %}
    </main>

    <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
        {% block footer %}
            <div class=\"col-lg-9 d-flex align-items-center\">
                QuizQuest, 2024
            </div>
        {% endblock footer %}
    </footer>
</div>
<script src=\"{{ get_base_path() }}/../views/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ get_base_path() }}/../views/js/main.js\"></script>
</body>
</html>
", "base.html.twig", "/var/www/html/teil-2-uebung-9-teameins/QuizQuest/views/base.html.twig");
    }
}
