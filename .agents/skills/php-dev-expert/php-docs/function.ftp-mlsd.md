# Retorna uma lista de arquivos no diretório fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-mlsd.php

---

# ftp\_mlsd

(PHP 7 >= 7.2.0, PHP 8)

ftp\_mlsd — Retorna uma lista de arquivos no diretório fornecido

### Descrição

function **ftp\_mlsd**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$directory`): [array](language.types.array.md)|[false](language.types.singleton.md)

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`directory`
:   O diretório a ser listado.

### Valor Retornado

Retorna um array de arrays com informações de arquivo do diretório especificado em caso de sucesso ou
**`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_mlsd()****

```
<?php

// configura conexão básica
$ftp = ftp_connect($ftp_server);

// registra com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// obtém conteúdo do diretório atual
$contents = ftp_mlsd($ftp, ".");

// exibe $contents
var_dump($contents);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(5) {
  [0]=>
  array(8) {
    ["name"]=>
    string(1) "."
    ["modify"]=>
    string(14) "20171212154511"
    ["perm"]=>
    string(7) "flcdmpe"
    ["type"]=>
    string(4) "cdir"
    ["unique"]=>
    string(11) "811U5740002"
    ["UNIX.group"]=>
    string(2) "33"
    ["UNIX.mode"]=>
    string(4) "0755"
    ["UNIX.owner"]=>
    string(2) "33"
  }
  [1]=>
  array(8) {
    ["name"]=>
    string(2) ".."
    ["modify"]=>
    string(14) "20171212154511"
    ["perm"]=>
    string(7) "flcdmpe"
    ["type"]=>
    string(4) "pdir"
    ["unique"]=>
    string(11) "811U5740002"
    ["UNIX.group"]=>
    string(2) "33"
    ["UNIX.mode"]=>
    string(4) "0755"
    ["UNIX.owner"]=>
    string(2) "33"
  }
  [2]=>
  array(8) {
    ["name"]=>
    string(11) "public_html"
    ["modify"]=>
    string(14) "20171211171525"
    ["perm"]=>
    string(7) "flcdmpe"
    ["type"]=>
    string(3) "dir"
    ["unique"]=>
    string(11) "811U5740525"
    ["UNIX.group"]=>
    string(2) "33"
    ["UNIX.mode"]=>
    string(4) "0755"
    ["UNIX.owner"]=>
    string(2) "33"
  }
  [3]=>
  array(8) {
    ["name"]=>
    string(10) "public_ftp"
    ["modify"]=>
    string(14) "20171211174536"
    ["perm"]=>
    string(7) "flcdmpe"
    ["type"]=>
    string(3) "dir"
    ["unique"]=>
    string(11) "811U57405EE"
    ["UNIX.group"]=>
    string(2) "33"
    ["UNIX.mode"]=>
    string(4) "0755"
    ["UNIX.owner"]=>
    string(2) "33"
  }
  [4]=>
  array(8) {
    ["name"]=>
    string(3) "www"
    ["modify"]=>
    string(14) "www"
    ["perm"]=>
    string(7) "flcdmpe"
    ["type"]=>
    string(3) "dir"
    ["unique"]=>
    string(11) "811U5740780"
    ["UNIX.group"]=>
    string(2) "33"
    ["UNIX.mode"]=>
    string(4) "0755"
    ["UNIX.owner"]=>
    string(2) "33"
  }
}
```

### Veja também

- [ftp\_rawlist()](function.ftp-rawlist.md) - Retorna uma lista detalhada de arquivos no diretório fornecido
- [ftp\_nlist()](function.ftp-nlist.md) - Retorna uma lista de arquivos em um diretório

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
