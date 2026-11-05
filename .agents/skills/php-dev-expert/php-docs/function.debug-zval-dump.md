# Exibe na saída uma representação em string de uma estrutura zval interna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.debug-zval-dump.php

---

# debug\_zval\_dump

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

debug\_zval\_dump — Exibe na saída uma representação em string de uma estrutura zval interna

### Descrição

function **debug\_zval\_dump**([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Descarrega para a saída uma representação em string de uma estrutura zval interna (valor Zend).
Muito útil para entender ou depurar detalhes de implementação do
motor Zend ou de extensões PHP.

### Parâmetros

`value`
:   A variável ou valor a exibir.

`values`
:   Mais variáveis ou valores a exibir.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **debug\_zval\_dump()** agora indica se um array é compactado (packed). |

### Examples

**Exemplo #1 Exemplo de **debug\_zval\_dump()****

```
<?php
$var1 = 'Olá,';
$var1 .= ' Mundo';
$var2 = $var1;

debug_zval_dump($var1);
?>
```

O exemplo acima produzirá:

```
string(10) "Olá, Mundo" refcount(3)
```

> **Nota**:
> **Entendendo o `refcount` (contagem de referências)**  
>
> O valor de `refcount` mostrado por este função pode ser
> surpreendente sem um entendimento detalhado da implementação interna do motor.
>
> O Motor Zend usa contagem de referência para dois propósitos diferentes:
>
> - Otimização de uso de memória usando a técnica chamada "cópia na escrita",
>   onde múltiplas variáveis com o mesmo valor apontam para o mesma posição
>   na memória. Quando alguma dessas variáveis é modificada, ela é apontada para uma
>   nova cópia na memória, e a contagem de referências na original é diminuída em 1.
> - Rastrear variáveis que foram atribuídas ou passadas por referência (consulte
>   [Referências](language.references.md)). Esta contagem de
>   referências é armazenada em um zval de referência separado, apontando para o zval
>   correspondente ao valor atual. Este zval adicional atualmente não é mostrado pela função
>   **debug\_zval\_dump()**.
>
> Como a função **debug\_zval\_dump()** recebe suas entradas como
> parâmetros normais, passados por valor, a técnica de cópia na escrita será usada
> para passá-los: em vez de copiar os dados, a contagem de referências será adicionada
> em uma unidade durante toda a duração da chamada à função. Se a função modificasse o
> parâmetro depois de recebê-lo, então seria feita uma cópia; como ela não modifica,
> ela irá mostrar uma contagem uma unidade acima em relação ao escopo que a chamou.
>
> A passagem de parâmetros também evita que **debug\_zval\_dump()**
> mostre variáveis que foram atribuídas por referência. Para ilustrar,
> considere uma versão levemente modificada do exemplo acima:
>
> ```
> <?php
> $var1 = 'Olá,';
> $var1 .= ' Mundo';
> // Aponta três variáveis como referências ao mesmo valor
> $var2 =& $var1;
> $var3 =& $var1;
>
> debug_zval_dump($var1);
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> string(10) "Olá, Mundo" refcount(2)
> ```
>
> Embora $var1, $var2 e
> $var3 estejam ligadas como referências, apenas o
> *valor* é passado a **debug\_zval\_dump()**.
> Este valor é usado uma vez pelo conjunto de referências, e uma vez dentro de
> **debug\_zval\_dump()**, por isso mostra uma contagem de 2.
>
> Complicações adicionais aparecem por conta de otimizações implementadas no motor para
> diferentes tipos de dados. Alguns tipos como inteiros não usam "cópia na escrita",
> por isso não exibem nenhuma contagem de referência. Em outros casos, a contagem mostra cópias
> extras usadas internamente, como quando uma string ou array literais são armazenados como
> parte de uma instrução de código.

### Veja também

- [var\_dump()](function.var-dump.md) - Despeja na saída informações sobre uma variável
- [debug\_backtrace()](function.debug-backtrace.md) - Gera uma rastreamento retroativo
- [Referências](language.references.md)
- [» Referências Explicadas (por Derick Rethans)](https://derickrethans.nl/php_references_article.php)

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
