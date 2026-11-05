# A classe SyncEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.syncevent.php

---

# A classe SyncEvent

(PECL sync >= 1.0.0)

## Introdução

Uma implementação nativa e multiplataforma de objetos de evento nomeados e não nomeados.
Ambos os objetos de evento automáticos e manuais são suportados.

Um objeto de evento espera, sem fazer polling, que o objeto seja acionado/configurado.
Uma instância aguarda o objeto de evento enquanto outra instancia o
aciona/configura. Objetos de evento são úteis onde um processo em execução contínua,
de outra forma, faria polling em um recurso (por exemplo, verificando se dados enviados precisam
ser processados).

## Resumo da classe

class **SyncEvent**
{

/\* Métodos \*/

public function [\_\_construct](syncevent.construct.md)([string](language.types.string.md) `$name` = ?, [bool](language.types.boolean.md) `$manual` = **`false`**, [bool](language.types.boolean.md) `$prefire` = **`false`**)

public function [fire](syncevent.fire.md)(): [bool](language.types.boolean.md)

public function [reset](syncevent.reset.md)(): [bool](language.types.boolean.md)

public function [wait](syncevent.wait.md)([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

}

## Índice

- [SyncEvent::\_\_construct](syncevent.construct.md) — Constrói um novo objeto SyncEvent
- [SyncEvent::fire](syncevent.fire.md) — Ativa/configura o evento
- [SyncEvent::reset](syncevent.reset.md) — Redefine um evento manual
- [SyncEvent::wait](syncevent.wait.md) — Espera o evento ser ativado/configurado

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
