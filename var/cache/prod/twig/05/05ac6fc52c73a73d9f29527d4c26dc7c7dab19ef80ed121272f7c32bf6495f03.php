<?php

/* AeroportBundle:Default:index.html.twig */
class __TwigTemplate_4c3f422f7e6b4c4f1186edf312d06a4d6193b45ebf64e0dcb14465193da51076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AeroportBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
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
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}";
    }
}
