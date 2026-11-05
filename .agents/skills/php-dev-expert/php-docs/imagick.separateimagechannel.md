# Separa um canal da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.separateimagechannel.php

---

# Imagick::separateImageChannel

(PECL imagick 2, PECL imagick 3)

Imagick::separateImageChannel — Separa um canal da imagem

### Descrição

public function **Imagick::separateImageChannel**([int](language.types.integer.md) `$channel`): [bool](language.types.boolean.md)

Separa um canal da imagem e retorna uma imagem em tons de cinza. Um canal
é um componente de cor específico de cada pixel da imagem.

### Parâmetros

`channel`
:   Informa qual canal será retornado. Para espaços de cores diferentes de RGB, podem ser usadas as constantes CHANNEL\_RED, CHANNEL\_GREEN e CHANNEL\_BLUE para indicar o 1º, 2º e 3º canais.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::separateImageChannel()****

```
<?php
function separateImageChannel($imagePath, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->separateimagechannel($channel);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

separateImageChannel($imagePath, \Imagick::CHANNEL_GREEN);

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
