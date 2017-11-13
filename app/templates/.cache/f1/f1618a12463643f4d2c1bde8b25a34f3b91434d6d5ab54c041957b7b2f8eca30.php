<?php

/* rrhh/horasextra/horasextra.twig */
class __TwigTemplate_a09fae066132354c131ec94a237221745177d99c4b4db9a2188245e2750895aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/horasextra.twig", 1);
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
        <i class=\"fa fa-user\"></i> GESTION DE HORAS EXTRA
        <a class=\"btn btn-primary btn-social pull-right\" href=\"rrhh/horasextra\" title=\"solicitar\" data-toggle=\"tooltip\">
          <i class=\"fa fa-plus\"></i> SOLICITAR
        </a>
      </h4>
      <input type=\"hidden\" name=\"iduser\" id=\"iduser\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array")), "html", null, true);
        echo "\">
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
                <th>Estatus</th>
                <th>OPCIONES</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 33
        $context["No"] = 1;
        // line 34
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 35
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()))) {
                    // line 36
                    echo "                <tr>
                  <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_creacion", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha_solicitud", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_desde", array())), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hora_hasta", array()), "html", null, true);
                    echo "</td>
              ";
                    // line 41
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == "Pendiente")) {
                        // line 42
                        echo "                  <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo_solicitud", array()), "html", null, true);
                        echo "</td>
                  ";
                    } else {
                        // line 44
                        echo "                  <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo_respuesta", array()), "html", null, true);
                        echo "</td>
              ";
                    }
                    // line 46
                    echo "                  <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()), "html", null, true);
                    echo "</td>
                  <td class='center' width='150'>
                    ";
                    // line 48
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == "Pendiente")) {
                        // line 49
                        echo "                        <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-primary btn-sm' href=\"rrhh/modificar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_enc_hx", array()), "html", null, true);
                        echo "\">
                            <i class='glyphicon glyphicon-edit'></i>
                        </a>
                    ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                     // line 52
$context["d"], "estado", array()) == "Aprobada")) {
                        // line 53
                        echo "                        <a data-toggle='tooltip' data-placement='top' title='Aceptada ' class='btn btn-success btn-sm' disabled>
                            <i class='glyphicon glyphicon-ok'></i>
                        </a>
                    ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                     // line 56
$context["d"], "estado", array()) == "Rechazada")) {
                        // line 57
                        echo "                        <a data-toggle='tooltip' data-placement='top' title='Rechazada ' class='btn btn-danger btn-sm' disabled>
                            <i class='glyphicon glyphicon-remove'></i>
                        </a>
                    ";
                    }
                    // line 61
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) != "Aprobada")) {
                        // line 62
                        echo "                      <a data-toggle='tooltip' data-placement='top' title='Eliminar' id=\"btn_eliminar1\" onclick=\"eliminar_peticiones(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_enc_hx", array()), "html", null, true);
                        echo ")\" class='btn btn-warning btn-sm' >
                          <i class='glyphicon glyphicon-trash'></i>
                      </a>
                      <form class=\"\" action=\"\" name=\"form_id_peticion\" id=\"form_id_peticion\" method=\"post\">
                          <input type=\"hidden\" id=\"id_peticion\" name=\"id_peticion\">
                      </form>
                    ";
                    }
                    // line 69
                    echo "                  </td>
                </tr>
                ";
                }
                // line 72
                echo "                ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 73
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </section>
";
    }

    // line 83
    public function block_appScript($context, array $blocks = array())
    {
        // line 84
        $this->loadTemplate("rrhh/horasextra/datatables_opciones", "rrhh/horasextra/horasextra.twig", 84)->display($context);
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/horasextra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 84,  188 => 83,  176 => 74,  169 => 73,  166 => 72,  161 => 69,  150 => 62,  147 => 61,  141 => 57,  139 => 56,  134 => 53,  132 => 52,  125 => 49,  123 => 48,  117 => 46,  111 => 44,  105 => 42,  103 => 41,  99 => 40,  95 => 39,  91 => 38,  87 => 37,  84 => 36,  81 => 35,  75 => 34,  73 => 33,  50 => 13,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/horasextra.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\horasextra\\horasextra.twig");
    }
}
