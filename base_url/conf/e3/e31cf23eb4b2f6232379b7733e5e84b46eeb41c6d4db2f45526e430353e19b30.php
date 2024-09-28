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

/* login.html */
class __TwigTemplate_3ded3141903c6fc015b09efbbae69673c7009422c8d9581798ebe771637f50aa extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig", "login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Login";
    }

    // line 5
    public function block_bodyClass($context, array $blocks = [])
    {
        if (($context["admin"] ?? null)) {
            echo "new";
        } else {
            echo "login";
        }
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "
  <form method=\"post\" action=\"\">
";
        // line 10
        if ((((($context["admin"] ?? null) == false) && ($context["login_error"] ?? null)) || (($context["admin"] ?? null) && (($context["msg"] ?? null) == "")))) {
            // line 11
            echo "      <p class=\"error\">";
            echo ($context["login_error"] ?? null);
            echo "</p>
";
        }
        // line 13
        echo "
    <p>
      <input type=\"text\" name=\"username\" id=\"username\" required placeholder=\"Username\" value=\"";
        // line 15
        echo ($context["login_username"] ?? null);
        echo "\" autocomplete=\"off\"/>
    </p>
    <p>
      <input type=\"password\" name=\"password\" id=\"password\" required placeholder=\"Password\"/>
    </p>
    <input type=\"submit\" value=\"";
        // line 20
        if (($context["admin"] ?? null)) {
            echo "Create";
        } else {
            echo "Login";
        }
        echo "\" />
  </form>
";
        // line 22
        if ((($context["admin"] ?? null) && ($context["users"] ?? null))) {
            // line 23
            echo "
  <h3>Users already used</h3>
  <form method=\"post\" action=\"\" class=\"indentleft\">
    <table class=\"indentleft\">
      <tr class=\"row\">
        <th class=\"cell\">User</th>
        <th class=\"cell\">Folders to hide</th>
";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["users"] ?? null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 31
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "length", []) > 1) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 1))) {
                    // line 32
                    echo "
        <th class=\"cell\">User</th>
        <th class=\"cell\">Folders to hide</th>
      </tr><!-- /.row -->
";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 36
$context["loop"], "length", []) == 1)) {
                    // line 37
                    echo "
      </tr><!-- /.row -->
";
                }
                // line 40
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2) == 1)) {
                    echo " 
      
      <tr class=\"row\">
";
                }
                // line 44
                echo "
        <td class=\"name\">";
                // line 45
                echo $context["user"];
                echo "</td>
        <td class=\"select\"><div class=\"arrow\">&#9660;</div><div class=\"select\">
";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["folders"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                    // line 48
                    echo "
";
                    // line 49
                    echo call_user_func_array($this->env->getFunction('picturo_checkbox')->getCallable(), [$context["user"], twig_get_attribute($this->env, $this->source, $context["folder"], "name", [])]);
                    echo "
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "
        </div></td>
";
                // line 53
                if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "length", []) > 1) && ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2) == 0)) || (twig_get_attribute($this->env, $this->source, $context["loop"], "length", []) == 1))) {
                    echo " 

      </tr><!-- /.row -->
";
                }
                // line 57
                if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "length", []) > 1) && ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", []) % 2) != 0)) && twig_get_attribute($this->env, $this->source, $context["loop"], "last", []))) {
                    echo " 

      </tr><!-- /.row -->
";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
    </table>
    <input type=\"hidden\" name=\"manageRights\" value=\"on\" />
    <input class=\"aligncenter\" type=\"submit\" value=\"Change\" />
  </form>
";
        }
        // line 68
        echo "  <script type=\"text/javascript\">
