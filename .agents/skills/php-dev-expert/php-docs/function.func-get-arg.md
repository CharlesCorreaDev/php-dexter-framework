# Retorna um item de uma lista de argumentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.func-get-arg.php

---

# func\_get\_arg

(PHP 4, PHP 5, PHP 7, PHP 8)

func\_get\_arg — Retorna um item de uma lista de argumentos

### Descrição

function **func\_get\_arg**([int](language.types.integer.md) `$position`): [mixed](language.types.mixed.md)

Obtém o argumento especificado de uma lista de argumentos de uma função definida pelo usuário.

Esta função pode ser usada juntamente com
[func\_get\_args()](function.func-get-args.md) e [func\_num\_args()](function.func-num-args.md)
para permitir que funções definidas pelo usuário aceitem listas de argumentos com comprimento variável.

### Parâmetros

`position`
:   O índice do argumento. Argumentos de função são contados iniciando de
    zero.

### Valor Retornado

Retorna o argumento especificado, ou **`false`** em caso de erro.

### Erros/Exceções

Gera um alerta se chamada fora de uma função definida pelo usuário, ou
se `position` for maior que o número de argumentos
realmente passados.

### Examples

**Exemplo #1 Exemplo de **func\_get\_arg()****

```
<?php
function foo()
{
     $numargs = func_num_args();
     echo "Número de argumentos: $numargs<br />\n";
     if ($numargs >= 2) {
     echo "Segundo argumento é: " . func_get_arg(1) . "<br />\n";
     }
}

foo (1, 2, 3);
?>
```

O exemplo acima produzirá:

```
Número de argumentos: 3
Segundo argumento é: 2
```

**Exemplo #2 Exemplo de **func\_get\_arg()** com argumentos por valor e por referência**

```
<?php
function byVal($arg) {
    echo 'Como passado     : ', var_export(func_get_arg(0)), PHP_EOL;
    $arg = 'baz';
    echo 'Depois da mudança: ', var_export(func_get_arg(0)), PHP_EOL;
}

function byRef(&$arg) {
    echo 'Como passado     : ', var_export(func_get_arg(0)), PHP_EOL;
    $arg = 'baz';
    echo 'Depois da mudança: ', var_export(func_get_arg(0)), PHP_EOL;
}

$arg = 'bar';
byVal($arg);
byRef($arg);
?>
```

O exemplo acima produzirá:

Como passado : 'bar'  
Depois da mudança: 'baz'  
Como passado : 'bar'  
Depois da mudança: 'baz'

### Notas

> **Nota**:
>
> A partir do PHP 8.0.0, a família de funções
> func\_\*() deve ser mais transparente em relação aos argumentos nomeados,
> tratando os argumentos como se fossem todos passados posicionalmente,
> e os argumentos ausentes são substituídos por seus valores padrão.
> Esta função ignora a coleção de argumentos variádicos nomeados desconhecidos.
> Argumentos nomeados desconhecidos que são coletados só podem ser acessados por meio do parâmetro variádico.

> **Nota**:
>
> Se os argumentos forem passados por referência,
> qualquer alteração nos argumentos será refletida nos valores retornados por esta função. A partir do PHP 7,
> os valores atuais também serão retornados se os argumentos forem passados por valor.

> **Nota**:
>
> Esta função retorna uma cópia apenas dos argumentos informados, e não
> leva em consideração argumentos padrão (não informados).

### Veja também

- [Sintaxe `...`](functions.arguments.md#functions.variable-arg-list)
- [func\_get\_args()](function.func-get-args.md) - Retorna um array contendo uma lista de argumentos da função
- [func\_num\_args()](function.func-num-args.md) - Retorna o número de argumentos passados ​​para a função

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
