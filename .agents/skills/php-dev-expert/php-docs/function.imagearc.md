# Desenha um arco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagearc.php

---

# imagearc

(PHP 4, PHP 5, PHP 7, PHP 8)

imagearc — Desenha um arco

### Descrição

function **imagearc**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$center_x`,  
    [int](language.types.integer.md) `$center_y`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$start_angle`,  
    [int](language.types.integer.md) `$end_angle`,  
    [int](language.types.integer.md) `$color`  
): [true](language.types.singleton.md)

**imagearc()** desenha um arco de círculo centrado nas coordenadas
fornecidas.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`center_x`
:   Coordenada x do centro.

`center_y`
:   Coordenada y do centro.

`width`
:   Largura do arco.

`height`
:   Altura do arco.

`start_angle`
:   Ângulo inicial do arco, em graus.

`end_angle`
:   Ângulo final do arco, em graus.
    0° está localizado na posição de 3 horas, e o arco é desenhado no
    sentido horário.

`color`
:   Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Desenhando um círculo com **imagearc()****

```
<?php

// cria uma imagem 200x200
$img = imagecreatetruecolor(200, 200);

// aloca algumas cores
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);

// desenha a cabeça
imagearc($img, 100, 100, 200, 200,  0, 360, $white);
// boca
imagearc($img, 100, 100, 150, 150, 25, 155, $red);
// olho esquerdo e olho direito
imagearc($img,  60,  75,  50,  50,  0, 360, $green);
imagearc($img, 140,  75,  50,  50,  0, 360, $blue);

// mostra a imagem no navegador
header("Content-type: image/png");
imagepng($img);

?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Desenhando um círculo com imagearc()](images/21009b70229598c6a80eef8b45bf282b-imagearc.png)

### Veja também

- [imagefilledarc()](function.imagefilledarc.md) - Desenha um arco parcial preenchido
- [imageellipse()](function.imageellipse.md) - Desenha uma elipse
- [imagefilledellipse()](function.imagefilledellipse.md) - Desenha uma elipse preenchida

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
