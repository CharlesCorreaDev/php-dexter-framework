# Envia a imagem para o navegador ou para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagejpeg.php

---

# imagejpeg

(PHP 4, PHP 5, PHP 7, PHP 8)

imagejpeg — Envia a imagem para o navegador ou para um arquivo

### Descrição

function **imagejpeg**([GdImage](class.gdimage.md) `$image`, [resource](language.types.resource.md)|[string](language.types.string.md)|[null](language.types.null.md) `$file` = **`null`**, [int](language.types.integer.md) `$quality` = -1): [bool](language.types.boolean.md)

**imagejpeg()** cria um arquivo JPEG a partir
da imagem informada em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`file`
:   O caminho ou um recurso de fluxo aberto (que será fechado automaticamente após o retorno desta função) para salvar o arquivo. Se não for definido ou for **`null`**, o fluxo da imagem bruta será enviado diretamente.

`quality`
:   `quality` é opcional e varia de 0 (pior
    qualidade, arquivo menor) a 100 (melhor qualidade, arquivo maior). O
    padrão (`-1`) usa o valor de qualidade IJG padrão (por volta de 75).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `quality` for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se `quality` for inválido. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Mostrando uma imagem JPEG no navegador**

```
<?php
// Cria uma imagem vazia e adiciona um texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Define o cabeçalho de tipo de conteúdo - neste caso image/jpeg
header('Content-Type: image/jpeg');

// Mostra a imagem
imagejpeg($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Mostrando uma imagem JPEG](images/21009b70229598c6a80eef8b45bf282b-imagejpeg.jpg)

**Exemplo #2 Gravando uma imagem JPEG em um arquivo**

```
<?php
// Cria uma imagem vazia e adiciona um texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Grava a imagem como 'simpletext.jpg'
imagejpeg($im, 'simpletext.jpg');
?>
```

**Exemplo #3 Mostrando a imagem com 75% de qualidade no navegador**

```
<?php
// Cria uma imagem vazia e adiciona um texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Define o cabeçalho de tipo de conteúdo - neste caso image/jpeg
header('Content-Type: image/jpeg');

// Ignora o parâmetro arquivo usando NULL, e então define a qualidade para 75%
imagejpeg($im, NULL, 75);
?>
```

### Notas

> **Nota**:
>
> Se for desejado mostrar JPEGs progressivos, deve-se habilitar entrelace
> com a função [imageinterlace()](function.imageinterlace.md).

### Veja também

- [imagepng()](function.imagepng.md) - Envia uma imagem PNG para o navegador ou arquivo
- [imagegif()](function.imagegif.md) - Envia a imagem para o navegador ou para um arquivo
- [imagewbmp()](function.imagewbmp.md) - Envia a imagem para o navegador ou para um arquivo
- [imageinterlace()](function.imageinterlace.md) - Habilita ou desabilita entrelace
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
