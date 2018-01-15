<?php

/* confirmacion/programacion.twig */
class __TwigTemplate_fc9403a2d55f047a6742577cf08b927a427879a09a2ccc3be037aec625ee4112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion.twig", 1);
        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portal/portal";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appStylos($context, array $blocks = array())
    {
        // line 3
        echo "  <link rel=\"stylesheet\" href=\"../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css\">
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "  <section class=\"content-header\">
    <h1>
      Programacion Nielsen
      <small>Confirmaciones</small>
    </h1>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <form id=\"formorden\" name=\"formorden\">
      <div class=\"content\">
        <div class=\"row\">
          <div class=\"form-group\">
            <div class=\"col-md-4\">
              <label for=\"textuser\">Operador:</label><input type=\"text\" name=\"textuser\" id=\"textuser\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-4\">
              <label>Reg:</label><input type=\"text\" name=\"textreg\" id=\"textreg\" class=\"form-control\" value=\"\">
            </div>
            <div class=\"col-md-4\">
              <label>Rut Cliente:</label><input type=\"text\" name=\"textrutcliente\" id=\"textrutcliente\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
              <label>ID Orden:</label><input type=\"text\" name=\"textidorden\" id=\"textidorden\" class=\"form-control\">
            </div>
          </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-md-4\">
              <label>FECHA:</label><input type=\"date\" name=\"textfecha\" id=\"textfecha\" class=\"form-control\" value=\"\" size=\"25\">
            </div>
            <div class=\"col-md-4\">
              <label>BLOQUE:</label>
            </div>
            ";
        // line 40
        $context["No"] = 1;
        // line 41
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 42
                echo "              <input type=\"radio\" name=\"rbbloque\" onchange=\"cargarblo('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "')\" id=\"rbbloque\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "
              ";
                // line 43
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 44
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            <label>MOTIVO DEL LLAMADO</label>
            <div class=\"col-md-3\">
              ";
        // line 47
        $context["No"] = 1;
        // line 48
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 49
                echo "                <input type=\"radio\" name=\"rbmotivo\" id=\"rbmotivo\" onchange=\"cargarmot('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "
                ";
                // line 50
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 51
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
            <div id=\"comunas\" name=\"comuna\">
              <label>COMUNA</label>
              ";
        // line 55
        $context["No"] = 1;
        // line 56
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 57
                echo "                <input type=\"radio\" name=\"rbcomuna\" id=\"rbcomuna\" onchange=\"cargarcom('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "
                ";
                // line 58
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 59
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>
            <div id=\"actividad\" name=\"actividad\">
              <label>ACTIVIDAD</label>
              ";
        // line 63
        $context["No"] = 1;
        // line 64
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 65
                echo "                <input type=\"radio\" name=\"rbactividad\" id=\"rbactividad\" onchange=\"cargaract('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "
                ";
                // line 66
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 67
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </div>
            <div id=\"resultado\" name=\"resultado\">
              <label>RESULTADO</label>
              <div class=\"row\">
                <table id=\"tabla\" name=\"tabla\" class=\"table-bordered\">

                  ";
        // line 74
        $context["No"] = 1;
        // line 75
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 76
                echo "                    <div class=\"col-md-3\">
                      <input type=\"radio\" name=\"rbresultado\" id=\"rbresultado\" onchange=\"cargarres('";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                echo "')\">
                      <font size=\"4\">";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                echo "</font>
                    </div>
                    ";
                // line 80
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 81
                echo "                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </table>
              </div>
            </div>
          </div>
            <div id=\"observacion\" name=\"observacion\">
              <label>OBSERVACION</label>
              <input type=\"text\" name=\"textobservacion\" id=\"textobservacion\" class=\"form-control\" value=\"\">
            </div>
            <br>
            <a data-toggle='tooltip' data-placement='top' name=\"btningresar\" id=\"btningresar\" class='btn btn-success btn-sm'>Ingresar Orden
            </a>
            <input type=\"hidden\" name=\"textactividad\" id=\"textactividad\">
            <input type=\"hidden\" name=\"textbloque\" id=\"textbloque\">
            <input type=\"hidden\" name=\"textmotivo\" id=\"textmotivo\">
            <input type=\"hidden\" name=\"textcomuna\" id=\"textcomuna\">
            <input type=\"hidden\" name=\"textresultado\" id=\"textresultado\">
            <input type=\"hidden\" name=\"textid\" id=\"textid\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "\">

      </div>
    </div>
  </section>
";
    }

    // line 104
    public function block_appScript($context, array $blocks = array())
    {
        // line 105
        echo "  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 105,  255 => 104,  245 => 98,  227 => 82,  220 => 81,  218 => 80,  213 => 78,  209 => 77,  206 => 76,  200 => 75,  198 => 74,  190 => 68,  183 => 67,  181 => 66,  174 => 65,  168 => 64,  166 => 63,  161 => 60,  154 => 59,  152 => 58,  145 => 57,  139 => 56,  137 => 55,  132 => 52,  125 => 51,  123 => 50,  116 => 49,  110 => 48,  108 => 47,  104 => 45,  97 => 44,  95 => 43,  88 => 42,  82 => 41,  80 => 40,  56 => 19,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
  <link rel=\"stylesheet\" href=\"../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css\">
{% endblock %}
{% block appBody %}
  <section class=\"content-header\">
    <h1>
      Programacion Nielsen
      <small>Confirmaciones</small>
    </h1>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <form id=\"formorden\" name=\"formorden\">
      <div class=\"content\">
        <div class=\"row\">
          <div class=\"form-group\">
            <div class=\"col-md-4\">
              <label for=\"textuser\">Operador:</label><input type=\"text\" name=\"textuser\" id=\"textuser\" class=\"form-control\" value=\"{{ owner_user['name'] }}\">
            </div>
            <div class=\"col-md-4\">
              <label>Reg:</label><input type=\"text\" name=\"textreg\" id=\"textreg\" class=\"form-control\" value=\"\">
            </div>
            <div class=\"col-md-4\">
              <label>Rut Cliente:</label><input type=\"text\" name=\"textrutcliente\" id=\"textrutcliente\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
              <label>ID Orden:</label><input type=\"text\" name=\"textidorden\" id=\"textidorden\" class=\"form-control\">
            </div>
          </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-md-4\">
              <label>FECHA:</label><input type=\"date\" name=\"textfecha\" id=\"textfecha\" class=\"form-control\" value=\"\" size=\"25\">
            </div>
            <div class=\"col-md-4\">
              <label>BLOQUE:</label>
            </div>
            {% set No = 1 %}
            {% for b in db_bloque if false != db_bloque %}
              <input type=\"radio\" name=\"rbbloque\" onchange=\"cargarblo('{{b.bloque}}')\" id=\"rbbloque\">{{b.bloque}}
              {% set No = No + 1 %}
            {% endfor %}
            <label>MOTIVO DEL LLAMADO</label>
            <div class=\"col-md-3\">
              {% set No = 1 %}
              {% for m in db_motivo if false != db_motivo %}
                <input type=\"radio\" name=\"rbmotivo\" id=\"rbmotivo\" onchange=\"cargarmot('{{m.motivo}}')\">{{m.motivo}}
                {% set No = No + 1 %}
              {% endfor %}
            </div>
            <div id=\"comunas\" name=\"comuna\">
              <label>COMUNA</label>
              {% set No = 1 %}
              {% for c in db_comuna if false != db_comuna %}
                <input type=\"radio\" name=\"rbcomuna\" id=\"rbcomuna\" onchange=\"cargarcom('{{c.id_comuna}}')\">{{c.id_comuna}}
                {% set No = No + 1 %}
              {% endfor %}
            </div>
            <div id=\"actividad\" name=\"actividad\">
              <label>ACTIVIDAD</label>
              {% set No = 1 %}
              {% for a in db_actividad if false != db_actividad %}
                <input type=\"radio\" name=\"rbactividad\" id=\"rbactividad\" onchange=\"cargaract('{{a.actividad}}')\">{{a.actividad}}
                {% set No = No + 1 %}
              {% endfor %}
            </div>
            <div id=\"resultado\" name=\"resultado\">
              <label>RESULTADO</label>
              <div class=\"row\">
                <table id=\"tabla\" name=\"tabla\" class=\"table-bordered\">

                  {% set No = 1 %}
                  {% for r in db_resultado if false != db_resultado %}
                    <div class=\"col-md-3\">
                      <input type=\"radio\" name=\"rbresultado\" id=\"rbresultado\" onchange=\"cargarres('{{r.nombre}}')\">
                      <font size=\"4\">{{r.nombre}}</font>
                    </div>
                    {% set No = No + 1 %}
                  {% endfor %}
                </table>
              </div>
            </div>
          </div>
            <div id=\"observacion\" name=\"observacion\">
              <label>OBSERVACION</label>
              <input type=\"text\" name=\"textobservacion\" id=\"textobservacion\" class=\"form-control\" value=\"\">
            </div>
            <br>
            <a data-toggle='tooltip' data-placement='top' name=\"btningresar\" id=\"btningresar\" class='btn btn-success btn-sm'>Ingresar Orden
            </a>
            <input type=\"hidden\" name=\"textactividad\" id=\"textactividad\">
            <input type=\"hidden\" name=\"textbloque\" id=\"textbloque\">
            <input type=\"hidden\" name=\"textmotivo\" id=\"textmotivo\">
            <input type=\"hidden\" name=\"textcomuna\" id=\"textcomuna\">
            <input type=\"hidden\" name=\"textresultado\" id=\"textresultado\">
            <input type=\"hidden\" name=\"textid\" id=\"textid\" value=\"{{ owner_user['id_user'] }}\">

      </div>
    </div>
  </section>
{% endblock %}
{% block appScript %}
  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
{% endblock %}
", "confirmacion/programacion.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\confirmacion\\programacion.twig");
    }
}
