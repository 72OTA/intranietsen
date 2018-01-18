<?php

/* confirmacion/programacion/listar_ejecutivos.twig */
class __TwigTemplate_d5eaa13e3b8f872fcaa3398a53198905e37b65b396a3bbaa5ad5130187618091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/listar_ejecutivos.twig", 1);
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
  <style media=\"screen\">
    .at{
      display: none;
    }
  </style>
";
    }

    // line 10
    public function block_appBody($context, array $blocks = array())
    {
        // line 11
        echo "  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i>
      CONFIRMACIONES
      <small>Listar ejecutivos</small>

      <a class=\"btn btn-primary btn-social pull-right\" href=\"administracion/usuario\" title=\"Usuarios\" data-toggle=\"tooltip\">
        <i class=\"fa fa-plus\"></i>
        Usuarios
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
                <form id=\"formlista\" name=\"formlista\">
                  <table id=\"datatablelista\" name=\"datatablelista\" class=\"table table-bordered\">
                    <thead>
                      <tr>
                        <th>Nombre de usuario</th>
                        <th>Perfil</th>
                        <th>Total Ordenes</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_ejecutivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            if ((false != ($context["db_ejecutivos"] ?? null))) {
                // line 41
                echo "                      <tr>
                         <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "name", array()), "html", null, true);
                echo "</td>
                         <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "perfil", array()), "html", null, true);
                echo "</td>
                         <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "orden", array()), "html", null, true);
                echo "</td>
                      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </td>
                        </tr>
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
    }

    // line 59
    public function block_appScript($context, array $blocks = array())
    {
        // line 60
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

  <script>

    \$(\"#datatablelista\").dataTable({
      \"scrollX\": true,
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
        return "confirmacion/programacion/listar_ejecutivos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 60,  118 => 59,  102 => 46,  93 => 44,  89 => 43,  85 => 42,  82 => 41,  77 => 40,  46 => 11,  43 => 10,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
  <style media=\"screen\">
    .at{
      display: none;
    }
  </style>
{% endblock %}
{% block appBody %}
  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i>
      CONFIRMACIONES
      <small>Listar ejecutivos</small>

      <a class=\"btn btn-primary btn-social pull-right\" href=\"administracion/usuario\" title=\"Usuarios\" data-toggle=\"tooltip\">
        <i class=\"fa fa-plus\"></i>
        Usuarios
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
                <form id=\"formlista\" name=\"formlista\">
                  <table id=\"datatablelista\" name=\"datatablelista\" class=\"table table-bordered\">
                    <thead>
                      <tr>
                        <th>Nombre de usuario</th>
                        <th>Perfil</th>
                        <th>Total Ordenes</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for e in db_ejecutivos if false != db_ejecutivos %}
                      <tr>
                         <td>{{e.name}}</td>
                         <td>{{e.perfil}}</td>
                         <td>{{e.orden}}</td>
                      {% endfor %}
                    </td>
                        </tr>
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
{% endblock %}
{% block appScript %}

  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

  <script>

    \$(\"#datatablelista\").dataTable({
      \"scrollX\": true,
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
", "confirmacion/programacion/listar_ejecutivos.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\confirmacion\\programacion\\listar_ejecutivos.twig");
    }
}
