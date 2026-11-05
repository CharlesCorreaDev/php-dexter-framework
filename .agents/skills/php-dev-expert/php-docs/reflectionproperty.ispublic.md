# Verifica se a propriedade é pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.ispublic.php

---

# ReflectionProperty::isPublic

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::isPublic — Verifica se a propriedade é pública

### Descrição

public function **ReflectionProperty::isPublic**(): [bool](language.types.boolean.md)

Verifica se a propriedade é pública.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a propriedade for marcada como pública, **`false`** caso contrário.

> **Nota**:
>
> Observe que isso se refere apenas à visibilidade principal e não a uma [set-visibility](language.oop5.visibility.md#language.oop5.visibility-members-aviz), se especificada.

### Notas

> **Nota**:
>
> Observe que uma propriedade sendo `public` nem sempre
> implica que ela é publicamente modificável. Uma propriedade poderia ser virtual sem nenhum
> gancho `set`, ou porderia ser `readonly`
> e já ter sido modificada, ou poderia ter a
> [visibuilidade `set`
> definida](language.oop5.visibility.md#language.oop5.visibility-members-aviz) que é não-pública. Em todos estes casos,
> este método retornará **`true`** mas a propriedade não será modificável.

### Veja também

- [ReflectionProperty::isProtected()](reflectionproperty.isprotected.md) - Verifica se a propriedade é protegida
- [ReflectionProperty::isProtectedSet()](reflectionproperty.isprotectedset.md) - Verifica se a propriedade está protegida para escrita
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
