<?php

/* partials/emailcapture.html.twig */
class __TwigTemplate_2b863d42ad66634c8ed54971db584ab6b21ae80ce9d6fa9f97b106d490b7d8e0 extends Twig_Template
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
        echo "<form id=\"email-capture\" class=\"uk-form bg-red\">
    <fieldset data-uk-margin>
        <legend class=\"c-black\">Let me know when the story opens</legend>
        <input type=\"text\" placeholder=\"your e-mail\" class=\"uk-form-large c-black bg-red\">
        <button class=\"uk-button uk-button-large c-black\">submit</button>
        <p class=\"c-black\">first chapter will be released on 26. october</p>
    </fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "partials/emailcapture.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <form id="email-capture" class="uk-form bg-red">*/
/*     <fieldset data-uk-margin>*/
/*         <legend class="c-black">Let me know when the story opens</legend>*/
/*         <input type="text" placeholder="your e-mail" class="uk-form-large c-black bg-red">*/
/*         <button class="uk-button uk-button-large c-black">submit</button>*/
/*         <p class="c-black">first chapter will be released on 26. october</p>*/
/*     </fieldset>*/
/* </form>*/
