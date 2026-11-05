# Simula uma pintura a óleo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.oilpaintimage.php

---

# Imagick::oilPaintImage

(PECL imagick 2, PECL imagick 3)

Imagick::oilPaintImage — Simula uma pintura a óleo

### Descrição

public function **Imagick::oilPaintImage**([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

Aplica um filtro de efeito especial que simula uma pintura a óleo.
Cada pixel é substituído pela cor mais frequente que ocorre em
uma região circular definida pelo raio.

### Parâmetros

`radius`
:   O raio da vizinhança circular.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::oilPaintImage()****

```
<?php
function oilPaintImage($imagePath, $radius) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->oilPaintImage($radius);
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
