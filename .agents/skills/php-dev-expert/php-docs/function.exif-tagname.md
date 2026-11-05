# Obtém o nome do cabeçalho para um índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.exif-tagname.php

---

# exif\_tagname

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

exif\_tagname — Obtém o nome do cabeçalho para um índice

### Descrição

function **exif\_tagname**([int](language.types.integer.md) `$index`): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`index`
:   O ID da etiqueta para o qual o nome do cabeçalho será pesquisado

### Valor Retornado

Retorna o nome do cabeçalho, ou **`false`** se `index` não
for um id de etiqueta EXIF definido.

### Examples

**Exemplo #1 Exemplo de **exif\_tagname()****

```
<?php
echo "256: ".exif_tagname(256).PHP_EOL;
echo "257: ".exif_tagname(257).PHP_EOL;
?>
```

O exemplo acima produzirá:

```
256: ImageWidth
257: ImageLength
```

### Veja também

- [exif\_imagetype()](function.exif-imagetype.md) - Verifica o tipo de uma imagem
- [» Especificação EXIF](http://exif.org/Exif2-2.PDF)
- [» Etiquetas EXIF](https://www.sno.phy.queensu.ca/~phil/exiftool/TagNames/EXIF.html)

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
