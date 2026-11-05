# Copia e redimensiona parte de uma imagem com reamostragem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecopyresampled.php

---

# imagecopyresampled

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagecopyresampled — Copia e redimensiona parte de uma imagem com reamostragem

### Descrição

function **imagecopyresampled**(  
    [GdImage](class.gdimage.md) `$dst_image`,  
    [GdImage](class.gdimage.md) `$src_image`,  
    [int](language.types.integer.md) `$dst_x`,  
    [int](language.types.integer.md) `$dst_y`,  
    [int](language.types.integer.md) `$src_x`,  
    [int](language.types.integer.md) `$src_y`,  
    [int](language.types.integer.md) `$dst_width`,  
    [int](language.types.integer.md) `$dst_height`,  
    [int](language.types.integer.md) `$src_width`,  
    [int](language.types.integer.md) `$src_height`  
): [true](language.types.singleton.md)

**imagecopyresampled()** copia uma porção
retangular de uma imagem em outra imagem, suavemente interpolando valores
de pixels de forma que, em particular, a redução do tamanho de uma imagem ainda
retenha bastante clareza.

Em outras palavras, **imagecopyresampled()** pegará
uma área retangular de `src_image`, de largura
`src_width` e altura `src_height` na
posição (`src_x`,`src_y`),
e posicionará esta área em uma outra área retangular de `dst_image`,
de largura `dst_width` e altura `dst_height`,
na posição (`dst_x`,`dst_y`).

Se as coordenadas de origem e destino e larguras e alturas
forem diferentes, um alongamento ou um encolhimento apropriado do fragmento da imagem
será realizado. As coordenadas se referem ao canto superior
esquerdo. Esta função pode ser usada para copiar regiões dentro da
mesma imagem (se `dst_image` for igual a
`src_image`) mas se as regiões se sobrepuserem, os
resultados serão imprevisíveis.

### Parâmetros

`dst_image`
:   Recurso da imagem de destino.

`src_image`
:   Recurso da imagem de origem.

`dst_x`
:   Coordenada x do ponto de destino.

`dst_y`
:   Coordenada y do ponto de destino.

`src_x`
:   Coordenada x do ponto de origem.

`src_y`
:   Coordenada y do ponto de origem.

`dst_width`
:   Largura do destino.

`dst_height`
:   Altura do destino.

`src_width`
:   Largura da imagem de origem.

`src_height`
:   Altura da imagem de origem.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O tipo de retorno agora é **`true`**; anteriormente era [bool](language.types.boolean.md). |
| 8.0.0 | `dst_image` e `src_image` esperam instâncias [GdImage](class.gdimage.md) agora; anteriormente, [resource](language.types.resource.md)s eram esperadas. |

### Examples

**Exemplo #1 Exemplo simples**

Este exemplo irá reamostrar uma imagem para metade de seu tamanho original.

```
<?php
// O arquivo
$filename = 'test.jpg';
$percent = 0.5;

// Tipo de conteúdo
header('Content-Type: image/jpeg');

// Obtém novas dimensões
list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;

// Reamostra
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Mostra
imagejpeg($image_p, null, 100);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Exemplo simples](images/21009b70229598c6a80eef8b45bf282b-imagecopyresampled.jpg)

**Exemplo #2 Reamostrando uma imagem proporcionalmente**

Este exemplo irá mostrar uma imagem com a largura e
altura máximas de 200 pixels.

```
<?php
// O arquivo
$filename = 'test.jpg';

// Define altura e largura máximas
$width = 200;
$height = 200;

// Tipo de conteúdo
header('Content-Type: image/jpeg');

// Obtém novas dimensões
list($width_orig, $height_orig) = getimagesize($filename);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
   $width = $height*$ratio_orig;
} else {
   $height = $width/$ratio_orig;
}

// Reamostra
$image_p = imagecreatetruecolor($width, $height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// Mostra
imagejpeg($image_p, null, 100);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Reamostrando uma imagem proporcionalmente](images/21009b70229598c6a80eef8b45bf282b-imagecopyresampled_2.jpg)

### Notas

> **Nota**:
>
> Existe um problema devido a limitações de imagem de paleta (255+1 cores).
> A reamostragem ou a filtragem de uma imagem normalmente precisa de mais cores que 255, um
> tipo de aproximação é usada para calcular o novo pixel reamostrado e sua
> cor. Com imagem de paleta tenta-se alocar uma nova cor, se isso
> falhar, escolhe-se a cor computada mais próxima (em teoria). Isto nem
> sempre é a cor mais próxima visualmente. Isto pode produzir um resultado estranho, tal
> como imagem vazia (ou visualmente vazia). Para evitar esse problema, favor utilizar uma
> imagem em cores verdadeiras como imagem de destino, tal como a criada por
> [imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Veja também

- [imagecopyresized()](function.imagecopyresized.md) - Copia e redimensiona parte de uma imagem
- [imagescale()](function.imagescale.md) - Muda a escala de uma imagem usando largura e altura informadas
- [imagecrop()](function.imagecrop.md) - Recorta uma imagem no retângulo informado

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
