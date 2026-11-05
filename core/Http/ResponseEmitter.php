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
 * Emissor de respostas HTTP para o cliente.
 */
final class ResponseEmitter
{
    /**
     * Envia os cabeçalhos e o corpo da resposta HTTP.
     */
    public function emitir(Response $resposta): void
    {
        if (!headers_sent()) {
            http_response_code($resposta->obterCodigoStatus());

            foreach ($resposta->obterCabecalhos() as $nome => $valor) {
                header("{$nome}: {$valor}", true);
            }
        }

        echo $resposta->obterConteudo();
    }
}
