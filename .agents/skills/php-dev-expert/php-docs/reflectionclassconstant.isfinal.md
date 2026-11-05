# Verifica se a constante da classe é final

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.isfinal.php

---

# ReflectionClassConstant::isFinal

(PHP 8 >= 8.1.0)

ReflectionClassConstant::isFinal — Verifica se a constante da classe é final

### Descrição

public function **ReflectionClassConstant::isFinal**(): [bool](language.types.boolean.md)

Verifica se a constante da classe é final.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a constante da classe for final, caso contrário **`false`**

### Veja também

- [ReflectionClassConstant::isPublic()](reflectionclassconstant.ispublic.md) - Verifica se a constante da classe é pública
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
