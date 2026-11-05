# Envia uma imagem PNG para o navegador ou arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagepng.php

---

# imagepng

(PHP 4, PHP 5, PHP 7, PHP 8)

imagepng — Envia uma imagem PNG para o navegador ou arquivo

### Descrição

function **imagepng**(  
    [GdImage](class.gdimage.md) `$image`,  
    [resource](language.types.resource.md)|[string](language.types.string.md)|[null](language.types.null.md) `$file` = **`null`**,  
    [int](language.types.integer.md) `$quality` = -1,  
    [int](language.types.integer.md) `$filters` = -1  
): [bool](language.types.boolean.md)

Envia ou grava uma imagem PNG a partir do parâmetro
`image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`file`
:   O caminho ou um recurso de fluxo aberto (que será fechado automaticamente após o retorno desta função) para salvar o arquivo. Se não for definido ou for **`null`**, o fluxo da imagem bruta será enviado diretamente.

    > **Nota**:
    >
    > **`null`** é inválido se os argumentos `quality` e
    > `filters` não forem informados.

`quality`
:   Nível de compressão: de 0 (sem compressão) a 9.
    O padrão (`-1`) utiliza a compressão padrão da zlib.
    Para mais informações, consulte o [» manual zlib](https://www.zlib.net/manual.html).

`filters`
:   Permite reduzir o tamanho do arquivo PNG. Uma máscara de bits pode ser
    informada por qualquer combinação das constantes **`PNG_FILTER_*`**.
    **`PNG_NO_FILTER`** ou
    **`PNG_ALL_FILTERS`** também podem ser utilizadas, respectivamente,
    para desativar ou ativar todos os filtros.
    O valor padrão (`-1`) desativa os filtros.

    **Cuidado**

    O parâmetro `filters` é ignorado pela libgd de sistema.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se `quality` for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança uma exceção [ValueError](class.valueerror.md) se `quality` for inválido. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

```
<?php
$im = imagecreatefrompng("test.png");

header('Content-Type: image/png');

imagepng($im);
?>
```

### Veja também

- [imagegif()](function.imagegif.md) - Envia a imagem para o navegador ou para um arquivo
- [imagewbmp()](function.imagewbmp.md) - Envia a imagem para o navegador ou para um arquivo
- [imagejpeg()](function.imagejpeg.md) - Envia a imagem para o navegador ou para um arquivo
- [imagetypes()](function.imagetypes.md) - Retorna os tipos de imagens suportados pela instalação do PHP
- [imagesavealpha()](function.imagesavealpha.md) - Informa se a informação de canal alfa deve ser retida ao gravar imagens

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
