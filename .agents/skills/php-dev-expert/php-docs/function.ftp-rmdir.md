# Remove um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-rmdir.php

---

# ftp\_rmdir

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_rmdir — Remove um diretório

### Descrição

function **ftp\_rmdir**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$directory`): [bool](language.types.boolean.md)

Remove o `directory` especificado no servidor FTP.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`directory`
:   O diretório a excluir. Isto deve set um caminho absoluto ou relativo a
    um diretório vazio.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo **ftp\_rmdir()****

```
<?php

$dir = 'www/';

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// tenta remover o diretório $dir
if (ftp_rmdir($ftp, $dir)) {
    echo "Sucesso ao remover $dir\n";
} else {
    echo "Hou um problema ao remover $dir\n";
}

ftp_close($ftp);

?>
```

### Veja também

- [ftp\_mkdir()](function.ftp-mkdir.md) - Cria um diretório

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
