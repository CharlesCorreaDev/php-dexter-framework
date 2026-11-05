# Usado para escapar certos caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-escape-string.php

---

# db2\_escape\_string

(PECL ibm\_db2 >= 1.6.0)

db2\_escape\_string — 
Usado para escapar certos caracteres

### Descrição

function **db2\_escape\_string**([string](language.types.string.md) `$string_literal`): [string](language.types.string.md)

Adiciona barras invertidas aos caracteres especiais no argumento da string.

### Parâmetros

`string_literal`
:   A string que contém caracteres especiais que precisam ser modificados.
    Os caracteres que são precedidos por uma barra invertida são `\x00`,
    `\n`, `\r`, `\`,
    `'`, `"` e `\x1a`.

### Valor Retornado

Retorna `string_literal` com os caracteres especiais
observados acima precedidos por barras invertidas.

### Examples

**Exemplo #1 Um exemplo de **db2\_escape\_string()****

Resultado do uso da função **db2\_escape\_string()**

```
<?php

$conn = db2_connect($database, $user, $password);

if ($conn) {
    $str[0] = "Todos os caracteres: \x00 , \n , \r , \ , ' , \" , \x1a .";
    $str[1] = "Barra invertida (\). Aspas simples ('). Aspas duplas (\")";
    $str[2] = "O caractere NULL \0 também precisa ser escapado";
    $str[3] = "Caracteres interessantes: \x1a , \x00 .";
    $str[4] = "Nada para escapar";
    $str[5] = 200676;
    $str[6] = "";

    foreach( $str as $string ) {
        echo "db2_escape_string: " . db2_escape_string($string). "\n";
    }
}
?>
```

O exemplo acima produzirá:

```
db2_escape_string: Todos os caracteres: \0 , \n , \r , \\ , \' , \" , \Z .
db2_escape_string: Barra invertida (\\). Aspas simples (\'). Aspas duplas (\")
db2_escape_string: O caractere NULL \0 também precisa ser escapado
db2_escape_string: Caracteres interessantes: \Z , \0 .
db2_escape_string: Nada para escapar
db2_escape_string: 200676
db2_escape_string:
```

### Veja também

- [db2\_prepare()](function.db2-prepare.md) - Prepara uma instrução SQL para ser executada

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
