# Obtém os modificadores constantes da classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.getmodifiers.php

---

# ReflectionClassConstant::getModifiers

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClassConstant::getModifiers — Obtém os modificadores constantes da classe

### Descrição

public function **ReflectionClassConstant::getModifiers**(): [int](language.types.integer.md)

Retorna um campo de bits dos modificadores de acesso para esta constante de classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma representação numérica dos modificadores.
O significado real desses modificadores é descrito em
[constantes predefinidas](class.reflectionclassconstant.md#reflectionclassconstant.constants.modifiers).

### Veja também

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
