# Desfoca uma imagem de forma rotacional

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.rotationalblurimage.php

---

# Imagick::rotationalBlurImage

(PECL imagick 3 >= 3.3.0)

Imagick::rotationalBlurImage — Desfoca uma imagem de forma rotacional

### Descrição

public function **Imagick::rotationalBlurImage**([float](language.types.float.md) `$angle`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Desfoca uma imagem de forma rotacional.

### Parâmetros

`angle`
:   O ângulo no qual o desfoque será aplicado.

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::rotationalBlurImage()****

```
<?php
function rotationalBlurImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->rotationalBlurImage(3);
    $imagick->rotationalBlurImage(5);
    $imagick->rotationalBlurImage(7);
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
