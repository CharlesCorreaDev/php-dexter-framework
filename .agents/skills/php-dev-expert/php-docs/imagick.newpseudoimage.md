# Cria uma nova imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.newpseudoimage.php

---

# Imagick::newPseudoImage

(PECL imagick 2, PECL imagick 3)

Imagick::newPseudoImage — Cria uma nova imagem

### Descrição

public function **Imagick::newPseudoImage**([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`, [string](language.types.string.md) `$pseudoString`): [bool](language.types.boolean.md)

Cria uma nova imagem usando pseudoformatos ImageMagick.

### Parâmetros

`columns`
:   Colunas na nova imagem

`rows`
:   Linhas na nova imagem

`pseudoString`
:   String contendo definição de pseudoimagem.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::newPseudoImage()****

```
<?php
function newPseudoImage($canvasType) {
    $imagick = new \Imagick();
    $imagick->newPseudoImage(300, 300, $canvasType);
    $imagick->setImageFormat("png");
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
}

// newPseudoImage('gradient:red-rgba(64, 255, 255, 0.5)');
// newPseudoImage("radial-gradient:red-blue");
newPseudoImage("plasma:fractal");

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
