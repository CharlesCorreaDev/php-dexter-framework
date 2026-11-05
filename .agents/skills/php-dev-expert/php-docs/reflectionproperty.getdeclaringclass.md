# Obtém a classe declarada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.getdeclaringclass.php

---

# ReflectionProperty::getDeclaringClass

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::getDeclaringClass — Obtém a classe declarada

### Descrição

public function **ReflectionProperty::getDeclaringClass**(): [ReflectionClass](class.reflectionclass.md)

Obtém a classe declarada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [ReflectionClass](class.reflectionclass.md).

### Veja também

- [ReflectionProperty::getName()](reflectionproperty.getname.md) - Obtém o nome da propriedade

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
