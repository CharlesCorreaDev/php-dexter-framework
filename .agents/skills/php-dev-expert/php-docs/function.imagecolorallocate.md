# Aloca uma cor para uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorallocate.php

---

# imagecolorallocate

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecolorallocate — Aloca uma cor para uma imagem

### Descrição

function **imagecolorallocate**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna um identificador de cor representando a cor composta pelos
componentes RGB.

**imagecolorallocate()** precisa ser chamada
para criar cada cor que será usada na imagem representada
por `image`.

> **Nota**:
>
> A primeira chamada a **imagecolorallocate()** preenche
> a cor de fundo em imagens com base em paletas - imagens criadas usando
> [imagecreate()](function.imagecreate.md).

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`red`
:   Valor do componente vermelho.

`green`
:   Valor do componente verde.

`blue`
:   Valor do componente azul.

Estes parâmetros são inteiros entre 0 e 255 ou hexadecimais entre
0x00 e 0xFF.

### Valor Retornado

Um identificador de cor ou **`false`** se a alocação falhar.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagecolorallocate()****

```
<?php

$im = imagecreate(100, 100);

// define a cor de fundo para vermelha
$background = imagecolorallocate($im, 255, 0, 0);

// define algumas cores
$white = imagecolorallocate($im, 255, 255, 255); //branca
$black = imagecolorallocate($im, 0, 0, 0); //preta

// com hexadecimais
$white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF); //branca
$black = imagecolorallocate($im, 0x00, 0x00, 0x00); //preta

?>
```

### Veja também

- [imagecolorallocatealpha()](function.imagecolorallocatealpha.md) - Aloca uma cor para uma imagem
- [imagecolordeallocate()](function.imagecolordeallocate.md) - Desaloca uma cor de uma imagem

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
