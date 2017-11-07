<?php

/* rrhh/horasextra/ingreso_horas_extra.twig */
class __TwigTemplate_6446d8543e6c293b904d2b6b7d1bd1f17944e1f99fe0a4dadd9ee56bfc5984a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/ingreso_horas_extra.twig", 1);
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
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
    }

    // line 6
    public function block_appBody($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row\">
  <div class=\"col-md-6\">
    <section class=\"content-header\">
        <h4>
          <i class=\"fa fa-user\"></i> SOLICITAR HORAS EXTRA
        </h4>
    </section>
        <section class=\"content-header\">
              <b>Datos para formar la peticion</b>
              <div class=\"box box-info\">
                  <br>
                    <form name=\"form_horax\" id=\"form_horax\" action=\"\" method=\"POST\">
                              <div class=\"form-group margin\">
                            <input type=\"hidden\" class=\"form-control\" name=\"rut\" id=\"rut\" >
                            <input type=\"hidden\" class=\"form-control\" name=\"nombre\" id=\"nombre\" >
                            <input type=\"hidden\" class=\"form-control\" name=\"id_conjunto\" id=\"id_conjunto\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["ultimo_id"] ?? null), 0, array(), "array"), "id", array(), "array"), "html", null, true);
        echo "\">
                          </div>
                                ";
        // line 24
        if ((($context["horas_extras"] ?? null) == true)) {
            // line 25
            echo "                                <div class=\"form-group margin\">
                                    <label for=\"fecha\">Fecha:</label>
                                <input type=\"date\" class=\"form-control\" name=\"fecha\" id=\"fecha\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "fecha", array(), "array"), "html", null, true);
            echo "\" min=\"";
            echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
            echo "\" required>
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"fechad\">Desde:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechad\" id=\"fechad\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "hora_desde", array(), "array"), "html", null, true);
            echo "\" required>
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"fechah\">Hasta:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechah\" id=\"fechah\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "hora_hasta", array(), "array"), "html", null, true);
            echo "\" required >
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"motivo\">Motivo:</label>
                                  <input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\" placeholder=\"Agregar un motivo para solicitud de horas extra.\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "motivo", array(), "array"), "html", null, true);
            echo "\" required>
                              </div>
                                ";
        } else {
            // line 42
            echo "                                <div class=\"form-group margin\">
                                    <label for=\"fecha\">Fecha:</label>
                                <input type=\"date\" class=\"form-control\" name=\"fecha\" id=\"fecha\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
            echo "\" min=\"";
            echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
            echo "\" required>
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"fechad\">Desde:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechad\" id=\"fechad\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["tiempo"] ?? null), "html", null, true);
            echo "\" required>
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"fechah\">Hasta:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechah\" id=\"fechah\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["tiempo"] ?? null), "html", null, true);
            echo "\" required >
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"motivo\">Motivo:</label>
                                  <input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\" placeholder=\"Agregar un motivo para solicitud de horas extra.(REQUERIDO)\"  required>
                              </div>
                                ";
        }
        // line 59
        echo "                        <div class=\"form-group margin\">
                            <input type=\"hidden\" name=\"iduser\" id=\"iduser\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array")), "html", null, true);
        echo "\">
                          </div>
                      </form>

                  <br>
              </div>
        </section>
  </div>
  <div class=\"col-md-6\">
  <section class=\"content-header\">
      <h4>
        <i class=\"fa fa-user\"></i> GESTION DE HORAS EXTRA
      </h4>
  </section>
  <section class=\"content-header\">
      <b>Personal para aprobación</b>
    <div class=\"row\">
      <div class=\"col-md-12\">
        <form id=\"form_buscar\" name=\"form_buscar\">
          <div class=\"form-group margin\">
            <button class=\"btn btn-primary\" style=\"position:absolute;display:inline-block;\" type=\"button\" id=\"btn_tmp_horaextra\" onmouseover=\"buscar_coincidencia()\"><span>Agregar</span></button>
              <input type=\"text\" class=\"form-control\" style=\"padding-left:20%;\" placeholder=\"Buscar usuario por nombre o RUT\" name=\"busca\" id=\"busca\"  onmouseover=\"buscar_coincidencia()\">
            </div>
          </form>
        <div class=\"box box-primary\">
          <div class=\"box-body\">
          <table id=\"dataTables1\" class=\"table table-bordered\">
            <thead>
              <tr>
                <th>RUT</th>
                <th>Nombre</th>
                <th>OPCIONES</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 95
        $context["No"] = 1;
        // line 96
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 97
                echo "                <tr>
                  <td>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "solicitante", array()), "html", null, true);
                echo "</td>
                  <td class='center' width='150'>
                    ";
                // line 101
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estatus", array()) != "Aprobada")) {
                    // line 102
                    echo "                      <a data-toggle='tooltip' data-placement='top' title='Eliminar' id=\"btn_eliminar1\" onclick=\"eliminar_solicitud(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id", array()), "html", null, true);
                    echo ")\" class='btn btn-warning btn-sm' >
                          <i class='glyphicon glyphicon-trash'></i>
                      </a>
                      <form class=\"\" action=\"\" name=\"form_id\" id=\"form_id\" method=\"post\">
                          <input type=\"hidden\" id=\"id_solicitudhx\" name=\"id_solicitudhx\">
                      </form>
                    ";
                }
                // line 109
                echo "                  </td>
                </tr>
                ";
                // line 111
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 112
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "              </tr>
            </tbody>
          </table>
          ";
        // line 116
        if ((($context["No"] ?? null) > 1)) {
            // line 117
            echo "              <center>
                  <button class=\"btn btn-success\" type=\"button\" id=\"btn_horaextra\"><span>Solicitar Horas Extra</span></button>
              </center>
        ";
        }
        // line 121
        echo "          </div>
        </div>
      </div>
    </div>
  </section>
    </div>
  </div>
