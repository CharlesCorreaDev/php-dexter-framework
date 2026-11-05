# Operadores de Controle de Erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.errorcontrol.php

---

## Operadores de Controle de Erro

O PHP suporta um operador de controle de erro: o sinal 'arroba' (`@`).
Quando ele precede uma expressão em PHP, qualquer mensagem de erro que possa ser
gerada por aquela expressão será ignorada.

Se um manipulador de erro personalizado estiver configurado com
[set\_error\_handler()](function.set-error-handler.md), ele ainda assim será chamado,
mesmo com a mensagem de diagnóstico suprimida.

**Aviso**

Antes do PHP 8.0.0, [error\_reporting()](function.error-reporting.md) chamada dentro de um manipulador de erro
sempre retornava `0` se a mensagem de erro era suprimida pelo operador `@`.
Desde o PHP 8.0.0, ele retorna o valor da expressão bitwise dos valores:
`E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR | E_PARSE`.

Quaisquer mensagens de erro geradas na expressão ficam disponíveis no elemento `"message"`
do array retornado por [error\_get\_last()](function.error-get-last.md).
O resultado daquela função irá se alterar em cada erro, então é necessário fazer a verificação imediatamente.

**Exemplo #1 Erro de arquivo intencional**

```
<?php
$my_file = @file ('arquivo_nao_existente') or
    die ("Falha abrindo arquivo: erro foi '" . error_get_last()['message'] . "'");
?>
```

**Exemplo #2 Suprimindo expressões**

```
<?php
// Isto funciona para qualquer expressão, não apenas para funções:
$value = @$cache[$key];
// não haverá nenhum aviso se a chave $key não existir.
?>
```

> **Nota**:
>
> O operador `@` funciona somente em
> [expressões](language.expressions.md).
> Uma regra simples para lembrar disso: se você pode pegar o valor de alguma coisa,
> você pode prefixar isso com o operador `@`.
> Por exemplo, ele pode prefixar variáveis, chamadas de funções,
> alguns constructos de linguagem ([include](function.include.md)),
> e assim por diante.
> O operador não pode ser prefixado em definições de classes ou funções,
> estruturas condicionais como `if`,
> [`foreach`](control-structures.foreach.md), e semelhantes.

**Aviso**

Antes do PHP 8.0.0, o operador `@` conseguia
inibir erros críticos que iriam encerrar a execução do script.
Por exemplo, prefixar `@` numa chamada de uma função
inexistente, por estar indisponível ou por erro de digitação, iria
encerrar o script sem nenhuma indicação da causa.

### Veja também

- [error\_reporting()](function.error-reporting.md)
- [Manipulação de erros e funções de log](ref.errorfunc.md)

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
