# Verifica se a função é variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.isvariadic.php

---

# ReflectionFunctionAbstract::isVariadic

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::isVariadic — Verifica se a função é variável

### Descrição

public function **ReflectionFunctionAbstract::isVariadic**(): [bool](language.types.boolean.md)

Verifica se a função é
[variável](functions.arguments.md#functions.variable-arg-list).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a função for variável, caso contrário, **`false`**.

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
