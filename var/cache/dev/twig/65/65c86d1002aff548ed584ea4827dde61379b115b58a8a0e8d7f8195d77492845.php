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

/* _modal.html.twig */
class __TwigTemplate_0b035868864d210e2a6850fb010e43e488d6fbdeb9fd36ca7fe91a067e198dc0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_modal.html.twig"));

        // line 1
        echo "<div
    class=\"modal fade\"
    tabindex=\"-1\"
    aria-hidden=\"true\"
    data-modal-form-target=\"modal\"
>
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"btn-close\"
                        data-bs-dismiss=\"modal\"
                        aria-label=\"Close\"></button>
            </div>
            <div
                class=\"modal-body\"
                data-modal-form-target=\"modalBody\"
                data-action=\"submit->modal-form#submitForm\"
            >
                ";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("modalContent", $context)) ? (_twig_default_filter((isset($context["modalContent"]) || array_key_exists("modalContent", $context) ? $context["modalContent"] : (function () { throw new RuntimeError('Variable "modalContent" does not exist.', 20, $this->source); })()), "Loading...")) : ("Loading...")), "html", null, true);
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\"
                        data-bs-dismiss=\"modal\">Cancel
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-action=\"modal-form#submitForm\">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    class=\"modal fade\"
    tabindex=\"-1\"
    aria-hidden=\"true\"
    data-modal-form-target=\"modal\"
>
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ modalTitle }}</h5>
                <button type=\"button\" class=\"btn-close\"
                        data-bs-dismiss=\"modal\"
                        aria-label=\"Close\"></button>
            </div>
            <div
                class=\"modal-body\"
                data-modal-form-target=\"modalBody\"
                data-action=\"submit->modal-form#submitForm\"
            >
                {{ modalContent|default('Loading...') }}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\"
                        data-bs-dismiss=\"modal\">Cancel
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-action=\"modal-form#submitForm\">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
", "_modal.html.twig", "/Users/andrescourt/Public/GIT/html/Learning/symfonyTurbo/templates/_modal.html.twig");
    }
}