;(function(window,undefined) {
  'use_strict';

  function isBrowserIE() {
     return /*@cc_on!@*/0;
  }

  var toggle = {
        init: function() {
            var div = document.getElementsByTagName('div');
            for (var i = 0, c = div.length; i < c; i++) {
              if (div[i].className == 'select' || div[i].className == 'arrow') {
                this.addEventListener(div[i],\"click\", this);
              }
            };
        },
        addEventListener: function(el, eventName, handler) {
            if (el.addEventListener) {
                el.addEventListener(eventName, handler, false);
            } else {
                el.attachEvent('on' + eventName, toggle.handleEvent);
            }
        },
        handleEvent: function(e) {
            if (isBrowserIE()) {
                var obj = null;
                obj = toggle;
            } else {
                var obj = Object.create(null);
                obj = this;
            }
            var evt = e ? e:event;

            obj.action(evt.target || evt.srcElement);
        },
        action: function(a) {
            if (isBrowserIE()) {
                var obj = null;
                obj = toggle;
            } else {
                var obj = Object.create(null);
                obj = this;
            }
            if (a.tagName == 'DIV') {
              if (a.parentNode.lastChild.getAttribute('style') == '' || a.parentNode.lastChild.getAttribute('style') == null || a.parentNode.lastChild.getAttribute('style') == 'max-height:30px;') {
                a.parentNode.lastChild.setAttribute('style', 'max-height:100%;');
                a.parentNode.lastChild.setAttribute('style', 'max-height:100%;');
              } else {
                a.parentNode.lastChild.setAttribute('style', 'max-height:30px;');
              }
            }
            if (a.tagName == 'TD') {
              if (a.lastChild.getAttribute('style') == '' || a.lastChild.getAttribute('style') == null || a.lastChild.getAttribute('style') == 'max-height:30px;') {
                a.lastChild.setAttribute('style', 'max-height:100%;');
                a.lastChild.setAttribute('style', 'max-height:100%;');
              } else {
                a.lastChild.setAttribute('style', 'max-height:30px;');
              }
            }
          return true;
        }
      };

      // Init
      toggle.init(); 
})(window);
</script>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 68,  201 => 62,  182 => 57,  175 => 53,  171 => 51,  163 => 49,  160 => 48,  156 => 47,  151 => 45,  148 => 44,  141 => 40,  136 => 37,  134 => 36,  128 => 32,  126 => 31,  109 => 30,  100 => 23,  98 => 22,  89 => 20,  81 => 15,  77 => 13,  71 => 11,  69 => 10,  65 => 8,  62 => 7,  52 => 5,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"template.twig\" %}

{% block title %}Login{% endblock %}

{% block bodyClass %}{% if admin %}new{% else %}login{% endif %}{% endblock %}

{% block content %}

  <form method=\"post\" action=\"\">
    {% if (admin == false and login_error) or (admin and msg == '') %}
      <p class=\"error\">{{ login_error }}</p>
    {% endif %}

    <p>
      <input type=\"text\" name=\"username\" id=\"username\" required placeholder=\"Username\" value=\"{{ login_username }}\" autocomplete=\"off\"/>
    </p>
    <p>
      <input type=\"password\" name=\"password\" id=\"password\" required placeholder=\"Password\"/>
    </p>
    <input type=\"submit\" value=\"{% if admin %}Create{% else %}Login{% endif %}\" />
  </form>
  {% if admin and users %}

  <h3>Users already used</h3>
  <form method=\"post\" action=\"\" class=\"indentleft\">
    <table class=\"indentleft\">
      <tr class=\"row\">
        <th class=\"cell\">User</th>
        <th class=\"cell\">Folders to hide</th>
    {% for user in users|keys%}
        {% if loop.length > 1 and loop.index == 1  %}

        <th class=\"cell\">User</th>
        <th class=\"cell\">Folders to hide</th>
      </tr><!-- /.row -->
        {% elseif loop.length == 1 %}

      </tr><!-- /.row -->
        {% endif %}
      {% if loop.index%2 == 1  %} 
      
      <tr class=\"row\">
      {% endif %}

        <td class=\"name\">{{ user }}</td>
        <td class=\"select\"><div class=\"arrow\">&#9660;</div><div class=\"select\">
          {% for folder in folders%}

          {{ picturo_checkbox(user, folder.name) }}
          {% endfor %}

        </div></td>
      {% if (loop.length > 1 and loop.index%2 == 0) or loop.length == 1  %} 

      </tr><!-- /.row -->
      {% endif %}
      {% if (loop.length > 1 and loop.length%2 != 0 and loop.last)  %} 

      </tr><!-- /.row -->
      {% endif %}
    {% endfor %}

    </table>
    <input type=\"hidden\" name=\"manageRights\" value=\"on\" />
    <input class=\"aligncenter\" type=\"submit\" value=\"Change\" />
  </form>
  {% endif %}
  <script type=\"text/javascript\">
;(function(window,undefined) {
  'use_strict';

  function isBrowserIE() {
     return /*@cc_on!@*/0;
  }

  var toggle = {
        init: function() {
            var div = document.getElementsByTagName('div');
            for (var i = 0, c = div.length; i < c; i++) {
              if (div[i].className == 'select' || div[i].className == 'arrow') {
                this.addEventListener(div[i],\"click\", this);
              }
            };
        },
        addEventListener: function(el, eventName, handler) {
            if (el.addEventListener) {
                el.addEventListener(eventName, handler, false);
            } else {
                el.attachEvent('on' + eventName, toggle.handleEvent);
            }
        },
        handleEvent: function(e) {
            if (isBrowserIE()) {
                var obj = null;
                obj = toggle;
            } else {
                var obj = Object.create(null);
                obj = this;
            }
            var evt = e ? e:event;

            obj.action(evt.target || evt.srcElement);
        },
        action: function(a) {
            if (isBrowserIE()) {
                var obj = null;
                obj = toggle;
            } else {
                var obj = Object.create(null);
                obj = this;
            }
            if (a.tagName == 'DIV') {
              if (a.parentNode.lastChild.getAttribute('style') == '' || a.parentNode.lastChild.getAttribute('style') == null || a.parentNode.lastChild.getAttribute('style') == 'max-height:30px;') {
                a.parentNode.lastChild.setAttribute('style', 'max-height:100%;');
                a.parentNode.lastChild.setAttribute('style', 'max-height:100%;');
              } else {
                a.parentNode.lastChild.setAttribute('style', 'max-height:30px;');
              }
            }
            if (a.tagName == 'TD') {
              if (a.lastChild.getAttribute('style') == '' || a.lastChild.getAttribute('style') == null || a.lastChild.getAttribute('style') == 'max-height:30px;') {
                a.lastChild.setAttribute('style', 'max-height:100%;');
                a.lastChild.setAttribute('style', 'max-height:100%;');
              } else {
                a.lastChild.setAttribute('style', 'max-height:30px;');
              }
            }
          return true;
        }
      };

      // Init
      toggle.init(); 
})(window);
</script>
{% endblock %}", "login.html", "C:\\wamp64\\www\\Picturo2.0\\themes\\jerrywham\\login.html");
    }
}
