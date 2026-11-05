# Verifica se é interno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.isinternal.php

---

# ReflectionFunctionAbstract::isInternal

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::isInternal — Verifica se é interno

### Descrição

public function **ReflectionFunctionAbstract::isInternal**(): [bool](language.types.boolean.md)

Verifica se a função é interna, em vez de definida pelo usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se for interno, caso contrário **`false`**

### Veja também

- [ReflectionFunctionAbstract::isUserDefined()](reflectionfunctionabstract.isuserdefined.md) - Verifica se foi definido pelo usuário

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
