# Obtém o número da linha inicial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getstartline.php

---

# ReflectionClass::getStartLine

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getStartLine — Obtém o número da linha inicial

### Descrição

public function **ReflectionClass::getStartLine**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o número da linha inicial.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número da linha inicial, como um [int](language.types.integer.md) ou **`false`** se desconhecido.

### Veja também

- [ReflectionClass::getEndLine()](reflectionclass.getendline.md) - Obtém a linha final

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
