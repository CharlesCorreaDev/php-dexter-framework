# Verifica a caixa de correio atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-check.php

---

# imap\_check

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_check — Verifica a caixa de correio atual

### Descrição

function **imap\_check**([IMAP\Connection](class.imap-connection.md) `$imap`): [stdClass](class.stdclass.md)|[false](language.types.singleton.md)

Verifica informações sobre a caixa de correio atual.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

### Valor Retornado

Retorna as informações em um objeto com as seguintes propriedades:

- **`Date`** - horário atual do sistema formatado de acordo com [» RFC2822](https://datatracker.ietf.org/doc/html/rfc2822)
- **`Driver`** - protocolo usado para acessar esta caixa de correio:
  POP3, IMAP, NNTP
- **`Mailbox`** - o nome da caixa de correio
- **`Nmsgs`** - número de mensagens na caixa de correio
- **`Recent`** - número de mensagens recentes na caixa de correio

Retorna **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_check()****

```
<?php

$imap = imap_check($imap_stream);
var_dump($imap);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)(5) {
  ["Date"]=>
  string(37) "Wed, 10 Dec 2003 17:56:54 +0100 (CET)"
  ["Driver"]=>
  string(4) "imap"
  ["Mailbox"]=>
  string(54)
  "{www.example.com:143/imap/user="foo@example.com"}INBOX"
  ["Nmsgs"]=>
  int(1)
  ["Recent"]=>
  int(0)
}
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
