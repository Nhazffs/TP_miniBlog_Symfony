<?php

/* EmdsMiniBlogBundle:Default:form.html.twig */
class __TwigTemplate_7542b6363cdbddb89ab664dcc1eae0b16a5c3086bb3fe2b4c9ac09a577951b18 extends Twig_Template
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
        // line 2
        echo "<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <br /><br />
    <input type=\"submit\" />
</form>";
    }

    public function getTemplateName()
    {
        return "EmdsMiniBlogBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  19 => 2,);
    }
}
