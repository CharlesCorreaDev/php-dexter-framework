# Retoma o laço de eventos padrão suspenso anteriormente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.resume.php

---

# EvLoop::resume

(PECL ev >= 0.2.0)

EvLoop::resume — Retoma o laço de eventos padrão suspenso anteriormente

### Descrição

public
function **EvLoop::resume**(): [void](language.types.void.md)

Os métodos [EvLoop::suspend()](evloop.suspend.md)
e
**EvLoop::resume()**
suspendem e retomam um laço, respectivamente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvLoop::suspend()](evloop.suspend.md) - Suspende o laço
- [Ev::resume()](ev.resume.md) - Retoma o laço de eventos padrão suspenso anteriormente

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
