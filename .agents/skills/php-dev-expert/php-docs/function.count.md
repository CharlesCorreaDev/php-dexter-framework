# Conta todos os elementos de um array ou de um objeto Countable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.count.php

---

# count

(PHP 4, PHP 5, PHP 7, PHP 8)

count — Conta todos os elementos de um array ou de um objeto [Countable](class.countable.md)

### Descrição

function **count**([Countable](class.countable.md)|[array](language.types.array.md) `$value`, [int](language.types.integer.md) `$mode` = **`COUNT_NORMAL`**): [int](language.types.integer.md)

Conta todos os elementos de um array quando usado com um array. Quando usado com um
objeto que implementa a interface [Countable](class.countable.md), retorna
o valor de retorno do método [Countable::count()](countable.count.md).

### Parâmetros

`value`
:   Um array ou objeto [Countable](class.countable.md).

`mode`
:   Se o parâmetro opcional `mode` for definido para
    **`COUNT_RECURSIVE`** (ou 1), a função **count()**
    irá recursivamente contar o array. Isto é particularmente útil
    para contar todos os elementos de um array multidimensional.

    **Cuidado**

    **count()** pode detectar recursividade para evitar um loop
    infinito, mas irá emitir um aviso **`E_WARNING`** cada vez que
    o fizer (caso o array contenha a si mesmo mais de uma vez) e retornará uma
    contagem maior que a esperada.

### Valor Retornado

Retorna o número de elementos em `value`.
Antes do PHP 8.0.0, se o parâmetro não fosse um [array](language.types.array.md) nem um [object](language.types.object.md) que
implementa a interface [Countable](class.countable.md),
`1` seria retornado,
a menos que `value` fosse **`null`**, e neste caso
`0` seria retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **count()** irá agora disparar [TypeError](class.typeerror.md) em tipos contáveis inválidos passados no parâmetro `value`. |
| 7.2.0 | **count()** irá agora emitir um aviso em tipos contáveis inválidos passados no parâmetro `value`. |

### Examples

**Exemplo #1 Exemplo da função **count()****

```
<?php
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b));
?>
```

O exemplo acima produzirá:

```
int(3)
int(3)
```

**Exemplo #2 Exemplo de **count()** em não-Countable|array (contra exemplo - não deve ser feito)**

```
<?php
$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b));

var_dump(count(null));

var_dump(count(false));
?>
```

O exemplo acima produzirá:

```
int(3)

Fatal error: Uncaught TypeError: count(): Argument #1 ($var) must be of type Countable .. on line 12
```

**Exemplo #3 Uso recursivo da função **count()****

```
<?php
$comidas = array('frutas'   => array('laranja', 'banana', 'maçã'),
                 'vegetais' => array('cenoura', 'couve', 'ervilha'));

// contagem recursiva
var_dump(count($comidas, COUNT_RECURSIVE));

// contagem normal
var_dump(count($comidas));

?>
```

O exemplo acima produzirá:

```
int(8)
int(2)
```

**Exemplo #4 Objeto [Countable](class.countable.md)**

```
<?php
class CountOfMethods implements Countable
{
    private function someMethod()
    {
    }

    public function count(): int
    {
        return count(get_class_methods($this));
    }
}

$obj = new CountOfMethods();
var_dump(count($obj));
?>
```

O exemplo acima produzirá:

```
int(2)
```

### Veja também

- [is\_array()](function.is-array.md) - Verifica se a variável é um array
- [isset()](function.isset.md) - Determina se uma variável está declarada e é diferente de null
- [empty()](function.empty.md) - Determina se uma variável está vazia
- [strlen()](function.strlen.md) - Retorna o tamanho de uma string
- [is\_countable()](function.is-countable.md) - Verifica se o conteúdo de uma variável é um valor contável
- [Arrays](language.types.array.md)

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
