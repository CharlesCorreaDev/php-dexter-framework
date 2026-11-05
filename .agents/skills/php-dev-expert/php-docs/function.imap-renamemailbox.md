# Renomeia uma caixa de correio antiga para uma nova caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-renamemailbox.php

---

# imap\_renamemailbox

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_renamemailbox — Renomeia uma caixa de correio antiga para uma nova caixa de correio

### Descrição

function **imap\_renamemailbox**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [bool](language.types.boolean.md)

Esta função renomeia uma caixa de correio antiga para uma nova caixa de correio (veja
[imap\_open()](function.imap-open.md) para o formato de
nomes para `mbox`).

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`from`
:   O antigo nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`to`
:   O novo nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_createmailbox()](function.imap-createmailbox.md) - Cria uma nova caixa de correio
- [imap\_deletemailbox()](function.imap-deletemailbox.md) - Exclui uma caixa de correio

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
