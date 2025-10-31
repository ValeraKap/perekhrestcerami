<?php

/* journal3/template/journal3/module/title.twig */
class __TwigTemplate_26c84a30a7d5badc4ee436a3e28201bacf1b6bcf51e28d9f60182c27f751320a extends Twig_Template
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
        // line 1
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  <div class=\"title-wrapper\">
    <h3>";
        // line 3
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h3>
    <div class=\"title-divider\"></div>
    <div class=\"subtitle\">";
        // line 5
        echo (isset($context["subtitle"]) ? $context["subtitle"] : null);
        echo "</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  25 => 3,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}">*/
/*   <div class="title-wrapper">*/
/*     <h3>{{ title }}</h3>*/
/*     <div class="title-divider"></div>*/
/*     <div class="subtitle">{{ subtitle }}</div>*/
/*   </div>*/
/* </div>*/
/* */
