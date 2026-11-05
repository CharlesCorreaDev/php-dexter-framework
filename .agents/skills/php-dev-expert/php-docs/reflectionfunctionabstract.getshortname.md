# Obtém o nome curto da função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getshortname.php

---

# ReflectionFunctionAbstract::getShortName

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getShortName — Obtém o nome curto da função

### Descrição

public function **ReflectionFunctionAbstract::getShortName**(): [string](language.types.string.md)

Obtém o nome curto da função (sem a parte do namespace).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome curto da função.

### Veja também

- [ReflectionFunctionAbstract::getNamespaceName()](reflectionfunctionabstract.getnamespacename.md) - Obtém o nome do namespace
- [namespaces](language.namespaces.md)

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
