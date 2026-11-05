# Verifica se a constante da classe é privada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.isprivate.php

---

# ReflectionClassConstant::isPrivate

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClassConstant::isPrivate — Verifica se a constante da classe é privada

### Descrição

public function **ReflectionClassConstant::isPrivate**(): [bool](language.types.boolean.md)

Verifica se a constante da classe é privada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a constante de classe for privada, caso contrário **`false`**

### Veja também

- [ReflectionClassConstant::isFinal()](reflectionclassconstant.isfinal.md) - Verifica se a constante da classe é final
- [ReflectionClassConstant::isPublic()](reflectionclassconstant.ispublic.md) - Verifica se a constante da classe é pública
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
