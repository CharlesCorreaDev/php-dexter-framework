# Verifica se a propriedade está protegida para escrita

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isprotectedset.php

---

# ReflectionProperty::isProtectedSet

(PHP 8 >= 8.4.0)

ReflectionProperty::isProtectedSet — Verifica se a propriedade está protegida para escrita

### Descrição

public function **ReflectionProperty::isProtectedSet**(): [bool](language.types.boolean.md)

Verifica se a propriedade está protegida para escrita.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a propriedade for `protected(set)`, **`false`** caso contrário.

### Veja também

- [ReflectionProperty::isPublic()](reflectionproperty.ispublic.md) - Verifica se a propriedade é pública
- [ReflectionProperty::isProtected()](reflectionproperty.isprotected.md) - Verifica se a propriedade é protegida
- [ReflectionProperty::isPrivate()](reflectionproperty.isprivate.md) - Verifica se a propriedade é privada
- [ReflectionProperty::isPrivateSet()](reflectionproperty.isprivateset.md) - Verifica se a propriedade é privada para escrita
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
