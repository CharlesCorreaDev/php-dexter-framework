# A classe Swoole\Event

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-event.php

---

# A classe Swoole\Event

(PECL swoole >= 1.9.0)

## Introdução

A extensão Swoole fornece interfaces de baixo nível para manipular diretamente o loop de eventos subjacente (epoll/kqueue/poll/select).
Isso permite adicionar sockets criados por outras extensões ou pelas extensões de stream/socket do PHP ao EventLoop do Swoole.

> **Nota**:
>
> O módulo Event é de baixo nível, constituindo um encapsulamento básico do epoll. Os usuários devem ter experiência com programação de multiplexação de E/S.

## Prioridade do evento

1. Funções de callback de tratamento de sinais definidas via Process::signal
2. Funções de callback de temporizador definidas via Timer::tick e Timer::after
3. Funções de execução adiada definidas via Event::defer
4. Funções de callback periódicas definidas via Event::cycle

## Tipo de Socket de Evento do Swoole

`fd` [int](language.types.integer.md)
:   Descritores de arquivo, incluindo Swoole\Client->$sock, Swoole\Process->$pipe ou qualquer outro descritor de arquivo (fd).

`stream resource` [resource](language.types.resource.md)
:   Recursos criados por stream\_socket\_client/fsockopen.

`socket resource` [resource](language.types.resource.md)
:   Recursos criados pela função `socket\_create` da extensão `sockets` exigem
    a flag `--enable-sockets` durante a compilação do Swoole.

`object` [object](language.types.object.md)
:   O Swoole converte automaticamente `Swoole\Process` em UnixSocket e `Swoole\Client` em
    sockets de cliente conectados, em um nível de infraestrutura subjacente.

## Resumo da classe

class **Swoole\Event**
{

/\* Métodos \*/

public static function [add](swoole-event.add.md)(  
    [mixed](language.types.mixed.md) `$sock`,  
    [callable](language.types.callable.md) `$read_callback`,  
    [callable](language.types.callable.md) `$write_callback` = ?,  
    [int](language.types.integer.md) `$flags` = ?  
): [bool](language.types.boolean.md)

public static function [cycle](swoole-event.cycle.md)([callable](language.types.callable.md) `$callback`, [bool](language.types.boolean.md) `$before` = false): [bool](language.types.boolean.md)

public static function [defer](swoole-event.defer.md)([callable](language.types.callable.md) `$callback_function`): [void](language.types.void.md)

public static function [del](swoole-event.del.md)([mixed](language.types.mixed.md) `$sock`): [bool](language.types.boolean.md)

public static function [dispatch](swoole-event.dispatch.md)(): [void](language.types.void.md)

public static function [isset](swoole-event.isset.md)([mixed](language.types.mixed.md) `$fd`, [int](language.types.integer.md) `$events`
 =
SWOOLE\_EVENT\_READ | SWOOLE\_EVENT\_WRITE
): [bool](language.types.boolean.md)

public static function [set](swoole-event.set.md)(  
    [mixed](language.types.mixed.md) `$sock`,  
    [callable](language.types.callable.md) `$read_callback`,  
    [callable](language.types.callable.md) `$write_callback` = ?,  
    [int](language.types.integer.md) `$flags` = ?  
): [bool](language.types.boolean.md)

public static function [wait](swoole-event.wait.md)(): [void](language.types.void.md)

public static function [write](swoole-event.write.md)([mixed](language.types.mixed.md) `$fd`, [mixed](language.types.mixed.md) `$data`): [bool](language.types.boolean.md)

}

## Índice

- [Swoole\Event::add](swoole-event.add.md) — Adiciona um socket ao monitor de eventos subjacente
- [Swoole\Event::cycle](swoole-event.cycle.md) — Define uma função a ser executada ao final de cada iteração do loop de eventos
- [Swoole\Event::defer](swoole-event.defer.md) — Executa uma função no início do próximo ciclo de eventos
- [Swoole\Event::del](swoole-event.del.md) — Remove um socket do monitor de eventos
- [Swoole\Event::dispatch](swoole-event.dispatch.md) — Executa uma única iteração do loop de eventos
- [Swoole\Event::isset](swoole-event.isset.md) — Verifica se um socket está sendo monitorado no loop de eventos
- [Swoole\Event::set](swoole-event.set.md) — Modifica os callbacks e a máscara do listener de eventos
- [Swoole\Event::wait](swoole-event.wait.md) — Inicia o loop de eventos
- [Swoole\Event::write](swoole-event.write.md) — Escreve dados no socket de forma assíncrona

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
