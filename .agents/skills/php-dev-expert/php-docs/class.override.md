# O atributo Override

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.override.php

---

# O atributo Override

(PHP 8 >= 8.3.0)

## Introdução

Este atributo é usado para indicar que um método ou uma propriedade se destina
a substituir um método ou uma propriedade de uma classe superior ou que ele/ela implementa
um método ou propriedade definido(a) em uma interface.

Se nenhum método ou propriedade com o mesmo nome existir em uma classe superior ou
em uma interface implementada, um erro será emitido no momento da
compilação.

O atributo não pode ser usado no método
[\_\_construct()](language.oop5.decon.md#object.construct),
que é isento de verificação de assinaturas.

## Resumo da classe

#[[\Attribute](class.attribute.md)]  
final
class ****Override****
{

/\* Métodos \*/

public function [\_\_construct](override.construct.md)()

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | **Override** pode ser aplicada a propriedades. |

## Examples

**Exemplo #1 Uso com métodos**

```
<?php

class Base {
    protected function foo(): void {}
}

final class Extended extends Base {
    #[\Override]
    protected function boo(): void {}
}

?>
```

A saída do exemplo acima no PHP 8.3 é semelhante a:

```
Fatal error: Extended::boo() has #[\Override] attribute, but no matching parent method exists
```

**Exemplo #2 Uso com propriedades**

```
<?php

class Base {
    protected string $foo;
}

final class Extended extends Base {
    #[\Override]
    protected string $boo;
}

?>
```

A saída do exemplo acima no PHP 8.5 é semelhante a:

```
Fatal error: Extended::$boo has #[\Override] attribute, but no matching parent property exists
```

## Veja também

- [Visão geral de atributos](language.attributes.md)

## Índice

- [Override::\_\_construct](override.construct.md) — Constrói uma nova instância de atributo Override

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
