<?php

/* journal3/template/journal3/module/popup_content.twig */
class __TwigTemplate_5e555bd36edce106f2943a8597ea8d756c17c2f5f588ab269336ca888a5eb1ad extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
        // line 3
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/popup_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ content }}*/
/* {{ footer }}*/
/* */
