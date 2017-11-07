<?php

/* rrhh/horasextra/modificar_solicitud_hora_extra.twig */
class __TwigTemplate_202bb401409ee81fd7e36747711400efc0e860ab9b47c83e91e8a97196cc25ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/modificar_solicitud_hora_extra.twig", 1);
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
        echo "<section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i> MODIFICAR SOLICITUD DE HORAS EXTRA
    </h4>
    <ol class=\"breadcrumb\">
      <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
      <li><a href=\"rrhh/revisar_horas_extra\"> Horas Extra </a></li>
      <li class=\"active\"> Modificar la solicitud </li>
    </ol>
</section>
    <section class=\"content-header\">
      <div class=\"tab-pane active\" id=\"tab_1-1\">
          <b>Modificar la peticion</b>
          <div id=\"bloque_registro\"></div>
          <div class=\"box box-info\">
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-md-6\" id=\"main\">
                        <br>
                          <form name=\"form_modificar\" id=\"form_modificar\" action=\"\" method=\"POST\">
                                  <div class=\"form-group\">
                                      <label for=\"tiempo\">Fecha:</label>
                                      <input type=\"date\" class=\"form-control\" name=\"fecha\" id=\"fecha\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "fecha", array()), "html", null, true);
        echo "\" required>
                                  </div>
                              <div class=\"form-group\">
                                  <label for=\"dcorta\">Desde:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechad\" id=\"fechad\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "hora_desde", array()), "html", null, true);
        echo "\" required>
                              </div>
                              <div class=\"form-group\">
                                  <label for=\"dcorta\">Hasta:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechah\" id=\"fechah\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "hora_hasta", array()), "html", null, true);
        echo "\" required>
                              </div>
                              <div class=\"form-group\">
                                  <label for=\"motivo\">Motivo:</label>
                                  <input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\"  value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "motivo", array()), "html", null, true);
        echo "\" >
                                  <input type=\"hidden\" class=\"form-control\" name=\"id_conjunto\" id=\"id_conjunto\"  value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "id_conjunto", array()), "html", null, true);
        echo "\" >
                              </div>
                              <center>
                                  <button class=\"btn btn-success\" type=\"button\" id=\"btn_modificar\"><span>Modificar</span></button>
                              </center>
                          </form>
                      </div>
                      <div class=\"col-md-6\"><div class=\"box-body\">
                        <h5><strong>Usuarios</strong></h5>
                        <form id=\"form_buscar\" name=\"form_buscar\">
                          <div class=\"form-group margin\">
                            <button class=\"btn btn-primary\" style=\"position:absolute;display:inline-block;\" type=\"button\" id=\"btn_tmp_horaextra\" onmouseover=\"buscar_coincidencia()\"><span>Agregar</span></button>
                              <input type=\"text\" class=\"form-control\" style=\"padding-left:20%;\" placeholder=\"Buscar usuario por nombre o RUT\" name=\"busca\" id=\"busca\"  onmouseover=\"buscar_coincidencia()\">
                            </div>
                          </form>
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
        // line 62
        $context["No"] = 1;
        // line 63
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 64
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()))) {
                    // line 65
                    echo "                            <tr>
                              <td>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                    echo "</td>
                              <td>";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "solicitante", array()), "html", null, true);
                    echo "</td>
                              <td class='center' width='150'>
                                  <a data-toggle='tooltip' data-placement='top' title='Eliminar' id=\"btn_eliminar_mod\" onclick=\"eliminar_solicitud_mod(";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id", array()), "html", null, true);
                    echo ")\" class='btn btn-warning btn-sm' >
                                      <i class='glyphicon glyphicon-trash'></i>
                                  </a>
                                  <form class=\"\" action=\"\" name=\"form_id_mod\" id=\"form_id_mod\" method=\"post\">
                                      <input type=\"hidden\" id=\"id_hx_mod\" name=\"id_hx_mod\">
                                  </form>
                              </td>
                            </tr>
                            ";
                }
                // line 78
                echo "                            ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 79
                echo "                          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                          </tr>
                        </tbody>
                      </table>
                      </div></div>
                  </div>
              </div>

              <br>
              <br>
              <hr>
          </div>

          <div id=\"bloque_registro\"></div>
      </div>
    </section>

    <!-- Main content -->
    <section class=\"content\">
    </section>
    <!-- /.content -->

";
    }

    // line 102
    public function block_appScript($context, array $blocks = array())
    {
        // line 103
        echo "    <script src=\"views/app/js/horasextra/horasextra.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/modificar_solicitud_hora_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 103,  178 => 102,  153 => 80,  146 => 79,  143 => 78,  131 => 69,  126 => 67,  122 => 66,  119 => 65,  116 => 64,  110 => 63,  108 => 62,  81 => 38,  77 => 37,  70 => 33,  63 => 29,  56 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/modificar_solicitud_hora_extra.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\horasextra\\modificar_solicitud_hora_extra.twig");
    }
}
