# Adiciona ruído aleatório à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.addnoiseimage.php

---

# Imagick::addNoiseImage

(PECL imagick 2, PECL imagick 3)

Imagick::addNoiseImage — Adiciona ruído aleatório à imagem

### Descrição

public function **Imagick::addNoiseImage**([int](language.types.integer.md) `$noise_type`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Adiciona ruído aleatório à imagem.

### Parâmetros

`noise_type`
:   O tipo de ruído. Consulte esta lista de
    [constantes de ruído](imagick.constants.md#imagick.constants.noise).

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::addNoiseImage()****

```
<?php
function addNoiseImage($noiseType, $imagePath, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->addNoiseImage($noiseType, $channel);
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
