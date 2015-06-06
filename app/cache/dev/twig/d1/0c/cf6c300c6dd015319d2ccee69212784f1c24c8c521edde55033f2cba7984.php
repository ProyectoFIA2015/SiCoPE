<?php

/* AcmeSicopeBundle:Usuario:index.html.twig */
class __TwigTemplate_d10ccf6c300c6dd015319d2ccee69212784f1c24c8c521edde55033f2cba7984 extends Twig_Template
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
        echo "USUARIO";
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
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\" class=\"ui-btn ui-btn-inline ui-icon-plus ui-btn-icon-left\">Nuevo Usuario</a>
   
    <table data-role=\"table\" id=\"movie-table\" data-filter=\"true\" data-input=\"#filterTable-input\" class=\"ui-responsive table-stripe\">
        <thead>
            <tr>
                <th data-priority=\"1\">ID</th>
                <th data-priority=\"persist\">Nombre</th>
                <th data-priority=\"2\">DUE</th>
                <th data-priority=\"3\">Carrera</th>
                <th data-priority=\"4\">Miembro</th>
                <th data-priority=\"5\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["entity"], "idusuario", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idusuario", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "due", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "carrera", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "miembro", array()), "html", null, true);
            echo "</td>
                <td>
                    <span><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["entity"], "idusuario", array()))), "html", null, true);
            echo "\" class=\"ui-btn ui-icon-edit ui-btn-icon-notext ui-corner-all\">edit</a></span>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "AcmeSicopeBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  99 => 31,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  76 => 25,  73 => 24,  69 => 23,  52 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
