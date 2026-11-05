# Interpola cores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.sparsecolorimage.php

---

# Imagick::sparseColorImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::sparseColorImage — Interpola cores

### Descrição

public function **Imagick::sparseColorImage**([int](language.types.integer.md) `$SPARSE_METHOD`, [array](language.types.array.md) `$arguments`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Dado o array de argumentos contendo valores numéricos, este método interpola
as cores encontradas nessas coordenadas em toda a imagem usando `sparse_method`.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.5 ou superior.

### Parâmetros

`SPARSE_METHOD`
:   Consulte a lista de [constantes SPARSE\_METHOD](imagick.constants.md#imagick.constants.sparsecolormethod).

`arguments`
:   Um array contendo as coordenadas.
    O array deve estar no formato `array(1,1, 2,45)`

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 **Imagick::sparseColorImage()** com SPARSECOLORMETHOD\_BARYCENTRIC**

```
<?php
    function renderImageBarycentric2() {
        $points = [
            [0.30, 0.10, 'red'],
            [0.10, 0.80, 'blue'],
            [0.70, 0.60, 'lime'],
            [0.80, 0.20, 'yellow'],
        ];
        $imagick = createGradientImage(
            400, 400,
            $points,
            \Imagick::SPARSECOLORMETHOD_BARYCENTRIC
        );
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }

?>
```

**Exemplo #2 **Imagick::sparseColorImage()** com SPARSECOLORMETHOD\_BILINEAR**

```
<?php
    function renderImageBilinear() {
        $points = [[0.30, 0.10, 'red'], [0.10, 0.80, 'blue'], [0.70, 0.60, 'lime'], [0.80, 0.20, 'yellow'],];
        $imagick = createGradientImage(500, 500, $points, \Imagick::SPARSECOLORMETHOD_BILINEAR);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }

?>
```

**Exemplo #3 **Imagick::sparseColorImage()** com SPARSECOLORMETHOD\_SPEPARDS**

```
<?php
    function renderImageShepards() {
        $points = [
            [0.30, 0.10, 'red'],
            [0.10, 0.80, 'blue'],
            [0.70, 0.60, 'lime'],
            [0.80, 0.20, 'yellow'],
        ];
        $imagick = createGradientImage(600, 600, $points, \Imagick::SPARSECOLORMETHOD_SPEPARDS);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }

?>
```

**Exemplo #4 **Imagick::sparseColorImage()** com SPARSECOLORMETHOD\_VORONOI**

```
<?php
    function renderImageVoronoi() {
        $points = [
            [0.30, 0.10, 'red'],
            [0.10, 0.80, 'blue'],
            [0.70, 0.60, 'lime'],
            [0.80, 0.20, 'yellow'],
        ];
        $imagick = createGradientImage(500, 500, $points, \Imagick::SPARSECOLORMETHOD_VORONOI);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }

?>
```

**Exemplo #5 **Imagick::sparseColorImage()** com SPARSECOLORMETHOD\_BARYCENTRIC**

```
<?php
    function renderImageBarycentric() {
        $points = [
            [0, 0, 'skyblue'],
            [-1, 1, 'skyblue'],
            [1, 1, 'black'],
        ];
        $imagick = createGradientImage(600, 200, $points, \Imagick::SPARSECOLORMETHOD_BARYCENTRIC);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }

?>
```

**Exemplo #6 **Imagick::sparseColorImage()** na função createGradientImage() usada por outros exemplos**

```
<?php
function createGradientImage($width, $height, $colorPoints, $sparseMethod, $absolute = false) {

    $imagick = new \Imagick();
    $imagick->newImage($width, $height, "white");
    $imagick->setImageFormat("png");

    $barycentricPoints = array();

    foreach ($colorPoints as $colorPoint) {

        if ($absolute == true) {
            $barycentricPoints[] = $colorPoint[0];
            $barycentricPoints[] = $colorPoint[1];
        }
        else {
            $barycentricPoints[] = $colorPoint[0] * $width;
            $barycentricPoints[] = $colorPoint[1] * $height;
        }

        if (is_string($colorPoint[2])) {
            $imagickPixel = new \ImagickPixel($colorPoint[2]);
        }
        else if ($colorPoint[2] instanceof \ImagickPixel) {
            $imagickPixel = $colorPoint[2];
        }
        else{
            $errorMessage = sprintf(
                "O valor %s não é uma string e nem uma classe ImagickPixel. Não pode ser usado como uma cor.",
                $colorPoint[2]
            );

            throw new \InvalidArgumentException(
                $errorMessage
            );
        }

        $red = $imagickPixel->getColorValue(\Imagick::COLOR_RED);
        $green = $imagickPixel->getColorValue(\Imagick::COLOR_GREEN);
        $blue = $imagickPixel->getColorValue(\Imagick::COLOR_BLUE);
        $alpha = $imagickPixel->getColorValue(\Imagick::COLOR_ALPHA);

        $barycentricPoints[] = $red;
        $barycentricPoints[] = $green;
        $barycentricPoints[] = $blue;
        $barycentricPoints[] = $alpha;
    }

    $imagick->sparseColorImage($sparseMethod, $barycentricPoints);

    return $imagick;
}

?>
```

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
