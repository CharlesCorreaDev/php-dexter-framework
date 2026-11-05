# Verifica se a propriedade é estática

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isstatic.php

---

# ReflectionProperty::isStatic

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::isStatic — Verifica se a propriedade é estática

### Descrição

public function **ReflectionProperty::isStatic**(): [bool](language.types.boolean.md)

Verifica se a propriedade é estática.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a propriedade for estática, **`false`** caso contrário.

### Veja também

- [ReflectionProperty::isPublic()](reflectionproperty.ispublic.md) - Verifica se a propriedade é pública
- [ReflectionProperty::isProtected()](reflectionproperty.isprotected.md) - Verifica se a propriedade é protegida
- [ReflectionProperty::isPrivate()](reflectionproperty.isprivate.md) - Verifica se a propriedade é privada
- [ReflectionProperty::isReadOnly()](reflectionproperty.isreadonly.md) - Verifica se a propriedade é somente leitura

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
