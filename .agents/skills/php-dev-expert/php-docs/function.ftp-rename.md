# Renomeia um arquivo ou um diretório no servidor FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-rename.php

---

# ftp\_rename

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_rename — Renomeia um arquivo ou um diretório no servidor FTP

### Descrição

function **ftp\_rename**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [bool](language.types.boolean.md)

**ftp\_rename()** renomeia um arquivo ou diretório no
servidor FTP.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`from`
:   O nome atual do arquivo/diretório.

`to`
:   O novo nome para o qual se deseja renomear.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. Em caso de falha (como em tentativa de renomear um arquivo que
não existe), um erro de nível **`E_WARNING`** será emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_rename()****

```
<?php
$old_file = 'algumArquivo.txt.bak';
$new_file = 'algumArquivo.txt';

// Configura uma conexão básica
$ftp = ftp_connect($ftp_server);

// Login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// Tenta renomear $old_file para $new_file
if (ftp_rename($ftp, $old_file, $new_file)) {
    echo "Sucesso ao renomear $old_file para $new_file\n";
} else {
    echo "Houve um problema ao renomear $old_file para $new_file\n";
}

// Fecha a conexão
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
