# Cria um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-mkdir.php

---

# ftp\_mkdir

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_mkdir — Cria um diretório

### Descrição

function **ftp\_mkdir**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$directory`): [string](language.types.string.md)|[false](language.types.singleton.md)

Cria o diretório especificado pelo parâmetro `directory` no servidor FTP.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`directory`
:   O nome do diretório que será criado.

### Valor Retornado

Retorna o nome do diretório recém criado em caso de sucesso ou **`false`** em caso de erro.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se o diretório
já existir ou se as permissões relevantes impedem a criação do diretório.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_mkdir()****

```
<?php

$dir = 'www';

// define uma conexão básica
$ftp = ftp_connect($ftp_server);

// login com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// tenta criar o diretório $dir
if (ftp_mkdir($ftp, $dir)) {
    echo "Sucesso na criação de $dir\n";
} else {
    echo "Houve um problema ao tentar criar $dir\n";
}

// fecha a conexão
ftp_close($ftp);
?>
```

### Veja também

- [ftp\_rmdir()](function.ftp-rmdir.md) - Remove um diretório

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
