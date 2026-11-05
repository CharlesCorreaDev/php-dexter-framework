# Realiza uma correspondência global de expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-match-all.php

---

# preg\_match\_all

(PHP 4, PHP 5, PHP 7, PHP 8)

preg\_match\_all — Realiza uma correspondência global de expressão regular

### Descrição

function **preg\_match\_all**(  
    [string](language.types.string.md) `$pattern`,  
    [string](language.types.string.md) `$subject`,  
    [array](language.types.array.md) `&$matches` = **`null`**,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$offset` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Pesquisa `subject` por todas as correspondências à expressão
regular informada em `pattern` e insere-as em
`matches` na ordem especificada por
`flags`.

Depois que a primeira correspondência é encontrada, as pesquisas subsequentes continuam
a partir do final da última correspondência.

### Parâmetros

`pattern`
:   A expressão regular a ser procurada, como uma string.

`subject`
:   A string de entrada.

`matches`
:   Array de todas as correspondências em um array multi-dimensional ordenado de acordo com
    `flags`.

`flags`
:   Se nenhuma opção de ordenamento for informada, **`PREG_PATTERN_ORDER`** será
    usada.

    Pode ser uma combinação das seguintes constantes (observe que não faz
    sentido usar **`PREG_PATTERN_ORDER`** junto com
    **`PREG_SET_ORDER`**):

    **`PREG_PATTERN_ORDER`**
    :   Ordena os resultados de forma que $matches[0] será um array das correspondências
        completas à expressão, $matches[1] será um array de strings correspondidas pela
        primeira sub-expressão entre parênteses, e assim por diante.

        ```
        <?php
        preg_match_all("|<[^>]+>(.*)</[^>]+>|U",
            "<b>exemplo: </b><div align=left>isto é um teste</div>",
            $out, PREG_PATTERN_ORDER);
        echo $out[0][0] . ", " . $out[0][1] . "\n";
        echo $out[1][0] . ", " . $out[1][1] . "\n";
        ?>
        ```

        O exemplo acima produzirá:

        ```
        <b>exemplo: </b>, <div align=left>isto é um teste</div>
        exemplo: , isto é um teste
        ```

        Portanto, $out[0] contém um array de strings que corresponderam a toda a expressão,
        e $out[1] contém um array de strings envolvidas por etiquetas HTML.

        Se a expressão contiver sub-expressões nomeadas, $matches
        conterá, adicionalmente, entradas para chaves com o nome da sub-expressão.

        Se a expressão contiver sub-expressões nomeadas duplicadas, somente a mais à
        direita será armazenada em $matches[NOME].

        ```
        <?php
        preg_match_all(
            '/(?J)(?<match>foo)|(?<match>bar)/',
            'foo bar',
            $matches,
            PREG_PATTERN_ORDER
        );
        print_r($matches['match']);
        ?>
        ```

        O exemplo acima produzirá:

        ```
        Array
        (
            [0] =>
            [1] => bar
        )
        ```

    **`PREG_SET_ORDER`**
    :   Ordena os resultados de forma que $matches[0] será um array do primeiro conjunto
        de correspondências, $matches[1] será um array do segundo conjunto,
        e assim por diante.

        ```
        <?php
        preg_match_all("|<[^>]+>(.*)</[^>]+>|U",
            "<b>exemplo: </b><div align=\"left\">isto é um teste</div>",
            $out, PREG_SET_ORDER);
        echo $out[0][0] . ", " . $out[0][1] . "\n";
        echo $out[1][0] . ", " . $out[1][1] . "\n";
        ?>
        ```

        O exemplo acima produzirá:

        ```
        <b>exemplo:: </b>, exemplo::
        <div align="left">isto é um teste</div>, isto é um teste
        ```

    **`PREG_OFFSET_CAPTURE`**
    :   Se esta constante for passada, para cada correspondência o deslocamento (em bytes)
        da string também será retornado. Observe que isto modifica o valor de
        `matches` para um array de arrays onde cada elemento é
        um array que consiste na string correspondida no elemento `0`
        e seu deslocamento na string `subject` no elemento
        `1`.

        ```
        <?php
        preg_match_all('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
        print_r($matches);
        ?>
        ```

        O exemplo acima produzirá:

        ```
        Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [0] => foobarbaz
                            [1] => 0
                        )

                )

            [1] => Array
                (
                    [0] => Array
                        (
                            [0] => foo
                            [1] => 0
                        )

                )

            [2] => Array
                (
                    [0] => Array
                        (
                            [0] => bar
                            [1] => 3
                        )

                )

            [3] => Array
                (
                    [0] => Array
                        (
                            [0] => baz
                            [1] => 6
                        )

                )

        )
        ```

    **`PREG_UNMATCHED_AS_NULL`**
    :   Se esta constante for passada, sub-expressões não correspondidas são reportadas como **`null`**;
        caso contrário elas são reportadas como [string](language.types.string.md)s vazias.

`offset`
:   Normalmente, a pesquisa começa no início da string de entrada.
    O parâmetro opcional `offset` pode ser usado para
    especificar o deslocamento alternativo (em bytes) a partir do qual a pesquisa será iniciada.

    > **Nota**:
    >
    > Usar `offset` não é equivalente a passar
    > `substr($subject, $offset)` para
    > **preg\_match\_all()** no lugar da string de entrada,
    > porque `pattern` pode conter afirmações como
    > *^*, *$* ou
    > *(?<=x)* que depende da string inteira. Consulte [preg\_match()](function.preg-match.md)
    > para exemplos.

### Valor Retornado

Retorna o número de correspondências completas à expressão (que pode ser zero), ou **`false`** em caso de falha.

### Erros/Exceções

Se o padrão de expressão regular passado não for compilado para uma expressão regular válida, um **`E_WARNING`** será emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | A constante **`PREG_UNMATCHED_AS_NULL`** agora é suportada para o parâmetro `flags`. |

### Examples

**Exemplo #1 Obtendo todos os números de telefine de algum texto.**

```
<?php
preg_match_all("/\(?  (\d{3})?  \)?  (?(1)  [\-\s] ) \d{3}-\d{4}/x",
                "Ligue para 555-1212 ou 1-800-555-1212", $phones);
