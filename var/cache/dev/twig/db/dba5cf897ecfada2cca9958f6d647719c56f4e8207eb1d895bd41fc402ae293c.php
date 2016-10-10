<?php

/* AeroportBundle::layout.html.twig */
class __TwigTemplate_9a684cee1e1abb889d9bc43e9ab8e7d2605a003061ce9b7f5d4953190e936a91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AeroportBundle::layout.html.twig", 1);
        $this->blocks = array(
            'contenu_titre' => array($this, 'block_contenu_titre'),
            'contenu_page' => array($this, 'block_contenu_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbec70c21842388c33e83875b3c9f74253cf4efb65582cfe50d3402fe8d4d8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbec70c21842388c33e83875b3c9f74253cf4efb65582cfe50d3402fe8d4d8a3->enter($__internal_dbec70c21842388c33e83875b3c9f74253cf4efb65582cfe50d3402fe8d4d8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AeroportBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbec70c21842388c33e83875b3c9f74253cf4efb65582cfe50d3402fe8d4d8a3->leave($__internal_dbec70c21842388c33e83875b3c9f74253cf4efb65582cfe50d3402fe8d4d8a3_prof);

    }

    // line 2
    public function block_contenu_titre($context, array $blocks = array())
    {
        $__internal_ead63e2d13446dd6b507c163d86ae10a7b73de40a8828c67310d52a6dbbf0055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead63e2d13446dd6b507c163d86ae10a7b73de40a8828c67310d52a6dbbf0055->enter($__internal_ead63e2d13446dd6b507c163d86ae10a7b73de40a8828c67310d52a6dbbf0055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu_titre"));

        // line 3
        echo "    <h1 class=\"center-block\">Bienvenu dans notre application !</h1>
    ";
        // line 4
        $this->displayBlock('contenu_page', $context, $blocks);
        
        $__internal_ead63e2d13446dd6b507c163d86ae10a7b73de40a8828c67310d52a6dbbf0055->leave($__internal_ead63e2d13446dd6b507c163d86ae10a7b73de40a8828c67310d52a6dbbf0055_prof);

    }

    public function block_contenu_page($context, array $blocks = array())
    {
        $__internal_1fe7c79af12ca51591561a2b8ec4e78044d0022d7da84c4ca432a0467f74f3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe7c79af12ca51591561a2b8ec4e78044d0022d7da84c4ca432a0467f74f3e5->enter($__internal_1fe7c79af12ca51591561a2b8ec4e78044d0022d7da84c4ca432a0467f74f3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu_page"));

        
        $__internal_1fe7c79af12ca51591561a2b8ec4e78044d0022d7da84c4ca432a0467f74f3e5->leave($__internal_1fe7c79af12ca51591561a2b8ec4e78044d0022d7da84c4ca432a0467f74f3e5_prof);

    }

    public function getTemplateName()
    {
        return "AeroportBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::layout.html.twig' %}
{% block contenu_titre %}
    <h1 class=\"center-block\">Bienvenu dans notre application !</h1>
    {% block contenu_page %}{% endblock %}
{% endblock %}";
    }
}
