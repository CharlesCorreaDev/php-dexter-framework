# Mostra uma imagem XBM em um navegador ou grava em arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagexbm.php

---

# imagexbm

(PHP 5, PHP 7, PHP 8)

imagexbm — Mostra uma imagem XBM em um navegador ou grava em arquivo

### Descrição

function **imagexbm**([GdImage](class.gdimage.md) `$image`, [?](language.types.null.md)[string](language.types.string.md) `$filename`, [?](language.types.null.md)[int](language.types.integer.md) `$foreground_color` = **`null`**): [bool](language.types.boolean.md)

Mostra ou grava uma versão XBM da imagem informada em
`image`.

> **Nota**:
>
> **imagexbm()** não aplica nenhum deslocamento, portanto a largura da imagem
> deve ser um múltiplo de 8.
> Esta restrição não se aplica mais a partir do PHP 7.0.9.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`filename`
:   O caminho do arquivo a ser gravado, fornecido como [string](language.types.string.md). Se for **`null`**, o fluxo bruto da imagem será enviado diretamente.

    O nome de arquivo em `filename` (sem a extensão .xbm) também
    é usado para o identificadores C do XBM, onde caracteres
    não alfanuméricos da localidade atual são substituídos por
    sublinhados. Se `filename` for definido para **`null`**,
    `image` é usado para construir os identificadores C.

`foreground_color`
:   Pode-se definir a cor de primeiro plano com este parâmetro configurando um
    identificador obtido a partir da função [imagecolorallocate()](function.imagecolorallocate.md).
    A cor de primeiro plano padrão é preta. Todas as outras cores são tratadas como
    cores de fundo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 8.0.0 | `foreground_color` agora pode ser nulo. |
| 8.0.0 | O quarto parâmetro, que não era usado, foi removido. |

### Examples

**Exemplo #1 Gravando um arquivo XBM**

```
<?php
// Cria uma imagem vazia e adiciona texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Grava a imagem
imagexbm($im, 'simpletext.xbm');
?>
```

**Exemplo #2 Gravando um arquivo XBM com uma cor de fundo diferente**

```
<?php
// Cria uma imagem vazia e adiciona texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Define uma cor substituta para primeiro plano
$foreground_color = imagecolorallocate($im, 255, 0, 0);

// Grava a imagem
imagexbm($im, NULL, $foreground_color);
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
