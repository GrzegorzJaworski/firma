<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_97cc83e0a7aa46ec2c875198f6005e3c96b86a3bfb64fde58e42981497a99316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cc83e0a7aa46ec2c875198f6005e3c96b86a3bfb64fde58e42981497a99316->enter($__internal_97cc83e0a7aa46ec2c875198f6005e3c96b86a3bfb64fde58e42981497a99316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bb8deb699dcd1390b11bd0f422248ff755145d11c11eed365c150cd2f03627c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8deb699dcd1390b11bd0f422248ff755145d11c11eed365c150cd2f03627c9->enter($__internal_bb8deb699dcd1390b11bd0f422248ff755145d11c11eed365c150cd2f03627c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97cc83e0a7aa46ec2c875198f6005e3c96b86a3bfb64fde58e42981497a99316->leave($__internal_97cc83e0a7aa46ec2c875198f6005e3c96b86a3bfb64fde58e42981497a99316_prof);

        
        $__internal_bb8deb699dcd1390b11bd0f422248ff755145d11c11eed365c150cd2f03627c9->leave($__internal_bb8deb699dcd1390b11bd0f422248ff755145d11c11eed365c150cd2f03627c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc97b2e890b7c4381af09d01808e56cb6db7c6b79aa6d0db30bcb808002e493b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc97b2e890b7c4381af09d01808e56cb6db7c6b79aa6d0db30bcb808002e493b->enter($__internal_cc97b2e890b7c4381af09d01808e56cb6db7c6b79aa6d0db30bcb808002e493b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf52a41d10a3e92aad252660324ce9b1ec77933f143dff8d6a9d4475489b95c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf52a41d10a3e92aad252660324ce9b1ec77933f143dff8d6a9d4475489b95c9->enter($__internal_cf52a41d10a3e92aad252660324ce9b1ec77933f143dff8d6a9d4475489b95c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf52a41d10a3e92aad252660324ce9b1ec77933f143dff8d6a9d4475489b95c9->leave($__internal_cf52a41d10a3e92aad252660324ce9b1ec77933f143dff8d6a9d4475489b95c9_prof);

        
        $__internal_cc97b2e890b7c4381af09d01808e56cb6db7c6b79aa6d0db30bcb808002e493b->leave($__internal_cc97b2e890b7c4381af09d01808e56cb6db7c6b79aa6d0db30bcb808002e493b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fef6ea21da0697caa4e2fc9c34bb6a10f3932bddb8d14c9d85a6c986425e3f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef6ea21da0697caa4e2fc9c34bb6a10f3932bddb8d14c9d85a6c986425e3f9b->enter($__internal_fef6ea21da0697caa4e2fc9c34bb6a10f3932bddb8d14c9d85a6c986425e3f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ab27bbad685cb63c2088afa3cdd763b260f78bd9ef5e59889d3dfd46dcab841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab27bbad685cb63c2088afa3cdd763b260f78bd9ef5e59889d3dfd46dcab841->enter($__internal_0ab27bbad685cb63c2088afa3cdd763b260f78bd9ef5e59889d3dfd46dcab841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ab27bbad685cb63c2088afa3cdd763b260f78bd9ef5e59889d3dfd46dcab841->leave($__internal_0ab27bbad685cb63c2088afa3cdd763b260f78bd9ef5e59889d3dfd46dcab841_prof);

        
        $__internal_fef6ea21da0697caa4e2fc9c34bb6a10f3932bddb8d14c9d85a6c986425e3f9b->leave($__internal_fef6ea21da0697caa4e2fc9c34bb6a10f3932bddb8d14c9d85a6c986425e3f9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a69b888ca665e7fbbbb7eee80c44adeb4464a30776424370de63eb28ddbb9a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69b888ca665e7fbbbb7eee80c44adeb4464a30776424370de63eb28ddbb9a26->enter($__internal_a69b888ca665e7fbbbb7eee80c44adeb4464a30776424370de63eb28ddbb9a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0a4bc53c1d23b781ba541f824601af6442f78877ec2989388b1e6a6c6de9133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a4bc53c1d23b781ba541f824601af6442f78877ec2989388b1e6a6c6de9133->enter($__internal_d0a4bc53c1d23b781ba541f824601af6442f78877ec2989388b1e6a6c6de9133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0a4bc53c1d23b781ba541f824601af6442f78877ec2989388b1e6a6c6de9133->leave($__internal_d0a4bc53c1d23b781ba541f824601af6442f78877ec2989388b1e6a6c6de9133_prof);

        
        $__internal_a69b888ca665e7fbbbb7eee80c44adeb4464a30776424370de63eb28ddbb9a26->leave($__internal_a69b888ca665e7fbbbb7eee80c44adeb4464a30776424370de63eb28ddbb9a26_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/onzdg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
