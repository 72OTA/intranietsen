<?php

/* confirmacion/programacion/programacion.twig */
class __TwigTemplate_b2b0fdc246f8d2ddbe0ad90f74a396bf2703728988b0455f4e3cf598df498096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/programacion.twig", 1);
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
    <form id=\"formorden\" name=\"formorden\">
      <div class=\"content\">
        <div class=\"row\">
          <div class=\"form-group\">
            <div class=\"col-md-4\">
              <label for=\"textuser\">Operador:</label><input type=\"text\" name=\"textuser\" id=\"textuser\" class=\"form-control\" value=\"";
        // line 16
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
            <div class=\"col-md-4\">
              <label>FECHA:</label><input type=\"date\" name=\"textfecha\" min=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "\" id=\"textfecha\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
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
                echo "                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"radio\" name=\"rbbloque\" onchange=\"cargarblo('";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "')\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "\">
                  <font size=\"4\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "</font>
                </div>
              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </div>
            <h4 class=\"box-title\">
              <label>MOTIVO DEL LLAMADO</label>
            </h4>
            <div class=\"row\">
              ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 51
                echo "                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"radio\" name=\"rbmotivo\" id=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "\" onchange=\"cargarmot('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "')\">
                  <font size=\"4\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "</font>
                </div>
              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
            <div id=\"comunas\" name=\"comuna\">
              <h4 class=\"box-title\">
                <label>COMUNA</label>
              </h4>
              <div class=\"row\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 63
                echo "                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbcomuna\" id=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "\" onchange=\"cargarcom('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "')\">
                    <font size=\"4\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "</font>
                  </div>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"text\" name=\"textnodo\" id=\"textnodo\" class=\"form-control\" placeholder=\"Nodo\">
                </div>
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"text\" name=\"textsubnodo\" id=\"textsubnodo\" class=\"form-control\" placeholder=\"Subnodo\">
                </div>
              </div>
            </div>
            <div id=\"actividad\" name=\"actividad\">
              <h4 class=\"box-title\">
                <label>ACTIVIDAD</label>
              </h4>
              <div class=\"row\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 82
                echo "                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbactividad\" id=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "\" onchange=\"cargaract('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "')\">
                    <font size=\"4\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "</font>
                  </div>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "              </div>
            </div>
            <div id=\"resultado\" name=\"resultado\">
              <h4 class=\"box-title\">
                <label for=\"\">RESULTADO</label>
              </h4>
              ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 94
                echo "                <div class=\"col-md-3\" style=\"border: 1px solid white\">
                  <input type=\"radio\" name=\"rbresultado\" id=\"";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                echo "\" onchange=\"cargarres('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                echo "')\">
                  <font size=\"4\">";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                echo "</font>
                </div>
              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </div>
          </div>
        </div>
        <div id=\"observacion\" name=\"observacion\">
          <h4 class=\"box-title\">
            <label>OBSERVACION</label>
          </h4>
          <input type=\"text\" name=\"textobservacion\" id=\"textobservacion\" placeholder=\"Ingrese una observacion correspondiente a la orden\" class=\"form-control\" value=\"\">
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
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "\">

      </div>
    </div>
  </section>
";
    }

    // line 122
    public function block_appScript($context, array $blocks = array())
    {
        // line 123
        echo "  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/programacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 123,  265 => 122,  255 => 116,  236 => 99,  226 => 96,  220 => 95,  217 => 94,  212 => 93,  204 => 87,  194 => 84,  188 => 83,  185 => 82,  180 => 81,  165 => 68,  155 => 65,  149 => 64,  146 => 63,  141 => 62,  133 => 56,  123 => 53,  117 => 52,  114 => 51,  109 => 50,  102 => 45,  92 => 42,  86 => 41,  83 => 40,  78 => 39,  62 => 28,  47 => 16,  32 => 3,  29 => 2,  11 => 1,);
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
            <div class=\"col-md-4\">
              <label>FECHA:</label><input type=\"date\" name=\"textfecha\" min=\"{{ fecha }}\" id=\"textfecha\" class=\"form-control\" value=\"{{ fecha }}\">
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
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"radio\" name=\"rbbloque\" onchange=\"cargarblo('{{b.bloque}}')\" id=\"{{b.bloque}}\">
                  <font size=\"4\">{{b.bloque}}</font>
                </div>
              {% endfor %}
            </div>
            <h4 class=\"box-title\">
              <label>MOTIVO DEL LLAMADO</label>
            </h4>
            <div class=\"row\">
              {% for m in db_motivo if false != db_motivo %}
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"radio\" name=\"rbmotivo\" id=\"{{m.motivo}}\" onchange=\"cargarmot('{{m.motivo}}')\">
                  <font size=\"4\">{{m.motivo}}</font>
                </div>
              {% endfor %}
            </div>
            <div id=\"comunas\" name=\"comuna\">
              <h4 class=\"box-title\">
                <label>COMUNA</label>
              </h4>
              <div class=\"row\">
                {% for c in db_comuna if false != db_comuna %}
                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbcomuna\" id=\"{{c.id_comuna}}\" onchange=\"cargarcom('{{c.id_comuna}}')\">
                    <font size=\"4\">{{c.id_comuna}}</font>
                  </div>
                {% endfor %}
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"text\" name=\"textnodo\" id=\"textnodo\" class=\"form-control\" placeholder=\"Nodo\">
                </div>
                <div class=\"col-md-2\" style=\"border: 1px solid white\">
                  <input type=\"text\" name=\"textsubnodo\" id=\"textsubnodo\" class=\"form-control\" placeholder=\"Subnodo\">
                </div>
              </div>
            </div>
            <div id=\"actividad\" name=\"actividad\">
              <h4 class=\"box-title\">
                <label>ACTIVIDAD</label>
              </h4>
              <div class=\"row\">
                {% for a in db_actividad if false != db_actividad %}
                  <div class=\"col-md-2\" style=\"border: 1px solid white\">
                    <input type=\"radio\" name=\"rbactividad\" id=\"{{a.actividad}}\" onchange=\"cargaract('{{a.actividad}}')\">
                    <font size=\"4\">{{a.actividad}}</font>
                  </div>
                {% endfor %}
              </div>
            </div>
            <div id=\"resultado\" name=\"resultado\">
              <h4 class=\"box-title\">
                <label for=\"\">RESULTADO</label>
              </h4>
              {% for r in db_resultado if false != db_resultado %}
                <div class=\"col-md-3\" style=\"border: 1px solid white\">
                  <input type=\"radio\" name=\"rbresultado\" id=\"{{r.nombre}}\" onchange=\"cargarres('{{r.nombre}}')\">
                  <font size=\"4\">{{r.nombre}}</font>
                </div>
              {% endfor %}
            </div>
          </div>
        </div>
        <div id=\"observacion\" name=\"observacion\">
          <h4 class=\"box-title\">
            <label>OBSERVACION</label>
          </h4>
          <input type=\"text\" name=\"textobservacion\" id=\"textobservacion\" placeholder=\"Ingrese una observacion correspondiente a la orden\" class=\"form-control\" value=\"\">
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
", "confirmacion/programacion/programacion.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\confirmacion\\programacion\\programacion.twig");
    }
}
