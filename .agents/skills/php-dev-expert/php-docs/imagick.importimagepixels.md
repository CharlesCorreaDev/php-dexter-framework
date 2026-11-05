# Importa pixels de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.importimagepixels.php

---

# Imagick::importImagePixels

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::importImagePixels — Importa pixels de imagem

### Descrição

public function **Imagick::importImagePixels**(  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [string](language.types.string.md) `$map`,  
    [int](language.types.integer.md) `$storage`,  
    [array](language.types.array.md) `$pixels`  
): [bool](language.types.boolean.md)

Importa pixels de um array para uma imagem. O parâmetro `map` geralmente é
'RGB'. Este método impõe as seguintes restrições para os parâmetros: a quantidade de pixels
no array deve corresponder a `width` (largura) x `height` (altura) x comprimento do mapa.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.5 ou superior.

### Parâmetros

`x`
:   A posição X da imagem

`y`
:   A posição Y da imagem

`width`
:   A largura da imagem

`height`
:   A altura da imagem

`map`
:   Mapa de ordenação de pixels como uma string. Pode ser, por exemplo, `RGB`.
    O valor pode ser qualquer combinação ou ordem de R = vermelho, G = verde, B = azul, A = alfa (0 é transparente),
    O = opacidade (0 é opaco), C = ciano, Y = amarelo, M = magenta , K = preto, I = intensidade (para tons de cinza), P = preenchimento.

`storage`
:   O método de armazenamento de pixels.
    Consulte a lista de [constantes de pixels](imagick.constants.md#imagick.constants.pixel).

`pixels`
:   O array de pixels.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::importImagePixels()****

```
<?php

/* Gera array de pixels. 2000 pixels por faixa de cor */
$count = 2000 * 3;

$pixels =
    array_merge(array_pad(array(), $count, 0),
               array_pad(array(), $count, 255),
               array_pad(array(), $count, 0),
               array_pad(array(), $count, 255),
               array_pad(array(), $count, 0));

/* Largura e altura. A área é a quantidade de pixels dividida
   por três. Três vem de 'RGB', três valores por pixel */
$width = $height = pow((count($pixels) / 3), 0.5);

/* Cria imagem vazia */
$im = new Imagick();
$im->newImage($width, $height, 'gray');

/* Importa os pixels na imagem.
   largura * altura * strlen("RGB") precisa corresponder a count($pixels) */
$im->importImagePixels(0, 0, $width, $height, "RGB", Imagick::PIXEL_CHAR, $pixels);

/* exibe como imagem JPEG */
$im->setImageFormat('jpg');
header("Content-Type: image/jpg");
echo $im;

?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo : Imagick::importImagePixels()](images/c0d23d2d6769e53e24a1b3136c064577-importimagepixels.jpg)

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
