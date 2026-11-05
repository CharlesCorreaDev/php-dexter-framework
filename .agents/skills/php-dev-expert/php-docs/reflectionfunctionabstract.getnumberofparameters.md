# Obtém o número de parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getnumberofparameters.php

---

# ReflectionFunctionAbstract::getNumberOfParameters

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getNumberOfParameters — Obtém o número de parâmetros

### Descrição

public function **ReflectionFunctionAbstract::getNumberOfParameters**(): [int](language.types.integer.md)

Obtenha o número de parâmetros que uma função define, ambos opcionais
e obrigatórios.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de parâmetros.

### Veja também

- [ReflectionFunctionAbstract::getNumberOfRequiredParameters()](reflectionfunctionabstract.getnumberofrequiredparameters.md) - Obtém o número de parâmetros necessários
- [func\_num\_args()](function.func-num-args.md) - Retorna o número de argumentos passados ​​para a função

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
