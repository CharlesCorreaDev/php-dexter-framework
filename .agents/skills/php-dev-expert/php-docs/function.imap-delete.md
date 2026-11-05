# Marca uma mensagem para exclusão da caixa de correio atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-delete.php

---

# imap\_delete

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_delete — Marca uma mensagem para exclusão da caixa de correio atual

### Descrição

function **imap\_delete**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$message_nums`, [int](language.types.integer.md) `$flags` = 0): [true](language.types.singleton.md)

Marca mensagens listadas em `message_nums` para exclusão.
Mensagens marcadas para exclusão permanecerão na caixa de correio até que
[imap\_expunge()](function.imap-expunge.md) seja chamada ou
[imap\_close()](function.imap-close.md) seja chamada com o parâmetro opcional
**`CL_EXPUNGE`**.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_nums`
:   Uma [string](language.types.string.md) representando uma ou mais mensagens no formato de sequência estilo IMAP4
    (`"n"`, `"n:m"` ou uma combinação destes
    delimitados por vírgulas).

`flags`
:   Pode ser definida a **`FT_UID`** que informa à função
    para tratar o argumento `message_nums` como um
    `UID`.

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

### Examples

**Exemplo #1 Exemplo de **imap\_delete()****

```
<?php

$mbox = imap_open("{imap.example.org}INBOX", "username", "password")
    or die("Não foi possível conectar: " . imap_last_error());

$check = imap_mailboxmsginfo($mbox);
echo "Mensagens antes da exclusão: " . $check->Nmsgs . "<br />\n";

imap_delete($mbox, 1);

$check = imap_mailboxmsginfo($mbox);
echo "Mensagens após a exclusão: " . $check->Nmsgs . "<br />\n";

imap_expunge($mbox);

$check = imap_mailboxmsginfo($mbox);
echo "Mensagens após a expurga: " . $check->Nmsgs . "<br />\n";

imap_close($mbox);
?>
```

### Notas

> **Nota**:
>
> Caixas de correio IMAP podem não ter seus sinalizadores de mensagem salvos entre conexões,
> então [imap\_expunge()](function.imap-expunge.md) deve ser chamada durante a mesma
> conexão para garantir que as mensagens marcadas para exclusão
> sejam realmente eliminadas.

### Veja também

- [imap\_undelete()](function.imap-undelete.md) - Desmarca a mensagem que está marcada como excluída
- [imap\_expunge()](function.imap-expunge.md) - Exclui todas as mensagens marcadas para exclusão
- [imap\_close()](function.imap-close.md) - Fecha um fluxo IMAP

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
