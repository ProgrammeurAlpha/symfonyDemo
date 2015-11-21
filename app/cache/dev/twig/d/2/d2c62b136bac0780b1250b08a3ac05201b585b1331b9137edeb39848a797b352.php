<?php

/* admin/blog/index.html.twig */
class __TwigTemplate_493b4c463a5382ac60f66499b2dfd8124e6d7546808a3f2688f2186f2cc2e0e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71d494d360fbd387588b726fca787073d555704606ed26e87ae29ca38f7f68c9 = $this->env->getExtension("native_profiler");
        $__internal_71d494d360fbd387588b726fca787073d555704606ed26e87ae29ca38f7f68c9->enter($__internal_71d494d360fbd387588b726fca787073d555704606ed26e87ae29ca38f7f68c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d494d360fbd387588b726fca787073d555704606ed26e87ae29ca38f7f68c9->leave($__internal_71d494d360fbd387588b726fca787073d555704606ed26e87ae29ca38f7f68c9_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3239e53f4ecc8e3eb4efea532aa772ad818db00956160bafdbb4ddd06085765d = $this->env->getExtension("native_profiler");
        $__internal_3239e53f4ecc8e3eb4efea532aa772ad818db00956160bafdbb4ddd06085765d->enter($__internal_3239e53f4ecc8e3eb4efea532aa772ad818db00956160bafdbb4ddd06085765d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_index";
        
        $__internal_3239e53f4ecc8e3eb4efea532aa772ad818db00956160bafdbb4ddd06085765d->leave($__internal_3239e53f4ecc8e3eb4efea532aa772ad818db00956160bafdbb4ddd06085765d_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_db63ba67c8cde1b2e3007b7ddfabf275f9539bcc6e276d2f2ff6a7b4e329cfa3 = $this->env->getExtension("native_profiler");
        $__internal_db63ba67c8cde1b2e3007b7ddfabf275f9539bcc6e276d2f2ff6a7b4e329cfa3->enter($__internal_db63ba67c8cde1b2e3007b7ddfabf275f9539bcc6e276d2f2ff6a7b4e329cfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post_list"), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-user\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.author"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-calendar\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-cogs\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "authorEmail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["post"], "publishedAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "short", "short"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        ";
            // line 31
            if ($this->getAttribute($context["post"], "isAuthor", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
                // line 32
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-edit\"></i> ";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit"), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 36
            echo "                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
";
        
        $__internal_db63ba67c8cde1b2e3007b7ddfabf275f9539bcc6e276d2f2ff6a7b4e329cfa3->leave($__internal_db63ba67c8cde1b2e3007b7ddfabf275f9539bcc6e276d2f2ff6a7b4e329cfa3_prof);

    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_da8a7b86719518584253c6a6ce5a3e74f70d06240bf0d0635979be33a46258b8 = $this->env->getExtension("native_profiler");
        $__internal_da8a7b86719518584253c6a6ce5a3e74f70d06240bf0d0635979be33a46258b8->enter($__internal_da8a7b86719518584253c6a6ce5a3e74f70d06240bf0d0635979be33a46258b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 49
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\"></i> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 55
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 57
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_da8a7b86719518584253c6a6ce5a3e74f70d06240bf0d0635979be33a46258b8->leave($__internal_da8a7b86719518584253c6a6ce5a3e74f70d06240bf0d0635979be33a46258b8_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 57,  183 => 55,  176 => 51,  172 => 50,  169 => 49,  163 => 48,  154 => 44,  145 => 41,  142 => 40,  134 => 36,  128 => 33,  123 => 32,  121 => 31,  115 => 28,  111 => 27,  103 => 24,  99 => 23,  95 => 22,  92 => 21,  87 => 20,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_index' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ 'title.post_list'|trans }}</h1>*/
/* */
/*     {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ 'label.title'|trans }}</th>*/
/*                 <th><i class="fa fa-user"></i> {{ 'label.author'|trans }}</th>*/
/*                 <th><i class="fa fa-calendar"></i> {{ 'label.published_at'|trans }}</th>*/
/*                 <th><i class="fa fa-cogs"></i> {{ 'label.actions'|trans }}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for post in posts %}*/
/*             <tr>*/
/*                 <td>{{ post.title }}</td>*/
/*                 <td>{{ post.authorEmail }}</td>*/
/*                 <td>{% if post.publishedAt %}{{ post.publishedAt|localizeddate('short', 'short') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <div class="item-actions">*/
/*                         <a href="{{ path('admin_post_show', { id: post.id }) }}" class="btn btn-sm btn-default">*/
/*                             {{ 'action.show'|trans }}*/
/*                         </a>*/
/* */
/*                         {% if post.isAuthor(app.user) %}*/
/*                             <a href="{{ path('admin_post_edit', { id: post.id }) }}" class="btn btn-sm btn-primary">*/
/*                                 <i class="fa fa-edit"></i> {{ 'action.edit'|trans }}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="4" align="center">{{ 'post.no_posts_found'|trans }}</td>*/
/*            </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="section actions">*/
/*         <a href="{{ path('admin_post_new') }}" class="btn btn-lg btn-block btn-success">*/
/*             <i class="fa fa-plus"></i> {{ 'action.create_post'|trans }}*/
/*         </a>*/
/*     </div>*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
