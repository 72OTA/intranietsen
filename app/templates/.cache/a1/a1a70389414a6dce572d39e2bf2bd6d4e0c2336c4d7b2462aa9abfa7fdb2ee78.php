<?php

/* portal/portal.twig */
class __TwigTemplate_6207d7dd50843ab07b12ebd3a430fdc5420a21583a42a5884f788b540d696b1e extends Twig_Template
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
            'appFooter' => array($this, 'block_appFooter'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>

    ";
        // line 6
        echo "    ";
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- ANIMATE CSS  -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

    ";
        // line 37
        $this->displayBlock('appStylos', $context, $blocks);
        // line 40
        echo "
    <link href=\"views/app/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
    ";
        // line 43
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

    ";
        // line 46
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 49
        echo "
  </head>
  <body class=\"hold-transition skin-blue sidebar-mini\"> <!--<body class=\"hold-transition skin-blue sidebar-mini\">-->
    <div class=\"wrapper\">

        ";
        // line 54
        $this->displayBlock('appHead', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('appside', $context, $blocks);
        // line 61
        echo "
        ";
        // line 63
        echo "         <div class=\"content-wrapper\">
            ";
        // line 64
        $this->displayBlock('appBody', $context, $blocks);
        // line 88
        echo "        </div>


      ";
        // line 92
        echo "      ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 95
        echo "
      ";
        // line 96
        $this->loadTemplate("portal/resetpass", "portal/portal.twig", 96)->display($context);
        // line 97
        echo "    </div>
    ";
        // line 99
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 100
            echo "      ";
            // line 101
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 103
            echo "      ";
            // line 104
            echo "      <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
    ";
        }
        // line 106
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
    <script>  function changeCollapse(){
    var width = \$(document).width();
    if (width < 400) {
      \$('body').addClass('sidebar-collapse');
      \$( this ).find( 'a.sidebar-collapse' ).trigger('click');
    } else {
      \$('body').removeClass('sidebar-collapse');
    }
  }
  \$(window).resize(function(){
    changeCollapse();
  });
  \$(document).ready(function(){
    changeCollapse();
  });</script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"views/app/template/demo.js\"></script>
    <!-- Alertas -->
    <script src=\"views/app/template/jquery-confirm/jquery-confirm.min.js\"></script>

    <script src=\"views/app/js/portal/portal.js\"></script>
    ";
        // line 143
        echo "    ";
        $this->displayBlock('appScript', $context, $blocks);
        // line 146
        echo "
  </body>
</html>
";
    }

    // line 37
    public function block_appStylos($context, array $blocks = array())
    {
        // line 38
        echo "
    ";
    }

    // line 46
    public function block_appHeader($context, array $blocks = array())
    {
        // line 47
        echo "      <!-- :) -->
    ";
    }

    // line 54
    public function block_appHead($context, array $blocks = array())
    {
        // line 55
        echo "            ";
        $this->loadTemplate("portal/header", "portal/portal.twig", 55)->display($context);
        // line 56
        echo "        ";
    }

    // line 58
    public function block_appside($context, array $blocks = array())
    {
        // line 59
        echo "            ";
        $this->loadTemplate("portal/menu", "portal/portal.twig", 59)->display($context);
        // line 60
        echo "        ";
    }

    // line 64
    public function block_appBody($context, array $blocks = array())
    {
        // line 65
        echo "              <section class=\"content-header\">
              <h1>
                  ESCRITORIO
                  <small>Control panel</small>
              </h1>
              <ol class=\"breadcrumb\">
                  <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
                  <li class=\"active\">Dashboard</li>
              </ol>

              </section>
              <section class=\"content\">
                <div class=\"row\">
                  <div class=\"col-lg-12 col-xs-12\">
                    <div class=\"panel panel-info\">
                      <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">  <i class=\"icon fa fa-user\"></i> Bienvenido <strong>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array"), "html", null, true);
        echo "</strong>.</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            ";
    }

    // line 92
    public function block_appFooter($context, array $blocks = array())
    {
        // line 93
        echo "        ";
        $this->loadTemplate("portal/footer", "portal/portal.twig", 93)->display($context);
        // line 94
        echo "      ";
    }

    // line 143
    public function block_appScript($context, array $blocks = array())
    {
        // line 144
        echo "
    ";
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
        return array (  264 => 144,  261 => 143,  257 => 94,  254 => 93,  251 => 92,  240 => 81,  222 => 65,  219 => 64,  215 => 60,  212 => 59,  209 => 58,  205 => 56,  202 => 55,  199 => 54,  194 => 47,  191 => 46,  186 => 38,  183 => 37,  176 => 146,  173 => 143,  135 => 106,  131 => 104,  129 => 103,  125 => 101,  123 => 100,  120 => 99,  117 => 97,  115 => 96,  112 => 95,  109 => 92,  104 => 88,  102 => 64,  99 => 63,  96 => 61,  94 => 58,  91 => 57,  89 => 54,  82 => 49,  79 => 46,  73 => 43,  69 => 40,  67 => 37,  32 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/portal.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\portal\\portal.twig");
    }
}
