# Cria uma imagem espelhada vertical

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.transposeimage.php

---

# Imagick::transposeImage

(PECL imagick 2, PECL imagick 3)

Imagick::transposeImage — Cria uma imagem espelhada vertical

### Descrição

public function **Imagick::transposeImage**(): [bool](language.types.boolean.md)

Cria uma imagem espelhada vertical refletindo os pixels
em torno do eixo X central enquanto os gira em 90 graus.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::transposeImage()****

```
<?php
function transposeImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->transposeImage();
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
```

### Veja também

- [Imagick::transverseImage()](imagick.transverseimage.md) - Cria uma imagem espelhada horizontal

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
