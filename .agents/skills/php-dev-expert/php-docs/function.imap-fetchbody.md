# Busca uma seção específica do corpo da mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-fetchbody.php

---

# imap\_fetchbody

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_fetchbody — Busca uma seção específica do corpo da mensagem

### Descrição

function **imap\_fetchbody**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [int](language.types.integer.md) `$message_num`,  
    [string](language.types.string.md) `$section`,  
    [int](language.types.integer.md) `$flags` = 0  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Busca uma seção específica do corpo das mensagens especificadas.
Partes do corpo não são decodificadas por esta função.

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

Retorna uma seção específica do corpo das mensagens informadas como uma
string de texto, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_savebody()](function.imap-savebody.md) - Salva uma seção específica do corpo em um arquivo
- [imap\_fetchstructure()](function.imap-fetchstructure.md) - Lê a estrutura de uma mensagem específica

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
