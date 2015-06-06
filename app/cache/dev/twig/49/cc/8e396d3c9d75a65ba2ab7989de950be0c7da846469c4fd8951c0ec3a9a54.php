<?php

/* AcmeSicopeBundle:Prestamo:index.html.twig */
class __TwigTemplate_49cc8e396d3c9d75a65ba2ab7989de950be0c7da846469c4fd8951c0ec3a9a54 extends Twig_Template
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
        echo "    <form>
        <input id=\"filterTable-input\" data-type=\"search\">
    </form>
    
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("prestamo_new");
        echo "\" class=\"ui-btn ui-btn-inline ui-icon-plus ui-btn-icon-left\">Nuevo Prestamo</a>
   
    <table data-role=\"table\" id=\"movie-table\" data-filter=\"true\" data-input=\"#filterTable-input\" class=\"ui-responsive table-stripe\">
        <thead>
            <tr>
                <th data-priority=\"1\">ID</th>
                <th data-priority=\"persist\">Fecha Prestamo</th>
                <th data-priority=\"2\">Fecha Devolucion</th>
                <th data-priority=\"3\">Descripcion</th>
                <th data-priority=\"4\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestamo_show", array("id" => $this->getAttribute($context["entity"], "idprestamo", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idprestamo", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            if ($this->getAttribute($context["entity"], "fechaprestamo", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaprestamo", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["entity"], "fechadevolucion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechadevolucion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>
                    <span><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestamo_show", array("id" => $this->getAttribute($context["entity"], "idprestamo", array()))), "html", null, true);
            echo "\" class=\"ui-btn ui-icon-eye ui-btn-icon-notext ui-corner-all\">show</a></span>
                    <span><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestamo_edit", array("id" => $this->getAttribute($context["entity"], "idprestamo", array()))), "html", null, true);
            echo "\" class=\"ui-btn ui-icon-edit ui-btn-icon-notext ui-corner-all\">edit</a></span>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "AcmeSicopeBundle:Prestamo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  102 => 30,  98 => 29,  93 => 27,  87 => 26,  81 => 25,  75 => 24,  72 => 23,  68 => 22,  52 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
