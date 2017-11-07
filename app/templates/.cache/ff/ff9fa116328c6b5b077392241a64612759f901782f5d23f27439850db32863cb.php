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
        echo "<section class=\"content-header\">
    <h4>
    <i class=\"fa fa-th\"></i> ASIGNAR EJECUTIVOS
    </h4>
    </section>

        <section class=\"content\">

          <!-- Default box -->
          <div class=\"box\">
            <div class=\"box-header with-border\">

              <div class=\"box-tools pull-right\">
                <button class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\"><i class=\"fa fa-minus\"></i></button>
              </div>
            </div>

             <div class=\"box-body\">

              <!-- Custom Tabs (Pulled to the right) -->
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs pull-rigth\">
                  <li class=\"active\"><a href=\"#tab_2-2\" data-toggle=\"tab\">Seleccione perfil para filtrar</a></li>

                  <li class=\"pull-left header\"></li>
                </ul>
                <div class=\"tab-content\">
                  <div class=\"tab-pane active\" id=\"tab_1-1\">

                        <form name=\"filtra_usuario_perfil\" action=\"\" method=\"POST\" onsubmit=\"consulta_carga(); return false\">
                            <label>
                                <select name='perfil' id='perfil' onchange='consulta_carga(); return false'>
                                  <option selected='selected'>--</option>
                                  ";
        // line 36
        $context["No"] = 1;
        // line 37
        echo "                                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cargos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 38
            echo "                                  <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "descripcion", array()), "html", null, true);
            echo "</option>
                                  ";
            // line 39
            $context["No"] = (($context["No"] ?? null) + 1);
            // line 40
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </label>
                            <input type='button' name='Submit' value='Consultar' id='submit' onclick=\"consulta_carga(); return false\"/>
                        </form>
                        <div id=\"resultado\"></div>

                  </div><!-- /.tab-pane -->
                  </div>
                 </div>
              </div>
            </div>
    </section>
  ";
    }

    // line 53
    public function block_appScript($context, array $blocks = array())
    {
        // line 54
        echo "  <!-- SCRIPTS -->
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
        return array (  105 => 54,  102 => 53,  87 => 41,  81 => 40,  79 => 39,  74 => 38,  69 => 37,  67 => 36,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/asignar_ejecutivo/asignar_ejecutivo.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\asignar_ejecutivo\\asignar_ejecutivo.twig");
    }
}
