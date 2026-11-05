# Define o conjunto de caracteres do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.set-charset.php

---

# mysqli::set\_charset

# mysqli\_set\_charset

(PHP 5 >= 5.0.5, PHP 7, PHP 8)

mysqli::set\_charset -- mysqli\_set\_charset — Define o conjunto de caracteres do cliente

### Descrição

Estilo orientado a objetos

public function **mysqli::set\_charset**([string](language.types.string.md) `$charset`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_set\_charset**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$charset`): [bool](language.types.boolean.md)

Define o conjunto de caracteres a ser usado ao enviar dados de e para o
servidor de banco de dados.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`charset`
:   O conjunto de caracteres desejado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Exemplo de **mysqli::set\_charset()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "test");

printf("Conjunto de caracteres inicial: %s\n", $mysqli->character_set_name());

/* alterar conjunto de caracteres para utf8mb4 */
$mysqli->set_charset("utf8mb4");

printf("Conjunto de caracteres atual: %s\n", $mysqli->character_set_name());
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect('localhost', 'my_user', 'my_password', 'test');

printf("Conjunto de caracteres inicial: %s\n", mysqli_character_set_name($link));

/* alterar conjunto de caracteres para utf8mb4 */
mysqli_set_charset($link, "utf8mb4");

printf("Conjunto de caracteres atual: %s\n", mysqli_character_set_name($link));
```

Os exemplos acima produzirão
algo semelhante a:

```
Conjunto de caracteres inicial: latin1
Conjunto de caracteres atual: utf8mb4
```

### Notas

> **Nota**:
>
> Esta é a maneira preferida de alterar o conjunto de caracteres. Usar
> [mysqli\_query()](mysqli.query.md) para configurá-lo (como `SET NAMES utf8`)
> não é recomendado. Consulte a seção de [conceitos do conjunto de caracteres do MySQL](mysqlinfo.concepts.charset.md)
> para obter mais informações.

### Veja também

- [mysqli\_character\_set\_name()](mysqli.character-set-name.md) - Retorna o conjunto de caracteres atual da conexão com o banco de dados
- [mysqli\_real\_escape\_string()](mysqli.real-escape-string.md) - Escape caracteres especiais em uma string para uso em uma instrução SQL, levando em consideração o conjunto de caracteres atual da conexão
- [Conceitos do conjunto de caracteres do MySQL](mysqlinfo.concepts.charset.md)
- [» Lista de conjuntos de caracteres que o MySQL suporta](https://dev.mysql.com/doc/mysql/en/charset-charsets.html)

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
