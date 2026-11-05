# Retorna se esta é uma trait

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.istrait.php

---

# ReflectionClass::isTrait

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionClass::isTrait — Retorna se esta é uma trait

### Descrição

public function **ReflectionClass::isTrait**(): [bool](language.types.boolean.md)

Verifica se esta [ReflectionClass](class.reflectionclass.md) se refere a uma trait

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se esta for uma trait, **`false`** caso contrário.

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
