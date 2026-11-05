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
 * Aplica cabeçalhos de segurança obrigatórios contra ataques web comuns.
 */
final class SecureHeadersMiddleware implements MiddlewareInterface
{
    /**
     * @param array<string, string> $cabecalhosCustomizados
     */
    public function __construct(
        private array $cabecalhosCustomizados = []
    ) {
    }

    public function processar(Request $requisicao, callable $proximo): Response
    {
        /** @var Response $resposta */
        $resposta = $proximo($requisicao);

        $cabecalhosPadrao = [
            'X-Frame-Options' => 'DENY',
            'X-XSS-Protection' => '1; mode=block',
            'X-Content-Type-Options' => 'nosniff',
            'Referrer-Policy' => 'no-referrer-when-downgrade',
            'X-Permitted-Cross-Domain-Policies' => 'none',
            'Strict-Transport-Security' => 'max-age=31536000; includeSubDomains; preload'
        ];

        $todosCabecalhos = array_merge($cabecalhosPadrao, $this->cabecalhosCustomizados);

        foreach ($todosCabecalhos as $nome => $valor) {
            $resposta = $resposta->comCabecalho($nome, $valor);
        }

        return $resposta;
    }
}
