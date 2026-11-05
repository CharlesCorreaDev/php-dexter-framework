# Aumenta a nitidez da imagem de forma adaptativa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.adaptivesharpenimage.php

---

# Imagick::adaptiveSharpenImage

(PECL imagick 2, PECL imagick 3)

Imagick::adaptiveSharpenImage — Aumenta a nitidez da imagem de forma adaptativa

### Descrição

public function **Imagick::adaptiveSharpenImage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Aumente a nitidez da imagem de forma adaptativa, aumentando a nitidez mais intensamente
perto das bordas da imagem e menos intensamente longe das bordas. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`radius`
:   O raio do gaussiano, em pixels, sem contar o pixel central. Use 0 para seleção automática.

`sigma`
:   O desvio padrão do gaussiano, em pixels.

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Um exemplo de **Imagick::adaptiveSharpenImage()****

Aumente a nitidez da imagem de forma adaptativa com raio 2 e sigma 1.

```
<?php
try {
    $image = new Imagick('image.png');
    $image->adaptiveSharpenImage(2,1);
} catch(ImagickException $e) {
    echo 'Error: ' , $e->getMessage();
    die();
}
header('Content-type: image/png');
echo $image;
?>
```

### Veja também

- [Imagick::sharpenImage()](imagick.sharpenimage.md) - Torna uma imagem mais nítida

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
