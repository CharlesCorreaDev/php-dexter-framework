# Suspende o laço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.suspend.php

---

# EvLoop::suspend

(PECL ev >= 0.2.0)

EvLoop::suspend — Suspende o laço

### Descrição

public
function **EvLoop::suspend**(): [void](language.types.void.md)

Os métodos **EvLoop::suspend()**
e
[EvLoop::resume()](evloop.resume.md)
suspendem e retomam um laço, respectivamente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvLoop::resume()](evloop.resume.md) - Retoma o laço de eventos padrão suspenso anteriormente
- [Ev::suspend()](ev.suspend.md) - Suspende o laço de eventos padrão

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
