# Verifica se o fluxo IMAP ainda está ativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-ping.php

---

# imap\_ping

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_ping — Verifica se o fluxo IMAP ainda está ativo

### Descrição

function **imap\_ping**([IMAP\Connection](class.imap-connection.md) `$imap`): [bool](language.types.boolean.md)

**imap\_ping()** faz ping no fluxo para ver se ele ainda está
ativo. Ele pode descobrir novos e-mails; este é o método preferido para uma
"verificação de novos e-mails" periódica, bem como um "monitoramento de atividade" para servidores que
têm tempo limite de inatividade.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

### Valor Retornado

Retorna **`true`** se o fluxo ainda estiver ativo, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_ping()****

```
<?php

$imap = imap_open("{imap.example.org}", "mailadmin", "password");

// depois de esperar um pouco
if (!imap_ping($imap)) {
    // faz algumas coisas para se reconectar
}

?>
```

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
