<?php

/* EmdsMiniBlogBundle:Default:modifier.html.twig */
class __TwigTemplate_da13bf146a5de724bb2cf8c8909e174b38dcfa953fed73198af73ce44814a0eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("EmdsMiniBlogBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'miniblog_body' => array($this, 'block_miniblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EmdsMiniBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Modifier un message";
    }

    // line 4
    public function block_miniblog_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h2> Modifier le message </h2>
<br />
";
        // line 7
        $this->env->loadTemplate("EmdsMiniBlogBundle:Default:form.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "EmdsMiniBlogBundle:Default:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 5,  44 => 4,  37 => 3,  11 => 2,);
    }
}
