# Obtém a largura e a altura como um array associativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagegeometry.php

---

# Imagick::getImageGeometry

(PECL imagick 2, PECL imagick 3)

Imagick::getImageGeometry — Obtém a largura e a altura como um array associativo

### Descrição

public function **Imagick::getImageGeometry**(): [array](language.types.array.md)

Retorna a largura e a altura como um array associativa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com a largura/altura da imagem.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::getImageGeometry()****

```
<?php
$imagick = new Imagick();
$imagick->newImage(100, 200, "black");
print_r($imagick->getImageGeometry());
?>
```

O exemplo acima produzirá:

```
Array
(
    [width] => 100
    [height] => 200
)
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
