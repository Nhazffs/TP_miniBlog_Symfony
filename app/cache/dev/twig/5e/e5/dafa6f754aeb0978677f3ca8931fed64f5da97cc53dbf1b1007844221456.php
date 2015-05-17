<?php

/* EmdsMiniBlogBundle:Default:afficher.html.twig */
class __TwigTemplate_5ee5dafa6f754aeb0978677f3ca8931fed64f5da97cc53dbf1b1007844221456 extends Twig_Template
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
        echo " - Affiche le message";
    }

    // line 5
    public function block_miniblog_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "titre", array()), "html", null, true);
        echo "</h2>
date : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "date", array()), "d/m/Y"), "html", null, true);
        echo " <br />
auteur : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "auteur", array()), "html", null, true);
        echo " <br /><br /><br />
<p>
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "contenu", array()), "html", null, true);
        echo "
</p>
<br /><br />
<p>
    <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EmdsMiniBlogBundle_modifier", array("id" => $this->getAttribute($this->getContext($context, "message"), "id", array()))), "html", null, true);
        echo "\"> modifier ce message </a>
    <br />
    <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EmdsMiniBlogBundle_supprimer", array("id" => $this->getAttribute($this->getContext($context, "message"), "id", array()))), "html", null, true);
        echo "\"> supprimer ce message </a>
</p>
";
    }

    public function getTemplateName()
    {
        return "EmdsMiniBlogBundle:Default:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  68 => 14,  61 => 10,  56 => 8,  52 => 7,  47 => 6,  44 => 5,  37 => 3,  11 => 2,);
    }
}
