# Retorna se esta é um enum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isenum.php

---

# ReflectionClass::isEnum

(PHP 8 >= 8.1.0)

ReflectionClass::isEnum — Retorna se esta é um enum

### Descrição

public function **ReflectionClass::isEnum**(): [bool](language.types.boolean.md)

Verifica se uma classe é um [enum](language.enumerations.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se esta é um [enum](language.enumerations.md), **`false`** caso contrário.

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
