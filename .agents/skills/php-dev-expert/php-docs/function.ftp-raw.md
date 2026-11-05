# Envia um comando arbritário a um servidor FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-raw.php

---

# ftp\_raw

(PHP 5, PHP 7, PHP 8)

ftp\_raw — Envia um comando arbritário a um servidor FTP

### Descrição

function **ftp\_raw**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$command`): [?](language.types.null.md)[array](language.types.array.md)

Envia um comando arbritário, especificado no parâmetro `command`, ao servidor FTP.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`command`
:   O comando a executar.

### Valor Retornado

Retorna a resposta do servidor como um array de strings, ou **`null`** em caso de falha.
Nenhuma interpretação é realizada na string de resposta, e
**ftp\_raw()** não determina se o comando foi bem sucedido .

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Usando **ftp\_raw()** para fazer o login em um servidor FTP manualmente.**

```
<?php
$ftp = ftp_connect("ftp.example.com");

/* Isto é o mesmo que:
   ftp_login($ftp, "joeblow", "secret"); */
ftp_raw($ftp, "USER joeblow");
ftp_raw($ftp, "PASS secret");
?>
```

### Veja também

- [ftp\_exec()](function.ftp-exec.md) - Solicita a execução de um comando no servidor FTP

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
