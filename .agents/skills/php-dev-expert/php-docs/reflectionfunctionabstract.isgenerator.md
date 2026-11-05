# Retorna se esta função é um gerador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.isgenerator.php

---

# ReflectionFunctionAbstract::isGenerator

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::isGenerator — Retorna se esta função é um gerador

### Descrição

public function **ReflectionFunctionAbstract::isGenerator**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a função for geradora, **`false`** se não for ou **`null`**
em caso de falha.

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
