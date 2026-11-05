# Pinta pixels com a cor transparente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.transparentpaintimage.php

---

# Imagick::transparentPaintImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::transparentPaintImage — Pinta pixels com a cor transparente

### Descrição

public function **Imagick::transparentPaintImage**(  
    [mixed](language.types.mixed.md) `$target`,  
    [float](language.types.float.md) `$alpha`,  
    [float](language.types.float.md) `$fuzz`,  
    [bool](language.types.boolean.md) `$invert`  
): [bool](language.types.boolean.md)

Pinta pixels que correspondem à cor alvo com a cor transparente.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.8 ou superior.

### Parâmetros

`target`
:   A cor alvo a ser pintada

`alpha`
:   O nível de transparência: 1.0 é totalmente opaco e 0.0 é totalmente transparente.

`fuzz`
:   A quantidade de fuzz. Por exemplo, definir fuzz como 10 e a cor vermelha nas intensidades de 100 e 102, respectivamente, agora são interpretadas como a mesma cor.

`invert`
:   Se igual a **`true`**, pinta qualquer pixel que não corresponda à cor alvo.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::transparentPaintImage()****

```
<?php
function transparentPaintImage($color, $alpha, $fuzz) {
    $imagick = new \Imagick(realpath("images/BlueScreen.jpg"));

    // Precisa estar em um formato que suporte transparência
    $imagick->setimageformat('png');

    $imagick->transparentPaintImage(
        $color, $alpha, $fuzz * \Imagick::getQuantum(), false
    );

    // Não requerido, mas ajuda a organizar os pixels deixados para trás
    $imagick->despeckleimage();

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
