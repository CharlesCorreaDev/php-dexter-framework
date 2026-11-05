# Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.usort.php

---

# usort

(PHP 4, PHP 5, PHP 7, PHP 8)

usort — Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário

### Descrição

function **usort**([array](language.types.array.md) `&$array`, [callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

Ordenar o `array` pelos valores usando uma
função de comparação definida pelo usuário para determinar a ordem.

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

> **Nota**:
>
> Esta função
> atribui novas chaves aos elementos do `array`.
> Ela removerá todas as chaves existentes que possam ter sido atribuídas, em vez
> de apenas reordenar as chaves.

### Parâmetros

`array`
:   The input array.

`callback`
:   A função de comparação deve retornar um inteiro menor que, igual ou maior que zero se o primeiro argumento for considerado respectivamente menor que, igual ou maior que o segundo.

    function callback([mixed](language.types.mixed.md) `$a`, [mixed](language.types.mixed.md) `$b`): [int](language.types.integer.md)

    **Cuidado**

    Retornar valores *não inteiros* da função de
    comparação, como [float](language.types.float.md), resultará em uma conversão interna
    do valor retornado da função callback para [int](language.types.integer.md). Portanto, valores como
    `0.99` e `0.1` serão convertidos para o
    valor inteiro `0`, o que comparará esses valores como iguais.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |
| 8.0.0 | Se a função `callback` espera que um parâmetro seja passado por referência, esta função agora emitirá um **`E_WARNING`**. |

### Examples

**Exemplo #1 Exemplo de **usort()****

```
<?php
function cmp($a, $b)
{
    if ($a == $b) {
    return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $chave => $valor) {
    echo "$chave: $valor\n";
}
?>
```

O exemplo acima produzirá:

```
0: 1
1: 2
2: 3
3: 5
4: 6
```

O operador nave espacial (<=>) pode ser usado para
simplificar ainda mais a comparação interna.

```
<?php
function cmp($a, $b)
{
    return $a <=> $b;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $chave => $valor) {
    echo "$chave: $valor\n";
}
?>
```

> **Nota**:
>
> Obviamente que nesse caso trivial a função [sort()](function.sort.md)
> seria mais apropriada.

**Exemplo #2
Exemplo de **usort()** usando um array multidimensional**

```
<?php
function cmp($a, $b)
{
    return strcmp($a["fruta"], $b["fruta"]);
}

$frutas[0]["fruta"] = "limões";
$frutas[1]["fruta"] = "abacaxis";
$frutas[2]["fruta"] = "goiabas";

usort($frutas, "cmp");

foreach ($frutas as $chave => $valor) {
    echo "\$frutas[$chave]: " . $valor["fruta"] . "\n";
}
?>
```

O exemplo acima produzirá:

```
$frutas[0]: abacaxis
$frutas[1]: goiabas
$frutas[2]: limões
```

Na ordenação de um array multi-dimensional, $a e
$b contêm referências ao primeiro índice do array.

**Exemplo #3
Exemplo de **usort()** usando uma função membro de um objeto**

```
<?php
class TestObj {
    public string $name;

    function TestObj($name)
    {
        $this->name = $name;
    }

    /* Essa é a função estática de comparação */
    static function cmp_obj($a, $b)
    {
        return strtolower($a->name) <=> strtolower($b->name);
    }
}

$a[] = new TestObj("c");
$a[] = new TestObj("b");
$a[] = new TestObj("d");

usort($a, [TestObj::class, "cmp_obj"]);

foreach ($a as $item) {
    echo $item->name . "\n";
}
?>
```

O exemplo acima produzirá:

```
b
c
d
```

**Exemplo #4
Exemplo de **usort()** usando uma [closure](functions.anonymous.md)
para ordernar um array multidimensional**

```
<?php
$array[0] = array('key_a' => 'z', 'key_b' => 'c');
$array[1] = array('key_a' => 'x', 'key_b' => 'b');
$array[2] = array('key_a' => 'y', 'key_b' => 'a');

function build_sorter($key) {
    return function ($a, $b) use ($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}

usort($array, build_sorter('key_b'));

foreach ($array as $item) {
    echo $item['key_a'] . ', ' . $item['key_b'] . "\n";
}
?>
```

O exemplo acima produzirá:

```
y, a
x, b
z, c
```

**Exemplo #5
Exemplo de **usort()** usando o operador nave espacial**

O operador nave espacial permite comparação direta de
valores compostos atráves de múltiplos eixos. O exemplo a seguir irá ordenar
`$pessoas` pelo último nome, e depois pelo primeiro nome se
o último nome for igual.

```
<?php
$pessoas[0] = ['primeiro' => 'Adam', 'ultimo' => 'West'];
$pessoas[1] = ['primeiro' => 'Alec', 'ultimo' => 'Baldwin'];
$pessoas[2] = ['primeiro' => 'Adam', 'ultimo' => 'Baldwin'];

function sorter(array $a, array $b) {
    return [$a['ultimo'], $a['primeiro']] <=> [$b['ultimo'], $b['primeiro']];
}

usort($pessoas, 'sorter');

foreach ($pessoas as $pessoa) {
    print $pessoa['ultimo'] . ', ' . $pessoa['primeiro'] . PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
Baldwin, Adam
Baldwin, Alec
West, Adam
```

### Veja também

- [uasort()](function.uasort.md) - Ordena um array com uma função de comparação definida pelo usuário e mantém associações de índices
- [uksort()](function.uksort.md) - Ordena um array pelas chaves utilizando uma função de comparação definida pelo usuário.
- [Comparação entre as funções de ordenação de array](array.sorting.md)

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
