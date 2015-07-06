<?php

/* @Installation/_systemCheckSection.twig */
class __TwigTemplate_a3ff3d5868c4bba3a529eec93acf5519541f0e9bc8c941c530345de70f329115 extends Twig_Template
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
        $context["local"] = $this;
        // line 2
        echo "
<table class=\"infosServer\" id=\"systemCheckRequired\">
    ";
        // line 4
        echo $context["local"]->getdiagnosticTable($this->getAttribute((isset($context["diagnosticReport"]) ? $context["diagnosticReport"] : $this->getContext($context, "diagnosticReport")), "getMandatoryDiagnosticResults", array(), "method"));
        echo "
</table>

<h3>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_Optional")), "html", null, true);
        echo "</h3>

<table class=\"infos\" id=\"systemCheckOptional\">
    ";
        // line 10
        echo $context["local"]->getdiagnosticTable($this->getAttribute((isset($context["diagnosticReport"]) ? $context["diagnosticReport"] : $this->getContext($context, "diagnosticReport")), "getOptionalDiagnosticResults", array(), "method"));
        echo "
</table>

";
    }

    // line 13
    public function getdiagnosticTable($__results__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "results" => $__results__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "
    ";
            // line 15
            $context["error"] = twig_constant("Piwik\\Plugins\\Diagnostics\\Diagnostic\\DiagnosticResult::STATUS_ERROR");
            // line 16
            echo "    ";
            $context["warning"] = twig_constant("Piwik\\Plugins\\Diagnostics\\Diagnostic\\DiagnosticResult::STATUS_WARNING");
            // line 17
            echo "
    ";
            // line 18
            $context["errorIcon"] = ('' === $tmp = "<img src='plugins/Morpheus/images/error.png' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "    ";
            $context["warningIcon"] = ('' === $tmp = "<img src='plugins/Morpheus/images/warning.png' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 20
            echo "    ";
            $context["okIcon"] = ('' === $tmp = "<img src='plugins/Morpheus/images/ok.png' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 21
            echo "
    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 23
                echo "        <tr>
            <td class=\"label\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "label", array()), "html", null, true);
                echo "</td>
            <td>
                ";
                // line 26
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 27
                    echo "
                    ";
                    // line 28
                    if (($this->getAttribute($context["item"], "status", array()) == (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
                        // line 29
                        echo "                        ";
                        echo twig_escape_filter($this->env, (isset($context["errorIcon"]) ? $context["errorIcon"] : $this->getContext($context, "errorIcon")), "html", null, true);
                        echo " <span class=\"err\">";
                        echo $this->getAttribute($context["item"], "comment", array());
                        echo "</span>
                    ";
                    } elseif (($this->getAttribute(                    // line 30
$context["item"], "status", array()) == (isset($context["warning"]) ? $context["warning"] : $this->getContext($context, "warning")))) {
                        // line 31
                        echo "                        ";
                        echo twig_escape_filter($this->env, (isset($context["warningIcon"]) ? $context["warningIcon"] : $this->getContext($context, "warningIcon")), "html", null, true);
                        echo " ";
                        echo $this->getAttribute($context["item"], "comment", array());
                        echo "
                    ";
                    } else {
                        // line 33
                        echo "                        ";
                        echo twig_escape_filter($this->env, (isset($context["okIcon"]) ? $context["okIcon"] : $this->getContext($context, "okIcon")), "html", null, true);
                        echo " ";
                        echo $this->getAttribute($context["item"], "comment", array());
                        echo "
                    ";
                    }
                    // line 35
                    echo "
                    <br/>

                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "            </td>
        </tr>
        ";
                // line 41
                if ($this->getAttribute($context["result"], "longErrorMessage", array())) {
                    // line 42
                    echo "            <tr>
                <td colspan=\"2\" class=\"error\" style=\"font-size: small;\">
                    ";
                    // line 44
                    echo $this->getAttribute($context["result"], "longErrorMessage", array());
                    echo "
                </td>
            </tr>
        ";
                }
                // line 48
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@Installation/_systemCheckSection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 49,  150 => 48,  143 => 44,  139 => 42,  137 => 41,  133 => 39,  124 => 35,  116 => 33,  108 => 31,  106 => 30,  99 => 29,  97 => 28,  94 => 27,  90 => 26,  85 => 24,  82 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  67 => 18,  64 => 17,  61 => 16,  59 => 15,  56 => 14,  45 => 13,  37 => 10,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
