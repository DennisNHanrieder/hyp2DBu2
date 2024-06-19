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

/* Leaderboard.html.twig */
class __TwigTemplate_a46d665114f521974b82f2774c4f4712 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Leaderboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Quizquest";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('url_for')->getCallable()("/Leaderboard"), "html", null, true);
        echo "\">
        <div class=\"border p-3 mt-5\">
            <h3>Leaderboard</h3>
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th scope=\"col\">Rank</th>
                    <th scope=\"col\">Username</th>
                    <th scope=\"col\">Origin</th>
                    <th scope=\"col\">Points</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 20
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
            echo "</th>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Player"] ?? null), "username", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Player"] ?? null), "origin", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Player"] ?? null), "points", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>

                    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </tbody>
            </table>
        </div>
    </form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Leaderboard.html.twig";
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
        return array (  125 => 28,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  92 => 20,  75 => 19,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Quizquest{% endblock %}

{% block main %}
    <form method=\"get\" action=\"{{ url_for(\"/Leaderboard\") }}\">
        <div class=\"border p-3 mt-5\">
            <h3>Leaderboard</h3>
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th scope=\"col\">Rank</th>
                    <th scope=\"col\">Username</th>
                    <th scope=\"col\">Origin</th>
                    <th scope=\"col\">Points</th>
                </tr>
                </thead>
                <tbody>
                {% for player in players %}
                    <tr>
                        <th scope=\"row\">{{ loop.index }}</th>
                        <td>{{ Player.username }}</td>
                        <td>{{ Player.origin }}</td>
                        <td>{{ Player.points }}</td>

                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </form>
{% endblock %}", "Leaderboard.html.twig", "/var/www/html/teil-2-uebung-9-teameins/QuizQuest/views/Leaderboard.html.twig");
    }
}
