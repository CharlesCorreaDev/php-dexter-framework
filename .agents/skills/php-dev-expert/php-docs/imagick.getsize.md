# Retorna o tamanho associado ao objeto Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getsize.php

---

# Imagick::getSize

(PECL imagick 2, PECL imagick 3)

Imagick::getSize — Retorna o tamanho associado ao objeto Imagick

### Descrição

public function **Imagick::getSize**(): [array](language.types.array.md)

Obtém o tamanho em pixels associado ao objeto Imagick, previamente definido por [Imagick::setSize()](imagick.setsize.md).

> **Nota**:
>
> Este método apenas retorna o tamanho que foi definido usando [Imagick::setSize()](imagick.setsize.md). Se a intenção for obter a largura/altura real da imagem, devem ser usados os métodos [Imagick::getImageWidth()](imagick.getimagewidth.md) e [Imagick::getImageHeight()](imagick.getimageheight.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tamanho associado ao objeto Imagick como um array com as
chaves "columns" (colunas) e "rows" (linhas).

### Examples

**Exemplo #1 Obtendo o tamanho de uma imagem RGB bruta definida em 200x400, após dimensionar para 400x800 (em comparação com largura/altura)**

```
<?php
// Defina o tamanho primeiro e depois carrega a imagem bruta
$img = new Imagick();
$img->setSize(200, 400);
$img->readImage("image.rgb");

$img->scaleImage(400, 800);

$size = $img->getSize();
print_r($size);

echo $img->getImageWidth()."x".$img->getImageHeight();
?>
```

O exemplo acima produzirá:

```
Array
(
    [columns] => 200
    [rows] => 400
)
400x800
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
