# Aplica um vetor de cores a cada pixel da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.tintimage.php

---

# Imagick::tintImage

(PECL imagick 2, PECL imagick 3)

Imagick::tintImage — Aplica um vetor de cores a cada pixel da imagem

### Descrição

public function **Imagick::tintImage**([mixed](language.types.mixed.md) `$tint`, [mixed](language.types.mixed.md) `$opacity`, [bool](language.types.boolean.md) `$legacy` = **`false`**): [bool](language.types.boolean.md)

Aplica um vetor de cores a cada pixel da imagem. O comprimento do vetor
é 0 para preto e branco e máximo para tons médios. A função de
peso do vetor é f(x)=(1-(4.0\*((x-0.5)\*(x-0.5)))).

### Parâmetros

`tint`

`opacity`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como o primeiro parâmetro e um float representando o valor da opacidade como o segundo parâmetro. Versões anteriores permitiam apenas objetos ImagickPixel. |

### Examples

**Exemplo #1 Exemplo de **Imagick::tintImage()****

```
<?php
function tintImage($r, $g, $b, $a) {
    $a = $a / 100;

    $imagick = new \Imagick();
    $imagick->newPseudoImage(400, 400, 'gradient:black-white');

    $tint = new \ImagickPixel("rgb($r, $g, $b)");
    $opacity = new \ImagickPixel("rgb(128, 128, 128, $a)");
    $imagick->tintImage($tint, $opacity);
    $imagick->setImageFormat('png');
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
