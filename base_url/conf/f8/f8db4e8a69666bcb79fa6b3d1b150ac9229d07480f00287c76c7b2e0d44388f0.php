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

/* error.html */
class __TwigTemplate_8e34032dddd9dc537e903e6093290f397c9d8b696de771f514b6c007bda50038 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bodyClass' => [$this, 'block_bodyClass'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("template.twig", "error.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Gallery";
    }

    // line 5
    public function block_bodyClass($context, array $blocks = [])
    {
        echo "gallery";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        if (($context["breadcrumb"] ?? null)) {
            // line 9
            echo "
<ul class=\"breadcrumb\">
";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["link"] => $context["url"]) {
                // line 12
                echo "   <li>
";
                // line 13
                if ($context["url"]) {
                    // line 14
                    echo "   <a href=\"";
                    echo $context["url"];
                    echo "\">";
                    echo $context["link"];
                    echo "</a></li>
";
                } else {
                    // line 16
                    echo $context["link"];
                    echo "
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['link'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</ul>
";
        }
        // line 21
        echo "<div class=\"image-wrapper\">
   Erreur 404 ! Fichier non trouvé.
";
        // line 23
        if (($context["error_msg"] ?? null)) {
            echo "<br/>";
            echo ($context["error_msg"] ?? null);
        }
        // line 24
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  101 => 23,  97 => 21,  93 => 19,  84 => 16,  76 => 14,  74 => 13,  71 => 12,  67 => 11,  63 => 9,  61 => 8,  58 => 7,  52 => 5,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.twig\" %}

{% block title %}Gallery{% endblock %}

{% block bodyClass %}gallery{% endblock %}

{% block content %}
{%if breadcrumb %}

<ul class=\"breadcrumb\">
   {% for link,url in breadcrumb %}
   <li>
   {% if url %}
   <a href=\"{{ url }}\">{{ link }}</a></li>
   {% else %}
   {{ link }}
   {% endif %}
   {% endfor %}
</ul>
{% endif %}
<div class=\"image-wrapper\">
   Erreur 404 ! Fichier non trouvé.
   {% if error_msg %}<br/>{{ error_msg }}{% endif %}
</div>

{% endblock %}", "error.html", "C:\\wamp64\\www\\Picturo2.0\\themes\\jerrywham\\error.html");
    }
}
