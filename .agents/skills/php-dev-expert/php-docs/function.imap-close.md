# Fecha um fluxo IMAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-close.php

---

# imap\_close

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_close — Fecha um fluxo IMAP

### Descrição

function **imap\_close**([IMAP\Connection](class.imap-connection.md) `$imap`, [int](language.types.integer.md) `$flags` = 0): [true](language.types.singleton.md)

Fecha o fluxo IMAP.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`flags`
:   Se definido como **`CL_EXPUNGE`**, a função irá silenciosamente
    expurgar a caixa de correio antes de fechar, removendo todas as mensagens marcadas para
    exclusão. O mesmo pode ser obtido usando
    [imap\_expunge()](function.imap-expunge.md).

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `flags`
for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |
| 8.0.0 | Um [ValueError](class.valueerror.md) agora é lançado em valores de parâmetro `flags` inválidos. Anteriormente, um aviso era emitido e a função retornava **`false`**. |

### Veja também

- [imap\_open()](function.imap-open.md) - Abre um fluxo IMAP para uma caixa de correio

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
