# Informa se a informação de canal alfa deve ser retida ao gravar imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagesavealpha.php

---

# imagesavealpha

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

imagesavealpha — Informa se a informação de canal alfa deve ser retida ao gravar imagens

### Descrição

function **imagesavealpha**([GdImage](class.gdimage.md) `$image`, [bool](language.types.boolean.md) `$enable`): [true](language.types.singleton.md)

**imagesavealpha()** define a opção que determina se a informação
completa do canal alfa deve ser retida (ao contrário de manter transparência de uma cor)
ao gravar imagens.
Isto somente é suportado para formatos de imagem que suportam informação de canal alfa completo,
isto é, `PNG`, `WebP` e `AVIF`.
> **Nota**:
>
> **imagesavealpha()** só faz sentido para imagens `PNG`,
> já que o canal alfa completo é sempre gravado para `WebP`
> e `AVIF`. Não pe recomendado confiar neste comportamento,
> pois ele pode mudar no futuro. Por isso, **imagesavealpha()**
> deve ser chamada deliberadamente também para imagens `WebP` e
> `AVIF`.

Mesclagem de alfa tem que ser desabilitada (`imagealphablending($im, false)`)
para reter o canal alfa em primeiro lugar.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`enable`
:   Informa se o canal alfa deve ou não ser retido. O padrão é **`false`**.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Uso básico de **imagesavealpha()****

```
<?php
// Carrega uma imagem PNG com canal alfa
$png = imagecreatefrompng('./alphachannel_example.png');

// Desabilita mesclagem alfa
imagealphablending($png, false);

// Faz as operações desejadas

// Define a opção de gravação alfa
imagesavealpha($png, true);

// Mostra imagem no navegador
header('Content-Type: image/png');

imagepng($png);
?>
```

### Veja também

- [imagealphablending()](function.imagealphablending.md) - Define o modo de combinação para uma imagem

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
