# Executa um pontilhamento ordenado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.orderedposterizeimage.php

---

# Imagick::orderedPosterizeImage

(PECL imagick 2 >= 2.2.2, PECL imagick 3)

Imagick::orderedPosterizeImage — Executa um pontilhamento ordenado

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::orderedPosterizeImage**([string](language.types.string.md) `$threshold_map`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Executa um pontilhamento ordenado com base em vários mapas de limite de pontilhamento predefinidos,
mas em vários níveis de intensidade, que podem ser diferentes para canais diferentes,
de acordo com os argumentos de entrada. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.1 ou superior.

### Parâmetros

`threshold_map`
:   Uma string contendo o nome do mapa de limite de pontilhamento a ser usado.

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

**Exemplo #1 Exemplo de **Imagick::orderedPosterizeImage()****

```
<?php
function orderedPosterizeImage($imagePath, $orderedPosterizeType) {
    $imagick = new \Imagick(realpath($imagePath));

    $imagick->orderedPosterizeImage($orderedPosterizeType);
    $imagick->setImageFormat('png');

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
}

// orderedPosterizeImage($imagePath, 'o4x4,3,3');
// orderedPosterizeImage($imagePath, 'o8x8,6,6');
orderedPosterizeImage($imagePath, 'h8x8a');

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
