# Exclui um arquivo no servidor FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-delete.php

---

# ftp\_delete

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_delete — Exclui um arquivo no servidor FTP

### Descrição

function **ftp\_delete**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

**ftp\_delete()** apaga o arquivo especificado por
`filename` do servidor FTP.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`filename`
:   O arquivo a ser excluído.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_delete()****

```
<?php
$file = 'public_html/old.txt';

// Define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com nome de usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// tenta excluir $file
if (ftp_delete($ftp, $file)) {
    echo "O arquivo $file foi excluído\n";
} else {
    echo "Não foi possível excluir $file\n";
}

// fecha a conexão
ftp_close($ftp);
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
