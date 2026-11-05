# Gera texto em uma caixa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-show-boxed.php

---

# ps\_show\_boxed

(PECL ps >= 1.1.0)

ps\_show\_boxed — Gera texto em uma caixa

### Descrição

function **ps\_show\_boxed**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$text`,  
    [float](language.types.float.md) `$left`,  
    [float](language.types.float.md) `$bottom`,  
    [float](language.types.float.md) `$width`,  
    [float](language.types.float.md) `$height`,  
    [string](language.types.string.md) `$hmode`,  
    [string](language.types.string.md) `$feature` = ?  
): [int](language.types.integer.md)

Gera um texto em uma determinada caixa. O canto inferior esquerdo da caixa está em
(`left`, `bottom`). Quebras de linha
serão inseridas onde necessário. Vários espaços são tratados como um.
Tabulações são tratadas como espaços.

O texto será hifenizado se o parâmetro
`hyphenation` estiver definido como **`true`**
e o parâmetro `hyphendict` contiver um nome de arquivo válido
para um arquivo de hifenização.
O espaçamento entre linhas é obtido do valor `leading`.
Os parágrafos podem ser
separados por uma linha vazia, como no TeX. Se o valor
`parindent` estiver
definido como > 0.0, as primeiras n linhas serão recuadas. O número n
de linhas é definido pelo parâmetro `numindentlines`.
Para evitar
o recuo dos primeiros m parágrafos, defina o valor
`parindentskip` como um
número positivo.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`text`
:   O texto a ser exibido na caixa fornecida.

`left`
:   Coordenada x do canto inferior esquerdo da caixa.

`bottom`
:   Coordenada y do canto inferior esquerdo da caixa.

`width`
:   Largura da caixa.

`height`
:   Altura da caixa.

`hmode`
:   O parâmetro `hmode` pode ser `justify`,
    `fulljustify`, `right`, `left` ou `center`.
    A diferença entre `justify` e `fulljustify` afeta apenas a última linha da caixa. No modo
    `fulljustify`, a última linha será justificada à esquerda e à direita, a menos que
    esta também seja a última linha do parágrafo. No modo `justify`, ela sempre
    será justificada à esquerda.

`feature`

#### Parâmetros usados

A saída de **ps\_show\_boxed()** pode ser configurada com
vários parâmetros e valores que devem ser definidos com
[ps\_set\_parameter()](function.ps-set-parameter.md) ou [ps\_set\_value()](function.ps-set-value.md).
Além dos parâmetros e valores que afetam a saída de texto, os seguintes
parâmetros e valores são avaliados.

leading (valor)
:   Distância entre linhas de base de duas linhas consecutivas.

linebreak (parâmetro)
:   Se definido como **`true`**, um retorno de carro inicia uma nova linha em vez
    de ser tratado como um espaço. O padrão é **`false`**.

parbreak (parâmetro)
:   Se definido como **`true`**, um retorno de carro em uma única linha inicia um
    novo parágrafo em vez de ser tratado como um espaço. O padrão é **`true`**.

hyphenation (parâmetro)
:   Se definido como **`true`**, ativa a hifenização. Isso requer que
    um dicionário seja definido com o parâmetro `hyphendict`. O padrão é
    **`false`**.

hyphendict (parâmetro)
:   Nome do arquivo do dicionário usado para o padrão de hifenização (veja abaixo).

hyphenminchar (valor)
:   O número de caracteres que devem sobrar pelo menos antes ou depois
    do hífen. Isso implica que apenas palavras com pelo menos o dobro desse
    valor serão hifenizadas. O valor padrão é três. Definir um valor
    igual a zero resultará no valor padrão.

parindent (valor)
:   Define a quantidade de espaço em pixels para recuar as primeiras m linhas de um
    parágrafo. m pode ser definido com o valor `numindentlines`.

parskip (valor)
:   Define a quantidade de espaço extra em pixels entre parágrafos. O padrão é
    `0`, o que resultará em uma distância de linha normal.

numindentlines (valor)
:   Número de linhas a partir do início do parágrafo que serão recuadas.
    O padrão é `1`.

parindentskip (valor)
:   Número de parágrafos na caixa cujas primeiras linhas não serão recuadas.
    O padrão é `0`. Isso é útil para parágrafos logo após um título de seção
    ou texto continuado em uma segunda caixa. Em ambos os casos, seria
    definido como `1`.

linenumbermode (parâmetro)
:   Define como as linhas devem ser numeradas. Os valores possíveis são `box` para
    numerar linhas em toda a caixa ou `paragraph` para numerar linhas dentro
    de cada parágrafo.

linenumberspace (valor)
:   O espaço para a coluna à esquerda da linha numerada que contém o número da linha.
    O número da linha será justificado à direita nesta coluna.
    O padrão é `20`.

linenumbersep (valor)
:   O espaço entre a coluna com os números das linhas e a própria linha.
    O padrão é `5`.

#### Hyphenation

O texto será hifenizado se o parâmetro `hyphenation` estiver definido
como verdadeiro e um dicionário de hifenização válido estiver definido. O pslib não fornece seu próprio
dicionário de hifenização, mas utiliza um do OpenOffice, Scribus ou Koffice.
Os dicionários para diferentes idiomas podem ser encontrados em um dos
seguintes diretórios, se o software estiver instalado:

- /usr/share/apps/koffice/hyphdicts/
- /usr/lib/scribus/dicts/
- /usr/lib/openoffice/share/dict/ooo/

Atualmente, o Scribus parece ter os dicionários de hifenização
mais completos.

### Valor Retornado

Número de caracteres que não puderam ser escritos.

### Veja também

- [ps\_continue\_text()](function.ps-continue-text.md) - Continua o texto na próxima linha

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
