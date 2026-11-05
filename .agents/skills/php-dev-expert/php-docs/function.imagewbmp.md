# Envia a imagem para o navegador ou para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagewbmp.php

---

# imagewbmp

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

imagewbmp — Envia a imagem para o navegador ou para um arquivo

### Descrição

function **imagewbmp**([GdImage](class.gdimage.md) `$image`, [resource](language.types.resource.md)|[string](language.types.string.md)|[null](language.types.null.md) `$file` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$foreground_color` = **`null`**): [bool](language.types.boolean.md)

**imagewbmp()** mostra ou grava uma versão WBMP
da imagem informada em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`file`
:   O caminho ou um recurso de fluxo aberto (que será fechado automaticamente após o retorno desta função) para salvar o arquivo. Se não for definido ou for **`null`**, o fluxo da imagem bruta será enviado diretamente.

`foreground_color`
:   Pode-se definir a cor de primeiro plano com este parâmetro, configurando-se
    um identificador obtido a partir da função [imagecolorallocate()](function.imagecolorallocate.md).
    A cor de primeiro plano padrão é preta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 8.0.0 | `foreground_color` agora pode ser nulo. |

### Examples

**Exemplo #1 Mostrando uma imagem WBMP**

```
<?php
// Cria uma imagem vazia e adiciona texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Define o cabeçalho de tipo de conteúdo - neste caso image/vnd.wap.wbmp
// Dica: veja image_type_to_mime_type() para tipos de conteúdo
header('Content-Type: image/vnd.wap.wbmp');

// Mostra a imagem
imagewbmp($im);
?>
```

**Exemplo #2 Gravando a imagem WBMP**

```
<?php
// Cria uma imagem vazia e adiciona texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Grava a imagem
imagewbmp($im, 'simpletext.wbmp');
?>
```

**Exemplo #3 Mostrando a imagem com primeiro plano diferente**

```
<?php
// Cria uma imagem vazia e adiciona texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Define o cabeçalho de tipo de conteúdo - neste caso image/vnd.wap.wbmp
// Dica: veja image_type_to_mime_type() para tipos de conteúdo
header('Content-Type: image/vnd.wap.wbmp');

// Define uma cor substituta para primeiro plano
$foreground_color = imagecolorallocate($im, 255, 0, 0);

imagewbmp($im, NULL, $foreground_color);
?>
```

### Veja também

- [image2wbmp()](function.image2wbmp.md) - Envia a imagem para o navegador ou para um arquivo
- [imagepng()](function.imagepng.md) - Envia uma imagem PNG para o navegador ou arquivo
- [imagegif()](function.imagegif.md) - Envia a imagem para o navegador ou para um arquivo
- [imagejpeg()](function.imagejpeg.md) - Envia a imagem para o navegador ou para um arquivo
- [imagetypes()](function.imagetypes.md) - Retorna os tipos de imagens suportados pela instalação do PHP

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
