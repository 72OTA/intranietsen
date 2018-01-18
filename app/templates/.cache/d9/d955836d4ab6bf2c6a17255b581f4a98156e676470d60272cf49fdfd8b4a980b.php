<?php

/* confirmacion/programacion/editar_confirmacion.twig */
class __TwigTemplate_3e3ac5e2d054f29deaf1165c153b504aa044a725bc339afb98363809c2ff0f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/editar_confirmacion.twig", 1);
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
              <label>Reg:</label><input type=\"text\" name=\"textmodreg\" id=\"textmodreg\" class=\"form-control\" value=\"";
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
            <h4 class=\"box-title\">
              <label>BLOQUE</label>
            </h4>
            <div class=\"row\">
              ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 40
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()))) {
                    // line 41
                    echo "                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\" checked=\"checked\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "
                  </div>
                ";
                } else {
                    // line 45
                    echo "                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "
                  </div>
                ";
                }
                // line 49
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </div>
            <h4 class=\"box-title\">
              <label>MOTIVO DEL LLAMADO</label>
            </h4>
            <div class=\"row\">
              ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 56
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()))) {
                    // line 57
                    echo "                  <div class=\"col-md-1\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\" checked=\"checked\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "
                  </div>
                ";
                } else {
                    // line 61
                    echo "                  <div class=\"col-md-1\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "
                  </div>
                ";
                }
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
              <h4 class=\"box-title\">
                <label>COMUNA</label>
              </h4>
              <div class=\"row\">
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 73
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()))) {
                    // line 74
                    echo "                    <div class=\"col-md-1\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "')\" checked=\"checked\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "
                    </div>
                  ";
                } else {
                    // line 78
                    echo "                    <div class=\"col-md-1\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "')\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 82
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"text\" name=\"textmodnodo\" id=\"textnodo\" class=\"form-control\"value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "nodo", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"text\" name=\"textmodsubnodo\" id=\"textsubnodo\" class=\"form-control\"value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "subnodo", array()), "html", null, true);
        echo "\">
                </div>
              </div>
            </div>
            <div id=\"actividad\" name=\"actividad\">
              <h4 class=\"box-title\">
                <label>ACTIVIDAD</label>
              </h4>
              <div class=\"row\">
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 97
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()))) {
                    // line 98
                    echo "                    <div class=\"col-md-2\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\" checked=\"checked\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "
                    </div>
                  ";
                } else {
                    // line 102
                    echo "                    <div class=\"col-md-2\" style=\"border: 1px solid white\">
                      <input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 106
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "              </div>
            </div>
            <div id=\"resultado\" name=\"resultado\">
              <h4 class=\"box-title\">
                <label for=\"\">RESULTADO</label>
              </h4>
              <div class=\"row\">
                <table id=\"tabla\" name=\"tabla\" class=\"table-bordered\">
                  ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 116
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()))) {
                    // line 117
                    echo "                      <div class=\"col-md-3\" style=\"border: 1px solid white\">
                        <input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                        <font size=\"4\" checked=\"checked\">";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</font>
                      </div>
                    ";
                } else {
                    // line 122
                    echo "                      <div class=\"col-md-3\" style=\"border: 1px solid white\">
                        <input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\">
                        <font size=\"4\">";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</font>
                      </div>
                    ";
                }
                // line 127
                echo "                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                </table>
              </div>
            </div>
          </div>
        </div>
        <div id=\"observacion\" name=\"observacion\">
          <label>OBSERVACION</label>
          <input type=\"text\" name=\"textmodobservacion\" id=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "observacion", array()), "html", null, true);
        echo "\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "observacion", array()), "html", null, true);
        echo "\">
        </div>
        <br>
        <a data-toggle='tooltip' data-placement='top' name=\"modbtningresar\" id=\"modbtningresar\" class='btn btn-success btn-sm'>Modificar Orden
        </a>
        <input type=\"hidden\" name=\"textmodactividad\" id=\"textmodactividad\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodbloque\" id=\"textmodbloque\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodmotivo\" id=\"textmodmotivo\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodcomuna\" id=\"textmodcomuna\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodresultado\" id=\"textmodresultado\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodid\" id=\"textmodid\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "operador", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"ordenid\" id=\"ordenid\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "id_orden", array()), "html", null, true);
        echo "\">
      </div>
    </section>
  ";
    }

    // line 150
    public function block_appScript($context, array $blocks = array())
    {
        // line 151
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/editar_confirmacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 151,  391 => 150,  383 => 146,  379 => 145,  375 => 144,  371 => 143,  367 => 142,  363 => 141,  359 => 140,  349 => 135,  340 => 128,  333 => 127,  327 => 124,  321 => 123,  318 => 122,  312 => 119,  306 => 118,  303 => 117,  300 => 116,  295 => 115,  285 => 107,  278 => 106,  268 => 103,  265 => 102,  255 => 99,  252 => 98,  249 => 97,  244 => 96,  232 => 87,  226 => 84,  223 => 83,  216 => 82,  206 => 79,  203 => 78,  193 => 75,  190 => 74,  187 => 73,  182 => 72,  174 => 66,  167 => 65,  157 => 62,  154 => 61,  144 => 58,  141 => 57,  138 => 56,  133 => 55,  126 => 50,  119 => 49,  109 => 46,  106 => 45,  96 => 42,  93 => 41,  90 => 40,  85 => 39,  71 => 28,  65 => 25,  59 => 22,  53 => 19,  47 => 16,  32 => 3,  29 => 2,  11 => 1,);
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
              <label>Reg:</label><input type=\"text\" name=\"textmodreg\" id=\"textmodreg\" class=\"form-control\" value=\"{{db_modorden.reg}}\">
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
            <h4 class=\"box-title\">
              <label>BLOQUE</label>
            </h4>
            <div class=\"row\">
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
              {% endfor %}
            </div>
            <h4 class=\"box-title\">
              <label>MOTIVO DEL LLAMADO</label>
            </h4>
            <div class=\"row\">
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
              {% endfor %}
            </div>
            <div id=\"comunas\" name=\"comuna\">
              <h4 class=\"box-title\">
                <label>COMUNA</label>
              </h4>
              <div class=\"row\">
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
                {% endfor %}
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"text\" name=\"textmodnodo\" id=\"textnodo\" class=\"form-control\"value=\"{{ db_modorden.nodo }}\">
                </div>
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"text\" name=\"textmodsubnodo\" id=\"textsubnodo\" class=\"form-control\"value=\"{{ db_modorden.subnodo }}\">
                </div>
              </div>
            </div>
            <div id=\"actividad\" name=\"actividad\">
              <h4 class=\"box-title\">
                <label>ACTIVIDAD</label>
              </h4>
              <div class=\"row\">
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
                {% endfor %}
              </div>
            </div>
            <div id=\"resultado\" name=\"resultado\">
              <h4 class=\"box-title\">
                <label for=\"\">RESULTADO</label>
              </h4>
              <div class=\"row\">
                <table id=\"tabla\" name=\"tabla\" class=\"table-bordered\">
                  {% for r in db_resultado if false != db_resultado %}
                    {% if r.id_resultado == db_modorden.resultado %}
                      <div class=\"col-md-3\" style=\"border: 1px solid white\">
                        <input type=\"radio\" name=\"rbmodresultado\" id=\"{{r.id_resultado}}\" onchange=\"cargarmodres('{{r.id_resultado}}')\" checked=\"checked\">
                        <font size=\"4\" checked=\"checked\">{{r.nombre}}</font>
                      </div>
                    {% else %}
                      <div class=\"col-md-3\" style=\"border: 1px solid white\">
                        <input type=\"radio\" name=\"rbmodresultado\" id=\"{{r.nombre}}\" onchange=\"cargarmodres('{{r.id_resultado}}')\">
                        <font size=\"4\">{{r.nombre}}</font>
                      </div>
                    {% endif %}
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
", "confirmacion/programacion/editar_confirmacion.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\confirmacion\\programacion\\editar_confirmacion.twig");
    }
}
