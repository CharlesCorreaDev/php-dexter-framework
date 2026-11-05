# Liga variáveis a uma declaração preparada como parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.bind-param.php

---

# mysqli\_stmt::bind\_param

# mysqli\_stmt\_bind\_param

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::bind\_param -- mysqli\_stmt\_bind\_param — Liga variáveis a uma declaração preparada como parâmetros

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::bind\_param**([string](language.types.string.md) `$types`, [mixed](language.types.mixed.md) `&$var`, [mixed](language.types.mixed.md) `&...$vars`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_stmt\_bind\_param**(  
    [mysqli\_stmt](class.mysqli-stmt.md) `$statement`,  
    [string](language.types.string.md) `$types`,  
    [mixed](language.types.mixed.md) `&$var`,  
    [mixed](language.types.mixed.md) `&...$vars`  
): [bool](language.types.boolean.md)

Liga variáveis para os marcadores de parâmetros na declaração SQL preparada por
[mysqli\_prepare()](mysqli.prepare.md) ou [mysqli\_stmt\_prepare()](mysqli-stmt.prepare.md).

> **Nota**:
>
> Se o tamanho de dados de um variável exceder o tamanho de pacote máximo permitido
> (max\_allowed\_packet), deve-se especificar `b` em
> `types` e usar
> [mysqli\_stmt\_send\_long\_data()](mysqli-stmt.send-long-data.md) para enviar os dados em pacotes.

> **Nota**:
>
> Deve-se ter cuidado ao usar **mysqli\_stmt\_bind\_param()** em conjunto
> com [call\_user\_func\_array()](function.call-user-func-array.md). Note que **mysqli\_stmt\_bind\_param()**
> requer que os parâmetros sejam passados por referência, enquanto que [call\_user\_func\_array()](function.call-user-func-array.md)
> pode aceitar como parâmetro uma lista de variáveis que podem representar referências ou valores.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

`types`
:   Uma string que contém um ou mais caracteres que especificam os tipos
    para as variáveis correspondentes ligadas:

    **Caracteres de especificação de tipo**

    | Caractere | Descrição |
    | --- | --- |
    | i | variável correspondente tem tipo [int](language.types.integer.md) |
    | d | variável correspondente tem tipo [float](language.types.float.md) |
    | s | variável correspondente tem tipo [string](language.types.string.md) |
    | b | variável correspondente é um blob e será enviada em pacotes |

`var`

`vars`
:   O número de variáveis e o comprimento da string
    que o parâmetro `types` deve corresponder aos parâmetros na declaração.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Exemplo de **mysqli\_stmt::bind\_param()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');

$stmt = $mysqli->prepare("INSERT INTO CountryLanguage VALUES (?, ?, ?, ?)");
$stmt->bind_param('sssd', $code, $language, $official, $percent);

$code = 'DEU';
$language = 'Bavarian';
$official = "F";
$percent = 11.2;

$stmt->execute();

printf("%d linha inserida.\n", $stmt->affected_rows);

/* Limpa tabela CountryLanguage */
$mysqli->query("DELETE FROM CountryLanguage WHERE Language='Bavarian'");
printf("%d linha apagada.\n", $mysqli->affected_rows);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect('localhost', 'my_user', 'my_password', 'world');

$stmt = mysqli_prepare($link, "INSERT INTO CountryLanguage VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'sssd', $code, $language, $official, $percent);

$code = 'DEU';
$language = 'Bavarian';
$official = "F";
$percent = 11.2;

mysqli_stmt_execute($stmt);

printf("%d linha inserida.\n", mysqli_stmt_affected_rows($stmt));

/* Limpa tabela CountryLanguage */
mysqli_query($link, "DELETE FROM CountryLanguage WHERE Language='Bavarian'");
printf("%d linha apagada.\n", mysqli_affected_rows($link));
```

Os exemplos acima produzirão:

```
1 linha inserida.
1 linha apagada.
```

**Exemplo #2 Usando `...` para fornecer argumentos**

O operador `...` pode ser usado para fornecer uma lista de argumentos
de comprimento variável, como por exemplo em uma cláusula `WHERE IN`.

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');

$stmt = $mysqli->prepare("SELECT Language FROM CountryLanguage WHERE CountryCode IN (?, ?)");
/* Usando ... para fornecer argumentos */
$stmt->bind_param('ss', ...['DEU', 'POL']);
$stmt->execute();
$stmt->store_result();

printf("%d linhas encontradas.\n", $stmt->num_rows());
```

Os exemplos acima produzirão:

```
10 linhas encontradas.
```

### Veja também

- [mysqli\_stmt\_bind\_result()](mysqli-stmt.bind-result.md) - Liga variáveis a uma declaração preparada para armazenamento de resultado
- [mysqli\_stmt\_execute()](mysqli-stmt.execute.md) - Executa uma instrução preparada
- [mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md) - Recebe resultados de uma instrução preparada nas variáveis vinculadas
- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_send\_long\_data()](mysqli-stmt.send-long-data.md) - Envia dados em blocos
- [mysqli\_stmt\_errno()](mysqli-stmt.errno.md) - Retorna o código de erro para a chamada de instrução mais recente
- [mysqli\_stmt\_error()](mysqli-stmt.error.md) - Retorna uma descrição em string para o último erro de instrução

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
