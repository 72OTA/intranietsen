<?php

/* confirmacion/mantenedores_crud_masters.twig */
class __TwigTemplate_ce3eb5433fba0cf971370204138f476525b1d5dc11c496585b8ea3cf1c51f00c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/mantenedores_crud_masters.twig", 1);
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
            Confirmacion
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
            <legend>Comuna</legend>
              <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_comunas\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->

        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Motivo Llamado</legend>
              <div style=\"background-color:#aaaaff;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_motivocall\" class=\"small-box-footer\" title=\"Ver Motivos de llamados\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Actividad</legend>
              <div style=\"background-color:#6565d7;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_actividades\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Bloque</legend>
              <div style=\"background-color:#8ee28d;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_bloque\" class=\"small-box-footer\" title=\"Ver Bloques\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div>
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Resultado</legend>
              <div style=\"background-color:#bfe28d;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_resultado\" class=\"small-box-footer\" title=\"Ver Bloques\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "confirmacion/mantenedores_crud_masters.twig";
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
            Confirmacion
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
            <legend>Comuna</legend>
              <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_comunas\" class=\"small-box-footer\" title=\"Ver Comunas\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->

        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Motivo Llamado</legend>
              <div style=\"background-color:#aaaaff;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_motivocall\" class=\"small-box-footer\" title=\"Ver Motivos de llamados\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Actividad</legend>
              <div style=\"background-color:#6565d7;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_actividades\" class=\"small-box-footer\" title=\"Ver Actividades\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div><!-- ./col -->
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Bloque</legend>
              <div style=\"background-color:#8ee28d;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_bloque\" class=\"small-box-footer\" title=\"Ver Bloques\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div>
        <div class=\"col-lg-3\">
          <form>
            <fieldset>
            <legend>Resultado</legend>
              <div style=\"background-color:#bfe28d;color:#fff\" class=\"small-box\">
                <div class=\"inner\">
                  <h3>Listar</h3>
                  <p>Todos</p>
                </div>
                <div class=\"icon\">
                  <i class=\"fa fa-user-plus\"></i>
                </div>
                  <a href=\"confirmacion/listar_resultado\" class=\"small-box-footer\" title=\"Ver Bloques\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->

{% endblock %}
", "confirmacion/mantenedores_crud_masters.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\confirmacion\\mantenedores_crud_masters.twig");
    }
}
