# Verifica se uma posição existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayaccess.offsetexists.php

---

# ArrayAccess::offsetExists

(PHP 5, PHP 7, PHP 8)

ArrayAccess::offsetExists — Verifica se uma posição existe

### Descrição

public function **ArrayAccess::offsetExists**([mixed](language.types.mixed.md) `$offset`): [bool](language.types.boolean.md)

Verifica se uma posição existe ou não.

Este método é executado ao utilizar-se a função [isset()](function.isset.md) ou
[empty()](function.empty.md) em objetos que implementem [ArrayAccess](class.arrayaccess.md).

> **Nota**:
>
> Ao utilizar a função [empty()](function.empty.md), o método [ArrayAccess::offsetGet()](arrayaccess.offsetget.md) será
> chamado e checado por vazio somente se o método **ArrayAccess::offsetExists()**
> retornar **`true`**

### Parâmetros

`offset`
:   Uma posição a ser checada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

> **Nota**:
>
> O valor de retorno será convertido para [bool](language.types.boolean.md) se um não booleano for retornado.

### Examples

**Exemplo #1 Exemplo do método **ArrayAccess::offsetExists()****

```
<?php
class obj implements ArrayAccess {
    public function offsetSet($offset, $value): void {
        var_dump(__METHOD__);
    }
    public function offsetExists($var): bool {
        var_dump(__METHOD__);
        if ($var == "foobar") {
            return true;
        }
        return false;
    }
    public function offsetUnset($var): void {
        var_dump(__METHOD__);
    }
    #[\ReturnTypeWillChange]
    public function offsetGet($var) {
        var_dump(__METHOD__);
        return "value";
    }
}

$obj = new obj;

echo "Executa obj::offsetExists()\n";
var_dump(isset($obj["foobar"]));

echo "\nExecuta obj::offsetExists() e obj::offsetGet()\n";
var_dump(empty($obj["foobar"]));

echo "\nExecuta obj::offsetExists(), *não executa* obj:offsetGet()\n";
var_dump(empty($obj["foobaz"]));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Executa obj::offsetExists()
string(17) "obj::offsetExists"
bool(true)

Executa obj::offsetExists() e obj::offsetGet()
string(17) "obj::offsetExists"
string(14) "obj::offsetGet"
bool(false)

Executa obj::offsetExists(), *não executa* obj:offsetGet()
string(17) "obj::offsetExists"
bool(true)
```

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
