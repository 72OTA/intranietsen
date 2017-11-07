<?php

/* rrhh/horasextra/modificar_solicitud_hora_extra.twig */
class __TwigTemplate_202bb401409ee81fd7e36747711400efc0e860ab9b47c83e91e8a97196cc25ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/modificar_solicitud_hora_extra.twig", 1);
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
      <i class=\"fa fa-user\"></i> MODIFICAR SOLICITUD DE HORAS EXTRA
    </h4>
    <ol class=\"breadcrumb\">
      <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
      <li><a href=\"rrhh/horasextra\"> Horas Extra </a></li>
      <li class=\"active\"> Modificar la solicitud </li>
    </ol>
</section>
    <section class=\"content-header\">
      <div class=\"tab-pane active\" id=\"tab_1-1\">
          <b>Modificar la peticion</b>
          <div id=\"bloque_registro\"></div>
          <div class=\"box box-info\">
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-md-2\"></div>
                      <div class=\"col-md-8\" id=\"main\">
                        <br>
                          <form name=\"form_modificar\" id=\"form_modificar\" action=\"\" method=\"POST\">
                                  <input type=\"hidden\" class=\"form-control\" name=\"rut\" id=\"rut\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "rut", array()), "html", null, true);
        echo "\">
                                    <div class=\"form-group\">
                                      <label>RUT:</label>
                                  <input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "rut", array()), "html", null, true);
        echo "\">
                                </div>
                                  <div class=\"form-group\">
                                      <label for=\"tiempo\">Fecha:</label>
                                      <input type=\"date\" class=\"form-control\" name=\"fecha\" id=\"fecha\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "fecha", array()), "html", null, true);
        echo "\" required>
                                  </div>
                              <div class=\"form-group\">
                                  <label for=\"dcorta\">Desde:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechad\" id=\"fechad\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "fechad", array())), "html", null, true);
        echo "\" required>
                              </div>
                              <div class=\"form-group\">
                                  <label for=\"dcorta\">Hasta:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechah\" id=\"fechah\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "fechah", array()), "html", null, true);
        echo "\" required>
                              </div>
                              <div class=\"form-group\">
                                  <input type=\"hidden\" class=\"form-control\" name=\"solicitante\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "solicitante", array()), "html", null, true);
        echo "\" id=\"solicitante\" required>
                                  <label>Solicitante:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "solicitante", array()), "html", null, true);
        echo "\" disabled>
                                </div>
                              <div class=\"form-group\">
                                  <label for=\"motivo\">Motivo:</label>
                                  <input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\"  value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "motivo", array()), "html", null, true);
        echo "\" >
                                  <input type=\"hidden\" class=\"form-control\" name=\"id\" id=\"id\"  value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "id", array()), "html", null, true);
        echo "\" >
                              </div>
                              <center>
                                  <button class=\"btn btn-success\" type=\"button\" id=\"btn_modificar\"><span>Modificar</span></button>

                              </center>
                          </form>
                          <div id=\"resultado\"></div>
                      </div>
                  </div>
              </div>

              <br>
              <br>
              <hr>
          </div>

          <div id=\"bloque_registro\"></div>
      </div>
    </section>

    <!-- Main content -->
    <section class=\"content\">
    </section>
    <!-- /.content -->

";
    }

    // line 76
    public function block_appScript($context, array $blocks = array())
    {
        // line 77
        echo "    <script src=\"views/app/js/horasextra/horasextra.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/modificar_solicitud_hora_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 77,  135 => 76,  104 => 49,  100 => 48,  93 => 44,  88 => 42,  82 => 39,  75 => 35,  68 => 31,  61 => 27,  55 => 24,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/modificar_solicitud_hora_extra.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\horasextra\\modificar_solicitud_hora_extra.twig");
    }
}
