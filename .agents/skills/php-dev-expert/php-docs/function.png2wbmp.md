# Converte arquivo de imagem PNG em WBMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.png2wbmp.php

---

# png2wbmp

(PHP 4 >= 4.0.5, PHP 5, PHP 7)

png2wbmp — Converte arquivo de imagem PNG em WBMP

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.2.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **png2wbmp**(  
    [string](language.types.string.md) `$pngname`,  
    [string](language.types.string.md) `$wbmpname`,  
    [int](language.types.integer.md) `$dest_height`,  
    [int](language.types.integer.md) `$dest_width`,  
    [int](language.types.integer.md) `$threshold`  
): [bool](language.types.boolean.md)

Converte um arquivo PNG em um WBMP.

### Parâmetros

`pngname`
:   Caminho para o arquivo PNG.

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

**Exemplo #1 Exemplo de **png2wbmp()****

```
<?php
// Caminho para o PNG alvo
$path = './test.png';

// Obtém o tamanho da imagem
$image = getimagesize($path);

// Converte a imagem
png2wbmp($path, './test.wbmp', $image[1], $image[0], 7);
?>
```

### Veja também

- [jpeg2wbmp()](function.jpeg2wbmp.md) - Converte arquivo de imagem JPEG para WBMP

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
