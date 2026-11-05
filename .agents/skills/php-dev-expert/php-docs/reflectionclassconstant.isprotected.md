# Verifica se a constante de classe é protegida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.isprotected.php

---

# ReflectionClassConstant::isProtected

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClassConstant::isProtected — Verifica se a constante de classe é protegida

### Descrição

public function **ReflectionClassConstant::isProtected**(): [bool](language.types.boolean.md)

Verifica se a constante de classe é protegida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a constante de classe é protegida, caso contrário, **`false`**

### Veja também

- [ReflectionClassConstant::isFinal()](reflectionclassconstant.isfinal.md) - Verifica se a constante da classe é final
- [ReflectionClassConstant::isPublic()](reflectionclassconstant.ispublic.md) - Verifica se a constante da classe é pública
- [ReflectionClassConstant::isPrivate()](reflectionclassconstant.isprivate.md) - Verifica se a constante da classe é privada

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
