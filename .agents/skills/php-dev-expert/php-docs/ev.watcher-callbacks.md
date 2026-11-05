# Retornos de chamada do observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.watcher-callbacks.php

---

# Retornos de chamada do observador

Todos os observadores podem estar ativos (aguardando eventos) ou inativos (pausados). Somente
observadores ativos terão seus retornos de chamada invocados. Todos os retornos de chamada serão
chamados com pelo menos dois argumentos:
`watcher`
- o observador e
`revents`
uma máscara de bits de eventos recebidos.

Os retornos de chamada do observador são passados para os construtores do inspetor (as classes derivadas
de
[EvWatcher](class.evwatcher.md)
-
[EvCheck::\_\_construct()](evcheck.construct.md),
[EvChild::\_\_construct()](evchild.construct.md)
etc.). Um retorno de chamada do observador deve corresponder ao seguinte protótipo:

function **callback**(
[object](language.types.object.md) `$watcher`
 = NULL
, 
[int](language.types.integer.md) `$revents`
 = NULL
): [void](language.types.void.md)

`watcher`
:   A instância do observador
    (de uma classe que estende
    [EvWatcher](class.evwatcher.md)).

`revents`
:   [Eventos recebidos pelo observador](class.ev.md#ev.constants.watcher-revents).

Cada tipo de observador tem seu bit associado em
`revents`,
portanto, pode-se usar o mesmo retorno de chamada para vários observadores. A máscara de evento é
nomeada de acordo com o tipo, ou seja,
[EvChild](class.evchild.md)
(ou
[EvLoop::child()](evloop.child.md))
define
**`Ev::CHILD`**,
[EvPrepare](class.evprepare.md)
(ou
[EvLoop::prepare()](evloop.prepare.md))
define
**`Ev::PREPARE`**,
[EvPeriodic](class.evperiodic.md)
(ou
[EvLoop::periodic()](evloop.periodic.md))
define
**`Ev::PERIODIC`**
e assim por diante, com exceção de eventos de E/S (que podem definir ambos
os bits
**`Ev::READ`**
e
**`Ev::WRITE`**).

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
