<?php

/* portal/portal.twig */
class __TwigTemplate_96f01f46e0e68070ca5a042435b22570b6875959218c42f061bdf7c9618860a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
            'appHeader' => array($this, 'block_appHeader'),
            'appHead' => array($this, 'block_appHead'),
            'appside' => array($this, 'block_appside'),
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
            'appFooter' => array($this, 'block_appFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    ";
        // line 5
        echo "    ";
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 11
        echo "    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"views/app/template/bootstrap/dist/css/bootstrap.min.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"views/app/template/font-awesome/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"views/app/template/Ionicons/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"views/app/template/AdminLTE.min.css\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"views/app/template/skins/_all-skins.min.css\">
    <!-- Alertas -->
    <link rel=\"stylesheet\" href=\"views/app/template/jquery-confirm/jquery-confirm.min.css\">

    ";
        // line 25
        $this->displayBlock('appStylos', $context, $blocks);
        // line 28
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

    <link href=\"views/app/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
    ";
        // line 41
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

    ";
        // line 44
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 47
        echo "
  </head>
  <body class=\"hold-transition skin-blue sidebar-mini sidebar-collapse\">
    <div class=\"wrapper\">
        ";
        // line 51
        $this->displayBlock('appHead', $context, $blocks);
        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('appside', $context, $blocks);
        // line 58
        echo "
        ";
        // line 60
        echo "         <div class=\"content-wrapper\">
            ";
        // line 61
        $this->displayBlock('appBody', $context, $blocks);
        // line 78
        echo "        </div>

    </div>

    ";
        // line 82
        $this->loadTemplate("portal/resetpass", "portal/portal.twig", 82)->display($context);
        // line 83
        echo "
    ";
        // line 85
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 86
            echo "      ";
            // line 87
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 89
            echo "      ";
            // line 90
            echo "      <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
    ";
        }
        // line 92
        echo "
    <!-- jQuery UI 1.11.4 -->
    <script src=\"views/app/template/jquery-ui/jquery-ui.min.js\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"views/app/template/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- Slimscroll -->
    <script src=\"views/app/template/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
    <!-- FastClick -->
    <script src=\"views/app/template/fastclick/lib/fastclick.js\"></script>
    <!-- AdminLTE App -->
    <script src=\"views/app/template/adminlte.min.js\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"views/app/template/demo.js\"></script>
    <!-- Alertas -->
    <script src=\"views/app/template/jquery-confirm/jquery-confirm.min.js\"></script>

    <script src=\"views/app/js/portal/portal.js\"></script>
    ";
        // line 113
        $this->displayBlock('appScript', $context, $blocks);
        // line 116
        echo "
    ";
        // line 118
        echo "
    ";
        // line 120
        echo "    ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 123
        echo "  </body>
