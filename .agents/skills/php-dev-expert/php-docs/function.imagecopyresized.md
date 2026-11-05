# Copia e redimensiona parte de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecopyresized.php

---

# imagecopyresized

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecopyresized — Copia e redimensiona parte de uma imagem

### Descrição

function **imagecopyresized**(  
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

**imagecopyresized()** copia uma porção
retangular de uma imagem para outra imagem.
`dst_image` é a imagem de destino,
`src_image` é a imagem de origem.

Em outras palavras, **imagecopyresized()** pegará
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
| 8.0.0 | `dst_image` e `src_image` esperam instâncias [GdImage](class.gdimage.md) agora; anteriormente, [resource](language.types.resource.md)s eram esperadas. |

### Examples

**Exemplo #1 Redimensionando uma imagem**

Este exemplo irá mostrar a imagem com a metade do tamanho.

```
<?php
// Arquivo e novo tamanho
$filename = 'test.jpg';
$percent = 0.5;

// Tipo de conteúdo
header('Content-Type: image/jpeg');

// Obtém novos tamanhos
list($width, $height) = getimagesize($filename);
$newwidth = $width * $percent;
$newheight = $height * $percent;

// Carrega
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Redimensiona
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Mostra
imagejpeg($thumb);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Output of example: Redimensionando uma imagem](images/21009b70229598c6a80eef8b45bf282b-imagecopyresized.jpg)

A imagem será mostrada com a metade do tamanho, mas uma qualidade
melhor poderia ser obtida usando a função [imagecopyresampled()](function.imagecopyresampled.md).

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

- [imagecopyresampled()](function.imagecopyresampled.md) - Copia e redimensiona parte de uma imagem com reamostragem
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
