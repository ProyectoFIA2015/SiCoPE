<?php

/* AcmeSicopeBundle:Prestamo:edit.html.twig */
class __TwigTemplate_6624a2bb2cd59d063f91cc3f255aa285108bf74f891d57a5c323a75f6206138f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cabecera($context, array $blocks = array())
    {
        echo "PRESTAMO";
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "      
    <div class=\"ui-field-contain\">
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </div>
        
           
    <ul data-role=\"listview\" data-inset=\"true\">
        <li data-icon=\"arrow-r\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("prestamo");
        echo "\">Regresar a la Lista</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeSicopeBundle:Prestamo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  54 => 8,  50 => 7,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
