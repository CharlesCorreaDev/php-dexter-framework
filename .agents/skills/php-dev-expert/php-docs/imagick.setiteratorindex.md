# Define a posição do iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setiteratorindex.php

---

# Imagick::setIteratorIndex

(PECL imagick 2, PECL imagick 3)

Imagick::setIteratorIndex — Define a posição do iterador

### Descrição

public function **Imagick::setIteratorIndex**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Define o iterador para a posição na lista de imagens especificada com o parâmetro index.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`index`
:   A posição para a qual o iterador será definido.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Usando **Imagick::setIteratorIndex()****

Cria imagens, define e obtém o índice do iterador.

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

- [Imagick::getIteratorIndex()](imagick.getiteratorindex.md) - Obtém o índice da imagem ativa atual
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
