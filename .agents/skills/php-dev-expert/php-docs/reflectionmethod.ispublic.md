# Verifica se o método é público

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionmethod.ispublic.php

---

# ReflectionMethod::isPublic

(PHP 5, PHP 7, PHP 8)

ReflectionMethod::isPublic — Verifica se o método é público

### Descrição

public function **ReflectionMethod::isPublic**(): [bool](language.types.boolean.md)

Verifica se o método é público.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o método for público, caso contrário **`false`**

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
