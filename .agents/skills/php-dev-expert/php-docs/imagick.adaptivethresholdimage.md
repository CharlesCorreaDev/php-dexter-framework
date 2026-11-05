# Seleciona um limite para cada pixel com base em uma faixa de intensidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.adaptivethresholdimage.php

---

# Imagick::adaptiveThresholdImage

(PECL imagick 2, PECL imagick 3)

Imagick::adaptiveThresholdImage — Seleciona um limite para cada pixel com base em uma faixa de intensidade

### Descrição

public function **Imagick::adaptiveThresholdImage**([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`, [int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

Seleciona um limite individual para cada pixel com base na
faixa de valores de intensidade em sua vizinhança local. Isto
permite o limiar de uma imagem cujo histograma de intensidade
global não contém picos distintos.

### Parâmetros

`width`
:   Largura da vizinhança local.

`height`
:   Altura da vizinhança local.

`offset`
:   O deslocamento médio.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::adaptiveThresholdImage()****

```
<?php
function adaptiveThresholdImage($imagePath, $width, $height, $adaptiveOffset) {
    $imagick = new \Imagick(realpath($imagePath));
    $adaptiveOffsetQuantum = intval($adaptiveOffset * \Imagick::getQuantum());
    $imagick->adaptiveThresholdImage($width, $height, $adaptiveOffsetQuantum);
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
