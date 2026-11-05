# Verifica se a propriedade é somente leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isreadonly.php

---

# ReflectionProperty::isReadOnly

(PHP 8 >= 8.1.0)

ReflectionProperty::isReadOnly — Verifica se a propriedade é somente leitura

### Descrição

public function **ReflectionProperty::isReadOnly**(): [bool](language.types.boolean.md)

Verifica se a propriedade [é somente leitura](language.oop5.properties.md#language.oop5.properties.readonly-properties).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a propriedade for somente leitura, **`false`** caso contrário.

### Veja também

- [ReflectionProperty::isPublic()](reflectionproperty.ispublic.md) - Verifica se a propriedade é pública
- [ReflectionProperty::isProtected()](reflectionproperty.isprotected.md) - Verifica se a propriedade é protegida
- [ReflectionProperty::isPrivate()](reflectionproperty.isprivate.md) - Verifica se a propriedade é privada
- [ReflectionProperty::isStatic()](reflectionproperty.isstatic.md) - Verifica se a propriedade é estática

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
