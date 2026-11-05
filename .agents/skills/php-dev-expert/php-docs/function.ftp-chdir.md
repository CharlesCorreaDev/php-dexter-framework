# Muda o diretório atual em um servidor FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-chdir.php

---

# ftp\_chdir

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_chdir — Muda o diretório atual em um servidor FTP

### Descrição

function **ftp\_chdir**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$directory`): [bool](language.types.boolean.md)

Muda o diretório atual para o especificado.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`directory`
:   O diretório de destino.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Se houver falha ao mudar o diretório, o PHP também irá disparar um alerta.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_chdir()****

```
<?php

// estabelece uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com o nome de usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// confere a conexão
if ((!$ftp) || (!$login_result)) {
    die("A conexão FTP falhou!");
}

echo "Diretório atual: " . ftp_pwd($ftp) . "\n";

// tenta mudar para algumDiretorio
if (ftp_chdir($ftp, "algumDiretorio")) {
    echo "O diretório atual agora é: " . ftp_pwd($ftp) . "\n";
} else {
    echo "Não foi possível mudar o diretório\n";
}

// fecha a conexão
ftp_close($ftp);
?>
```

### Veja também

- [ftp\_cdup()](function.ftp-cdup.md) - Muda para o diretório acima
- [ftp\_pwd()](function.ftp-pwd.md) - Retorna o nome do diretório atual

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
