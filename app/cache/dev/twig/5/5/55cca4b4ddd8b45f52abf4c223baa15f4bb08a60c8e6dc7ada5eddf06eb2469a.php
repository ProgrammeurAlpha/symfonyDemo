<?php

/* default/homepage.html.twig */
class __TwigTemplate_d21fc07f17a094a2ace197109f8da7e802152f4bfaf6411106e67345f2c27404 extends Twig_Template
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
        $__internal_f67e7a170974aef959be2ca0e3ea59bc5943d3644242da21906a392d51bb0b65 = $this->env->getExtension("native_profiler");
        $__internal_f67e7a170974aef959be2ca0e3ea59bc5943d3644242da21906a392d51bb0b65->enter($__internal_f67e7a170974aef959be2ca0e3ea59bc5943d3644242da21906a392d51bb0b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f67e7a170974aef959be2ca0e3ea59bc5943d3644242da21906a392d51bb0b65->leave($__internal_f67e7a170974aef959be2ca0e3ea59bc5943d3644242da21906a392d51bb0b65_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4c68c83bb946ad7adf895088599c1b8beaae6cb4ddfc3f0b120855a798109691 = $this->env->getExtension("native_profiler");
        $__internal_4c68c83bb946ad7adf895088599c1b8beaae6cb4ddfc3f0b120855a798109691->enter($__internal_4c68c83bb946ad7adf895088599c1b8beaae6cb4ddfc3f0b120855a798109691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_4c68c83bb946ad7adf895088599c1b8beaae6cb4ddfc3f0b120855a798109691->leave($__internal_4c68c83bb946ad7adf895088599c1b8beaae6cb4ddfc3f0b120855a798109691_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_c58057fd8032c614750683887c35c1fbb92550bd60bd3d11d34c5d922cbb91b0 = $this->env->getExtension("native_profiler");
        $__internal_c58057fd8032c614750683887c35c1fbb92550bd60bd3d11d34c5d922cbb91b0->enter($__internal_c58057fd8032c614750683887c35c1fbb92550bd60bd3d11d34c5d922cbb91b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_c58057fd8032c614750683887c35c1fbb92550bd60bd3d11d34c5d922cbb91b0->leave($__internal_c58057fd8032c614750683887c35c1fbb92550bd60bd3d11d34c5d922cbb91b0_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0ec5bef1e6dc78cc7ad3ac782fa5600b31c32b1a59b484e492dab8ee8243d271 = $this->env->getExtension("native_profiler");
        $__internal_0ec5bef1e6dc78cc7ad3ac782fa5600b31c32b1a59b484e492dab8ee8243d271->enter($__internal_0ec5bef1e6dc78cc7ad3ac782fa5600b31c32b1a59b484e492dab8ee8243d271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_0ec5bef1e6dc78cc7ad3ac782fa5600b31c32b1a59b484e492dab8ee8243d271->leave($__internal_0ec5bef1e6dc78cc7ad3ac782fa5600b31c32b1a59b484e492dab8ee8243d271_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5930f9402bdcc6e666f3160c0f3e53b32b54d69e7fba301596b1ddbec35157f = $this->env->getExtension("native_profiler");
        $__internal_b5930f9402bdcc6e666f3160c0f3e53b32b54d69e7fba301596b1ddbec35157f->enter($__internal_b5930f9402bdcc6e666f3160c0f3e53b32b54d69e7fba301596b1ddbec35157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b5930f9402bdcc6e666f3160c0f3e53b32b54d69e7fba301596b1ddbec35157f->leave($__internal_b5930f9402bdcc6e666f3160c0f3e53b32b54d69e7fba301596b1ddbec35157f_prof);

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
