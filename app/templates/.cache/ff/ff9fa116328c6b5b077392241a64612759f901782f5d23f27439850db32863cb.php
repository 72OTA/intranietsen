<?php

/* rrhh/asignar_ejecutivo/asignar_ejecutivo.twig */
class __TwigTemplate_7afa5ddaaab8768b4f040fbbae5211d9b7cf8afae6e8a6db4df0abeabcda50af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/asignar_ejecutivo/asignar_ejecutivo.twig", 1);
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
      ASIGNAR EJECUTIVOS
    </h4>
  </section>

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
              <a href=\"#tab_2-2\" data-toggle=\"tab\">Seleccione perfil para filtrar</a>
            </li>

            <li class=\"pull-left header\"></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab_1-1\">

              <form name=\"filtra_usuario_perfil\" id=\"filtra_usuario_perfil\" action=\"\" method=\"POST\">
                <label>
                  <select name='select_perfil' id='select_perfil'>
                    <option selected='selected'>--</option>
                    ";
        // line 41
        $context["No"] = 1;
        // line 42
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cargos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 43
            echo "                      <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "descripcion", array()), "html", null, true);
            echo "</option>
                      ";
            // line 44
            $context["No"] = (($context["No"] ?? null) + 1);
            // line 45
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                  </label>
                  <input type='hidden' name='Submit' value='Consultar' id='submit'>
                </form>
                <br>
                <br>

                <div>
                  <form class=\"\" id=\"form_opciones\" name=\"form_opciones\" action=\"\" method=\"POST\">
                    <label id=\"resultado\" name=\"resultado\">
                      <!-- Resultado del Jquery donde se muestra las opciones que contienen usuarios. -->
                    </label>
                    <!-- <input type=\"button\" id=\"btn_revisar\" title='Revisar' class=\"btn-success btn-md\" data-toggle=\"modal\" value=\"Asignar Usuarios\" onclick=\"modal_asignar_usuarios('')\"> -->
                  </form>
                </div>

                <div id=\"modal_asignar_usuarios\" class=\"modal fade\" role=\"dialog\">
                  <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Usuarios</h4>
                      </div>
                      <div class=\"modal-body\"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
          </div>
        </div>
      </div>
    </section>
  ";
    }

    // line 80
    public function block_appScript($context, array $blocks = array())
    {
        // line 81
        echo "    <!-- SCRIPTS -->
    <script src=\"views/app/js/asignarusuarios/asignar_user.js\"></script>

  ";
    }

    public function getTemplateName()
    {
        return "rrhh/asignar_ejecutivo/asignar_ejecutivo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 81,  129 => 80,  92 => 46,  86 => 45,  84 => 44,  79 => 43,  74 => 42,  72 => 41,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/asignar_ejecutivo/asignar_ejecutivo.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\asignar_ejecutivo\\asignar_ejecutivo.twig");
    }
}
