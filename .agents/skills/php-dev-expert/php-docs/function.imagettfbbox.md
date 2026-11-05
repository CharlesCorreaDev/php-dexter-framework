# Fornece a os limites retangulares de um texto usando fontes TrueType

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagettfbbox.php

---

# imagettfbbox

(PHP 4, PHP 5, PHP 7, PHP 8)

imagettfbbox — Fornece a os limites retangulares de um texto usando fontes TrueType

### Descrição

function **imagettfbbox**(  
    [float](language.types.float.md) `$size`,  
    [float](language.types.float.md) `$angle`,  
    [string](language.types.string.md) `$font_filename`,  
    [string](language.types.string.md) `$string`,  
    [array](language.types.array.md) `$options` = []  
): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função calcula e retorna os limites retangulares em pixels
para um texto TrueType.

> **Nota**:
>
> Antes do PHP 8.0.0, [imageftbbox()](function.imageftbbox.md) era uma variante estendida de
> **imagettfbbox()** que adicionalmente suportava o parâmetro
> `extrainfo`.
> A partir do PHP 8.0.0, **imagettfbbox()** é um apelido de [imageftbbox()](function.imageftbbox.md).

### Parâmetros

`size`
:   O tamanho da fonte em pontos.

`angle`
:   Ângulo em graus em que a `string` será medida.

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

`string`
:   A string a ser medida.

`options`
:   Consulte a função [imagettftext()](function.imagettftext.md).

### Valor Retornado

**imagettfbbox()** retorna um array com 8
elementos representando quatro pontos que definem os limites retangulares do
texto em caso de sucesso e **`false`** em caso de erro.

| key | contents |
| --- | --- |
| 0 | canto inferior esquerdo, posição X |
| 1 | canto inferior esquerdo, posição Y |
| 2 | canto inferior direito, posição X |
| 3 | canto inferior direito, posição Y |
| 4 | canto superior direito, posição X |
| 5 | canto superior direito, posição Y |
| 6 | canto superior esquerdo, posição X |
| 7 | canto superior esquerdo, posição Y |

Os pontos são relativos ao *texto*, independente do parâmetro
`angle`, portanto "superior esquerdo" significa no canto superior esquerdo
ao ver o texto na horizontal.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `options` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **imagettfbbox()****

```
<?php
// Cria uma imagem 300x150
$im = imagecreatetruecolor(300, 150);
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);

// Fundo branco
imagefilledrectangle($im, 0, 0, 299, 299, $white);

// Caminho para o arquivo da fonte
$font = './arial.ttf';

// Primeiro é criado o retângulo limite para o primeiro texto
$bbox = imagettfbbox(10, 45, $font, 'Powered by PHP ' . phpversion());

// Estas são as coordenadas de X e Y
$x = $bbox[0] + (imagesx($im) / 2) - ($bbox[4] / 2) - 25;
$y = $bbox[1] + (imagesy($im) / 2) - ($bbox[5] / 2) - 5;

// Escreve
imagettftext($im, 10, 45, $x, $y, $black, $font, 'Powered by PHP ' . phpversion());

// O próximo retângulo limite é criado para o segundo texto
$bbox = imagettfbbox(10, 45, $font, 'and Zend Engine ' . zend_version());

// Define as coordenadas de forma que fique próxima ao primeiro texto
$x = $bbox[0] + (imagesx($im) / 2) - ($bbox[4] / 2) + 10;
$y = $bbox[1] + (imagesy($im) / 2) - ($bbox[5] / 2) - 5;

// Escreve
imagettftext($im, 10, 45, $x, $y, $black, $font, 'and Zend Engine ' . zend_version());

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

- [imagettftext()](function.imagettftext.md) - Escreve texto na imagem usando fontes TrueType
- [imageftbbox()](function.imageftbbox.md) - Fornece a caixa limite de um texto usando fontes via freetype2

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
