# Retorna o conjunto de caracteres atual da conexão com o banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.character-set-name.php

---

# mysqli::character\_set\_name

# mysqli\_character\_set\_name

(PHP 5, PHP 7, PHP 8)

mysqli::character\_set\_name -- mysqli\_character\_set\_name — Retorna o conjunto de caracteres atual da conexão com o banco de dados

### Descrição

Estilo orientado a objetos

public function **mysqli::character\_set\_name**(): [string](language.types.string.md)

Estilo procedural

function **mysqli\_character\_set\_name**([mysqli](class.mysqli.md) `$mysql`): [string](language.types.string.md)

Retorna o conjunto de caracteres atual da conexão com o banco de dados.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

O conjunto de caracteres atual da conexão

### Examples

**Exemplo #1 Exemplo de **mysqli::character\_set\_name()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "meu_usuario", "minha_senha", "mundo");

/* Define o conjunto padrão de caracteres */
$mysqli->set_charset('utf8mb4');

/* Mostra o conjunto atual de caracteres */
$charset = $mysqli->character_set_name();
printf("Conjunto atual de caracteres é %s\n", $charset);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "meu_usuario", "minha_senha", "mundo");

/* Define o conjunto padrão de caracteres */
mysqli_set_charset($mysqli, 'utf8mb4');

/* Mostra o conjunto atual de caracteres */
$charset = mysqli_character_set_name($mysqli);
printf("Conjunto atual de caracteres é %s\n", $charset);
```

Os exemplos acima produzirão:

```
Conjunto atual de caracteres é utf8mb4
```

### Veja também

- [mysqli\_set\_charset()](mysqli.set-charset.md) - Define o conjunto de caracteres do cliente
- [mysqli\_real\_escape\_string()](mysqli.real-escape-string.md) - Escape caracteres especiais em uma string para uso em uma instrução SQL, levando em consideração o conjunto de caracteres atual da conexão

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