";
    }

    // line 129
    public function block_appScript($context, array $blocks = array())
    {
        // line 130
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/js/horasextra/horasextra.js\"></script>
    <script>
         \$(function(){
           var dbdatos = [
             ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_users"] ?? null))) {
                // line 139
                echo "             '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombres", array()), "html", null, true);
                echo "',
             '";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                echo "',
             ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "           ];
           \$('#busca').autocomplete({
             source: dbdatos
           });
         });
         </script>
    <!-- <script>
     \$(\"#dataTables1\").dataTable({
                \"language\": {
                    \"search\": \"Buscar:\",
                    \"zeroRecords\": \"No hay datos para mostrar\",
                    \"info\":\"Mostrando _END_ Registros, de un total de _TOTAL_ \",
                    \"loadingRecords\": \"Cargando...\",
                    \"processing\":\"Procesando...\",
                    \"infoEmpty\":\"No hay entradas para mostrar\",
                    \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                    \"paginate\":{
                      \"first\":\"Primera\",
                      \"last\":\"Ultima\",
                      \"next\":\"Siguiente\",
                      \"previous\":\"Anterior\",
                    }
                              },
                \"autoWidth\": true
            });
    </script> -->

";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/ingreso_horas_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 142,  263 => 140,  258 => 139,  253 => 138,  243 => 130,  240 => 129,  229 => 121,  223 => 117,  221 => 116,  216 => 113,  209 => 112,  207 => 111,  203 => 109,  192 => 102,  190 => 101,  185 => 99,  181 => 98,  178 => 97,  172 => 96,  170 => 95,  132 => 60,  129 => 59,  119 => 52,  112 => 48,  103 => 44,  99 => 42,  93 => 39,  86 => 35,  79 => 31,  70 => 27,  66 => 25,  64 => 24,  59 => 22,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/ingreso_horas_extra.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\horasextra\\ingreso_horas_extra.twig");
    }
}
