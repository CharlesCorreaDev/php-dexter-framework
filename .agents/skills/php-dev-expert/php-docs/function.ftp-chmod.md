# Define as permissões de um arquivo via FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-chmod.php

---

# ftp\_chmod

(PHP 5, PHP 7, PHP 8)

ftp\_chmod — Define as permissões de um arquivo via FTP

### Descrição

function **ftp\_chmod**([FTP\Connection](class.ftp-connection.md) `$ftp`, [int](language.types.integer.md) `$permissions`, [string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estabelece as permissões para o arquivo remoto especificado
para `permissions`.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`permissions`
:   As novas permissões, informadas em valor *octal*.

`filename`
:   O arquivo remoto.

### Valor Retornado

Retorna as novas permissões em caso de sucesso ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_chmod()****

```
<?php
$file = 'public_html/index.php';

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com nome de usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// tenta usar o chmod em $file para 644
if (ftp_chmod($ftp, 0644, $file) !== false) {
    echo "Foram mudadas as permissões do arquivo $file para 644\n";
} else {
    echo "Não foi possível usar o chmod no arquivo $file\n";
}

// fecha a conexão
ftp_close($ftp);
?>
```

### Veja também

- [chmod()](function.chmod.md) - Modifica as permissões do arquivo

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
