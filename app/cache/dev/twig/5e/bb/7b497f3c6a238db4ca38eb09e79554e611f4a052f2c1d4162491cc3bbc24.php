<?php

/* EmdsMiniBlogBundle:Default:index.html.twig */
class __TwigTemplate_5ebb7b497f3c6a238db4ca38eb09e79554e611f4a052f2c1d4162491cc3bbc24 extends Twig_Template
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
        echo " - liste des messages";
    }

    // line 4
    public function block_miniblog_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h2>Liste des messages</h2>
    <p>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", array()), "d/m/Y"), "html", null, true);
            echo " :
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EmdsMiniBlogBundle_afficher", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            // line 10
            echo "\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "titre", array()), "html", null, true);
            echo "
        </a>
        (par ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "auteur", array()), "html", null, true);
            echo ")
        <br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </p>
";
    }

    public function getTemplateName()
    {
        return "EmdsMiniBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  70 => 13,  65 => 11,  62 => 10,  60 => 9,  55 => 8,  51 => 7,  47 => 5,  44 => 4,  37 => 3,  11 => 2,);
    }
}
