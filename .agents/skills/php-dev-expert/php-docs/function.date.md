# Formata um timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.date.php

---

# date

(PHP 4, PHP 5, PHP 7, PHP 8)

date — Formata um timestamp Unix

### Descrição

function **date**([string](language.types.string.md) `$format`, [?](language.types.null.md)[int](language.types.integer.md) `$timestamp` = **`null`**): [string](language.types.string.md)

Retorna uma string de acordo com a string de formato informada usando o
inteiro `timestamp` (timestamp Unix) informado, ou o horário local atual
se nenhum timestamp for informado. Em outras palavras, o parâmetro `timestamp`
é opcional e padronizado para o valor de [time()](function.time.md).

**Aviso**

Timestamps Unix não lidam com fusos horários. Use a
classe [DateTimeImmutable](class.datetimeimmutable.md) e seu
método de formatação [DateTimeInterface::format()](datetime.format.md) para
formatar informações de data/horário com um fuso horário anexado.

### Parâmetros

`format`
:   Formato aceito pelo [DateTimeInterface::format()](datetime.format.md).

    > **Nota**:
    >
    > **date()** irá sempre gerar
    > `000000` para os microssegundos já que ele usa um parâmetro [int](language.types.integer.md),
    > enquanto que [DateTimeInterface::format()](datetime.format.md)
    > suporta microssegundos se um objeto do tipo
    > [DateTimeInterface](class.datetimeinterface.md) foi criado com microssegundos.

`timestamp`
:   O parâmetro opcional `timestamp` é um
    [int](language.types.integer.md) de timestamp Unix cujo padrão é a hora local
    atual se `timestamp` não for informado ou for **`null`**. Em outras
    palavras, o padrão é o valor de [time()](function.time.md).

### Valor Retornado

Retorna uma string formatada de data.

### Erros/Exceções

Toda chamada a uma função de data/hora gerará um **`E_WARNING`**
se o fuso horário não for válido. Veja também [date\_default\_timezone\_set()](function.date-default-timezone-set.md)

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timestamp` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplos da função **date()****

```
<?php
// Modifica o fuso horário a ser utilizado.
date_default_timezone_set('UTC');

// Exibe algo coisa como: Monday
echo date("l") . "\n";

// Exibe algo como: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A') . "\n";

// Exibe: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . "\n";

/* Utiliza as constantes do parâmetro de formato */
// Exibe algo como: Mon, 15 Aug 2005 15:12:46 UTC
echo date(DATE_RFC2822) . "\n";

// Exibe algo como: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
```

Para evitar que um caractere reconhecido na string de formatação seja
expandido, prefixe-o com uma barra invertida. Se o caractere com a
barra invertida já for uma sequência especial, pode ser necessário também prefixá-lo com a
barra invertida.

**Exemplo #2 Caracteres de escape em **date()****

```
<?php
// Exibe algo como: Wednesday the 15th
echo date("l \\t\h\e jS");
```

Alguns exemplos de formatação de **date()**. Observe que
qualquer outro caractere deve ser escapado, pois qualquer um que possua
um significado especial produzirá resultados indesejáveis,
e outros caracteres podem assumir significado em futuras versões do PHP.
Quando usar escape, certifique-se de usar aspas simples para evitar que caracteres
como \n virem novas linhas.

**Exemplo #3 Formatação com a função **date()****

```
<?php
// Assumindo que hoje é dia 10 de março de 2001, 17:16:18, e que estamos no
// fuso horário Mountain Standard Time (MST)
date_default_timezone_set("America/Phoenix");

$today = date("F j, Y, g:i a") . "\n";                 // March 10, 2001, 5:16 pm
$today = date("m.d.y") . "\n";                         // 03.10.01
$today = date("j, n, Y") . "\n";                       // 10, 3, 2001
$today = date("Ymd") . "\n";                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day') . "\n";     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.') . "\n";   // it is the 10th day.
$today = date("D M j G:i:s T Y") . "\n";               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h') . "\n";     // 17:03:18 m is month
$today = date("H:i:s") . "\n";                         // 17:16:18
$today = date("Y-m-d H:i:s") . "\n";                   // 2001-03-10 17:16:18 (o formato DATETIME do MySQL)
```

Para formatar datas em outros idiomas,
[IntlDateFormatter::format()](intldateformatter.format.md)
pode ser utilizada em vez de **date()**.

### Notas

> **Nota**:
>
> Para gerar um timestamp de uma string da representação da data,
> pode-se utilizar as funções [strtotime()](function.strtotime.md). Adicionalmente, alguns
> banco de dados tem funções para converter os formatos de data para
> timestamps (como a função [» UNIX\_TIMESTAMP](https://dev.mysql.com/doc/mysql/en/date-and-time-functions.html) do MySQL).

**Dica**

O timestamp do início da requisição está disponível na variável
[$\_SERVER['REQUEST\_TIME']](reserved.variables.server.md).

### Veja também

- [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md) - Retorna um novo objeto DateTimeImmutable
- [DateTimeInterface::format()](datetime.format.md) - Retorna a data formatada de acordo com um formato informado
- [gmdate()](function.gmdate.md) - Formata uma data/horário GMT/CUT
- [idate()](function.idate.md) - Formata uma parte de uma data/horário local como um inteiro
- [getdate()](function.getdate.md) - Recupera informações de data/horário
- [getlastmod()](function.getlastmod.md) - Obtém o horário da última modificação na página
- [mktime()](function.mktime.md) - Obtém um timestamp Unix de uma data
- [IntlDateFormatter::format()](intldateformatter.format.md) - Formata data/horário como uma string
- [time()](function.time.md) - Retorna o timestamp Unix atual
- [Constantes Predefinidas da Classe DateTime](class.datetimeinterface.md#datetimeinterface.constants.types)

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
