# Obtém comentário doc

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getdoccomment.php

---

# ReflectionFunctionAbstract::getDocComment

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getDocComment — Obtém comentário doc

### Descrição

public function **ReflectionFunctionAbstract::getDocComment**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtenha um comentário doc de uma função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O comentário doc, se existir, caso contrário, **`false`**

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
