<?php

/* journal3/template/journal3/module/gallery.twig */
class __TwigTemplate_a5f74b7a57953df437a4a6ef0b51157ecc1b9ceab0d6435a059edc7f52111b91 extends Twig_Template
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
        // line 18
        $context["self"] = $this;
        // line 19
        echo "<div id=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\" class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  ";
        // line 20
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 21
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>
  ";
        }
        // line 23
        echo "  <div class=\"module-body\">
    ";
        // line 24
        if ((isset($context["button"]) ? $context["button"] : null)) {
            // line 25
            echo "      <a class=\"btn open-btn\" data-gallery=\"#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " .lightgallery\" data-index=\"0\">";
            echo (isset($context["buttonText"]) ? $context["buttonText"] : null);
            echo "</a>
    ";
        } else {
            // line 27
            echo "      ";
            // line 28
            echo "      ";
            if ( !(isset($context["carousel"]) ? $context["carousel"] : null)) {
                // line 29
                echo "        ";
                echo $context["self"]->getrenderGallery((isset($context["j3"]) ? $context["j3"] : null), $context);
                echo "
      ";
            }
            // line 31
            echo "      ";
            // line 32
            echo "      ";
            if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
                // line 33
                echo "        <div class=\"swiper\" data-items-per-row='";
                echo twig_jsonencode_filter((isset($context["itemsPerRow"]) ? $context["itemsPerRow"] : null), twig_constant("JSON_FORCE_OBJECT"));
                echo "' data-options='";
                echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null));
                echo "'>
          <div class=\"swiper-container\" ";
                // line 34
                if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                    echo "dir=\"rtl\"";
                }
                echo ">
            <div class=\"swiper-wrapper\">
              ";
                // line 36
                echo $context["self"]->getrenderGallery((isset($context["j3"]) ? $context["j3"] : null), $context);
                echo "
            </div>
          </div>
          <div class=\"swiper-buttons\">
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>
      ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "  </div>
  <div class=\"lightgallery\" data-images='";
        // line 48
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["images"]) ? $context["images"] : null)));
        echo "' data-options='";
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
        echo "'></div>
</div>
";
    }

    // line 1
    public function getrenderGallery($__j3__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "j3" => $__j3__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["self"] = $this;
            // line 3
            echo "  ";
            $context["index"] = 0;
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "items", array()), 0, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "thumbsLimit", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "    <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
      <a ";
                // line 6
                if (($this->getAttribute($context["item"], "type", array()) == "link")) {
                    echo "href=\"";
                    echo $this->getAttribute($context["item"], "popup", array());
                    echo "\" ";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                } else {
                    echo "data-gallery=\"#";
                    echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id", array());
                    echo " .lightgallery\" data-index=\"";
                    echo (isset($context["index"]) ? $context["index"] : null);
                    echo "\"";
                    $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
                }
                echo " title=\"";
                echo $this->getAttribute($context["item"], "alt", array());
                echo "\">
        <span>
          ";
                // line 8
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method")) {
                    // line 9
                    echo "            <img src=\"";
                    echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "dummy_image", array());
                    echo "\" data-src=\"";
                    echo $this->getAttribute($context["item"], "thumb", array());
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "thumb2x", array())) {
                        echo "data-srcset=\"";
                        echo $this->getAttribute($context["item"], "thumb", array());
                        echo " 1x, ";
                        echo $this->getAttribute($context["item"], "thumb2x", array());
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo $this->getAttribute($context["item"], "alt", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "thumbDimensions", array()), "width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "thumbDimensions", array()), "height", array());
                    echo "\" class=\"lazyload\"/>
          ";
                } else {
                    // line 11
                    echo "            <img src=\"";
                    echo $this->getAttribute($context["item"], "thumb", array());
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "thumb2x", array())) {
                        echo "srcset=\"";
                        echo $this->getAttribute($context["item"], "thumb", array());
                        echo " 1x, ";
                        echo $this->getAttribute($context["item"], "thumb2x", array());
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo $this->getAttribute($context["item"], "alt", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "thumbDimensions", array()), "width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "thumbDimensions", array()), "height", array());
                    echo "\"/>
          ";
                }
                // line 13
                echo "        </span>
      </a>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 13,  179 => 11,  157 => 9,  155 => 8,  136 => 6,  131 => 5,  126 => 4,  123 => 3,  120 => 2,  107 => 1,  98 => 48,  95 => 47,  92 => 46,  79 => 36,  72 => 34,  65 => 33,  62 => 32,  60 => 31,  54 => 29,  51 => 28,  49 => 27,  41 => 25,  39 => 24,  36 => 23,  30 => 21,  28 => 20,  21 => 19,  19 => 18,);
    }
}
/* {% macro renderGallery(j3, context) %}*/
/*   {% import _self as self %}*/
/*   {% set index = 0 %}*/
/*   {% for item in context.items[:context.thumbsLimit] %}*/
/*     <div class="{{ j3.classes(item.classes) }}">*/
/*       <a {% if item.type == 'link' %}href="{{ item.popup }}" {{ j3.linkAttrs(item.link) }}{% else %}data-gallery="#{{ context.id }} .lightgallery" data-index="{{ index }}"{% set index = index + 1 %}{% endif %} title="{{ item.alt }}">*/
/*         <span>*/
/*           {% if j3.settings.get('performanceLazyLoadImagesStatus') %}*/
/*             <img src="{{ context.dummy_image }}" data-src="{{ item.thumb }}" {% if item.thumb2x %}data-srcset="{{ item.thumb }} 1x, {{ item.thumb2x }} 2x"{% endif %} alt="{{ item.alt }}" width="{{ context.thumbDimensions.width }}" height="{{ context.thumbDimensions.height }}" class="lazyload"/>*/
/*           {% else %}*/
/*             <img src="{{ item.thumb }}" {% if item.thumb2x %}srcset="{{ item.thumb }} 1x, {{ item.thumb2x }} 2x"{% endif %} alt="{{ item.alt }}" width="{{ context.thumbDimensions.width }}" height="{{ context.thumbDimensions.height }}"/>*/
/*           {% endif %}*/
/*         </span>*/
/*       </a>*/
/*     </div>*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div id="{{ id }}" class="{{ j3.classes(classes) }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <div class="module-body">*/
/*     {% if button %}*/
/*       <a class="btn open-btn" data-gallery="#{{ id }} .lightgallery" data-index="0">{{ buttonText }}</a>*/
/*     {% else %}*/
/*       {# grid #}*/
/*       {% if not carousel %}*/
/*         {{ self.renderGallery(j3, _context) }}*/
/*       {% endif %}*/
/*       {# grid + carousel #}*/
/*       {% if carousel %}*/
/*         <div class="swiper" data-items-per-row='{{ itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ carouselOptions|json_encode }}'>*/
/*           <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*             <div class="swiper-wrapper">*/
/*               {{ self.renderGallery(j3, _context) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="swiper-buttons">*/
/*             <div class="swiper-button-prev"></div>*/
/*             <div class="swiper-button-next"></div>*/
/*           </div>*/
/*           <div class="swiper-pagination"></div>*/
/*         </div>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="lightgallery" data-images='{{ images|json_encode|e }}' data-options='{{ options|json_encode }}'></div>*/
/* </div>*/
/* */
