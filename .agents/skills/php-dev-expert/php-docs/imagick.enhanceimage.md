# Melhora a qualidade de uma imagem com ruído

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.enhanceimage.php

---

# Imagick::enhanceImage

(PECL imagick 2, PECL imagick 3)

Imagick::enhanceImage — Melhora a qualidade de uma imagem com ruído

### Descrição

public function **Imagick::enhanceImage**(): [bool](language.types.boolean.md)

Aplica um filtro digital que melhora a qualidade de uma imagem com ruído.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::enhanceImage()****

```
<?php
function enhanceImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->enhanceImage();
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
