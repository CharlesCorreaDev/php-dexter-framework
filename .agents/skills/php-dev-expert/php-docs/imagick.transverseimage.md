# Cria uma imagem espelhada horizontal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.transverseimage.php

---

# Imagick::transverseImage

(PECL imagick 2, PECL imagick 3)

Imagick::transverseImage — Cria uma imagem espelhada horizontal

### Descrição

public function **Imagick::transverseImage**(): [bool](language.types.boolean.md)

Cria uma imagem espelhada horizontal refletindo os pixels em torno do
eixo Y central enquanto os gira em 270 graus.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::transverseImage()****

```
<?php
function transverseImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->transverseImage();
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
```

### Veja também

- [Imagick::transposeImage()](imagick.transposeimage.md) - Cria uma imagem espelhada vertical

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
