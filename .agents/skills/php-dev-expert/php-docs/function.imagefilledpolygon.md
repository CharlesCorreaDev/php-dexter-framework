# Desenha um polígono preenchido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefilledpolygon.php

---

# imagefilledpolygon

(PHP 4, PHP 5, PHP 7, PHP 8)

imagefilledpolygon — Desenha um polígono preenchido

### Descrição

Assinatura a partir do PHP 8.0.0 (sem suporte a argumentos com nome)

function **imagefilledpolygon**([GdImage](class.gdimage.md) `$image`, [array](language.types.array.md) `$points`, [int](language.types.integer.md) `$color`): [bool](language.types.boolean.md)

Assinatura alternativa (descontinuada a partir do PHP 8.1.0)

function **imagefilledpolygon**(  
    [GdImage](class.gdimage.md) `$image`,  
    [array](language.types.array.md) `$points`,  
    [int](language.types.integer.md) `$num_points`,  
    [int](language.types.integer.md) `$color`  
): [bool](language.types.boolean.md)

**imagefilledpolygon()** cria um polígono preenchido
na imagem fornecida em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`points`
:   Um array contendo as coordenadas `x` e `y`
    dos vértices consecutivos do polígono.

`num_points`
:   Número total de pontos (vértices), que devem ser pelo menos 3.

    Se este parâmetro for omitido na segunda assinatura, `points`
    deve ter um número par de elementos, e `num_points` será
    assumido como `count($points)/2`.

`color`
:   Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `num_points` foi descontinuado. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagefilledpolygon()****

```
<?php
// configura o array de pontos para o polígono
$values = array(
            40,  50,  // Ponto 1 (x, y)
            20,  240, // Ponto 2 (x, y)
            60,  60,  // Ponto 3 (x, y)
            240, 20,  // Ponto 4 (x, y)
            50,  40,  // Ponto 5 (x, y)
            10,  10   // Ponto 6 (x, y)
            );

// cria imagem
$image = imagecreatetruecolor(250, 250);

// aloca cores
$bg   = imagecolorallocate($image, 0, 0, 0);
$blue = imagecolorallocate($image, 0, 0, 255);

// preenche o fundo
imagefilledrectangle($image, 0, 0, 249, 249, $bg);

// desenha um polígono
imagefilledpolygon($image, $values, $blue);

// descarrega a imagem
header('Content-type: image/png');
imagepng($image);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagefilledpolygon()](images/21009b70229598c6a80eef8b45bf282b-imagefilledpolygon.png)

### Veja também

- [imagepolygon()](function.imagepolygon.md) - Desenha um polígono

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
