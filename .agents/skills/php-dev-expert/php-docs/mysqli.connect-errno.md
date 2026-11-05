# Retorna o código de erro da última chamada de conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.connect-errno.php

---

# mysqli::$connect\_errno

# mysqli\_connect\_errno

(PHP 5, PHP 7, PHP 8)

mysqli::$connect\_errno -- mysqli\_connect\_errno — Retorna o código de erro da última chamada de conexão

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli->connect\_errno](mysqli.connect-errno.md);

Estilo procedural

function **mysqli\_connect\_errno**(): [int](language.types.integer.md)

Retorna o código de erro da última tentativa de conexão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um código de erro para a última tentativa de conexão, se tiver falhado.
Zero significa que nenhum erro ocorreu.

Retorna o último código de erro da conexão independente da instância na qual
o método for chamado.

### Examples

**Exemplo #1 Exemplo de $mysqli->connect\_errno**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_OFF);
/* @ é usado para suprimir avisos */
$mysqli = @new mysqli('localhost', 'usuario_falso', 'senha_errada', 'nao_existe');
if ($mysqli->connect_errno) {
    /* Use seu método preferido de registro de erro aqui */
    error_log('Erro de conexão: ' . $mysqli->connect_errno);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_OFF);
/* @ é usado para suprimir avisos */
$link = @mysqli_connect('localhost', 'usuario_falso', 'senha_errada', 'nao_existe');
if (!$link) {
    /* Use seu método preferido de registro de erro aqui */
    error_log('Erro de conexão: ' . mysqli_connect_errno());
}
```

### Veja também

- [mysqli\_connect()](function.mysqli-connect.md) - Sinônimo de mysqli::\_\_construct
- [mysqli\_connect\_error()](mysqli.connect-error.md) - Retorna uma descrição do último erro de conexão
- [mysqli\_errno()](mysqli.errno.md) - Retorna o código de erro para a chamada de função mais recente
- [mysqli\_error()](mysqli.error.md) - Retorna uma string descrevendo o último erro
- [mysqli\_sqlstate()](mysqli.sqlstate.md) - Retorna o erro SQLSTATE da operação MySQL anterior

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
