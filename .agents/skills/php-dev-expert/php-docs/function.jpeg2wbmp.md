# Converte arquivo de imagem JPEG para WBMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.jpeg2wbmp.php

---

# jpeg2wbmp

(PHP 4 >= 4.0.5, PHP 5, PHP 7)

jpeg2wbmp — Converte arquivo de imagem JPEG para WBMP

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.2.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **jpeg2wbmp**(  
    [string](language.types.string.md) `$jpegname`,  
    [string](language.types.string.md) `$wbmpname`,  
    [int](language.types.integer.md) `$dest_height`,  
    [int](language.types.integer.md) `$dest_width`,  
    [int](language.types.integer.md) `$threshold`  
): [bool](language.types.boolean.md)

Converte um arquivo JPEG em um WBMP.

### Parâmetros

`jpegname`
:   Caminho para o arquivo JPEG.

`wbmpname`
:   Caminho para o arquivo WBMP de destino.

`dest_height`
:   Altura da imagem de destino.

`dest_width`
:   Largura da imagem de destino.

`threshold`
:   Valor de limite, entre 0 e 8 (inclusive).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Examples

**Exemplo #1 Exemplo de **jpeg2wbmp()****

```
<?php
// Caminho para o JPEG alvo
$path = './test.jpg';

// Obtém o tamanho da imagem
$image = getimagesize($path);

// Converte a imagem
jpeg2wbmp($path, './test.wbmp', $image[1], $image[0], 5);
?>
```

### Veja também

- [png2wbmp()](function.png2wbmp.md) - Converte arquivo de imagem PNG em WBMP

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
