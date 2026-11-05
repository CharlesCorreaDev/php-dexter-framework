# Reamostra imagem para a resolução desejada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.resampleimage.php

---

# Imagick::resampleImage

(PECL imagick 2, PECL imagick 3)

Imagick::resampleImage — Reamostra imagem para a resolução desejada

### Descrição

public function **Imagick::resampleImage**(  
    [float](language.types.float.md) `$x_resolution`,  
    [float](language.types.float.md) `$y_resolution`,  
    [int](language.types.integer.md) `$filter`,  
    [float](language.types.float.md) `$blur`  
): [bool](language.types.boolean.md)

Reamostra imagem para a resolução desejada.

### Parâmetros

`x_resolution`

`y_resolution`

`filter`

`blur`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::resampleImage()****

```
<?php
function resampleImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));

    $imagick->resampleImage(200, 200, \Imagick::FILTER_LANCZOS, 1);
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
