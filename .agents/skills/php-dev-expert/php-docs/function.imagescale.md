# Muda a escala de uma imagem usando largura e altura informadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagescale.php

---

# imagescale

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

imagescale — Muda a escala de uma imagem usando largura e altura informadas

### Descrição

function **imagescale**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height` = -1,  
    [int](language.types.integer.md) `$mode` = **`IMG_BILINEAR_FIXED`**  
): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagescale()** escala de uma imagem usando
o algoritmo de interpolação informado.

> **Nota**:
>
> Diferentemente de muitas outras funções de imagem, **imagescale()** não
> modifica o argumento `image` informado; ao invés disso, uma
> *nova* imagem é retornada.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`width`
:   A largura que a imagem terá na nova escala.

`height`
:   A altura que a imagem terá na nova escala. Se for omitida ou se for negativa, a razão
    de aspecto será preservada.

`mode`
:   Uma das constantes **`IMG_NEAREST_NEIGHBOUR`**,
    **`IMG_BILINEAR_FIXED`** (o padrão),
    **`IMG_BICUBIC`**,
    **`IMG_BICUBIC_FIXED`** ou qualquer outro valor (neste caso será
    feita dupla passagem).
    > **Nota**:
    >
    > **`IMG_WEIGHTED4`** ainda não é suportada.

### Valor Retornado

Retorna o objeto imagem com a escala modificada em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança uma [ValueError](class.valueerror.md) se `width`
ou `height` puderem causar um estouro de limites.

Lança uma [ValueError](class.valueerror.md) se `mode` for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança uma [ValueError](class.valueerror.md) se `width` ou `height` puderem causar um estouro de limites. |
| 8.4.0 | Agora lança uma [ValueError](class.valueerror.md) se `mode` for inválido. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Veja também

- [imagecopyresized()](function.imagecopyresized.md) - Copia e redimensiona parte de uma imagem
- [imagecopyresampled()](function.imagecopyresampled.md) - Copia e redimensiona parte de uma imagem com reamostragem

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
