# Ajusta a matriz de transformação afim atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.affine.php

---

# ImagickDraw::affine

(PECL imagick 2, PECL imagick 3)

ImagickDraw::affine — Ajusta a matriz de transformação afim atual

### Descrição

public function **ImagickDraw::affine**([array](language.types.array.md) `$affine`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Ajusta a matriz de transformação afim atual com a matriz de transformação
afim especificada.

### Parâmetros

`affine`
:   Parâmetros da matriz afim.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::affine()****

```
<?php
function affine($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeWidth(1);
    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);

    $PI = 3.141592653589794;
    $angle = 60 * $PI / 360;

    // Dimensiona as coordernadas de desenho.
    $affineScale = array("sx" => 1.75, "sy" => 1.75, "rx" => 0, "ry" => 0, "tx" => 0, "ty" => 0);

    // Cisalha as coordernadas de desenho.
    $affineShear = array("sx" => 1, "sy" => 1, "rx" => sin($angle), "ry" => -sin($angle), "tx" => 0, "ty" => 0);

    // Rotaciona as coordernadas. A matriz afim de cisalhamento
    // produz desenhos com escala incorreta.
    $affineRotate = array("sx" => cos($angle), "sy" => cos($angle), "rx" => sin($angle), "ry" => -sin($angle), "tx" => 0, "ty" => 0,);

    // Translação (deslocamento) do desenho
    $affineTranslate = array("sx" => 1, "sy" => 1, "rx" => 0, "ry" => 0, "tx" => 30, "ty" => 30);

    // A matriz afim identidade
    $affineIdentity = array("sx" => 1, "sy" => 1, "rx" => 0, "ry" => 0, "tx" => 0, "ty" => 0);

    $examples = [$affineScale, $affineShear, $affineRotate, $affineTranslate, $affineIdentity,];

    $count = 0;

    foreach ($examples as $example) {
        $draw->push();
        $draw->translate(($count % 2) * 250, intval($count / 2) * 250);
        $draw->translate(100, 100);
        $draw->affine($example);
        $draw->rectangle(-50, -50, 50, 50);
        $draw->pop();
        $count++;
    }

    // Cria um objeto de imagem no qual os comandos de desenho podem ser processados
    $image = new \Imagick();
    $image->newImage(500, 750, $backgroundColor);
    $image->setImageFormat("png");

    // Renderiza os comandos de desenho no objeto ImagickDraw
    // na imagem.
    $image->drawImage($draw);

    // Envia a imagem para o navegador
    header("Content-Type: image/png");
    echo $image->getImageBlob();
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
