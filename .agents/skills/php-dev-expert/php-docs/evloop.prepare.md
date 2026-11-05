# Cria um objeto observador EvPrepare associado à instância atual do
  laço de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.prepare.php

---

# EvLoop::prepare

(PECL ev >= 0.2.0)

EvLoop::prepare — Cria um objeto observador EvPrepare associado à instância atual do
laço de eventos

### Descrição

final
public
function **EvLoop::prepare**(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
): [EvPrepare](class.evprepare.md)

Cria um objeto observador EvPrepare associado à instância atual do
laço de eventos.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
**EvPrepare()**.

### Valor Retornado

Retorna um objeto EvPrepare em caso de sucesso.

### Veja também

- [EvPrepare::\_\_construct()](evprepare.construct.md) - Constrói objeto observador EvPrepare

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
