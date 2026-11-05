# Retorna parte de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.substr.php

---

# substr

(PHP 4, PHP 5, PHP 7, PHP 8)

substr — Retorna parte de uma string

### Descrição

function **substr**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$offset`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [string](language.types.string.md)

Retorna a parte de `string` especificada pelo
parâmetro `offset` e `length`.

### Parâmetros

`string`
:   A string de entrada

`offset`
:   Se `offset` for não-negativo, a string retornada iniciará
    na posição `offset` em
    `string`, começando em zero. Por exemplo,
    na string '`abcdef`', o caractere na posição
    `0` é '`a`', na
    posição `2` é
    '`c`', e assim por diante.

    Se `offset` for negativo, a string retornada
    irá começar no caractere `offset`
    contado a partir do fim da `string`.

    Se a `string` for mais curta que o parâmetro
    `offset`, uma string vazia será retornada.

    **Exemplo #1 Usando um `offset` negativo**

    ```
    <?php
    echo substr("abcdef", -1), PHP_EOL;    // retorna "f"
    echo substr("abcdef", -2), PHP_EOL;    // retorna "ef"
    echo substr("abcdef", -3, 1), PHP_EOL; // retorna "d"
    ?>
    ```

`length`
:   Se `length` for fornecido e for positivo,
    a string retornada irá conter, no máximo, `length` caracteres
    começando em `offset` (dependendo do tamanho da
    `string`).

    Se `length` for informado e for negativo, então esta quantidade de
    caracteres será omitida do final da `string`.
    Se `offset` denota a posição dessa truncagem ou
    além dela, uma string vazia será retornada.

    Se `length` for informado e for igual a `0`,
    uma string vazia será retornada.

    Se `length` for omitido ou **`null`**, a substring iniciando em
    `offset` será
    retornada.

    **Exemplo #2 Usando um `length` negativo**

    ```
    <?php
    echo substr("abcdef", 0, -1), PHP_EOL;  // retorna "abcde"
    echo substr("abcdef", 2, -1), PHP_EOL;  // retorna "cde"
    echo substr("abcdef", 4, -4), PHP_EOL;  // retorna ""; antes do PHP 8.0.0, falso era retornado
    echo substr("abcdef", -3, -1), PHP_EOL; // retorna "de"
    ?>
    ```

### Valor Retornado

Retorna a parte extraída da `string`, ou
uma string vazia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` agora pode ser nulo. Quando `length` for especificamente definido para **`null`**, a função retorna uma substring terminando no final da string, quando anteriormente retornava uma string vazia. |
| 8.0.0 | A função retorna uma string vazia quando antes retornava **`false`**. |

### Examples

**Exemplo #3 Uso básico de **substr()****

```
<?php
echo substr('abcdef', 1), PHP_EOL;     // bcdef
echo substr("abcdef", 1, null), PHP_EOL; // bcdef; antes do PHP 8.0.0, string vazia era retornada
echo substr('abcdef', 1, 3), PHP_EOL;  // bcd
echo substr('abcdef', 0, 4), PHP_EOL;  // abcd
echo substr('abcdef', 0, 8), PHP_EOL;  // abcdef
echo substr('abcdef', -1, 1), PHP_EOL; // f

// O acesso a caracteres individuais pode
// ser feito atravéz de indexação
$string = 'abcdef';
echo $string[0], PHP_EOL;                 // a
echo $string[3], PHP_EOL;                 // d
echo $string[strlen($string)-1], PHP_EOL; // f

?>
```

**Exemplo #4 Comportamento de conversão no **substr()****

```
<?php
class apple {
    public function __toString() {
        return "green";
    }
}

echo "1) ".var_export(substr("pear", 0, 2), true), PHP_EOL;
echo "2) ".var_export(substr(54321, 0, 2), true), PHP_EOL;
echo "3) ".var_export(substr(new apple(), 0, 2), true), PHP_EOL;
echo "4) ".var_export(substr(true, 0, 1), true), PHP_EOL;
echo "5) ".var_export(substr(false, 0, 1), true), PHP_EOL;
echo "6) ".var_export(substr("", 0, 1), true), PHP_EOL;
echo "7) ".var_export(substr(1.2e3, 0, 4), true), PHP_EOL;
?>
```

O exemplo acima produzirá:

```
1) 'pe'
2) '54'
3) 'gr'
4) '1'
5) ''
6) ''
7) '1200'
```

**Exemplo #5 Faixa Inválida de Caracteres**

Se uma faixa inválida de caracteres for requisitada, **substr()** retorna
uma string vazia a partir do PHP 8.0.0; anteriormente, **`false`** era retornado.

```
<?php
var_dump(substr('a', 2));
?>
```

Saída do exemplo acima no PHP 8:

```
string(0) ""
```

Saída do exemplo acima no PHP 7:

```
bool(false)
```

### Veja também

- [strrchr()](function.strrchr.md) - Encontra a última ocorrência de um caractere em uma string
- [substr\_replace()](function.substr-replace.md) - Substitui o texto dentro de uma parte de uma string
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [trim()](function.trim.md) - Retira espaços (ou outros caracteres) do início e do final de uma string
- [mb\_substr()](function.mb-substr.md) - Obtém parte da string
- [wordwrap()](function.wordwrap.md) - Quebra uma string em um dado número de caracteres
- [Acesso e modificação de strings por caractere](language.types.string.md#language.types.string.substr)

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
