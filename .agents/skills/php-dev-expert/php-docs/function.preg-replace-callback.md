# Executa uma busca por expressão regular e substitui usando uma chamada de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-replace-callback.php

---

# preg\_replace\_callback

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

preg\_replace\_callback — Executa uma busca por expressão regular e substitui usando uma chamada de retorno

### Descrição

function **preg\_replace\_callback**(  
    [string](language.types.string.md)|[array](language.types.array.md) `$pattern`,  
    [callable](language.types.callable.md) `$callback`,  
    [string](language.types.string.md)|[array](language.types.array.md) `$subject`,  
    [int](language.types.integer.md) `$limit` = -1,  
    [int](language.types.integer.md) `&$count` = **`null`**,  
    [int](language.types.integer.md) `$flags` = 0  
): [string](language.types.string.md)|[array](language.types.array.md)|[null](language.types.null.md)

O comportamento desta função é quase idêntico ao da
[preg\_replace()](function.preg-replace.md), exceto pelo fato de que ao invés do parâmetro
`replacement`, deve-se especificar o parâmetro
`callback`.

### Parâmetros

`pattern`
:   A padrão usado para a busca. Pode ser tanto uma string como um array
    de strings.

`callback`
:   Uma função de retorno que será chamada e passado um array dos elementos correspondentes
    na string `subject`. A função deve
    retornar a string substituta. Esta é a assinatura da função de retorno:

    function handler([array](language.types.array.md) `$matches`): [string](language.types.string.md)

    Normalmente será necessária uma função `callback`
    para **preg\_replace\_callback()** em apenas um lugar.
    Neste caso pode-se usar uma
    [função anônima](functions.anonymous.md) para
    declarar a função de retorno dentro da chamada a
    **preg\_replace\_callback()**. Desta forma,
    todas as informações para a chamada estarão no mesmo lugar e
    não poluem o espaço de nomes com um nome de função que não é usado em nenhum
    outro lugar.

    **Exemplo #1 **preg\_replace\_callback()** e
    função anônima**

    ```
    <?php
    /* um filtro de linha de comando em estilo Unix para converter maiúsculas
     * no início de parágrafos para letras minúsculas */
    $fp = fopen("php://stdin", "r") or die("não foi possível ler a entrada padrão");
    while (!feof($fp)) {
        $line = fgets($fp);
        $line = preg_replace_callback(
            '|<p>\s*\w|',
            function ($matches) {
                return strtolower($matches[0]);
            },
            $line
        );
        echo $line;
    }
    fclose($fp);
    ?>
    ```

`subject`
:   A string ou array com strings para procurar e modificar.

`limit`
:   O máximo de possíveis substituições para cada expressão em cada string de
    `subject`. O padrão é
    `-1` (sem limite).

`count`
:   Se especificado, esta variável será preenchida com o número de
    substituições feitas.

`flags`
:   `flags` pode ser uma combinação das opções
    **`PREG_OFFSET_CAPTURE`** e
    **`PREG_UNMATCHED_AS_NULL`**, que influenciam o
    formato do array de correspondências.
    Veja a descrição em [preg\_match()](function.preg-match.md) para mais detalhes.

### Valor Retornado

**preg\_replace\_callback()** retorna um array se o parâmetro
`subject` for um array, ou uma string
caso contrário. Em caso de erro o valor de retorno é **`null`**.

Se ocorrer correspondência, a nova string será retornada, caso contrário
`subject` será retornada inalterada.

### Erros/Exceções

Se o padrão de expressão regular passado não for compilado para uma expressão regular válida, um **`E_WARNING`** será emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | O parâmetro `flags` foi adicionado. |

### Examples

**Exemplo #2 Exemplo de **preg\_replace\_callback()****

```
<?php
// este texto foi usado em 2002
// se quisermos atualizá-lo para 2003
$text = "Dia da mentira é em 01/04/2002\n";
$text.= "Último Natal foi em 25/12/2001\n";
// a chamada de retorno
function next_year($matches)
{
    // como sempre: $matches[0] é a correspondência completa
    // $matches[1] é a correspondência da primeira sub-expressão
    // envolvida por '(...)' e assim por diante
    return $matches[1].($matches[2]+1);
}
echo preg_replace_callback(
            "|(\d{2}/\d{2}/)(\d{4})|",
            "next_year",
            $text);

?>
```

O exemplo acima produzirá:

```
Dia da mentira é em 01/04/2003
Último Natal foi em 25/12/2002
```

**Exemplo #3 **preg\_replace\_callback()** usando estrutura recursiva
para manipular código BB encapsulado**

```
<?php
$input = "plain [indent] deep [indent] deeper [/indent] deep [/indent] plain";

function parseTagsRecursive($input)
{

    $regex = '#\[indent]((?:[^[]|\[(?!/?indent])|(?R))+)\[/indent]#';

    if (is_array($input)) {
        $input = '<div style="margin-left: 10px">'.$input[1].'</div>';
    }

    return preg_replace_callback($regex, 'parseTagsRecursive', $input);
}

$output = parseTagsRecursive($input);

echo $output;
?>
```

### Veja também

- [Expressões regulares PCRE](pcre.pattern.md)
- [preg\_replace\_callback\_array()](function.preg-replace-callback-array.md) - Realiza pesquisa e substituição em expressão regular usando chamadas de retorno
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
