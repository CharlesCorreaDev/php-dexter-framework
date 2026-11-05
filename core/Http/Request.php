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

/**
 * Representação imutável de uma requisição HTTP recebida.
 */
final class Request
{
    /**
     * @param string $metodo
     * @param string $caminhoUri
     * @param array<string, mixed> $parametrosQuery
     * @param array<string, mixed> $dadosCorpo
     * @param array<string, string> $cabecalhos
     * @param array<string, mixed> $atributos
     * @param array<string, mixed> $arquivos
     * @param array<string, mixed> $servidor
     */
    public function __construct(
        private string $metodo,
        private string $caminhoUri,
        private array $parametrosQuery = [],
        private array $dadosCorpo = [],
        private array $cabecalhos = [],
        private array $atributos = [],
        private array $arquivos = [],
        private array $servidor = []
    ) {
        $this->metodo = strtoupper($metodo);
        $path = parse_url($caminhoUri, PHP_URL_PATH);
        $this->caminhoUri = '/' . trim(is_string($path) ? $path : '/', '/');
    }

    /**
     * Cria uma instância a partir das variáveis superglobais do PHP.
     */
    public static function criarDoAmbienteGlobal(): self
    {
        $metodo = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri = $_SERVER['REQUEST_URI'] ?? '/';

        $cabecalhos = [];
        foreach ($_SERVER as $chave => $valor) {
            if (str_starts_with($chave, 'HTTP_')) {
                $nomeCabecalho = str_replace('_', '-', strtolower(substr($chave, 5)));
                $cabecalhos[$nomeCabecalho] = (string) $valor;
            } elseif (in_array($chave, ['CONTENT_TYPE', 'CONTENT_LENGTH'], true)) {
                $nomeCabecalho = str_replace('_', '-', strtolower($chave));
                $cabecalhos[$nomeCabecalho] = (string) $valor;
            }
        }

        $dadosCorpo = $_POST;
        $conteudoCru = file_get_contents('php://input');
        if (!empty($conteudoCru) && empty($dadosCorpo)) {
            $json = json_decode($conteudoCru, true);
            if (is_array($json)) {
                $dadosCorpo = $json;
            }
        }

        return new self(
            metodo: $metodo,
            caminhoUri: $uri,
            parametrosQuery: $_GET,
            dadosCorpo: $dadosCorpo,
            cabecalhos: $cabecalhos,
            arquivos: $_FILES,
            servidor: $_SERVER
        );
    }

    public function obterMetodo(): string
    {
        return $this->metodo;
    }

    public function obterCaminhoUri(): string
    {
        return $this->caminhoUri;
    }

    /**
     * @return array<string, mixed>
     */
    public function obterParametrosQuery(): array
    {
        return $this->parametrosQuery;
    }

    public function obterParametroQuery(string $chave, mixed $padrao = null): mixed
    {
        return $this->parametrosQuery[$chave] ?? $padrao;
    }

    /**
     * @return array<string, mixed>
     */
    public function obterDadosCorpo(): array
    {
        return $this->dadosCorpo;
    }

    public function obterDadoCorpo(string $chave, mixed $padrao = null): mixed
    {
        return $this->dadosCorpo[$chave] ?? $padrao;
    }

    /**
     * @return array<string, string>
     */
    public function obterCabecalhos(): array
    {
        return $this->cabecalhos;
    }

    public function obterCabecalho(string $nome, ?string $padrao = null): ?string
    {
        $nomeNormalizado = strtolower($nome);
        return $this->cabecalhos[$nomeNormalizado] ?? $padrao;
    }

    public function obterIpCliente(): string
    {
        return $this->servidor['HTTP_X_FORWARDED_FOR']
            ?? $this->servidor['HTTP_CLIENT_IP']
            ?? $this->servidor['REMOTE_ADDR']
            ?? '127.0.0.1';
    }

    public function comAtributo(string $chave, mixed $valor): self
    {
        $clone = clone $this;
        $clone->atributos[$chave] = $valor;
        return $clone;
    }

    public function obterAtributo(string $chave, mixed $padrao = null): mixed
    {
        return $this->atributos[$chave] ?? $padrao;
    }

    /**
     * @return array<string, mixed>
     */
    public function obterAtributos(): array
    {
        return $this->atributos;
    }

    /**
     * @return array<string, mixed>
     */
    public function obterArquivos(): array
    {
        return $this->arquivos;
    }
}
