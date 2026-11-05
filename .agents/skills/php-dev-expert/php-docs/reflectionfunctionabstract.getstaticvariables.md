# Obtém variáveis estáticas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getstaticvariables.php

---

# ReflectionFunctionAbstract::getStaticVariables

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getStaticVariables — Obtém variáveis estáticas

### Descrição

public function **ReflectionFunctionAbstract::getStaticVariables**(): [array](language.types.array.md)

Obtém as variáveis estáticas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de variáveis estáticas.

### Veja também

- [ReflectionFunctionAbstract::getParameters()](reflectionfunctionabstract.getparameters.md) - Obtém parâmetros

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
