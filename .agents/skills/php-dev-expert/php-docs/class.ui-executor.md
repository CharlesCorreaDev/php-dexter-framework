# Agendador de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-executor.php

---

# Agendador de execução

(UI 2.0.0)

## Introdução

Este recurso agenda execução repetitiva de uma função de retorno, útil para animações e outras atividades similares.

## Resumo da classe

abstract
class **UI\Executor**
{

/\* Constructor \*/

public function [\_\_construct](ui-executor.construct.md)()

public function [\_\_construct](ui-executor.construct.md)([int](language.types.integer.md) `$microseconds`)

public function [\_\_construct](ui-executor.construct.md)([int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds`)

/\* Métodos \*/

public function [kill](ui-executor.kill.md)(): [void](language.types.void.md)

abstract protected function [onExecute](ui-executor.onexecute.md)(): [void](language.types.void.md)

public function [setInterval](ui-executor.setinterval.md)([int](language.types.integer.md) `$microseconds`): [bool](language.types.boolean.md)

public function [setInterval](ui-executor.setinterval.md)([int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds`): [bool](language.types.boolean.md)

}

## Índice

- [UI\Executor::\_\_construct](ui-executor.construct.md) — Constrói um novo executor
- [UI\Executor::kill](ui-executor.kill.md) — Interrompe o executor
- [UI\Executor::onExecute](ui-executor.onexecute.md) — Função de retorno de execução
- [UI\Executor::setInterval](ui-executor.setinterval.md) — Manipulação de intervalo

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
