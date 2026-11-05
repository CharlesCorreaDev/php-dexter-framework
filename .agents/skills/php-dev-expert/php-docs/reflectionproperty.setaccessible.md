# Define acessibilidade da propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.setaccessible.php

---

# ReflectionProperty::setAccessible

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ReflectionProperty::setAccessible — Define acessibilidade da propriedade

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **ReflectionProperty::setAccessible**([bool](language.types.boolean.md) `$accessible`): [void](language.types.void.md)

Permite o acesso a uma propriedade protegida ou privada por meio dos métodos [ReflectionProperty::getValue()](reflectionproperty.getvalue.md) e
[ReflectionProperty::setValue()](reflectionproperty.setvalue.md).

> **Nota**:
>
> A partir do PHP 8.1.0, chamar este método não tem efeito; todas as propriedades são acessíveis por padrão.

### Parâmetros

`accessible`
:   **`true`** para permitir acessibilidade, ou **`false`**.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Este método foi descontinuado, já que não tem mais efeito. |
| 8.1.0 | Chamar este método não tem efeito; todas as propriedades são acessíveis por padrão. |

### Examples

**Exemplo #1 Definição de classe simples**

```
<?php
class MyClass
{
    private $foo = 'bar';
}

$property = new ReflectionProperty("MyClass", "foo");
$property->setAccessible(true);

$obj = new MyClass();
echo $property->getValue($obj);
echo $obj->foo;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bar
Fatal error: Uncaught Error: Cannot access private property MyClass::$foo in /in/WJqTv:12
```

### Veja também

- [ReflectionProperty::isPrivate()](reflectionproperty.isprivate.md) - Verifica se a propriedade é privada
- [ReflectionProperty::isProtected()](reflectionproperty.isprotected.md) - Verifica se a propriedade é protegida

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
