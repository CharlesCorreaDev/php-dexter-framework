# Aplica um efeito solarizante à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.solarizeimage.php

---

# Imagick::solarizeImage

(PECL imagick 2, PECL imagick 3)

Imagick::solarizeImage — Aplica um efeito solarizante à imagem

### Descrição

public function **Imagick::solarizeImage**([int](language.types.integer.md) `$threshold`): [bool](language.types.boolean.md)

Aplica um efeito especial à imagem, semelhante ao efeito obtido em
uma câmara escura fotográfica, expondo seletivamente áreas de papel fotossensível
à luz. O limite varia de 0 até QuantumRange e é uma medida da
extensão da solarização.

### Parâmetros

`threshold`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::solarizeImage()****

```
<?php
function solarizeImage($imagePath, $solarizeThreshold) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->solarizeImage($solarizeThreshold * \Imagick::getQuantum());
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
