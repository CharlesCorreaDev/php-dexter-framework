# Verifica se o método é abstrato

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.isabstract.php

---

# ReflectionMethod::isAbstract

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::isAbstract — Verifica se o método é abstrato

### Descrição

public function **ReflectionMethod::isAbstract**(): [bool](language.types.boolean.md)

Verifica se o método é abstrato.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o método for abstrato, caso contrário **`false`**

### Veja também

- [ReflectionMethod::getDeclaringClass()](reflectionmethod.getdeclaringclass.md) - Obtém a classe declarada para o método refletido

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
