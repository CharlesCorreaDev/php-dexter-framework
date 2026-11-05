# Abre uma conexão SSL-FTP segura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-ssl-connect.php

---

# ftp\_ssl\_connect

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

ftp\_ssl\_connect — Abre uma conexão SSL-FTP segura

### Descrição

function **ftp\_ssl\_connect**([string](language.types.string.md) `$hostname`, [int](language.types.integer.md) `$port` = 21, [int](language.types.integer.md) `$timeout` = 90): [FTP\Connection](class.ftp-connection.md)|[false](language.types.singleton.md)

**ftp\_ssl\_connect()** abre uma conexão SSL-FTP *explícita* com o
servidor informado em `hostname`. Isso implica que
**ftp\_ssl\_connect()** terá sucesso mesmo se o servidor não estiver
configurado para SSL-FTP. Somente quando a função [ftp\_login()](function.ftp-login.md) for chamada, o cliente enviará o
comando `AUTH FTP` apropriado, portanto [ftp\_login()](function.ftp-login.md) falhará.
A conexão estabelecida por **ftp\_ssl\_connect()** *não* fará
verificação de certificado de par.

> **Nota**:
> **Por que esta função pode não existir**  
>
> Antes do PHP 7.0.0, **ftp\_ssl\_connect()** só estava disponível se tanto
> o módulo FTP quanto o suporte [OpenSSL](ref.openssl.md)
> tivessem sido construídos estaticamente no PHP. Isso significa que no Windows esta
> função estava indefinida nas compilações oficiais do PHP. Para ter esta
> função disponível no Windows, foi necessário compilar binários PHP próprios.

> **Nota**:
>
> **ftp\_ssl\_connect()** não se destina ao uso com sFTP.
> Para usar sFTP com PHP, consulte [ssh2\_sftp()](function.ssh2-sftp.md).

### Parâmetros

`hostname`
:   O endereço do servidor FTP. Este parâmetro não deve ter barras
    finais e não deve ser prefixado com `ftp://`.

`port`
:   Este parâmetro especifica uma porta alternativa para conexão. Se for
    omitido ou definido como zero, a porta FTP padrão, 21, será usada.

`timeout`
:   Este parâmetro especifica o tempo limite para todas as operações de rede subsequentes.
    Se omitido, o valor padrão será 90 segundos. O tempo limite pode ser alterado e
    consultado a qualquer momento com [ftp\_set\_option()](function.ftp-set-option.md) e
    [ftp\_get\_option()](function.ftp-get-option.md).

### Valor Retornado

Retorna uma instância de [FTP\Connection](class.ftp-connection.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Retorna uma instância de [FTP\Connection](class.ftp-connection.md) agora; anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_ssl\_connect()****

```
<?php

// configura conexão SSL básica
$ftp = ftp_ssl_connect($ftp_server);

// registra com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

if (!$login_result) {
    // O PHP já teria gerado uma mensagem de nível E_WARNING neste caso
    die("não foi possível registrar");
}

echo ftp_pwd($ftp);

// fecha a conexão SSL
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
