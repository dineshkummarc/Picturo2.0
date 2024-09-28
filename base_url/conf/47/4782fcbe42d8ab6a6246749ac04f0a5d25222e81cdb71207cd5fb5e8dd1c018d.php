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

/* template.twig */
class __TwigTemplate_b028218845c1ce05624480031c858f5a569c4ce34282ed129230b865be9f8cb6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bodyClass' => [$this, 'block_bodyClass'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
   <head>
      <meta charset=\"utf-8\" />
      <link rel=\"icon\" href=\"";
        // line 5
        echo ($context["theme_url"] ?? null);
        echo "/img/favicon.ico\"/>
      <link rel=\"stylesheet\" href=\"";
        // line 6
        echo ($context["theme_url"] ?? null);
        echo "/css/normalize.css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 7
        echo ($context["theme_url"] ?? null);
        echo "/css/style.css\" />
      <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " -";
        echo ($context["site_title"] ?? null);
        echo "</title>
   </head>
   <body class=\"";
        // line 10
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">

";
        // line 12
        if ((($context["view"] ?? null) != "login")) {
            // line 13
            echo "
      <header class=\"header clearfix\">
         <div class=\"inner\">
            <h1><a href=\"";
            // line 16
            echo ($context["base_url"] ?? null);
            echo "\">";
            echo ($context["site_title"] ?? null);
            echo "</a></h1>
";
            // line 17
            if ((($context["username"] ?? null) != "")) {
                // line 18
                echo "
            <ul class=\"nav\">
               <li>Hey";
                // line 20
                echo ($context["username"] ?? null);
                echo " !</li>
";
                // line 21
                if (($context["admin"] ?? null)) {
                    // line 22
                    echo "
               <li><a href=\"";
                    // line 23
                    echo ($context["base_url"] ?? null);
                    echo "/createUser\">Manage users</a></li>
";
                }
                // line 25
                echo "
               <li><a href=\"";
                // line 26
                echo ($context["base_url"] ?? null);
                echo "/logout\">Logout</a></li>
            </ul>
";
            }
            // line 29
            echo "
         </div>
      </header>
";
        }
        // line 33
        if (((($context["view"] ?? null) == "login") && ($context["admin"] ?? null))) {
            // line 34
            echo "
      <header class=\"header clearfix\">
         <div class=\"inner\">
            <h1><a href=\"";
            // line 37
            echo ($context["base_url"] ?? null);
            echo "\">";
            echo ($context["site_title"] ?? null);
            echo "</a></h1>
";
            // line 38
            if ((($context["username"] ?? null) != "")) {
                // line 39
                echo "
            <ul class=\"nav\">
               <li>Hey";
                // line 41
                echo ($context["username"] ?? null);
                echo " !</li>
";
                // line 42
                if (($context["admin"] ?? null)) {
                    // line 43
                    echo "
               <li>Create a new user</li>
";
                }
                // line 46
                echo "
               <li><a href=\"";
                // line 47
                echo ($context["base_url"] ?? null);
                echo "/logout\">Logout</a></li>
            </ul>
";
            }
            // line 50
            echo "
         </div>
      </header>
";
        }
        // line 54
        echo "      <div class=\"content inner\">
";
        // line 55
        echo ($context["msg"] ?? null);
        echo "
";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "      </div>
";
        // line 58
        if (((($context["view"] ?? null) != "login") || ((($context["view"] ?? null) == "login") && ($context["admin"] ?? null)))) {
            // line 59
            echo "      <footer class=\"footer\" role=\"footer\">
         <div class=\"inner\">
            <a href=\"https://github.com/jbleuzen/Picturo\">Picturo</a> was made by <a href=\"http://www.johanbleuzen.fr\">Johan BLEUZEN</a> and inspired by <a href=\"https://github.com/gilbitron/Pico\">Pico</a>.
            <br/>
            Modified by <a href=\"http://www.ecyseo.net\">Cyril MAGUIRE</a>.
         </div>
      </footer>
";
        }
        // line 67
        echo "
   </body>
</html>

";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
    }

    // line 10
    public function block_bodyClass($context, array $blocks = [])
    {
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 56,  198 => 10,  193 => 8,  185 => 67,  175 => 59,  173 => 58,  170 => 57,  168 => 56,  164 => 55,  161 => 54,  155 => 50,  149 => 47,  146 => 46,  141 => 43,  139 => 42,  135 => 41,  131 => 39,  129 => 38,  123 => 37,  118 => 34,  116 => 33,  110 => 29,  104 => 26,  101 => 25,  96 => 23,  93 => 22,  91 => 21,  87 => 20,  83 => 18,  81 => 17,  75 => 16,  70 => 13,  68 => 12,  63 => 10,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
   <head>
      <meta charset=\"utf-8\" />
      <link rel=\"icon\" href=\"{{ theme_url }}/img/favicon.ico\"/>
      <link rel=\"stylesheet\" href=\"{{ theme_url }}/css/normalize.css\" />
      <link rel=\"stylesheet\" href=\"{{ theme_url }}/css/style.css\" />
      <title>{% block title %}{% endblock %} - {{ site_title }}</title>
   </head>
   <body class=\"{% block bodyClass %}{% endblock %}\">

      {% if view != \"login\" %}

      <header class=\"header clearfix\">
         <div class=\"inner\">
            <h1><a href=\"{{ base_url }}\">{{ site_title }}</a></h1>
            {% if username != \"\" %}

            <ul class=\"nav\">
               <li>Hey {{ username }} !</li>
               {% if admin %}

               <li><a href=\"{{ base_url }}/createUser\">Manage users</a></li>
               {% endif %}

               <li><a href=\"{{ base_url }}/logout\">Logout</a></li>
            </ul>
            {% endif %}

         </div>
      </header>
      {% endif %}
      {% if view == \"login\" and admin %}

      <header class=\"header clearfix\">
         <div class=\"inner\">
            <h1><a href=\"{{ base_url }}\">{{ site_title }}</a></h1>
            {% if username != \"\" %}

            <ul class=\"nav\">
               <li>Hey {{ username }} !</li>
               {% if admin %}

               <li>Create a new user</li>
               {% endif %}

               <li><a href=\"{{ base_url }}/logout\">Logout</a></li>
            </ul>
            {% endif %}

         </div>
      </header>
      {% endif %}
      <div class=\"content inner\">
         {{msg}}
         {% block content %}{% endblock %}
      </div>
      {% if view != \"login\" or (view == \"login\" and admin) %}
      <footer class=\"footer\" role=\"footer\">
         <div class=\"inner\">
            <a href=\"https://github.com/jbleuzen/Picturo\">Picturo</a> was made by <a href=\"http://www.johanbleuzen.fr\">Johan BLEUZEN</a> and inspired by <a href=\"https://github.com/gilbitron/Pico\">Pico</a>.
            <br/>
            Modified by <a href=\"http://www.ecyseo.net\">Cyril MAGUIRE</a>.
         </div>
      </footer>
      {% endif %}

   </body>
</html>

", "template.twig", "C:\\wamp64\\www\\Picturo2.0\\themes\\jerrywham\\template.twig");
    }
}
