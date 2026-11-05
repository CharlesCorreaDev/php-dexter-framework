# Lê o cabeçalho da mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-headerinfo.php

---

# imap\_headerinfo

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_headerinfo — Lê o cabeçalho da mensagem

### Descrição

function **imap\_headerinfo**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [int](language.types.integer.md) `$message_num`,  
    [int](language.types.integer.md) `$from_length` = 0,  
    [int](language.types.integer.md) `$subject_length` = 0  
): [stdClass](class.stdclass.md)|[false](language.types.singleton.md)

Obtém informações sobre o número da mensagem fornecida lendo seus cabeçalhos.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_num`
:   O número da mensagem

`from_length`
:   Número de caracteres para a propriedade `fetchfrom`.
    Deve ser maior ou igual a zero.

`subject_length`
:   Número de caracteres para a propriedade `fetchsubject`
    Deve ser maior ou igual a zero.

### Valor Retornado

Retorna **`false`** em caso de erro ou, em caso de sucesso, as informações em um objeto com as seguintes propriedades:

- toaddress - linha completa "to:", com até 1024 caracteres
- to - um array de objetos da linha "To:", com as seguintes
  propriedades: `personal`, `adl`,
  `mailbox` e `host`
- fromaddress - linha completa "from:", com até 1024 caracteres
- from - um array de objetos da linha "From:", com as seguintes
  propriedades: `personal`, `adl`,
  `mailbox` e `host`
- ccaddress - linha completa "cc:", com até 1024 caracteres
- cc - um array de objetos da linha "Cc:", com as seguintes
  propriedades: `personal`, `adl`,
  `mailbox` e `host`
- bccaddress - linha completa "bcc:", com até 1024 caracteres
- bcc - um array de objetos da linha "Bcc:", com as seguintes
  propriedades: `personal`, `adl`,
  `mailbox` e `host`
- reply\_toaddress - linha completa "Reply-To:", com até 1024 caracteres
- reply\_to - um array de objetos da linha "Reply-To:", com as seguintes
  propriedades: `personal`, `adl`,
  `mailbox` e `host`
- senderaddress - linha completa "sender:", com até 1024 caracteres
- sender - um array de objetos da linha "Sender:", com as seguintes
  propriedades: `personal`, `adl`,
  `mailbox` e `host`
- return\_pathaddress - linha completa "Return-Path:", com até 1024 caracteres
- return\_path - um array de objetos da linha "Return-Path:", com as
  seguintes propriedades: `personal`,
  `adl`, `mailbox` e
  `host`
- remail -
- date - A data da mensagem conforme encontrada nos cabeçalhos
- Date - O mesmo que "date"
- subject - O assunto da mensagem
- Subject - O mesmo que "subject"
- in\_reply\_to -
- message\_id -
- newsgroups -
- followup\_to -
- references -
- Recent - `R` se recente e visto, `N`
  se recente e não visto, ' ' se não for recente.
- Unseen - `U` se não visto E não recente, ' ' se visto
  OU não visto e recente
- Flagged - `F` se marcada, ' ' se não marcada
- Answered - `A` se respondida, ' ' se não respondida
- Deleted - `D` se excluída, ' ' se não excluída
- Draft - `X` se for rascunho, ' ' se não for rascunho
- Msgno - O número da mensagem
- MailDate -
- Size - O tamanho da mensagem
- udate - data da mensagem de correio em timestamp Unix
- fetchfrom - linha "from:" formatada para caber em `from_length`
  caracteres
- fetchsubject - linha "subject:" formatada para caber em
  `subject_length` caaracteres

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |
| 8.0.0 | O parâmetro `defaulthost` não utilizado foi removido. |

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
