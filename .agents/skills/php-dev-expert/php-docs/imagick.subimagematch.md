# Procura uma subimagem na imagem atual e retorna uma imagem semelhante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.subimagematch.php

---

# Imagick::subImageMatch

(PECL imagick 3 >= 3.3.0)

Imagick::subImageMatch — Procura uma subimagem na imagem atual e retorna uma imagem semelhante

### Descrição

public function **Imagick::subImageMatch**([Imagick](class.imagick.md) `$Imagick`, [array](language.types.array.md) `&$offset` = ?, [float](language.types.float.md) `&$similarity` = ?): [Imagick](class.imagick.md)

Procura uma subimagem na imagem atual e retorna uma imagem semelhante de forma que um local de correspondência exata seja completamente branco e, se nenhum dos pixels corresponder, preto, caso contrário, algum nível de cinza intermediário.
Pode-se também passar os parâmetros opcionais 'bestMatch' e 'similarity'. Depois de chamar a função, 'similarity' será definida para a "pontuação" da similaridade entre a subimagem e a posição correspondente na imagem maior, 'bestMatch' conterá um array associativo com elementos 'x', 'y', 'width' (largura) e 'height' (altura) que descrevem a região correspondente.

### Parâmetros

`Imagick`

`offset`

`similarity`
:   Uma nova imagem que exibe a quantidade de similaridade em cada pixel.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Imagick::subImageMatch()****

```
<?php
function subImageMatch($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick2 = clone $imagick;
    $imagick2->cropimage(40, 40, 250, 110);
    $imagick2->vignetteimage(0, 1, 3, 3);

    $similarity = null;
    $bestMatch = null;
    $comparison = $imagick->subImageMatch($imagick2, $bestMatch, $similarity);

    $comparison->setImageFormat('png');
    header("Content-Type: image/png");
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
