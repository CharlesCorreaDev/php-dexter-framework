# Inicia execução de uma Fibra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.start.php

---

# Fiber::start

(PHP 8 >= 8.1.0)

Fiber::start — Inicia execução de uma Fibra

### Descrição

public function **Fiber::start**([mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

Uma lista variável de argumentos a ser fornecida para o callable usado na construção da Fiber.

Se a Fiber já tiver sido iniciada quando este método for chamado, uma exceção [FiberError](class.fibererror.md) será disparada.

### Parâmetros

`args`
:   Os argumentos que serão utilizados na chamada ao callable fornecido ao construtor da Fiber.

### Valor Retornado

O valor fornecido à primeira chamada a [Fiber::suspend()](fiber.suspend.md) ou **`null`** se a Fiber retornar.
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
