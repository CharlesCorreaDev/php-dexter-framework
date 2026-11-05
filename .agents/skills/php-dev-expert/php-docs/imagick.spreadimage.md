# Desloca aleatoriamente cada pixel em um bloco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.spreadimage.php

---

# Imagick::spreadImage

(PECL imagick 2, PECL imagick 3)

Imagick::spreadImage — Desloca aleatoriamente cada pixel em um bloco

### Descrição

public function **Imagick::spreadImage**([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

Método de efeitos especiais que desloca aleatoriamente cada pixel em um bloco
definido pelo parâmetro 'radius' (raio).

### Parâmetros

`radius`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::spreadImage()****

```
<?php
function spreadImage($imagePath, $radius) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->spreadImage($radius);
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
