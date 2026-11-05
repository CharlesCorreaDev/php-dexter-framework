# Altera o brilho e/ou contraste de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.brightnesscontrastimage.php

---

# Imagick::brightnessContrastImage

(PECL imagick 3 >= 3.3.0)

Imagick::brightnessContrastImage — Altera o brilho e/ou contraste de uma imagem

### Descrição

public function **Imagick::brightnessContrastImage**([float](language.types.float.md) `$brightness`, [float](language.types.float.md) `$contrast`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Altera o brilho e/ou contraste de uma imagem. Converte os parâmetros de brilho e contraste em inclinação e interceptação e chama uma função polinomial para aplicar à imagem.

### Parâmetros

`brightness`

`contrast`

`channel`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::brightnessContrastImage()****

```
<?php
function brightnessContrastImage($imagePath, $brightness, $contrast, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->brightnessContrastImage($brightness, $contrast, $channel);
    header("Content-Type: image/jpg");
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
