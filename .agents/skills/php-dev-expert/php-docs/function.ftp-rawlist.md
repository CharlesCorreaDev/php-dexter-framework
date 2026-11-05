# Retorna uma lista detalhada de arquivos no diretório fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftp-rawlist.php

---

# ftp\_rawlist

(PHP 4, PHP 5, PHP 7, PHP 8)

ftp\_rawlist — Retorna uma lista detalhada de arquivos no diretório fornecido

### Descrição

function **ftp\_rawlist**([FTP\Connection](class.ftp-connection.md) `$ftp`, [string](language.types.string.md) `$directory`, [bool](language.types.boolean.md) `$recursive` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**ftp\_rawlist()** executa o comando FTP
**LIST** e retorna o resultado como um array.

### Parâmetros

`ftp`
:   Uma instância de [FTP\Connection](class.ftp-connection.md).

`directory`
:   O caminho do diretório. Pode incluir argumentos para o comando
    **LIST**.

`recursive`
:   Se definido como **`true`**, o comando emitido será **LIST -R**.

### Valor Retornado

Retorna um array onde cada elemento corresponde a uma linha de texto. Retorna
**`false`** quando o diretório informado em `directory` for inválido.

A saída não é analisada de forma alguma. O identificador do tipo de sistema retornado por
[ftp\_systype()](function.ftp-systype.md) pode ser usado para determinar como os resultados
devem ser interpretados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ftp` agora espera uma instância de [FTP\Connection](class.ftp-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **ftp\_rawlist()****

```
<?php

// configura conexão básica
$ftp = ftp_connect($ftp_server);

// registra com usuário e senha
$login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

// obtém a lista de arquivos para /
$buff = ftp_rawlist($ftp, '/');

// fecha a conexão
ftp_close($ftp);

// exibe o buffer
var_dump($buff);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  string(65) "drwxr-x---   3 vincent  vincent      4096 Jul 12 12:16 public_ftp"
  [1]=>
  string(66) "drwxr-x---  15 vincent  vincent      4096 Nov  3 21:31 public_html"
  [2]=>
  string(73) "lrwxrwxrwx   1 vincent  vincent        11 Jul 12 12:16 www -> public_html"
}
```

### Veja também

- [ftp\_nlist()](function.ftp-nlist.md) - Retorna uma lista de arquivos em um diretório
- [ftp\_mlsd()](function.ftp-mlsd.md) - Retorna uma lista de arquivos no diretório fornecido

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
