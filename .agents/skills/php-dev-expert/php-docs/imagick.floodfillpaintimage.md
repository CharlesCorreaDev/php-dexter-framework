# Altera o valor da cor de qualquer pixel que corresponda ao alvo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.floodfillpaintimage.php

---

# Imagick::floodFillPaintImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::floodFillPaintImage — Altera o valor da cor de qualquer pixel que corresponda ao alvo

### Descrição

public function **Imagick::floodFillPaintImage**(  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [mixed](language.types.mixed.md) `$target`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [bool](language.types.boolean.md) `$invert`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Altera o valor da cor de qualquer pixel que corresponda ao alvo e seja um
vizinho imediato. Este método é um substituto para a função preterida
[Imagick::paintFloodFillImage()](imagick.paintfloodfillimage.md).
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.8 ou superior.

### Parâmetros

`fill`
:   Objeto ImagickPixel ou uma string contendo a cor de preenchimento

`fuzz`
:   A quantidade de fuzz. Por exemplo, definir fuzz como 10 e a cor vermelha nas intensidades de 100 e 102, respectivamente, agora são interpretadas como a mesma cor.

`target`
:   Objeto ImagickPixel ou uma string contendo a cor alvo a ser pintada

`x`
:   Posição X do início do preenchimento

`y`
:   Posição Y do início do preenchimento

`invert`
:   Se **`true`** pinta qualquer pixel que não corresponda à cor alvo.

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::floodfillPaintImage()****

```
<?php

/* Cria novo objeto Imagick */
$im = new Imagick();

/* cria imagens vermelha, verde e azul */
$im->newImage(100, 50, "red");
$im->newImage(100, 50, "green");
$im->newImage(100, 50, "blue");

/* Anexa as imagens em uma só */
$im->resetIterator();
$combined = $im->appendImages(true);

/* Grava a imagem intermediária para comparação */
$combined->writeImage("floodfillpaint_intermediate.png");

/* O pixel alvo para pintura */
$x = 1;
$y = 1;

/* Obtém a cor de pintura */
$target = $combined->getImagePixelColor($x, $y);

/* Pinta o pixel na posição 1,1 de preto e todos os pixels
   vizinhos que correspondam à cor alvo */
$combined->floodfillPaintImage("black", 1, $target, $x, $y, false);

/* Grava o resultado */
$combined->writeImage("floodfillpaint_result.png");
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo : Imagick::floodfillPaintImage()](images/c0d23d2d6769e53e24a1b3136c064577-floodfillpaint_intermediate.png)

![Saída do exemplo : Imagick::floodfillPaintImage()](images/c0d23d2d6769e53e24a1b3136c064577-floodfillpaint_result.png)

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
