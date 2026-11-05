# Retorna o comprimento da imagem em bytes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagelength.php

---

# Imagick::getImageLength

(PECL imagick 2, PECL imagick 3)

Imagick::getImageLength — Retorna o comprimento da imagem em bytes

### Descrição

public function **Imagick::getImageLength**(): [int](language.types.integer.md)

Retorna o comprimento da imagem em bytes.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro contendo o tamanho atual da imagem.

### Examples

**Exemplo #1 Usando **Imagick::getImageLength()****

Obtendo o comprimento da imagem em bytes

```
<?php
$image = new Imagick('test.jpg');
echo $image->getImageLength() . ' bytes';
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
