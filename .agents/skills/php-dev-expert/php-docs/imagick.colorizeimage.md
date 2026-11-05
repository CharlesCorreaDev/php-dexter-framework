# Mescla a cor de preenchimento com a imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.colorizeimage.php

---

# Imagick::colorizeImage

(PECL imagick 2, PECL imagick 3)

Imagick::colorizeImage — Mescla a cor de preenchimento com a imagem

### Descrição

public function **Imagick::colorizeImage**([mixed](language.types.mixed.md) `$colorize`, [mixed](language.types.mixed.md) `$opacity`, [bool](language.types.boolean.md) `$legacy` = **`false`**): [bool](language.types.boolean.md)

Mescla a cor de preenchimento com cada pixel da imagem.

### Parâmetros

`colorize`
:   Objeto ImagickPixel ou uma string contendo a cor de colorização.

`opacity`
:   Objeto ImagickPixel ou um float contendo o valor de opacidade.
    1.0 é totalmente opaco e 0.0 é totalmente transparente.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como o primeiro parâmetro e um float representando o valor da opacidade como o segundo parâmetro. Versões anteriores permitiam apenas objetos ImagickPixel. |

### Examples

**Exemplo #1 Exemplo de **Imagick::colorizeImage()****

```
<?php
function colorizeImage($imagePath, $color, $opacity) {
    $imagick = new \Imagick(realpath($imagePath));
    $opacity = $opacity / 255.0;
    $opacityColor = new \ImagickPixel("rgba(0, 0, 0, $opacity)");
    $imagick->colorizeImage($color, $opacityColor);
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
