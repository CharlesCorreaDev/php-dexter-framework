# Realiza pesquisa e substituição em expressão regular usando chamadas de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-replace-callback-array.php

---

# preg\_replace\_callback\_array

(PHP 7, PHP 8)

preg\_replace\_callback\_array — Realiza pesquisa e substituição em expressão regular usando chamadas de retorno

### Descrição

function **preg\_replace\_callback\_array**(  
    [array](language.types.array.md) `$pattern`,  
    [string](language.types.string.md)|[array](language.types.array.md) `$subject`,  
    [int](language.types.integer.md) `$limit` = -1,  
    [int](language.types.integer.md) `&$count` = **`null`**,  
    [int](language.types.integer.md) `$flags` = 0  
): [string](language.types.string.md)|[array](language.types.array.md)|[null](language.types.null.md)

O comportamento desta função é similar a
[preg\_replace\_callback()](function.preg-replace-callback.md), exceto que chamadas de retorno são
executada para cada expressão.

### Parâmetros

`pattern`
:   Um array associativo mapeando expressões (chaves) a funções de retorno do tipo [callable](language.types.callable.md) (valores).

`subject`
:   A string ou um array com strings para pesquisa e substituição.

`limit`
:   O número máximo de substituições para cada expressão em cada string de entrada do parâmetro
    `subject`. O padrão é
    `-1` (sem limite).

`count`
:   Se especificada, esta variável será preenchida com o número de
    substituições realizadas.

`flags`
:   `flags` pode ser uma combinação das opções
    **`PREG_OFFSET_CAPTURE`** e
    **`PREG_UNMATCHED_AS_NULL`**, que influenciam o
    formato do array de correspondências.
    Consulte a descrição em [preg\_match()](function.preg-match.md) para mais detalhes.

### Valor Retornado

**preg\_replace\_callback\_array()** retorna um array se o parâmetro
`subject` for um array, ou uma string
caso contrário. Em caso de erros, o valor de retorno é **`null`**

Se corresponências forem encontradas, a nova string será retornada, caso contrário
`subject` será retornado sem alteração.

### Erros/Exceções

Se o padrão de expressão regular passado não for compilado para uma expressão regular válida, um **`E_WARNING`** será emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | O parâmetro `flags` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **preg\_replace\_callback\_array()****

```
<?php
$subject = 'Aaaaaa Bbb';

preg_replace_callback_array(
    [
        '~[a]+~i' => function ($match) {
            echo strlen($match[0]), ' correspondências a "a" encontradas', PHP_EOL;
        },
        '~[b]+~i' => function ($match) {
            echo strlen($match[0]), ' correspondências a "b" encontradas', PHP_EOL;
        }
    ],
    $subject
);
?>
```

O exemplo acima produzirá:

```
6 correspondências a "a" encontradas
3 correspondências a "b" encontradas
```

### Veja também

- [Expressões Regulares PCRE](pcre.pattern.md)
- [preg\_replace\_callback()](function.preg-replace-callback.md) - Executa uma busca por expressão regular e substitui usando uma chamada de retorno
- [preg\_quote()](function.preg-quote.md) - Escapa caracteres de expressão regular
- [preg\_replace()](function.preg-replace.md) - Realiza uma pesquisa por uma expressão regular e substitui
- [preg\_last\_error()](function.preg-last-error.md) - Retorna o código de erro da última expressão regular PCRE executada
- [Funções Anônimas](functions.anonymous.md)

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
