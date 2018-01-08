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
        // line 42
        $context["No"] = 1;
        // line 43
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cargos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 44
            echo "                      <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "descripcion", array()), "html", null, true);
            echo "</option>
                      ";
            // line 45
            $context["No"] = (($context["No"] ?? null) + 1);
            // line 46
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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

    // line 73
    public function block_appScript($context, array $blocks = array())
    {
        // line 74
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
        return array (  125 => 74,  122 => 73,  93 => 47,  87 => 46,  85 => 45,  80 => 44,  75 => 43,  73 => 42,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/asignar_ejecutivo/asignar_ejecutivo.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\asignar_ejecutivo\\asignar_ejecutivo.twig");
    }
}
