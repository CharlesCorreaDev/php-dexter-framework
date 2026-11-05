# Altera o contraste da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.contrastimage.php

---

# Imagick::contrastImage

(PECL imagick 2, PECL imagick 3)

Imagick::contrastImage — Altera o contraste da imagem

### Descrição

public function **Imagick::contrastImage**([bool](language.types.boolean.md) `$sharpen`): [bool](language.types.boolean.md)

Melhora as diferenças de intensidade entre os elementos mais claros e
mais escuros da imagem. Defina a nitidez para um valor diferente
de 0 para aumentar o contraste da imagem, caso contrário o contraste
será reduzido.

### Parâmetros

`sharpen`
:   O valor de nitidez

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::contrastImage()****

```
<?php
function contrastImage($imagePath, $contrastType) {
    $imagick = new \Imagick(realpath($imagePath));
    if ($contrastType != 2) {
        $imagick->contrastImage($contrastType);
    }

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
