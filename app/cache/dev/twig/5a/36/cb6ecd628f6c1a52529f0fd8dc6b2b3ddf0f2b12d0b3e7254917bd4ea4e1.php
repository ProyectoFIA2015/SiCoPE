<?php

/* AcmeSicopeBundle:Equipo:index.html.twig */
class __TwigTemplate_5a36cb6ecd628f6c1a52529f0fd8dc6b2b3ddf0f2b12d0b3e7254917bd4ea4e1 extends Twig_Template
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
        echo "EQUIPO";
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
        echo $this->env->getExtension('routing')->getPath("equipo_new");
        echo "\" class=\"ui-btn ui-btn-inline ui-icon-plus ui-btn-icon-left\">Nuevo Equipo</a>
   
    <table data-role=\"table\" id=\"movie-table\" data-filter=\"true\" data-input=\"#filterTable-input\" class=\"ui-responsive table-stripe\">
        <thead>
            <tr>
                <th data-priority=\"persist\">Codigo</th>
                <th data-priority=\"2\">Nombre</th>
                <th data-priority=\"3\">Marca</th>
                <th data-priority=\"4\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marca", array()), "html", null, true);
            echo "</td>
                <td>
                    <span><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipo_edit", array("id" => $this->getAttribute($context["entity"], "idequipo", array()))), "html", null, true);
            echo "\" class=\"ui-btn ui-icon-edit ui-btn-icon-notext ui-corner-all\">edit</a></span>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "AcmeSicopeBundle:Equipo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  87 => 27,  82 => 25,  78 => 24,  74 => 23,  71 => 22,  67 => 21,  52 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
