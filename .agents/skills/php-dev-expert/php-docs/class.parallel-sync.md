# A classe parallel\Sync

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parallel-sync.php

---

# A classe parallel\Sync

(1.1.0)

## Sincronização de baixo nível

A classe **parallel\Sync** fornece acesso a sincronização primitiva de baixo nível, mutex, variáveis de condição e permite a implementação de semáforos.

A sincronização para a maioria das aplicações é muito melhor implementada usando canais; no entanto, em alguns casos, os autores de código de baixo nível podem achar útil poder acessar
esses mecanismos de nível inferior.

## Resumo da classe

final
class **parallel\Sync**
{

/\* Constructor \*/

public function [\_\_construct](parallel-sync.construct.md)()

public function [\_\_construct](parallel-sync.construct.md)(scalar `$value`)

/\* Access \*/

public function [get](parallel-sync.get.md)(): scalar

public function [set](parallel-sync.set.md)(scalar `$value`)

/\* Synchronization \*/

public function [wait](parallel-sync.wait.md)()

public function [notify](parallel-sync.notify.md)([bool](language.types.boolean.md) `$all` = ?)

public function [\_\_invoke](parallel-sync.invoke.md)([callable](language.types.callable.md) `$critical`)

}

## Índice

- [parallel\Sync::\_\_construct](parallel-sync.construct.md) — Construção
- [parallel\Sync::get](parallel-sync.get.md) — Acesso
- [parallel\Sync::set](parallel-sync.set.md) — Acesso
- [parallel\Sync::wait](parallel-sync.wait.md) — Sincronização
- [parallel\Sync::notify](parallel-sync.notify.md) — Sincronização
- [parallel\Sync::\_\_invoke](parallel-sync.invoke.md) — Sincronização

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
