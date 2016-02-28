<?php

/* ::base.html.twig */
class __TwigTemplate_6d00a10fadd359cf430e8e2ab8e360fb7d82dc6ea0726e65f4f5bd088cb581a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b38a08dfbe78d1e452b5bd6fd1801f1d60bcb2b54ebe027a5ea7995bc1e9a7d8 = $this->env->getExtension("native_profiler");
        $__internal_b38a08dfbe78d1e452b5bd6fd1801f1d60bcb2b54ebe027a5ea7995bc1e9a7d8->enter($__internal_b38a08dfbe78d1e452b5bd6fd1801f1d60bcb2b54ebe027a5ea7995bc1e9a7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<!DOCTYPE html>
<!--[if lt IE 7]><html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]><html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]><html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"><![endif]-->
    <title>Site ASEMAH</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/normalize.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/templatemo_misc.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/templatemo_style.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>

</head>
    <body>

    <div id=\"front\">
        <div class=\"site-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6 col-xs-6\">
                        <div id=\"templatemo_logo\">
                            <h1><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("site_homepage");
        echo "\">ASEMAH</a></h1>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class=\"col-md-8 col-sm-6 col-xs-6\">
                        <a href=\"#\" class=\"toggle-menu\"><i class=\"fa fa-bars\"></i></a>
                        <div class=\"main-menu\">
                            <ul>
                                <li><a href=\"#front\">Home</a></li>
                                <li><a href=\"#services\">Services</a></li>
                                <li><a href=\"#products\">Products</a></li>
                                <li><a href=\"#contact\">Contact</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"responsive\">
                            <div class=\"main-menu\">
                                <ul>
                                    <li><a href=\"#front\">Home</a></li>
                                    <li><a href=\"#services\">Services</a></li>
                                    <li><a href=\"#products\">Products</a></li>
                                    <li><a href=\"#contact\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->

    ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "


        <div class=\"site-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-6\">
                    <span id=\"copyright\">
                    \tCopyright &copy; 2014 <a href=\"#\">Company Name</a>
                    </span>
                    </div> <!-- /.col-md-6 -->
                    <div class=\"col-md-4 col-sm-6\">
                        <ul class=\"social\">
                            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-instagram\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                            <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                        </ul>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.easing-1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "    </body>
</html>
";
        
        $__internal_b38a08dfbe78d1e452b5bd6fd1801f1d60bcb2b54ebe027a5ea7995bc1e9a7d8->leave($__internal_b38a08dfbe78d1e452b5bd6fd1801f1d60bcb2b54ebe027a5ea7995bc1e9a7d8_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4609a82a0a8ab7079a0e30695c0743631e78a3a111d56ced6fe3e98f068e2e3 = $this->env->getExtension("native_profiler");
        $__internal_e4609a82a0a8ab7079a0e30695c0743631e78a3a111d56ced6fe3e98f068e2e3->enter($__internal_e4609a82a0a8ab7079a0e30695c0743631e78a3a111d56ced6fe3e98f068e2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4609a82a0a8ab7079a0e30695c0743631e78a3a111d56ced6fe3e98f068e2e3->leave($__internal_e4609a82a0a8ab7079a0e30695c0743631e78a3a111d56ced6fe3e98f068e2e3_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d9935d5de7e1154e8a7a5edb1ad2d19869935fb7f6517130c3a40aa5f84061b = $this->env->getExtension("native_profiler");
        $__internal_8d9935d5de7e1154e8a7a5edb1ad2d19869935fb7f6517130c3a40aa5f84061b->enter($__internal_8d9935d5de7e1154e8a7a5edb1ad2d19869935fb7f6517130c3a40aa5f84061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8d9935d5de7e1154e8a7a5edb1ad2d19869935fb7f6517130c3a40aa5f84061b->leave($__internal_8d9935d5de7e1154e8a7a5edb1ad2d19869935fb7f6517130c3a40aa5f84061b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 98,  182 => 68,  173 => 99,  171 => 98,  167 => 97,  163 => 96,  159 => 95,  155 => 94,  151 => 93,  147 => 92,  122 => 69,  120 => 68,  84 => 35,  70 => 24,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  40 => 15,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->*/
/*     <title>Site ASEMAH</title>*/
/*     <meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width">*/
/* */
/*     <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet') }}">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/normalize.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/templatemo_misc.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/templatemo_style.css') }}">*/
/* */
/*     <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>*/
/* */
/* </head>*/
/*     <body>*/
/* */
/*     <div id="front">*/
/*         <div class="site-header">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-4 col-sm-6 col-xs-6">*/
/*                         <div id="templatemo_logo">*/
/*                             <h1><a href="{{ path('site_homepage') }}">ASEMAH</a></h1>*/
/*                         </div> <!-- /.logo -->*/
/*                     </div> <!-- /.col-md-4 -->*/
/*                     <div class="col-md-8 col-sm-6 col-xs-6">*/
/*                         <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>*/
/*                         <div class="main-menu">*/
/*                             <ul>*/
/*                                 <li><a href="#front">Home</a></li>*/
/*                                 <li><a href="#services">Services</a></li>*/
/*                                 <li><a href="#products">Products</a></li>*/
/*                                 <li><a href="#contact">Contact</a></li>*/
/*                             </ul>*/
/*                         </div> <!-- /.main-menu -->*/
/*                     </div> <!-- /.col-md-8 -->*/
/*                 </div> <!-- /.row -->*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class="responsive">*/
/*                             <div class="main-menu">*/
/*                                 <ul>*/
/*                                     <li><a href="#front">Home</a></li>*/
/*                                     <li><a href="#services">Services</a></li>*/
/*                                     <li><a href="#products">Products</a></li>*/
/*                                     <li><a href="#contact">Contact</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div> <!-- /.container -->*/
/*         </div> <!-- /.site-header -->*/
/*     </div> <!-- /#front -->*/
/* */
/*     {% block body %}{% endblock %}*/
/* */
/* */
/* */
/*         <div class="site-footer">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-8 col-sm-6">*/
/*                     <span id="copyright">*/
/*                     	Copyright &copy; 2014 <a href="#">Company Name</a>*/
/*                     </span>*/
/*                     </div> <!-- /.col-md-6 -->*/
/*                     <div class="col-md-4 col-sm-6">*/
/*                         <ul class="social">*/
/*                             <li><a href="#" class="fa fa-facebook"></a></li>*/
/*                             <li><a href="#" class="fa fa-twitter"></a></li>*/
/*                             <li><a href="#" class="fa fa-instagram"></a></li>*/
/*                             <li><a href="#" class="fa fa-linkedin"></a></li>*/
/*                             <li><a href="#" class="fa fa-rss"></a></li>*/
/*                         </ul>*/
/*                     </div> <!-- /.col-md-6 -->*/
/*                 </div> <!-- /.row -->*/
/*             </div> <!-- /.container -->*/
/*         </div> <!-- /.site-footer -->*/
/*         <script src="{{ asset('js/vendor/jquery-1.10.1.min.js') }}"></script>*/
/*         <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.1.min.js') }}"><\/script>')</script>*/
/*         <script src="{{ asset('js/jquery.easing-1.3.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*         <script src="{{ asset('js/plugins.js') }}"></script>*/
/*         <script src="{{ asset('js/main.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
