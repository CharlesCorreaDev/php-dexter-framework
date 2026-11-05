# Fecha uma conexão FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-close.php

---

# ftp\_close

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ftp\_close — Fecha uma conexão FTP

### Descrição

function **ftp\_close**([FTP\Connection](class.ftp-connection.md) `$ftp`): [bool](language.types.boolean.md)

**ftp\_close()** fecha o identificador de conexão informado
e libera o recurso ([resource](language.types.resource.md)).

> **Nota**:
>
> Após a chamada a esta função, não se pode mais usar a conexão FTP e
> deve-se criar uma nova com [ftp\_connect()](function.ftp-connect.md).

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_close()****

```
<?php

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com nome de usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// mostra o diretório atual
echo ftp_pwd($ftp); // /

// fecha esta conexão
ftp_close($ftp);
?>
```

### Veja também

- [ftp\_connect()](function.ftp-connect.md) - Abre uma conexão FTP

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
