# Obtém o índica da cor de um pixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorat.php

---

# imagecolorat

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolorat — Obtém o índica da cor de um pixel

### Descrição

function **imagecolorat**([GdImage](class.gdimage.md) `$image`, [int](language.types.integer.md) `$x`, [int](language.types.integer.md) `$y`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o índice da cor do pixel na localização
especificada na imagem informada em `image`.

Se a imagem for em
cores verdadeiras, esta função retorna o valor RGB do pixel como
inteiro. Use deslocamentos de bits e máscaras para distinguir os componentes de
vermelho, verde e azul:

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`x`
:   Coordenada x do pixel.

`y`
:   Coordenada y do pixel.

### Valor Retornado

Retorna o índice da cor ou **`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Acessando valores decompostos de RGB**

```
<?php
$im = imagecreatefrompng("php.png");
$rgb = imagecolorat($im, 10, 15);
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;

var_dump($r, $g, $b);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(119)
int(123)
int(180)
```

**Exemplo #2 Valores legíveis de RGB usando [imagecolorsforindex()](function.imagecolorsforindex.md)**

```
<?php
$im = imagecreatefrompng("php.png");
$rgb = imagecolorat($im, 10, 15);

$colors = imagecolorsforindex($im, $rgb);

var_dump($colors);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(4) {
  ["red"]=>
  int(119)
  ["green"]=>
  int(123)
  ["blue"]=>
  int(180)
  ["alpha"]=>
  int(127)
}
```

### Veja também

- [imagecolorset()](function.imagecolorset.md) - Define a cor para o índice da paleta especificado
- [imagecolorsforindex()](function.imagecolorsforindex.md) - Obtém as cores para um índice
- [imagesetpixel()](function.imagesetpixel.md) - Desenha um pixel

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
