# Envia a imagem para o navegador ou para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.image2wbmp.php

---

# image2wbmp

(PHP 4 >= 4.0.5, PHP 5, PHP 7)

image2wbmp — Envia a imagem para o navegador ou para um arquivo

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.3.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **image2wbmp**([resource](language.types.resource.md) `$image`, [string](language.types.string.md) `$filename` = ?, [int](language.types.integer.md) `$foreground` = ?): [bool](language.types.boolean.md)

**image2wbmp()** mostra ou grava uma versão WBMP
da imagem informada no parâmetro `image`.

### Parâmetros

`image`
:   Um recurso de imagem, retornado por uma das funções de criação de imagem,
    tal como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`filename`
:   Caminho para o arquivo gravado. Se não fornecido, o fluxo de imagem puro será
    mostrado/gravado diretamente.

`foreground`
:   Pode-se definir a cor de primeiro plano com este parâmetro configurando um
    identificador obtido a partir de [imagecolorallocate()](function.imagecolorallocate.md).
    A cor padrão de primeiro plano é preta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Examples

**Exemplo #1 Exemplo de **image2wbmp()****

```
<?php
$file = 'php.png';
$image = imagecreatefrompng($file);

header('Content-Type: ' . image_type_to_mime_type(IMAGETYPE_WBMP));
image2wbmp($image); // mostra o fluxo diretamente
?>
```

### Veja também

- [imagewbmp()](function.imagewbmp.md) - Envia a imagem para o navegador ou para um arquivo

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
