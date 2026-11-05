# Define a orientação da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageorientation.php

---

# Imagick::setImageOrientation

(PECL imagick 2, PECL imagick 3)

Imagick::setImageOrientation — Define a orientação da imagem

### Descrição

public function **Imagick::setImageOrientation**([int](language.types.integer.md) `$orientation`): [bool](language.types.boolean.md)

Define a orientação da imagem.

### Parâmetros

`orientation`
:   Uma das [constantes de orientação](imagick.constants.md#imagick.constants.orientation)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::setImageOrientation()****

```
<?php
// Parece não fazer nada
function setImageOrientation($imagePath, $orientationType) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->setImageOrientation($orientationType);
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
