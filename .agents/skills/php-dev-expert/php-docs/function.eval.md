# Avalia uma string como código PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eval.php

---

# eval

(PHP 4, PHP 5, PHP 7, PHP 8)

eval — Avalia uma string como código PHP

### Descrição

function **eval**([string](language.types.string.md) `$code`): [mixed](language.types.mixed.md)

Avalia a string fornecida no parâmetro `code` como um código PHP.

O código a ser avaliado herda o
[escopo de variáveis](language.variables.scope.md)
da linha na qual a chamada a **eval()** ocorrer.
Todas as variáveis disponíveis naquela linha estarão disponíveis para leitura e
modificação no código avaliado.
Entretanto, todas as funções e classes definidas serão definidas no espaço de nomes global.
Em outras palavras, o compilador considera o código avaliado como se ele fosse um
arquivo [incluído](function.include.md) separadamente.

**Cuidado**

A construção de linguagem **eval()** é *bastante perigosa*
porque permite execução de código PHP arbitrário. *Seu uso é contudo
desencorajado.* Se foi cuidadosamente verificado que não há outra opção
a não ser usar esta construção, deve-se prestar atenção especial para *não passar nenhum dado
fornecido pelo usuário* no parâmetro sem antes validá-lo.

### Parâmetros

`code`
:   Código PHP válido a ser avaliado.

    O código não pode ser envolvido em
    [etiquetas PHP](language.basic-syntax.phpmode.md) de abertura e de fechamento, isto é,
    `'echo "Hi!";'` deve ser passado ao invés de
    `'<?php echo "Hi!"; ?>'`. Ainda é possível sair e re-entrar
    no modo PGP usando-se os marcadores apropriados, ex.:
    `'echo "In PHP mode!"; ?>In HTML mode!<?php echo "Back in PHP mode!";'`.

    Além disso, o código informado deve ser código PHP válido. Isto inclui o fato de que todas
    as instruções devem ser adequadamente terminadas com ponto-e-vírgula.
    `'echo "Hi!"'` por exemplo causará um erro de avaliação, enquanto que
    `'echo "Hi!";'` funcionará.

    Uma instrução `return` irá terminar imediatamente a
    avaliação do código.

    o código será executado no escopo do código que está chamando **eval()**. Todas
    as variáveis definidas ou alteradas na chamada a **eval()** permanecerão visíveis depois
    que ela terminar.

### Valor Retornado

**eval()** retorna **`null`** a menos que
`return` seja chamado no código avaliado, neste caso
o valor passado a `return` será o retornado. A partir do PHP 7, se houver um
erro de avaliação no código, **eval()** lança uma exceção [ParseError](class.parseerror.md).
Antes do PHP 7, neste caso **eval()** retornava
**`false`** e a execução do código seguinte continuava normalmente. Não
é possível capturar um erro de avaliação em **eval()**
usando [set\_error\_handler()](function.set-error-handler.md).

### Examples

**Exemplo #1 Exemplo de **eval()** - fusão simples de texto**

```
<?php
$string = 'xícara';
$nome = 'café';
$str = 'Isto é uma $string com meu $nome.';
echo $str. "\n";
eval("\$str = \"$str\";");
echo $str. "\n";
?>
```

O exemplo acima produzirá:

```
Isto é uma $string com meu $nome.
Isto é uma xícara com meu café.
```

### Notas

> **Nota**:
>
> Como esta é uma
> construção da linguagem e não uma função, ela não pode ser chamada usando
> [funções variáveis](functions.variable-functions.md)
> ou [argumentos nomeados](functions.arguments.md#functions.named-arguments).

**Dica**

Assim como qualquer coisa que envia
seu resultado diretamente para o navegador, as [funções de controle de saída](book.outcontrol.md) podem ser usadas para capturar
a saída desta função e salvá-la em uma
[string](language.types.string.md), por exemplo.

> **Nota**:
>
> Em caso de erro fatal no código avaliado, todo o script é terminado.

### Veja também

- [call\_user\_func()](function.call-user-func.md) - Chama a função de retorno informada no primeiro parâmetro

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
