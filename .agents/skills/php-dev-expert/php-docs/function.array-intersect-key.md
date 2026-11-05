# Calcula a interseção de arrays, comparando pelas chaves

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-intersect-key.php

---

# array\_intersect\_key

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

array\_intersect\_key — Calcula a interseção de arrays, comparando pelas chaves

### Descrição

function **array\_intersect\_key**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`): [array](language.types.array.md)

**array\_intersect\_key()** retorna um array
contendo todos os valores de `array`
que tem as mesmas chaves presentes em todos os argumentos.

### Parâmetros

`array`
:   O array com as chaves a serem verificadas.

`arrays`
:   Arrays para comparar as chaves.

### Valor Retornado

Retorna um array associativo contendo todos os valores de
`array` que estão presentes em
todos os argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |

### Examples

**Exemplo #1 Exemplo da **array\_intersect\_key()****

```
<?php
$array1 = array('azul'  => 1, 'vermelho' => 2, 'verde'   => 3, 'roxo'  => 4);
$array2 = array('verde' => 5, 'azul'     => 6, 'amarelo' => 7, 'ciano' => 8);

var_dump(array_intersect_key($array1, $array2));
?>
```

O exemplo acima produzirá:

```
array(2) {
  ["azul"]=>
  int(1)
  ["verde"]=>
  int(3)
}
```

Em nosso exemplo, é possível pode ver que somente as chaves `'azul'`
e `'verde'` estão presentes em ambos os array e assim são
retornados. Observe Também que os valores das chaves
`'azul'` e `'verde'` diferem nos
dois arrays. A combinação ocorre porque somente as chaves são verificadas.
Os valores retornados são do `array`.

As duas chaves do par `key => value` são
considerados iguais somente se
`(string) $key1 === (string) $key2` . Em outras palavras,
um verificação do tipo é executada, então a representação string precisa ser
a mesma.

### Veja também

- [array\_diff()](function.array-diff.md) - Computa as diferenças entre arrays
- [array\_udiff()](function.array-udiff.md) - Computa a diferença de arrays usando uma função de callback para comparação dos dados
- [array\_diff\_assoc()](function.array-diff-assoc.md) - Computa a diferença entre arrays com checagem adicional de índice
- [array\_diff\_uassoc()](function.array-diff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário
- [array\_udiff\_assoc()](function.array-udiff-assoc.md) - Computa a diferença entre arrays com verificação adicional de índice, comparando dados por uma função de retorno
- [array\_udiff\_uassoc()](function.array-udiff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
- [array\_diff\_key()](function.array-diff-key.md) - Computa a diferença entre arrays usando as chaves na comparação
- [array\_diff\_ukey()](function.array-diff-ukey.md) - Computa a diferença entre arrays usando uma função callback na comparação de chaves
- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice
- [array\_intersect\_uassoc()](function.array-intersect-uassoc.md) - Computa a interseção de arrays com checagem de índice adicional, compara índices por uma função de callback
- [array\_intersect\_ukey()](function.array-intersect-ukey.md) - Computa a interseção de arrays usando uma função de retorno nas chaves para comparação

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
