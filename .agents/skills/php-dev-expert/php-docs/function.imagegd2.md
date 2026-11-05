# Envia uma imagem GD2 ao navegador ou a um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagegd2.php

---

# imagegd2

(PHP 4 >= 4.0.7, PHP 5, PHP 7, PHP 8)

imagegd2 — Envia uma imagem GD2 ao navegador ou a um arquivo

### Descrição

function **imagegd2**(  
    [GdImage](class.gdimage.md) `$image`,  
    [?](language.types.null.md)[string](language.types.string.md) `$file` = **`null`**,  
    [int](language.types.integer.md) `$chunk_size` = 128,  
    [int](language.types.integer.md) `$mode` = **`IMG_GD2_RAW`**  
): [bool](language.types.boolean.md)

Exibe ou salva a imagem informada em `image` no formato GD2.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`file`
:   O caminho ou um recurso de fluxo aberto (que será fechado automaticamente após o retorno desta função) para salvar o arquivo. Se não for definido ou for **`null`**, o fluxo da imagem bruta será enviado diretamente.

`chunk_size`
:   Tamanho do pacote.

`mode`
:   Pode ser **`IMG_GD2_RAW`** ou
    **`IMG_GD2_COMPRESSED`**. O padrão é
    **`IMG_GD2_RAW`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.3 | `file` agora pode ser nulo. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Mostrando uma imagem GD2**

```
<?php
// Cria uma imagem vazia e adiciona algum texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);

// Mostra a imagem
imagegd2($im);
?>
```

**Exemplo #2 Saving a GD2 image**

```
<?php
// Cria uma imagem vazia e adiciona algum texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);

// Grava a imagem GD2
// O formato de arquivo para imagens GD2 é .gd2, consulte http://www.libgd.org/GdFileFormats
imagegd2($im, 'simple.gd2');
?>
```

### Notas

> **Nota**:
>
> O formato GD2 é usado normalmente para permitir carregamento rápido de partes de imagens.
> Observe que o formato GD é utilizável somente em aplicações compatíveis com GD2.

**Aviso**

Os formatos
de imagem GD e GD2 são formatos de imagem proprietários da biblioteca libgd. Eles devem ser considerados
*obsoletos* e só devem ser usados para propósitos de desenvolvimento
e testes.

### Veja também

- [imagegd()](function.imagegd.md) - Envia uma imagem GD para o navegador ou para um arquivo

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
