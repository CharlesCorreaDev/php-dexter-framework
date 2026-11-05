# Obtém certos parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-get-parameter.php

---

# ps\_get\_parameter

(PECL ps >= 1.1.0)

ps\_get\_parameter — Obtém certos parâmetros

### Descrição

function **ps\_get\_parameter**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$name`, [float](language.types.float.md) `$modifier` = ?): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém vários parâmetros que foram definidos diretamente por
[ps\_set\_parameter()](function.ps-set-parameter.md) ou indiretamente por uma das outras
funções. Parâmetros são, por definição, valores
string. Esta função não pode ser usada para recuperar recursos que também foram
definidos por [ps\_set\_parameter()](function.ps-set-parameter.md).

O parâmetro `name` pode ter os seguintes valores.

`fontname`
:   O nome da fonte atualmente ativa ou a fonte cujo
    identificador é passado no parâmetro `modifier`.

`fontencoding`
:   A codificação da fonte atualmente ativa.

`dottedversion`
:   A versão da biblioteca pslib subjacente no formato
    <primário>.<secundário>.<terciário>

`scope`
:   O escopo do desenho atual. Pode ser object, document, null, page,
    pattern, path, template, prolog, font, glyph.

`ligaturedisolvechar`
:   O caractere que dissolve uma ligadura. Se estiver sendo usada uma fonte
    que contém a ligadura `ff' e `|' é o caractere que dissolve a
    ligadura, então `f|f' resultará em dois `f' em vez da ligadura `ff'.

`imageencoding`
:   A codificação usada para codificar imagens. Pode ser
    `hex` ou `85`. A codificação hexadecimal
    usa dois bytes no arquivo PostScript para cada byte na imagem.
    85 significa codificação ASCII85.

`linenumbermode`
:   Defina como `paragraph` se as linhas forem numeradas
    dentro de um parágrafo ou `box` se forem
    numeradas dentro da caixa ao redor.

`linebreak`
:   Usado somente se o texto for gerado com [ps\_show\_boxed()](function.ps-show-boxed.md).
    Se definido como **`true`**, um retorno de carro adicionará uma quebra
    de linha.

`parbreak`
:   Usado somente se o texto for gerado com [ps\_show\_boxed()](function.ps-show-boxed.md).
    Se definido como **`true`**, um retorno de carro iniciará
    um novo parágrafo.

`hyphenation`
:   Usado somente se o texto for gerado com [ps\_show\_boxed()](function.ps-show-boxed.md).
    Se definido como **`true`**, o parágrafo será hifenizado
    se um dicionário de hifenização estiver definido e existir.

`hyphendict`
:   Nome do arquivo do dicionário usado para o padrão de hifenização.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`name`
:   Nome do parâmetro.

`modifier`
:   Um identificador necessário se um parâmetro de um recurso for solicitado,
    por exemplo, o tamanho de uma imagem. Nesse caso, o ID do recurso é
    passado.

### Valor Retornado

Retorna o valor do parâmetro ou **`false`** em caso de falha.

### Veja também

- [ps\_set\_parameter()](function.ps-set-parameter.md) - Define certos parâmetros

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
