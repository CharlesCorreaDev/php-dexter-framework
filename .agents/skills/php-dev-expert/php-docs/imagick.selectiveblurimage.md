# Desfocar seletivamente uma imagem dentro de um limite de contraste

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.selectiveblurimage.php

---

# Imagick::selectiveBlurImage

(PECL imagick 3 >= 3.3.0)

Imagick::selectiveBlurImage — Desfocar seletivamente uma imagem dentro de um limite de contraste

### Descrição

public function **Imagick::selectiveBlurImage**(  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$sigma`,  
    [float](language.types.float.md) `$threshold`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Desfoca seletivamente uma imagem dentro de um limite de contraste. É semelhante à máscara de nitidez que torna tudo mais nítido com contraste acima de um certo limite.

### Parâmetros

`radius`

`sigma`

`threshold`

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::selectiveBlurImage()****

```
<?php
function selectiveBlurImage($imagePath, $radius, $sigma, $threshold, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->selectiveBlurImage($radius, $sigma, $threshold, $channel);
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
