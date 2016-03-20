<?php

/* search.html.twig */
class __TwigTemplate_f76d6380787bdac5a8e56633ba9103da5eaf021e64e8dac37fd86bb2dcf0a908 extends Twig_Template
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
        \t<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail3\" placeholder=\"Введите слова через запятую\">
      \t</div>
    </div>
    <div class=\"col-md-4\">
      <button type=\"submit\" class=\"btn btn-default\">Поиск</button>
    </div>
</div>
</form>

<div class=\"alert alert-success\" role=\"alert\"><strong>Запросы:</strong> ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["str"]) ? $context["str"] : null), "html", null, true);
        echo "</div>

<span class=\"label label-success\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></span> результаты уже записаны в базу;
<span class=\"label label-danger\"><span class=\"glyphicon glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></span> результаты еще не записаны в базу;<br><br>

<table class=\"table table-striped\">
    <tr>
        <th>Запрос</th>
        <th>&nbsp;</th>
        <th>Общая информация</th>
        <th>Результаты</th>
    </tr>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requests"]) ? $context["requests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "    <tr>
    \t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "str", array()), "html", null, true);
            echo "</td>
    \t<td>
    \t    ";
            // line 30
            if (($this->getAttribute($context["item"], "inDb", array()) == true)) {
                // line 31
                echo "    \t    \t<span class=\"label label-success\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span></span>
    \t    ";
            } else {
                // line 33
                echo "    \t    \t<span class=\"label label-danger\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></span>
    \t    ";
            }
            // line 35
            echo "    \t</td>
    \t<td>
        \t<button onClick=\"getDataInfo()\" type=\"button\" class=\"btn btn-default btn-sm\">
              <span class=\"glyphicon glyphicon-circle-arrow-down\" aria-hidden=\"true\"></span> Загрузить результаты
            </button>
    \t</td>
    \t<td>
        \t<button onClick=\"getDataResults()\" type=\"button\" class=\"btn btn-default btn-sm\">
              <span class=\"glyphicon glyphicon-circle-arrow-down\" aria-hidden=\"true\"></span> Загрузить результаты
            </button>
    \t</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</table>

<script>
function getDataInfo(id)
{
\t
}

function getDataResults(id)
{
\t
}
</script>";
    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 48,  71 => 35,  67 => 33,  63 => 31,  61 => 30,  56 => 28,  53 => 27,  49 => 26,  34 => 14,  19 => 1,);
    }
}
/* <form action="/?action=search" id="search" name="search" method="post" role="form">*/
/* <div class="row">*/
/*     <div class="col-md-8"> */
/*     	<div class="form-group">*/
/*         	<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Введите слова через запятую">*/
/*       	</div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*       <button type="submit" class="btn btn-default">Поиск</button>*/
/*     </div>*/
/* </div>*/
/* </form>*/
/* */
/* <div class="alert alert-success" role="alert"><strong>Запросы:</strong> {{ str }}</div>*/
/* */
/* <span class="label label-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></span> результаты уже записаны в базу;*/
/* <span class="label label-danger"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></span> результаты еще не записаны в базу;<br><br>*/
/* */
/* <table class="table table-striped">*/
/*     <tr>*/
/*         <th>Запрос</th>*/
/*         <th>&nbsp;</th>*/
/*         <th>Общая информация</th>*/
/*         <th>Результаты</th>*/
/*     </tr>*/
/*     {% for item in requests %}*/
/*     <tr>*/
/*     	<td>{{ item.str }}</td>*/
/*     	<td>*/
/*     	    {% if item.inDb == true %}*/
/*     	    	<span class="label label-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></span>*/
/*     	    {% else %}*/
/*     	    	<span class="label label-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></span>*/
/*     	    {% endif %}*/
/*     	</td>*/
/*     	<td>*/
/*         	<button onClick="getDataInfo()" type="button" class="btn btn-default btn-sm">*/
/*               <span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span> Загрузить результаты*/
/*             </button>*/
/*     	</td>*/
/*     	<td>*/
/*         	<button onClick="getDataResults()" type="button" class="btn btn-default btn-sm">*/
/*               <span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span> Загрузить результаты*/
/*             </button>*/
/*     	</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
/* <script>*/
/* function getDataInfo(id)*/
/* {*/
/* 	*/
/* }*/
/* */
/* function getDataResults(id)*/
/* {*/
/* 	*/
/* }*/
/* </script>*/
