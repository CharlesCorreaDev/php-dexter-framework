# Obtém comentários doc

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.getdoccomment.php

---

# ReflectionClassConstant::getDocComment

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClassConstant::getDocComment — Obtém comentários doc

### Descrição

public function **ReflectionClassConstant::getDocComment**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém comentários doc de uma constante de classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O comentário doc, se existir, caso contrário, **`false`**

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
