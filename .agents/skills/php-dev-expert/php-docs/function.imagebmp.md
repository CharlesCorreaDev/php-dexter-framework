# Mostra ou grava uma imagem BMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagebmp.php

---

# imagebmp

(PHP 7 >= 7.2.0, PHP 8)

imagebmp — Mostra ou grava uma imagem BMP

### Descrição

function **imagebmp**([GdImage](class.gdimage.md) `$image`, [resource](language.types.resource.md)|[string](language.types.string.md)|[null](language.types.null.md) `$file` = **`null`**, [bool](language.types.boolean.md) `$compressed` = **`true`**): [bool](language.types.boolean.md)

Mostra ou grava uma versão BMP da imagem fornecida em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`file`
:   O caminho ou um recurso de fluxo aberto (que será fechado automaticamente após o retorno desta função) para salvar o arquivo. Se não for definido ou for **`null`**, o fluxo da imagem bruta será enviado diretamente.

    > **Nota**:
    >
    > **`null`** é inválido se o parâmetro `compressed` não
    > for usado.

`compressed`
:   Define se o BMP deve ser comprimido com codificação run-length (RLE), ou não.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 8.0.0 | O tipo de `compressed` agora é [bool](language.types.boolean.md); anteriormente era [int](language.types.integer.md). |

### Examples

**Exemplo #1 Gravando um arquivo BMP**

```
<?php
// Cria uma imagem vazia e adiciona texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);

imagestring($im, 1, 5, 5,  'BMP com PHP', $text_color);

// Grava a imagem
imagebmp($im, 'php.bmp');
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
