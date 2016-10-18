<?php

/* partials/footer.html.twig */
class __TwigTemplate_b4a3072097d9b451d72b5b936b7d4be1841c17a5d0fa42ef6df1bfbed7de6790 extends Twig_Template
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
        echo "<div class=\"footer\">
\t<img src=\"";
        // line 2
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/fb-footer-link.svg\" alt=\"\">
\t<img src=\"";
        // line 3
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/fb-sngweb-link.svg\" alt=\"\">
</div>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="footer">*/
/* 	<img src="{{ theme_url }}/images/fb-footer-link.svg" alt="">*/
/* 	<img src="{{ theme_url }}/images/fb-sngweb-link.svg" alt="">*/
/* </div>*/
