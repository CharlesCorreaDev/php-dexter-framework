# Obtém o índice da cor que tem a matiz, brancura e negritude mais próximas de uma cor informada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecolorclosesthwb.php

---

# imagecolorclosesthwb

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

imagecolorclosesthwb — Obtém o índice da cor que tem a matiz, brancura e negritude mais próximas de uma cor informada

### Descrição

function **imagecolorclosesthwb**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$red`,  
    [int](language.types.integer.md) `$green`,  
    [int](language.types.integer.md) `$blue`  
): [int](language.types.integer.md)

Obtém o índice da cor que tem a matiz,
a brancura e a negritude mais próximas da cor informada.

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

### Valor Retornado

Retorna um inteiro com o índice da cor que tem
a matiz, a brancura e a negritude mais próxima da cor informada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de uso de **imagecolorclosesthwb()****

```
<?php
$im = imagecreatefromgif('php.gif');

echo 'HWB: ' . imagecolorclosesthwb($im, 116, 115, 152);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
HWB: 33
```

### Veja também

- [imagecolorclosest()](function.imagecolorclosest.md) - Obtém o índice da cor mais próxima à especificada

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
