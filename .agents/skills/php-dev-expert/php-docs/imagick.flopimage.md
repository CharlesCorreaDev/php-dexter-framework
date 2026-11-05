# Cria uma imagem espelhada horizontal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.flopimage.php

---

# Imagick::flopImage

(PECL imagick 2, PECL imagick 3)

Imagick::flopImage — Cria uma imagem espelhada horizontal

### Descrição

public function **Imagick::flopImage**(): [bool](language.types.boolean.md)

Cria uma imagem espelhada horizontal refletindo os pixels em torno do eixo y central.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::flopImage()****

```
<?php
function flopImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->flopImage();
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
```

### Veja também

- [Imagick::flipimage()](imagick.flipimage.md) - Cria uma imagem espelhada vertical

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
