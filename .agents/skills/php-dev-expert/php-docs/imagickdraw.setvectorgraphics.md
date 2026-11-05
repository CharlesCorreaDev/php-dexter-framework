# Define os gráficos vetoriais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setvectorgraphics.php

---

# ImagickDraw::setVectorGraphics

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setVectorGraphics — Define os gráficos vetoriais

### Descrição

public function **ImagickDraw::setVectorGraphics**([string](language.types.string.md) `$xml`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define os gráficos vetoriais associados ao objeto ImagickDraw
especificado. Use este método com [ImagickDraw::getVectorGraphics()](imagickdraw.getvectorgraphics.md) como uma forma
de persistir o estado dos gráficos vetoriais.

### Parâmetros

`xml`
:   XML contendo os gráficos vetoriais

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setVectorGraphics()****

```
<?php
function setVectorGraphics() {
    // Configura um objeto com um desenho
    $draw = new \ImagickDraw();
    $draw->setFillColor("red");
    $draw->circle(20, 20, 50, 50);
    $draw->setFillColor("blue");
    $draw->circle(50, 70, 50, 50);
    $draw->rectangle(50, 120, 80, 150);

    // Obtém o desenho como uma string
    $SVG = $draw->getVectorGraphics();

    // $svg é uma string e poderia ser salva em qualquer lugar que uma string puder ser salva

    // Use o desenho salvo para gerar um novo objeto de desenho
    $draw2 = new \ImagickDraw();
    // Aparentemento falta no texto SVG o elemento "root".
    $draw2->setVectorGraphics("<root>".$SVG."</root>");

    $imagick = new \Imagick();
    $imagick->newImage(200, 200, 'white');
    $imagick->setImageFormat("png");

    $imagick->drawImage($draw2);

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
