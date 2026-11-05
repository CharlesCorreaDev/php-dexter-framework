# Estabelece o horário atual consultando o kernel, atualizando o
   horário retornado por EvLoop::now no progresso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.nowupdate.php

---

# EvLoop::nowUpdate

(PECL ev >= 0.2.0)

EvLoop::nowUpdate — Estabelece o horário atual consultando o kernel, atualizando o
horário retornado por EvLoop::now no progresso

### Descrição

public
function **EvLoop::nowUpdate**(): [void](language.types.void.md)

Estabelece o tempo atual consultando o kernel, atualizando o horário
retornado por
[EvLoop::now()](evloop.now.md)
no progresso. Esta é uma operação custosa e geralmente
é feita automaticamente
dentro de [EvLoop::run()](evloop.run.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvLoop::now()](evloop.now.md) - Retorna o "horário do laço de eventos" atual
- [Ev::nowUpdate()](ev.nowupdate.md) - Estabelece a hora atual consultando o kernel, atualizando o horário
  retornado por Ev::now no progresso

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
