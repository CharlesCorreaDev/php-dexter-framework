# Obtém o resultado de SHOW WARNINGS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.get-warnings.php

---

# mysqli::get\_warnings

# mysqli\_get\_warnings

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

mysqli::get\_warnings -- mysqli\_get\_warnings — Obtém o resultado de SHOW WARNINGS

### Descrição

Estilo orientado a objetos

public function **mysqli::get\_warnings**(): [mysqli\_warning](class.mysqli-warning.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_get\_warnings**([mysqli](class.mysqli.md) `$mysql`): [mysqli\_warning](class.mysqli-warning.md)|[false](language.types.singleton.md)

Retorna uma lista vinculada individualmente composta por
[mysqli\_warning](class.mysqli-warning.md) ou **`false`** se não houver alertas.
Cada objeto na lista corresponde a uma única linha do resultado de
`SHOW WARNINGS`.
Chamar [mysqli\_warning::next()](mysqli-warning.next.md) irá recarregar o objeto
com os valores da próxima linha.

> **Nota**:
>
> Para recuperar mensagens de alerta, é recomendado usar o comando SQL
> `SHOW WARNINGS [limit row_count]` em vez desta função.

**Aviso**

A lista vinculada não pode ser retrocedida ou recuperada novamente.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna uma lista vinculada individualmente composta por
[mysqli\_warning](class.mysqli-warning.md) ou **`false`** se não houver alertas.

### Examples

**Exemplo #1 Percorrendo a lista vinculada para buscar todos os alertas**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$mysqli->query("SELECT 1/0, CAST('NULL' AS UNSIGNED)");

if ($mysqli->warning_count > 0) {
    $warning = $mysqli->get_warnings();
    if ($warning !== false) {
        do {
            printf("Número do erro: %s\n", $warning->errno);
            printf("Mensagem: %s\n", $warning->message);
        } while ($warning->next());
    }
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "user", "password", "test");

mysqli_query($link, "SELECT 1/0, CAST('NULL' AS UNSIGNED)");

if (mysqli_warning_count($link) > 0) {
    $warning = mysqli_get_warnings($link);
    if ($warning !== false) {
        do {
            printf("Número do erro: %s\n", $warning->errno);
            printf("Mensagem: %s\n", $warning->message);
        } while ($warning->next());
    }
}
```

Os exemplos acima produzirão:

```
Número do erro: 1365
Mensagem: Division by 0
Número do erro: 1292
Mensagem: Truncated incorrect INTEGER value: 'NULL'
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
