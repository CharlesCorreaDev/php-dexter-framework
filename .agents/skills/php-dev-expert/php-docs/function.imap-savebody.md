# Salva uma seção específica do corpo em um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-savebody.php

---

# imap\_savebody

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

imap\_savebody — Salva uma seção específica do corpo em um arquivo

### Descrição

function **imap\_savebody**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [resource](language.types.resource.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$file`,  
    [int](language.types.integer.md) `$message_num`,  
    [string](language.types.string.md) `$section` = "",  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Salva uma parte ou todo o corpo da mensagem especificada.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`file`
:   O caminho (string) para o arquivo a ser gravado ou um descritor de arquivo válido
    retornado por [fopen()](function.fopen.md).

`message_num`
:   O número da mensagem

`section`
:   O número da parte. É uma sequência de inteiros delimitados por ponto que
    são índices de uma lista de partes do corpo conforme a especificação IMAP4.

`flags`
:   Uma máscara de bits de uma das seguintes constantes:

    - **`FT_UID`** - O `message_num` é um UID
    - **`FT_PEEK`** - Não define o sinalizador \Seen se
      ainda não estiver definido
    - **`FT_INTERNAL`** - A string de retorno está em
      formato interno, não será canonizada para CRLF.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_fetchbody()](function.imap-fetchbody.md) - Busca uma seção específica do corpo da mensagem

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
