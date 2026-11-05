# Obtém a classe pai

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getparentclass.php

---

# ReflectionClass::getParentClass

(PHP 5, PHP 7, PHP 8)

ReflectionClass::getParentClass — Obtém a classe pai

### Descrição

public function **ReflectionClass::getParentClass**(): [ReflectionClass](class.reflectionclass.md)|[false](language.types.singleton.md)

Obtém a classe pai.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [ReflectionClass](class.reflectionclass.md) ou **`false`** se não houver pai.

### Veja também

- [ReflectionClass::\_\_construct()](reflectionclass.construct.md) - Constrói uma ReflectionClass

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
