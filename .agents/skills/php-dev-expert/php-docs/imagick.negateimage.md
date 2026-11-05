# Negativa as cores na imagem de referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.negateimage.php

---

# Imagick::negateImage

(PECL imagick 2, PECL imagick 3)

Imagick::negateImage — Negativa as cores na imagem de referência

### Descrição

public function **Imagick::negateImage**([bool](language.types.boolean.md) `$gray`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Negativa as cores na imagem de referência. O parâmetro 'gray'
define se apenas os valores da escala de cinza na imagem
são negativados.

### Parâmetros

`gray`
:   Se apenas serão negativados pixels na escala de cinza na imagem.

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::negateImage()****

```
<?php
function negateImage($imagePath, $grayOnly, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->negateImage($grayOnly, $channel);
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
