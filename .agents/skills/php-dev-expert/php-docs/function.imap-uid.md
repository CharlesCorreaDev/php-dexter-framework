# Retorna o UID para o número de sequência da mensagem fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-uid.php

---

# imap\_uid

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_uid — Retorna o UID para o número de sequência da mensagem fornecida

### Descrição

function **imap\_uid**([IMAP\Connection](class.imap-connection.md) `$imap`, [int](language.types.integer.md) `$message_num`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Esta função retorna o UID para o número de sequência de mensagem
dado. Um UID é um identificador exclusivo que não mudará ao longo do
tempo, enquanto um número de sequência de mensagem pode mudar sempre que o
conteúdo da caixa de correio mudar.

Esta função é o inverso de [imap\_msgno()](function.imap-msgno.md).

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_num`
:   O número da mensagem.

### Valor Retornado

O UID da mensagem fornecida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Notas

> **Nota**:
>
> Esta função não é suportada por caixas de correio POP3.

### Veja também

- [imap\_msgno()](function.imap-msgno.md) - Obtém o número da sequência da mensagem para o UID fornecido

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
