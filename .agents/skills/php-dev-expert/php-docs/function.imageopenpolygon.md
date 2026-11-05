# Desenha um polígono aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageopenpolygon.php

---

# imageopenpolygon

(PHP 7 >= 7.2.0, PHP 8)

imageopenpolygon — Desenha um polígono aberto

### Descrição

Assinatura a partir do PHP 8.0.0 (não suportada com argumentos nomeados)

function **imageopenpolygon**([GdImage](class.gdimage.md) `$image`, [array](language.types.array.md) `$points`, [int](language.types.integer.md) `$color`): [bool](language.types.boolean.md)

Assinatura alternativa (descontinuada a partir do PHP 8.1.0)

function **imageopenpolygon**(  
    [GdImage](class.gdimage.md) `$image`,  
    [array](language.types.array.md) `$points`,  
    [int](language.types.integer.md) `$num_points`,  
    [int](language.types.integer.md) `$color`  
): [bool](language.types.boolean.md)

**imageopenpolygon()** desenha um polígono aberto na imagem informada
em `image`. A contrário de [imagepolygon()](function.imagepolygon.md),
nenhuma linha é desenhada entre o último ponto e o primeiro ponto.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`points`
:   Um array contendo os vértices do polígono, por exemplo:

    |  |  |
    | --- | --- |
    | points[0] | = x0 |
    | points[1] | = y0 |
    | points[2] | = x1 |
    | points[3] | = y1 |

`num_points`
:   Número total de pontos (vértices), que devem ser pelo menos 3.

    Se este parâmetro for omitido conforme a segunda assinatura, `points`
    precisa ter um número par de elementos, e será assumido que `num_points`
    será igual a `count($points)/2`.

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

**Exemplo #1 Exemplo de **imageopenpolygon()****

```
<?php
// Cria uma imagem vazia
$image = imagecreatetruecolor(400, 300);

// Aloca uma cor para o polígono
$col_poly = imagecolorallocate($image, 255, 255, 255);

// Desenha o polígono
imageopenpolygon($image, array(
        0,   0,
        100, 200,
        300, 200
    ),
    $col_poly);

// Mostra a imagem no navegador
header('Content-type: image/png');

imagepng($image);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imageopenpolygon()](images/21009b70229598c6a80eef8b45bf282b-imageopenpolygon.png)

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
