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

/* notas.html.twig */
class __TwigTemplate_cc16e6026b7d51ea694e4ac1eafe1f25c243bd00faa96dc964ab1c1eed50b209 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "notas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Notas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"container-fluid\">
        <div class=\"row\"><div class=\"col text-center h1\">Notas</div></div>
        <hr/>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"row font-weight-bold\">Primeira vertente</div>

                <div class=\"row\">
                    <ul>
                        <li>O comando é php bin/console url:analizer {url}</li>
                        <li>Este este URL deve ser seguido e a resposta HTML analisada. Deverão ser guardados em base de dados todos os caracteres encontrados que não sejam letras e quantas vezes os mesmos ocorreram no HTML em questão.</li>
                        <li>O comando deve retornar o top 20 dos caracteres encontrados num formato que permita uma leitura adequada.</li>
                    </ul>
                </div>
                <div class=\"row font-weight-bold\">Segunda vertente</div>
                <div class=\"row\">
                    <ul>
                        <li>Desenvolver uma página web que mostre todos os pedidos efectuados até ao momento com o comando.</li>
                        <li>Esta lista deverá ser uma tabela que mostre que URL foi inserido no comando, o URL final onde a resposta acabou a ser analisada (tendo em conta que podem existir redirects) bem como a hora a que o pedido foi feito.</li>
                        <li>Quando clicamos numa das linhas desta tabela devem ser carregados por ajax os top 20 caracteres do pedido e esses dados devem ser exibidos num gráfico de barras nessa mesma página.</li>
                    </ul>
                </div>
                <div class=\"row font-weight-bold\">Terceira vertente</div>
                <div class=\"row\">
                    <ul>
                        <li>A página web cada vez que for rendida, tem que, server-side, fazer uma chamada à API https://api.chucknorris.io/jokes/random e render a resposta da mesma.</li>
                        <li>E client-side tem que fazer a mesma coisa. Portanto duas piadas do Chuck Norris carregadas de duas maneiras diferentes.</li>
                    </ul>
                </div>
                <div class=\"row font-weight-bold\">Pontos extra</div>
                <div class=\"row\">
                    <ul>
                        <li>Disponibilizar a mesma funcionalidade do comando na interface web.
                        <li>Usar docker. Podes optar por desenvolver sem docker por uma questão de tempo mas se utilizares será um ponto positivo. Uma imagem pré feita serve, algo tipo isto https://github.com/dunglas/symfony-docker</li>
                        <li>A facilidade que eu tiver de puxar o teu código e colocar a correr a tua solução será muito relevante, portanto um readme para auxiliar nesse sentido seria bom.</li>
                    </ul>
                </div>
                <div class=\"row font-weight-bold\">Notas</div>
                <div class=\"row\">
                    <ul>
                        <li>Os erros devem ser tratados. Exemplo se o URL for inválido ou inacessível o utilizador deve ser informado.</li>
                        <li>A bd pode ser SQLite ou outra que entendas que te facilite a vida. Desde que o setup para mim seja transparente.</li>
                        <li>O teu challenge deve ser entregue via github, bastando para isso partilhares comigo o URL para o mesmo.</li>
                    </ul>
                </div>
            </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "notas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Notas{% endblock %}
{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row\"><div class=\"col text-center h1\">Notas</div></div>
        <hr/>
        <div class=\"row\">
            <div class=\"container\">
                <div class=\"row font-weight-bold\">Primeira vertente</div>

                <div class=\"row\">
                    <ul>
                        <li>O comando é php bin/console url:analizer {url}</li>
                        <li>Este este URL deve ser seguido e a resposta HTML analisada. Deverão ser guardados em base de dados todos os caracteres encontrados que não sejam letras e quantas vezes os mesmos ocorreram no HTML em questão.</li>
                        <li>O comando deve retornar o top 20 dos caracteres encontrados num formato que permita uma leitura adequada.</li>
                    </ul>
                </div>
                <div class=\"row font-weight-bold\">Segunda vertente</div>
                <div class=\"row\">
                    <ul>
                        <li>Desenvolver uma página web que mostre todos os pedidos efectuados até ao momento com o comando.</li>
                        <li>Esta lista deverá ser uma tabela que mostre que URL foi inserido no comando, o URL final onde a resposta acabou a ser analisada (tendo em conta que podem existir redirects) bem como a hora a que o pedido foi feito.</li>
                        <li>Quando clicamos numa das linhas desta tabela devem ser carregados por ajax os top 20 caracteres do pedido e esses dados devem ser exibidos num gráfico de barras nessa mesma página.</li>
                    </ul>
                </div>
                <div class=\"row font-weight-bold\">Terceira vertente</div>
                <div class=\"row\">
                    <ul>
                        <li>A página web cada vez que for rendida, tem que, server-side, fazer uma chamada à API https://api.chucknorris.io/jokes/random e render a resposta da mesma.</li>
                        <li>E client-side tem que fazer a mesma coisa. Portanto duas piadas do Chuck Norris carregadas de duas maneiras diferentes.</li>
                    </ul>
                </div>
                <div class=\"row font-weight-bold\">Pontos extra</div>
                <div class=\"row\">
                    <ul>
                        <li>Disponibilizar a mesma funcionalidade do comando na interface web.
                        <li>Usar docker. Podes optar por desenvolver sem docker por uma questão de tempo mas se utilizares será um ponto positivo. Uma imagem pré feita serve, algo tipo isto https://github.com/dunglas/symfony-docker</li>
                        <li>A facilidade que eu tiver de puxar o teu código e colocar a correr a tua solução será muito relevante, portanto um readme para auxiliar nesse sentido seria bom.</li>
                    </ul>
                </div>
                <div class=\"row font-weight-bold\">Notas</div>
                <div class=\"row\">
                    <ul>
                        <li>Os erros devem ser tratados. Exemplo se o URL for inválido ou inacessível o utilizador deve ser informado.</li>
                        <li>A bd pode ser SQLite ou outra que entendas que te facilite a vida. Desde que o setup para mim seja transparente.</li>
                        <li>O teu challenge deve ser entregue via github, bastando para isso partilhares comigo o URL para o mesmo.</li>
                    </ul>
                </div>
            </div>
        </div>

{% endblock %}", "notas.html.twig", "/Users/tiagoandre/Projects/integrityChallenge/templates/notas.html.twig");
    }
}
