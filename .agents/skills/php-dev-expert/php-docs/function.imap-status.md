# Retorna informações de status sobre uma caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-status.php

---

# imap\_status

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_status — Retorna informações de status sobre uma caixa de correio

### Descrição

function **imap\_status**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$mailbox`, [int](language.types.integer.md) `$flags`): [stdClass](class.stdclass.md)|[false](language.types.singleton.md)

Obtém informações de status sobre a caixa de correio informada em `mailbox`.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`mailbox`
:   O nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`flags`
:   As opções válidas são:

    - **`SA_MESSAGES`** - define $status->messages para o
      número de mensagens na caixa de correio
    - **`SA_RECENT`** - define $status->recent para o número
      de mensagens recentes na caixa de correio
    - **`SA_UNSEEN`** - define $status->unseen para o número
      de mensagens não vistas (novas) na caixa de correio
    - **`SA_UIDNEXT`** - define $status->uidnext para o próximo
      UID a ser usado na caixa de correio
    - **`SA_UIDVALIDITY`** - define $status->uidvalidity para uma
      constante que altera quando os UIDs para a caixa de correio podem não mais ser
      válidos
    - **`SA_ALL`** - define todas as opções acima

### Valor Retornado

Esta função retorna um objeto contendo informações de status, ou **`false`** em caso de falha.
O objeto tem as seguintes propriedades: `messages`,
`recent`, `unseen`,
`uidnext` e `uidvalidity`.

`flags` também é definido, o qual contém uma máscara de bits que pode
ser verificada em relação a qualquer uma das constantes acima.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_status()****

```
<?php
$mbox = imap_open("{imap.example.com}", "username", "password", OP_HALFOPEN)
      or die("Não foi possível conectar: " . imap_last_error());

$status = imap_status($mbox, "{imap.example.org}INBOX", SA_ALL);
if ($status) {
  echo "Mensagens:       " . $status->messages    . "<br />\n";
  echo "Recentes:        " . $status->recent      . "<br />\n";
  echo "Não vistas:      " . $status->unseen      . "<br />\n";
  echo "Próximo UID:     " . $status->uidnext     . "<br />\n";
  echo "Validade do UID: " . $status->uidvalidity . "<br />\n";
} else {
  echo "imap_status falhou: " . imap_last_error() . "\n";
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
