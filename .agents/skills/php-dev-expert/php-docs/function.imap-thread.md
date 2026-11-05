# Retorna uma árvore de mensagens encadeadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-thread.php

---

# imap\_thread

(PHP 4 >= 4.0.7, PHP 5, PHP 7, PHP 8)

imap\_thread — Retorna uma árvore de mensagens encadeadas

### Descrição

function **imap\_thread**([IMAP\Connection](class.imap-connection.md) `$imap`, [int](language.types.integer.md) `$flags` = **`SE_FREE`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém uma árvore de mensagens encadeadas.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`flags`

### Valor Retornado

**imap\_thread()** retorna um array associativo contendo
uma árvore de mensagens encadeadas por `REFERENCES`, ou **`false`**
em caso de erro.

Cada mensagem na caixa de correio atual será representada por três entradas
no array resultante:

- $thread["XX.num"] - número da mensagem atual
- $thread["XX.next"]
- $thread["XX.branch"]

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_thread()****

```
<?php

// Aqui estamos exibindo os tópicos de um grupo de notícias, em HTML

$nntp = imap_open('{news.example.com:119/nntp}some.newsgroup', '', '');
$threads = imap_thread($nntp);

foreach ($threads as $key => $val) {
  $tree = explode('.', $key);
  if ($tree[1] == 'num') {
    $header = imap_headerinfo($nntp, $val);
    echo "<ul>\n\t<li>" . $header->fromaddress . "\n";
  } elseif ($tree[1] == 'branch') {
    echo "\t</li>\n</ul>\n";
  }
}

imap_close($nntp);

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
