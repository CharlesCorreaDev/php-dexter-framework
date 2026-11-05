# Cria uma nova caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-createmailbox.php

---

# imap\_createmailbox

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_createmailbox — Cria uma nova caixa de correio

### Descrição

function **imap\_createmailbox**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$mailbox`): [bool](language.types.boolean.md)

Cria uma nova caixa de correio especificada por `mailbox`.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`mailbox`
:   O nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações. Nomes contendo caracteres internacionais devem ser
    codificados por [imap\_utf7\_encode()](function.imap-utf7-encode.md)

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_createmailbox()****

```
<?php
$mbox = imap_open("{imap.example.org}", "username", "password", OP_HALFOPEN)
     or die("Não foi possível conectar: " . imap_last_error());

$name1 = "phpnewbox";
$name2 = imap_utf7_encode("phpnewböx"); // phpnewb&w7Y-x

$newname = $name1;

echo "O novo nome será '$name1'<br />\n";

// Agora criaremos uma nova caixa de correio "phptestbox" na pasta de caixa de entrada,
// verificaremos seu status após a criação e finalmente a
// removeremos para restaurar a caixa de entrada ao seu estado inicial

if (@imap_createmailbox($mbox, imap_utf7_encode("{imap.example.org}INBOX.$newname"))) {
    $status = @imap_status($mbox, "{imap.example.org}INBOX.$newname", SA_ALL);
    if ($status) {
        echo "Sua caixa de correio '$name1' tem o seguinte status:<br />\n";
        echo "Messages:   " . $status->messages    . "<br />\n";
        echo "Recent:     " . $status->recent      . "<br />\n";
        echo "Unseen:     " . $status->unseen      . "<br />\n";
        echo "UIDnext:    " . $status->uidnext     . "<br />\n";
        echo "UIDvalidity:" . $status->uidvalidity . "<br />\n";

        if (imap_renamemailbox($mbox, "{imap.example.org}INBOX.$newname", "{imap.example.org}INBOX.$name2")) {
            echo "Renomeada a nova caixa de correio de '$name1' para '$name2'<br />\n";
            $newname = $name2;
        } else {
            echo "imap_renamemailbox na nova caixa de correio falhou: " . imap_last_error() . "<br />\n";
        }
    } else {
        echo "imap_status na nova caixa de correio falhou: " . imap_last_error() . "<br />\n";
    }

    if (@imap_deletemailbox($mbox, "{imap.example.org}INBOX.$newname")) {
        echo "Nova caixa de correio removida para restaurar o status inicial<br />\n";
    } else {
        echo "imap_deletemailbox na nova caixa de correio falhou: " . implode("<br />\n", imap_errors()) . "<br />\n";
    }

} else {
    echo "Não foi possível criar a nova caixa de correio: " . implode("<br />\n", imap_errors()) . "<br />\n";
}

imap_close($mbox);
?>
```

### Veja também

- [imap\_renamemailbox()](function.imap-renamemailbox.md) - Renomeia uma caixa de correio antiga para uma nova caixa de correio
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
