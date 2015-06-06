<?php

/* ::base.html.twig */
class __TwigTemplate_035c64a0b3dee240b406a96817f1486a45d782cb31a1669eea0cf715d9c2a60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.mobile-1.4.5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.mobile.datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mobile-1.4.5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery_ui_datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mobile.datepicker.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/proyectoGTDL.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div data-role=\"page\" id=\"principal\">
            <div data-role=\"header\" data-theme=\"b\" data-position=\"fixed\">
                <h1>";
        // line 22
        $this->displayBlock('cabecera', $context, $blocks);
        echo "</h1>
                <a href=\"#nav-panel\" data-icon=\"bars\" data-iconpos=\"notext\">Menu</a>
                <a href=\"#add-form\" data-icon=\"gear\" data-iconpos=\"notext\">Add</a>
            </div>
        
            <div role=\"main\" class=\"ui-content jqm-content jqm-fullwidth\">
                ";
        // line 28
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 29
        echo "                 <div data-demo-html=\"#panel-responsive-page1\"></div>
            </div>
            
            <div data-role=\"footer\">
                <h4>ASEISI  2015</h4>
            </div>
            
            <div data-role=\"panel\" data-position-fixed=\"true\" data-display=\"push\" data-theme=\"b\" id=\"nav-panel\">
                <ul data-role=\"listview\">
                    <li data-icon=\"delete\"><a href=\"#\" data-rel=\"close\">Cerrar Menú</a></li>
                        <li data-icon=\"home\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("prestamo");
        echo "\" data-theme=\"b\">Principal</a></li>
                        <li data-icon=\"carat-r\"><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("equipo");
        echo "\" data-theme=\"a\">Equipo</a></li>
                        <li data-icon=\"carat-r\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "\" data-theme=\"a\">Usuarios</a></li>       
                </ul>
            </div>
            <div data-role=\"panel\" data-position=\"right\" data-display=\"reveal\" data-theme=\"a\" id=\"add-form\">
                <form class=\"userform\">
                    <h2>Login</h2>
                    <label for=\"name\">Username:</label>
                    <input type=\"text\" name=\"name\" id=\"name\" value=\"\" data-clear-btn=\"true\" data-mini=\"true\">
        
                    <label for=\"password\">Password:</label>
                    <input type=\"password\" name=\"password\" id=\"password\" value=\"\" data-clear-btn=\"true\" autocomplete=\"off\" data-mini=\"true\">
        
                    <div class=\"ui-grid-a\">
                        <div class=\"ui-block-a\"><a href=\"#\" data-rel=\"close\" class=\"ui-btn ui-shadow ui-corner-all ui-btn-b ui-mini\">Cancel</a></div>
                        <div class=\"ui-block-b\"><a href=\"#\" data-rel=\"close\" class=\"ui-btn ui-shadow ui-corner-all ui-btn-a ui-mini\">Save</a></div>
                    </div>
                </form>
            </div>
        </div>
        
        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "        
        
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "SiCoPE";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 22
    public function block_cabecera($context, array $blocks = array())
    {
        echo "TITULO";
    }

    // line 28
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "CONTENIDO";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 61,  164 => 28,  158 => 22,  153 => 15,  148 => 9,  142 => 6,  134 => 62,  132 => 61,  109 => 41,  105 => 40,  101 => 39,  89 => 29,  87 => 28,  78 => 22,  70 => 17,  67 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  46 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  25 => 1,);
    }
}
