# Obtém o tipo de uma constante de classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.gettype.php

---

# ReflectionClassConstant::getType

(PHP 8 >= 8.3.0)

ReflectionClassConstant::getType — Obtém o tipo de uma constante de classe

### Descrição

public function **ReflectionClassConstant::getType**(): [?](language.types.null.md)[ReflectionType](class.reflectiontype.md)

Obtém o tipo associado de uma constante de classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [ReflectionType](class.reflectiontype.md) se um tipo constante for
especificado, **`null`** caso contrário.

### Veja também

- [ReflectionClassConstant::hasType()](reflectionclassconstant.hastype.md) - Verifica se uma constante de classe tem um tipo
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
