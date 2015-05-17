<?php

/* EmdsMiniBlogBundle:Default:ajouter.html.twig */
class __TwigTemplate_693b149f01919aabb78d76e5ce8f6457cd6de0158e83481efac292ccbeaa2d2e extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajouter un message";
    }

    // line 5
    public function block_miniblog_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>Ajout d'un message</h2>
    <br />
    ";
        // line 8
        $this->env->loadTemplate("EmdsMiniBlogBundle:Default:form.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "EmdsMiniBlogBundle:Default:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  47 => 6,  44 => 5,  37 => 4,  11 => 2,);
    }
}
