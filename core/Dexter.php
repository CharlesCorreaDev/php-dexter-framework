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

namespace Dexter;

/**
 * Classe de inicialização e metadados do núcleo do Dexter Framework.
 */
final class Dexter
{
    public const string VERSAO = '0.1.0-beta';
    public const string FUSO_HORARIO = 'America/Sao_Paulo';
    public const string IDIOMA = 'pt-BR';

    /**
     * Retorna a versão ativa do framework.
     */
    public static function versao(): string
    {
        return self::VERSAO;
    }
}
