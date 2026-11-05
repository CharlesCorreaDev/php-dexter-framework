# Especifica o padrão de traços e espaços usados ​​para traçar caminhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setstrokedasharray.php

---

# ImagickDraw::setStrokeDashArray

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setStrokeDashArray — Especifica o padrão de traços e espaços usados ​​para traçar caminhos

### Descrição

public function **ImagickDraw::setStrokeDashArray**([?](language.types.null.md)[array](language.types.array.md) `$dashes`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica o padrão de traços e espaços usados ​​para traçar caminhos. O
strokeDashArray representa um array de números que especifica os comprimentos de
traços e lacunas alternados em pixels. Se um número ímpar de valores for
fornecido, a lista de valores será repetida para produzir um número par de
valores. Para remover um array de traços existente, passe zero no argumento number\_elements
e nulo no dash\_array. Um array strokeDashArray\_ típico pode
conter os membros 5 3 2.

### Parâmetros

`dashes`
:   array de números em ponto flutuante

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setStrokeDashArray()****

```
<?php
function setStrokeDashArray($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(4);

    $draw->setStrokeDashArray([10, 10]);
    $draw->rectangle(100, 50, 225, 175);

    $draw->setStrokeDashArray([20, 5, 20, 5, 5, 5,]);
    $draw->rectangle(275, 50, 400, 175);

    $draw->setStrokeDashArray([20, 5, 20, 5, 5]);
    $draw->rectangle(100, 200, 225, 350);

    $draw->setStrokeDashArray([1, 1, 1, 1, 2, 2, 3, 3, 5, 5, 8, 8, 13, 13, 21, 21, 34, 34, 55, 55, 89, 89, 144, 144, 233, 233, 377, 377, 610, 610, 987, 987, 1597, 1597, 2584, 2584, 4181, 4181,]);

    $draw->rectangle(275, 200, 400, 350);

    $image = new \Imagick();
    $image->newImage(500, 400, $backgroundColor);
    $image->setImageFormat("png");
    $image->drawImage($draw);

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
