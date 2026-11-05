# Compara uma imagem com uma imagem reconstruída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.compareimages.php

---

# Imagick::compareImages

(PECL imagick 2, PECL imagick 3)

Imagick::compareImages — Compara uma imagem com uma imagem reconstruída

### Descrição

public function **Imagick::compareImages**([Imagick](class.imagick.md) `$compare`, [int](language.types.integer.md) `$metric`): [array](language.types.array.md)

Retorna um array contendo uma imagem reconstruída e a diferença entre as imagens.

### Parâmetros

`compare`
:   Uma imagem para comparar.

`metric`
:   Forneça uma constante de tipo de métrica válida. Consulte esta
    lista de [constantes métricas](imagick.constants.md#imagick.constants.metric).

### Valor Retornado

Retorna um array contendo uma imagem reconstruída e a diferença entre as imagens.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::compareImages()**:**

Compara imagens e exibe a imagem reconstruída

```
<?php

$image1 = new imagick("image1.png");
$image2 = new imagick("image2.png");

$result = $image1->compareImages($image2, Imagick::METRIC_MEANSQUAREERROR);
$result[0]->setImageFormat("png");

header("Content-Type: image/png");
echo $result[0];

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
