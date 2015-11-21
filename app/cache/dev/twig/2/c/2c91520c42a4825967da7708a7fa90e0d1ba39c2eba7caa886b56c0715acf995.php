<?php

/* blog/index.html.twig */
class __TwigTemplate_e12d8f1f0e9ce23cd67a9c0460f9aa20eb38b5e1316ea8b3a6d9071c9528ba93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_465c92cbc7365112237880c2a3dc52ab688fe887d96625f576b3fb6eec85772e = $this->env->getExtension("native_profiler");
        $__internal_465c92cbc7365112237880c2a3dc52ab688fe887d96625f576b3fb6eec85772e->enter($__internal_465c92cbc7365112237880c2a3dc52ab688fe887d96625f576b3fb6eec85772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_465c92cbc7365112237880c2a3dc52ab688fe887d96625f576b3fb6eec85772e->leave($__internal_465c92cbc7365112237880c2a3dc52ab688fe887d96625f576b3fb6eec85772e_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6e6a54ed486b2e116b62282187c1eb72743512cb2efef0bc10f0b1002d057214 = $this->env->getExtension("native_profiler");
        $__internal_6e6a54ed486b2e116b62282187c1eb72743512cb2efef0bc10f0b1002d057214->enter($__internal_6e6a54ed486b2e116b62282187c1eb72743512cb2efef0bc10f0b1002d057214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_6e6a54ed486b2e116b62282187c1eb72743512cb2efef0bc10f0b1002d057214->leave($__internal_6e6a54ed486b2e116b62282187c1eb72743512cb2efef0bc10f0b1002d057214_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_8334724a232f5770576e36b655d1133da102ef7ff15d076d6020200c72202e2a = $this->env->getExtension("native_profiler");
        $__internal_8334724a232f5770576e36b655d1133da102ef7ff15d076d6020200c72202e2a->enter($__internal_8334724a232f5770576e36b655d1133da102ef7ff15d076d6020200c72202e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 21
        echo $this->env->getExtension('knp_pagination')->render((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "
    </div>
";
        
        $__internal_8334724a232f5770576e36b655d1133da102ef7ff15d076d6020200c72202e2a->leave($__internal_8334724a232f5770576e36b655d1133da102ef7ff15d076d6020200c72202e2a_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6489907c5161a1bbb65c1a4f827fb32a4f44df896e14c0310ef51d4f4ca510e2 = $this->env->getExtension("native_profiler");
        $__internal_6489907c5161a1bbb65c1a4f827fb32a4f44df896e14c0310ef51d4f4ca510e2->enter($__internal_6489907c5161a1bbb65c1a4f827fb32a4f44df896e14c0310ef51d4f4ca510e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_6489907c5161a1bbb65c1a4f827fb32a4f44df896e14c0310ef51d4f4ca510e2->leave($__internal_6489907c5161a1bbb65c1a4f827fb32a4f44df896e14c0310ef51d4f4ca510e2_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  112 => 26,  106 => 25,  96 => 21,  92 => 19,  83 => 17,  75 => 14,  68 => 10,  64 => 9,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_index' %}*/
/* */
/* {% block main %}*/
/*     {% for post in posts %}*/
/*         <article class="post">*/
/*             <h2>*/
/*                 <a href="{{ path('blog_post', { slug: post.slug }) }}">*/
/*                     {{ post.title }}*/
/*                 </a>*/
/*             </h2>*/
/* */
/*             {{ post.summary|md2html }}*/
/*         </article>*/
/*     {% else %}*/
/*         <div class="well">{{ 'post.no_posts_found'|trans }}</div>*/
/*     {% endfor %}*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ knp_pagination_render(posts) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
