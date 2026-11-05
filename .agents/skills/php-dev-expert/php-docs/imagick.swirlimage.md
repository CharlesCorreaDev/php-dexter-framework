# Gira os pixels em torno do centro da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.swirlimage.php

---

# Imagick::swirlImage

(PECL imagick 2, PECL imagick 3)

Imagick::swirlImage — Gira os pixels em torno do centro da imagem

### Descrição

function **Imagick::swirlImage**([float](language.types.float.md) `$degrees`): [bool](language.types.boolean.md)

Gira os pixels em torno do centro da imagem, onde 'degrees' indica
o ângulo de varredura do arco através do qual cada pixel é movido. Obtém-se um efeito mais
dramático à medida que o ângulo varia de 1 a 360.

### Parâmetros

`degrees`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::swirlImage()****

```
<?php
function swirlImage($imagePath, $swirl) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->swirlImage($swirl);
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
