<?php

/* confirmacion/revisarconfirmaciones.twig */
class __TwigTemplate_4f93fbe698f7b2e943f184a133c02c84600e3c8f9465fec420a807ee214b7d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/revisarconfirmaciones.twig", 1);
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
        echo "  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i>
      CONFIRMACIONES
      <small>Revisar Confirmaciones</small>

      <a class=\"btn btn-primary btn-social pull-right\" href=\"confirmacion/programacion\" title=\"Agregar\" data-toggle=\"tooltip\">
        <i class=\"fa fa-plus\"></i>
        Confirmacion
      </a>

    </h4>
  </section>
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <section class=\"content\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <form id=\"formrevisar\" name=\"formrevisar\">
                  <table id=\"dataTables5\" name=\"dataTables5\" class=\"table table-bordered\">
                    <thead>
                      <tr>
                        <th>Numero Orden</th>
                        <th>Operador</th>
                        <th>Reg</th>
                        <th>Rut Cliente</th>
                        <th>Fecha Compromiso</th>
                        <th>Bloque</th>
                        <th>Motivo</th>
                        <th>Comuna</th>
                        <th>Actividad</th>
                        <th>Resultado</th>
                        <th>Observacion</th>
                        <th>Funciones</th>

                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 46
        $context["No"] = 1;
        // line 47
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_ordenes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            if ((false != ($context["db_ordenes"] ?? null))) {
                // line 48
                echo "                        <tr>
                          <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "n_orden", array())), "html", null, true);
                echo "</td>
                          <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "operador", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "reg", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "bloque", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "motivo", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "comuna", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "actividad", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "resultado", array()), "html", null, true);
                echo "</td>
                          <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "observacion", array()), "html", null, true);
                echo "</td>
                          <td>
                            ";
                // line 61
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "operador", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), 0, array(), "array"))) {
                    // line 62
                    echo "                              <a data-toggle='tooltip' data-placement='top' id=\"btnmodificar\" name=\"btnmodificar\" title='Modificar' class='btn btn-warning btn-sm' href=\"confirmacion/modificarconfirmacion/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "n_orden", array()), "html", null, true);
                    echo "\">
                                <i class='glyphicon glyphicon-edit'></i>
                              </a>
                            ";
                } else {
                    // line 66
                    echo "                              <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-warning btn-sm' disabled=\"disabled\">
                                <i class='glyphicon glyphicon-edit'></i>
                              </a>
                            ";
                }
                // line 70
                echo "                            <a data-placement='top' name=\"btneliminar\" id=\"btneliminar\" title=\"Eliminar\" data-toggle=\"modal\" data-target=\"#modaleliminar\" onclick=\"asignardato(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                echo ")\" class='btn btn-danger btn-sm'>
                              <i class='glyphicon glyphicon-remove'></i>
                            </a>
                          </tr>
                          ";
                // line 74
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 75
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                      </td>
                      <input type=\"text\" name=\"texteliminar\" id=\"texteliminar\">
                      <input type=\"text\" name=\"textpass\" id=\"textpass\">
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  ";
        // line 89
        $this->loadTemplate("confirmacion/eliminar", "confirmacion/revisarconfirmaciones.twig", 89)->display($context);
    }

    // line 91
    public function block_appScript($context, array $blocks = array())
    {
        // line 92
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

  <script>

    \$(\"#dataTables5\").dataTable({
      \"language\": {
        \"search\": \"Buscar:\",
        \"zeroRecords\": \"No hay datos para mostrar\",
        \"info\": \"Mostrando _END_ Registros, de un total de _TOTAL_ \",
        \"loadingRecords\": \"Cargando...\",
        \"processing\": \"Procesando...\",
        \"infoEmpty\": \"No hay entradas para mostrar\",
        \"lengthMenu\": \"Mostrar _MENU_ Filas\",
        \"paginate\": {
          \"first\": \"Primera\",
          \"last\": \"Ultima\",
          \"next\": \"Siguiente\",
          \"previous\": \"Anterior\"
        }
      },
      \"autoWidth\": true
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/revisarconfirmaciones.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 92,  191 => 91,  187 => 89,  172 => 76,  165 => 75,  163 => 74,  155 => 70,  149 => 66,  141 => 62,  139 => 61,  134 => 59,  130 => 58,  126 => 57,  122 => 56,  118 => 55,  114 => 54,  110 => 53,  106 => 52,  102 => 51,  98 => 50,  94 => 49,  91 => 48,  85 => 47,  83 => 46,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
{% endblock %}
{% block appBody %}
  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i>
      CONFIRMACIONES
      <small>Revisar Confirmaciones</small>

      <a class=\"btn btn-primary btn-social pull-right\" href=\"confirmacion/programacion\" title=\"Agregar\" data-toggle=\"tooltip\">
        <i class=\"fa fa-plus\"></i>
        Confirmacion
      </a>

    </h4>
  </section>
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <section class=\"content\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <form id=\"formrevisar\" name=\"formrevisar\">
                  <table id=\"dataTables5\" name=\"dataTables5\" class=\"table table-bordered\">
                    <thead>
                      <tr>
                        <th>Numero Orden</th>
                        <th>Operador</th>
                        <th>Reg</th>
                        <th>Rut Cliente</th>
                        <th>Fecha Compromiso</th>
                        <th>Bloque</th>
                        <th>Motivo</th>
                        <th>Comuna</th>
                        <th>Actividad</th>
                        <th>Resultado</th>
                        <th>Observacion</th>
                        <th>Funciones</th>

                      </tr>
                    </thead>
                    <tbody>
                      {% set No = 1 %}
                      {% for o in db_ordenes if false != db_ordenes %}
                        <tr>
                          <td>{{ o.n_orden|raw|title }}</td>
                          <td>{{o.operador}}</td>
                          <td>{{ o.reg }}</td>
                          <td>{{ o.rut_cliente  }}</td>
                          <td>{{ o.fecha_compromiso }}</td>
                          <td>{{o.bloque}}</td>
                          <td>{{o.motivo}}</td>
                          <td>{{o.comuna}}</td>
                          <td>{{o.actividad}}</td>
                          <td>{{o.resultado}}</td>
                          <td>{{o.observacion}}</td>
                          <td>
                            {% if o.operador == owner_user[0] %}
                              <a data-toggle='tooltip' data-placement='top' id=\"btnmodificar\" name=\"btnmodificar\" title='Modificar' class='btn btn-warning btn-sm' href=\"confirmacion/modificarconfirmacion/{{o.n_orden}}\">
                                <i class='glyphicon glyphicon-edit'></i>
                              </a>
                            {% else %}
                              <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-warning btn-sm' disabled=\"disabled\">
                                <i class='glyphicon glyphicon-edit'></i>
                              </a>
                            {% endif %}
                            <a data-placement='top' name=\"btneliminar\" id=\"btneliminar\" title=\"Eliminar\" data-toggle=\"modal\" data-target=\"#modaleliminar\" onclick=\"asignardato({{o.id_orden}})\" class='btn btn-danger btn-sm'>
                              <i class='glyphicon glyphicon-remove'></i>
                            </a>
                          </tr>
                          {% set No = No + 1 %}
                        {% endfor %}
                      </td>
                      <input type=\"text\" name=\"texteliminar\" id=\"texteliminar\">
                      <input type=\"text\" name=\"textpass\" id=\"textpass\">
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  {% include 'confirmacion/eliminar' %}
{% endblock %}
{% block appScript %}

  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

  <script>

    \$(\"#dataTables5\").dataTable({
      \"language\": {
        \"search\": \"Buscar:\",
        \"zeroRecords\": \"No hay datos para mostrar\",
        \"info\": \"Mostrando _END_ Registros, de un total de _TOTAL_ \",
        \"loadingRecords\": \"Cargando...\",
        \"processing\": \"Procesando...\",
        \"infoEmpty\": \"No hay entradas para mostrar\",
        \"lengthMenu\": \"Mostrar _MENU_ Filas\",
        \"paginate\": {
          \"first\": \"Primera\",
          \"last\": \"Ultima\",
          \"next\": \"Siguiente\",
          \"previous\": \"Anterior\"
        }
      },
      \"autoWidth\": true
    });
  </script>
{% endblock %}
", "confirmacion/revisarconfirmaciones.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\confirmacion\\revisarconfirmaciones.twig");
    }
}
