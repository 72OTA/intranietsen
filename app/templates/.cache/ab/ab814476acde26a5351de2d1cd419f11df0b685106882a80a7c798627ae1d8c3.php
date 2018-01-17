<?php

/* coordinacion/nodo/nuevo_nodo.twig */
class __TwigTemplate_86cfe25261222194afa3b0491ae20c98cba935d101f2713a735844e88518dbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "coordinacion/nodo/nuevo_nodo.twig", 1);
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
    }

    // line 4
    public function block_appBody($context, array $blocks = array())
    {
        // line 5
        echo "    <section class=\"content-header\">
        <h1>
            Nodos
            <small>Agregar</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"coordinacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"coordinacion/nodo/listar_nodo\">Listado de Nodos</a></li>
        <li class=\"active\">Nuevo Nodo</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"register_nodo_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"nodo\" id=\"nodo\" type=\"text\" placeholder=\"Nombre del nodo\" required/>
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"subnodo\" id=\"subnodo\" type=\"text\" placeholder=\"Nombre del subnodo\" required/>
                </div>
                <div class=\"form-group\">
                    <select id=\"comuna\" name=\"comuna\" class=\"form-control\">
                          ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comuna_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["comuna_db"] ?? null))) {
                // line 35
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_comuna", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                echo "</option>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                  <button type=\"button\" id=\"register_nodo\" class=\"btn btn-default\">Grabar</button>
                  <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    // line 52
    public function block_appScript($context, array $blocks = array())
    {
        // line 53
        echo "    <script src=\"views/app/js/coordinacion/coordinacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "coordinacion/nodo/nuevo_nodo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 53,  104 => 52,  86 => 37,  74 => 35,  69 => 34,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Nodos
            <small>Agregar</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"coordinacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"coordinacion/nodo/listar_nodo\">Listado de Nodos</a></li>
        <li class=\"active\">Nuevo Nodo</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"register_nodo_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"nodo\" id=\"nodo\" type=\"text\" placeholder=\"Nombre del nodo\" required/>
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"subnodo\" id=\"subnodo\" type=\"text\" placeholder=\"Nombre del subnodo\" required/>
                </div>
                <div class=\"form-group\">
                    <select id=\"comuna\" name=\"comuna\" class=\"form-control\">
                          {% for d in comuna_db if false != comuna_db %}
                            <option value=\"{{ d.id_comuna }}\">{{ d.nombre }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"form-group\">
                  <button type=\"button\" id=\"register_nodo\" class=\"btn btn-default\">Grabar</button>
                  <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/coordinacion/coordinacion.js\"></script>
{% endblock %}
", "coordinacion/nodo/nuevo_nodo.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\coordinacion\\nodo\\nuevo_nodo.twig");
    }
}
