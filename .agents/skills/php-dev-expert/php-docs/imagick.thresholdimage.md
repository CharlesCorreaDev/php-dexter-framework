# Altera o valor de pixels individuais com base em um limite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.thresholdimage.php

---

# Imagick::thresholdImage

(PECL imagick 2, PECL imagick 3)

Imagick::thresholdImage — Altera o valor de pixels individuais com base em um limite

### Descrição

public function **Imagick::thresholdImage**([float](language.types.float.md) `$threshold`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Altera o valor de pixels individuais com base na intensidade de cada pixel em
comparação com o limite. O resultado é uma imagem de alto contraste e duas cores.

### Parâmetros

`threshold`

`channel`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::thresholdImage()****

```
<?php
function thresholdimage($imagePath, $threshold, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->thresholdimage($threshold * \Imagick::getQuantum(), $channel);
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
