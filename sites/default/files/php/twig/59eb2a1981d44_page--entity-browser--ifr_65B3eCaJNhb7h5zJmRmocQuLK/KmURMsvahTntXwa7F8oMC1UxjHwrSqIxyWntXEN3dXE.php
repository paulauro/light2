<?php

/* profiles/lightning/modules/contrib/entity_browser/templates/page--entity-browser--iframe.html.twig */
class __TwigTemplate_ca189b22fd172b28a4c234375425ebe40f303583abcd08d9e769af3424a540d3 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 10
        echo "<div class=\"layout-container\">

    ";
        // line 19
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
        echo "

    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 23
        echo "
        <div class=\"layout-content\">

            ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

        </div>";
        // line 29
        echo "
    </main>

</div>";
    }

    public function getTemplateName()
    {
        return "profiles/lightning/modules/contrib/entity_browser/templates/page--entity-browser--iframe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 29,  59 => 26,  54 => 23,  47 => 19,  43 => 10,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for the IFrame entity browser. Template copied from core/modules/system/templates/page.html.twig
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"layout-container\">

    {#
      We ommit most of the regions in this template, which generally includes
      messages too. Since this is not desired we try to figure out where messages
      live and display them separately.

      @see entity_browser_preprocess_page__entity_browser__iframe()
    #}
    {{ messages }}

    <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

        <div class=\"layout-content\">

            {{ page.content }}

        </div>{# /.layout-content #}

    </main>

</div>{# /.layout-container #}
";
    }
}
