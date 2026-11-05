# Obtém determinados valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-get-value.php

---

# ps\_get\_value

(PECL ps >= 1.1.0)

ps\_get\_value — Obtém determinados valores

### Descrição

function **ps\_get\_value**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$name`, [float](language.types.float.md) `$modifier` = ?): [float](language.types.float.md)

Obtém vários valores que foram definidos por
[ps\_set\_value()](function.ps-set-value.md). Os valores são, por definição, números float.

O parâmetro `name` pode ter os seguintes valores.

`fontsize`
:   O tamanho da fonte atualmente ativa ou da fonte cujo
    identificador é passado no parâmetro `modifier`.

`font`
:   A fonte atualmente ativa.

`imagewidth`
:   A largura da imagem cujo id é passado no parâmetro
    `modifier`.

`imageheight`
:   A altura da imagem cujo id é passado no parâmetro
    `modifier`.

`capheight`
:   A altura de um M maiúsculo na fonte atualmente ativa ou na fonte
    cujo identificador é passado no parâmetro
    `modifier`.

`ascender`
:   O ascendente da fonte atualmente ativa ou da fonte
    cujo identificador é passado no parâmetro
    `modifier`.

`descender`
:   O descendente da fonte atualmente ativa ou da fonte
    cujo identificador é passado no parâmetro
    `modifier`.

`italicangle`
:   O ângulo itálico da fonte atualmente ativa ou da fonte
    cujo identificador é passado no parâmetro
    `modifier`.

`underlineposition`
:   A posição sublinhada da fonte atualmente ativa ou da fonte
    cujo identificador é passado no parâmetro
    `modifier`.

`underlinethickness`
:   A espessura do sublinhado da fonte atualmente ativa ou da fonte
    cujo identificador é passado no parâmetro
    `modifier`.

`textx`
:   A posição x atual para saída de texto.

`texty`
:   A posição y atual para saída de texto.

`textrendering`
:   O modo atual para renderização de texto.

`textrise`
:   O espaço pelo qual o texto é elevado acima da linha de base.

`leading`
:   A distância entre as linhas de texto em pontos.

`wordspacing`
:   O espaço entre palavras como um múltiplo da largura de um caractere de espaço.

`charspacing`
:   O espaço entre caracteres. Se o espaçamento for diferente de 0.0, as ligaduras
    sempre serão dissolvidas.

`hyphenminchars`
:   Número mínimo de caracteres hifenizados no final de uma palavra.

`parindent`
:   Recuo da primeira linha n em um parágrafo.

`numindentlines`
:   Número de linhas em um parágrafo a recuar se parindent for diferente de 0.0.

`parskip`
:   Distância entre parágrafos.

`linenumberspace`
:   Espaço total na frente de cada linha para o número da linha.

`linenumbersep`
:   Espaço entre a linha e o número da linha.

`major`
:   O número da versão principal do pslib.

`minor`
:   O número da versão secundária do pslib.

`subminor`, `revision`
:   O número da versão terciária do pslib.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`name`
:   Nome do valor.

`modifier`
:   O parâmetro `modifier` especifica o recurso
    para o qual o valor deve ser recuperado. Pode ser o ID de uma fonte ou
    uma imagem.

### Valor Retornado

Retorna o valor do parâmetro ou **`false`**.

### Veja também

- [ps\_set\_value()](function.ps-set-value.md) - Define certos valores

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
