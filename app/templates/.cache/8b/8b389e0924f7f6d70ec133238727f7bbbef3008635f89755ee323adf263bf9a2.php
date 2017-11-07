<?php

/* rrhh/horasextra/mostrar_hora_extra.twig */
class __TwigTemplate_2bc28d4f5231d8cd70cd7f053a51bb7105d7ac980881404e89bcf6710753e4ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
                          <div id=\"modal_responder_solicitud\" class=\"modal fade\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                              <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                  <h4 class=\"modal-title\">Responder solicitud de horas extra</h4>
                                </div>
                                <div class=\"modal-body\">
                                  <form name=\"form_respuesta\" id=\"form_respuesta\" action=\"\" method=\"POST\">
                                      <center>
                                        <div class=\"form-group\">
                                            <label for=\"motivo\">Motivo de respuesta:</label>
                                            <input type=\"text\" class=\"form-control\" name=\"motivo_respuesta\" id=\"motivo_respuesta\" >
                                            <input type=\"hidden\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["id"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"id_respuesta\" id=\"id_respuesta\" >
                                        </div>
                                          <button class=\"btn btn-success\" type=\"button\" id=\"btn_aprobar\"><span>Aprobar</span></button>
                                          <button class=\"btn btn-danger\" type=\"button\" id=\"btn_rechazar\"><span>Rechazar</span></button>
                                      </center>
                                      ";
        // line 20
        $context["var"] = 1;
        // line 21
        echo "                                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 22
            echo "                                      <tr>
                                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["d"] ?? null), "solicitante", array()), "html", null, true);
            echo "</td>
                                      </tr>
                                      ";
            // line 25
            $context["var"] = ($context["var"] + 1);
            // line 26
            echo "                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                                      <label for=\"\"></label>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

";
        // line 34
        $this->displayBlock('appScript', $context, $blocks);
    }

    public function block_appScript($context, array $blocks = array())
    {
        // line 35
        echo "    <script src=\"views/app/js/horasextra/horasextra.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/mostrar_hora_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 35,  76 => 34,  67 => 27,  61 => 26,  59 => 25,  54 => 23,  51 => 22,  46 => 21,  44 => 20,  36 => 15,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/mostrar_hora_extra.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\horasextra\\mostrar_hora_extra.twig");
    }
}
