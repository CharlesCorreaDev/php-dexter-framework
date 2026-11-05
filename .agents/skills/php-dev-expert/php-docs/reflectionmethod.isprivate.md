# Verifica se o método é privado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.isprivate.php

---

# ReflectionMethod::isPrivate

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::isPrivate — Verifica se o método é privado

### Descrição

public function **ReflectionMethod::isPrivate**(): [bool](language.types.boolean.md)

Verifica se o método é privado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o método é privado, caso contrário **`false`**

### Veja também

- [ReflectionMethod::isPublic()](reflectionmethod.ispublic.md) - Verifica se o método é público

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
