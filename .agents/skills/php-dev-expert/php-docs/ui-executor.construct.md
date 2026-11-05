# Constrói um novo executor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-executor.construct.php

---

# UI\Executor::\_\_construct

(UI 2.0.0)

UI\Executor::\_\_construct — Constrói um novo executor

### Descrição

public function **UI\Executor::\_\_construct**()

public function **UI\Executor::\_\_construct**([int](language.types.integer.md) `$microseconds`)

public function **UI\Executor::\_\_construct**([int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds`)

Constrói um novo executor com o intervalo fornecido, não iniciará a execução até entrar no laço principal.

### Parâmetros

`seconds`
:   Segundos extre execuções.

`microseconds`
:   Microssegundos entre execuções.

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
