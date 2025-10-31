<?php

/* tool/backup.twig */
class __TwigTemplate_c85de1e147a7a70eaf3bb1d0b861f1eca73e6988d7b4557933a8dee1356b5cfd extends Twig_Template
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
      <h1>";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
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
        // line 10
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 14
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 15
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 19
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-exchange\"></i> ";
        // line 26
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <div id=\"progress-import\" class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-import\">";
        // line 34
        echo (isset($context["entry_import"]) ? $context["entry_import"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-import\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i> ";
        // line 36
        echo (isset($context["button_import"]) ? $context["button_import"] : null);
        echo "</button>
            </div>
          </div>
        </form>
        <form action=\"";
        // line 40
        echo (isset($context["export"]) ? $context["export"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-export\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 42
        echo (isset($context["entry_export"]) ? $context["entry_export"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"submit\" form=\"form-export\" class=\"btn btn-default\"><i class=\"fa fa-download\"></i> ";
        // line 44
        echo (isset($context["button_export"]) ? $context["button_export"] : null);
        echo "</button>
              <br />
              <br />
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tables"]) ? $context["tables"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 49
            echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"backup[]\" value=\"";
            // line 51
            echo $context["table"];
            echo "\" checked=\"checked\" />
                    ";
            // line 52
            echo $context["table"];
            echo "
                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#button-import').on('click', function() {
    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"import\" /></form>');

    \$('#form-upload input[name=\\'import\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'import\\']').val() != '') {
        clearInterval(timer);

        \$('#progress-import .progress-bar').attr('aria-valuenow', 0);
        \$('#progress-import .progress-bar').css('width', '0%');

        \$.ajax({
          url: 'index.php?route=tool/backup/import&user_token=";
        // line 84
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$('#button-import').button('loading');
          },
          complete: function() {
            \$('#button-import').button('reset');
          },
          success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
              \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
              \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['total']) {
              \$('#progress-import .progress-bar').attr('aria-valuenow', json['total']);
              \$('#progress-import .progress-bar').css('width', json['total'] + '%');
            }

            if (json['next']) {
              next(json['next']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  function next(url) {
    \$.ajax({
      url: url,
      dataType: 'json',
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['total']) {
          \$('#progress-import .progress-bar').attr('aria-valuenow', json['total']);
          \$('#progress-import .progress-bar').css('width', json['total'] + '%');
        }

        if (json['next']) {
          next(json['next']);
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }
  //--></script> 
</div>
";
        // line 156
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tool/backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 156,  174 => 84,  140 => 56,  130 => 52,  126 => 51,  122 => 49,  118 => 48,  111 => 44,  106 => 42,  101 => 40,  94 => 36,  89 => 34,  78 => 26,  74 => 24,  66 => 20,  63 => 19,  55 => 15,  53 => 14,  47 => 10,  36 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-exchange"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form class="form-horizontal">*/
/*           <div id="progress-import" class="progress">*/
/*             <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-import">{{ entry_import }}</label>*/
/*             <div class="col-sm-10">*/
/*               <button type="button" id="button-import" class="btn btn-primary"><i class="fa fa-upload"></i> {{ button_import }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*         <form action="{{ export }}" method="post" enctype="multipart/form-data" id="form-export" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_export }}</label>*/
/*             <div class="col-sm-10">*/
/*               <button type="submit" form="form-export" class="btn btn-default"><i class="fa fa-download"></i> {{ button_export }}</button>*/
/*               <br />*/
/*               <br />*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 {% for table in tables %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="backup[]" value="{{ table }}" checked="checked" />*/
/*                     {{ table }}*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*                 <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">{{ text_select_all }}</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">{{ text_unselect_all }}</button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/*   $('#button-import').on('click', function() {*/
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="import" /></form>');*/
/* */
/*     $('#form-upload input[name=\'import\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function() {*/
/*       if ($('#form-upload input[name=\'import\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $('#progress-import .progress-bar').attr('aria-valuenow', 0);*/
/*         $('#progress-import .progress-bar').css('width', '0%');*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/backup/import&user_token={{ user_token }}',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function() {*/
/*             $('#button-import').button('loading');*/
/*           },*/
/*           complete: function() {*/
/*             $('#button-import').button('reset');*/
/*           },*/
/*           success: function(json) {*/
/*             $('.alert-dismissible').remove();*/
/* */
/*             if (json['error']) {*/
/*               $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*             }*/
/* */
/*             if (json['total']) {*/
/*               $('#progress-import .progress-bar').attr('aria-valuenow', json['total']);*/
/*               $('#progress-import .progress-bar').css('width', json['total'] + '%');*/
/*             }*/
/* */
/*             if (json['next']) {*/
/*               next(json['next']);*/
/*             }*/
/*           },*/
/*           error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/* */
/*   function next(url) {*/
/*     $.ajax({*/
/*       url: url,*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['total']) {*/
/*           $('#progress-import .progress-bar').attr('aria-valuenow', json['total']);*/
/*           $('#progress-import .progress-bar').css('width', json['total'] + '%');*/
/*         }*/
/* */
/*         if (json['next']) {*/
/*           next(json['next']);*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   }*/
/*   //--></script> */
/* </div>*/
/* {{ footer }}*/
/* */
