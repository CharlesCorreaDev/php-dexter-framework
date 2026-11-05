# Envia a imagem para o navegador ou para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagegif.php

---

# imagegif

(PHP 4, PHP 5, PHP 7, PHP 8)

imagegif — Envia a imagem para o navegador ou para um arquivo

### Descrição

function **imagegif**([GdImage](class.gdimage.md) `$image`, [resource](language.types.resource.md)|[string](language.types.string.md)|[null](language.types.null.md) `$file` = **`null`**): [bool](language.types.boolean.md)

**imagegif()** cria o arquivo GIF
especificado em `file` a partir da imagem em `image`. O
argumento `image` é o retorno da função
[imagecreate()](function.imagecreate.md) ou
`imagecreatefrom*`.

O formato da imagem será GIF87a a menos que
a imagem tenha se tornado transparente com
[imagecolortransparent()](function.imagecolortransparent.md), e neste caso o
formato da imagem será GIF89a.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`file`
:   O caminho ou um recurso de fluxo aberto (que será fechado automaticamente após o retorno desta função) para salvar o arquivo. Se não for definido ou for **`null`**, o fluxo da imagem bruta será enviado diretamente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Mostrando uma imagem usando **imagegif()****

```
<?php
// Cria uma nova instância de imagem
$im = imagecreatetruecolor(100, 100);

// Deixa o fundo branco
imagefilledrectangle($im, 0, 0, 99, 99, 0xFFFFFF);

// Desenha uma string na imagem
imagestring($im, 3, 40, 20, 'GD Library', 0xFFBA00);

// Mostra a imagem no navegador
header('Content-Type: image/gif');

imagegif($im);
?>
```

**Exemplo #2 Convertendo uma imagem PNG para GIF usando **imagegif()****

```
<?php

// Carrega o PNG
$png = imagecreatefrompng('./php.png');

// Grava a imagem como GIF
imagegif($png, './php.gif');

// Pronto
echo 'Convertida a imagem PNG para GIF com sucesso!';
?>
```

### Notas

> **Nota**:
>
> O extrato de código a seguir permite esrever aplicações
> PHP mais portáveis através de auto-detecção do
> tipo de suporte GD disponível. Substitua
> sequência `header ("Content-Type: image/gif");
> imagegif ($im);` pela sequência mais flexível:
>
> ```
> <?php
> // Cria uma nova instância de imagem
> $im = imagecreatetruecolor(100, 100);
>
> // Faz aqui algumas operações
>
> // Lida com a saída
> if(function_exists('imagegif'))
> {
>     // Para GIF
>     header('Content-Type: image/gif');
>
>     imagegif($im);
> }
> elseif(function_exists('imagejpeg'))
> {
>     // Para JPEG
>     header('Content-Type: image/jpeg');
>
>     imagejpeg($im, NULL, 100);
> }
> elseif(function_exists('imagepng'))
> {
>     // Para PNG
>     header('Content-Type: image/png');
>
>     imagepng($im);
> }
> elseif(function_exists('imagewbmp'))
> {
>     // Para WBMP
>     header('Content-Type: image/vnd.wap.wbmp');
>
>     imagewbmp($im);
> }
> else
> {
>     die('Não existe suporte para imagem neste servidor PHP');
> }
> ?>
> ```

> **Nota**:
>
> Pode-se usar a função
> [imagetypes()](function.imagetypes.md) para verificar
> a presenção de vários formatos de imagem suportados:
>
> ```
> <?php
> if(imagetypes() & IMG_GIF)
> {
>     header('Content-Type: image/gif');
>     imagegif($im);
> }
> elseif(imagetypes() & IMG_JPG)
> {
>     /* ... etc. */
> }
> ?>
> ```

### Veja também

- [imagepng()](function.imagepng.md) - Envia uma imagem PNG para o navegador ou arquivo
- [imagewbmp()](function.imagewbmp.md) - Envia a imagem para o navegador ou para um arquivo
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
