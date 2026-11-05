# Retorna o tamanho do arquivo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-size.php

---

# ftp\_size

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_size — Retorna o tamanho do arquivo especificado

### Descrição

function **ftp\_size**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$filename`): [int](language.types.integer.md)

**ftp\_size()** retorna o tamanho do arquivo especificado,
em bytes.

> **Nota**:
>
> Nem todos os servidores suportam este recurso.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`filename`
:   O arquivo remoto.

### Valor Retornado

Retorna o tamanho do arquivo em caso de sucesso ou -1 em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_size()****

```
<?php

$file = 'algumArquivo.txt';

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// obtém o tamanho de $file
$res = ftp_size($ftp, $file);

if ($res != -1) {
    echo "Tamanho de $file é $res bytes";
} else {
    echo "Não foi possível obter o tamanho";
}

// fecha a conexão
ftp_close($ftp);

?>
```

### Veja também

- [ftp\_rawlist()](function.ftp-rawlist.md) - Retorna uma lista detalhada de arquivos no diretório fornecido

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