?>
```

**Exemplo #2 Encontrando etiquetas HTML (ganancioso)**

```
<?php
// A expressão \\2 é um exemplo de referência retroativa. Isto informa ao PCRE que
// ele deve corresponder ao segundo conjunto de parênteses na expressão regular
// em si, que seria ([\w]+) neste caso. A barra invertida extra em \\2 é
// necessária porque a string está em aspas duplas.
$html = "<b>texto negrito</b><a href=howdy.html>clique aqui</a>";

preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $html, $matches, PREG_SET_ORDER);

foreach ($matches as $val) {
    echo "correspondeu: " . $val[0] . "\n";
    echo "parte 1: " . $val[1] . "\n";
    echo "parte 2: " . $val[2] . "\n";
    echo "parte 3: " . $val[3] . "\n";
    echo "parte 4: " . $val[4] . "\n\n";
}
?>
```

O exemplo acima produzirá:

```
correspondeu: <b>texto negrito</b>
parte 1: <b>
parte 2: b
parte 3: texto negrito
parte 4: </b>

correspondeu: <a href=howdy.html>clique aqui</a>
parte 1: <a href=howdy.html>
parte 2: a
parte 3: clique aqui
parte 4: </a>
```

**Exemplo #3 Usando sub-expressões nomeadas**

```
<?php

$str = <<<FOO
a: 1
b: 2
c: 3
FOO;

preg_match_all('/(?P<name>\w+): (?P<digit>\d+)/', $str, $matches);

/* Alternativa */
// preg_match_all('/(?<name>\w+): (?<digit>\d+)/', $str, $matches);

print_r($matches);

?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Array
        (
            [0] => a: 1
            [1] => b: 2
            [2] => c: 3
        )

    [name] => Array
        (
            [0] => a
            [1] => b
            [2] => c
        )

    [1] => Array
        (
            [0] => a
            [1] => b
            [2] => c
        )

    [digit] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
        )

    [2] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
        )

)
```

### Veja também

- [Expressões regulares PCRE](pcre.pattern.md)
- [preg\_quote()](function.preg-quote.md) - Escapa caracteres de expressão regular
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [preg\_replace()](function.preg-replace.md) - Realiza uma pesquisa por uma expressão regular e substitui
- [preg\_split()](function.preg-split.md) - Divide uma string com base em expressão regular
- [preg\_last\_error()](function.preg-last-error.md) - Retorna o código de erro da última expressão regular PCRE executada

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
