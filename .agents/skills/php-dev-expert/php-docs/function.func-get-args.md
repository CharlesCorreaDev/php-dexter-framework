# Retorna um array contendo uma lista de argumentos da função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.func-get-args.php

---

# func\_get\_args

(PHP 4, PHP 5, PHP 7, PHP 8)

func\_get\_args — Retorna um array contendo uma lista de argumentos da função

### Descrição

function **func\_get\_args**(): [array](language.types.array.md)

Obtém um array de argumentos da função.

Esta função pode ser usada em conjunto com
[func\_get\_arg()](function.func-get-arg.md) e [func\_num\_args()](function.func-num-args.md)
para permitir que funções definidas pelo usuário aceitem listas de argumentos de tamanhos variáveis.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array no qual cada elemento é uma cópia do membro correspondente
da lista de argumentos da função atual definida pelo usuário.

### Erros/Exceções

Gera um alerta se for chamado de fora de uma função definida pelo usuário.

### Examples

**Exemplo #1 Exemplo de **func\_get\_args()****

```
<?php
function foo()
{
    $numargs = func_num_args();
    echo "Número de argumentos: $numargs \n";
    if ($numargs >= 2) {
        echo "O segundo argumento é: " . func_get_arg(1) . "\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argumento $i é: " . $arg_list[$i] . "\n";
    }
}

foo(1, 2, 3);
?>
```

O exemplo acima produzirá:

```
Número de argumentos: 3
O segundo argumento é: 2
Argumento 0 é: 1
Argumento 1 é: 2
Argumento 2 é: 3
```

**Exemplo #2 Exemplo de **func\_get\_args()** com argumentos por valor e por referência**

```
<?php
function byVal($arg) {
    echo 'Como informado : ', var_export(func_get_args()), PHP_EOL;
    $arg = 'baz';
    echo 'Após alterado  : ', var_export(func_get_args()), PHP_EOL;
}

function byRef(&$arg) {
    echo 'Como informado : ', var_export(func_get_args()), PHP_EOL;
    $arg = 'baz';
    echo 'Após alterado  : ', var_export(func_get_args()), PHP_EOL;
}

$arg = 'bar';
byVal($arg);
byRef($arg);
?>
```

O exemplo acima produzirá:

Como informado : array (  
0 => 'bar',  
)  
Após alterado : array (  
0 => 'baz',  
)  
Como informado : array (  
0 => 'bar',  
)  
Após alterado : array (  
0 => 'baz',  
)

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
> Esta função retorna apenas uma cópia dos argumentos passados ​​e não
> leva em conta os argumentos padrão (não passados).

### Veja também

- Sintaxe [`...`](functions.arguments.md#functions.variable-arg-list)
- [func\_get\_arg()](function.func-get-arg.md) - Retorna um item de uma lista de argumentos
- [func\_num\_args()](function.func-num-args.md) - Retorna o número de argumentos passados ​​para a função
- [ReflectionFunctionAbstract::getParameters()](reflectionfunctionabstract.getparameters.md) - Obtém parâmetros

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
