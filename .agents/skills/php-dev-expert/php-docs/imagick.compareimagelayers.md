# Retorna a região delimitadora máxima entre imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.compareimagelayers.php

---

# Imagick::compareImageLayers

(PECL imagick 2, PECL imagick 3)

Imagick::compareImageLayers — Retorna a região delimitadora máxima entre imagens

### Descrição

public function **Imagick::compareImageLayers**([int](language.types.integer.md) `$method`): [Imagick](class.imagick.md)

Compara cada imagem com a próxima em uma sequência e retorna a
região delimitadora máxima de quaisquer diferenças de pixels que descobre.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`method`
:   Uma das [constantes de métodos de camadas](imagick.constants.md#imagick.constants.layermethod).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::compareImageLayers()****

Comparando camadas de imagens

```
<?php
/* cria um novo objeto Imagick */
$im = new Imagick("test.gif");

/* otimiza as camadas da imagem */
$result = $im->compareImageLayers(imagick::LAYERMETHOD_COALESCE);

/* trabalha com $result */
?>
```

### Veja também

- [Imagick::optimizeImageLayers()](imagick.optimizeimagelayers.md) - Remove partes repetidas de imagens para otimizar
- [Imagick::writeImages()](imagick.writeimages.md) - Grava uma imagem ou sequência de imagens
- [Imagick::writeImage()](imagick.writeimage.md) - Grava uma imagem no nome de arquivo especificado

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
