<?php

/* journal3/template/journal3/module/blog_comments.twig */
class __TwigTemplate_ff8a8371c05c29dca86df4beb2e189474ffb72e819e53bbeb0e6709cd34b9400 extends Twig_Template
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
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 2
            echo "  <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    ";
            // line 3
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 4
                echo "      <h3 class=\"title module-title\">";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "</h3>
    ";
            }
            // line 6
            echo "    <div class=\"module-body\">
      ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
          <a class=\"side-image\" href=\"";
                // line 9
                echo $this->getAttribute($context["item"], "href", array());
                echo "\">
            <img src=\"https://s.gravatar.com/avatar/";
                // line 10
                echo $this->getAttribute($context["item"], "avatar", array());
                echo "?s=";
                echo (isset($context["imageSize"]) ? $context["imageSize"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["item"], "subtitle", array());
                echo "\" width=\"";
                echo (isset($context["imageSize"]) ? $context["imageSize"] : null);
                echo "\" height=\"";
                echo (isset($context["imageSize"]) ? $context["imageSize"] : null);
                echo "\"/>
          </a>
          <div class=\"side-details\">
            <a class=\"side-title\" href=\"";
                // line 13
                echo $this->getAttribute($context["item"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
            <div class=\"side-subtitle\">
              <span>";
                // line 15
                echo $this->getAttribute($context["item"], "subtitle", array());
                echo "</span>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blog_comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  71 => 15,  64 => 13,  50 => 10,  46 => 9,  41 => 8,  37 => 7,  34 => 6,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if items %}*/
/*   <div class="{{ j3.classes(classes) }}">*/
/*     {% if title %}*/
/*       <h3 class="title module-title">{{ title }}</h3>*/
/*     {% endif %}*/
/*     <div class="module-body">*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}">*/
/*           <a class="side-image" href="{{ item.href }}">*/
/*             <img src="https://s.gravatar.com/avatar/{{ item.avatar }}?s={{ imageSize }}" alt="{{ item.subtitle }}" width="{{ imageSize }}" height="{{ imageSize }}"/>*/
/*           </a>*/
/*           <div class="side-details">*/
/*             <a class="side-title" href="{{ item.href }}">{{ item.title }}</a>*/
/*             <div class="side-subtitle">*/
/*               <span>{{ item.subtitle }}</span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
