# Retorna se este parâmetro pode ser passado por valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.canbepassedbyvalue.php

---

# ReflectionParameter::canBePassedByValue

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionParameter::canBePassedByValue — Retorna se este parâmetro pode ser passado por valor

### Descrição

public function **ReflectionParameter::canBePassedByValue**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o parâmetro puder ser passado por valor, **`false`** caso contrário.

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
