# Define o valor de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-value.php

---

# fdf\_set\_value

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_value — Define o valor de um campo

### Descrição

function **fdf\_set\_value**(  
    [resource](language.types.resource.md) `$fdf_document`,  
    [string](language.types.string.md) `$fieldname`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$isName` = ?  
): [bool](language.types.boolean.md)

Define o valos do parâmetro `value` para o campo fornecido.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`fieldname`
:   Nome do campo FDF, como uma string.

`value`
:   Este parâmetro será armazenado como uma string, a menos que seja um array.
    Neste caso, todos os elementos do array serão armazenados como um array de valores.

`isName`
:   > **Nota**:
    >
    > Em versões mais antigas do kit de ferramentas FDF, o último parâmetro determinava se o
    > valor do campo deveria ser convertido em um Nome PDF (= 1) ou definido como uma String PDF
    > (= 0).
    >
    > O valor não é mais usado na versão atual do toolkit 5.0. Por
    > razões de compatibilidade, ele ainda é suportado como um parâmetro opcional,
    > mas ignorado internamente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [fdf\_get\_value()](function.fdf-get-value.md) - Obtém o valor de um campo
- [fdf\_remove\_item()](function.fdf-remove-item.md) - Define o quadro de destino para o formulário

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
