<?php

/* partials/base.html.twig */
class __TwigTemplate_1c35a3b88a29ccef771894a01e6f786b5911bdfa584d6650a5dc3d0e38806a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        } else {
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        }
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 11
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "\" />

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 19
            echo "    <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <link rel=\"canonical\" href=\"";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(), "method");
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">
    <link rel=\"stylesheet\" href=\"http://brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i\">
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    

    ";
        // line 28
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/main.css"), "method");
        // line 29
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 30
        echo "    ";
        // line 31
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
</head>
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $context["home"] = $this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "home", array()), "alias", array())), "method");
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "
    <!-- content start -->

    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "    <!-- content end -->


    ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base.html.twig", 67)->display($context);
        // line 68
        echo "
</body>
</html>
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "<body>
";
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "        <a href=\"";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "\" class=\"logo-sng\"><span class=\"logo\" style=\"background-image: url(";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo ")\"></span></a>
    ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "    <div class=\"page-content\">
        <div class=\"wrapper\">
            ";
        // line 48
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    ";
    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        // line 56
        echo "    <!-- footer start -->
    <footer class=\"site-footer\">
      <a class=\"subscribe\" href=\"";
        // line 58
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/blog.rss\"> <span class=\"tooltip\"> <i class=\"fa fa-rss\"></i> Subscribe!</span></a>
        <div class=\"inner\">
             <section class=\"copyright\">All content copyright <a href=\"mailto:";
        // line 60
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "email", array());
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array());
        echo "</a> &copy; ";
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " &bull; All rights reserved.</section>
             <section class=\"poweredby\">Made with <a href=\"http://getgrav.org\"> Grav</a></section>
        </div>
    </footer>
    <!-- footer end -->
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 60,  201 => 58,  197 => 56,  194 => 55,  186 => 48,  182 => 46,  179 => 45,  169 => 40,  166 => 39,  161 => 34,  158 => 33,  151 => 68,  149 => 67,  146 => 66,  144 => 55,  139 => 52,  137 => 45,  132 => 42,  130 => 39,  127 => 38,  125 => 37,  122 => 36,  120 => 33,  114 => 31,  112 => 30,  109 => 29,  107 => 28,  99 => 23,  95 => 22,  92 => 21,  59 => 19,  55 => 18,  45 => 11,  37 => 10,  26 => 2,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getLanguage ?: 'en' }}">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*     <title>{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}</title>*/
/*     <meta name="description" content="{{ site.description }}" />*/
/* */
/*     <meta name="HandheldFriendly" content="True" />*/
/*     <meta name="MobileOptimized" content="320" />*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">*/
/* */
/*     {% for meta in page.metadata %}*/
/*     <meta {% if meta.name %}name="{{ meta.name }}" {% endif %}{% if meta.http_equiv %}http-equiv="{{ meta.http_equiv }}" {% endif %}{% if meta.charset %}charset="{{ meta.charset }}" {% endif %}{% if meta.property %}property="{{ meta.property }}" {% endif %}{% if meta.content %}content="{{ meta.content }}" {% endif %}/>*/
/*     {% endfor %}*/
/* */
/*     <link rel="canonical" href="{{ page.url() }}">*/
/*     <link rel="shortcut icon" href="{{ theme_url }}/images/favicon.png">*/
/*     <link rel="stylesheet" href="http://brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i">*/
/*     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">*/
/*     */
/* */
/*     {% do assets.addCss('theme://css/main.css') %}*/
/*     {% do assets.addCss('theme://css/custom.css') %}*/
/*     {# {% do assets.addCss('theme://css/print.css') %} #}*/
/*     {{ assets.css() }}*/
/* </head>*/
/* {% block body %}*/
/* <body>*/
/* {% endblock %}*/
/* */
/* {% set home = pages.find(config.system.home.alias) %}*/
/* */
/*     {% block header %}*/
/*         <a href="{{ base_url_relative }}" class="logo-sng"><span class="logo" style="background-image: url({{ base_url_relative }}{{ site.logo }})"></span></a>*/
/*     {% endblock %}*/
/* */
/*     <!-- content start -->*/
/* */
/*     {% block content %}*/
/*     <div class="page-content">*/
/*         <div class="wrapper">*/
/*             {{ content }}*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/*     <!-- content end -->*/
/* */
/* */
/*     {% block footer %}*/
/*     <!-- footer start -->*/
/*     <footer class="site-footer">*/
/*       <a class="subscribe" href="{{ base_url }}/blog.rss"> <span class="tooltip"> <i class="fa fa-rss"></i> Subscribe!</span></a>*/
/*         <div class="inner">*/
/*              <section class="copyright">All content copyright <a href="mailto:{{ site.email}}">{{ site.name }}</a> &copy; {{ "now"|date('Y') }} &bull; All rights reserved.</section>*/
/*              <section class="poweredby">Made with <a href="http://getgrav.org"> Grav</a></section>*/
/*         </div>*/
/*     </footer>*/
/*     <!-- footer end -->*/
/*     {% endblock %}*/
/* */
/* {% include 'partials/javascripts.html.twig' %}*/
/* */
/* </body>*/
/* </html>*/
/* */
