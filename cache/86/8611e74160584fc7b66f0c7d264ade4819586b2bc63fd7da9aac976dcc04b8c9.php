<?php

/* default.html.twig */
class __TwigTemplate_f8e4b0c39d9f577688725d7e2c082dac8e43816fe738e4dc3b1d493a23f490a6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Youtube Parser</title>

    <!-- Bootstrap -->
    <link href=\"/assets/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    <div class=\"container\">
      <p>&nbsp;</p>

    <div class=\"panel panel-success\">
      <div class=\"panel-heading\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</div>
      <div class=\"panel-body\">
        <p>";
        // line 27
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</p>
      </div>
    </div>
     
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"/assets/jquery/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"/assets/bootstrap/dist/js/bootstrap.min.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 27,  45 => 25,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>Youtube Parser</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body>*/
/*     <div class="container">*/
/*       <p>&nbsp;</p>*/
/* */
/*     <div class="panel panel-success">*/
/*       <div class="panel-heading">{{ title }}</div>*/
/*       <div class="panel-body">*/
/*         <p>{{ content | raw }}</p>*/
/*       </div>*/
/*     </div>*/
/*      */
/*     </div>*/
/* */
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*     <script src="/assets/jquery/jquery.min.js"></script>*/
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     <script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>*/
/*   </body>*/
/* </html>*/
