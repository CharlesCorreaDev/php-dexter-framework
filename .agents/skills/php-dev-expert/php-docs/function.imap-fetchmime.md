# Busca cabeçalhos MIME para uma seção específica da mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-fetchmime.php

---

# imap\_fetchmime

(PHP 5 >= 5.3.6, PHP 7, PHP 8)

imap\_fetchmime — Busca cabeçalhos MIME para uma seção específica da mensagem

### Descrição

function **imap\_fetchmime**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [int](language.types.integer.md) `$message_num`,  
    [string](language.types.string.md) `$section`,  
    [int](language.types.integer.md) `$flags` = 0  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Busca os cabeçalhos MIME de uma seção específica do corpo das mensagens especificadas.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_num`
:   O número da mensagem

`section`
:   O número da parte. É uma sequência de inteiros delimitados por ponto que
    são índices de uma lista de partes do corpo conforme a especificação IMAP4.

`flags`
:   Uma máscara de bits de uma das seguintes constantes:

    - **`FT_UID`** - O parâmetro `message_num` é um UID
    - **`FT_PEEK`** - Não define o marcador \Seen flag se
      já não estiver definido
    - **`FT_INTERNAL`** - A string de retorno está em
      formato interno, não será canonizada para CRLF.

### Valor Retornado

Retorna os cabeçalhos MIME de uma seção específica do corpo das mensagens especificadas como uma
string de texto, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_fetchbody()](function.imap-fetchbody.md) - Busca uma seção específica do corpo da mensagem
- [imap\_fetchstructure()](function.imap-fetchstructure.md) - Lê a estrutura de uma mensagem específica
- [imap\_fetchheader()](function.imap-fetchheader.md) - Retorna o cabeçalho de uma mensagem

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
