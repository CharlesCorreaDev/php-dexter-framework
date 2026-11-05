# Dimensiona uma imagem proporcionalmente 2x

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.magnifyimage.php

---

# Imagick::magnifyImage

(PECL imagick 2, PECL imagick 3)

Imagick::magnifyImage — Dimensiona uma imagem proporcionalmente 2x

### Descrição

public function **Imagick::magnifyImage**(): [bool](language.types.boolean.md)

É um método de conveniência que dimensiona uma imagem proporcionalmente ao dobro do seu tamanho original.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::magnifyImage()****

```
<?php
function magnifyImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->magnifyImage();
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
