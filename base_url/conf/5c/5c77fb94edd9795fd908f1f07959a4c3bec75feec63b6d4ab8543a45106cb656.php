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

/* gallery.html */
class __TwigTemplate_1066532f2264144d14f1d2d2a1a6696c4db6af74eb10dd6c108553e0af5fe4ce extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig", "gallery.html", 1);
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
        echo "<div id=\"content\">
   <div class=\"inner\">
";
        // line 10
        if (($context["breadcrumb"] ?? null)) {
            // line 11
            echo "      <ul class=\"breadcrumb\">
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["url"]) {
                // line 13
                echo "         <li>
";
                // line 14
                if ($context["url"]) {
                    // line 15
                    echo "         <a href=\"";
                    echo $context["url"];
                    echo "\">";
                    echo $context["name"];
                    echo "</a></li>
";
                } else {
                    // line 17
                    echo $context["name"];
                    echo "
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </ul>
";
        }
        // line 22
        if (($context["folders"] ?? null)) {
            // line 23
            echo "      <div class=\"folders\">
";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["folders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 25
                echo "         <div class=\"folder\">
            <a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "url", []);
                echo "\">
";
                // line 27
                echo call_user_func_array($this->env->getFunction('picturo_thumbnail')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["folder"], "thumbnail_url", []), 284, 200]);
                echo "
               <p>";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["folder"], "name", []);
                echo "</p>
            </a>
         </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "      </div>
";
        }
        // line 34
        echo "      <div class=\"images\">
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 36
            echo "         <div class=\"image\">
            <a href=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["image"], "url", []);
            echo "\">
";
            // line 38
            echo call_user_func_array($this->env->getFunction('picturo_thumbnail')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["image"], "thumbnail_url", []), 164, 164]);
            echo "
            </a>
         </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "      </div>

";
        // line 44
        if ((($context["page_count"] ?? null) > 1)) {
            // line 45
            echo "      <ul class=\"pagination\" style=\"clear:both\">
";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["page_count"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 47
                if (((($context["current_page"] ?? null) + 1) == $context["i"])) {
                    // line 48
                    echo "         <li class=\"current\">";
                    echo $context["i"];
                    echo "</li>
";
                } else {
                    // line 50
                    if (($context["i"] == 1)) {
                        // line 51
                        echo "         <li><a href=\"";
                        echo ($context["base_url"] ?? null);
                        echo ($context["url"] ?? null);
                        echo "\">";
                        echo $context["i"];
                        echo "</a></li>
";
                    } else {
                        // line 53
                        echo "         <li><a href=\"";
                        echo ($context["base_url"] ?? null);
                        echo ($context["url"] ?? null);
                        echo "page";
                        echo $context["i"];
                        echo "\">";
                        echo $context["i"];
                        echo "</a></li>
";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      </ul>
";
        }
        // line 59
        echo "   </div>
</div>
";
        // line 61
        if ((($context["folders"] ?? null) == false)) {
            // line 62
            echo "<script type=\"text/javascript\">
      <!--
      // better image preloading @ http://perishablepress.com/press/2009/12/28/3-ways-preload-images-css-javascript-ajax/
;(function(window,undefined){

   'use_strict';
   function preloader() {
       if (document.getElementById) {
";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["preloader"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 71
                echo "
            var address";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", []);
                echo "  = '";
                echo $context["img"];
                echo "';
            var preloader";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", []);
                echo "  = document.getElementById(\"preload-";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", []);
                echo " \");
            preloader";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", []);
                echo " .style.backgroundImage = 'url(\"'+address";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", []);
                echo " +'\")';
            preloader";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", []);
                echo " .style.backgroundPosition = '-9999px -9999px';
            preloader";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", []);
                echo " .style.backgroundRepeat = 'no-repeat';
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "          
       }
    }
    window.onload = preloader;
})(window);     
      //-->
</script>

