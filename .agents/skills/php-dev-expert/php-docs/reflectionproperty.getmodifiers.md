# Obtém os modificadores de propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.getmodifiers.php

---

# ReflectionProperty::getModifiers

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::getModifiers — Obtém os modificadores de propriedade

### Descrição

public function **ReflectionProperty::getModifiers**(): [int](language.types.integer.md)

Obtém os modificadores.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma representação numérica dos modificadores.
O significado real desses modificadores é descrito em
[constantes predefinidas](class.reflectionproperty.md#reflectionproperty.constants.modifiers).

### Veja também

- [ReflectionProperty::isPrivate()](reflectionproperty.isprivate.md) - Verifica se a propriedade é privada
- [Reflection::getModifierNames()](reflection.getmodifiernames.md) - Obtém os nomes dos modificadores

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
