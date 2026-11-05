# Obtém parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getparameters.php

---

# ReflectionFunctionAbstract::getParameters

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getParameters — Obtém parâmetros

### Descrição

public function **ReflectionFunctionAbstract::getParameters**(): [array](language.types.array.md)

Obtém os parâmetros como um array de [ReflectionParameter](class.reflectionparameter.md),
na ordem em que são definidos na fonte.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Os parâmetros, como um objeto [ReflectionParameter](class.reflectionparameter.md).

### Veja também

- [ReflectionFunctionAbstract::getNumberOfParameters()](reflectionfunctionabstract.getnumberofparameters.md) - Obtém o número de parâmetros
- [func\_get\_args()](function.func-get-args.md) - Retorna um array contendo uma lista de argumentos da função

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
