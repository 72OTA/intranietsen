<?php

/* confirmacion/programacion/eliminar.twig */
class __TwigTemplate_d77b5d4ac900cf8a25af5ecc4a3511c39fa26391860fe1e39b414654d570a92e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"modaleliminar\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Ingresa clave de supervisor para elimar orden</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"formeliminar\" name=\"formeliminar\" class=\"form-signin\" method=\"POST\">
            <input type=\"text\"  id=\"textpassmodal\" name=\"textpassmodal\" class=\"form-control\" placeholder=\"Ingresar Password\">
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"btneliminarmodal\" name=\"btneliminarmodal\" class=\"btn btn-success\">Aceptar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/eliminar.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"modaleliminar\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Ingresa clave de supervisor para elimar orden</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"formeliminar\" name=\"formeliminar\" class=\"form-signin\" method=\"POST\">
            <input type=\"text\"  id=\"textpassmodal\" name=\"textpassmodal\" class=\"form-control\" placeholder=\"Ingresar Password\">
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"btneliminarmodal\" name=\"btneliminarmodal\" class=\"btn btn-success\">Aceptar</button>
      </div>
    </div>
  </div>
</div>
", "confirmacion/programacion/eliminar.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\confirmacion\\programacion\\eliminar.twig");
    }
}
