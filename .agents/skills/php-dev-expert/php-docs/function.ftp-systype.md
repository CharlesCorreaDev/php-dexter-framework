# Retorna o identificador de tipo de sistema do servidor FTP remoto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-systype.php

---

# ftp\_systype

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_systype — Retorna o identificador de tipo de sistema do servidor FTP remoto

### Descrição

function **ftp\_systype**([FTP\Connection](class.ftp-connection.md) `$ftp`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o identificador de tipo de sistema do servidor FTP remoto.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

### Valor Retornado

Retorna o tipo do sistema remoto ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_systype()****

```
<?php

// conexão ftp
$ftp = ftp_connect('ftp.example.com');
ftp_login($ftp, 'user', 'password');

// obtém o tipo do sistema
if ($type = ftp_systype($ftp)) {
    echo "Example.com é do tipo $type\n";
} else {
    echo "Não foi possível obter o tipo do sistema";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Example.com é do tipo UNIX
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
