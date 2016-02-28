<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c00747d9cbdf5f4761417026becb15c5537242eedf8e7e3680ab5b0d4c735244 extends Twig_Template
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
        $__internal_ea1d12f4bb880e5c5331dc09fb0f81697150a10fde01a3257e917f09b8cc807f = $this->env->getExtension("native_profiler");
        $__internal_ea1d12f4bb880e5c5331dc09fb0f81697150a10fde01a3257e917f09b8cc807f->enter($__internal_ea1d12f4bb880e5c5331dc09fb0f81697150a10fde01a3257e917f09b8cc807f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea1d12f4bb880e5c5331dc09fb0f81697150a10fde01a3257e917f09b8cc807f->leave($__internal_ea1d12f4bb880e5c5331dc09fb0f81697150a10fde01a3257e917f09b8cc807f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71f81622ee6a5a72767a26087bd3c4713afe377fb81db7728c7f64e824df81a9 = $this->env->getExtension("native_profiler");
        $__internal_71f81622ee6a5a72767a26087bd3c4713afe377fb81db7728c7f64e824df81a9->enter($__internal_71f81622ee6a5a72767a26087bd3c4713afe377fb81db7728c7f64e824df81a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71f81622ee6a5a72767a26087bd3c4713afe377fb81db7728c7f64e824df81a9->leave($__internal_71f81622ee6a5a72767a26087bd3c4713afe377fb81db7728c7f64e824df81a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d78f32ff6f3794d6b63b7ed7065f814ac8c8eea9e3d7219f36fe537732147b3 = $this->env->getExtension("native_profiler");
        $__internal_4d78f32ff6f3794d6b63b7ed7065f814ac8c8eea9e3d7219f36fe537732147b3->enter($__internal_4d78f32ff6f3794d6b63b7ed7065f814ac8c8eea9e3d7219f36fe537732147b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d78f32ff6f3794d6b63b7ed7065f814ac8c8eea9e3d7219f36fe537732147b3->leave($__internal_4d78f32ff6f3794d6b63b7ed7065f814ac8c8eea9e3d7219f36fe537732147b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_534817eb69ce3cea954f69593b03668318a831bc4a38d590df78269abfa14849 = $this->env->getExtension("native_profiler");
        $__internal_534817eb69ce3cea954f69593b03668318a831bc4a38d590df78269abfa14849->enter($__internal_534817eb69ce3cea954f69593b03668318a831bc4a38d590df78269abfa14849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_534817eb69ce3cea954f69593b03668318a831bc4a38d590df78269abfa14849->leave($__internal_534817eb69ce3cea954f69593b03668318a831bc4a38d590df78269abfa14849_prof);

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
