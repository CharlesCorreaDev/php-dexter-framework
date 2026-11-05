# Obtém o tamanho de uma imagem a partir de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getimagesizefromstring.php

---

# getimagesizefromstring

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

getimagesizefromstring — Obtém o tamanho de uma imagem a partir de uma string

### Descrição

function **getimagesizefromstring**([string](language.types.string.md) `$string`, [array](language.types.array.md) `&$image_info` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Idêntica a [getimagesize()](function.getimagesize.md) exceto que **getimagesizefromstring()**
aceita uma string ao invés de um nome de arquivo como o primeiro parâmetro.

Consulte a documentação de [getimagesize()](function.getimagesize.md) para detalhes de como esta
função opera.

### Parâmetros

`string`
:   Os dados da imagem, como uma string.

`image_info`
:   Consulte [getimagesize()](function.getimagesize.md).

### Valor Retornado

Consulte [getimagesize()](function.getimagesize.md).

### Examples

**Exemplo #1 Exemplo de **getimagesizefromstring()****

```
<?php
$img = '/path/to/test.png';

// Abre como um arquivo
$size_info1 = getimagesize($img);

// Ou abre como uma string
$data       = file_get_contents($img);
$size_info2 = getimagesizefromstring($data);
?>
```

### Veja também

- [getimagesize()](function.getimagesize.md) - Obtém o tamanho de uma imagem

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
