<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_b3a212a3586dbcdaa6def62625d99027aff271fd7c276e3ef5c87a0bc6c1c79d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d78815a2f7ec660c7babcd5806c67b108a08e9d732251ab84ecb02fa63da414 = $this->env->getExtension("native_profiler");
        $__internal_0d78815a2f7ec660c7babcd5806c67b108a08e9d732251ab84ecb02fa63da414->enter($__internal_0d78815a2f7ec660c7babcd5806c67b108a08e9d732251ab84ecb02fa63da414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_0d78815a2f7ec660c7babcd5806c67b108a08e9d732251ab84ecb02fa63da414->leave($__internal_0d78815a2f7ec660c7babcd5806c67b108a08e9d732251ab84ecb02fa63da414_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  36 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if link %}*/
/*     {% set icon %}*/
/*         <a href="{{ path('_profiler', { 'token': token, 'panel': name }) }}">{{ icon }}</a>*/
/*     {% endset %}*/
/* {% endif %}*/
/* <div class="sf-toolbar-block">*/
/*      <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*      <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/* </div>*/
/* */
