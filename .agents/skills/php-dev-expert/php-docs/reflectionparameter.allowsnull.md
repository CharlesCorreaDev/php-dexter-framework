# Verifica se nulo é permitido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.allowsnull.php

---

# ReflectionParameter::allowsNull

(PHP 5, PHP 7, PHP 8)

ReflectionParameter::allowsNull — Verifica se nulo é permitido

### Descrição

public function **ReflectionParameter::allowsNull**(): [bool](language.types.boolean.md)

Verifica se o parâmetro permite **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se **`null`** é permitido, caso contrário **`false`**

### Veja também

- [ReflectionParameter::isOptional()](reflectionparameter.isoptional.md) - Verifica se opcional

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
