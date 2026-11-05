# Função de retorno de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-executor.onexecute.php

---

# UI\Executor::onExecute

(UI 2.0.0)

UI\Executor::onExecute — Função de retorno de execução

### Descrição

abstract protected function **UI\Executor::onExecute**(): [void](language.types.void.md)

Deve ser repetidamente enfileirado para execução no thread principal.

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
