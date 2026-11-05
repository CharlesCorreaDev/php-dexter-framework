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

namespace Dexter\Container;

use DI\Container;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

/**
 * Fábrica para inicialização do container PHP-DI com definições padronizadas do Dexter Framework.
 */
final class ContainerFactory
{
    /**
     * @param array<string, mixed> $definicoesCustomizadas
     */
    public static function criar(
        array $definicoesCustomizadas = [],
        bool $compilado = false,
        string $diretorioCache = ''
    ): ContainerInterface {
        $builder = new ContainerBuilder();
        $builder->useAutowiring(true);

        if ($compilado && !empty($diretorioCache)) {
            $builder->enableCompilation($diretorioCache);
        }

        $definicoesPadrao = [
            // Definições nativas do Core podem ser injetadas aqui
        ];

        $builder->addDefinitions(array_merge($definicoesPadrao, $definicoesCustomizadas));

        return $builder->build();
    }
}
