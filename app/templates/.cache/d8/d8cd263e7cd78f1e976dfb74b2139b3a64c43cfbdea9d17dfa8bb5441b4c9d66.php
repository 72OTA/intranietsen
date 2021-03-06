<?php

/* confirmacion/bloque/editar_bloque.twig */
class __TwigTemplate_d74c6834edaac34c5a3ce06584a64979b9b9960f27c0fc0d59caf9132b544945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/bloque/editar_bloque.twig", 1);
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
            Bloques
            <small>Editar</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_bloque\">Listado de Bloques</a></li>
        <li class=\"active\">Editar Bloque</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_bloque_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_bloque' id='id_bloque' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_bloque"] ?? null), "id_bloque", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"bloque\" id=\"bloque\" type=\"text\" placeholder=\"Ingrese el bloque horario\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_bloque"] ?? null), "bloque", array()), "html", null, true);
        echo "' required/>
                    <input class=\"form-control\" name=\"limit\" id=\"limit\" type=\"number\" placeholder=\"Ingrese el limite de ordenes\" value='";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_bloque"] ?? null), "limite_q_programacion", array()), "html", null, true);
        echo "' required/>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_bloque\" class=\"btn btn-default\">Grabar</button>
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

    // line 43
    public function block_appScript($context, array $blocks = array())
    {
        // line 44
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/bloque/editar_bloque.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 44,  88 => 43,  70 => 29,  66 => 28,  61 => 26,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
{% endblock %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Bloques
            <small>Editar</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_bloque\">Listado de Bloques</a></li>
        <li class=\"active\">Editar Bloque</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_bloque_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_bloque' id='id_bloque' value='{{ db_bloque.id_bloque }}' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"bloque\" id=\"bloque\" type=\"text\" placeholder=\"Ingrese el bloque horario\" value='{{ db_bloque.bloque }}' required/>
                    <input class=\"form-control\" name=\"limit\" id=\"limit\" type=\"number\" placeholder=\"Ingrese el limite de ordenes\" value='{{ db_bloque.limite_q_programacion }}' required/>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_bloque\" class=\"btn btn-default\">Grabar</button>
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
    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
{% endblock %}
", "confirmacion/bloque/editar_bloque.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\confirmacion\\bloque\\editar_bloque.twig");
    }
}
