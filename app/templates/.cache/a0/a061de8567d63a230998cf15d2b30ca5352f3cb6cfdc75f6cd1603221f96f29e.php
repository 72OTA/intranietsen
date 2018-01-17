<?php

/* coordinacion/nodo/listar_nodo.twig */
class __TwigTemplate_86d5f512ec3e5507f8276415e6ba984b51e326641e1974330f2de4e4257c1278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "coordinacion/nodo/listar_nodo.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            Coordinacion
            <small>Listado de Nodos</small>

          <a class=\"btn btn-primary btn-social pull-right\" href=\"coordinacion/nuevo_nodo\" title=\"Agregar\" data-toggle=\"tooltip\">
            <i class=\"fa fa-plus\"></i> Agregar
          </a>
        </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <div class=\"box-body\">
            <table id=\"dataTables1\" class=\"table table-bordered\">
              <thead>
                <tr>
                  <th>Nodo</th>
                  <th>SubNodo</th>
                \t<th>Comuna</th>
                \t<th>Estado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nodo_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["nodo_db"] ?? null))) {
                // line 35
                echo "                  <tr>
                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nodo", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "subnodo", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array())), "html", null, true);
                echo "</td>

                    <td class='center' width='80'>
                      <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"coordinacion/editar_nodo/";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_nodo", array()), "html", null, true);
                echo "\">
                      <i class='glyphicon glyphicon-edit'></i>
                      </a>

                      ";
                // line 46
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == 0)) {
                    // line 47
                    echo "                          <a data-toggle='tooltip' data-placement='top' title='Bloqueado' class='btn btn-warning btn-sm' href=\"coordinacion/estado_nodo/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_nodo", array()), "html", null, true);
                    echo "\">
                          <i class='glyphicon glyphicon-off'></i>
                          </a>

                      ";
                } else {
                    // line 52
                    echo "                          <a data-toggle='tooltip' data-placement='top' title='Activo' class='btn btn-danger btn-sm' href=\"coordinacion/estado_nodo/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_nodo", array()), "html", null, true);
                    echo "\">
                          <i class='glyphicon glyphicon-check'></i>
                          </a>
                      ";
                }
                // line 56
                echo "                    </td>
                  </tr>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    // line 69
    public function block_appScript($context, array $blocks = array())
    {
        // line 70
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/coordinacion/coordinacion.js\"></script>

    <script>
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
    </script>

";
    }

    public function getTemplateName()
    {
        return "coordinacion/nodo/listar_nodo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 70,  145 => 69,  132 => 59,  123 => 56,  115 => 52,  106 => 47,  104 => 46,  97 => 42,  91 => 39,  87 => 38,  83 => 37,  79 => 36,  76 => 35,  71 => 34,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Coordinacion
            <small>Listado de Nodos</small>

          <a class=\"btn btn-primary btn-social pull-right\" href=\"coordinacion/nuevo_nodo\" title=\"Agregar\" data-toggle=\"tooltip\">
            <i class=\"fa fa-plus\"></i> Agregar
          </a>
        </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <div class=\"box-body\">
            <table id=\"dataTables1\" class=\"table table-bordered\">
              <thead>
                <tr>
                  <th>Nodo</th>
                  <th>SubNodo</th>
                \t<th>Comuna</th>
                \t<th>Estado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                {% for d in nodo_db if false != nodo_db %}
                  <tr>
                    <td>{{ d.nodo }}</td>
                    <td>{{ d.subnodo }}</td>
                    <td>{{ d.comuna }}</td>
                    <td>{{ d.estado|raw|title }}</td>

                    <td class='center' width='80'>
                      <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"coordinacion/editar_nodo/{{ d.id_nodo }}\">
                      <i class='glyphicon glyphicon-edit'></i>
                      </a>

                      {% if d.estado == 0 %}
                          <a data-toggle='tooltip' data-placement='top' title='Bloqueado' class='btn btn-warning btn-sm' href=\"coordinacion/estado_nodo/{{ d.id_nodo }}\">
                          <i class='glyphicon glyphicon-off'></i>
                          </a>

                      {% else %}
                          <a data-toggle='tooltip' data-placement='top' title='Activo' class='btn btn-danger btn-sm' href=\"coordinacion/estado_nodo/{{ d.id_nodo }}\">
                          <i class='glyphicon glyphicon-check'></i>
                          </a>
                      {% endif %}
                    </td>
                  </tr>
                {% endfor %}
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

{% endblock %}
{% block appScript %}
    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/coordinacion/coordinacion.js\"></script>

    <script>
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
    </script>

{% endblock %}
", "coordinacion/nodo/listar_nodo.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\coordinacion\\nodo\\listar_nodo.twig");
    }
}
