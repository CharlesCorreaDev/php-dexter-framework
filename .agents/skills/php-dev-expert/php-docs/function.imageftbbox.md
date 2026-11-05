# Fornece a caixa limite de um texto usando fontes via freetype2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageftbbox.php

---

# imageftbbox

(PHP 4 >= 4.0.7, PHP 5, PHP 7, PHP 8)

imageftbbox — Fornece a caixa limite de um texto usando fontes via freetype2

### Descrição

function **imageftbbox**(  
    [float](language.types.float.md) `$size`,  
    [float](language.types.float.md) `$angle`,  
    [string](language.types.string.md) `$font_filename`,  
    [string](language.types.string.md) `$string`,  
    [array](language.types.array.md) `$options` = []  
): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função calcula e retorna a caixa limite em pixels
para um texto em FreeType.

> **Nota**:
>
> Antes do PHP 8.0.0, **imageftbbox()** era uma variante estendida de
> [imagettfbbox()](function.imagettfbbox.md) que suportava adicionalmente o parâmetro
> `options`.
> A partir do PHP 8.0.0, [imagettfbbox()](function.imagettfbbox.md) é um apelido de **imageftbbox()**.

### Parâmetros

`size`
:   O tamanho da fonte em pontos.

`angle`
:   Ângulo em graus no qual a `string` será
    medida.

`font_filename`
:   O nome do arquivo da fonte TrueType (pode ser uma URL). Dependendo de qual
    versão da biblioteca GD que o PHP estiver usando, pode ser que ele tente
    pesquisar por arquivos que não iniciem com uma barra '/', anexando a extensão
    '.ttf' ao nome do arquivo e pesquisando ao longo de um caminho de fonte definido pela biblioteca.

`string`
:   A string a ser medida.

`options`
:   **Índices de array possíveis para `options`**

    | Chave | Tipo | Significado |
    | --- | --- | --- |
    | `linespacing` | [float](language.types.float.md) | Define o espaçamento entre linhas |

### Valor Retornado

**imageftbbox()** retorna um array com 8
elementos representando os quatro pontos que definem os limites do
texto:

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

Os pontos são relativos ao *texto* independente do parâmetro
`angle`, portanto "superior esquerdo" significa no canto da parte superior esquerda
vendo o texto horizontalmente.

Em caso de falha, **`false`** é retornado.

### Examples

**Exemplo #1 Exemplo de **imageftbbox()****

```
<?php
// Cria uma imagem 300x150
$im = imagecreatetruecolor(300, 150);
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);

// Define o fundo para branco
imagefilledrectangle($im, 0, 0, 299, 299, $white);

// Caminho para o arquivo da fonte
$font = './arial.ttf';

// Primeiramente cria-se a caixa limite
$bbox = imageftbbox(10, 0, $font, 'The PHP Documentation Group');

// Estas são as coordenadas para X e Y
$x = $bbox[0] + (imagesx($im) / 2) - ($bbox[4] / 2) - 5;
$y = $bbox[1] + (imagesy($im) / 2) - ($bbox[5] / 2) - 5;

imagefttext($im, 10, 0, $x, $y, $black, $font, 'The PHP Documentation Group');

// Mostra no navegador
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

- [imagefttext()](function.imagefttext.md) - Escreve texto em uma imagem usando fontes FreeType 2
- [imagettfbbox()](function.imagettfbbox.md) - Fornece a os limites retangulares de um texto usando fontes TrueType

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
