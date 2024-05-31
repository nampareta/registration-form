<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/ebt_tabs/templates/block--block-content--ebt-tabs.html.twig */
class __TwigTemplate_297e406d010401f184046f08f3eec50c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
";
        // line 30
        $context["classes"] = [0 => "block", 1 => "ebt-block", 2 => ("ebt-block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["plugin_id"] ?? null), 33, $this->source))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 34
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 34), 34, $this->source))), 4 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 35
($context["plugin_id"] ?? null), 35, $this->source))), 5 => ("plugin-id-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["plugin_id"] ?? null), 36, $this->source))), 6 => ("ebt-tabs-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 37
($context["content"] ?? null), "field_ebt_settings", [], "any", false, false, true, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#object"] ?? null) : null), "field_ebt_settings", [], "any", false, false, true, 37), "ebt_settings", [], "any", false, false, true, 37), "styles", [], "any", false, false, true, 37), 37, $this->source))];
        // line 40
        echo "
";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_ebt_settings", [], "any", false, false, true, 41)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#object"] ?? null) : null), "field_ebt_settings", [], "any", false, false, true, 41), "ebt_settings", [], "any", false, false, true, 41), "styles", [], "any", false, false, true, 41) == "without_header_background")) {
            // line 42
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ebt_tabs/without_header_background"), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 43
($context["content"] ?? null), "field_ebt_settings", [], "any", false, false, true, 43)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#object"] ?? null) : null), "field_ebt_settings", [], "any", false, false, true, 43), "ebt_settings", [], "any", false, false, true, 43), "styles", [], "any", false, false, true, 43) == "minimalist_tabs")) {
            // line 44
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ebt_tabs/minimalist_tabs"), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 45
($context["content"] ?? null), "field_ebt_settings", [], "any", false, false, true, 45)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#object"] ?? null) : null), "field_ebt_settings", [], "any", false, false, true, 45), "ebt_settings", [], "any", false, false, true, 45), "styles", [], "any", false, false, true, 45) == "tabs_like_buttons")) {
            // line 46
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ebt_tabs/tabs_like_buttons"), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 47
($context["content"] ?? null), "field_ebt_settings", [], "any", false, false, true, 47)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#object"] ?? null) : null), "field_ebt_settings", [], "any", false, false, true, 47), "ebt_settings", [], "any", false, false, true, 47), "styles", [], "any", false, false, true, 47) == "vertical_tabs")) {
            // line 48
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ebt_tabs/vertical_tabs"), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 49
($context["content"] ?? null), "field_ebt_settings", [], "any", false, false, true, 49)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#object"] ?? null) : null), "field_ebt_settings", [], "any", false, false, true, 49), "ebt_settings", [], "any", false, false, true, 49), "styles", [], "any", false, false, true, 49) == "vertical_tabs_rotated")) {
            // line 50
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ebt_tabs/vertical_tabs_rotated"), "html", null, true);
            echo "
";
        }
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ebt_tabs/jquery_ui_tabs"), "html", null, true);
        echo "

<div";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
        echo ">
  <div class=\"bg-inner\"></div>
  <div class=\"ebt-container\">
    ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 57, $this->source), "html", null, true);
        echo "
    ";
        // line 58
        if (($context["label"] ?? null)) {
            // line 59
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 59, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 59, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 61
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 61, $this->source), "html", null, true);
        echo "
    ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "  </div>
</div>
";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["styles"] ?? null), 67, $this->source));
        echo "
";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 63, $this->source), "field_ebt_settings"), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/ebt_tabs/templates/block--block-content--ebt-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 63,  131 => 62,  125 => 67,  121 => 65,  119 => 62,  114 => 61,  106 => 59,  104 => 58,  100 => 57,  94 => 54,  89 => 52,  83 => 50,  81 => 49,  76 => 48,  74 => 47,  69 => 46,  67 => 45,  62 => 44,  60 => 43,  55 => 42,  53 => 41,  50 => 40,  48 => 37,  47 => 36,  46 => 35,  45 => 34,  44 => 33,  43 => 30,  40 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/ebt_tabs/templates/block--block-content--ebt-tabs.html.twig", "/var/www/html/evertacademy-registerform/modules/contrib/ebt_tabs/templates/block--block-content--ebt-tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 41, "block" => 62);
        static $filters = array("clean_class" => 33, "escape" => 42, "raw" => 67, "without" => 63);
        static $functions = array("attach_library" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'raw', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
