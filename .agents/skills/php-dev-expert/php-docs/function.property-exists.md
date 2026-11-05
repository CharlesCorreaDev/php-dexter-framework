# Verifica se o objeto ou a classe tem uma propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.property-exists.php

---

# property\_exists

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

property\_exists — 
Verifica se o objeto ou a classe tem uma propriedade

### Descrição

function **property\_exists**([object](language.types.object.md)|[string](language.types.string.md) `$object_or_class`, [string](language.types.string.md) `$property`): [bool](language.types.boolean.md)

Essa função verifica se a propriedade informada em `property` existe na
classe especificada.

> **Nota**:
>
> Ao contrário de [isset()](function.isset.md),
> **property\_exists()** retorna **`true`** mesmo se a propriedade
> tiver o valor **`null`**.

### Parâmetros

`object_or_class`
:   O nome da classe ou um objeto da classe a ser testada

`property`
:   O nome da propriedade

### Valor Retornado

Retorna **`true`** se a propriedade existe, **`false`** se ela não existir.

### Examples

**Exemplo #1 Exemplo de **property\_exists()****

```
<?php

class myClass {
    public $mine;
    private $xpto;
    static protected $test;

    static function test() {
        var_dump(property_exists('myClass', 'xpto')); //true
    }
}

var_dump(property_exists('myClass', 'mine'));   //true
var_dump(property_exists(new myClass, 'mine')); //true
var_dump(property_exists('myClass', 'xpto'));   //true
var_dump(property_exists('myClass', 'bar'));    //false
var_dump(property_exists('myClass', 'test'));   //true
myClass::test();

?>
```

### Notas

> **Nota**:
>
> Usar esta função fará com que qualquer
> [autoloader](language.oop5.autoload.md) registrado seja usado se a classe ainda não for conhecida.

> **Nota**:
>
> A função **property\_exists()** não consegue detectar propriedades
> que são magicamente acessíveis usando o método mágico
> [`__get`](language.oop5.overloading.md#language.oop5.overloading.members).

### Veja também

- [method\_exists()](function.method-exists.md) - Verifica se o método da classe existe

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
