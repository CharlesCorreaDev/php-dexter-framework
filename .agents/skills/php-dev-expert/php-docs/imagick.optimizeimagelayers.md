# Remove partes repetidas de imagens para otimizar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.optimizeimagelayers.php

---

# Imagick::optimizeImageLayers

(PECL imagick 2, PECL imagick 3)

Imagick::optimizeImageLayers — Remove partes repetidas de imagens para otimizar

### Descrição

public function **Imagick::optimizeImageLayers**(): [bool](language.types.boolean.md)

Compara cada imagem com as formas dispostas em GIF da imagem anterior
na sequência. A partir disso, tenta selecionar a menor imagem
recortada para substituir cada quadro, preservando os resultados
da animação.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::optimizeImageLayers()****

Lendo, otimizando e gravando uma imagem GIF

```
<?php
/* Cria novo objeto Imagick */
$im = new Imagick("test.gif");

/* otimizar as camadas da imagem */
$im->optimizeImageLayers();

/* grava a imagem de volta */
$im->writeImages("test_optimized.gif", true);
?>
```

### Veja também

- [Imagick::compareImageLayers()](imagick.compareimagelayers.md) - Retorna a região delimitadora máxima entre imagens
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
