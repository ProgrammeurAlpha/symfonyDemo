<?php

/* default/homepage.html.twig */
class __TwigTemplate_06031cd340325428407d8cb5f15c9c6f6c5a3a98a2d73586af71c4142daf7822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c1a6d962399fc340d7b17552daee065ca735cd5554f6a3bcfd56ae7b9af3082 = $this->env->getExtension("native_profiler");
        $__internal_2c1a6d962399fc340d7b17552daee065ca735cd5554f6a3bcfd56ae7b9af3082->enter($__internal_2c1a6d962399fc340d7b17552daee065ca735cd5554f6a3bcfd56ae7b9af3082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1a6d962399fc340d7b17552daee065ca735cd5554f6a3bcfd56ae7b9af3082->leave($__internal_2c1a6d962399fc340d7b17552daee065ca735cd5554f6a3bcfd56ae7b9af3082_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_636202fc023857c88e7e09b413982b9b6a94f1922993587e018527c70f844b28 = $this->env->getExtension("native_profiler");
        $__internal_636202fc023857c88e7e09b413982b9b6a94f1922993587e018527c70f844b28->enter($__internal_636202fc023857c88e7e09b413982b9b6a94f1922993587e018527c70f844b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_636202fc023857c88e7e09b413982b9b6a94f1922993587e018527c70f844b28->leave($__internal_636202fc023857c88e7e09b413982b9b6a94f1922993587e018527c70f844b28_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_47097f1f44865d718c367caf2b23f0ef22cedc410d485ee5ddb252b73d23b97f = $this->env->getExtension("native_profiler");
        $__internal_47097f1f44865d718c367caf2b23f0ef22cedc410d485ee5ddb252b73d23b97f->enter($__internal_47097f1f44865d718c367caf2b23f0ef22cedc410d485ee5ddb252b73d23b97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_47097f1f44865d718c367caf2b23f0ef22cedc410d485ee5ddb252b73d23b97f->leave($__internal_47097f1f44865d718c367caf2b23f0ef22cedc410d485ee5ddb252b73d23b97f_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ab9264a0a6e2eb744569b7354946791ca4d99e9ae12b3ae886a4f94ab8ee3e56 = $this->env->getExtension("native_profiler");
        $__internal_ab9264a0a6e2eb744569b7354946791ca4d99e9ae12b3ae886a4f94ab8ee3e56->enter($__internal_ab9264a0a6e2eb744569b7354946791ca4d99e9ae12b3ae886a4f94ab8ee3e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_ab9264a0a6e2eb744569b7354946791ca4d99e9ae12b3ae886a4f94ab8ee3e56->leave($__internal_ab9264a0a6e2eb744569b7354946791ca4d99e9ae12b3ae886a4f94ab8ee3e56_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca7745dfc6b73291f22090d1dd0b5246c02b7d49a33a638870f389f3f8a77885 = $this->env->getExtension("native_profiler");
        $__internal_ca7745dfc6b73291f22090d1dd0b5246c02b7d49a33a638870f389f3f8a77885->enter($__internal_ca7745dfc6b73291f22090d1dd0b5246c02b7d49a33a638870f389f3f8a77885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_ca7745dfc6b73291f22090d1dd0b5246c02b7d49a33a638870f389f3f8a77885->leave($__internal_ca7745dfc6b73291f22090d1dd0b5246c02b7d49a33a638870f389f3f8a77885_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ 'title.homepage'|trans|raw }}</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_app'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('blog_index') }}">*/
/*                         <i class="fa fa-users"></i> {{ 'action.browse_app'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_admin'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('admin_index') }}">*/
/*                         <i class="fa fa-lock"></i> {{ 'action.browse_admin'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
