# Abre uma conexão FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-connect.php

---

# ftp\_connect

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_connect — Abre uma conexão FTP

### Descrição

function **ftp\_connect**([string](language.types.string.md) `$hostname`, [int](language.types.integer.md) `$port` = 21, [int](language.types.integer.md) `$timeout` = 90): [FTP\Connection](class.ftp-connection.md)|[false](language.types.singleton.md)

**ftp\_connect()** abre uma conexão FTP
para o servidor especificado em `hostname`.

### Parâmetros

`hostname`
:   O endereço do servidor FTP. Este parâmetro não deve ter barras
    finais e não deve ser prefixado com `ftp://`.

`port`
:   Este parâmetro especifica uma porta alternativa para conexão. Se for
    omitido ou definido como zero, a porta FTP padrão, 21, será usada.

`timeout`
:   Este parâmetro especifica o tempo limite em segundos para todas as operações de rede subsequentes.
    Se omitido, o valor padrão será 90 segundos. O tempo limite pode ser alterado e
    consultado a qualquer momento com [ftp\_set\_option()](function.ftp-set-option.md) e
    [ftp\_get\_option()](function.ftp-get-option.md).

### Valor Retornado

Retorna uma instância de [FTP\Connection](class.ftp-connection.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Retorna uma instância [FTP\Connection](class.ftp-connection.md) agora; anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_connect()****

```
<?php

$ftp_server = "ftp.example.com";

// configura uma conexão ou sai
$ftp = ftp_connect($ftp_server) or die("Não foi possível conectar ao $ftp_server");

?>
```

### Veja também

- [ftp\_close()](function.ftp-close.md) - Fecha uma conexão FTP
- [ftp\_ssl\_connect()](function.ftp-ssl-connect.md) - Abre uma conexão SSL-FTP segura

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
