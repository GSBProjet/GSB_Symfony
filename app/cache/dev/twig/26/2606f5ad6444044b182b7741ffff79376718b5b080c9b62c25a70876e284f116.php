<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_82bfe9dedc33b130e56531c01a1225f10e697172de0be61d35fc2b53845910b3 extends Twig_Template
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
        $__internal_4affc342635ae88b376cfc79907cdfc75251804906d71516f9ab0ed962870a70 = $this->env->getExtension("native_profiler");
        $__internal_4affc342635ae88b376cfc79907cdfc75251804906d71516f9ab0ed962870a70->enter($__internal_4affc342635ae88b376cfc79907cdfc75251804906d71516f9ab0ed962870a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4affc342635ae88b376cfc79907cdfc75251804906d71516f9ab0ed962870a70->leave($__internal_4affc342635ae88b376cfc79907cdfc75251804906d71516f9ab0ed962870a70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eecbc62a37d9f7048ba50b15c950cc5b0b8dd206a0e94dbe56bcd6e8221aae1b = $this->env->getExtension("native_profiler");
        $__internal_eecbc62a37d9f7048ba50b15c950cc5b0b8dd206a0e94dbe56bcd6e8221aae1b->enter($__internal_eecbc62a37d9f7048ba50b15c950cc5b0b8dd206a0e94dbe56bcd6e8221aae1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eecbc62a37d9f7048ba50b15c950cc5b0b8dd206a0e94dbe56bcd6e8221aae1b->leave($__internal_eecbc62a37d9f7048ba50b15c950cc5b0b8dd206a0e94dbe56bcd6e8221aae1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_657d0d7f307ec6a0171c620f77e4e4cd4b7a367448c0b3dadc9697d0b77c5dd6 = $this->env->getExtension("native_profiler");
        $__internal_657d0d7f307ec6a0171c620f77e4e4cd4b7a367448c0b3dadc9697d0b77c5dd6->enter($__internal_657d0d7f307ec6a0171c620f77e4e4cd4b7a367448c0b3dadc9697d0b77c5dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_657d0d7f307ec6a0171c620f77e4e4cd4b7a367448c0b3dadc9697d0b77c5dd6->leave($__internal_657d0d7f307ec6a0171c620f77e4e4cd4b7a367448c0b3dadc9697d0b77c5dd6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b08a2bd817d02f6a5c1b683e6ba89a319411714f7d3e57c6c50050ecaa7ec0d = $this->env->getExtension("native_profiler");
        $__internal_3b08a2bd817d02f6a5c1b683e6ba89a319411714f7d3e57c6c50050ecaa7ec0d->enter($__internal_3b08a2bd817d02f6a5c1b683e6ba89a319411714f7d3e57c6c50050ecaa7ec0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b08a2bd817d02f6a5c1b683e6ba89a319411714f7d3e57c6c50050ecaa7ec0d->leave($__internal_3b08a2bd817d02f6a5c1b683e6ba89a319411714f7d3e57c6c50050ecaa7ec0d_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
