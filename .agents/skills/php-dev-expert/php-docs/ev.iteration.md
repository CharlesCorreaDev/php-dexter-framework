# Retorna o número de vezes que o laço de eventos padrão pesquisou novos
  eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.iteration.php

---

# Ev::iteration

(PECL ev >= 0.2.0)

Ev::iteration — Retorna o número de vezes que o laço de eventos padrão pesquisou novos
eventos

### Descrição

final
public
static
function **Ev::iteration**(): [int](language.types.integer.md)

Retorna o número de vezes que o laço de eventos padrão pesquisou novos eventos.
Às vezes útil como contador de gerações.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de pesquisas do laço de eventos padrão.

### Veja também

- [Ev::depth()](ev.depth.md) - Retorna profundidade de recursão

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
