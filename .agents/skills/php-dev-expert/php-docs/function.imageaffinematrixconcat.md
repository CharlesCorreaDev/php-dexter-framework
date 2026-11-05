# Concatena duas matrizes de transformação afim

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageaffinematrixconcat.php

---

# imageaffinematrixconcat

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

imageaffinematrixconcat — Concatena duas matrizes de transformação afim

### Descrição

function **imageaffinematrixconcat**([array](language.types.array.md) `$matrix1`, [array](language.types.array.md) `$matrix2`): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna a concatenação de duas matrizes de transformação afim,
que é útil se múltiplas transformações devem ser aplicadas na
mesma imagem diretamente.

### Parâmetros

`matrix1`
:   Uma matriz de transformação afim (um array com chaves de
    `0` a `5` e valores float).

`matrix2`
:   Uma matriz de transformação afim (um array com chaves de
    `0` a `5` e valores float).

### Valor Retornado

Uma matriz de transformação afim (um array com chaves de
`0` a `5` e valores float)
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **imageaffinematrixconcat()****

```
<?php
$m1 = imageaffinematrixget(IMG_AFFINE_TRANSLATE, array('x' => 2, 'y' => 3));
$m2 = imageaffinematrixget(IMG_AFFINE_SCALE, array('x' => 4, 'y' => 5));
$matrix = imageaffinematrixconcat($m1, $m2);
print_r($matrix);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => 4
    [1] => 0
    [2] => 0
    [3] => 5
    [4] => 8
    [5] => 15
)
```

### Veja também

- [imageaffine()](function.imageaffine.md) - Retorna uma imagem contendo a imagem fonte com transformação afim, usando uma área de recorte opcional
- [imageaffinematrixget()](function.imageaffinematrixget.md) - Obtém uma matriz de transformação afim

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
