# Desenha um arco parcial preenchido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefilledarc.php

---

# imagefilledarc

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagefilledarc — Desenha um arco parcial preenchido

### Descrição

function **imagefilledarc**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$center_x`,  
    [int](language.types.integer.md) `$center_y`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$start_angle`,  
    [int](language.types.integer.md) `$end_angle`,  
    [int](language.types.integer.md) `$color`,  
    [int](language.types.integer.md) `$style`  
): [true](language.types.singleton.md)

Desenha um arco parcial centrado na coordenada especificada na
imagem fornecida em `image`.

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
:   O ângulo inicial do arco, em graus.

`end_angle`
:   O ângulo final do arco, em graus.
    0° está localizado na posição 3 horas do relógio, e o arco é desenhado
    no sentido horário.

`color`
:   Um identificador de cor criado com [imagecolorallocate()](function.imagecolorallocate.md).

`style`
:   Um OR binário das seguinte possibilidades:

    1. **`IMG_ARC_PIE`**
    2. **`IMG_ARC_CHORD`**
    3. **`IMG_ARC_NOFILL`**
    4. **`IMG_ARC_EDGED`**

    **`IMG_ARC_PIE`** e **`IMG_ARC_CHORD`** são
    mutualmente exclusivas; **`IMG_ARC_CHORD`** apenas
    conecta os ângulos inicial e final com uma linha reta, enquanto que
    **`IMG_ARC_PIE`** produz uma borda arredondada.
    **`IMG_ARC_NOFILL`** indica que o arco
    ou corda devem ser contornados, não preenchidos. **`IMG_ARC_EDGED`**,
    usado em conjunto com **`IMG_ARC_NOFILL`**, indica que o ângulo inicial
    e o final devem ser conectados ao centro - é uma boa
    forma de se contornar (em vez de preencher) uma 'fatia de pizza'.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Criando uma pizza em 3D**

```
<?php

// cria a imagem
$image = imagecreatetruecolor(100, 100);

// aloca algumas cores
$white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray     = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy     = imagecolorallocate($image, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
$red      = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$darkred  = imagecolorallocate($image, 0x90, 0x00, 0x00);

// faz o efeito 3D
for ($i = 60; $i > 50; $i--) {
   imagefilledarc($image, 50, $i, 100, 50, 0, 45, $darknavy, IMG_ARC_PIE);
   imagefilledarc($image, 50, $i, 100, 50, 45, 75 , $darkgray, IMG_ARC_PIE);
   imagefilledarc($image, 50, $i, 100, 50, 75, 360 , $darkred, IMG_ARC_PIE);
}

imagefilledarc($image, 50, 50, 100, 50, 0, 45, $navy, IMG_ARC_PIE);
imagefilledarc($image, 50, 50, 100, 50, 45, 75 , $gray, IMG_ARC_PIE);
imagefilledarc($image, 50, 50, 100, 50, 75, 360 , $red, IMG_ARC_PIE);

// descarrega a imagem
header('Content-type: image/png');
imagepng($image);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Criando uma pizza em 3D](images/21009b70229598c6a80eef8b45bf282b-imagefilledarc.png)

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
