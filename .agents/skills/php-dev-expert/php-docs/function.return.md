# return

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.return.php

---

## return

(PHP 4, PHP 5, PHP 7, PHP 8)

A declaração `return` retorna o controle do programa para o módulo que o chamou.
A execução continuará na expressão seguinte à invocação do módulo.

Se chamada dentro de uma função, a declaração `return`
terminará imediatamente sua execução, e
retornará seus argumentos como valor à chamada da função.
A declaração `return` também termina a execução de
uma declaração [eval()](function.eval.md) ou um arquivo de script.

Se chamada no escopo global, a execução do script atual
é finalizada. Se o arquivo de script atual for incluído
ou requerido com as funções [include](function.include.md) ou [require](function.require.md),
o controle é passado de volta ao script que está chamando. Além disso, se
o script atual foi incluído com a função [include](function.include.md), o
valor informado ao `return` será retornado como
o valor da chamada de [include](function.include.md). Se um
`return` for chamado de dentro do script principal,
sua execução será finalizada. Se o script atual for
mencionado nas opções de configuração [auto\_prepend\_file](ini.core.md#ini.auto-prepend-file) ou [auto\_append\_file](ini.core.md#ini.auto-append-file)
php.ini,
a execução do script será finalizada.

Para mais informações, consulte a seção sobre [Retornando Valores](functions.returning-values.md).

> **Nota**:
>
> Observe que, como `return` é um construtor
> de linguagem e não uma função, os parênteses que envolvem seus
> argumentos não são exigidos e seu uso é desencorajado.

> **Nota**:
>
> Se nenhum parâmetro for informado, e os parênteses omitidos,
> **`null`** será
> retornado. Chamar um `return` com parênteses mas
> sem argumentos resultará em um erro de interpretação.

A partir do PHP 7.1.0, declarações 'return' sem um argumento em funções que declaram um tipo de retorno acionam **`E_COMPILE_ERROR`**,
a não ser que o tipo de retorno seja [void](language.types.void.md), nesse caso declarações 'return'
com um argumento acionam esse erro.

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
