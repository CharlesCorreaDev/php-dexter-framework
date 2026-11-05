# Recorta uma imagem automaticamente usando um dos modos disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecropauto.php

---

# imagecropauto

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

imagecropauto — Recorta uma imagem automaticamente usando um dos modos disponíveis

### Descrição

function **imagecropauto**(  
    [GdImage](class.gdimage.md) `$image`,  
    [int](language.types.integer.md) `$mode` = **`IMG_CROP_DEFAULT`**,  
    [float](language.types.float.md) `$threshold` = 0.5,  
    [int](language.types.integer.md) `$color` = -1  
): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

Automaticamente recorta uma imagem de acordo com o modo informado no parâmetro
`mode`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`mode`
:   Uma das constantes a seguir:

    **`IMG_CROP_DEFAULT`**
    :   O mesmo que **`IMG_CROP_TRANSPARENT`**.
        Antes do PHP 7.4.0, a libgd fornecida retrocedia para **`IMG_CROP_SIDES`**,
        se a imagem não tivesse cor transparente.

    **`IMG_CROP_TRANSPARENT`**
    :   Corta um plano de fundo transparente.

    **`IMG_CROP_BLACK`**
    :   Corta um plano de fundo preto.

    **`IMG_CROP_WHITE`**
    :   Corta um plano de fundo branco.

    **`IMG_CROP_SIDES`**
    :   Usa os 4 cantos da imagem para tentar detectar o plano de fundo a
        ser cortado.

    **`IMG_CROP_THRESHOLD`**
    :   Corta uma imagem usando os parâmetros `threshold` e
        `color` fornecidos.

`threshold`
:   Especifica a tolerância em percentagem que será usada ao comparar a cor da imagem
    com a cor a ser cortada. O método usado para calcular a diferença de
    cor é baseado na distância de cores no cubo RGB(a).

    Usado somente no modo **`IMG_CROP_THRESHOLD`**.

    > **Nota**:
    >
    > Antes do PHP 7.4.0, a libgd fornecida usava um algotitmo ligeiramente diferente,
    > por isso o mesmo `threshold` gerava resultados diferentes
    > para a libgd de sistema e a fornecida.

`color`
:   Um valor de cor RGB ou um índice de paleta.

    Usado somente no modo **`IMG_CROP_THRESHOLD`**.

### Valor Retornado

Retorna um objeto de imagem cortada em caso de sucesso ou **`false`** em caso de falha.
**`false`** também é retornado se a imagem for inteiramente cortada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna um objeto [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 7.4.0 | O comportamento de imagecropauto() na libgd fornecida foi sincronizado com o da libgd de sistema: **`IMG_CROP_DEFAULT`** não mais retrocede para **`IMG_CROP_SIDES`** e o recorte de limites agora usa o mesmo algoritmo da libgd de sistema. |
| 7.4.0 | O valor padrão de `mode` mudou para **`IMG_CROP_AUTO`**. Anteriormente, o valor padrão era `-1` que corresponde a **`IMG_CROP_DEFAULT`**, mas passar `-1` agora foi descontinuado. |

### Examples

**Exemplo #1 Gerenciamento adequado de auto-recorte**

Como percebido na seção de valores de retorno, **imagecropauto()**
retorna **`false`** se a imagem inteira
foi recortada. Neste exemplo será trabalho o objeto de imagem
`$im` que deve ser automaticamente recortado somente se
houver algo a ser recortado; caso contrário será mantida a imagem original.

```
<?php
$cropped = imagecropauto($im, IMG_CROP_DEFAULT);
if ($cropped !== false) { // caso um novo objeto de imagem tenha sido retornado
    $im = $cropped;       // a imagem recortada é atribuída a $im
}
?>
```

### Veja também

- [imagecrop()](function.imagecrop.md) - Recorta uma imagem no retângulo informado

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
