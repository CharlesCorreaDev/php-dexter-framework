# A classe EvWatcher

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evwatcher.php

---

# A classe EvWatcher

(PECL ev >= 0.2.0)

## Introdução

**EvWatcher**
é uma classe base para todos os observadores (
[EvCheck](class.evcheck.md),
[EvChild](class.evchild.md)
etc.). Como
o construtor de
**EvWatcher** é
abstract,
não se pode (e não precisa) criar objetos EvWatcher
diretamente.

## Resumo da classe

abstract
class **EvWatcher**
{

/\* Propriedades \*/

public
[$is\_active](class.evwatcher.md#evwatcher.props.is-active);

public
[$data](class.evwatcher.md#evwatcher.props.data);

public
[$is\_pending](class.evwatcher.md#evwatcher.props.is-pending);

public
[$priority](class.evwatcher.md#evwatcher.props.priority);

/\* Métodos \*/

abstract
public
function [\_\_construct](evwatcher.construct.md)()

public
function [clear](evwatcher.clear.md)(): [int](language.types.integer.md)

public
function [feed](evwatcher.feed.md)(
[int](language.types.integer.md) `$revents`
): [void](language.types.void.md)

public
function [getLoop](evwatcher.getloop.md)(): [EvLoop](class.evloop.md)

public
function [invoke](evwatcher.invoke.md)(
[int](language.types.integer.md) `$revents`
): [void](language.types.void.md)

public
function [keepalive](evwatcher.keepalive.md)(
[bool](language.types.boolean.md) `$value`
 = ?): [bool](language.types.boolean.md)

public
function [setCallback](evwatcher.setcallback.md)(
[callable](language.types.callable.md) `$callback`
): [void](language.types.void.md)

public
function [start](evwatcher.start.md)(): [void](language.types.void.md)

public
function [stop](evwatcher.stop.md)(): [void](language.types.void.md)

}

## Propriedades

is\_active
:   *Somente leitura*.
    **`true`** se o observador está ativo. **`false`** caso contrário.

data
:   Dados personalizados do usuário associados ao inspetor

is\_pending
:   *Somente leitura*.
    **`true`** se o observador estiver pendente, ou seja, possui eventos pendentes, mas
    seu retorno de chamada ainda não foi invocado. **`false`** caso contrário. Enquanto um observador
    estiver pendente (mas não ativo),
    *não*
    deve-se alterar sua prioridade.

priority
:   [int](language.types.integer.md)
    entre
    **`Ev::MINPRI`**
    e
    **`Ev::MAXPRI`**.
    Os observadores pendentes com prioridade mais alta serão invocados antes dos observadores
    com prioridade mais baixa, mas a prioridade não impedirá que os observadores sejam
    executados (exceto os
    observadores
    [EvIdle](class.evidle.md)).
    Os observadores [EvIdle](class.evidle.md)
    fornecem funcionalidade para suprimir a invocação quando eventos de prioridade
    mais alta estão pendentes.

## Índice

- [EvWatcher::clear](evwatcher.clear.md) — Limpa o status pendente do observador
- [EvWatcher::\_\_construct](evwatcher.construct.md) — Construtor abstrato de um objeto observador
- [EvWatcher::feed](evwatcher.feed.md) — Alimenta o conjunto de "revents" fornecido no laço de eventos
- [EvWatcher::getLoop](evwatcher.getloop.md) — Retorna o laço responsável pelo observador
- [EvWatcher::invoke](evwatcher.invoke.md) — Invoca a função de retorno do observador com a máscara de bits dos eventos
  recebidos fornecidos
- [EvWatcher::keepalive](evwatcher.keepalive.md) — Configura opção de impedir que o laço retorne
- [EvWatcher::setCallback](evwatcher.setcallback.md) — Define uma nova função de retorno para o observador
- [EvWatcher::start](evwatcher.start.md) — Inicia o observador
- [EvWatcher::stop](evwatcher.stop.md) — Interrrompe o observador

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
