# Continua a receber/enviar um arquivo (sem bloquear)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-nb-continue.php

---

# ftp\_nb\_continue

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

ftp\_nb\_continue — Continua a receber/enviar um arquivo (sem bloquear)

### Descrição

function **ftp\_nb\_continue**([FTP\Connection](class.ftp-connection.md) `$ftp`): [int](language.types.integer.md)

Continua a receber/enviar um arquivo sem bloquear.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

### Valor Retornado

Retorna **`FTP_FAILED`**, **`FTP_FINISHED`**
ou **`FTP_MOREDATA`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_nb\_continue()****

```
<?php

// Inicia o recebimento
$ret = ftp_nb_get($ftp, "test", "README", FTP_BINARY);
while ($ret == FTP_MOREDATA) {

    // Continua o recebimento...
    $ret = ftp_nb_continue($ftp);
}
if ($ret != FTP_FINISHED) {
    echo "Houve um erro no recebimento do arquivo...";
    exit(1);
}
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
