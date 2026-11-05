# Cria objeto observador EvIdle associado à instância de laço de evento
  atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.idle.php

---

# EvLoop::idle

(PECL ev >= 0.2.0)

EvLoop::idle — Cria objeto observador EvIdle associado à instância de laço de evento
atual

### Descrição

final
public
function **EvLoop::idle**(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
): [EvIdle](class.evidle.md)

Cria objeto observador EvIdle associado à instância de laço de evento
atual.

### Parâmetros

Todos os parâmetros têm o mesmo significado que no método
[EvIdle::\_\_construct()](evidle.construct.md)

### Valor Retornado

Retorna um objeto EvIdle em caso de sucesso.

### Veja também

- [EvIdle::\_\_construct()](evidle.construct.md) - Constrói o objeto observador EvIdle

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
