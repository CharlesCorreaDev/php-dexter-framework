# Simula uma sombra de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.shadowimage.php

---

# Imagick::shadowImage

(PECL imagick 2, PECL imagick 3)

Imagick::shadowImage — Simula uma sombra de imagem

### Descrição

public function **Imagick::shadowImage**(  
    [float](language.types.float.md) `$opacity`,  
    [float](language.types.float.md) `$sigma`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

Simula uma sombra de imagem.

### Parâmetros

`opacity`

`sigma`

`x`

`y`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::shadowImage()****

```
<?php
function shadowImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->shadowImage(0.4, 10, 50, 5);
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
