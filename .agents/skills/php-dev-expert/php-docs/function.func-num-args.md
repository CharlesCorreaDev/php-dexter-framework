# Retorna o número de argumentos passados ​​para a função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.func-num-args.php

---

# func\_num\_args

(PHP 4, PHP 5, PHP 7, PHP 8)

func\_num\_args — Retorna o número de argumentos passados ​​para a função

### Descrição

function **func\_num\_args**(): [int](language.types.integer.md)

Obtém o número de argumentos passados ​​para a função.

Esta função pode ser usada em conjunto com
[func\_get\_arg()](function.func-get-arg.md) e [func\_get\_args()](function.func-get-args.md)
para permitir que funções definidas pelo usuário aceitem listas de argumentos de comprimento variável.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de argumentos passados ​​para a função atual definida
pelo usuário.

### Erros/Exceções

Gera um aviso se for chamado de fora de uma função definida pelo usuário.

### Examples

**Exemplo #1 Exemplo de **func\_num\_args()****

```
<?php
function foo()
{
    echo "Número de argumentos: ", func_num_args(), PHP_EOL;
}

foo(1, 2, 3);
?>
```

O exemplo acima produzirá:

```
Número de argumentos: 3
```

### Notas

> **Nota**:
>
> A partir do PHP 8.0.0, a família de funções
> func\_\*() deve ser mais transparente em relação aos argumentos nomeados,
> tratando os argumentos como se fossem todos passados posicionalmente,
> e os argumentos ausentes são substituídos por seus valores padrão.
> Esta função ignora a coleção de argumentos variádicos nomeados desconhecidos.
> Argumentos nomeados desconhecidos que são coletados só podem ser acessados por meio do parâmetro variádico.

### Veja também

- Sintaxe [`...`](functions.arguments.md#functions.variable-arg-list)
- [func\_get\_arg()](function.func-get-arg.md) - Retorna um item de uma lista de argumentos
- [func\_get\_args()](function.func-get-args.md) - Retorna um array contendo uma lista de argumentos da função
- [ReflectionFunctionAbstract::getNumberOfParameters()](reflectionfunctionabstract.getnumberofparameters.md) - Obtém o número de parâmetros

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
