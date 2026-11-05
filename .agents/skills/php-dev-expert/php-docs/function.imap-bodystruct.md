# Lê a estrutura de uma seção específica do corpo de uma mensagem específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-bodystruct.php

---

# imap\_bodystruct

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_bodystruct — Lê a estrutura de uma seção específica do corpo de uma mensagem específica

### Descrição

function **imap\_bodystruct**([IMAP\Connection](class.imap-connection.md) `$imap`, [int](language.types.integer.md) `$message_num`, [string](language.types.string.md) `$section`): [stdClass](class.stdclass.md)|[false](language.types.singleton.md)

Lê a estrutura de uma seção específica do corpo de uma mensagem específica.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_num`
:   O número da mensagem

`section`
:   A seção do corpo a ser lida

### Valor Retornado

Retorna as informações em um objeto, ou **`false`** em caso de falha.
Para uma descrição detalhada
da estrutura e propriedades do objeto, veja
[imap\_fetchstructure()](function.imap-fetchstructure.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

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
