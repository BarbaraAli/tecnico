<?php

/* fichaBundle:Default:verdatos.html.twig */
class __TwigTemplate_84d75cad1fcdff4910f8f8c34d1dc481 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ficha"]) ? $context["ficha"] : $this->getContext($context, "ficha")));
        foreach ($context['_seq'] as $context["_key"] => $context["fichatecnica"]) {
            // line 2
            echo "<p>Número de Ficha: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichatecnica"]) ? $context["fichatecnica"] : $this->getContext($context, "fichatecnica")), "id"), "html", null, true);
            echo "</p>
<p>Fecha: ";
            // line 3
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fichatecnica"]) ? $context["fichatecnica"] : $this->getContext($context, "fichatecnica")), "fecha"), "d/m/Y"), "html", null, true);
            echo "</p>
<p>Solicitado por: ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichatecnica"]) ? $context["fichatecnica"] : $this->getContext($context, "fichatecnica")), "solicitado"), "html", null, true);
            echo "</p>
<p>Dependencia: ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichatecnica"]) ? $context["fichatecnica"] : $this->getContext($context, "fichatecnica")), "dependencia"), "html", null, true);
            echo "</p>
<p>Observaciones: ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichatecnica"]) ? $context["fichatecnica"] : $this->getContext($context, "fichatecnica")), "observaciones"), "html", null, true);
            echo "</p>
<p>Realizado por: ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichatecnica"]) ? $context["fichatecnica"] : $this->getContext($context, "fichatecnica")), "realizadopor"), "html", null, true);
            echo "</p>
<p>Firma de entrega: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichatecnica"]) ? $context["fichatecnica"] : $this->getContext($context, "fichatecnica")), "firmadopor"), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichatecnica'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "fichaBundle:Default:verdatos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
