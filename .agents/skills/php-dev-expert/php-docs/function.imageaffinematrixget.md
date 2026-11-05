# Obtém uma matriz de transformação afim

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageaffinematrixget.php

---

# imageaffinematrixget

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

imageaffinematrixget — Obtém uma matriz de transformação afim

### Descrição

function **imageaffinematrixget**([int](language.types.integer.md) `$type`, [array](language.types.array.md)|[float](language.types.float.md) `$options`): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna uma matriz de transformação afim.

### Parâmetros

`type`
:   Uma das constantes **`IMG_AFFINE_*`**.

`options`
:   Se `type` for **`IMG_AFFINE_TRANSLATE`**
    ou **`IMG_AFFINE_SCALE`**,
    `options` deve ser um [array](language.types.array.md) com chaves `x`
    e `y`, ambas tendo valores [float](language.types.float.md).

    Se `type` for **`IMG_AFFINE_ROTATE`**,
    **`IMG_AFFINE_SHEAR_HORIZONTAL`** ou **`IMG_AFFINE_SHEAR_VERTICAL`**,
    `options` deve ser um [float](language.types.float.md) especificando o ângulo em graus.

### Valor Retornado

Uma matriz de transformação afim (um array com chaves de
`0` a `5` e valores float)
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **imageaffinematrixget()****

```
<?php
$matrix = imageaffinematrixget(IMG_AFFINE_TRANSLATE, array('x' => 2, 'y' => 3));
print_r($matrix);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => 1
    [1] => 0
    [2] => 0
    [3] => 1
    [4] => 2
    [5] => 3
)
```

### Veja também

- [imageaffine()](function.imageaffine.md) - Retorna uma imagem contendo a imagem fonte com transformação afim, usando uma área de recorte opcional
- [imageaffinematrixconcat()](function.imageaffinematrixconcat.md) - Concatena duas matrizes de transformação afim

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
