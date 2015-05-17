<?php

/* EmdsMiniBlogBundle:Default:supprimer.html.twig */
class __TwigTemplate_0316259f9e91ed20ac5a16e34da72939e0a2760ae6747e7e32c79b6575fb755c extends Twig_Template
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
        echo " - Supprimer un message";
    }

    // line 4
    public function block_miniblog_body($context, array $blocks = array())
    {
        // line 5
        echo "Cette page permet de supprimer le message ";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EmdsMiniBlogBundle:Default:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  44 => 4,  37 => 3,  11 => 2,);
    }
}
