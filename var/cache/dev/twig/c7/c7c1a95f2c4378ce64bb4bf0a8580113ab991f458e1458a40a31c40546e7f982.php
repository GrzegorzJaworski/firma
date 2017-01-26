<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_34d4588544dca0ec4defe2f378f0da18cf7f35ec32ad1dce6d8cb97d6234c94a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bc3908c814eb4ba837dc655979213e5a7f15240652f029a7e5843ccc7ef0f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc3908c814eb4ba837dc655979213e5a7f15240652f029a7e5843ccc7ef0f5f->enter($__internal_9bc3908c814eb4ba837dc655979213e5a7f15240652f029a7e5843ccc7ef0f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_cabfa424b1d9af159a8099bdd91aaad146150f59a7fe55fe0c425312405fbc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabfa424b1d9af159a8099bdd91aaad146150f59a7fe55fe0c425312405fbc33->enter($__internal_cabfa424b1d9af159a8099bdd91aaad146150f59a7fe55fe0c425312405fbc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9bc3908c814eb4ba837dc655979213e5a7f15240652f029a7e5843ccc7ef0f5f->leave($__internal_9bc3908c814eb4ba837dc655979213e5a7f15240652f029a7e5843ccc7ef0f5f_prof);

        
        $__internal_cabfa424b1d9af159a8099bdd91aaad146150f59a7fe55fe0c425312405fbc33->leave($__internal_cabfa424b1d9af159a8099bdd91aaad146150f59a7fe55fe0c425312405fbc33_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "UserBundle:Default:index.html.twig", "/var/www/html/onzdg/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
