# A interface ArrayAccess

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.arrayaccess.php

---

# A interface ArrayAccess

(PHP 5, PHP 7, PHP 8)

## Introdução

Interface que provê o acesso a objetos como se fossem arrays.

## Resumo da Interface

interface ****ArrayAccess**** {

/\* Métodos \*/

public function [offsetExists](arrayaccess.offsetexists.md)([mixed](language.types.mixed.md) `$offset`): [bool](language.types.boolean.md)

public function [offsetGet](arrayaccess.offsetget.md)([mixed](language.types.mixed.md) `$offset`): [mixed](language.types.mixed.md)

public function [offsetSet](arrayaccess.offsetset.md)([mixed](language.types.mixed.md) `$offset`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](arrayaccess.offsetunset.md)([mixed](language.types.mixed.md) `$offset`): [void](language.types.void.md)

}

## Examples

**Exemplo #1 Utilização básica**

```
<?php
class Obj implements ArrayAccess {
    public $container = [
        "one"   => 1,
        "two"   => 2,
        "three" => 3,
    ];

    public function offsetSet($offset, $value): void {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset): void {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset): mixed {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

$obj = new Obj;

var_dump(isset($obj["two"]));
var_dump($obj["two"]);
unset($obj["two"]);
var_dump(isset($obj["two"]));
$obj["two"] = "A value";
var_dump($obj["two"]);
$obj[] = 'Append 1';
$obj[] = 'Append 2';
$obj[] = 'Append 3';
print_r($obj);
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
int(2)
bool(false)
string(7) "A value"
Obj Object
(
    [container] => Array
        (
            [one] => 1
            [three] => 3
            [two] => A value
            [0] => Append 1
            [1] => Append 2
            [2] => Append 3
        )

)
```

## Índice

- [ArrayAccess::offsetExists](arrayaccess.offsetexists.md) — Verifica se uma posição existe
- [ArrayAccess::offsetGet](arrayaccess.offsetget.md) — Posição a ser obtida
- [ArrayAccess::offsetSet](arrayaccess.offsetset.md) — Atribui um valor a uma posição específica
- [ArrayAccess::offsetUnset](arrayaccess.offsetunset.md) — Remove uma posição

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
