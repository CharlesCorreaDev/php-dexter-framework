# Obtém os modificadores de classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getmodifiers.php

---

# ReflectionClass::getModifiers

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getModifiers — Obtém os modificadores de classe

### Descrição

public function **ReflectionClass::getModifiers**(): [int](language.types.integer.md)

Retorna um campo de bits dos modificadores de acesso para esta classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna máscara de bits de [constantes modificadoras](class.reflectionclass.md#reflectionclass.constants.modifiers).

### Veja também

- [ReflectionClass::getProperties()](reflectionclass.getproperties.md) - Obtém propriedades
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
