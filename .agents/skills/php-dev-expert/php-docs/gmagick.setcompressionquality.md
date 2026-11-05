# Define a qualidade de compactação padrão do objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setcompressionquality.php

---

# Gmagick::setCompressionQuality

(No version information available, might only be in Git)

Gmagick::setCompressionQuality — Define a qualidade de compactação padrão do objeto

### Descrição

function **Gmagick::setCompressionQuality**(
[int](language.types.integer.md) `$quality`
): [Gmagick](class.gmagick.md)

Define a qualidade de compactação padrão do objeto.

### Parâmetros

`quality`
:   O valor padrão de GraphicsMagick é 75.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

### Examples

**Exemplo #1 **Gmagick::setCompressionQuality()****

```
<?php
$gm = new Gmagick();
$gm->read("magick:rose");
$gm->setCompressionQuality(2);
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
