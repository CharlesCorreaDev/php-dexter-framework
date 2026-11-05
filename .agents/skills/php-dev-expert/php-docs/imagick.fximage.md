# Avalia uma expressão para cada pixel da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.fximage.php

---

# Imagick::fxImage

(PECL imagick 2, PECL imagick 3)

Imagick::fxImage — Avalia uma expressão para cada pixel da imagem

### Descrição

public function **Imagick::fxImage**([string](language.types.string.md) `$expression`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [Imagick](class.imagick.md)

Avalia uma expressão para cada pixel da imagem. Consulte [» O Operador de Imagem de
Efeitos Especiais Fx](https://www.imagemagick.org/script/fx.php) para mais informação.

### Parâmetros

`expression`
:   A expressão.

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::fxImage()****

```
<?php
function fxImage() {
    $imagick = new \Imagick();
    $imagick->newPseudoImage(200, 200, "xc:white");

    $fx = 'xx=i-w/2; yy=j-h/2; rr=hypot(xx,yy); (.5-rr/140)*1.2+.5';
    $fxImage = $imagick->fxImage($fx);

    header("Content-Type: image/png");
    $fxImage->setimageformat('png');
    echo $fxImage->getImageBlob();
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
