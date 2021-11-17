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

/* modules/contrib/photoswipe/templates/photoswipe-container.html.twig */
class __TwigTemplate_e3beee0b9c027036b4ada0ca3ee0925d5f70ec1358a6b584e23e99c858fcf8c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["t" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">

  ";
        // line 8
        echo "  <div class=\"pswp__bg\"></div>

  ";
        // line 11
        echo "  <div class=\"pswp__scroll-wrap\">

    ";
        // line 18
        echo "
    <div class=\"pswp__container\">
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
    </div>

    ";
        // line 29
        echo "    <div class=\"pswp__ui pswp__ui--hidden\">

      <div class=\"pswp__top-bar\">

        ";
        // line 34
        echo "
        <div class=\"pswp__counter\"></div>

        <button class=\"pswp__button pswp__button--close\" title=\"";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close (Esc)"));
        echo "\"></button>

        <button class=\"pswp__button pswp__button--share\" title=\"";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share"));
        echo "\"></button>

        <button class=\"pswp__button pswp__button--fs\" title=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle fullscreen"));
        echo "\"></button>

        <button class=\"pswp__button pswp__button--zoom\" title=\"";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Zoom in/out"));
        echo "\"></button>

        ";
        // line 50
        echo "
        <div class=\"pswp__preloader\">
          <div class=\"pswp__preloader__icn\">
            <div class=\"pswp__preloader__cut\">
              <div class=\"pswp__preloader__donut\"></div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
        <div class=\"pswp__share-tooltip\"></div>
      </div>

      <button class=\"pswp__button pswp__button--arrow--left\" title=\"";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous (arrow left)"));
        echo "\">
      </button>

      <button class=\"pswp__button pswp__button--arrow--right\" title=\"";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next (arrow right)"));
        echo "\">
      </button>

      <div class=\"pswp__caption\">
        <div class=\"pswp__caption__center\"></div>
      </div>

    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/photoswipe/templates/photoswipe-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 67,  123 => 64,  107 => 50,  102 => 43,  97 => 41,  92 => 39,  87 => 37,  82 => 34,  76 => 29,  67 => 18,  63 => 11,  59 => 8,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/photoswipe/templates/photoswipe-container.html.twig", "C:\\OpenServer\\domains\\coneteam.coma\\modules\\contrib\\photoswipe\\templates\\photoswipe-container.html.twig");
    }
}
