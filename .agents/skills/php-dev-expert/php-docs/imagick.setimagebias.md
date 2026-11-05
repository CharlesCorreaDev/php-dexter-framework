# Define o ajuste (bias) da imagem para qualquer método que faça convolução em uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagebias.php

---

# Imagick::setImageBias

(PECL imagick 2, PECL imagick 3)

Imagick::setImageBias — Define o ajuste (bias) da imagem para qualquer método que faça convolução em uma imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::setImageBias**([float](language.types.float.md) `$bias`): [bool](language.types.boolean.md)

Define o ajuste (bias) da imagem para qualquer método que faça convolução em uma imagem (ex.: Imagick::ConvolveImage()).

### Parâmetros

`bias`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::setImageBias()****

```
<?php
//requires ImageMagick version 6.9.0-1 to have an effect on convolveImage
function setImageBias($bias) {
    $imagick = new \Imagick(realpath("images/stack.jpg"));

    $xKernel = array(
        -0.70, 0, 0.70,
        -0.70, 0, 0.70,
        -0.70, 0, 0.70
    );

    $imagick->setImageBias($bias * \Imagick::getQuantum());
    $imagick->convolveImage($xKernel, \Imagick::CHANNEL_ALL);

    $imagick->setImageFormat('png');

    header('Content-type: image/png');
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
