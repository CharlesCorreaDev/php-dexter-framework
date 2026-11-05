<?php

/*
* @author   Charles Corrêa <charlescorreaweb@gmail.com>
* @copyright    Copyright ( c ) 2026
* @app      Dexter Framework
* @version  0.1.0-beta
*
* +------------------------------------------------------------------------------------------------------------+
* | Criação e Coordenação Projeto : Charles Corrêa <charlescorreaweb@gmail.com>                                |
* | Desenvolvimento: Charles Corrêa <charlescorreaweb@gmail.com>                                               |
* | Layout e Personalizações: Charles Corrêa <charlescorreaweb@gmail.com>                                      |
* | Ajustes: Charles Corrêa <charlescorreaweb@gmail.com>                                                       |
* +------------------------------------------------------------------------------------------------------------+
*/

declare(strict_types=1);

namespace Dexter\Http;

use Dexter\Http\Middleware\MiddlewareInterface;
use Psr\Container\ContainerInterface;
use RuntimeException;

/**
 * Despachante e gerenciador de rotas HTTP do Dexter Framework.
 */
final class Router
{
    /**
     * @var array<int, array{
     *     metodo: string,
     *     padrao: string,
     *     regex: string,
     *     parametros: array<int, string>,
     *     acao: mixed,
     *     middlewares: array<int, class-string<MiddlewareInterface>|callable|MiddlewareInterface>
     * }>
     */
    private array $rotas = [];

    /**
     * @var array<int, array{prefixo: string, middlewares: array<int, mixed>}>
     */
    private array $pilhaGrupos = [];

    public function __construct(
        private ?ContainerInterface $container = null
    ) {
    }

    public function definirContainer(ContainerInterface $container): void
    {
        $this->container = $container;
    }

    /**
     * Registra um grupo de rotas com prefixo e middlewares compartilhados.
     *
     * @param string $prefixo
     * @param array<int, mixed> $middlewares
     * @param callable(Router): void $callback
     */
    public function grupo(string $prefixo, array $middlewares, callable $callback): void
    {
        $this->pilhaGrupos[] = [
            'prefixo' => '/' . trim($prefixo, '/'),
            'middlewares' => $middlewares
        ];

        $callback($this);

        array_pop($this->pilhaGrupos);
    }

    /**
     * Adiciona uma rota GET.
     *
     * @param array<int, mixed> $middlewares
     */
    public function get(string $padrao, mixed $acao, array $middlewares = []): void
    {
        $this->adicionarRota('GET', $padrao, $acao, $middlewares);
    }

    /**
     * Adiciona uma rota POST.
     *
     * @param array<int, mixed> $middlewares
     */
    public function post(string $padrao, mixed $acao, array $middlewares = []): void
    {
        $this->adicionarRota('POST', $padrao, $acao, $middlewares);
    }

    /**
     * Adiciona uma rota PUT.
     *
     * @param array<int, mixed> $middlewares
     */
    public function put(string $padrao, mixed $acao, array $middlewares = []): void
    {
        $this->adicionarRota('PUT', $padrao, $acao, $middlewares);
    }

    /**
     * Adiciona uma rota PATCH.
     *
     * @param array<int, mixed> $middlewares
     */
    public function patch(string $padrao, mixed $acao, array $middlewares = []): void
    {
        $this->adicionarRota('PATCH', $padrao, $acao, $middlewares);
    }

    /**
     * Adiciona uma rota DELETE.
     *
     * @param array<int, mixed> $middlewares
     */
    public function delete(string $padrao, mixed $acao, array $middlewares = []): void
    {
        $this->adicionarRota('DELETE', $padrao, $acao, $middlewares);
    }

    /**
     * Adiciona uma rota OPTIONS.
     *
     * @param array<int, mixed> $middlewares
     */
    public function options(string $padrao, mixed $acao, array $middlewares = []): void
    {
        $this->adicionarRota('OPTIONS', $padrao, $acao, $middlewares);
    }

    /**
     * Registra uma rota internamente compilando parâmetros dinâmicos em regex.
     *
     * @param array<int, mixed> $middlewares
     */
    public function adicionarRota(string $metodo, string $padrao, mixed $acao, array $middlewares = []): void
    {
        $prefixoTotal = '';
        $middlewaresTotais = [];

        foreach ($this->pilhaGrupos as $grupo) {
            $prefixoTotal .= $grupo['prefixo'];
            $middlewaresTotais = array_merge($middlewaresTotais, $grupo['middlewares']);
        }

        $caminhoCompleto = '/' . trim($prefixoTotal . '/' . trim($padrao, '/'), '/');
        $middlewaresTotais = array_merge($middlewaresTotais, $middlewares);

        // Compilação de parâmetros no formato {id} ou {slug}
        $nomesParametros = [];
        $padraoRegex = preg_replace_callback(
            '/\{([a-zA-Z0-9_]+)\}/',
            function (array $matches) use (&$nomesParametros) {
                $nomesParametros[] = $matches[1];
                return '([^/]+)';
            },
            $caminhoCompleto
        );

        $regexFinal = '#^' . $padraoRegex . '$#';

        $this->rotas[] = [
            'metodo' => strtoupper($metodo),
            'padrao' => $caminhoCompleto,
            'regex' => $regexFinal,
            'parametros' => $nomesParametros,
            'acao' => $acao,
            'middlewares' => $middlewaresTotais
        ];
    }

