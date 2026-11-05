# Escreve texto na imagem usando fontes TrueType

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagettftext.php

---

# imagettftext

(PHP 4, PHP 5, PHP 7, PHP 8)

imagettftext — Escreve texto na imagem usando fontes TrueType

### Descrição

function **imagettftext**(  
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

Escreve o texto definido em `text` na imagem, usando fontes
TrueType.

> **Nota**:
>
> Antes do PHP 8.0.0, [imagefttext()](function.imagefttext.md) era uma variante estendida de
> **imagettftext()** que adicionalmente suportava o parâmetro
> `extrainfo`.
> A partir do PHP 8.0.0, **imagettftext()** é um apelido de [imagefttext()](function.imagefttext.md).

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`size`
:   O tamanho da fonte em pontos.

`angle`
:   O ângulo em graus, com 0 grau sendo um texto lido da esquerda para a direita.
    Valores mais altos representam uma rotação no sentido anti-horário. Por exemplo, um
    valor de 90 resultaria em um texto lido de baixo para cima.

`x`
:   A coordenada fornecida por `x` e
    `y` definirá o ponto base do primeiro
    caractere (aproximadamente o canto inferior esquerdo do caractere). Isto
    é diferente de [imagestring()](function.imagestring.md), onde
    `x` e `y` definem o
    canto superior esquerdo do primeiro caractere. Por exemplo, "superior esquerdo"
    é 0, 0.

`y`
:   A ordenada y. Define a posição da linha base das fontes, e não
    a parte mais baixa do caractere.

`color`
:   O índica de cor. Usar o valor negativo de um índice de cor tem o efeito de
    desligar a redução de serrilhado. Consulte [imagecolorallocate()](function.imagecolorallocate.md).

`fontfile`
:   O caminho para a fonte TrueType que será usada.

    Dependendo de qual versão da biblioteca GD o PHP estiver usando, *quando
    `fontfile` não começar com uma
    `/` então `.ttf` será adicionado*
    ao nome do arquivo e a biblioteca tentará procurá-lo
    em um caminho de fontes definido pela biblioteca.

    Ao usar versões da biblioteca GD anteriores à versão 2.0.18, um caractere `espaço`,
    em vez de um ponto-e-vírgula, foi usado como 'separador de caminho' para diferentes arquivos de fonte.
    O uso não intencional desse recurso resultará na mensagem de aviso:
    `Warning: Could not find/open font`. Para essas versões afetadas, a
    única solução é mover a fonte para um caminho que não contenha espaços.

    Em muitos casos em que uma fonte reside no mesmo diretório que o script que a usa,
    o truque a seguir aliviará qualquer problema de inclusão.

    ```
    <?php
    // Define a variável de ambiente GDFONTPATH
    putenv('GDFONTPATH=' . realpath('.'));

    // Define a fonte a ser usada (observe a ausência da extensão .ttf)
    $font = 'SomeFont';
    ?>
    ```

    > **Nota**:
    >
    > Note que [open\_basedir](ini.core.md#ini.open-basedir)
    > *não* se aplica a `fontfile`.

`text`
:   A string de texto em codificação UTF-8.

    Pode incluir referências a caracteres numéricos decimais (na forma:
    `&#8364;`) para acessar caracteres em uma fonte além da posição 127.
    O formato hexadecimal (como `&#xA9;`) é suportado.
    Strings em codificação UTF-8 pode ser passado diretamente.

    Entidades nomeadas, tal como `&copy;`, não são suportadas. Considere usar
    [html\_entity\_decode()](function.html-entity-decode.md)
    para decodificar estas entidades nomeadas em strings UTF-8.

    Se um caractere usado na string não for suportado pela
    fonte, um retêngulo vazado substituirá o caractere.

`options`
:   Um array com a chave `linespacing` contendo um valor [float](language.types.float.md).

### Valor Retornado

Retorna um array com 8 elementos representando quatro pontos que formam
o retângulo limite do texto. A ordem dos pontos é inferior esquerdo, inferior
direito, superior direito, superior esquerdo. Os pontos são relativos ao texto
independente do ângulo, portanto "superior esquerdo" significa o canto superior
esquerdo quando o texto é visto na horizontal.
Retorna **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `options` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **imagettftext()****

Este script de exemplo produz um PNG branco de 400x30 pixels, com
a palavra "Testing..." em preto (com sombra cinza), na fonte Arial.

```
<?php

// Define o tipo de conteúdo
header('Content-Type: image/png');

// Cria a imagem
$im = imagecreatetruecolor(400, 30);

// Cria algumas cores
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $white);

// O texto a ser desenhado
$text = 'Testing...';

// Substitui o caminho da fonte
$font = 'arial.ttf';

// Adiciona sombra ao texto
imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

// Adiciona o texto
imagettftext($im, 20, 0, 10, 20, $black, $font, $text);

// Usar imagepng() resulta em um texto mais nítido comparado com imagejpeg()
imagepng($im);

?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagettftext()](images/21009b70229598c6a80eef8b45bf282b-imagettftext.png)

### Notas

> **Nota**:
>
> Esta função só estará disponível se
> o PHP for compilado com suporte ao freetype (**--with-freetype-dir=DIR**).

### Veja também

- [imagettfbbox()](function.imagettfbbox.md) - Fornece a os limites retangulares de um texto usando fontes TrueType
- [imagefttext()](function.imagefttext.md) - Escreve texto em uma imagem usando fontes FreeType 2
- [imagestring()](function.imagestring.md) - Desenha uma string na horizontal

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
