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

namespace Dexter\Http\Middleware;

use Dexter\Http\Request;
use Dexter\Http\Response;

/**
 * Middleware para validação e proteção contra Cross-Site Request Forgery (CSRF).
 */
final class CsrfProtectionMiddleware implements MiddlewareInterface
{
    public function __construct(
        private string $nomeChaveSessao = '_dexter_csrf_token',
        private string $nomeCampoFormulario = '_token'
    ) {
    }

    public function processar(Request $requisicao, callable $proximo): Response
    {
        $metodo = $requisicao->obterMetodo();

        // Métodos seguros não realizam mutação de estado
        if (in_array($metodo, ['GET', 'HEAD', 'OPTIONS'], true)) {
            return $proximo($requisicao);
        }

        $tokenEsperado = $this->obterTokenSessao();
        $tokenEnviado = (string) ($requisicao->obterDadoCorpo($this->nomeCampoFormulario)
            ?? $requisicao->obterCabecalho('x-csrf-token')
            ?? '');

        if (empty($tokenEsperado) || empty($tokenEnviado) || !hash_equals($tokenEsperado, $tokenEnviado)) {
            return Response::json(['erro' => 'Token CSRF inválido ou expirado.'], 419);
        }

        return $proximo($requisicao);
    }

    public function gerarToken(): string
    {
        $token = bin2hex(random_bytes(32));
        if (session_status() === PHP_SESSION_ACTIVE) {
            $_SESSION[$this->nomeChaveSessao] = $token;
        }
        return $token;
    }

    private function obterTokenSessao(): ?string
    {
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION[$this->nomeChaveSessao])) {
            return (string) $_SESSION[$this->nomeChaveSessao];
        }
        return null;
    }
}
