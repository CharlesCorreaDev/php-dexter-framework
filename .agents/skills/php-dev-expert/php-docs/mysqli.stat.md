# Obtém o status atual do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.stat.php

---

# mysqli::stat

# mysqli\_stat

(PHP 5, PHP 7, PHP 8)

mysqli::stat -- mysqli\_stat — Obtém o status atual do sistema

### Descrição

Estilo orientado a objetos

public function **mysqli::stat**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_stat**([mysqli](class.mysqli.md) `$mysql`): [string](language.types.string.md)|[false](language.types.singleton.md)

**mysqli\_stat()** retorna uma string contendo
informações semelhantes àquelas fornecidas pelo comando 'mysqladmin status'.
Isso inclui o tempo de atividade em segundos e o número de threads em execução,
perguntas, recarregamentos e tabelas abertas.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Uma string que descreve o status do servidor. **`false`** se ocorreu um erro.

### Examples

**Exemplo #1 Exemplo de **mysqli::stat()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

printf ("Status do sistema: %s\n", $mysqli->stat());
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

printf("System status: %s\n", mysqli_stat($link));
```

Os exemplos acima produzirão:

```
Status do sistema: Uptime: 272  Threads: 1  Questions: 5340  Slow queries: 0
Opens: 13  Flush tables: 1  Open tables: 0  Queries per second avg: 19.632
Memory in use: 8496K  Max memory used: 8560K
```

### Veja também

- [mysqli\_get\_server\_info()](mysqli.get-server-info.md) - Retorna a versão do servidor MySQL

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
