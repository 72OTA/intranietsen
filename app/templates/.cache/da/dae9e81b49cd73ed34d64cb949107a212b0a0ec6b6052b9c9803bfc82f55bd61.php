<?php

/* gerencia/gerencia.twig */
class __TwigTemplate_e4e27bf2112aef6a716acc086b8607cf6f273383e6212762f36a826e46c74cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "gerencia/gerencia.twig", 1);
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
    <h1>
      Nielsen
      <small>Reposteria</small>
    </h1>
  </section>
  <!-- Main content -->

  ";
    }

    // line 12
    public function block_appScript($context, array $blocks = array())
    {
        // line 13
        echo "    <script src=\"views/app/js/reposteria/reposteria.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "gerencia/gerencia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
  <section class=\"content-header\">
    <h1>
      Nielsen
      <small>Reposteria</small>
    </h1>
  </section>
  <!-- Main content -->

  {% endblock %}
  {% block appScript %}
    <script src=\"views/app/js/reposteria/reposteria.js\"></script>
  {% endblock %}
", "gerencia/gerencia.twig", "C:\\xampp\\htdocs\\intranietsen\\app\\templates\\gerencia\\gerencia.twig");
    }
}
