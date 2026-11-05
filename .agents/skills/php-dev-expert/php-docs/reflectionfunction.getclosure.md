# Retorna um closure criado dinamicamente para a função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunction.getclosure.php

---

# ReflectionFunction::getClosure

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionFunction::getClosure — Retorna um closure criado dinamicamente para a função

### Descrição

public function **ReflectionFunction::getClosure**(): [Closure](class.closure.md)

Obtém um closure criado dinamicamente para a função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o [Closure](class.closure.md) recém-criado.

### Veja também

- [Sintaxe chamável de primeira classe](functions.first_class_callable_syntax.md)

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
