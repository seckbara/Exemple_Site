<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b5ff84642c83c0673a1f733b83cea25e7bda9511ef1837d34df003192311a155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49d391a500a244ca9beb6d5b5eed70ca7a6d5fb1fe8b4aeee80ddf123b4d67db = $this->env->getExtension("native_profiler");
        $__internal_49d391a500a244ca9beb6d5b5eed70ca7a6d5fb1fe8b4aeee80ddf123b4d67db->enter($__internal_49d391a500a244ca9beb6d5b5eed70ca7a6d5fb1fe8b4aeee80ddf123b4d67db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d391a500a244ca9beb6d5b5eed70ca7a6d5fb1fe8b4aeee80ddf123b4d67db->leave($__internal_49d391a500a244ca9beb6d5b5eed70ca7a6d5fb1fe8b4aeee80ddf123b4d67db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68da5657df28940812c758420b7e8f3e8f8c862420a53160f4a671f86684f2ab = $this->env->getExtension("native_profiler");
        $__internal_68da5657df28940812c758420b7e8f3e8f8c862420a53160f4a671f86684f2ab->enter($__internal_68da5657df28940812c758420b7e8f3e8f8c862420a53160f4a671f86684f2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_68da5657df28940812c758420b7e8f3e8f8c862420a53160f4a671f86684f2ab->leave($__internal_68da5657df28940812c758420b7e8f3e8f8c862420a53160f4a671f86684f2ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b8cb369d10d2d69a8fb5632b64552245c4746196957138eab2178420f1568f1 = $this->env->getExtension("native_profiler");
        $__internal_8b8cb369d10d2d69a8fb5632b64552245c4746196957138eab2178420f1568f1->enter($__internal_8b8cb369d10d2d69a8fb5632b64552245c4746196957138eab2178420f1568f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b8cb369d10d2d69a8fb5632b64552245c4746196957138eab2178420f1568f1->leave($__internal_8b8cb369d10d2d69a8fb5632b64552245c4746196957138eab2178420f1568f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34f482aed3d2c96bcfd527234125767ced0bdadf09af0f38e90d34b677a15f66 = $this->env->getExtension("native_profiler");
        $__internal_34f482aed3d2c96bcfd527234125767ced0bdadf09af0f38e90d34b677a15f66->enter($__internal_34f482aed3d2c96bcfd527234125767ced0bdadf09af0f38e90d34b677a15f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_34f482aed3d2c96bcfd527234125767ced0bdadf09af0f38e90d34b677a15f66->leave($__internal_34f482aed3d2c96bcfd527234125767ced0bdadf09af0f38e90d34b677a15f66_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
