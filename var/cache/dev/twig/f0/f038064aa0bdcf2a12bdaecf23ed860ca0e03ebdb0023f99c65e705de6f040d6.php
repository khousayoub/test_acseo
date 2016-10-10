<?php

/* AeroportBundle:Default:index.html.twig */
class __TwigTemplate_0719acb6829f573f3df63a4eb314783305c503f78c6c564f55da0994660d51c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AeroportBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6de82a5e00a0b275b7f9adf5a4357de3ae0a07d4e9cbd84fa966675647c7b1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de82a5e00a0b275b7f9adf5a4357de3ae0a07d4e9cbd84fa966675647c7b1a4->enter($__internal_6de82a5e00a0b275b7f9adf5a4357de3ae0a07d4e9cbd84fa966675647c7b1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AeroportBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6de82a5e00a0b275b7f9adf5a4357de3ae0a07d4e9cbd84fa966675647c7b1a4->leave($__internal_6de82a5e00a0b275b7f9adf5a4357de3ae0a07d4e9cbd84fa966675647c7b1a4_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_534d0398a11cec2d24f78658358862c0bf09fba4547f3026b656a99a3be89d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534d0398a11cec2d24f78658358862c0bf09fba4547f3026b656a99a3be89d46->enter($__internal_534d0398a11cec2d24f78658358862c0bf09fba4547f3026b656a99a3be89d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "    <h1 class=\"center-block\">Bienvenu dans notre application !</h1>
";
        
        $__internal_534d0398a11cec2d24f78658358862c0bf09fba4547f3026b656a99a3be89d46->leave($__internal_534d0398a11cec2d24f78658358862c0bf09fba4547f3026b656a99a3be89d46_prof);

    }

    public function getTemplateName()
    {
        return "AeroportBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::layout.html.twig' %}
{% block contenu %}
    <h1 class=\"center-block\">Bienvenu dans notre application !</h1>
{% endblock %}";
    }
}
