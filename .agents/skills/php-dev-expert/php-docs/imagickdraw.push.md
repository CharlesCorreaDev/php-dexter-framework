# Clona o ImagickDraw atual e o coloca na pilha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.push.php

---

# ImagickDraw::push

(PECL imagick 2, PECL imagick 3)

ImagickDraw::push — Clona o ImagickDraw atual e o coloca na pilha

### Descrição

public function **ImagickDraw::push**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Clona o ImagickDraw atual para criar um novo ImagickDraw, que é então
adicionado à pilha do ImagickDraw. O(s) ImagickDraw(s) do desenho original podem ser
retornados invocando [ImagickDraw::pop()](imagickdraw.pop.md). Os ImagickDraws são armazenados em uma
pilha ImagickDraw. Para cada Pop já deve ter havido um Push
equivalente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::push()****

```
<?php
function push($strokeColor, $fillColor, $backgroundColor, $fillModifiedColor) {

    $draw = new \ImagickDraw();
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillModifiedColor);
    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);
    $draw->push();
    $draw->translate(50, 50);
    $draw->rectangle(200, 200, 300, 300);
    $draw->pop();
    $draw->setFillColor($fillColor);
    $draw->rectangle(200, 200, 300, 300);

    $imagick = new \Imagick();
    $imagick->newImage(500, 500, $backgroundColor);
    $imagick->setImageFormat("png");

    $imagick->drawImage($draw);

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
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
