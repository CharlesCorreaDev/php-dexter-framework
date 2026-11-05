# Obtém o retângulo de recorte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagegetclip.php

---

# imagegetclip

(PHP 7 >= 7.2.0, PHP 8)

imagegetclip — Obtém o retângulo de recorte

### Descrição

function **imagegetclip**([GdImage](class.gdimage.md) `$image`): [array](language.types.array.md)

**imagegetclip()** obtém o retângulo de recorte atual,
isto é, a área além da qual nenhum pixel será desenhado.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Valor Retornado

A função retorna um array indexado com as coordenadas do retângulo
de recorte, com as seguintes entradas:

- Coordenada x do canto superior esquerdo
- Coordenada y do canto superior esquerdo
- Coordenada x do canto inferior direito
- Coordenada y do canto inferior direito

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagegetclip()****

Definindo e obtendo o retângulo de recorte.

```
<?php
$im = imagecreate(100, 100);
imagesetclip($im, 10,10, 89,89);
print_r(imagegetclip($im));
```

O exemplo acima produzirá:

```
Array
(
    [0] => 10
    [1] => 10
    [2] => 89
    [3] => 89
)
```

### Veja também

- [imagesetclip()](function.imagesetclip.md) - Define o retângulo de recorte

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
