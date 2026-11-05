# Retorna cabeçalhos para todas as mensagens em uma caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-headers.php

---

# imap\_headers

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_headers — Retorna cabeçalhos para todas as mensagens em uma caixa de correio

### Descrição

function **imap\_headers**([IMAP\Connection](class.imap-connection.md) `$imap`): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna cabeçalhos para todas as mensagens em uma caixa de correio.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

### Valor Retornado

Retorna um array de strings formatado com informações de cabeçalho. Um
elemento por mensagem.
Retorna **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

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
