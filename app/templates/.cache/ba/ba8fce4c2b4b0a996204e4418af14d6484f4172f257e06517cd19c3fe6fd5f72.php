<?php

/* rrhh/horasextra/datatables_opciones.twig */
class __TwigTemplate_669a06d8f96bcfeb0de905a6803e2f85dd655a7d780cf03643696e531bc7c676 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\$(\"#dataTables1\").dataTable({
           \"language\": {
               \"search\": \"Buscar:\",
               \"zeroRecords\": \"No hay datos para mostrar\",
               \"info\":\"Mostrando _END_ Registros, de un total de _TOTAL_ \",
               \"loadingRecords\": \"Cargando...\",
               \"processing\":\"Procesando...\",
               \"infoEmpty\":\"No hay entradas para mostrar\",
               \"lengthMenu\": \"Mostrar _MENU_ Filas\",
               \"paginate\":{
                 \"first\":\"Primera\",
                 \"last\":\"Ultima\",
                 \"next\":\"Siguiente\",
                 \"previous\":\"Anterior\",
               }
                         },
           \"autoWidth\": true
       });
</script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/datatables_opciones.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/datatables_opciones.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\rrhh\\horasextra\\datatables_opciones.twig");
    }
}
