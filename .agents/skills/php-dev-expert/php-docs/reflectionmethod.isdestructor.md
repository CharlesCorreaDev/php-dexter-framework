# Verifica se o método é um destrutor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.isdestructor.php

---

# ReflectionMethod::isDestructor

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::isDestructor — Verifica se o método é um destrutor

### Descrição

public function **ReflectionMethod::isDestructor**(): [bool](language.types.boolean.md)

Verifica se o método é um destrutor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o método é um destrutor, caso contrário **`false`**

### Veja também

- [ReflectionMethod::isConstructor()](reflectionmethod.isconstructor.md) - Verifica se o método é um construtor

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
