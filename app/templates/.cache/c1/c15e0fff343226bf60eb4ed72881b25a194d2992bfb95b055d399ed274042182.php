<?php

/* rrhh/horasextra/revisar_horas_extras_pendientes.twig */
class __TwigTemplate_1e4c63510a863d616443c41b2e668d059253e1098c12ef71995b564dc1f01486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", 1);
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
  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
";
    }

    // line 6
    public function block_appBody($context, array $blocks = array())
    {
        // line 7
        echo "  <section class=\"content-header\">
      <h4>
        <i class=\"fa fa-user\"></i> GESTION DE HORAS EXTRA
        </a>
      </h4>
  </section>
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <div class=\"box-body\">
          <table id=\"dataTables1\" class=\"table table-bordered\">
            <thead>
              <tr>
                <th>Peticion Creada</th>
                <th>Fecha solicitada</th>
                <th>Hora desde</th>
                <th>Hora hasta</th>
                <th>Motivo</th>
                <th>Estado</th>
                <th>OPCIONES</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 31
        $context["No"] = 1;
        // line 32
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 33
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()))) {
                    // line 34
                    echo "                <tr>
                  <td>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_creacion", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_solicitud", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_desde", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_hasta", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo_solicitud", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()), "html", null, true);
                    echo "</td>
                  <td class='center' width='150'>
                    ";
                    // line 42
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == "Pendiente")) {
                        // line 43
                        echo "                        <button type=\"button\" id=\"btn_revisar\" title='Revisar' class=\"btn btn-success btn-sm\" data-toggle=\"modal\" onclick=\"modal_responder_solicitud('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_enc_hx", array()), "html", null, true);
                        echo "')\"><i class='glyphicon glyphicon-eye-open'></i></button>
                        </a>
                    ";
                    }
                    // line 46
                    echo "                  </td>
                </tr>
                ";
                }
                // line 49
                echo "                ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 50
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "              </tr>
            </tbody>

          </table>
          </div>
        </div>
      </div>
    </div>
  </section>
";
        // line 60
        $this->loadTemplate("rrhh/horasextra/mostrar_hora_extra", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", 60)->display($context);
    }

    // line 62
    public function block_appScript($context, array $blocks = array())
    {
        // line 63
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/horasextra/horasextra.js\"></script>

";
        // line 69
        $this->loadTemplate("rrhh/horasextra/datatables_opciones", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", 69)->display($context);
        // line 70
        echo "
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/revisar_horas_extras_pendientes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 70,  157 => 69,  149 => 63,  146 => 62,  142 => 60,  131 => 51,  124 => 50,  121 => 49,  116 => 46,  109 => 43,  107 => 42,  102 => 40,  98 => 39,  94 => 38,  90 => 37,  86 => 36,  82 => 35,  79 => 34,  76 => 33,  70 => 32,  68 => 31,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\horasextra\\revisar_horas_extras_pendientes.twig");
    }
}
