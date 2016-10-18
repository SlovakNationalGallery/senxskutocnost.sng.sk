<?php

/* landing.html.twig */
class __TwigTemplate_369c26c8ef90986fc3844a0e51e70d85c699f458a5874673e8eeb6dfeee96c91 extends Twig_Template
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
        $this->loadTemplate("landing.html.twig", "landing.html.twig", 1, "625336187")->display($context);
    }

    public function getTemplateName()
    {
        return "landing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* landing.html.twig */
class __TwigTemplate_369c26c8ef90986fc3844a0e51e70d85c699f458a5874673e8eeb6dfeee96c91_625336187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "landing.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<body itemscope itemtype=\"http://schema.org/Article\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <main class=\"content ";
        echo (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) ? ("tag-articleimage") : (""));
        echo "\" role=\"main\">


      <article class=\"landing\">

        <div class=\"landing-image\">
          <div class=\"landing-image-image\" style=\"background-image: url(";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) {
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "url", array());
        }
        echo ")\"></div>
          
          <div class=\"landing-content centered uk-width-8-10\">
              <div>
                <h1 class=\"c-white\">Sen <img src=\"";
        // line 18
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/headline-logo.svg\" alt=\"X\" class=\"headline-logo\"> Skutocnost</h1>
                <h2 class=\"c-white\">";
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subTitle", array());
        echo "</h2>
                <h3 class=\"c-grey\">";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subSubTitle", array());
        echo "</h3>
              </div>

              ";
        // line 23
        $this->loadTemplate("partials/emailcapture.html.twig", "landing.html.twig", 23)->display($context);
        // line 24
        echo "              
              <button class=\"uk-button button-ghost\" type=\"button\">Share</button>
            
          </div>

          <div id=\"chapter-preview\" class=\"uk-grid centered c-white \">
            <div class=\"uk-width-1-4 chapter-thumb\">
              <h5>1. chapter name</h5>
              <p>26. october</p>
              <img src=\"";
        // line 33
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "sxs-bg.jpg", array(), "array"), "grayscale", array()), "url", array());
        echo "\" alt=\"chapter 1\">
            </div>

            <div class=\"uk-width-1-4 chapter-thumb\">
              <h5>2. chapter name</h5>
              <p>26. october</p>
              <img src=\"";
        // line 39
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "sxs-bg.jpg", array(), "array"), "grayscale", array()), "url", array());
        echo "\" alt=\"chapter 1\">
            </div>

            <div class=\"uk-width-1-4 chapter-thumb\">
              <h5>3. chapter name</h5>
              <p>26. october</p>
              <img src=\"";
        // line 45
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "sxs-bg.jpg", array(), "array"), "grayscale", array()), "url", array());
        echo "\" alt=\"chapter 1\">
            </div>

            <div class=\"uk-width-1-4 chapter-thumb\">
              <h5>4. chapter name</h5>
              <p>26. october</p>
              <img src=\"";
        // line 51
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "sxs-bg.jpg", array(), "array"), "grayscale", array()), "url", array());
        echo "\" alt=\"chapter 1\">
            </div>
          </div>
        </div> ";
        // line 55
        echo "      </article>
    </main>
    ";
        // line 57
        $this->loadTemplate("partials/footer.html.twig", "landing.html.twig", 57)->display($context);
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 60,  154 => 57,  150 => 55,  144 => 51,  135 => 45,  126 => 39,  117 => 33,  106 => 24,  104 => 23,  98 => 20,  94 => 19,  90 => 18,  81 => 14,  71 => 8,  68 => 7,  63 => 4,  60 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <body itemscope itemtype="http://schema.org/Article">*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <main class="content {{ page.header.image ? 'tag-articleimage' : '' }}" role="main">*/
/* */
/* */
/*       <article class="landing">*/
/* */
/*         <div class="landing-image">*/
/*           <div class="landing-image-image" style="background-image: url({% if page.header.image %}{{ page.media[page.header.image].url }}{% endif %})"></div>*/
/*           */
/*           <div class="landing-content centered uk-width-8-10">*/
/*               <div>*/
/*                 <h1 class="c-white">Sen <img src="{{ theme_url }}/images/headline-logo.svg" alt="X" class="headline-logo"> Skutocnost</h1>*/
/*                 <h2 class="c-white">{{ page.header.subTitle }}</h2>*/
/*                 <h3 class="c-grey">{{ page.header.subSubTitle }}</h3>*/
/*               </div>*/
/* */
/*               {% include 'partials/emailcapture.html.twig' %}*/
/*               */
/*               <button class="uk-button button-ghost" type="button">Share</button>*/
/*             */
/*           </div>*/
/* */
/*           <div id="chapter-preview" class="uk-grid centered c-white ">*/
/*             <div class="uk-width-1-4 chapter-thumb">*/
/*               <h5>1. chapter name</h5>*/
/*               <p>26. october</p>*/
/*               <img src="{{ page.media['sxs-bg.jpg'].grayscale.url }}" alt="chapter 1">*/
/*             </div>*/
/* */
/*             <div class="uk-width-1-4 chapter-thumb">*/
/*               <h5>2. chapter name</h5>*/
/*               <p>26. october</p>*/
/*               <img src="{{ page.media['sxs-bg.jpg'].grayscale.url }}" alt="chapter 1">*/
/*             </div>*/
/* */
/*             <div class="uk-width-1-4 chapter-thumb">*/
/*               <h5>3. chapter name</h5>*/
/*               <p>26. october</p>*/
/*               <img src="{{ page.media['sxs-bg.jpg'].grayscale.url }}" alt="chapter 1">*/
/*             </div>*/
/* */
/*             <div class="uk-width-1-4 chapter-thumb">*/
/*               <h5>4. chapter name</h5>*/
/*               <p>26. october</p>*/
/*               <img src="{{ page.media['sxs-bg.jpg'].grayscale.url }}" alt="chapter 1">*/
/*             </div>*/
/*           </div>*/
/*         </div> {# /div.landing-image #}*/
/*       </article>*/
/*     </main>*/
/*     {% include 'partials/footer.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}{% endblock %}*/
/* */
/* {% endembed %}*/
/* */
