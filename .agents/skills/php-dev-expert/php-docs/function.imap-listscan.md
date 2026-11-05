# Retorna a lista de caixas de correio que correspondem ao texto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-listscan.php

---

# imap\_listscan

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_listscan — Retorna a lista de caixas de correio que correspondem ao texto fornecido

### Descrição

function **imap\_listscan**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [string](language.types.string.md) `$reference`,  
    [string](language.types.string.md) `$pattern`,  
    [string](language.types.string.md) `$content`  
): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um array contendo os nomes das caixas de correio que têm
`content` no texto da caixa de correio.

Esta função é semelhante a [imap\_listmailbox()](function.imap-listmailbox.md),
mas também verificará a presença da string
`content` dentro dos dados da caixa de correio.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`reference`
:   `reference` normalmente deve ser apenas a especificação do servidor
    conforme descrito em [imap\_open()](function.imap-open.md)

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`pattern`
:   Especifica onde iniciar a pesquisa na hierarquia
    da caixa de mensagem.

    Existem dois caracteres especiais que podem
    ser passados como parte do parâmetro `pattern`:
    '`*`' e '`%`'.
    '`*`' significa retornar todas as caixas de mensagem. Se
    `pattern` for passado como '`*`', será retornada
    uma lista de toda a hierarquia da caixa de mensagem.
    '`%`'
    significa retornar apenas o nível atual.
    Passar '`%`' como o parâmetro `pattern`
    retornará apenas as caixas de mensagem do nível
    mais alto; Passar '`~/mail/%`' em `UW_IMAPD` retornará todas as caixas de mensagem no diretório ~/mail, mas não retornará nenhuma nas subpastas deste diretório.

`content`
:   A string pesquisada

### Valor Retornado

Retorna um array contendo os nomes das caixas de correio que têm
`content` no texto da caixa de correio, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_listmailbox()](function.imap-listmailbox.md) - Sinônimo de imap\_list
- [imap\_search()](function.imap-search.md) - Esta função retorna um array de mensagens que correspondem aos critérios de pesquisa fornecidos

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
