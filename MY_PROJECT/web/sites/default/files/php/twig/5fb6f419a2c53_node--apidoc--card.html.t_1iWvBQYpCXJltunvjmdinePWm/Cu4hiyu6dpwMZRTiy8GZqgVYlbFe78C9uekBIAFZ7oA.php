<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig */
class __TwigTemplate_1019d7e6def309fdc27f27889ba7737abb79cd3668dc659e82b1568e738a2414 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 17, "include" => 22];
        $filters = ["escape" => 18, "without" => 27];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['escape', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        // line 14
        return "apigee-entity.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("apigee-entity.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "
  ";
        // line 17
        ob_start(function () { return ''; });
        // line 18
        echo "    <h2 class=\"card-title\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["entity"] ?? null), "label", [])), "html", null, true);
        echo "</h2>
  ";
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "  ";
        $context["image"] = ((($this->getAttribute(($context["content"] ?? null), "field_image", [], "any", true, true) &&  !(null === $this->getAttribute(($context["content"] ?? null), "field_image", [])))) ? ($this->getAttribute(($context["content"] ?? null), "field_image", [])) : ($this->getAttribute(($context["content"] ?? null), "field_image_apidoc", [])));
        // line 21
        echo "
  ";
        // line 22
        $this->loadTemplate("@apigee-kickstart/card/card.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig", 22)->display(twig_array_merge($context, ["classes" => [0 => "api-card"], "url" => $this->getAttribute($this->getAttribute(        // line 24
($context["content"] ?? null), "field_apidoc_file_link", []), "#url", [], "array"), "title" =>         // line 25
($context["title"] ?? null), "image" =>         // line 26
($context["image"] ?? null), "body" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter(        // line 27
($context["content"] ?? null), "title", "field_image", "field_image_apidoc", "field_apidoc_file_link", "field_apidoc_spec"), "footer" => $this->getAttribute($this->getAttribute(        // line 28
($context["content"] ?? null), "field_apidoc_file_link", []), "#title", [], "array"), "hover_shadow" => true]));
    }

    public function getTemplateName()
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  88 => 27,  87 => 26,  86 => 25,  85 => 24,  84 => 22,  81 => 21,  78 => 20,  72 => 18,  70 => 17,  67 => 16,  64 => 15,  54 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--apidoc--card.html.twig", "C:\\Users\\charl\\MY_PROJECT\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\templates\\node\\node--apidoc--card.html.twig");
    }
}
