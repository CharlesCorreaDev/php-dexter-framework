# Obtém a função de declaração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.getdeclaringfunction.php

---

# ReflectionParameter::getDeclaringFunction

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

ReflectionParameter::getDeclaringFunction — Obtém a função de declaração

### Descrição

public function **ReflectionParameter::getDeclaringFunction**(): [ReflectionFunctionAbstract](class.reflectionfunctionabstract.md)

Obtém a função de declaração.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [ReflectionFunction](class.reflectionfunction.md).

### Veja também

- [ReflectionParameter::getDeclaringClass()](reflectionparameter.getdeclaringclass.md) - Obtém a classe declarada

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
