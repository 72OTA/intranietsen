<?php

/* coordinacion/asignar_comuna/asignar_comuna.twig */
class __TwigTemplate_354c2ec8672dc9abd56efa41f9b30400fe491a30d1cbbc3f006b3264b072aa2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "coordinacion/asignar_comuna/asignar_comuna.twig", 1);
        $this->blocks = array(
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
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-th\"></i>
      ASIGNAR COMUNAS
    </h4>
  </section>
<div class=\"container\" id=\"controlTotal\">

  <section class=\"content\">

    <!-- Default box -->
    <div class=\"box\" id=\"caja_principal\">
      <div class=\"box-header with-border\">

        <div class=\"box-tools pull-right\">
          <button class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
            <i class=\"fa fa-minus\"></i>
          </button>
        </div>
      </div>

      <div class=\"box-body\">

        <!-- Custom Tabs (Pulled to the right) -->
        <div class=\"nav-tabs-custom\">
          <ul class=\"nav nav-tabs pull-rigth\">
            <li class=\"active\">
              <a href=\"#tab_2-2\" data-toggle=\"tab\">Seleccione Cargo</a>
            </li>

            <li class=\"pull-left header\"></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab_1-1\">

              <form name=\"filtra_usuario_perfil\" id=\"filtra_usuario_perfil\" action=\"\" method=\"POST\">
                <label>
                  <select name='select_ejecutivo' id='select_ejecutivo'>
                    <option selected='selected'>--</option>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ejecutivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()) != 1)) {
                // line 43
                echo "                      <option>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "perfil", array()), "html", null, true);
                echo "</option>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                  </label>
                  <input type='hidden' name='Submit' value='Consultar' id='submit'>
                </form>
                <br>
                <br>

                <div>
                  <form class=\"\" id=\"form_opciones\" name=\"form_opciones\" action=\"\" method=\"POST\">
                    <label id=\"resultado\" name=\"resultado\">
                    </label>
                  </form>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

<section class=\"content\" id=\"mostrarDatos\">

</section>
  ";
    }

    // line 71
    public function block_appScript($context, array $blocks = array())
    {
        // line 72
        echo "    <!-- SCRIPTS -->
    <script src=\"views/app/js/coordinacion/asignar_comuna.js\"></script>

  ";
    }

    public function getTemplateName()
    {
        return "coordinacion/asignar_comuna/asignar_comuna.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 72,  117 => 71,  88 => 45,  78 => 43,  73 => 42,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-th\"></i>
      ASIGNAR COMUNAS
    </h4>
  </section>
<div class=\"container\" id=\"controlTotal\">

  <section class=\"content\">

    <!-- Default box -->
    <div class=\"box\" id=\"caja_principal\">
      <div class=\"box-header with-border\">

        <div class=\"box-tools pull-right\">
          <button class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
            <i class=\"fa fa-minus\"></i>
          </button>
        </div>
      </div>

      <div class=\"box-body\">

        <!-- Custom Tabs (Pulled to the right) -->
        <div class=\"nav-tabs-custom\">
          <ul class=\"nav nav-tabs pull-rigth\">
            <li class=\"active\">
              <a href=\"#tab_2-2\" data-toggle=\"tab\">Seleccione Cargo</a>
            </li>

            <li class=\"pull-left header\"></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab_1-1\">

              <form name=\"filtra_usuario_perfil\" id=\"filtra_usuario_perfil\" action=\"\" method=\"POST\">
                <label>
                  <select name='select_ejecutivo' id='select_ejecutivo'>
                    <option selected='selected'>--</option>
                    {% for d in ejecutivos if d.id_user != 1 %}
                      <option>{{ d.perfil }}</option>
                    {% endfor %}
                  </label>
                  <input type='hidden' name='Submit' value='Consultar' id='submit'>
                </form>
                <br>
                <br>

                <div>
                  <form class=\"\" id=\"form_opciones\" name=\"form_opciones\" action=\"\" method=\"POST\">
                    <label id=\"resultado\" name=\"resultado\">
                    </label>
                  </form>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

<section class=\"content\" id=\"mostrarDatos\">

</section>
  {% endblock %}
  {% block appScript %}
    <!-- SCRIPTS -->
    <script src=\"views/app/js/coordinacion/asignar_comuna.js\"></script>

  {% endblock %}
", "coordinacion/asignar_comuna/asignar_comuna.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\coordinacion\\asignar_comuna\\asignar_comuna.twig");
    }
}
