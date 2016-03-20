<?php

/* data.html.twig */
class __TwigTemplate_e4cdc53e3fd0f2019724367fc326ff5cee8e657cf3fbc53216cf6c24c53d18a3 extends Twig_Template
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
        echo "<form action=\"/?action=search\" id=\"search\" name=\"search\" method=\"post\" role=\"form\">
<div class=\"row\">
    <div class=\"col-md-8\"> 
    \t<div class=\"form-group\">
        \t<input value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["str"]) ? $context["str"] : null), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"search\" id=\"search\" placeholder=\"Введите слова через запятую\">
      \t</div>
    </div>
    <div class=\"col-md-4\">
      <button type=\"submit\" class=\"btn btn-default\">Поиск</button>
    </div>
</div>
</form>

";
        // line 14
        if (((isset($context["requests"]) ? $context["requests"] : null) != false)) {
            // line 15
            echo "
<span class=\"label label-success\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></span> результаты уже записаны в базу;
<span class=\"label label-danger\"><span class=\"glyphicon glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></span> результаты еще не записаны в базу;<br><br>

<table class=\"table table-striped\">
    <tr>
        <th>Запрос</th>
        <th>Общая информация</th>
        <th>Результаты</th>
    </tr>
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requests"]) ? $context["requests"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "    <tr>
    \t<td>
    \t    <a href=\"#\" onClick=\"getRequstResults(";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "); return false;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</a>
    \t</td>
    \t<td id=\"rData";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">&nbsp;</td>
    \t<td id=\"rResults";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">&nbsp;</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "</table>
";
        }
        // line 36
        echo "<script src=\"/js/common.js\" type=\"text/javascript\"></script>";
    }

    public function getTemplateName()
    {
        return "data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  79 => 34,  70 => 31,  66 => 30,  59 => 28,  55 => 26,  51 => 25,  39 => 15,  37 => 14,  25 => 5,  19 => 1,);
    }
}
/* <form action="/?action=search" id="search" name="search" method="post" role="form">*/
/* <div class="row">*/
/*     <div class="col-md-8"> */
/*     	<div class="form-group">*/
/*         	<input value="{{ str }}" type="text" class="form-control" name="search" id="search" placeholder="Введите слова через запятую">*/
/*       	</div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*       <button type="submit" class="btn btn-default">Поиск</button>*/
/*     </div>*/
/* </div>*/
/* </form>*/
/* */
/* {% if requests != false %}*/
/* */
/* <span class="label label-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></span> результаты уже записаны в базу;*/
/* <span class="label label-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></span> результаты еще не записаны в базу;<br><br>*/
/* */
/* <table class="table table-striped">*/
/*     <tr>*/
/*         <th>Запрос</th>*/
/*         <th>Общая информация</th>*/
/*         <th>Результаты</th>*/
/*     </tr>*/
/*     {% for item in requests %}*/
/*     <tr>*/
/*     	<td>*/
/*     	    <a href="#" onClick="getRequstResults({{ item.id }}); return false;">{{ item.name }}</a>*/
/*     	</td>*/
/*     	<td id="rData{{ item.id }}">&nbsp;</td>*/
/*     	<td id="rResults{{ item.id }}">&nbsp;</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* {% endif %}*/
/* <script src="/js/common.js" type="text/javascript"></script>*/
