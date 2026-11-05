# Obtém ou define a resolução da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageresolution.php

---

# imageresolution

(PHP 7 >= 7.2.0, PHP 8)

imageresolution — Obtém ou define a resolução da imagem

### Descrição

function **imageresolution**([GdImage](class.gdimage.md) `$image`, [?](language.types.null.md)[int](language.types.integer.md) `$resolution_x` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$resolution_y` = **`null`**): [array](language.types.array.md)|[true](language.types.singleton.md)

**imageresolution()** permite definir ou obter a resolução de
uma imagem em PPP (pontos por polegada). Se os parâmetros opcionais forem **`null`**,
a resolução atual é retornada como um array indexado. Se somente
`resolution_x` não for **`null`**, as resoluções horizontal e vertical
são definidas para este valor. Se nenhum dos parâmetros opcionais for **`null`**, as resoluções horizontal
e vertical são definidas para estes valores, respectivamente.

A resolução é usada somente como meta-informação quando imagens são lidas e
gravadas de/para formatos que suportam este tipo de informação (atualmente PNG e
JPEG). Ela não afeta nenhuma operação de desenho. A resolução padrão
para novas imagens é 96 PPP.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`resolution_x`
:   A resolução horizontal em PPP.

`resolution_y`
:   A resolução vertical em PPP.

### Valor Retornado

Quando usado para obter a resolução,
retorna um array indexado das resoluções horizontal e vertical em
caso de sucesso.
Quando usado para definir a resolução, sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `resolution_x` e `resolution_y` agora podem ser nulos. |

### Examples

**Exemplo #1 Definindo e obtendo a resolução de uma imagem**

```
<?php
$im = imagecreatetruecolor(100, 100);
imageresolution($im, 200);
print_r(imageresolution($im));
imageresolution($im, 300, 72);
print_r(imageresolution($im));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => 200
    [1] => 200
)
Array
(
    [0] => 300
    [1] => 72
)
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
