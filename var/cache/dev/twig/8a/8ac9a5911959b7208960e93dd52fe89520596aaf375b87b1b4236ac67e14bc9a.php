<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d21cfbe114299a0339e8885b68216749a0204eb9dade21ce1334c5ead902c643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21cfbe114299a0339e8885b68216749a0204eb9dade21ce1334c5ead902c643->enter($__internal_d21cfbe114299a0339e8885b68216749a0204eb9dade21ce1334c5ead902c643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_69d9acd36527e1c0774f365aecd6b7d3d6682fbb8fb547ec9894b428d886c93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d9acd36527e1c0774f365aecd6b7d3d6682fbb8fb547ec9894b428d886c93e->enter($__internal_69d9acd36527e1c0774f365aecd6b7d3d6682fbb8fb547ec9894b428d886c93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d21cfbe114299a0339e8885b68216749a0204eb9dade21ce1334c5ead902c643->leave($__internal_d21cfbe114299a0339e8885b68216749a0204eb9dade21ce1334c5ead902c643_prof);

        
        $__internal_69d9acd36527e1c0774f365aecd6b7d3d6682fbb8fb547ec9894b428d886c93e->leave($__internal_69d9acd36527e1c0774f365aecd6b7d3d6682fbb8fb547ec9894b428d886c93e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7049fb0346a5de87b92de55b5181e1638600ef74ad67c638e0a870d26ee61e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7049fb0346a5de87b92de55b5181e1638600ef74ad67c638e0a870d26ee61e5e->enter($__internal_7049fb0346a5de87b92de55b5181e1638600ef74ad67c638e0a870d26ee61e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_946769a13059041773d08b5338b193fe07382010a9da631d585ae4c102062365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946769a13059041773d08b5338b193fe07382010a9da631d585ae4c102062365->enter($__internal_946769a13059041773d08b5338b193fe07382010a9da631d585ae4c102062365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_946769a13059041773d08b5338b193fe07382010a9da631d585ae4c102062365->leave($__internal_946769a13059041773d08b5338b193fe07382010a9da631d585ae4c102062365_prof);

        
        $__internal_7049fb0346a5de87b92de55b5181e1638600ef74ad67c638e0a870d26ee61e5e->leave($__internal_7049fb0346a5de87b92de55b5181e1638600ef74ad67c638e0a870d26ee61e5e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8884405b2db8224f37863c12621b9b89b2f93267425775d0e96e7753985733f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8884405b2db8224f37863c12621b9b89b2f93267425775d0e96e7753985733f->enter($__internal_c8884405b2db8224f37863c12621b9b89b2f93267425775d0e96e7753985733f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7e663d1756a0c7c394c7d8db3937dc2ffff2c59fd1ee0df4b2c02eb7a56a1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e663d1756a0c7c394c7d8db3937dc2ffff2c59fd1ee0df4b2c02eb7a56a1e2->enter($__internal_d7e663d1756a0c7c394c7d8db3937dc2ffff2c59fd1ee0df4b2c02eb7a56a1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d7e663d1756a0c7c394c7d8db3937dc2ffff2c59fd1ee0df4b2c02eb7a56a1e2->leave($__internal_d7e663d1756a0c7c394c7d8db3937dc2ffff2c59fd1ee0df4b2c02eb7a56a1e2_prof);

        
        $__internal_c8884405b2db8224f37863c12621b9b89b2f93267425775d0e96e7753985733f->leave($__internal_c8884405b2db8224f37863c12621b9b89b2f93267425775d0e96e7753985733f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce7eb958816376503474ff34e6d98648402929c25b1505803b0be2dfdec8f1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7eb958816376503474ff34e6d98648402929c25b1505803b0be2dfdec8f1ff->enter($__internal_ce7eb958816376503474ff34e6d98648402929c25b1505803b0be2dfdec8f1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48e7b90a1eb52d90158c1c855f0b4af70ee7f66bd64f59f76bd48384474cf49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e7b90a1eb52d90158c1c855f0b4af70ee7f66bd64f59f76bd48384474cf49d->enter($__internal_48e7b90a1eb52d90158c1c855f0b4af70ee7f66bd64f59f76bd48384474cf49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_48e7b90a1eb52d90158c1c855f0b4af70ee7f66bd64f59f76bd48384474cf49d->leave($__internal_48e7b90a1eb52d90158c1c855f0b4af70ee7f66bd64f59f76bd48384474cf49d_prof);

        
        $__internal_ce7eb958816376503474ff34e6d98648402929c25b1505803b0be2dfdec8f1ff->leave($__internal_ce7eb958816376503474ff34e6d98648402929c25b1505803b0be2dfdec8f1ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/onzdg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
