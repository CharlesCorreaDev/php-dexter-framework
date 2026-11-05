# Força todos os pixels acima de um limite para branco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.whitethresholdimage.php

---

# Imagick::whiteThresholdImage

(PECL imagick 2, PECL imagick 3)

Imagick::whiteThresholdImage — Força todos os pixels acima de um limite para branco

### Descrição

public function **Imagick::whiteThresholdImage**([mixed](language.types.mixed.md) `$threshold`): [bool](language.types.boolean.md)

É como Imagick::ThresholdImage() mas força todos os pixels acima do limite
para branco, deixando todos os pixels abaixo do limite inalterados.

### Parâmetros

`threshold`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

### Examples

**Exemplo #1 Exemplo de **Imagick::whiteThresholdImage()****

```
<?php
function whiteThresholdImage($imagePath, $color) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->whiteThresholdImage($color);
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
