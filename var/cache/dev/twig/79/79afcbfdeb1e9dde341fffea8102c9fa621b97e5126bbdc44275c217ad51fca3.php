<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dee88e72163dde78d52a24716ccff497ef3aee00a7a372bda0d0c8f886508194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fae422708be33771d655fbb8c7ef8ffd336a9d938d1bc9b0e2da20c31b1866a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae422708be33771d655fbb8c7ef8ffd336a9d938d1bc9b0e2da20c31b1866a9->enter($__internal_fae422708be33771d655fbb8c7ef8ffd336a9d938d1bc9b0e2da20c31b1866a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fae422708be33771d655fbb8c7ef8ffd336a9d938d1bc9b0e2da20c31b1866a9->leave($__internal_fae422708be33771d655fbb8c7ef8ffd336a9d938d1bc9b0e2da20c31b1866a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43e77dfb065de250ebc195257f129bd64650f7a21a11bdb3a0443c787b7396fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e77dfb065de250ebc195257f129bd64650f7a21a11bdb3a0443c787b7396fe->enter($__internal_43e77dfb065de250ebc195257f129bd64650f7a21a11bdb3a0443c787b7396fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_43e77dfb065de250ebc195257f129bd64650f7a21a11bdb3a0443c787b7396fe->leave($__internal_43e77dfb065de250ebc195257f129bd64650f7a21a11bdb3a0443c787b7396fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05035b7ce7892e1181a8c8672852b98e258036747e76531b968ab3a422b8ee1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05035b7ce7892e1181a8c8672852b98e258036747e76531b968ab3a422b8ee1a->enter($__internal_05035b7ce7892e1181a8c8672852b98e258036747e76531b968ab3a422b8ee1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_05035b7ce7892e1181a8c8672852b98e258036747e76531b968ab3a422b8ee1a->leave($__internal_05035b7ce7892e1181a8c8672852b98e258036747e76531b968ab3a422b8ee1a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb8088a6e42e70b8d218e8c9b0162346ea6422cbbf1f266a5e7278a0bcac7c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8088a6e42e70b8d218e8c9b0162346ea6422cbbf1f266a5e7278a0bcac7c74->enter($__internal_eb8088a6e42e70b8d218e8c9b0162346ea6422cbbf1f266a5e7278a0bcac7c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eb8088a6e42e70b8d218e8c9b0162346ea6422cbbf1f266a5e7278a0bcac7c74->leave($__internal_eb8088a6e42e70b8d218e8c9b0162346ea6422cbbf1f266a5e7278a0bcac7c74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
