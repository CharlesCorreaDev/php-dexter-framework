# Escreve texto em uma imagem usando fontes FreeType 2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefttext.php

---

# imagefttext

(PHP 4 >= 4.0.7, PHP 5, PHP 7, PHP 8)

imagefttext — Escreve texto em uma imagem usando fontes FreeType 2

### Descrição

function **imagefttext**(  
    [GdImage](class.gdimage.md) `$image`,  
    [float](language.types.float.md) `$size`,  
    [float](language.types.float.md) `$angle`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$color`,  
    [string](language.types.string.md) `$font_filename`,  
    [string](language.types.string.md) `$text`,  
    [array](language.types.array.md) `$options` = []  
): [array](language.types.array.md)|[false](language.types.singleton.md)

> **Nota**:
>
> Antes do PHP 8.0.0, **imagefttext()** era uma variante estendida de
> [imagettftext()](function.imagettftext.md) que suportava adicionalmente o parâmetro
> `options`.
> A partir do PHP 8.0.0, [imagettftext()](function.imagettftext.md) é um apelido de **imagefttext()**.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`size`
:   O tamanho da fonte a ser usado, em pontos.

`angle`
:   O ângulo em graus, com 0 grau sendo a leitura da esquerda para a direita.
    Valores maiores representam a rotação no sentido anti-horário. Por exemplo, um
    valor de 90 resultaria em uma leitura de baixo para cima.

`x`
:   As coordenadas dadas por `x` e
    `y` definirão o ponto base do primeiro
    caractere (aproximadamente o canto inferior esquerdo do caractere. Isto
    é diferente de [imagestring()](function.imagestring.md), onde
    `x` e `y` definem o
    canto superior esquerdo do primeiro caractere. Por exemplo, "superior esquerdo"
    é 0, 0.

`y`
:   A ordenada y. Isto define a posição da linha de base da fonte, e não
    a parte mais baixa do caractere.

`color`
:   O índice da cor desejada para o texto, veja
    [imagecolorexact()](function.imagecolorexact.md).

`font_filename`
:   O caminho para a fonte TrueType a ser usada.

    Dependendo de qual versão da biblioteca GD que o PHP estiver usando, *quando
    `font_filename` não iniciar com uma barra
    `/`. a extensão `.ttf` será anexada*
    ao nome do arquivo e a biblioteca tentará pesquisar por este
    arquivo ao longo do caminho definido pela biblioteca.

    Em muitos casos onde uma fonte reside no mesmo diretório que o script que está sendo executado,
    o truque a seguir aliviará problemas ao incluir arquivos.

    ```
    <?php
    //Define a variável de ambiente para GD
    putenv('GDFONTPATH=' . realpath('.'));

    // Nomeia a fonte a ser usada (note a falta da extensão .ttf)
    $font = 'SomeFont';
    ?>
    ```

`text`
:   Texto a ser inserido na imagem.

`options`
:   **Índices de array possíveis para `options`**

    | Chave | Tipo | Significado |
    | --- | --- | --- |
    | `linespacing` | [float](language.types.float.md) | Define espaçamento entre linhas |

### Valor Retornado

Esta função retorna um array com os quatro pontos que definem os limites do texto, iniciando no canto inferior esquerdo e seguindo no sentido anti-horário:

|  |  |
| --- | --- |
| 0 | canto inferior esquerdo, posição X |
| 1 | canto inferior esquerdo, posição Y |
| 2 | canto inferior direito, posição X |
| 3 | canto inferior direito, posição Y |
| 4 | canto superior direito, posição X |
| 5 | canto superior direito, posição Y |
| 6 | canto superior esquerdo, posição X |
| 7 | canto superior esquerdo, posição Y |

Em caso de falha, **`false`** é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imagefttext()****

```
<?php
// Cria uma imagem 300x100
$im = imagecreatetruecolor(300, 100);
$red = imagecolorallocate($im, 0xFF, 0x00, 0x00);
$black = imagecolorallocate($im, 0x00, 0x00, 0x00);

// Deixa o fundo vermelho
imagefilledrectangle($im, 0, 0, 299, 99, $red);

// Caminho para o arquivo de fonte ttf
$font_file = './arial.ttf';

// Desenha o texto 'PHP Manual' usando fonte tamanho 13
imagefttext($im, 13, 0, 105, 55, $black, $font_file, 'PHP Manual');

// Mostr a imagem no navegador
header('Content-Type: image/png');

imagepng($im);
?>
```

### Notas

> **Nota**:
>
> Esta função só estará disponível se
> o PHP for compilado com suporte ao freetype (**--with-freetype-dir=DIR**).

### Veja também

- [imageftbbox()](function.imageftbbox.md) - Fornece a caixa limite de um texto usando fontes via freetype2
- [imagettftext()](function.imagettftext.md) - Escreve texto na imagem usando fontes TrueType

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
