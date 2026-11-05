# Realiza uma pesquisa por uma expressão regular e substitui

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-replace.php

---

# preg\_replace

(PHP 4, PHP 5, PHP 7, PHP 8)

preg\_replace — Realiza uma pesquisa por uma expressão regular e substitui

### Descrição

function **preg\_replace**(  
    [string](language.types.string.md)|[array](language.types.array.md) `$pattern`,  
    [string](language.types.string.md)|[array](language.types.array.md) `$replacement`,  
    [string](language.types.string.md)|[array](language.types.array.md) `$subject`,  
    [int](language.types.integer.md) `$limit` = -1,  
    [int](language.types.integer.md) `&$count` = **`null`**  
): [string](language.types.string.md)|[array](language.types.array.md)|[null](language.types.null.md)

Pesquisa `subject` por correspondências a
`pattern` e substitui-as por
`replacement`.

Para procurar correspondência a uma string exata, e não a uma expressão,
considere usar [str\_replace()](function.str-replace.md) ou
[str\_ireplace()](function.str-ireplace.md) no lugar desta função.

### Parâmetros

`pattern`
:   A expressão a ser pesquisada. Pode ser uma string ou um array com
    strings.

    Diversos [modificadores PCRE](reference.pcre.pattern.modifiers.md)
    também estão disponíveis.

`replacement`
:   A string ou array com strings para substituir. Se este parâmetro for uma string
    e o parâmetro `pattern` for um array, todas as expressões do array
    serão substituídos por esta string. Se ambos os parâmetros
    `pattern` e `replacement`
    forem arrays, cada expressão correspondida de `pattern` será
    substituída pelo seu `replacement` correspondente. Se
    houver menos elementos no array `replacement`
    que no array `pattern` array, qualquer
    `pattern` extra será substituído por uma string vazia.

    `replacement` pode conter referências na forma
    `\n` ou
    `$n`, com a última forma sendo
    a preferível. Cada referência desse tipo será substituída pelo texto capturado pelo
    n-ésimo padrão entre parentêses.
    n pode ser de 0 to 99, e
    `\0` ou `$0` referem-se ao texto correspondente
    à expressão inteira. Parênteses de abertura são contados da esquerda para direita
    (iniciando em 1) para obter o número da sub-expressão de captura.
    Note que a barra invertida em [string](language.types.string.md)s literais pode precisar ser escapada.

    Quando se trabalha com uma expressão de substituição, onde a referência retroativa
    é imediatamente seguida por outro número (isto é, inserido um número literal
    imediatamente após uma expressão correspondente), não se pode usar a habitual
    notação `\1` para a referência retroativa.
    `\11`, por exemplo, iria confundir a função
    **preg\_replace()** pois ela não saberá
    se o desejado é a referência `\1` seguida por um literal
    `1`, ou a referência `\11`
    seguida por nada. Neste caso, a solução é usar
    `${1}1`. Isto cria uma referência
    `$1` isolada, deixando o `1`
    como um literal.

`subject`
:   String ou um array com strings para pesquisar e substituir.

    Se `subject` for um array, então a pesquisa e
    a substituição serão executadas em cada entrada de `subject`,
    e o valor de retorno será um array também.

    Se o array `subject` for associativo, as chaves
    são preservadas no valor de retorno.

`limit`
:   O máximo possível de substituições para cada expressão em cada string de
    `subject`. O padrão é
    `-1` (sem limite).

`count`
:   Se especificada, essa variável será preenchida com o número de
    substiuições realizadas.

### Valor Retornado

**preg\_replace()** retorna um array se o
parâmetro `subject` for um array, caso contrário
retorna uma string.

Se correspondências forem encontradas, o novo `subject`
será devolvido, caso contrário `subject` será
devolvido inalterado ou **`null`** se um erro tiver ocorrido.

### Erros/Exceções

Usar o modificador "\e" é um erro;
um erro de nível **`E_WARNING`** é emitido neste caso.

