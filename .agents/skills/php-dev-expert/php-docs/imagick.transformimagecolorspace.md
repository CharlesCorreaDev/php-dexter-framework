# Transforma uma imagem em um novo espaço de cores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.transformimagecolorspace.php

---

# Imagick::transformImageColorspace

(PECL imagick 3)

Imagick::transformImageColorspace — Transforma uma imagem em um novo espaço de cores

### Descrição

public function **Imagick::transformImageColorspace**([int](language.types.integer.md) `$colorspace`): [bool](language.types.boolean.md)

Transforma uma imagem em um novo espaço de cores

### Parâmetros

`colorspace`
:   O espaço de cores para o qual a imagem deve ser transformada, uma das [constantes COLORSPACE](imagick.constants.md#imagick.constants.colorspace), por exemplo, Imagick::COLORSPACE\_CMYK.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::transformImageColorspace()****

Transforma uma imagem em um novo espaço de cores e, em seguida, extrai um único canal para que os valores individuais do canal possam ser visualizados.

```
<?php
function transformImageColorspace($imagePath, $colorSpace, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->transformimagecolorspace($colorSpace);
    // $channel deve ser uma das constantes de canal, exemplo: \Imagick::CHANNEL_BLUE
    $imagick->separateImageChannel($channel);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}
?>
```

### Veja também

- [Imagick::setColorSpace()](imagick.setcolorspace.md) - Define espaço de cores

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
