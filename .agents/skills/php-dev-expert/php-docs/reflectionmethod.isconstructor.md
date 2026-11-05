# Verifica se o método é um construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.isconstructor.php

---

# ReflectionMethod::isConstructor

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::isConstructor — Verifica se o método é um construtor

### Descrição

public function **ReflectionMethod::isConstructor**(): [bool](language.types.boolean.md)

Verifica se o método é um construtor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o método for um construtor, caso contrário **`false`**

### Veja também

- [ReflectionMethod::\_\_construct()](reflectionmethod.construct.md) - Constrói um ReflectionMethod
- [ReflectionMethod::isAbstract()](reflectionmethod.isabstract.md) - Verifica se o método é abstrato
- [ReflectionMethod::isDestructor()](reflectionmethod.isdestructor.md) - Verifica se o método é um destrutor

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
