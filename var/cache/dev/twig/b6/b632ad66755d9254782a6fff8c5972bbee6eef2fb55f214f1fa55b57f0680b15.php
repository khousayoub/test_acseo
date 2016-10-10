<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_542b7dc5f9c1b0d0940a488b1a061c8ee2a54f27d5b0713e6db9ed64a46767df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a457de1b26bc2d070247378c601c75f12c44c5e009f6fee1f32f36c1bcfcab05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a457de1b26bc2d070247378c601c75f12c44c5e009f6fee1f32f36c1bcfcab05->enter($__internal_a457de1b26bc2d070247378c601c75f12c44c5e009f6fee1f32f36c1bcfcab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a457de1b26bc2d070247378c601c75f12c44c5e009f6fee1f32f36c1bcfcab05->leave($__internal_a457de1b26bc2d070247378c601c75f12c44c5e009f6fee1f32f36c1bcfcab05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f6d14d553c7b52c0cc85ec760bf6593ef1810298143e18dae1ee928eb0a8b3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d14d553c7b52c0cc85ec760bf6593ef1810298143e18dae1ee928eb0a8b3fa->enter($__internal_f6d14d553c7b52c0cc85ec760bf6593ef1810298143e18dae1ee928eb0a8b3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f6d14d553c7b52c0cc85ec760bf6593ef1810298143e18dae1ee928eb0a8b3fa->leave($__internal_f6d14d553c7b52c0cc85ec760bf6593ef1810298143e18dae1ee928eb0a8b3fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6394f9a5486b1c4703b83745837cf9bac282883ffc5022b98d14928b947e09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6394f9a5486b1c4703b83745837cf9bac282883ffc5022b98d14928b947e09e->enter($__internal_b6394f9a5486b1c4703b83745837cf9bac282883ffc5022b98d14928b947e09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6394f9a5486b1c4703b83745837cf9bac282883ffc5022b98d14928b947e09e->leave($__internal_b6394f9a5486b1c4703b83745837cf9bac282883ffc5022b98d14928b947e09e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1061e53dd76b037a2251feff48df9fc5551d981331adb5219f1b46b4c9271ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1061e53dd76b037a2251feff48df9fc5551d981331adb5219f1b46b4c9271ab0->enter($__internal_1061e53dd76b037a2251feff48df9fc5551d981331adb5219f1b46b4c9271ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1061e53dd76b037a2251feff48df9fc5551d981331adb5219f1b46b4c9271ab0->leave($__internal_1061e53dd76b037a2251feff48df9fc5551d981331adb5219f1b46b4c9271ab0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
