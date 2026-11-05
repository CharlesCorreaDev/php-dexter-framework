# Define a resolução da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageresolution.php

---

# Imagick::setImageResolution

(PECL imagick 2, PECL imagick 3)

Imagick::setImageResolution — Define a resolução da imagem

### Descrição

public function **Imagick::setImageResolution**([float](language.types.float.md) `$x_resolution`, [float](language.types.float.md) `$y_resolution`): [bool](language.types.boolean.md)

Define a resolução da imagem.

### Parâmetros

`x_resolution`

`y_resolution`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::setImageResolution()****

```
<?php
function setImageResolution($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->setImageResolution(50, 50);

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
