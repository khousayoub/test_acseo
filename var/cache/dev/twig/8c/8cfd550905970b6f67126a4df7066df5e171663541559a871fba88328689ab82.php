<?php

/* base.html.twig */
class __TwigTemplate_1a0ec54d909f43e76edfa0ba7c46cacb5f88e4a36937b0ca80ba3348b5bca963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7dc9a5408063bc845d6fee0861897c11204b35aaee4567484d6822f50819867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dc9a5408063bc845d6fee0861897c11204b35aaee4567484d6822f50819867->enter($__internal_e7dc9a5408063bc845d6fee0861897c11204b35aaee4567484d6822f50819867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_e7dc9a5408063bc845d6fee0861897c11204b35aaee4567484d6822f50819867->leave($__internal_e7dc9a5408063bc845d6fee0861897c11204b35aaee4567484d6822f50819867_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6793af457bfd724e43e140f69b60b71845f9aeab9f1c12ddc0951b97aa1e15b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6793af457bfd724e43e140f69b60b71845f9aeab9f1c12ddc0951b97aa1e15b4->enter($__internal_6793af457bfd724e43e140f69b60b71845f9aeab9f1c12ddc0951b97aa1e15b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AMP_test";
        
        $__internal_6793af457bfd724e43e140f69b60b71845f9aeab9f1c12ddc0951b97aa1e15b4->leave($__internal_6793af457bfd724e43e140f69b60b71845f9aeab9f1c12ddc0951b97aa1e15b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7291c350727b0e8aa2037a5bf1d10ff1cca0d101c956e573ad9c0ad6b864c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7291c350727b0e8aa2037a5bf1d10ff1cca0d101c956e573ad9c0ad6b864c60->enter($__internal_b7291c350727b0e8aa2037a5bf1d10ff1cca0d101c956e573ad9c0ad6b864c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_b7291c350727b0e8aa2037a5bf1d10ff1cca0d101c956e573ad9c0ad6b864c60->leave($__internal_b7291c350727b0e8aa2037a5bf1d10ff1cca0d101c956e573ad9c0ad6b864c60_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d32d15295323f46945334c417d2f0384ba1368f7c24c4e4c81be2f12cfda9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d32d15295323f46945334c417d2f0384ba1368f7c24c4e4c81be2f12cfda9de->enter($__internal_7d32d15295323f46945334c417d2f0384ba1368f7c24c4e4c81be2f12cfda9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d32d15295323f46945334c417d2f0384ba1368f7c24c4e4c81be2f12cfda9de->leave($__internal_7d32d15295323f46945334c417d2f0384ba1368f7c24c4e4c81be2f12cfda9de_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09c617d72928f74d4fd5f8e4776028466b4c08f9525c56c87418135cd752095a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c617d72928f74d4fd5f8e4776028466b4c08f9525c56c87418135cd752095a->enter($__internal_09c617d72928f74d4fd5f8e4776028466b4c08f9525c56c87418135cd752095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_09c617d72928f74d4fd5f8e4776028466b4c08f9525c56c87418135cd752095a->leave($__internal_09c617d72928f74d4fd5f8e4776028466b4c08f9525c56c87418135cd752095a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 15,  104 => 14,  98 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 17,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}AMP_test{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
";
    }
}
