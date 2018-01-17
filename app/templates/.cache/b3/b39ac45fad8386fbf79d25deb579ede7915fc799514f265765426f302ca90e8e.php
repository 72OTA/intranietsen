<?php

/* coordinacion/mantenedores_crud_masters.twig */
class __TwigTemplate_4ae1d4a775233a0af4aa9ce3a63d6586cbb0458fa7a6571f7e4df94e55f747a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "coordinacion/mantenedores_crud_masters.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
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
        echo "    <section class=\"content-header\">
        <h1>
            Coordinacion
            <small>Mantenedor de Maestros</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Mantenedores</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <!-- Small boxes (Stat box) -->
      <br/>
      <div class=\"row\">
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Coordinadores</legend>
              <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"coordinacion/listar_coordinadores\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Nodo</legend>
              <div style=\"background-color:#44d456;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"coordinacion/listar_nodo\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->

      </div>
    </section>
    <!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "coordinacion/mantenedores_crud_masters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
    <section class=\"content-header\">
        <h1>
            Coordinacion
            <small>Mantenedor de Maestros</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Mantenedores</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <!-- Small boxes (Stat box) -->
      <br/>
      <div class=\"row\">
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Coordinadores</legend>
              <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"coordinacion/listar_coordinadores\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Nodo</legend>
              <div style=\"background-color:#44d456;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"coordinacion/listar_nodo\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->

      </div>
    </section>
    <!-- /.content -->

{% endblock %}
", "coordinacion/mantenedores_crud_masters.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\coordinacion\\mantenedores_crud_masters.twig");
    }
}
