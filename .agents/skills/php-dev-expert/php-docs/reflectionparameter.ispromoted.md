# Verifica se um parâmetro está promovido a uma propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.ispromoted.php

---

# ReflectionParameter::isPromoted

(PHP 8)

ReflectionParameter::isPromoted — Verifica se um parâmetro está promovido a uma propriedade

### Descrição

public function **ReflectionParameter::isPromoted**(): [bool](language.types.boolean.md)

Verifica se o parâmetro está
[promovido](language.oop5.decon.md#language.oop5.decon.constructor.promotion)
a uma propriedade.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o parâmetro está promovido a uma propriedade, **`false`** caso contrário.

### Veja também

- [ReflectionProperty::isPromoted()](reflectionproperty.ispromoted.md) - Verifica se a propriedade é promovida

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
