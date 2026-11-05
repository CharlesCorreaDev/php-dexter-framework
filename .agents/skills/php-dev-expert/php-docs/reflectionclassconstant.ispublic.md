# Verifica se a constante da classe é pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.ispublic.php

---

# ReflectionClassConstant::isPublic

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClassConstant::isPublic — Verifica se a constante da classe é pública

### Descrição

public function **ReflectionClassConstant::isPublic**(): [bool](language.types.boolean.md)

Verifica se a constante da classe é pública.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a constante de classe for pública, caso contrário **`false`**

### Veja também

- [ReflectionClassConstant::isFinal()](reflectionclassconstant.isfinal.md) - Verifica se a constante da classe é final
- [ReflectionClassConstant::isPrivate()](reflectionclassconstant.isprivate.md) - Verifica se a constante da classe é privada
- [ReflectionClassConstant::isProtected()](reflectionclassconstant.isprotected.md) - Verifica se a constante de classe é protegida

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
