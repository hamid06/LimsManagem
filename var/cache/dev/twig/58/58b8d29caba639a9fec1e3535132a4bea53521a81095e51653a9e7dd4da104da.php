<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b67264900b3de7d68a0cdbf35369f51e655e6fa38d94bc93e9d787e8ed77db58 extends Twig_Template
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
        $__internal_bc6a78a6b185a2ff4f15bbd392d1115c32e178d3778163002bb4e347d3d0a82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6a78a6b185a2ff4f15bbd392d1115c32e178d3778163002bb4e347d3d0a82f->enter($__internal_bc6a78a6b185a2ff4f15bbd392d1115c32e178d3778163002bb4e347d3d0a82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_bc6a78a6b185a2ff4f15bbd392d1115c32e178d3778163002bb4e347d3d0a82f->leave($__internal_bc6a78a6b185a2ff4f15bbd392d1115c32e178d3778163002bb4e347d3d0a82f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\LIMS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
