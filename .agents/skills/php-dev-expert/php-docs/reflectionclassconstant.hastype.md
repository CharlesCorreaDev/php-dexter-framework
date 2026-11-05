# Verifica se uma constante de classe tem um tipo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.hastype.php

---

# ReflectionClassConstant::hasType

(PHP 8 >= 8.3.0)

ReflectionClassConstant::hasType — Verifica se uma constante de classe tem um tipo

### Descrição

public function **ReflectionClassConstant::hasType**(): [bool](language.types.boolean.md)

Verifica se a constante de classe tem um tipo associado a ela.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se um tipo for especificado, **`false`** caso contrário.

### Veja também

- [ReflectionClassConstant::getType()](reflectionclassconstant.gettype.md) - Obtém o tipo de uma constante de classe
- [ReflectionType](class.reflectiontype.md)

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
