# Verifica se a propriedade é privada para escrita

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isprivateset.php

---

# ReflectionProperty::isPrivateSet

(PHP 8 >= 8.4.0)

ReflectionProperty::isPrivateSet — Verifica se a propriedade é privada para escrita

### Descrição

public function **ReflectionProperty::isPrivateSet**(): [bool](language.types.boolean.md)

Verifica se a propriedade é privada para escrita.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a propriedade for `private(set)`, **`false`** caso contrário.

### Veja também

- [ReflectionProperty::isPublic()](reflectionproperty.ispublic.md) - Verifica se a propriedade é pública
- [ReflectionProperty::isProtected()](reflectionproperty.isprotected.md) - Verifica se a propriedade é protegida
- [ReflectionProperty::isProtectedSet()](reflectionproperty.isprotectedset.md) - Verifica se a propriedade está protegida para escrita
- [ReflectionProperty::isPrivate()](reflectionproperty.isprivate.md) - Verifica se a propriedade é privada
- [ReflectionProperty::isReadOnly()](reflectionproperty.isreadonly.md) - Verifica se a propriedade é somente leitura
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
