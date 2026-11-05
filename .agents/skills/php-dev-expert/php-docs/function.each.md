# Retorna o par atual de chave e valor de um array e avança o seu cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.each.php

---

# each

(PHP 4, PHP 5, PHP 7)

each — Retorna o par atual de chave e valor de um array e avança o seu cursor

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.2.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **each**([array](language.types.array.md)|[object](language.types.object.md) `&$array`): [array](language.types.array.md)

Retorna o par atual de chave e valor de um array e avança o seu
cursor.

Depois da execução de **each()**, o cursor do
array irá apontar para o próximo elemento do array, ou após o último
elemento se ele atingir o final do array. Deve-se utilizar
[reset()](function.reset.md) se for desejado percorrer o array
novamente usando a função.

### Parâmetros

`array`
:   O array de entrada.

### Valor Retornado

Retorna o par atual de chave e valor do
`array`. Este par é retornado em um
array de quatro elementos, com as chaves `0`, `1`,
`key` e `value`. Elementos
`0` e `key` contêm o nome da chave do
elemento do array; e `1` e `value` contêm
os dados.

Se o cursor interno do array estiver apontando para além do final do
conteúdo do array, **each()** retorna
**`false`**.

### Examples

**Exemplo #1 Exemplos de **each()****

```
<?php
$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
print_r($bar);
?>
```

$bar agora contém os seguintes pares de chaves e
valores:

```
Array
(
    [1] => bob
    [value] => bob
    [0] => 0
    [key] => 0
)
```

```
<?php
$foo = array("Robert" => "Bob", "Seppo" => "Sepi");
$bar = each($foo);
print_r($bar);
?>
```

$bar agora contém os seguintes pares de chaves e
valores:

```
Array
(
    [1] => Bob
    [value] => Bob
    [0] => Robert
    [key] => Robert
)
```

**each()** é tipicamente usada em conjunto com
[list()](function.list.md) para percorrer um array, por
exemplo:

**Exemplo #2 Percorrendo um array com **each()****

```
<?php
$fruta = array('a' => 'amora', 'b' => 'banana', 'c' => 'caju');

reset($fruta);
while (list($chave, $valor) = each($fruta)) {
      echo "$chave => $valor\n";
}
?>
```

O exemplo acima produzirá:

```
a => amora
b => banana
c => caju
```

**Cuidado**

Pelo fato da atribuição de um array a outra variável redefinir o ponteiro
original do array, o exemplo acima deveria causar um loop sem fim se a
variável $fruta fosse atribuída a outra variável dentro do
loop.

**Aviso**

**each()** também aceitará objetos, porém pode retornar resultados
inesperados. Portanto, não é recomendado iterar por propriedades de objeto
com **each()**.

### Veja também

- [key()](function.key.md) - Retorna uma chave de um array
- [list()](function.list.md) - Cria variáveis como se fossem arrays
- [current()](function.current.md) - Retorna o elemento atual em um array
- [reset()](function.reset.md) - Faz o ponteiro interno de um array apontar para o seu primeiro elemento
- [next()](function.next.md) - Avança o ponteiro interno de um array
- [prev()](function.prev.md) - Retrocede o ponteiro interno de um array
- [`foreach`](control-structures.foreach.md)
- [Object Iteration](language.oop5.iterations.md)

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
