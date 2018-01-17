<?php

/* coordinacion/nodo/editar_nodo.twig */
class __TwigTemplate_2a099271e872121f6c431a7aff73e77044e659b8f1183be6175a05699072f1f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "coordinacion/nodo/editar_nodo.twig", 1);
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
            Comunas
            <small>Editar</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_comunas\">Listado de Comunas</a></li>
        <li class=\"active\">Editar Comuna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_nodo_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_nodo' id='id_nodo' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_nodo"] ?? null), "id_nodo", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"nodo\" id=\"nodo\" type=\"text\" placeholder=\"Nombre del nodo\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_nodo"] ?? null), "nodo", array()), "html", null, true);
        echo "' required/>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"subnodo\" id=\"subnodo\" type=\"text\" placeholder=\"Nombre del subnodo\" value='";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_nodo"] ?? null), "subnodo", array()), "html", null, true);
        echo "' required/>
                </div>
                <div class=\"form-group\">
                    <select id=\"comuna\" name=\"comuna\" class=\"form-control\">
                          ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comuna_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["comuna_db"] ?? null))) {
                // line 36
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
        // line 38
        echo "                    </select>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_nodo\" class=\"btn btn-default\">Grabar</button>
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
        return "coordinacion/nodo/editar_nodo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 53,  113 => 52,  96 => 38,  84 => 36,  79 => 35,  72 => 31,  66 => 28,  61 => 26,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Comunas
            <small>Editar</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_comunas\">Listado de Comunas</a></li>
        <li class=\"active\">Editar Comuna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_nodo_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_nodo' id='id_nodo' value='{{ db_nodo.id_nodo }}' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"nodo\" id=\"nodo\" type=\"text\" placeholder=\"Nombre del nodo\" value='{{ db_nodo.nodo }}' required/>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"subnodo\" id=\"subnodo\" type=\"text\" placeholder=\"Nombre del subnodo\" value='{{ db_nodo.subnodo }}' required/>
                </div>
                <div class=\"form-group\">
                    <select id=\"comuna\" name=\"comuna\" class=\"form-control\">
                          {% for d in comuna_db if false != comuna_db %}
                            <option value=\"{{ d.id_comuna }}\">{{ d.nombre }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_nodo\" class=\"btn btn-default\">Grabar</button>
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
", "coordinacion/nodo/editar_nodo.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\coordinacion\\nodo\\editar_nodo.twig");
    }
}
