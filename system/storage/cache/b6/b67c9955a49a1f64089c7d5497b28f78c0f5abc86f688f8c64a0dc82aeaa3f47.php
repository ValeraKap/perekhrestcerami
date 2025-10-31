<?php

/* journal3/template/journal3/module/form_email.twig */
class __TwigTemplate_bf3ff0e3cdb7537176a045a913b17cf35dfdd32aa0971e6706b1e45381e2b700 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\"><a href=\"";
        // line 8
        echo (isset($context["store_url"]) ? $context["store_url"] : null);
        echo "\" title=\"";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "\"><img src=\"";
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"";
        echo (isset($context["store_name"]) ? $context["store_name"] : null);
        echo "\" style=\"margin-bottom: 20px; border: none;\"/></a>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">A new message has been received!</p>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
    <tr>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">Field</td>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">Value</td>
    </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\"><b>";
            // line 20
            echo $this->getAttribute($context["item"], "label", array());
            echo ":</b></td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 21
            echo ((twig_test_iterable($this->getAttribute($context["item"], "value", array()))) ? (twig_join_filter($this->getAttribute($context["item"], "value", array()), ", ")) : ($this->getAttribute($context["item"], "value", array())));
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </tbody>
  </table>
  ";
        // line 26
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "url", array())) {
            // line 27
            echo "  <p style=\"margin-top: 10px; margin-bottom: 20px;\">Sent from <a href=\"";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "url", array());
            echo "</a></p>
  ";
        }
        // line 29
        echo "  ";
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ip", array())) {
            // line 30
            echo "    <p style=\"margin-top: 10px; margin-bottom: 20px;\">IP Address <b>";
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ip", array());
            echo "</b></p>
  ";
        }
        // line 32
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/form_email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  87 => 30,  84 => 29,  76 => 27,  74 => 26,  70 => 24,  61 => 21,  57 => 20,  54 => 19,  50 => 18,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">*/
/* <html>*/
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*   <title>{{ title }}</title>*/
/* </head>*/
/* <body style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;">*/
/* <div style="width: 680px;"><a href="{{ store_url }}" title="{{ store_name }}"><img src="{{ logo }}" alt="{{ store_name }}" style="margin-bottom: 20px; border: none;"/></a>*/
/*   <p style="margin-top: 0px; margin-bottom: 20px;">A new message has been received!</p>*/
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*     <tr>*/
/*       <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Field</td>*/
/*       <td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Value</td>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for item in data.items %}*/
/*       <tr>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;"><b>{{ item.label }}:</b></td>*/
/*         <td style="font-size: 12px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ item.value is iterable ? item.value|join(', ') : item.value }}</td>*/
/*       </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*   {% if data.url %}*/
/*   <p style="margin-top: 10px; margin-bottom: 20px;">Sent from <a href="{{ data.url }}">{{ data.url }}</a></p>*/
/*   {% endif %}*/
/*   {% if data.ip %}*/
/*     <p style="margin-top: 10px; margin-bottom: 20px;">IP Address <b>{{ data.ip }}</b></p>*/
/*   {% endif %}*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