</html>
";
    }

    // line 25
    public function block_appStylos($context, array $blocks = array())
    {
        // line 26
        echo "
    ";
    }

    // line 44
    public function block_appHeader($context, array $blocks = array())
    {
        // line 45
        echo "      <!-- :) -->
    ";
    }

    // line 51
    public function block_appHead($context, array $blocks = array())
    {
        // line 52
        echo "            ";
        $this->loadTemplate("portal/header", "portal/portal.twig", 52)->display($context);
        // line 53
        echo "        ";
    }

    // line 55
    public function block_appside($context, array $blocks = array())
    {
        // line 56
        echo "            ";
        $this->loadTemplate("portal/menu", "portal/portal.twig", 56)->display($context);
        // line 57
        echo "        ";
    }

    // line 61
    public function block_appBody($context, array $blocks = array())
    {
        // line 62
        echo "            <section class=\"content-header\">
                <h1>
                    ESCRITORIO
                    <small>Control panel</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Inicio </a></li>
                    <li class=\"active\">Dashboard</li>
                </ol>

                </section>
                <!-- Main content -->
                <section class=\"content\">
                </section>
            <!-- /.content -->
            ";
    }

    // line 113
    public function block_appScript($context, array $blocks = array())
    {
        // line 114
        echo "
    ";
    }

    // line 120
    public function block_appFooter($context, array $blocks = array())
    {
        // line 121
        echo "      ";
        $this->loadTemplate("portal/footer", "portal/portal.twig", 121)->display($context);
        // line 122
        echo "    ";
    }

    public function getTemplateName()
    {
        return "portal/portal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 122,  237 => 121,  234 => 120,  229 => 114,  226 => 113,  207 => 62,  204 => 61,  200 => 57,  197 => 56,  194 => 55,  190 => 53,  187 => 52,  184 => 51,  179 => 45,  176 => 44,  171 => 26,  168 => 25,  162 => 123,  159 => 120,  156 => 118,  153 => 116,  151 => 113,  128 => 92,  124 => 90,  122 => 89,  118 => 87,  116 => 86,  113 => 85,  110 => 83,  108 => 82,  102 => 78,  100 => 61,  97 => 60,  94 => 58,  92 => 55,  89 => 54,  87 => 51,  81 => 47,  78 => 44,  72 => 41,  58 => 28,  56 => 25,  40 => 11,  31 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
  <head>
    {# Formato #}
    {{ base_assets()|raw }}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {# Estilos #}
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"views/app/template/bootstrap/dist/css/bootstrap.min.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"views/app/template/font-awesome/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"views/app/template/Ionicons/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"views/app/template/AdminLTE.min.css\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"views/app/template/skins/_all-skins.min.css\">
    <!-- Alertas -->
    <link rel=\"stylesheet\" href=\"views/app/template/jquery-confirm/jquery-confirm.min.css\">

    {% block appStylos %}

    {% endblock %}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

    <link href=\"views/app/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
    {# Título #}
    <title>{{ config.site.name }}</title>

    {# Extras en el header #}
    {% block appHeader %}
      <!-- :) -->
    {% endblock %}

  </head>
  <body class=\"hold-transition skin-blue sidebar-mini sidebar-collapse\">
    <div class=\"wrapper\">
        {% block appHead %}
            {% include 'portal/header' %}
        {% endblock %}

        {% block appside %}
            {% include 'portal/menu' %}
        {% endblock %}

        {# Contenido real #}
         <div class=\"content-wrapper\">
            {% block appBody %}
            <section class=\"content-header\">
                <h1>
                    ESCRITORIO
                    <small>Control panel</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Inicio </a></li>
                    <li class=\"active\">Dashboard</li>
                </ol>

                </section>
                <!-- Main content -->
                <section class=\"content\">
                </section>
            <!-- /.content -->
            {% endblock %}
        </div>

    </div>

    {% include 'portal/resetpass' %}

    {# Carga de jQuery #}
    {% if config.framework.debug %}
      {# jQuery para ver errores de ajax vía consola, no eliminar #}
      <script src=\"views/app/js/jdev.min.js\"></script>
    {% else %}
      {# jQuery para su plantilla, este puede ser modificado a voluntad #}
      <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
    {% endif %}

    <!-- jQuery UI 1.11.4 -->
    <script src=\"views/app/template/jquery-ui/jquery-ui.min.js\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"views/app/template/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- Slimscroll -->
    <script src=\"views/app/template/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
    <!-- FastClick -->
    <script src=\"views/app/template/fastclick/lib/fastclick.js\"></script>
    <!-- AdminLTE App -->
    <script src=\"views/app/template/adminlte.min.js\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"views/app/template/demo.js\"></script>
    <!-- Alertas -->
    <script src=\"views/app/template/jquery-confirm/jquery-confirm.min.js\"></script>

    <script src=\"views/app/js/portal/portal.js\"></script>
    {% block appScript %}

    {% endblock %}

    {# Scripts globales #}

    {# Footer #}
    {% block appFooter %}
      {% include 'portal/footer' %}
    {% endblock %}
  </body>
</html>
", "portal/portal.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\portal\\portal.twig");
    }
}