    /**
     * Despacha uma requisição HTTP percorrendo o pipeline de middlewares e acionando o handler.
     */
    public function despachar(Request $requisicao): Response
    {
        $metodoRequisicao = $requisicao->obterMetodo();
        $caminhoRequisicao = $requisicao->obterCaminhoUri();

        $metodoPermitidoMasNaoCorrespondente = false;

        foreach ($this->rotas as $rota) {
            if (preg_match($rota['regex'], $caminhoRequisicao, $valoresCapturados)) {
                if ($rota['metodo'] !== $metodoRequisicao) {
                    $metodoPermitidoMasNaoCorrespondente = true;
                    continue;
                }

                array_shift($valoresCapturados);
                $parametrosAtribuidos = [];
                foreach ($rota['parametros'] as $indice => $nome) {
                    $parametrosAtribuidos[$nome] = $valoresCapturados[$indice] ?? null;
                }

                // Injeta os parâmetros da rota nos atributos da requisição
                foreach ($parametrosAtribuidos as $chave => $valor) {
                    $requisicao = $requisicao->comAtributo($chave, $valor);
                }

                return $this->executarPipeline($requisicao, $rota['middlewares'], $rota['acao']);
            }
        }

        if ($metodoPermitidoMasNaoCorrespondente) {
            return Response::json(['erro' => 'Método HTTP não permitido'], 405);
        }

        return Response::json(['erro' => 'Rota não encontrada'], 404);
    }

    /**
     * Executa a cadeia de middlewares em cebola (pipeline).
     *
     * @param array<int, mixed> $middlewares
     */
    private function executarPipeline(Request $requisicao, array $middlewares, mixed $acao): Response
    {
        $manipuladorFinal = function (Request $req) use ($acao): Response {
            return $this->executarAcao($req, $acao);
        };

        $pipeline = array_reduce(
            array_reverse($middlewares),
            function (callable $proximo, mixed $middleware): callable {
                return function (Request $req) use ($middleware, $proximo): Response {
                    $instancia = $middleware;

                    if (is_string($middleware)) {
                        if ($this->container !== null && $this->container->has($middleware)) {
                            $instancia = $this->container->get($middleware);
                        } elseif (class_exists($middleware)) {
                            $instancia = new $middleware();
                        }
                    }

                    if ($instancia instanceof MiddlewareInterface) {
                        return $instancia->processar($req, $proximo);
                    }

                    if (is_callable($instancia)) {
                        return $instancia($req, $proximo);
                    }

                    throw new RuntimeException("Middleware inválido ou não executável fornecido.");
                };
            },
            $manipuladorFinal
        );

        return $pipeline($requisicao);
    }

    /**
     * Executa a ação da rota (Callable, Controller@metodo ou [Classe, metodo]).
     */
    private function executarAcao(Request $requisicao, mixed $acao): Response
    {
        if (is_callable($acao)) {
            $resultado = $acao($requisicao);
            return $this->normalizarResposta($resultado);
        }

        if (is_array($acao) && count($acao) === 2) {
            [$classeOuObjeto, $metodo] = $acao;
            $instancia = is_string($classeOuObjeto)
                ? ($this->container?->has($classeOuObjeto)
                    ? $this->container->get($classeOuObjeto)
                    : new $classeOuObjeto())
                : $classeOuObjeto;

            $resultado = $instancia->$metodo($requisicao);
            return $this->normalizarResposta($resultado);
        }

        if (is_string($acao) && str_contains($acao, '@')) {
            [$classe, $metodo] = explode('@', $acao, 2);
            $instancia = $this->container?->has($classe) ? $this->container->get($classe) : new $classe();
            $resultado = $instancia->$metodo($requisicao);
            return $this->normalizarResposta($resultado);
        }

        throw new RuntimeException("Ação de rota inválida ou não suportada.");
    }

    private function normalizarResposta(mixed $resultado): Response
    {
        if ($resultado instanceof Response) {
            return $resultado;
        }

        if (is_array($resultado)) {
            return Response::json($resultado);
        }

        if (is_string($resultado)) {
            return Response::html($resultado);
        }

        return new Response();
    }
}
