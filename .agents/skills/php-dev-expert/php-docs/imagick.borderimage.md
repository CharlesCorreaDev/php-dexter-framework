# Envolve a imagem com uma borda

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.borderimage.php

---

# Imagick::borderImage

(PECL imagick 2, PECL imagick 3)

Imagick::borderImage — Envolve a imagem com uma borda

### Descrição

public function **Imagick::borderImage**([mixed](language.types.mixed.md) `$bordercolor`, [int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`): [bool](language.types.boolean.md)

Envolve a imagem com uma borda da cor definida pelo objeto bordercolor ImagickPixel.

### Parâmetros

`bordercolor`
:   Objeto ImagickPixel ou uma string contendo a cor da borda

`width`
:   Largura da borda

`height`
:   Altura da borda

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como primeiro parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

### Examples

**Exemplo #1 Exemplo de **Imagick::borderImage()****

```
<?php
function borderImage($imagePath, $color, $width, $height) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->borderImage($color, $width, $height);
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
