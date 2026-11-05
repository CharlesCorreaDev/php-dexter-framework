# Obtém o número da linha inicial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getstartline.php

---

# ReflectionFunctionAbstract::getStartLine

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getStartLine — Obtém o número da linha inicial

### Descrição

public function **ReflectionFunctionAbstract::getStartLine**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o número da linha inicial da função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número da linha inicial, ou **`false`** se desconhecido.

### Veja também

- [ReflectionFunctionAbstract::getEndLine()](reflectionfunctionabstract.getendline.md) - Obtém o número da linha final

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
