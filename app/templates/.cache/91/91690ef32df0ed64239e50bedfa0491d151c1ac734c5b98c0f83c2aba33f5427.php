<?php

/* gerencia/mantenedores_crud_masters.twig */
class __TwigTemplate_decb3b8cdd0e9d6d7669b2567b51ffce6f690312644e75b33ab2e1764859717c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "gerencia/mantenedores_crud_masters.twig", 1);
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
            Gerencia
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
            <legend>Confirmacion</legend>
              <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Auditar</h3>
                  <p>Programadores</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"gerencia/listar_programadores\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->

        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Coordinacion</legend>
              <div style=\"background-color:#aaaaff;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Auditar</h3>
                  <p>Coordinadores</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"gerencia/listar_coordinadores\" class=\"small-box-footer\" title=\"Ver Motivos de llamados\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Auditar OT</legend>
              <div style=\"background-color:#6565d7;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Programacion</h3>
                  <p>Todas las OT</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"gerencia/listar_ot\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
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
        return "gerencia/mantenedores_crud_masters.twig";
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
            Gerencia
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
            <legend>Confirmacion</legend>
              <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Auditar</h3>
                  <p>Programadores</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"gerencia/listar_programadores\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->

        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Coordinacion</legend>
              <div style=\"background-color:#aaaaff;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Auditar</h3>
                  <p>Coordinadores</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"gerencia/listar_coordinadores\" class=\"small-box-footer\" title=\"Ver Motivos de llamados\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Auditar OT</legend>
              <div style=\"background-color:#6565d7;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Programacion</h3>
                  <p>Todas las OT</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"gerencia/listar_ot\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->

      </div>
    </section>
    <!-- /.content -->

{% endblock %}
", "gerencia/mantenedores_crud_masters.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\gerencia\\mantenedores_crud_masters.twig");
    }
}
