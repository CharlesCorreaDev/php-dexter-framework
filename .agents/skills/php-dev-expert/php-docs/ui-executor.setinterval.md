# Manipulação de intervalo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-executor.setinterval.php

---

# UI\Executor::setInterval

(UI 2.0.0)

UI\Executor::setInterval — Manipulação de intervalo

### Descrição

public function **UI\Executor::setInterval**([int](language.types.integer.md) `$microseconds`): [bool](language.types.boolean.md)

public function **UI\Executor::setInterval**([int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds`): [bool](language.types.boolean.md)

Define o novo intervalo. Um intervalo de 0 irá suspender o executor até que um novo intervalo seja definido.

### Parâmetros

`seconds`

`microseconds`

### Valor Retornado

Indicação de sucesso.

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
