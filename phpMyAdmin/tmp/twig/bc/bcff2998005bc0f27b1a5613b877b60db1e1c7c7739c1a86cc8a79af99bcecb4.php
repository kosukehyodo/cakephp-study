<?php

/* table/browse_foreigners/show_all.twig */
class __TwigTemplate_90adf9322c7a768179b13a104312ecac11d533a601022387196b8517585d67f3 extends Twig_Template
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
        if ((twig_test_iterable($this->getAttribute((isset($context["foreign_data"]) ? $context["foreign_data"] : null), "disp_row", array())) && (        // line 2
(isset($context["show_all"]) ? $context["show_all"] : null) && ($this->getAttribute((isset($context["foreign_data"]) ? $context["foreign_data"] : null), "the_total", array()) > (isset($context["max_rows"]) ? $context["max_rows"] : null))))) {
            // line 3
            echo "    <input type=\"submit\" id=\"foreign_showAll\" name=\"foreign_showAll\" value=\"";
            // line 4
            echo _gettext("Show all");
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "table/browse_foreigners/show_all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  22 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table/browse_foreigners/show_all.twig", "/home/ec2-user/environment/phpMyAdmin/templates/table/browse_foreigners/show_all.twig");
    }
}
