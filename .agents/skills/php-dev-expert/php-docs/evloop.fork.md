# Cria um objeto observador EvFork associado à instância atual
  do laço de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.fork.php

---

# EvLoop::fork

(PECL ev >= 0.2.0)

EvLoop::fork — Cria um objeto observador EvFork associado à instância atual
do laço de eventos

### Descrição

final
public
function **EvLoop::fork**(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
): [EvFork](class.evfork.md)

Cria um objeto observador EvFork associado à instância atual do laço
de eventos.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
[EvFork::\_\_construct()](evfork.construct.md).

### Valor Retornado

Retorna um objeto EvFork em caso de sucesso.

### Veja também

- [EvFork::\_\_construct()](evfork.construct.md) - Constrói o objeto observador EvFork

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
