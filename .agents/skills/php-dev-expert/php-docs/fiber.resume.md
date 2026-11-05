# Retoma a execução de uma Fiber com um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.resume.php

---

# Fiber::resume

(PHP 8 >= 8.1.0)

Fiber::resume — Retoma a execução de uma Fiber com um valor

### Descrição

public function **Fiber::resume**([mixed](language.types.mixed.md) `$value` = **`null`**): [mixed](language.types.mixed.md)

Retoma a execução da Fiber usando o valor fornecido como resultado da chamada [Fiber::suspend()](fiber.suspend.md) atual.

Se a Fiber não estiver suspensa quando este método for chamado, uma exceção [FiberError](class.fibererror.md) será disparada.

### Parâmetros

`value`
:   O valor para retomar a Fiber. Este valor será o valor de retorno da chamada atual de
    [Fiber::suspend()](fiber.suspend.md).

### Valor Retornado

O valor fornecido para a próxima chamada de [Fiber::suspend()](fiber.suspend.md) ou **`null`** se a Fiber retornar.
Se a Fiber disparar uma exceção antes de ser suspensa, ela será disparada a partir da chamada a este método.

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
