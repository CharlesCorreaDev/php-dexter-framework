# Obtém e classifica mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-sort.php

---

# imap\_sort

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_sort — Obtém e classifica mensagens

### Descrição

function **imap\_sort**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [int](language.types.integer.md) `$criteria`,  
    [bool](language.types.boolean.md) `$reverse`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$search_criteria` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$charset` = **`null`**  
): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém e classifica números de mensagens pelos parâmetros fornecidos.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`criteria`
:   Os critérios podem ser um (e somente um) dos seguintes:

    - **`SORTDATE`** - data da mensagem
    - **`SORTARRIVAL`** - data de chegada
    - **`SORTFROM`** - caixa de correio no primeiro endereço de "From"
    - **`SORTSUBJECT`** - assunto da mensagem
    - **`SORTTO`** - caixa de correio no primeiro endereço de "To"
    - **`SORTCC`** - caixa de correio no primeiro endereço de "Cc"
    - **`SORTSIZE`** - tamanho da mensagem em octetos

`reverse`
:   Informa se a classificação deve ser feita na ordem inversa.

`flags`
:   The `flags` é uma máscara de bits de uma ou mais das
    seguintes constantes:

    - **`SE_UID`** - Retorna UIDs em vez de números de sequência
    - **`SE_NOPREFETCH`** - Não pré-busca mensagens pesquisadas

`search_criteria`
:   String de critérios de pesquisa no formato IMAP2. Para detalhes, veja
    [imap\_search()](function.imap-search.md).

`charset`
:   Conjunto de caracteres MIME a ser usado ao classificar strings.

### Valor Retornado

Retorna um array de números de mensagens classificadas pelos parâmetros
fornecidos, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |
| 8.0.0 | `reverse` agora é [bool](language.types.boolean.md) em vez de [int](language.types.integer.md). |
| 8.0.0 | `search_criteria` e `charset` agora são nullable. |

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
