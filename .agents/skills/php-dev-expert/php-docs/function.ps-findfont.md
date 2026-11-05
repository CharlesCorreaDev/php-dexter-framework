# Carrega uma fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-findfont.php

---

# ps\_findfont

(PECL ps >= 1.1.0)

ps\_findfont — Carrega uma fonte

### Descrição

function **ps\_findfont**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [string](language.types.string.md) `$fontname`,  
    [string](language.types.string.md) `$encoding`,  
    [bool](language.types.boolean.md) `$embed` = **`false`**  
): [int](language.types.integer.md)

Carrega uma fonte para uso posterior. Antes que o texto seja gerado com uma fonte carregada, ele
deve ser definido com [ps\_setfont()](function.ps-setfont.md). Esta função precisa do
arquivo de métricas de fontes da Adobe para calcular o espaço usado pelos
caracteres. Uma fonte carregada dentro de uma página estará disponível apenas
naquela página. As fontes que serão usadas no documento completo devem ser
carregadas antes da primeira chamada de [ps\_begin\_page()](function.ps-begin-page.md). Chamar
**ps\_findfont()** entre páginas tornará essa fonte
disponível para todas as páginas seguintes.

O nome do arquivo afm deve ser
`fontname``.afm`. Se a fonte
for incorporada, o arquivo
`fontname``.pfb` contendo
o contorno da fonte também deve estar presente.

Chamar **ps\_findfont()** antes da primeira página requer
a geração do cabeçalho PostScript que inclui o BoundingBox para
todo o documento. Normalmente, o BoundingBox é definido com a primeira chamada
de [ps\_begin\_page()](function.ps-begin-page.md), que agora vem depois de
**ps\_findfont()**. Consequentemente, o BoundingBox não
foi definido e um aviso será emitido quando **ps\_findfont()**
for chamado. Para evitar essa situação, deve-se chamar
[ps\_set\_parameter()](function.ps-set-parameter.md) para definir o BoundingBox antes de
**ps\_findfont()** ser chamado.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`fontname`
:   O nome da fonte.

`encoding`
:   **ps\_findfont()** tentará carregar o arquivo passado
    no parâmetro `encoding`. Os arquivos de codificação têm
    a mesma sintaxe daqueles usados ​​por **dvips(1)**. Eles
    contêm um vetor de codificação de fonte (que atualmente não é usado, mas deve estar
    presente) e uma lista de ligaduras extras para estender a lista de ligaduras
    derivadas do arquivo afm.

    `encoding` pode ser **`null`** ou a string vazia se
    a codificação padrão (TeXBase1) for usada.

    Se a codificação for definida como `builtin`, não haverá
    recodificação e a codificação específica da fonte será usada. Isso
    é muito útil com fontes de símbolos.

`embed`
:   Se definido para um valor maior que zero, a fonte será incorporada ao documento. Isso
    requer a presença do contorno da fonte (arquivo .pfb).

### Valor Retornado

Retorna o identificador da fonte ou zero em caso de erro. O
identificador é um número positivo.

### Veja também

- [ps\_begin\_page()](function.ps-begin-page.md) - Inicia uma nova página
- [ps\_setfont()](function.ps-setfont.md) - Define a fonte a ser usada na saída seguinte

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
