# Realiza uma correspondência com expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-match.php

---

# preg\_match

(PHP 4, PHP 5, PHP 7, PHP 8)

preg\_match — Realiza uma correspondência com expressão regular

### Descrição

function **preg\_match**(  
    [string](language.types.string.md) `$pattern`,  
    [string](language.types.string.md) `$subject`,  
    [array](language.types.array.md) `&$matches` = **`null`**,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$offset` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Pesquisa `subject` por uma correspondência à expressão
regular informada em `pattern`.

### Parâmetros

`pattern`
:   A expressão sendo procurada, como uma string.

`subject`
:   A string de entrada.

`matches`
:   Se `matches` for informada, será preenchida com os
    resultados da pesquisa. $matches[0] contéra o
    texto que correspondeu à expressão inteira, $matches[1]
    terá o texto que correspondeu à primeira sub-expressão entre parênteses
    capturada, e assim por diante.

`flags`
:   `flags` pode ser uma combinação das seguintes constantes:

    **`PREG_OFFSET_CAPTURE`**
    :   Se esta constante for passada, para cada correspondência o deslocamento (em bytes)
        da string também será retornado. Observe que isto modifica o valor de
        `matches` para um array de arrays onde cada elemento é
        um array que consiste na string correspondida no elemento `0`
        e seu deslocamento na string `subject` no elemento
        `1`.

        ```
        <?php
        preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
        print_r($matches);
        ?>
        ```

        O exemplo acima produzirá:

        ```
        Array
        (
            [0] => Array
                (
                    [0] => foobarbaz
                    [1] => 0
                )

            [1] => Array
                (
                    [0] => foo
                    [1] => 0
                )

            [2] => Array
                (
                    [0] => bar
                    [1] => 3
                )

            [3] => Array
                (
                    [0] => baz
                    [1] => 6
                )

        )
        ```

    **`PREG_UNMATCHED_AS_NULL`**
    :   Se esta constante for passada, sub-expressões não correspondidas são reportadas como **`null`**
        e sempre são incluídas nos resultados (incluindo as finais).
        Sem esta constante, subpadrões não correspondidos que são seguidos por um
        subpadrão correspondente são reportados como uma [string](language.types.string.md) vazia,
        enquanto subpadrões não correspondidos finais são omitidos dos resultados
        completamente.

        ```
        <?php
        preg_match('/(a)(b)*(c)/', 'ac', $matches);
        var_dump($matches);
        preg_match('/(a)(b)*(c)/', 'ac', $matches, PREG_UNMATCHED_AS_NULL);
        var_dump($matches);

        // Trailing unmatched subpatterns:
        preg_match('/(a)(b)?(c)?/', 'a', $matches);
        var_dump($matches);
        preg_match('/(a)(b)?(c)?/', 'a', $matches, PREG_UNMATCHED_AS_NULL);
        var_dump($matches);
        ?>
        ```

        O exemplo acima produzirá:

        ```
        array(4) {
          [0]=>
          string(2) "ac"
          [1]=>
          string(1) "a"
          [2]=>
          string(0) ""
          [3]=>
          string(1) "c"
        }
        array(4) {
          [0]=>
          string(2) "ac"
          [1]=>
          string(1) "a"
          [2]=>
          NULL
          [3]=>
          string(1) "c"
        }
        array(2) {
          [0]=>
          string(1) "a"
          [1]=>
          string(1) "a"
        }
        array(4) {
          [0]=>
          string(1) "a"
          [1]=>
          string(1) "a"
          [2]=>
          NULL
          [3]=>
          NULL
        }
        ```

`offset`
:   Normalmente, a pesquisa começa no início da string de entrada.
    O parâmetro opcional `offset` pode ser usado para
    especificar o deslocamento alternativo (em bytes) a partir do qual a pesquisa será iniciada.

    > **Nota**:
    >
    > Usar `offset` não é equivalente a passar
    > `substr($subject, $offset)` para
    > **preg\_match()** no lugar da string de entrada,
    > porque `pattern` pode conter afirmações como
    > *^*, *$* ou
    > *(?<=x)* que depende da string inteira. Compare:
    >
    > ```
    > <?php
    > $subject = "abcdef";
    > $pattern = '/^def/';
    > preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
    > print_r($matches);
    > ?>
    > ```
    >
    > O exemplo acima produzirá:
    >
    > ```
    > Array
    > (
    > )
    > ```
    >
    > enquanto este exemplo
    >
    > ```
    > <?php
    > $subject = "abcdef";
    > $pattern = '/^def/';
    > preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
    > print_r($matches);
    > ?>
    > ```
    >
    > produz
    >
    > ```
    > Array
    > (
    >     [0] => Array
    >         (
    >             [0] => def
    >             [1] => 0
    >         )
    >
    > )
    > ```
    >
    > Alternativamente, para evitar o uso de [substr()](function.substr.md), use a afirmação
    > `\G` no lugar da âncora `^`, ou
    > o modificador `A`; ambos não funcionam com o
    > parâmetro `offset`.

### Valor Retornado

**preg\_match()** retorna 1 se `pattern`
corresponder a `subject`, 0 se não corresponder, ou **`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Erros/Exceções

Se o padrão de expressão regular passado não for compilado para uma expressão regular válida, um **`E_WARNING`** será emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Quando a constante **`PREG_UNMATCHED_AS_NULL`** é usada, os grupos de captura finais não correspondidos agora também são incluídos no resultado com o valor **`null`** (ou `[null, -1]` quando **`PREG_OFFSET_CAPTURE`** também é usado), de forma que $matches sempre tenha o mesmo tamanho. Anteriormente, eles eram omitidos. |
| 7.2.0 | A constante **`PREG_UNMATCHED_AS_NULL`** agora é suportada para o parâmetro `flags`. |

### Examples

**Exemplo #1 Encontrando a string de texto "php"**

```
<?php
// A letra "i" após o delimitador da expressão indica uma pesquisa insensível a maiúsculas/minúsculas
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "Uma correspondência foi encontrada.";
} else {
    echo "Uma correspondência foi encontrada.";
}
?>
```

**Exemplo #2 Encontrando a palavra "web"**

```
<?php
/* \b na expressão indica uma borda de palavra, portanto somente a palavra
 * separada "web" é correspondida, e não uma palavra que contém "web" como "webbing" ou "cobweb" */
if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    echo "Uma correspondência foi encontrada.";
} else {
    echo "Uma correspondência foi encontrada.";
}

echo "\n";

if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    echo "Uma correspondência foi encontrada.";
} else {
    echo "Uma correspondência foi encontrada.";
}
?>
```

**Exemplo #3 Obtendo o nome de domínio de uma URL**

```
<?php
// obtem o nome do servidor da URL
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
$host = $matches[1];

// obtém os últimos dois segmentos do nome do servidor
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "nome de domínio é: {$matches[0]}\n";
?>
```

O exemplo acima produzirá:

```
nome de domínio é: php.net
```

**Exemplo #4 Usando sub-expressão nomeada**

```
<?php

$str = 'foobar: 2008';

preg_match('/(?P<name>\w+): (?P<digit>\d+)/', $str, $matches);

/* Alternativa */
// preg_match('/(?<name>\w+): (?<digit>\d+)/', $str, $matches);

print_r($matches);

?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => foobar: 2008
    [name] => foobar
    [1] => foobar
    [digit] => 2008
    [2] => 2008
)
```

### Notas

**Dica**

Não use **preg\_match()** se for requerido apenas verificar se
uma string está contida em outra. Use
[strpos()](function.strpos.md) em seu lugar, pois será mais rápida.

### Veja também

- [Expressões PCRE](pcre.pattern.md)
- [preg\_quote()](function.preg-quote.md) - Escapa caracteres de expressão regular
- [preg\_match\_all()](function.preg-match-all.md) - Realiza uma correspondência global de expressão regular
- [preg\_replace()](function.preg-replace.md) - Realiza uma pesquisa por uma expressão regular e substitui
- [preg\_split()](function.preg-split.md) - Divide uma string com base em expressão regular
- [preg\_last\_error()](function.preg-last-error.md) - Retorna o código de erro da última expressão regular PCRE executada
- [preg\_last\_error\_msg()](function.preg-last-error-msg.md) - Retorna a mensagem de erro da última execução de expressão regular PCRE

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
