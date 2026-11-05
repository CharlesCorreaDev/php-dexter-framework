# Retorna profundidade de recursão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.depth.php

---

# Ev::depth

(PECL ev >= 0.2.0)

Ev::depth — Retorna profundidade de recursão

### Descrição

final
public
static
function **Ev::depth**(): [int](language.types.integer.md)

O número de vezes que
[Ev::run()](ev.run.md)
foi acionado menos o número de vezes que
[Ev::run()](ev.run.md)
saiu normalmente, em outras palavras, a profundidade da recursão. Fora de
[Ev::run()](ev.run.md),
este número é
`0`.
Em uma função de retorno, este número é
`1`,
a menos que
[Ev::run()](ev.run.md)
tenha sido invocado recursivamente (ou por outro thread), neste caso o número é
maior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**ev\_depth()**
retorna a profundidade da recursão do laço padrão.

### Veja também

- [Ev::iteration()](ev.iteration.md) - Retorna o número de vezes que o laço de eventos padrão pesquisou novos
  eventos

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
