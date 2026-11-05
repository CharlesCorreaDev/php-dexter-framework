# Verifica se a propriedade é privada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isprivate.php

---

# ReflectionProperty::isPrivate

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::isPrivate — Verifica se a propriedade é privada

### Descrição

public function **ReflectionProperty::isPrivate**(): [bool](language.types.boolean.md)

Verifica se a propriedade é privada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a propriedade é privada, **`false`** caso contrário.

> **Nota**:
>
> Observe que isso se refere apenas à visibilidade principal e não a uma [set-visibility](language.oop5.visibility.md#language.oop5.visibility-members-aviz), se especificada.

### Veja também

- [ReflectionProperty::isPublic()](reflectionproperty.ispublic.md) - Verifica se a propriedade é pública
- [ReflectionProperty::isProtected()](reflectionproperty.isprotected.md) - Verifica se a propriedade é protegida
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
