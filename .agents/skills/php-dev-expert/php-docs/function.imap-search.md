# Esta função retorna um array de mensagens que correspondem aos critérios de pesquisa fornecidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-search.php

---

# imap\_search

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_search — Esta função retorna um array de mensagens que correspondem aos critérios de pesquisa fornecidos

### Descrição

function **imap\_search**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [string](language.types.string.md) `$criteria`,  
    [int](language.types.integer.md) `$flags` = **`SE_FREE`**,  
    [string](language.types.string.md) `$charset` = ""  
): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função realiza uma pesquisa na caixa de correio atualmente aberta
no fluxo IMAP fornecido.

Por exemplo, para corresponder a todas as mensagens não respondidas enviadas pela mãe, você usaria:
"UNANSWERED FROM mãe". As pesquisas parecem não diferenciar maiúsculas de
maiúsculas. Esta lista de critérios é de uma leitura do código-fonte do c-client
UW e pode estar incompleta ou
imprecisa (veja também a [» RFC1176](https://datatracker.ietf.org/doc/html/rfc1176),
seção "tag SEARCH search\_criteria").

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`criteria`
:   Uma string, delimitada por espaços, na qual as seguintes palavras-chave são
    permitidas. Quaisquer argumentos com várias palavras (por exemplo,
    `FROM "joey smith"`) devem ser citados. Os resultados corresponderão
    a todas as entradas do parâmetro `criteria`.

    - ALL - retorna todas as mensagens que correspondem ao restante dos critérios
    - ANSWERED - corresponde a mensagens com o sinalizador \\ANSWERED definido
    - BCC "string" - corresponde a mensagens com "string" no campo "Bcc:"
    - BEFORE "data" - corresponde a mensagens com "Date:" antes de "data"
    - BODY "string" - corresponde a mensagens com "string" no corpo da mensagem
    - CC "string" - corresponde a mensagens com "string" no campo "Cc:"
    - DELETED - corresponde a mensagens excluídas
    - FLAGGED - corresponde a mensagens com o sinalizador \\FLAGGED (às vezes
      chamado de Importante ou Urgente) definido
    - FROM "string" - corresponde a mensagens com "string" no campo "From:"
    - KEYWORD "string" - corresponde a mensagens com "string" como palavra-chave
    - NEW - corresponde a novas mensagens
    - OLD - corresponde a mensagens antigas
    - ON "data" - corresponde a mensagens com "Date:" correspondendo a "data"
    - RECENT - corresponde a mensagens com o sinalizador \\RECENT definido
    - SEEN - corresponde a mensagens que foram lidas (o sinalizador \\SEEN está definido)
    - SINCE "data" - corresponde a mensagens com "Date:" depois de "data"
    - SUBJECT "string" - corresponde a mensagens com "string" em "Subject:"
    - TEXT "string" - corresponde a mensagens com texto "string"
    - TO "string" - corresponde a mensagens com "string" em "To:"
    - UNANSWERED - corresponde a mensagens que não foram respondidas
    - UNDELETED - corresponde a mensagens que não foram excluídas
    - UNFLAGGED - corresponde a mensagens que não estão sinalizadas
    - UNKEYWORD "string" - corresponde a mensagens que não têm a
      palavra-chave "string"
    - UNSEEN - corresponde a mensagens que ainda não foram lidas

`flags`
:   Os valores válidos para `flags` são
    **`SE_UID`**, o que faz com que o array retornado
    contenha UIDs em vez de números de sequência de mensagens.

`charset`
:   Conjunto de caracteres MIME a ser usado ao pesquisar strings.

### Valor Retornado

Retorna um array de números de mensagens ou UIDs.

Retorna **`false`** se não entender os critério de pesquisa
informados em `criteria` ou se nenhuma mensagem foi encontrada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_search()****

```
<?php
$imap   = imap_open('{imap.example.com:993/imap/ssl}INBOX', 'foo@example.com', 'pass123', OP_READONLY);

$some   = imap_search($imap, 'SUBJECT "HOWTO be Awesome" SINCE "8 August 2008"', SE_UID);
$msgnos = imap_search($imap, 'ALL');
$uids   = imap_search($imap, 'ALL', SE_UID);

print_r($some);
print_r($msgnos);
print_r($uids);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => 4
    [1] => 6
    [2] => 11
)
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
)
Array
(
    [0] => 1
    [1] => 4
    [2] => 6
    [3] => 8
    [4] => 11
    [5] => 12
)
```

### Veja também

- [imap\_listscan()](function.imap-listscan.md) - Retorna a lista de caixas de correio que correspondem ao texto fornecido

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
