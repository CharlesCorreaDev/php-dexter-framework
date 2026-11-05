# Interrompe o executor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-executor.kill.php

---

# UI\Executor::kill

(UI 2.0.0)

UI\Executor::kill — Interrompe o executor

### Descrição

public function **UI\Executor::kill**(): [void](language.types.void.md)

Interrompe um executor, que não poderá ser reiniciado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

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
