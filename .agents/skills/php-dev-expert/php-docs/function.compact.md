# Cria um array contendo variáveis e seus valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.compact.php

---

# compact

(PHP 4, PHP 5, PHP 7, PHP 8)

compact — Cria um array contendo variáveis e seus valores

### Descrição

function **compact**([array](language.types.array.md)|[string](language.types.string.md) `$var_name`, [array](language.types.array.md)|[string](language.types.string.md) `...$var_names`): [array](language.types.array.md)

Cria um array contendo variáveis e seus valores.

Para cada um dos parâmetros passados, **compact()** procura
uma variável com o nome especificado na
[tabela de símbolos](features.gc.refcounting-basics.md) atual
e a adiciona no array de saída de forma que o nome da variável se torne a chave
e o conteúdo da variável se torne o valor para essa chave.
Em resumo, ela faz o oposto de [extract()](function.extract.md).

> **Nota**:
>
> Antes do PHP 7.3, quaisquer strings que não estejam definidas seriam silenciosamente ignoradas.

### Parâmetros

`var_name`

`var_names`
:   **compact()** recebe um número variável de parâmetros.
    Cada parâmetro pode ser ou uma string contendo o nome da variável, ou
    um array de nomes de variáveis. O array pode conter outros arrays de
    nomes de variáveis; **compact()** o manipula
    recursivamente.

### Valor Retornado

Retorna a saída do array com todas as variáveis adicionadas a ele.

### Erros/Exceções

**compact()** emite um erro nível **`E_WARNING`** se uma determinada string
se refere a uma variável não definida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se uma determinada string fizer referência a uma variável não definida, um erro de nível **`E_WARNING`** será emitido. |
| 7.3.0 | **compact()** agora emite um erro nível **`E_NOTICE`** se uma determinada string se refere a uma variável não definida. Anteriomente, strings como essa seriam ignoradas silenciosamente. |

### Examples

**Exemplo #1 Exemplo de **compact()****

```
<?php

$cidade = "Sao Paulo";
$estado = "SP";
$evento = "SIGGRAPH";

$vars_localidade = array("cidade", "estado");

$result = compact("evento", $vars_localidade);
print_r($result);

?>
```

O exemplo acima produzirá:

```
Array
(
    [evento] => SIGGRAPH
    [cidade] => Sao Paulo
    [estado] => SP
)
```

### Notas

> **Nota**:
> **Armadilha**  
>
> Devido a [variáveis
> variável](language.variables.variable.md) não poderem ser usadas com [arrays superglobais](language.variables.superglobals.md) do PHP
> dentro de funções, os arrays superglobais não podem ser passados
> na **compact()**.

### Veja também

- [extract()](function.extract.md) - Importa variáveis para a tabela de símbolos a partir de um array

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
