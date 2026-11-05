# Obtém informações sobre a caixa de correio atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-mailboxmsginfo.php

---

# imap\_mailboxmsginfo

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_mailboxmsginfo — Obtém informações sobre a caixa de correio atual

### Descrição

function **imap\_mailboxmsginfo**([IMAP\Connection](class.imap-connection.md) `$imap`): [stdClass](class.stdclass.md)

Verifica o status atual da caixa de correio no servidor. É semelhante a
[imap\_status()](function.imap-status.md), mas também somará o tamanho de
todas as mensagens na caixa de correio, o que levará algum tempo adicional para
executar.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

### Valor Retornado

Retorna as informações em um objeto com as seguintes propriedades:

**Propriedades da caixa de correio**

|  |  |
| --- | --- |
| Date | data da última alteração (data/horário atual) |
| Driver | driver |
| Mailbox | nome da caixa de correio |
| Nmsgs | número de mensagens |
| Recent | número de mensagens recentes |
| Unread | número de mensagens não lidas |
| Deleted | número de mensagens excluídas |
| Size | tamanho da caixa de correio |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_mailboxmsginfo()****

```
<?php

$mbox = imap_open("{imap.example.org}INBOX", "username", "password")
      or die("Não foi possível conectar: " . imap_last_error());

$check = imap_mailboxmsginfo($mbox);

if ($check) {
    echo "Date: "     . $check->Date    . "<br />\n" ;
    echo "Driver: "   . $check->Driver  . "<br />\n" ;
    echo "Mailbox: "  . $check->Mailbox . "<br />\n" ;
    echo "Messages: " . $check->Nmsgs   . "<br />\n" ;
    echo "Recent: "   . $check->Recent  . "<br />\n" ;
    echo "Unread: "   . $check->Unread  . "<br />\n" ;
    echo "Deleted: "  . $check->Deleted . "<br />\n" ;
    echo "Size: "     . $check->Size    . "<br />\n" ;
} else {
    echo "imap_mailboxmsginfo() falhou: " . imap_last_error() . "<br />\n";
}

imap_close($mbox);

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
