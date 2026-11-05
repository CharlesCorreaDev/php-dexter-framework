# Aplica um filtro digital

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.medianfilterimage.php

---

# Imagick::medianFilterImage

(PECL imagick 2, PECL imagick 3)

Imagick::medianFilterImage — Aplica um filtro digital

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::medianFilterImage**([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

Aplica um filtro digital que melhora a qualidade de uma
imagem com ruído. Cada pixel é substituído pela mediana em um
conjunto de pixels vizinhos conforme definido pelo raio.

### Parâmetros

`radius`
:   O raio da vizinhança do pixel.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::medianFilterImage()****

```
<?php
function medianFilterImage($radius, $imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    @$imagick->medianFilterImage($radius);
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
