# Cria uma nova imagem como cópia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.implodeimage.php

---

# Imagick::implodeImage

(PECL imagick 2, PECL imagick 3)

Imagick::implodeImage — Cria uma nova imagem como cópia

### Descrição

public function **Imagick::implodeImage**([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

Cria uma nova imagem que é uma cópia de uma existente com os pixels da imagem
"implodidos" pela porcentagem especificada.

### Parâmetros

`radius`
:   O raio da implosão

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::implodeImage()****

```
<?php
function implodeImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->implodeImage(0.0001);
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
