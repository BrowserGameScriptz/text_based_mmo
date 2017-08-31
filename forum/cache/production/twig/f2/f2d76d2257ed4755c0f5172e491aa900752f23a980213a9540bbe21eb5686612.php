<?php

/* social_links.html */
class __TwigTemplate_555ace768061a4ca75b0d57bd844589bd01e93a5e6f47a8856bbc7fd150c3cc2 extends Twig_Template
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
        echo "\t\t<div class=\"socialinks\">
\t\t\t<ul>
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.youtube.com/\" title=\"Youtube\">
\t\t\t\t\t\t<i class=\"icon fp-youtube\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t</ul>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "social_links.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "social_links.html", "");
    }
}
