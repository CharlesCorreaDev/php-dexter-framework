# Define se as funções de suavização de serrilhado devem ser usadas ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageantialias.php

---

# imageantialias

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

imageantialias — Define se as funções de suavização de serrilhado devem ser usadas ou não

### Descrição

function **imageantialias**([GdImage](class.gdimage.md) `$image`, [bool](language.types.boolean.md) `$enable`): [true](language.types.singleton.md)

Ativa os métodos rápidos de suavização de serrilhado para linhas e polígonos.
Não suporta componentes alfa. Funciona usando um operação de
combinação direta, e somente com imagens de cores verdadeiras.

Linhas com espessura e com estilos não são suportadas.

Usar primitivas com redução de serrilhado em plano de fundo transparente pode gerar
alguns resultados inesperados. O método de combinação usa a cor de fundo como qualquer
outra. A falta de suporte ao componente alfa não permite um método de redução de
serrilhado baseado no canal alfa.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`enable`
:   Informa se a redução de serrilhado deve ser habilitada ou não.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |
| 7.2.0 | **imageantialias()** agora está disponível de forma geral. Anteriormente estava disponível somente se o PHP fosse compilado com a versão já incluída da biblioteca GD. |

### Examples

**Exemplo #1 Uma comparação de duas linhas, uma delas com redução de serrilhado**

```
<?php
// Comfigura uma imagem com redução de serrilhado e outra normal
$aa = imagecreatetruecolor(400, 100);
$normal = imagecreatetruecolor(200, 100);

// Habilita redução de serrilhado em uma imagem
imageantialias($aa, true);

// Aloca cores
$red = imagecolorallocate($normal, 255, 0, 0);
$red_aa = imagecolorallocate($aa, 255, 0, 0);

// Desenha duas linhas, uma com RS habilitada
imageline($normal, 0, 0, 200, 100, $red);
imageline($aa, 0, 0, 200, 100, $red_aa);

// Funde as duas imagens lado a lado para saída (RS: esquerda, Normal: direita)
imagecopymerge($aa, $normal, 200, 0, 0, 0, 200, 100, 100);

// Mostra a imagem
header('Content-type: image/png');

imagepng($aa);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Uma comparação de duas linhas, uma delas com redução de serrilhado](images/21009b70229598c6a80eef8b45bf282b-imageantialias.png)

### Veja também

- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras

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
