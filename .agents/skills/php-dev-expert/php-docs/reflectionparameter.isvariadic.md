# Verifica se o parâmetro é variado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.isvariadic.php

---

# ReflectionParameter::isVariadic

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

ReflectionParameter::isVariadic — Verifica se o parâmetro é variado

### Descrição

public function **ReflectionParameter::isVariadic**(): [bool](language.types.boolean.md)

Verifica se o parâmetro foi declarado como
[parâmetro variável](functions.arguments.md#functions.variable-arg-list).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o parâmetro for variável, caso contrário **`false`**.

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
