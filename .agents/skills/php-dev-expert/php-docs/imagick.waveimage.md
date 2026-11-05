# Aplica filtro de onda à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.waveimage.php

---

# Imagick::waveImage

(PECL imagick 2, PECL imagick 3)

Imagick::waveImage — Aplica filtro de onda à imagem

### Descrição

public function **Imagick::waveImage**([float](language.types.float.md) `$amplitude`, [float](language.types.float.md) `$length`): [bool](language.types.boolean.md)

Aplica um filtro de onda à imagem
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`amplitude`
:   A amplitude da onda.

`length`
:   O comprimento da onda.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 A função **Imagick::waveImage()** pode ser bem lenta**

```
<?php
function waveImage($imagePath, $amplitude, $length) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->waveImage($amplitude, $length);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
```

### Veja também

- [Imagick::solarizeImage()](imagick.solarizeimage.md) - Aplica um efeito solarizante à imagem
- [Imagick::oilpaintImage()](imagick.oilpaintimage.md) - Simula uma pintura a óleo
- [Imagick::embossImage()](imagick.embossimage.md) - Retorna uma imagem em tons de cinza com efeito tridimensional
- [Imagick::addNoiseImage()](imagick.addnoiseimage.md) - Adiciona ruído aleatório à imagem
- [Imagick::swirlImage()](imagick.swirlimage.md) - Gira os pixels em torno do centro da imagem

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
