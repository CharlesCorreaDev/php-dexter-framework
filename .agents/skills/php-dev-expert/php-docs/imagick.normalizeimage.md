# Melhora o contraste de uma imagem colorida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.normalizeimage.php

---

# Imagick::normalizeImage

(PECL imagick 2, PECL imagick 3)

Imagick::normalizeImage — Melhora o contraste de uma imagem colorida

### Descrição

public function **Imagick::normalizeImage**([int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Melhora o contraste de uma imagem colorida ajustando a cor dos
pixels para abranger toda a gama de cores disponíveis.

### Parâmetros

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::normalizeImage()****

```
<?php
function normalizeImage($imagePath, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $original = clone $imagick;
    $original->cropimage($original->getImageWidth() / 2, $original->getImageHeight(), 0, 0);
    $imagick->normalizeImage($channel);
    $imagick->compositeimage($original, \Imagick::COMPOSITE_ATOP, 0, 0);
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
