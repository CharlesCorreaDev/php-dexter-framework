# Verifica se uma propriedade foi inicializada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.isinitialized.php

---

# ReflectionProperty::isInitialized

(PHP 7 >= 7.4.0, PHP 8)

ReflectionProperty::isInitialized — Verifica se uma propriedade foi inicializada

### Descrição

public function **ReflectionProperty::isInitialized**([?](language.types.null.md)[object](language.types.object.md) `$object` = **`null`**): [bool](language.types.boolean.md)

Verifica se uma propriedade foi inicializada.

### Parâmetros

`object`
:   Se a propriedade não for estática, um objeto deve ser fornecido para buscar da
    propriedade.

### Valor Retornado

Retorna **`false`** para propriedades digitadas antes da inicialização,
e para propriedades que foram explicitamente [unset()](function.unset.md).
Para todas as outras propriedades **`true`** será retornado.

### Erros/Exceções

Lança um [ReflectionException](class.reflectionexception.md) se a propriedade estiver inacessível.
Você pode tornar uma propriedade protegida ou privada acessível usando
[ReflectionProperty::setAccessible()](reflectionproperty.setaccessible.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `object` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::isInitialized()****

```
<?php
class User
{
    public string $name;
}

$rp = new ReflectionProperty('User', 'name');
$user = new User;
var_dump($rp->isInitialized($user));
$user->name = 'Nikita';
var_dump($rp->isInitialized($user));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [ReflectionProperty::hasType()](reflectionproperty.hastype.md) - Verifica se a propriedade tem um tipo

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
