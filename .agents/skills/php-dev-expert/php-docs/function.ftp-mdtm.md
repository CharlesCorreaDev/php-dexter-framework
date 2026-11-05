# Retorna o horário da última modificação do arquivo informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-mdtm.php

---

# ftp\_mdtm

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_mdtm — Retorna o horário da última modificação do arquivo informado

### Descrição

function **ftp\_mdtm**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$filename`): [int](language.types.integer.md)

**ftp\_mdtm()** retorna o horário da última modificação
de um arquivo remoto.

> **Nota**:
>
> Nem todos os servidores suportam este recurso!

> **Nota**:
>
> **ftp\_mdtm()** não funciona com diretórios.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`filename`
:   O arquivo do qual será extraído o horário da última modificação.

### Valor Retornado

Retorna o horário da última modificação como um timestamp Unix *local* em caso de
sucesso, ou -1 em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_mdtm()****

```
<?php

$file = 'algumArquivo.txt';

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// obtém o horário da última modificação
$buff = ftp_mdtm($ftp, $file);

if ($buff != -1) {
    // algumArquivo.txt foi modificado em: March 26 2003 14:16:41.
    echo "$file foi modificado em : " . date("F d Y H:i:s.", $buff);
} else {
    echo "Não foi possível obter mdtime";
}

// fecha a conexão
ftp_close($ftp);

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