";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["preloader"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 87
                echo "   
   <div id=\"preload-";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", []);
                echo " \"></div>
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "gallery.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 88,  311 => 87,  294 => 86,  284 => 78,  268 => 76,  264 => 75,  258 => 74,  252 => 73,  246 => 72,  243 => 71,  226 => 70,  216 => 62,  214 => 61,  210 => 59,  206 => 57,  190 => 53,  181 => 51,  179 => 50,  173 => 48,  171 => 47,  167 => 46,  164 => 45,  162 => 44,  158 => 42,  148 => 38,  144 => 37,  141 => 36,  137 => 35,  134 => 34,  130 => 32,  120 => 28,  116 => 27,  112 => 26,  109 => 25,  105 => 24,  102 => 23,  100 => 22,  96 => 20,  87 => 17,  79 => 15,  77 => 14,  74 => 13,  70 => 12,  67 => 11,  65 => 10,  61 => 8,  58 => 7,  52 => 5,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.twig\" %}

{% block title %}Gallery{% endblock %}

{% block bodyClass %}gallery{% endblock %}

{% block content %}
<div id=\"content\">
   <div class=\"inner\">
      {%if breadcrumb %}
      <ul class=\"breadcrumb\">
         {% for name,url in breadcrumb %}
         <li>
         {% if url %}
         <a href=\"{{ url }}\">{{ name }}</a></li>
         {% else %}
         {{ name }}
         {% endif %}
         {% endfor %}
      </ul>
      {% endif %}
      {% if folders %}
      <div class=\"folders\">
         {% for folder in folders%}
         <div class=\"folder\">
            <a href=\"{{ folder.url }}\">
               {{ picturo_thumbnail(folder.thumbnail_url, 284, 200) }}
               <p>{{ folder.name }}</p>
            </a>
         </div>
         {% endfor %}
      </div>
      {% endif %}
      <div class=\"images\">
         {% for image in images %}
         <div class=\"image\">
            <a href=\"{{ image.url }}\">
              {{ picturo_thumbnail(image.thumbnail_url, 164, 164) }}
            </a>
         </div>
         {% endfor %}
      </div>

      {% if page_count > 1 %}
      <ul class=\"pagination\" style=\"clear:both\">
         {% for i in 1..page_count %}
         {% if current_page + 1 == i %}
         <li class=\"current\">{{ i }}</li>
         {% else %}
         {% if i == 1 %}
         <li><a href=\"{{base_url}}{{ url }}\">{{ i }}</a></li>
         {% else %}
         <li><a href=\"{{base_url}}{{ url }}page{{ i }}\"> {{ i }}</a></li>
         {% endif %}
         {% endif %}
         {% endfor %}
      </ul>
      {% endif %}
   </div>
</div>
{% if folders == false %}
<script type=\"text/javascript\">
      <!--
      // better image preloading @ http://perishablepress.com/press/2009/12/28/3-ways-preload-images-css-javascript-ajax/
;(function(window,undefined){

   'use_strict';
   function preloader() {
       if (document.getElementById) {
          {% for img in preloader %}

            var address{{ loop.index }}  = '{{ img }}';
            var preloader{{ loop.index }}  = document.getElementById(\"preload-{{ loop.index }} \");
            preloader{{ loop.index }} .style.backgroundImage = 'url(\"'+address{{ loop.index }} +'\")';
            preloader{{ loop.index }} .style.backgroundPosition = '-9999px -9999px';
            preloader{{ loop.index }} .style.backgroundRepeat = 'no-repeat';
         {% endfor %}
          
       }
    }
    window.onload = preloader;
})(window);     
      //-->
</script>

{% for img in preloader %}
   
   <div id=\"preload-{{ loop.index }} \"></div>
{% endfor %}
{% endif %}
{% endblock %}
", "gallery.html", "C:\\wamp64\\www\\Picturo2.0\\themes\\jerrywham\\gallery.html");
    }
}
