<?php

/* AeroportBundle:Aeroport:avion.html.twig */
class __TwigTemplate_9b1926ca201eba842e1bea275631400632d5640f2d5e3fc4d59635e7d86a3a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AeroportBundle::layout.html.twig", "AeroportBundle:Aeroport:avion.html.twig", 1);
        $this->blocks = array(
            'contenu_page' => array($this, 'block_contenu_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AeroportBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7db07bea4d4eed238a886f53546d584009ab6b83449946eff7f2c48e5e313938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db07bea4d4eed238a886f53546d584009ab6b83449946eff7f2c48e5e313938->enter($__internal_7db07bea4d4eed238a886f53546d584009ab6b83449946eff7f2c48e5e313938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AeroportBundle:Aeroport:avion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db07bea4d4eed238a886f53546d584009ab6b83449946eff7f2c48e5e313938->leave($__internal_7db07bea4d4eed238a886f53546d584009ab6b83449946eff7f2c48e5e313938_prof);

    }

    // line 2
    public function block_contenu_page($context, array $blocks = array())
    {
        $__internal_ce1f5e6393fdbe38ca05353f580cfb81e5439d3369b573102b26774cf23b40bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1f5e6393fdbe38ca05353f580cfb81e5439d3369b573102b26774cf23b40bc->enter($__internal_ce1f5e6393fdbe38ca05353f580cfb81e5439d3369b573102b26774cf23b40bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu_page"));

        // line 3
        echo "    <ul class=\"pagination\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            echo "            <li ";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avion", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
<div class=\"row\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["avion"]) {
            // line 12
            echo "            <ul>
            <div class=\"col-lg-5 well\">
                <li>Nom de l'avion : <h1>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["avion"], "getNomAvion", array(), "method"), "html", null, true);
            echo "</h1></li>
                <li>L'identifiant de l'avion : ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["avion"], "idAvion", array()), "html", null, true);
            echo "</li>
                <li>Les noms des passagers sont : ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["passager"]) ? $context["passager"] : $this->getContext($context, "passager")));
            foreach ($context['_seq'] as $context["_key"] => $context["pas"]) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avion"], "pas", array()), "id", array()), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</li> ";
            echo "%}
                <li>L'identifiant du vol : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["avion"], "idVol", array()), "html", null, true);
            echo "</li>
                <li>La capacity de l'avion : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["avion"], "capacity", array()), "html", null, true);
            echo " Passagers.</li>
            </div>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
</div>
";
        
        $__internal_ce1f5e6393fdbe38ca05353f580cfb81e5439d3369b573102b26774cf23b40bc->leave($__internal_ce1f5e6393fdbe38ca05353f580cfb81e5439d3369b573102b26774cf23b40bc_prof);

    }

    public function getTemplateName()
    {
        return "AeroportBundle:Aeroport:avion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 22,  101 => 18,  97 => 17,  85 => 16,  81 => 15,  77 => 14,  73 => 12,  69 => 11,  65 => 9,  54 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'AeroportBundle::layout.html.twig' %}
{% block contenu_page %}
    <ul class=\"pagination\">
        {% for p in range(1, 2) %}
            <li {% if p == page %} class=\"active\"{% endif %}>
                <a href=\"{{ path('avion',{'page': p}) }}\">{{ p }}</a>
            </li>
        {% endfor %}
    </ul>
<div class=\"row\">
        {% for avion in list %}
            <ul>
            <div class=\"col-lg-5 well\">
                <li>Nom de l'avion : <h1>{{ avion.getNomAvion() }}</h1></li>
                <li>L'identifiant de l'avion : {{ avion.idAvion }}</li>
                <li>Les noms des passagers sont : {% for pas in passager %}{{ avion.pas.id }}{% endfor %}</li> {#Pour afficher tout les passagers qui sont dans l'avion #}%}
                <li>L'identifiant du vol : {{ avion.idVol }}</li>
                <li>La capacity de l'avion : {{ avion.capacity }} Passagers.</li>
            </div>
            </ul>
        {% endfor %}

</div>
{% endblock %}";
    }
}
