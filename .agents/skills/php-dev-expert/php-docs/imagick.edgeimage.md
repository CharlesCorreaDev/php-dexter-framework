# Melhora as bordas da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.edgeimage.php

---

# Imagick::edgeImage

(PECL imagick 2, PECL imagick 3)

Imagick::edgeImage — Melhora as bordas da imagem

### Descrição

public function **Imagick::edgeImage**([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

Aprimora as bordas da imagem com um filtro de convolução de um determinado
raio. Use o raio 0 e ele será selecionado automaticamente.

### Parâmetros

`radius`
:   O raio da operação.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::edgeImage()****

```
<?php
function edgeImage($imagePath, $radius) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->edgeImage($radius);
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
