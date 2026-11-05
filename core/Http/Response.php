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
 * Representação imutável de uma resposta HTTP a ser enviada ao cliente.
 */
final class Response
{
    /**
     * @param string $conteudo
     * @param int $codigoStatus
     * @param array<string, string> $cabecalhos
     */
    public function __construct(
        private string $conteudo = '',
        private int $codigoStatus = 200,
        private array $cabecalhos = []
    ) {
    }

    /**
     * Retorna uma resposta estruturada em JSON.
     *
     * @param mixed $dados
     * @param int $codigoStatus
     * @param array<string, string> $cabecalhos
     */
    public static function json(mixed $dados, int $codigoStatus = 200, array $cabecalhos = []): self
    {
        $corpo = json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
        $cabecalhos['Content-Type'] = 'application/json; charset=utf-8';

        return new self($corpo, $codigoStatus, $cabecalhos);
    }

    /**
     * Retorna uma resposta em formato HTML (ex: Twig).
     *
     * @param string $html
     * @param int $codigoStatus
     * @param array<string, string> $cabecalhos
     */
    public static function html(string $html, int $codigoStatus = 200, array $cabecalhos = []): self
    {
        $cabecalhos['Content-Type'] = 'text/html; charset=utf-8';
        return new self($html, $codigoStatus, $cabecalhos);
    }

    /**
     * Retorna uma resposta de redirecionamento.
     */
    public static function redirecionar(string $url, int $codigoStatus = 302): self
    {
        return new self('', $codigoStatus, ['Location' => $url]);
    }

    public function obterConteudo(): string
    {
        return $this->conteudo;
    }

    public function obterCodigoStatus(): int
    {
        return $this->codigoStatus;
    }

    /**
     * @return array<string, string>
     */
    public function obterCabecalhos(): array
    {
        return $this->cabecalhos;
    }

    public function comCabecalho(string $nome, string $valor): self
    {
        $clone = clone $this;
        $clone->cabecalhos[$nome] = $valor;
        return $clone;
    }

    public function comStatus(int $codigo): self
    {
        $clone = clone $this;
        $clone->codigoStatus = $codigo;
        return $clone;
    }
}
