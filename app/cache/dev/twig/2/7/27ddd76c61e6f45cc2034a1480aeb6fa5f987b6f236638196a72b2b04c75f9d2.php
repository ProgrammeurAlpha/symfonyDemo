<?php

/* base.html.twig */
class __TwigTemplate_70320efa125d1e104f7b42074175163a143b2889dcad19d4f81eb60235a5381f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_934bc6762f0e5ba52ecfc2f93fe221d6b227f3d7b581be6f38c05b478ef39ef9 = $this->env->getExtension("native_profiler");
        $__internal_934bc6762f0e5ba52ecfc2f93fe221d6b227f3d7b581be6f38c05b478ef39ef9->enter($__internal_934bc6762f0e5ba52ecfc2f93fe221d6b227f3d7b581be6f38c05b478ef39ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 30
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "
        <div class=\"container body-container\">
            ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 120
        echo "        </div>

        ";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 141
        echo "
        ";
        // line 142
        $this->displayBlock('javascripts', $context, $blocks);
        // line 161
        echo "
    </body>
</html>
";
        
        $__internal_934bc6762f0e5ba52ecfc2f93fe221d6b227f3d7b581be6f38c05b478ef39ef9->leave($__internal_934bc6762f0e5ba52ecfc2f93fe221d6b227f3d7b581be6f38c05b478ef39ef9_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccbe8b2786526f49d0777eabed5c7b6cb593bed08b906ec89bd69c58be47f5eb = $this->env->getExtension("native_profiler");
        $__internal_ccbe8b2786526f49d0777eabed5c7b6cb593bed08b906ec89bd69c58be47f5eb->enter($__internal_ccbe8b2786526f49d0777eabed5c7b6cb593bed08b906ec89bd69c58be47f5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_ccbe8b2786526f49d0777eabed5c7b6cb593bed08b906ec89bd69c58be47f5eb->leave($__internal_ccbe8b2786526f49d0777eabed5c7b6cb593bed08b906ec89bd69c58be47f5eb_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6393b8120b817c05cfd93aa1518151937a3faef5e4073fefd52615c7f766b10 = $this->env->getExtension("native_profiler");
        $__internal_d6393b8120b817c05cfd93aa1518151937a3faef5e4073fefd52615c7f766b10->enter($__internal_d6393b8120b817c05cfd93aa1518151937a3faef5e4073fefd52615c7f766b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_d6393b8120b817c05cfd93aa1518151937a3faef5e4073fefd52615c7f766b10->leave($__internal_d6393b8120b817c05cfd93aa1518151937a3faef5e4073fefd52615c7f766b10_prof);

    }

    // line 30
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_955c51f498e090fe68ba193b9b7be38c7051a55b2d3f6148ea4da87e181bc539 = $this->env->getExtension("native_profiler");
        $__internal_955c51f498e090fe68ba193b9b7be38c7051a55b2d3f6148ea4da87e181bc539->enter($__internal_955c51f498e090fe68ba193b9b7be38c7051a55b2d3f6148ea4da87e181bc539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_955c51f498e090fe68ba193b9b7be38c7051a55b2d3f6148ea4da87e181bc539->leave($__internal_955c51f498e090fe68ba193b9b7be38c7051a55b2d3f6148ea4da87e181bc539_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_d7c2e85ff7a202c4dd02501803e309b98ff7dc1339e13f9f8883315fa6cf4e1a = $this->env->getExtension("native_profiler");
        $__internal_d7c2e85ff7a202c4dd02501803e309b98ff7dc1339e13f9f8883315fa6cf4e1a->enter($__internal_d7c2e85ff7a202c4dd02501803e309b98ff7dc1339e13f9f8883315fa6cf4e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 53
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 73
        echo "
                                ";
        // line 74
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 75
            echo "                                    <li>
                                        <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i> ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 81
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-globe\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\">
                                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 86
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_d7c2e85ff7a202c4dd02501803e309b98ff7dc1339e13f9f8883315fa6cf4e1a->leave($__internal_d7c2e85ff7a202c4dd02501803e309b98ff7dc1339e13f9f8883315fa6cf4e1a_prof);

    }

    // line 53
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_e0871eacf64e7769dbfc26ddc80a392d642f77ed6333ff91c90e33216aa73b27 = $this->env->getExtension("native_profiler");
        $__internal_e0871eacf64e7769dbfc26ddc80a392d642f77ed6333ff91c90e33216aa73b27->enter($__internal_e0871eacf64e7769dbfc26ddc80a392d642f77ed6333ff91c90e33216aa73b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 54
        echo "                                    <li>
                                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\"></i> ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 65
        echo "                                    ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 66
            echo "                                        <li>
                                            <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\"></i> ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 72
        echo "                                ";
        
        $__internal_e0871eacf64e7769dbfc26ddc80a392d642f77ed6333ff91c90e33216aa73b27->leave($__internal_e0871eacf64e7769dbfc26ddc80a392d642f77ed6333ff91c90e33216aa73b27_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_32cf2bd61e289688a13cc7adc20b880376159f133847b823f67449da203c67e5 = $this->env->getExtension("native_profiler");
        $__internal_32cf2bd61e289688a13cc7adc20b880376159f133847b823f67449da203c67e5->enter($__internal_32cf2bd61e289688a13cc7adc20b880376159f133847b823f67449da203c67e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 99
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 101
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 105
        $this->displayBlock('sidebar', $context, $blocks);
        // line 117
        echo "                    </div>
                </div>
            ";
        
        $__internal_32cf2bd61e289688a13cc7adc20b880376159f133847b823f67449da203c67e5->leave($__internal_32cf2bd61e289688a13cc7adc20b880376159f133847b823f67449da203c67e5_prof);

    }

    // line 101
    public function block_main($context, array $blocks = array())
    {
        $__internal_96850c41175cf77e11d8046fa9ac2b7c2660f876a76d92962f1eabb5bd859721 = $this->env->getExtension("native_profiler");
        $__internal_96850c41175cf77e11d8046fa9ac2b7c2660f876a76d92962f1eabb5bd859721->enter($__internal_96850c41175cf77e11d8046fa9ac2b7c2660f876a76d92962f1eabb5bd859721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_96850c41175cf77e11d8046fa9ac2b7c2660f876a76d92962f1eabb5bd859721->leave($__internal_96850c41175cf77e11d8046fa9ac2b7c2660f876a76d92962f1eabb5bd859721_prof);

    }

    // line 105
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bddfbd4acf3a810a103a792aede895a1490d315ecfce757ee501c33e302c0085 = $this->env->getExtension("native_profiler");
        $__internal_bddfbd4acf3a810a103a792aede895a1490d315ecfce757ee501c33e302c0085->enter($__internal_bddfbd4acf3a810a103a792aede895a1490d315ecfce757ee501c33e302c0085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 106
        echo "                            <div class=\"section about\">
                                <div class=\"well well-lg\">
                                    <p>
                                        ";
        // line 109
        echo $this->env->getExtension('translator')->trans("help.app_description");
        echo "
                                    </p>
                                    <p>
                                        ";
        // line 112
        echo $this->env->getExtension('translator')->trans("help.more_information");
        echo "
                                    </p>
                                </div>
                            </div>
                        ";
        
        $__internal_bddfbd4acf3a810a103a792aede895a1490d315ecfce757ee501c33e302c0085->leave($__internal_bddfbd4acf3a810a103a792aede895a1490d315ecfce757ee501c33e302c0085_prof);

    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8f8271fb6dd6e3823b34e0df5dbd21523f171e383143864d124f4798b36e7a7f = $this->env->getExtension("native_profiler");
        $__internal_8f8271fb6dd6e3823b34e0df5dbd21523f171e383143864d124f4798b36e7a7f->enter($__internal_8f8271fb6dd6e3823b34e0df5dbd21523f171e383143864d124f4798b36e7a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 123
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"http://symfony.com/blog\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_8f8271fb6dd6e3823b34e0df5dbd21523f171e383143864d124f4798b36e7a7f->leave($__internal_8f8271fb6dd6e3823b34e0df5dbd21523f171e383143864d124f4798b36e7a7f_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d969c35c9677f6abb1e64fb342893ba5757712b7c271727096f5e6b8a87b563 = $this->env->getExtension("native_profiler");
        $__internal_4d969c35c9677f6abb1e64fb342893ba5757712b7c271727096f5e6b8a87b563->enter($__internal_4d969c35c9677f6abb1e64fb342893ba5757712b7c271727096f5e6b8a87b563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "        ";
        // line 152
        echo "
            <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

            <script>
                \$(document).ready(function() {
                    hljs.initHighlightingOnLoad();
                });
            </script>
        ";
        
        $__internal_4d969c35c9677f6abb1e64fb342893ba5757712b7c271727096f5e6b8a87b563->leave($__internal_4d969c35c9677f6abb1e64fb342893ba5757712b7c271727096f5e6b8a87b563_prof);

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
        return array (  379 => 153,  376 => 152,  374 => 143,  368 => 142,  348 => 128,  344 => 127,  338 => 123,  332 => 122,  320 => 112,  314 => 109,  309 => 106,  303 => 105,  292 => 101,  283 => 117,  281 => 105,  276 => 102,  274 => 101,  270 => 99,  264 => 98,  257 => 72,  250 => 68,  246 => 67,  243 => 66,  240 => 65,  233 => 56,  229 => 55,  226 => 54,  220 => 53,  206 => 88,  191 => 86,  187 => 85,  181 => 81,  174 => 77,  170 => 76,  167 => 75,  165 => 74,  162 => 73,  160 => 53,  141 => 37,  135 => 33,  129 => 32,  118 => 30,  109 => 25,  106 => 24,  104 => 13,  98 => 12,  86 => 10,  76 => 161,  74 => 142,  71 => 141,  69 => 122,  65 => 120,  63 => 98,  59 => 96,  57 => 32,  52 => 30,  45 => 27,  43 => 12,  38 => 10,  32 => 6,);
    }
}
/* {#*/
/*    This is the base template used as the application layout which contains the*/
/*    common elements and decorates all the other templates.*/
/*    See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts*/
/* #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Symfony Demo application{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         {# uncomment the following lines to compile SCSS assets with Assetic*/
/* */
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/bootstrap.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         #}*/
/* */
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}">*/
/* */
/*         {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                                 Symfony Demo*/
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('blog_index') }}">*/
/*                                             <i class="fa fa-home"></i> {{ 'menu.homepage'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     {# The 'app.user' condition is required to avoid issues in 404 and 500 error pages*/
/*                                        As routing is done before security, error pages are not covered by any firewall.*/
/*                                        This means you can't use is_granted() directly on these pages.*/
/*                                        See http://symfony.com/doc/current/cookbook/security/form_login_setup.html#avoid-common-pitfalls*/
/*                                     #}*/
/*                                     {% if app.user and is_granted('ROLE_ADMIN') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('admin_post_index') }}">*/
/*                                                 <i class="fa fa-lock"></i> {{ 'menu.admin'|trans }}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 {% endblock %}*/
/* */
/*                                 {% if app.user %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('security_logout') }}">*/
/*                                             <i class="fa fa-sign-out"></i> {{ 'menu.logout'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/* */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-globe"></i> <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu locales" role="menu">*/
/*                                         {% for locale in locales() %}*/
/*                                             <li {% if app.request.locale == locale.code %}class="active"{% endif %}><a href="{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}">{{ locale.name|capitalize }}</a></li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*         {% endblock %}*/
/* */
/*         <div class="container body-container">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-9">*/
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/* */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}*/
/*                             <div class="section about">*/
/*                                 <div class="well well-lg">*/
/*                                     <p>*/
/*                                         {{ 'help.app_description'|trans|raw }}*/
/*                                     </p>*/
/*                                     <p>*/
/*                                         {{ 'help.more_information'|trans|raw }}*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         {% block footer %}*/
/*             <footer>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div id="footer-copyright" class="col-md-6">*/
/*                             <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>*/
/*                             <p>{{ 'mit_license'|trans }}</p>*/
/*                         </div>*/
/*                         <div id="footer-resources" class="col-md-6">*/
/*                             <p>*/
/*                                 <a href="https://twitter.com/symfony"><i class="fa fa-twitter"></i></a>*/
/*                                 <a href="https://www.facebook.com/SensioLabs"><i class="fa fa-facebook"></i></a>*/
/*                                 <a href="http://symfony.com/blog"><i class="fa fa-rss"></i></a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*         {# uncomment the following lines to combine and minimize JavaScript assets with Assetic*/
/*             {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/highlight.pack.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/main.js" %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         #}*/
/* */
/*             <script src="{{ asset('js/app.js') }}"></script>*/
/* */
/*             <script>*/
/*                 $(document).ready(function() {*/
/*                     hljs.initHighlightingOnLoad();*/
/*                 });*/
/*             </script>*/
/*         {% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
