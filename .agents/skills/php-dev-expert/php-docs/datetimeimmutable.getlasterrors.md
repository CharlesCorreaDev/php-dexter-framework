# Retorna os avisos e erros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.getlasterrors.php

---

# DateTimeImmutable::getLastErrors

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::getLastErrors — Retorna os avisos e erros

### Descrição

public static function **DateTimeImmutable::getLastErrors**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um array de avisos e erros encontrados durante a análise
de uma string de data/horário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array contendo informação sobre avisos e erros ou **`false`** se não
houver nem avisos nem erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Antes do PHP 8.2.0, esta função não retornava **`false`** quando não havia warnings ou erros. Em vez disso, ela sempre retornaria a estrutura de array documentada. |

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::getLastErrors()****

```
<?php
try {
    $date = new DateTimeImmutable('asdfasdf');
} catch (Exception $e) {
    // Apenas para propósito de demonstração...
    print_r(DateTimeImmutable::getLastErrors());

    // A maneira verdadeiramente real orientada a objeto de se fazer isto é
    echo $e->getMessage();
}
?>
```

O exemplo acima produzirá:

```
Array
(
    [warning_count] => 1
    [warnings] => Array
        (
            [6] => Double timezone specification
        )

    [error_count] => 1
    [errors] => Array
        (
            [0] => The timezone could not be found in the database
        )
)
Failed to parse time string (asdfasdf) at position 0 (a): The timezone could not be found in the database
```

Os índices 6 e 0 na saída do exemplo referem-se ao índice do caractere no string onde o erro ocorreu.

**Exemplo #2 Detectando datas transferidas**

```
<?php
$date = DateTimeImmutable::createFromFormat('!Y-m-d', '2020-02-30');
print_r(DateTimeImmutable::getLastErrors());
```

O exemplo acima produzirá:

```
Array
(
    [warning_count] => 1
    [warnings] => Array
        (
            [10] => The parsed date was invalid
        )

    [error_count] => 0
    [errors] => Array
        (
        )
)
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
