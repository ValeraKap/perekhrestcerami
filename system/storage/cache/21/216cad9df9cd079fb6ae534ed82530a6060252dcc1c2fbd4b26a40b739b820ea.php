<?php

/* marketplace/marketplace_list.twig */
class __TwigTemplate_02b50639554d52fe85575bbea8c17e3ceca1e23975240c37a39540893765c97e extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_opencart"]) ? $context["button_opencart"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-cog\"></i></button>
      </div>    
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 23
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"input-group\" id=\"extension-filter\">
            <input type=\"text\" name=\"filter_search\" value=\"";
        // line 28
        echo (isset($context["filter_search"]) ? $context["filter_search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control\" />
            <div class=\"input-group-btn\">";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "              ";
            if (($this->getAttribute($context["category"], "value", array()) == (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                // line 31
                echo "              <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">";
                echo (isset($context["text_category"]) ? $context["text_category"] : null);
                echo " (";
                echo $this->getAttribute($context["category"], "text", array());
                echo ") <span class=\"caret\"></span></button>
              ";
            }
            // line 33
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "              <ul class=\"dropdown-menu\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              </ul>
              <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 39
        echo (isset($context["filter_category_id"]) ? $context["filter_category_id"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        // line 40
        echo (isset($context["filter_download_id"]) ? $context["filter_download_id"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_rating\" value=\"";
        // line 41
        echo (isset($context["filter_rating"]) ? $context["filter_rating"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_license\" value=\"";
        // line 42
        echo (isset($context["filter_license"]) ? $context["filter_license"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_partner\" value=\"";
        // line 43
        echo (isset($context["filter_partner"]) ? $context["filter_partner"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"sort\" value=\"";
        // line 44
        echo (isset($context["sort"]) ? $context["sort"] : null);
        echo "\" class=\"form-control\" />              
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-9 col-xs-7\">
            <div class=\"btn-group\">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["licenses"]) ? $context["licenses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 52
            echo "              ";
            if (($this->getAttribute($context["license"], "value", array()) == (isset($context["filter_license"]) ? $context["filter_license"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["license"], "href", array());
                echo "\" class=\"btn btn-default active\">";
                echo $this->getAttribute($context["license"], "text", array());
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo $this->getAttribute($context["license"], "href", array());
                echo "\" class=\"btn btn-default\">";
                echo $this->getAttribute($context["license"], "text", array());
                echo "</a>";
            }
            // line 53
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"col-sm-3 col-xs-5\">
            <div class=\"input-group pull-right\">
              <div class=\"input-group-addon\"><i class=\"fa fa-sort-amount-asc\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-control\">
                  ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 60
            echo "                  ";
            if (($this->getAttribute($context["sorts"], "value", array()) == (isset($context["sort"]) ? $context["sort"] : null))) {
                // line 61
                echo "                <option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
                  ";
            } else {
                // line 63
                echo "                <option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
                  ";
            }
            // line 65
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </select>
            </div>
          </div>
        </div>

        <div id=\"extension-list\">
\t  ";
        // line 72
        if ((isset($context["promotions"]) ? $context["promotions"] : null)) {
            // line 73
            echo "          <h3>Featured</h3>
          <div class=\"row\">";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) ? $context["promotions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 75
                echo "            ";
                if ($context["extension"]) {
                    // line 76
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 78
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 80
                    echo $this->getAttribute($context["extension"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" class=\"img-responsive\" /></a></div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 82
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "</a></h4>
                  ";
                    // line 83
                    echo $this->getAttribute($context["extension"], "price", array());
                    echo "</div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 87
                        echo "                      ";
                        if (($this->getAttribute($context["extension"], "rating", array()) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 88
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 90
                    echo $this->getAttribute($context["extension"], "rating_total", array());
                    echo " ";
                    echo (isset($context["text_reviews"]) ? $context["text_reviews"] : null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 97
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
\t  <hr>
          ";
        }
        // line 100
        echo "          ";
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 101
            echo "          <div class=\"row\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 102
                echo "            ";
                if ($context["extension"]) {
                    // line 103
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 105
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 107
                    echo $this->getAttribute($context["extension"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" class=\"img-responsive\" /></a></div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 109
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "</a></h4>
                  ";
                    // line 110
                    echo $this->getAttribute($context["extension"], "price", array());
                    echo "</div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 114
                        echo "                      ";
                        if (($this->getAttribute($context["extension"], "rating", array()) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 115
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 117
                    echo $this->getAttribute($context["extension"], "rating_total", array());
                    echo " ";
                    echo (isset($context["text_reviews"]) ? $context["text_reviews"] : null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 124
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
          ";
        } else {
            // line 126
            echo "          <div>";
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</div>
          ";
        }
        // line 128
        echo "\t</div>
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">";
        // line 130
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
      </div>
    </div>
  </div>  
</div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
\t\$('#modal-opencart').remove();
\t
\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api&user_token=";
        // line 140
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-opencart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-opencart').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('body').append('<div id=\"modal-opencart\" class=\"modal\">' + html + '</div>');
\t\t\t
\t\t\t\$('#modal-opencart').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
\tvar url = 'index.php?route=marketplace/marketplace&user_token=";
        // line 161
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar input = \$('#extension-filter :input');

\tfor (i = 0; i < input.length; i++) {
\t\tif (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
\t\t\turl += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
\t\t}
\t}

\tlocation = url;
});

\$('input[name=\"filter_search\"]').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\te.preventDefault();

\t\t\$('#button-filter').trigger('click');
\t}
});
//--></script> 
";
        // line 182
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 182,  440 => 161,  416 => 140,  403 => 130,  399 => 128,  393 => 126,  384 => 124,  372 => 117,  363 => 115,  356 => 114,  352 => 113,  346 => 110,  340 => 109,  331 => 107,  326 => 105,  322 => 103,  319 => 102,  314 => 101,  311 => 100,  301 => 97,  289 => 90,  280 => 88,  273 => 87,  269 => 86,  263 => 83,  257 => 82,  248 => 80,  243 => 78,  239 => 76,  236 => 75,  232 => 74,  229 => 73,  227 => 72,  219 => 66,  213 => 65,  205 => 63,  197 => 61,  194 => 60,  190 => 59,  177 => 53,  162 => 52,  158 => 51,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  125 => 38,  114 => 36,  110 => 35,  107 => 34,  101 => 33,  93 => 31,  90 => 30,  86 => 29,  80 => 28,  72 => 23,  68 => 21,  60 => 17,  58 => 16,  53 => 13,  42 => 11,  38 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" id="button-opencart" data-toggle="tooltip" title="{{ button_opencart }}" class="btn btn-warning"><i class="fa fa-cog"></i></button>*/
/*       </div>    */
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="well">*/
/*           <div class="input-group" id="extension-filter">*/
/*             <input type="text" name="filter_search" value="{{ filter_search }}" placeholder="{{ text_search }}" class="form-control" />*/
/*             <div class="input-group-btn">{% for category in categories %}*/
/*               {% if category.value == filter_category %}*/
/*               <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{ text_category }} ({{ category.text }}) <span class="caret"></span></button>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               <ul class="dropdown-menu">*/
/*                 {% for category in categories %}*/
/*                 <li><a href="{{ category.href }}">{{ category.text }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <input type="hidden" name="filter_category_id" value="{{ filter_category_id }}" class="form-control" />*/
/*               <input type="hidden" name="filter_download_id" value="{{ filter_download_id }}" class="form-control" />*/
/*               <input type="hidden" name="filter_rating" value="{{ filter_rating }}" class="form-control" />*/
/*               <input type="hidden" name="filter_license" value="{{ filter_license }}" class="form-control" />*/
/*               <input type="hidden" name="filter_partner" value="{{ filter_partner }}" class="form-control" />*/
/*               <input type="hidden" name="sort" value="{{ sort }}" class="form-control" />              */
/*               <button type="button" id="button-filter" class="btn btn-primary"><i class="fa fa-filter"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-9 col-xs-7">*/
/*             <div class="btn-group">{% for license in licenses %}*/
/*               {% if license.value == filter_license %}<a href="{{ license.href }}" class="btn btn-default active">{{ license.text }}</a>{% else %}<a href="{{ license.href }}" class="btn btn-default">{{ license.text }}</a>{% endif %}*/
/*               {% endfor %}</div>*/
/*           </div>*/
/*           <div class="col-sm-3 col-xs-5">*/
/*             <div class="input-group pull-right">*/
/*               <div class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></div>*/
/*               <select onchange="location = this.value;" class="form-control">*/
/*                   {% for sorts in sorts %}*/
/*                   {% if sorts.value == sort %}*/
/*                 <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                   {% else %}*/
/*                 <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div id="extension-list">*/
/* 	  {% if promotions %}*/
/*           <h3>Featured</h3>*/
/*           <div class="row">{% for extension in promotions %}*/
/*             {% if extension %}*/
/*             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*               <section>*/
/*                 <div class="extension-preview"><a href="{{ extension.href }}">*/
/*                   <div class="extension-description"></div>*/
/*                   <img src="{{ extension.image }}" alt="{{ extension.name }}" title="{{ extension.name }}" class="img-responsive" /></a></div>*/
/*                 <div class="extension-name">*/
/*                   <h4><a href="{{ extension.href }}">{{ extension.name }}</a></h4>*/
/*                   {{ extension.price }}</div>*/
/*                 <div class="extension-rate">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-6">{% for i in 1..5 %}*/
/*                       {% if extension.rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                       {% endfor %}</div>*/
/*                     <div class="col-xs-6">*/
/*                       <div class="text-right">{{ extension.rating_total }} {{ text_reviews }}</div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </section>*/
/*             </div>*/
/*             {% endif %}*/
/*           {% endfor %}</div>*/
/* 	  <hr>*/
/*           {% endif %}*/
/*           {% if extensions %}*/
/*           <div class="row">{% for extension in extensions %}*/
/*             {% if extension %}*/
/*             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*               <section>*/
/*                 <div class="extension-preview"><a href="{{ extension.href }}">*/
/*                   <div class="extension-description"></div>*/
/*                   <img src="{{ extension.image }}" alt="{{ extension.name }}" title="{{ extension.name }}" class="img-responsive" /></a></div>*/
/*                 <div class="extension-name">*/
/*                   <h4><a href="{{ extension.href }}">{{ extension.name }}</a></h4>*/
/*                   {{ extension.price }}</div>*/
/*                 <div class="extension-rate">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-6">{% for i in 1..5 %}*/
/*                       {% if extension.rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                       {% endfor %}</div>*/
/*                     <div class="col-xs-6">*/
/*                       <div class="text-right">{{ extension.rating_total }} {{ text_reviews }}</div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </section>*/
/*             </div>*/
/*             {% endif %}*/
/*           {% endfor %}</div>*/
/*           {% else %}*/
/*           <div>{{ text_no_results }}</div>*/
/*           {% endif %}*/
/* 	</div>*/
/*       <div class="row">*/
/*         <div class="col-sm-12 text-center">{{ pagination }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>  */
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-opencart').on('click', function(e) {*/
/* 	$('#modal-opencart').remove();*/
/* 	*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/api&user_token={{ user_token }}',*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('#button-opencart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-opencart').button('reset');*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('body').append('<div id="modal-opencart" class="modal">' + html + '</div>');*/
/* 			*/
/* 			$('#modal-opencart').modal('show');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function(e) {*/
/* 	var url = 'index.php?route=marketplace/marketplace&user_token={{ user_token }}';*/
/* */
/* 	var input = $('#extension-filter :input');*/
/* */
/* 	for (i = 0; i < input.length; i++) {*/
/* 		if ($(input[i]).val() != '' && $(input[i]).val() != null) {*/
/* 			url += '&' + $(input[i]).attr('name') + '=' + $(input[i]).val()*/
/* 		}*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('input[name="filter_search"]').keydown(function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		e.preventDefault();*/
/* */
/* 		$('#button-filter').trigger('click');*/
/* 	}*/
/* });*/
/* //--></script> */
/* {{ footer }} */
/* */
