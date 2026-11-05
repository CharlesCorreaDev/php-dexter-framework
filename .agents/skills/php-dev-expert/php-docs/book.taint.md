# Taint

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.taint.php

---

# Taint

# Introdução

Taint é uma extensão usada para detectar códigos XSS (strings
contaminadas).
E também pode ser usada para identificar vulnerabilidades de
injeção de SQL, injeção de shell, etc.

Quando o taint está habilitado, se for passada uma string contaminada (proveniente de [$\_GET](reserved.variables.get.md),
[$\_POST](reserved.variables.post.md) ou [$\_COOKIE](reserved.variables.cookies.md)) para algumas funções, o taint irá avisar sobre isso.

**Exemplo #1 Exemplo de [Taint()](function.taint.md)**

```
<?php
$a = trim($_GET['a']);

$file_name = '/tmp' .  $a;
$output    = "Welcome, {$a} !!!";
$var       = "output";
$sql       = "Select *  from " . $a;
$sql      .= "ooxx";

echo $output;

print $$var;

include $file_name;

mysql_query($sql);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Warning: main() [function.echo]: Attempt to echo a string that might be tainted

Warning: main() [function.echo]: Attempt to print a string that might be tainted

Warning: include() [function.include]: File path contains data that might be tainted

Warning: mysql_query() [function.mysql-query]: SQL statement contains data that might be tainted
```

- [Instalação/Configuração](taint.setup.md)
  - [Instalação](taint.installation.md)
  - [Configurações de Execução](taint.configuration.md)
- [Mais detalhes](taint.detail.md)
  - [Funções e instruções que espalharão a marca contaminada de uma
    string contaminada](taint.detail.basic.md)
  - [Funções e instruções que verificarão strings contaminadas](taint.detail.taint.md)
  - [Funções que descontaminam a string contaminada](taint.detail.untaint.md)
- [Funções de Taint](ref.taint.md)
  - [is\_tainted](function.is-tainted.md) — Verifica se uma string está contaminada
  - [taint](function.taint.md) — Contamina uma string
  - [untaint](function.untaint.md) — Descontamina strings

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
