<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f902452bd4e2b5bd61051f47431cb025fc906d0603e67cac5f83a0eb7cfdef60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47006840b2434a08b0d8646c32da5c0ea493304dc52c30778e82a186e7730b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47006840b2434a08b0d8646c32da5c0ea493304dc52c30778e82a186e7730b0a->enter($__internal_47006840b2434a08b0d8646c32da5c0ea493304dc52c30778e82a186e7730b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_cbe0e1c4f2d23efb3f55889f72f960116c0798f37fc5352ee085a1f5fd8efc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe0e1c4f2d23efb3f55889f72f960116c0798f37fc5352ee085a1f5fd8efc3b->enter($__internal_cbe0e1c4f2d23efb3f55889f72f960116c0798f37fc5352ee085a1f5fd8efc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47006840b2434a08b0d8646c32da5c0ea493304dc52c30778e82a186e7730b0a->leave($__internal_47006840b2434a08b0d8646c32da5c0ea493304dc52c30778e82a186e7730b0a_prof);

        
        $__internal_cbe0e1c4f2d23efb3f55889f72f960116c0798f37fc5352ee085a1f5fd8efc3b->leave($__internal_cbe0e1c4f2d23efb3f55889f72f960116c0798f37fc5352ee085a1f5fd8efc3b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3987960926ae709711f1684fe462f52316ee08d6f07eb54e3c3c024576304677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3987960926ae709711f1684fe462f52316ee08d6f07eb54e3c3c024576304677->enter($__internal_3987960926ae709711f1684fe462f52316ee08d6f07eb54e3c3c024576304677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_144d3ae85d8d1fe5c63fcbeec9d253d01abad3339835365001f64890d6dd2eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144d3ae85d8d1fe5c63fcbeec9d253d01abad3339835365001f64890d6dd2eb6->enter($__internal_144d3ae85d8d1fe5c63fcbeec9d253d01abad3339835365001f64890d6dd2eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_144d3ae85d8d1fe5c63fcbeec9d253d01abad3339835365001f64890d6dd2eb6->leave($__internal_144d3ae85d8d1fe5c63fcbeec9d253d01abad3339835365001f64890d6dd2eb6_prof);

        
        $__internal_3987960926ae709711f1684fe462f52316ee08d6f07eb54e3c3c024576304677->leave($__internal_3987960926ae709711f1684fe462f52316ee08d6f07eb54e3c3c024576304677_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/onzdg/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
