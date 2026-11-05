# Obtém o número de parâmetros necessários

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getnumberofrequiredparameters.php

---

# ReflectionFunctionAbstract::getNumberOfRequiredParameters

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getNumberOfRequiredParameters — Obtém o número de parâmetros necessários

### Descrição

public function **ReflectionFunctionAbstract::getNumberOfRequiredParameters**(): [int](language.types.integer.md)

Obtém o número de parâmetros necessários que uma função define.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de parâmetros necessários.

### Veja também

- [ReflectionFunctionAbstract::getNumberOfParameters()](reflectionfunctionabstract.getnumberofparameters.md) - Obtém o número de parâmetros

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
