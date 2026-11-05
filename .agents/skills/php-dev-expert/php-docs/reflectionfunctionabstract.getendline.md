# Obtém o número da linha final

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getendline.php

---

# ReflectionFunctionAbstract::getEndLine

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getEndLine — Obtém o número da linha final

### Descrição

public function **ReflectionFunctionAbstract::getEndLine**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o número da linha final.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número da linha final da função definida pelo usuário ou **`false`** se desconhecido.

### Veja também

- [ReflectionFunctionAbstract::getStartLine()](reflectionfunctionabstract.getstartline.md) - Obtém o número da linha inicial

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
