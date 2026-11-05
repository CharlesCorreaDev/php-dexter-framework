# Retorna o cabeçalho de uma mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-fetchheader.php

---

# imap\_fetchheader

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_fetchheader — Retorna o cabeçalho de uma mensagem

### Descrição

function **imap\_fetchheader**([IMAP\Connection](class.imap-connection.md) `$imap`, [int](language.types.integer.md) `$message_num`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função causa uma busca do cabeçalho completo e não filtrado no formato [» RFC2822](https://datatracker.ietf.org/doc/html/rfc2822) da mensagem
especificada.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_num`
:   O número da mensagem

`flags`
:   Os possíveis valores para `flags` são:

    - **`FT_UID`** - O argumento `message_num`
      é um UID
    - **`FT_INTERNAL`** - A string de retorno
      está no formato "interno", sem nenhuma tentativa de
      canonizar para novas linhas CRLF
    - **`FT_PREFETCHTEXT`** - O RFC822.TEXT
      deve ser pré-buscado ao mesmo tempo. Isso evita um
      RTT extra em uma conexão IMAP se um texto de mensagem completo for
      desejado (por exemplo, em uma operação "salvar em arquivo local")

### Valor Retornado

Retorna o cabeçalho da mensagem especificada como uma sequência de texto, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_fetch\_overview()](function.imap-fetch-overview.md) - Lê uma visão geral das informações nos cabeçalhos da mensagem fornecida

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
