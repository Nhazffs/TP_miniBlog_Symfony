<?php

/* ::base.html.twig */
class __TwigTemplate_4400716424ede4f22f7e0b4f085259e3fe9bc8d77aeb5e7c8f941d6d78412614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    <body>
        <div id=\"principal\">
            <div id=\"bandeau\"></div>
            <div id=\"corps\">
                <div id=\"presentation\">
                    <h1>Mon site</h1>
                    <h2>mon blog</h2>
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("EmdsMiniBlogBundle_homepage");
        echo "\">Liste des messages</a><br />
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("EmdsMiniBlogBundle_ajouter");
        echo "\">Ajouter un message</a><br />
                </div>
                <div id=\"miniblog\">
                    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "                </div>
            </div>
        </div>
    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "</body
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Emds";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/monsite.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  90 => 23,  83 => 7,  80 => 6,  74 => 5,  68 => 28,  66 => 27,  61 => 24,  59 => 23,  53 => 20,  49 => 19,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
