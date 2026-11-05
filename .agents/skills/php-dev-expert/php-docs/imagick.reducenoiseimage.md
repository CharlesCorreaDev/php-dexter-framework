# Suaviza os contornos de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.reducenoiseimage.php

---

# Imagick::reduceNoiseImage

(PECL imagick 2, PECL imagick 3)

Imagick::reduceNoiseImage — Suaviza os contornos de uma imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::reduceNoiseImage**([float](language.types.float.md) `$radius`): [bool](language.types.boolean.md)

Suaviza os contornos de uma imagem enquanto preserva as informações
das bordas. O algoritmo funciona substituindo cada pixel pelo
seu vizinho de valor mais próximo. Um vizinho é definido pelo raio.
Use um raio de 0 e Imagick::reduceNoiseImage() seleciona um
raio adequado automaticamente.

### Parâmetros

`radius`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::reduceNoiseImage()****

```
<?php
function reduceNoiseImage($imagePath, $reduceNoise) {
    $imagick = new \Imagick(realpath($imagePath));
    @$imagick->reduceNoiseImage($reduceNoise);
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
