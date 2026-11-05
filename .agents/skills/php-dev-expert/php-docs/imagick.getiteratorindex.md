# Obtém o índice da imagem ativa atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getiteratorindex.php

---

# Imagick::getIteratorIndex

(PECL imagick 2, PECL imagick 3)

Imagick::getIteratorIndex — Obtém o índice da imagem ativa atual

### Descrição

public function **Imagick::getIteratorIndex**(): [int](language.types.integer.md)

Retorna o índice da imagem ativa atual dentro do objeto Imagick.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro contendo o índice da imagem na pilha.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::getIteratorIndex()****

Cria imagens, define e obtém o índice do iterador

```
<?php
$im = new Imagick();
$im->newImage(100, 100, new ImagickPixel("red"));
$im->newImage(100, 100, new ImagickPixel("green"));
$im->newImage(100, 100, new ImagickPixel("blue"));

$im->setIteratorIndex(1);
echo $im->getIteratorIndex();
?>
```

### Veja também

- [Imagick::setIteratorIndex()](imagick.setiteratorindex.md) - Define a posição do iterador
- [Imagick::getImageIndex()](imagick.getimageindex.md) - Obtém o índice da imagem ativa atual
- [Imagick::setImageIndex()](imagick.setimageindex.md) - Define a posição do iterador

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
