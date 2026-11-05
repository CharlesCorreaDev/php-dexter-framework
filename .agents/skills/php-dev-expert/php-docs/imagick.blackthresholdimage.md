# Força todos os pixels abaixo do limite para preto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.blackthresholdimage.php

---

# Imagick::blackThresholdImage

(PECL imagick 2, PECL imagick 3)

Imagick::blackThresholdImage — Força todos os pixels abaixo do limite para preto

### Descrição

public function **Imagick::blackThresholdImage**([mixed](language.types.mixed.md) `$threshold`): [bool](language.types.boolean.md)

É como Imagick::thresholdImage() mas força todos os pixels abaixo do limite
para preto, deixando todos os pixels acima do limite inalterados.

### Parâmetros

`threshold`
:   O limite abaixo do qual tudo fica preto

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

### Examples

**Exemplo #1 Exemplo de **Imagick::blackThresholdImage()****

```
<?php
function blackThresholdImage($imagePath, $thresholdColor) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->blackthresholdimage($thresholdColor);
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
