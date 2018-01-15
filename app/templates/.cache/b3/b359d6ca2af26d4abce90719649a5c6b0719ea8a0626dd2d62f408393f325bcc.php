<?php

/* confirmacion/programacion/modificarconfirmacion.twig */
class __TwigTemplate_de629359417adb1535f46b2b6b0dfd6b35190298a2efe8043db313790d66e5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/modificarconfirmacion.twig", 1);
        $this->blocks = array(
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
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "  <section class=\"content-header\">
    <h1>
      Programacion Nielsen
      <small>Confirmaciones</small>
    </h1>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <form id=\"formmodorden\" name=\"formmodorden\">
      <div class=\"content\">
        <div class=\"row\">
          <div class=\"form-group\">
            <div class=\"col-md-4\">
              <label for=\"textuser\">Operador:</label><input type=\"text\" name=\"textuser\" id=\"textuser\" class=\"form-control\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "name", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-4\">
              <label>Reg:</label><input type=\"text\" name=\"textreg\" id=\"textreg\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reg", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-4\">
              <label>Rut Cliente:</label><input type=\"text\" name=\"textmodrutcliente\" id=\"textmodrutcliente\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "rut_cliente", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-4\">
              <label>ID Orden:</label><input type=\"text\" name=\"textmodidorden\" id=\"textmodidorden\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "n_orden", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-4\">
              <label>FECHA:</label><input type=\"date\" name=\"textmodfecha\" id=\"textmodfecha\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "fecha_compromiso", array()), "html", null, true);
        echo "\">
            </div>
          </div>
        </div>
        <br>
        <div class=\"row\">
          <div class=\"col-md-12\">
          <h4 class=\"box-title\"><label>BLOQUE</label></h4>
            <div class=\"row\">
              ";
        // line 37
        $context["No"] = 1;
        // line 38
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 39
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()))) {
                    // line 40
                    echo "                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\" checked=\"checked\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "
                  </div>
                ";
                } else {
                    // line 44
                    echo "                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "
                  </div>
                ";
                }
                // line 48
                echo "                ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 49
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </div>
            <h4 class=\"box-title\"><label>MOTIVO DEL LLAMADO</label></h4>
            <div class=\"row\">
              ";
        // line 53
        $context["No"] = 1;
        // line 54
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 55
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()))) {
                    // line 56
                    echo "                  <div class=\"col-md-1\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\" checked=\"checked\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "
                  </div>
                ";
                } else {
                    // line 60
                    echo "                <div class=\"col-md-1\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "
                  </div>
                ";
                }
                // line 64
                echo "                ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 65
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </div>
            <div id=\"comunas\" name=\"comuna\">
                  <h4 class=\"box-title\"><label>COMUNA</label></h4>
              <div class=\"row\">
                ";
        // line 70
        $context["No"] = 1;
        // line 71
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 72
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()))) {
                    // line 73
                    echo "                  <div class=\"col-md-1\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "')\" checked=\"checked\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "
                    </div>
                  ";
                } else {
                    // line 77
                    echo "                  <div class=\"col-md-1\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "')\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 81
                echo "                  ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 82
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "              </div>
            </div>
            <div id=\"actividad\" name=\"actividad\">
                <h4 class=\"box-title\"><label>ACTIVIDAD</label></h4>
              <div class=\"row\">
                ";
        // line 88
        $context["No"] = 1;
        // line 89
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 90
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()))) {
                    // line 91
                    echo "                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\" checked=\"checked\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "
                    </div>
                  ";
                } else {
                    // line 95
                    echo "                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 99
                echo "                  ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 100
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "              </div>
            </div>
            <div id=\"resultado\" name=\"resultado\">
                <h4 class=\"box-title\"><label for=\"\">RESULTADO</label></h4>
              <div class=\"row\">
                <table id=\"tabla\" name=\"tabla\" class=\"table-bordered\">
                  ";
        // line 107
        $context["No"] = 1;
        // line 108
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 109
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()))) {
                    // line 110
                    echo "                    <div class=\"col-md-3\" style=\"border: 1px solid white\">
                        <input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                        <font size=\"4\" checked=\"checked\">";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</font>
                      </div>
                    ";
                } else {
                    // line 115
                    echo "                    <div class=\"col-md-3\" style=\"border: 1px solid white\">
                        <input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "')\">
                        <font size=\"4\">";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</font>
                      </div>
                    ";
                }
                // line 120
                echo "                    ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 121
                echo "                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                </table>
              </div>
            </div>
          </div>
        </div>
        <div id=\"observacion\" name=\"observacion\">
          <label>OBSERVACION</label>
          <input type=\"text\" name=\"textmodobservacion\" id=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "observacion", array()), "html", null, true);
        echo "\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "observacion", array()), "html", null, true);
        echo "\">
        </div>
        <br>
        <a data-toggle='tooltip' data-placement='top' name=\"modbtningresar\" id=\"modbtningresar\" class='btn btn-success btn-sm'>Modificar Orden
        </a>
        <input type=\"hidden\" name=\"textmodactividad\" id=\"textmodactividad\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodbloque\" id=\"textmodbloque\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodmotivo\" id=\"textmodmotivo\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodcomuna\" id=\"textmodcomuna\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodresultado\" id=\"textmodresultado\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodid\" id=\"textmodid\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "operador", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"ordenid\" id=\"ordenid\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "id_orden", array()), "html", null, true);
        echo "\">
      </div>
    </section>
  ";
    }

    // line 144
    public function block_appScript($context, array $blocks = array())
    {
        // line 145
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/modificarconfirmacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 145,  399 => 144,  391 => 140,  387 => 139,  383 => 138,  379 => 137,  375 => 136,  371 => 135,  367 => 134,  357 => 129,  348 => 122,  341 => 121,  338 => 120,  332 => 117,  326 => 116,  323 => 115,  317 => 112,  311 => 111,  308 => 110,  305 => 109,  299 => 108,  297 => 107,  289 => 101,  282 => 100,  279 => 99,  269 => 96,  266 => 95,  256 => 92,  253 => 91,  250 => 90,  244 => 89,  242 => 88,  235 => 83,  228 => 82,  225 => 81,  215 => 78,  212 => 77,  202 => 74,  199 => 73,  196 => 72,  190 => 71,  188 => 70,  182 => 66,  175 => 65,  172 => 64,  162 => 61,  159 => 60,  149 => 57,  146 => 56,  143 => 55,  137 => 54,  135 => 53,  130 => 50,  123 => 49,  120 => 48,  110 => 45,  107 => 44,  97 => 41,  94 => 40,  91 => 39,  85 => 38,  83 => 37,  71 => 28,  65 => 25,  59 => 22,  53 => 19,  47 => 16,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
  <section class=\"content-header\">
    <h1>
      Programacion Nielsen
      <small>Confirmaciones</small>
    </h1>
  </section>
  <!-- Main content -->
  <section class=\"content\">
    <form id=\"formmodorden\" name=\"formmodorden\">
      <div class=\"content\">
        <div class=\"row\">
          <div class=\"form-group\">
            <div class=\"col-md-4\">
              <label for=\"textuser\">Operador:</label><input type=\"text\" name=\"textuser\" id=\"textuser\" class=\"form-control\" value=\"{{ db_modorden.name}}\">
            </div>
            <div class=\"col-md-4\">
              <label>Reg:</label><input type=\"text\" name=\"textreg\" id=\"textreg\" class=\"form-control\" value=\"{{db_modorden.reg}}\">
            </div>
            <div class=\"col-md-4\">
              <label>Rut Cliente:</label><input type=\"text\" name=\"textmodrutcliente\" id=\"textmodrutcliente\" class=\"form-control\" value=\"{{db_modorden.rut_cliente}}\">
            </div>
            <div class=\"col-md-4\">
              <label>ID Orden:</label><input type=\"text\" name=\"textmodidorden\" id=\"textmodidorden\" class=\"form-control\" value=\"{{db_modorden.n_orden}}\">
            </div>
            <div class=\"col-md-4\">
              <label>FECHA:</label><input type=\"date\" name=\"textmodfecha\" id=\"textmodfecha\" class=\"form-control\" value=\"{{db_modorden.fecha_compromiso}}\">
            </div>
          </div>
        </div>
        <br>
        <div class=\"row\">
          <div class=\"col-md-12\">
          <h4 class=\"box-title\"><label>BLOQUE</label></h4>
            <div class=\"row\">
              {% set No = 1 %}
              {% for b in db_bloque if false != db_bloque %}
                {% if b.bloque == db_modorden.bloque %}
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('{{b.bloque}}')\" id=\"{{b.bloque}}\" checked=\"checked\">{{b.bloque}}
                  </div>
                {% else %}
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('{{b.bloque}}')\" id=\"{{b.bloque}}\">{{b.bloque}}
                  </div>
                {% endif %}
                {% set No = No + 1 %}
              {% endfor %}
            </div>
            <h4 class=\"box-title\"><label>MOTIVO DEL LLAMADO</label></h4>
            <div class=\"row\">
              {% set No = 1 %}
              {% for m in db_motivo if false != db_motivo %}
                {% if m.motivo == db_modorden.motivo %}
                  <div class=\"col-md-1\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodmotivo\" id=\"{{m.motivo}}\" onchange=\"cargarmodmot('{{m.motivo}}')\" checked=\"checked\">{{m.motivo}}
                  </div>
                {% else %}
                <div class=\"col-md-1\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodmotivo\" id=\"{{m.motivo}}\" onchange=\"cargarmodmot('{{m.motivo}}')\">{{m.motivo}}
                  </div>
                {% endif %}
                {% set No = No + 1 %}
              {% endfor %}
            </div>
            <div id=\"comunas\" name=\"comuna\">
                  <h4 class=\"box-title\"><label>COMUNA</label></h4>
              <div class=\"row\">
                {% set No = 1 %}
                {% for c in db_comuna if false != db_comuna %}
                  {% if c.id_comuna == db_modorden.comuna %}
                  <div class=\"col-md-1\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodcomuna\" id=\"{{c.id_comuna}}\" onchange=\"cargarmodcom('{{c.id_comuna}}')\" checked=\"checked\">{{c.id_comuna}}
                    </div>
                  {% else %}
                  <div class=\"col-md-1\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodcomuna\" id=\"{{c.id_comuna}}\" onchange=\"cargarmodcom('{{c.id_comuna}}')\">{{c.id_comuna}}
                    </div>
                  {% endif %}
                  {% set No = No + 1 %}
                {% endfor %}
              </div>
            </div>
            <div id=\"actividad\" name=\"actividad\">
                <h4 class=\"box-title\"><label>ACTIVIDAD</label></h4>
              <div class=\"row\">
                {% set No = 1 %}
                {% for a in db_actividad if false != db_actividad %}
                  {% if a.actividad == db_modorden.actividad %}
                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodactividad\" id=\"{{a.actividad}}\" onchange=\"cargarmodact('{{a.actividad}}')\" checked=\"checked\">{{a.actividad}}
                    </div>
                  {% else %}
                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodactividad\" id=\"{{a.actividad}}\" onchange=\"cargarmodact('{{a.actividad}}')\">{{a.actividad}}
                    </div>
                  {% endif %}
                  {% set No = No + 1 %}
                {% endfor %}
              </div>
            </div>
            <div id=\"resultado\" name=\"resultado\">
                <h4 class=\"box-title\"><label for=\"\">RESULTADO</label></h4>
              <div class=\"row\">
                <table id=\"tabla\" name=\"tabla\" class=\"table-bordered\">
                  {% set No = 1 %}
                  {% for r in db_resultado if false != db_resultado %}
                    {% if r.nombre == db_modorden.resultado %}
                    <div class=\"col-md-3\" style=\"border: 1px solid white\">
                        <input type=\"radio\" name=\"rbmodresultado\" id=\"{{r.nombre}}\" onchange=\"cargarmodres('{{r.nombre}}')\" checked=\"checked\">
                        <font size=\"4\" checked=\"checked\">{{r.nombre}}</font>
                      </div>
                    {% else %}
                    <div class=\"col-md-3\" style=\"border: 1px solid white\">
                        <input type=\"radio\" name=\"rbmodresultado\" id=\"{{r.nombre}}\" onchange=\"cargarmodres('{{r.nombre}}')\">
                        <font size=\"4\">{{r.nombre}}</font>
                      </div>
                    {% endif %}
                    {% set No = No + 1 %}
                  {% endfor %}
                </table>
              </div>
            </div>
          </div>
        </div>
        <div id=\"observacion\" name=\"observacion\">
          <label>OBSERVACION</label>
          <input type=\"text\" name=\"textmodobservacion\" id=\"{{db_modorden.observacion}}\" class=\"form-control\" value=\"{{db_modorden.observacion}}\">
        </div>
        <br>
        <a data-toggle='tooltip' data-placement='top' name=\"modbtningresar\" id=\"modbtningresar\" class='btn btn-success btn-sm'>Modificar Orden
        </a>
        <input type=\"hidden\" name=\"textmodactividad\" id=\"textmodactividad\" value=\"{{ db_modorden.actividad }}\">
        <input type=\"hidden\" name=\"textmodbloque\" id=\"textmodbloque\" value=\"{{ db_modorden.bloque }}\">
        <input type=\"hidden\" name=\"textmodmotivo\" id=\"textmodmotivo\" value=\"{{ db_modorden.motivo }}\">
        <input type=\"hidden\" name=\"textmodcomuna\" id=\"textmodcomuna\" value=\"{{ db_modorden.comuna }}\">
        <input type=\"hidden\" name=\"textmodresultado\" id=\"textmodresultado\" value=\"{{ db_modorden.resultado }}\">
        <input type=\"hidden\" name=\"textmodid\" id=\"textmodid\" value=\"{{ db_modorden.operador }}\">
        <input type=\"hidden\" name=\"ordenid\" id=\"ordenid\" value=\"{{ db_modorden.id_orden }}\">
      </div>
    </section>
  {% endblock %}
  {% block appScript %}
    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
  {% endblock %}
", "confirmacion/programacion/modificarconfirmacion.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\confirmacion\\programacion\\modificarconfirmacion.twig");
    }
}
