# Cria uma imagem espelhada vertical

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.flipimage.php

---

# Imagick::flipImage

(PECL imagick 2, PECL imagick 3)

Imagick::flipImage — Cria uma imagem espelhada vertical

### Descrição

public function **Imagick::flipImage**(): [bool](language.types.boolean.md)

Cria uma imagem espelhada vertical refletindo os pixels em torno do eixo x central.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::flipImage()****

```
<?php
function flipImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->flipImage();
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
```

### Veja também

- [Imagick::flopimage()](imagick.flopimage.md) - Cria uma imagem espelhada horizontal

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
