# Retorna uma lista de arquivos em um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-nlist.php

---

# ftp\_nlist

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_nlist — Retorna uma lista de arquivos em um diretório

### Descrição

function **ftp\_nlist**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$directory`): [array](language.types.array.md)|[false](language.types.singleton.md)

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`directory`
:   O diretório a ser listado. Este parâmetro também pode incluir argumentos, ex.:
    `ftp_nlist($ftp, "-la /your/dir");`.
    Note que este parâmetro não é escapado, portanto pode haver alguns problemas
    com nomes de arquivo contendo espaços e outros caracteres.

### Valor Retornado

Retorna um array com os nomes dos arquivos do diretório especificado em caso
de sucesso, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_nlist()****

```
<?php

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// obtém o conteúdo do diretório atual
$contents = ftp_nlist($ftp, ".");

// mostra $contents
var_dump($contents);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  string(11) "public_html"
  [1]=>
  string(10) "public_ftp"
  [2]=>
  string(3) "www"
```

### Veja também

- [ftp\_rawlist()](function.ftp-rawlist.md) - Retorna uma lista detalhada de arquivos no diretório fornecido
- [ftp\_mlsd()](function.ftp-mlsd.md) - Retorna uma lista de arquivos no diretório fornecido

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
