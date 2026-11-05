# Verifica se o método é protegido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.isprotected.php

---

# ReflectionMethod::isProtected

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::isProtected — Verifica se o método é protegido

### Descrição

public function **ReflectionMethod::isProtected**(): [bool](language.types.boolean.md)

Verifica se o método é protegido.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o método é protegido, caso contrário **`false`**

### Veja também

- [ReflectionMethod::isPrivate()](reflectionmethod.isprivate.md) - Verifica se o método é privado

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
