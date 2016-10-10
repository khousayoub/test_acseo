<?php

/* ::layout.html.twig */
class __TwigTemplate_99a105584e2e14967432ce0164f5885ce32d51a54ac77d53c900c4981474b37f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'contenu_titre' => array($this, 'block_contenu_titre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb9ad23eba784349a0e6916b5e3c5d6592735de7da031f4a15b6f5980642cf99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9ad23eba784349a0e6916b5e3c5d6592735de7da031f4a15b6f5980642cf99->enter($__internal_bb9ad23eba784349a0e6916b5e3c5d6592735de7da031f4a15b6f5980642cf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb9ad23eba784349a0e6916b5e3c5d6592735de7da031f4a15b6f5980642cf99->leave($__internal_bb9ad23eba784349a0e6916b5e3c5d6592735de7da031f4a15b6f5980642cf99_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f7aef62ac106d966a65c97229e3346b1186d9daa700794c5b2e2e6c52324b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7aef62ac106d966a65c97229e3346b1186d9daa700794c5b2e2e6c52324b30->enter($__internal_0f7aef62ac106d966a65c97229e3346b1186d9daa700794c5b2e2e6c52324b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"  aria-controls=\"navbar\">
                <span class=\"sr-only\"></span>
                <span class=\"icon-bar\">Vol</span>
                <span class=\"icon-bar\">Avion</span>
                <span class=\"icon-bar\">Passager</span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Aéroport Marseille Provence</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"vol\">Vol</a></li>
                <li><a href=\"avion\">Avion</a></li>
                <li><a href=\"passager\">Passager</a></li>
                <li><a href=\"utilisateur\"><div class=\"btn btn-info \">S'identifier</div> </a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class=\"container\">
    <div class=\"row\">
        <div id=\"content\" class=\"col-lg-12\">
            ";
        // line 27
        $this->displayBlock('contenu_titre', $context, $blocks);
        // line 28
        echo "        </div>
    </div>
</div>
";
        
        $__internal_0f7aef62ac106d966a65c97229e3346b1186d9daa700794c5b2e2e6c52324b30->leave($__internal_0f7aef62ac106d966a65c97229e3346b1186d9daa700794c5b2e2e6c52324b30_prof);

    }

    // line 27
    public function block_contenu_titre($context, array $blocks = array())
    {
        $__internal_557316636e3bdf9545ec9507b98169c5538d982c3c4a6305165373b50861fe5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557316636e3bdf9545ec9507b98169c5538d982c3c4a6305165373b50861fe5a->enter($__internal_557316636e3bdf9545ec9507b98169c5538d982c3c4a6305165373b50861fe5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu_titre"));

        
        $__internal_557316636e3bdf9545ec9507b98169c5538d982c3c4a6305165373b50861fe5a->leave($__internal_557316636e3bdf9545ec9507b98169c5538d982c3c4a6305165373b50861fe5a_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  69 => 28,  67 => 27,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}
{% block body %}
<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"  aria-controls=\"navbar\">
                <span class=\"sr-only\"></span>
                <span class=\"icon-bar\">Vol</span>
                <span class=\"icon-bar\">Avion</span>
                <span class=\"icon-bar\">Passager</span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Aéroport Marseille Provence</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"vol\">Vol</a></li>
                <li><a href=\"avion\">Avion</a></li>
                <li><a href=\"passager\">Passager</a></li>
                <li><a href=\"utilisateur\"><div class=\"btn btn-info \">S'identifier</div> </a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class=\"container\">
    <div class=\"row\">
        <div id=\"content\" class=\"col-lg-12\">
            {% block contenu_titre %}{% endblock %}
        </div>
    </div>
</div>
{% endblock %}";
    }
}
