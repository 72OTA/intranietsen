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
                            ";
        // line 21
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["ultimo_id"] ?? null), 0, array(), "array"), "id_enc_hx", array(), "array") > "0")) {
            // line 22
            echo "                            <input type=\"hidden\" class=\"form-control\" name=\"id_enc_hx\" id=\"id_enc_hx\" value=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["ultimo_id"] ?? null), 0, array(), "array"), "id_enc_hx", array(), "array") + 1), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 24
            echo "                            <input type=\"hidden\" class=\"form-control\" name=\"id_enc_hx\" id=\"id_enc_hx\" value=\"1\">
                            ";
        }
        // line 26
        echo "                          </div>
                                ";
        // line 27
        if ((($context["horas_extras"] ?? null) == true)) {
            // line 28
            echo "                                <div class=\"form-group margin\">
                                    <label for=\"fecha_solicitud\">Fecha:</label>
                                <input type=\"date\" class=\"form-control\" name=\"fecha_solicitud\" id=\"fecha_solicitud\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "fecha_solicitud", array(), "array"), "html", null, true);
            echo "\" min=\"";
            echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
            echo "\" required>
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"hora_desde\">Desde:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"hora_desde\" id=\"hora_desde\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "hora_desde", array(), "array"), "html", null, true);
            echo "\" required>
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"hora_hasta\">Hasta:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"hora_hasta\" id=\"hora_hasta\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "hora_hasta", array(), "array"), "html", null, true);
            echo "\" required >
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"motivo\">Motivo:</label>
                                  <input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\" placeholder=\"Agregar un motivo para solicitud de horas extra.\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "motivo", array(), "array"), "html", null, true);
            echo "\" required>
                              </div>
                                ";
        } else {
            // line 45
            echo "                                <div class=\"form-group margin\">
                                    <label for=\"fecha\">Fecha:</label>
                                <input type=\"date\" class=\"form-control\" name=\"fecha_solicitud\" id=\"fecha_solicitud\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
            echo "\" min=\"";
            echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
            echo "\" required>
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"hora_desde\">Desde:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"hora_desde\" id=\"hora_desde\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["tiempo"] ?? null), "html", null, true);
            echo "\" required>
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"hora_hasta\">Hasta:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"hora_hasta\" id=\"hora_hasta\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, ($context["tiempo"] ?? null), "html", null, true);
            echo "\" required >
                              </div>
                              <div class=\"form-group margin\">
                                  <label for=\"motivo\">Motivo:</label>
                                  <input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\" placeholder=\"Agregar un motivo para solicitud de horas extra.(REQUERIDO)\"  required>
                              </div>
                                ";
        }
        // line 62
        echo "                                <div class=\"form-group margin\">
                                <input type=\"hidden\" class=\"form-control\" name=\"fecha_creacion\" id=\"fecha_creacion\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "\" min=\"";
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "\" required>
                              </div>
                        <div class=\"form-group margin\">
                            <input type=\"hidden\" name=\"iduser\" id=\"iduser\" value=\"";
        // line 66
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
      <ol class=\"breadcrumb\">
        <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
        <li><a href=\"rrhh/revisar_horas_extra\"> Revisar Horas Extra </a></li>
        <li class=\"active\"> Solicitar Horas extra </li>
      </ol>
  </section>
  <section class=\"content-header\">
      <b>Personal para aprobación</b>
    <div class=\"row\">
      <div class=\"col-md-12\">
        <form id=\"form_buscar\" name=\"form_buscar\">
          <div class=\"form-group margin\">
            <button class=\"btn btn-primary\" style=\"position:absolute;display:inline-block;\" type=\"button\" id=\"btn_tmp_horaextra\" onmouseover=\"buscar_coincidencia()\"><span>Agregar</span></button>
              <input type=\"text\" class=\"form-control\" style=\"padding-left:20%;\" placeholder=\"Buscar usuario por nombre o RUT\" name=\"busca\" id=\"busca\">
            </div>
          </form>
        <div class=\"box box-primary\">
          <div class=\"box-body\">
          <table id=\"dataTables1\" class=\"table table-bordered\">
            <thead>
              <tr>
                <th>RUT</th>
                <th>OPCIONES</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 105
        $context["No"] = 1;
        // line 106
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 107
                echo "                <tr>
                  <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                echo "</td>
                  <td class='center'>
                    ";
                // line 110
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estatus", array()) != "Aprobada")) {
                    // line 111
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
                // line 118
                echo "                  </td>
                </tr>
                ";
                // line 120
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 121
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "              </tr>
            </tbody>
          </table>
          ";
        // line 125
        if ((($context["No"] ?? null) > 1)) {
            // line 126
            echo "              <center>
                  <button class=\"btn btn-success\" type=\"button\" id=\"btn_horaextra\"><span>Solicitar Horas Extra</span></button>
              </center>
        ";
        }
        // line 130
        echo "          </div>
        </div>
      </div>
    </div>
  </section>
    </div>
  </div>
";
    }

    // line 138
    public function block_appScript($context, array $blocks = array())
    {
        // line 139
        $this->loadTemplate("rrhh/horasextra/datatables_opciones", "rrhh/horasextra/ingreso_horas_extra.twig", 139)->display($context);
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
        return array (  260 => 139,  257 => 138,  246 => 130,  240 => 126,  238 => 125,  233 => 122,  226 => 121,  224 => 120,  220 => 118,  209 => 111,  207 => 110,  202 => 108,  199 => 107,  193 => 106,  191 => 105,  149 => 66,  141 => 63,  138 => 62,  128 => 55,  121 => 51,  112 => 47,  108 => 45,  102 => 42,  95 => 38,  88 => 34,  79 => 30,  75 => 28,  73 => 27,  70 => 26,  66 => 24,  60 => 22,  58 => 21,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/ingreso_horas_extra.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\horasextra\\ingreso_horas_extra.twig");
    }
}
