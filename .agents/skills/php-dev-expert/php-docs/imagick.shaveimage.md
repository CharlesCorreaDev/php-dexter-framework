# Raspa pixels das bordas da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.shaveimage.php

---

# Imagick::shaveImage

(PECL imagick 2, PECL imagick 3)

Imagick::shaveImage — Raspa pixels das bordas da imagem

### Descrição

public function **Imagick::shaveImage**([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`): [bool](language.types.boolean.md)

Raspa pixels das bordas da imagem. Ele aloca a memória necessária para
a nova estrutura de imagem e retorna um ponteiro para a nova imagem.

### Parâmetros

`columns`

`rows`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::shaveImage()****

```
<?php
function shaveImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->shaveImage(100, 50);
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
