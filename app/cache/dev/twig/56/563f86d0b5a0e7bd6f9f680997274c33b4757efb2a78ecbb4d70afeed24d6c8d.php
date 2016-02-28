<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_53a0bcc7892d66c8e50d2243f61ba5ca68547ecf6e57e17195a74d9274f0bf12 extends Twig_Template
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
        $__internal_f171e40ceafbaae34da6f58c7381221d1f4d55fe798f5a222d4e44cfe058214c = $this->env->getExtension("native_profiler");
        $__internal_f171e40ceafbaae34da6f58c7381221d1f4d55fe798f5a222d4e44cfe058214c->enter($__internal_f171e40ceafbaae34da6f58c7381221d1f4d55fe798f5a222d4e44cfe058214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f171e40ceafbaae34da6f58c7381221d1f4d55fe798f5a222d4e44cfe058214c->leave($__internal_f171e40ceafbaae34da6f58c7381221d1f4d55fe798f5a222d4e44cfe058214c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03e993bf92506d1471e42848ebdba5c5def0f92a3df3886894e5db4eda66746f = $this->env->getExtension("native_profiler");
        $__internal_03e993bf92506d1471e42848ebdba5c5def0f92a3df3886894e5db4eda66746f->enter($__internal_03e993bf92506d1471e42848ebdba5c5def0f92a3df3886894e5db4eda66746f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_03e993bf92506d1471e42848ebdba5c5def0f92a3df3886894e5db4eda66746f->leave($__internal_03e993bf92506d1471e42848ebdba5c5def0f92a3df3886894e5db4eda66746f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_041553dba416033d683b911824d4192042a8777ff22308b705ce91e9e88be7dd = $this->env->getExtension("native_profiler");
        $__internal_041553dba416033d683b911824d4192042a8777ff22308b705ce91e9e88be7dd->enter($__internal_041553dba416033d683b911824d4192042a8777ff22308b705ce91e9e88be7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_041553dba416033d683b911824d4192042a8777ff22308b705ce91e9e88be7dd->leave($__internal_041553dba416033d683b911824d4192042a8777ff22308b705ce91e9e88be7dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_933391007c7def16cbaf3f3fbd4d26be0c38b602ba4fe957b60b0b03c59e495e = $this->env->getExtension("native_profiler");
        $__internal_933391007c7def16cbaf3f3fbd4d26be0c38b602ba4fe957b60b0b03c59e495e->enter($__internal_933391007c7def16cbaf3f3fbd4d26be0c38b602ba4fe957b60b0b03c59e495e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_933391007c7def16cbaf3f3fbd4d26be0c38b602ba4fe957b60b0b03c59e495e->leave($__internal_933391007c7def16cbaf3f3fbd4d26be0c38b602ba4fe957b60b0b03c59e495e_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
