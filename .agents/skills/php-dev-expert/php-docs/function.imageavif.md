# Envia a imagem para o navegador ou para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageavif.php

---

# imageavif

(PHP 8 >= 8.1.0)

imageavif — Envia a imagem para o navegador ou para um arquivo

### Descrição

function **imageavif**(  
    [GdImage](class.gdimage.md) `$image`,  
    [resource](language.types.resource.md)|[string](language.types.string.md)|[null](language.types.null.md) `$file` = **`null`**,  
    [int](language.types.integer.md) `$quality` = -1,  
    [int](language.types.integer.md) `$speed` = -1  
): [bool](language.types.boolean.md)

Mostra ou grava uma imagem rasterizada AVIF a partir da imagem fornecida em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`file`
:   O caminho ou um recurso de fluxo aberto (que será fechado automaticamente após o retorno desta função) para salvar o arquivo. Se não for definido ou for **`null`**, o fluxo da imagem bruta será enviado diretamente.

`quality`
:   `quality` é opcional, e varia de 0 (pior qualidade, arquivo menor)
    a 100 (melhor qualidade, arquivo maior).
    Se `-1` for fornecido, o valor padrão de `52` será usado.

`speed`
:   `speed` é opcional, e varia de 0 (lento, arquivo menor)
    a 10 (rápido, arquivo maior).
    Se `-1` for fornecido, o valor padrão `6` será usado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `quality`
ou `speed` forem inválidos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se `quality` ou `speed` forem inválidos. |

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
