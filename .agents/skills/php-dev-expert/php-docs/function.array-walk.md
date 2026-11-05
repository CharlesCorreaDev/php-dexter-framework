# Aplica uma determinada função em cada elemento de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-walk.php

---

# array\_walk

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_walk — Aplica uma determinada função em cada elemento de um array

### Descrição

function **array\_walk**([array](language.types.array.md)|[object](language.types.object.md) `&$array`, [callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$arg` = **`null`**): [true](language.types.singleton.md)

Aplica uma função definida pelo usuário passada pelo argumento
`callback` em cada elemento do `array`.

**array\_walk()** não é afetado pelo ponteiro interno do
`array`. **array\_walk()**
percorrerá todo o array desconsiderando a posição do ponteiro.

### Parâmetros

`array`
:   O array de entrada.

`callback`
:   Normalmente, `callback` recebe dois parâmetros.
    O valor do parâmetro `array` é o primeiro e
    a chave/índice é o segundo.

    > **Nota**:
    >
    > Se `callback` realmente precisar alterar os valores
    > do array, especifique que o primeiro parâmetro de
    > `callback` deve ser passado por
    > [referência](language.references.md). Assim,
    > qualquer mudança feita nesses elementos serão feitas
    > no próprio array também.

    > **Nota**:
    >
    > Muitas funções internas (por exemplo [strtolower()](function.strtolower.md))
    > lançarão uma exceção se forem passados mais argumentos
    > que o esperado e não forem utilizados diretamente na função
    > `callback`.

    Apenas os valores de um `array` podem potencialmente
    ser alterados; sua estrutura não pode ser alterada, por exemplo, o programador não pode
    adicionar, remover ou reordenar elementos. Se a função não respeitar esta regra,
    o comportamento desta função é indefinido e
    imprevisível.

`arg`
:   Se o parâmetro opcional `arg` for fornecido,
    será passado como o terceiro parâmetro para a função
    `callback`.

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

A partir do PHP 7.1.0, uma exceção [ArgumentCountError](class.argumentcounterror.md) será lançada se a função `callback`
requerer mais de 2 parâmetros (o valor e a chave do item de array),
ou se mais de 3 argumentos no caso de `arg` ser informado.
Anteriormente, nesses casos
um erro de nível [E\_WARNING](errorfunc.constants.md) seria gerado em cada vez que
**array\_walk()** chamasse a função `callback`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |
| 8.0.0 | Se `callback` espera que o segundo ou o terceiro parâmetro seja passado por referência, essa função agora emite um **`E_WARNING`**. |

### Examples

**Exemplo #1 Exemplo de **array\_walk()****

```
<?php
$frutas = array("d" => "limão", "a" => "laranja", "b" => "banana", "c" => "melancia");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2\n";
}

echo "Antes ...:\n";
array_walk($frutas, 'test_print');

array_walk($frutas, 'test_alter', 'fruta');
echo "... e depois:\n";

array_walk($frutas, 'test_print');
?>
```

O exemplo acima produzirá:

```
Antes ...:
d. limão
a. laranja
b. banana
c. melancia
... e depois:
d. fruit: limão
a. fruit: laranja
b. fruit: banana
c. fruit: melancia
```

**Exemplo #2 Exemplo de **array\_walk()** e funções anônimas**

```
<?php
$elements = ['a', 'b', 'c'];

array_walk($elements, function ($value, $key) {
  echo "{$key} => {$value}\n";
});

?>
```

O exemplo acima produzirá:

```
0 => a
1 => b
2 => c
```

### Veja também

- [array\_walk\_recursive()](function.array-walk-recursive.md) - Aplica um função do usuário recursivamente para cada membro de um array
- [iterator\_apply()](function.iterator-apply.md) - Chama uma função para cada elemento em um iterador
- [list()](function.list.md) - Cria variáveis como se fossem arrays
- [each()](function.each.md) - Retorna o par atual de chave e valor de um array e avança o seu cursor
- [call\_user\_func\_array()](function.call-user-func-array.md) - Chama uma função de retorno com um array de parâmetros
- [array\_map()](function.array-map.md) - Aplica uma função em todos os elementos dos arrays dados
- [`foreach`](control-structures.foreach.md)

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
