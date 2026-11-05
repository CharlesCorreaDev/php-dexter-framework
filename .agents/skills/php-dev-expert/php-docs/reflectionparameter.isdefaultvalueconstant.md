# Retorna se o valor padrão deste parâmetro é uma constante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.isdefaultvalueconstant.php

---

# ReflectionParameter::isDefaultValueConstant

(PHP 5 >= 5.4.6, PHP 7, PHP 8)

ReflectionParameter::isDefaultValueConstant — Retorna se o valor padrão deste parâmetro é uma constante

### Descrição

public function **ReflectionParameter::isDefaultValueConstant**(): [bool](language.types.boolean.md)

Retorna se o valor padrão deste parâmetro é uma constante.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o valor padrão for constante e **`false`** caso contrário.

### Veja também

- [ReflectionParameter::getDefaultValueConstantName()](reflectionparameter.getdefaultvalueconstantname.md) - Retorna o nome da constante do valor padrão se o valor padrão for constante ou nulo
- [ReflectionParameter::isDefaultValueAvailable()](reflectionparameter.isdefaultvalueavailable.md) - Verifica se um valor padrão está disponível

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
