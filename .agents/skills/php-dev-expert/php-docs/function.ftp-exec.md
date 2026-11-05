# Solicita a execução de um comando no servidor FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-exec.php

---

# ftp\_exec

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

ftp\_exec — Solicita a execução de um comando no servidor FTP

### Descrição

function **ftp\_exec**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$command`): [bool](language.types.boolean.md)

Envia uma solicitação de comando SITE EXEC especificada no parâmetro `command`
para o servidor FTP.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`command`
:   O comando a executar.

### Valor Retornado

Retorna **`true`** se o comando for bem sucedido (o servidor enviou o código de resposta:
`200`); caso contrário retorna **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_exec()****

```
<?php

// inicialização de variável
$command = 'ls -al >files.txt';

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// executa o comando
if (ftp_exec($ftp, $command)) {
    echo "$command executado com sucesso\n";
} else {
    echo "Não foi possível executar $command\n";
}

// fecha a conexão
ftp_close($ftp);

?>
```

### Veja também

- [ftp\_raw()](function.ftp-raw.md) - Envia um comando arbritário a um servidor FTP

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
