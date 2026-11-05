# Cria uma imagem de alto contraste e duas cores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.randomthresholdimage.php

---

# Imagick::randomThresholdImage

(PECL imagick 2, PECL imagick 3)

Imagick::randomThresholdImage — Cria uma imagem de alto contraste e duas cores

### Descrição

public function **Imagick::randomThresholdImage**([float](language.types.float.md) `$low`, [float](language.types.float.md) `$high`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Altera o valor de pixels individuais com base na
intensidade de cada pixel em comparação com o limite. O
resultado é uma imagem de alto contraste e duas cores. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`low`
:   O ponto baixo.

`high`
:   O ponto alto.

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::randomThresholdImage()****

```
<?php
function randomThresholdimage($imagePath, $lowThreshold, $highThreshold, $channel) {
    $imagick = new \Imagick(realpath($imagePath));

    $imagick->randomThresholdimage(
        $lowThreshold * \Imagick::getQuantum(),
        $highThreshold * \Imagick::getQuantum(),
        $channel
    );
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