Se o padrão de expressão regular passado não for compilado para uma expressão regular válida, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Usando referências retroativas seguidas por literais numéricos**

```
<?php
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1}1,$3';
echo preg_replace($pattern, $replacement, $string);
?>
```

O exemplo acima produzirá:

```
April1,2003
```

**Exemplo #2 Usando arrays indexados com **preg\_replace()****

```
<?php
$string = 'The quick brown fox jumped over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = array();
$replacements[2] = 'bear';
$replacements[1] = 'black';
$replacements[0] = 'slow';
echo preg_replace($patterns, $replacements, $string);
?>
```

O exemplo acima produzirá:

```
The bear black slow jumped over the lazy dog.
```

Ao ordenar expressões e substituições com ksort, obtém-se o desejado.

```
<?php
$string = 'The quick brown fox jumps over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = array();
$replacements[2] = 'bear';
$replacements[1] = 'black';
$replacements[0] = 'slow';
ksort($patterns);
ksort($replacements);
echo preg_replace($patterns, $replacements, $string);
?>
```

O exemplo acima produzirá:

```
The slow black bear jumped over the lazy dog.
```

**Exemplo #3 Substituindo vários valores**

```
<?php
$patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/',
                   '/^\s*{(\w+)}\s*=/');
$replace = array ('\3/\4/\1\2', '$\1 =');
echo preg_replace($patterns, $replace, '{startDate} = 1999-5-27');
?>
```

O exemplo acima produzirá:

```
$startDate = 5/27/1999
```

**Exemplo #4 Removendo espaços**

Este exemplo retira o excesso de espaçoes em branco de uma string.

```
<?php
$str = 'foo   o';
$str = preg_replace('/\s\s+/', ' ', $str);
// O resultado será 'foo o'
echo $str;
?>
```

**Exemplo #5 Usando o parâmetro `count`**

```
<?php
$count = 0;

echo preg_replace(array('/\d/', '/\s/'), '*', 'xp 4 to', -1 , $count);
echo "\n";
echo $count; //3
?>
```

O exemplo acima produzirá:

```
xp***to
3
```

### Notas

> **Nota**:
>
> Ao usar arrays com `pattern` e
> `replacement`, as chaves são processadas na ordem em que
> aparecem no array. Isto *não é necessariamente* o
> mesmo que a ordem dos índices numéricos. Se os índices forem utilizados para
> indentificar qual `pattern` deve ser substituído por qual
> `replacement`, é necessário executar a função
> [ksort()](function.ksort.md) em cada array antes de chamar a função
> **preg\_replace()**.

> **Nota**:
>
> Quando ambos `pattern` e `replacement` forem
> arrays, as regras de correspondência irão operar sequencialmente. Isto é, o segundo par `pattern`/`replacement`
> irá operar na string que resulta do primeiro par `pattern`/`replacement`,
> e não na string original. Se for desejado simular substituições operando em paralelo,
> como inversão de dois valores, substitua uma expressão por uma referência intermediária, e então em um par
> posterior substitua a referência intermediária pelo substituto desejado.
>
> ```
> <?php
> $p = array('/a/', '/b/', '/c/');
> $r = array('b', 'c', 'd');
> print_r(preg_replace($p, $r, 'a'));
> // prints d
> ?>
> ```

### Veja também

- [Expressões PCRE](pcre.pattern.md)
- [preg\_quote()](function.preg-quote.md) - Escapa caracteres de expressão regular
- [preg\_filter()](function.preg-filter.md) - Executa pesquisa e substituição usando expressões regulares
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [preg\_replace\_callback()](function.preg-replace-callback.md) - Executa uma busca por expressão regular e substitui usando uma chamada de retorno
- [preg\_split()](function.preg-split.md) - Divide uma string com base em expressão regular
- [preg\_last\_error()](function.preg-last-error.md) - Retorna o código de erro da última expressão regular PCRE executada
- [str\_replace()](function.str-replace.md) - Substitui todas as ocorrências da string de pesquisa com a string de substituição

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
