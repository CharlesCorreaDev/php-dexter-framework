# Interpreta qualquer descrição textual de data/horário em inglês para timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strtotime.php

---

# strtotime

(PHP 4, PHP 5, PHP 7, PHP 8)

strtotime — Interpreta qualquer descrição textual de data/horário em inglês para timestamp Unix

### Descrição

function **strtotime**([string](language.types.string.md) `$datetime`, [?](language.types.null.md)[int](language.types.integer.md) `$baseTimestamp` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função espera que seja informada uma string contendo um formato de data em inglês US,
e tentará interpretá-lo para um timestamp Unix (o número de segundos
desde 1º de janeiro de 1970 00:00:00 GMT), relativo ao timestamp dado em
`baseTimestamp`, ou o horário atual se
`baseTimestamp` não for fornecido. A interpretação da string de data
está definida em [Formatos de Data e Horário](datetime.formats.md), e
tem várias considerações sutis. Rever os detalhes completos dessas definições é fortemente
recomendado.

**Aviso**

O timestamp Unix que esta função retorna não contém informação
sobre fuso horário. Para realizar cálculos com informação de data/horário,
deve-se usar a classe com mais capacidade [DateTimeImmutable](class.datetimeimmutable.md).

Cada parâmetro desta função utiliza o fuso horário padrão, a não ser que
um fuso horário seja especificado neste parâmetro. Tome cuidado para não utilizar
fusos horários diferentes em cada um dos parâmetros a não ser que seja o pretendido.
Veja a função [date\_default\_timezone\_get()](function.date-default-timezone-get.md) para verificar
as diversas formas de definir um fuso horário padrão.

### Parâmetros

`datetime`
:   Uma string de data/hora. Os formatos válidos são explicados em [Formatos de Data e Hora](datetime.formats.md).

`baseTimestamp`
:   O timestamp que será utilizado como base no cálculo das datas
    relativas.

### Valor Retornado

Retorna um timestamp em sucesso, **`false`** caso contrário.

### Erros/Exceções

Toda chamada a uma função de data/hora gerará um **`E_WARNING`**
se o fuso horário não for válido. Veja também [date\_default\_timezone\_set()](function.date-default-timezone-set.md)

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `baseTimestamp` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo da função **strtotime()****

```
<?php
echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
```

**Exemplo #2 Verificando erros**

```
<?php
$str = 'Not Good';

if (($timestamp = strtotime($str)) === false) {
    echo "A string ($str) tem problemas";
} else {
    echo "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
}
```

### Notas

> **Nota**:
>
> Data "relativa" neste caso também significa que se um componente em particular
> do timestamp de data/horário não for fornecido, ele será removido literalmente
> do parâmetro `baseTimestamp`. Isto é, `strtotime('February')`,
> se executado em 31 de maio de 2022, será interpretado como `31 de fevereiro de 2022`,
> o que vai transferir para um timestamp de `3 de março`
> (em um ano bissexto, seria `2 de março`). Usar
> `strtotime('1 February')` ou `strtotime('first day of February')`
> evitaria este problema.

> **Nota**:
>
> Se o número do ano for especificado no formato com dois dígitos, o valor
> entre 00-60 será mapeado para 2000-2069 e 70-99 para 1970-1999. Veja as notas a
> seguir para possíveis diferenças em sistemas de 32 bits (as datas possíveis acabam em
> 2038-01-19 03:14:07),

> **Nota**:
>
> O intervalo válido de um timestamp é tipicamente de Sex, 13 Dez
> 1901 20:45:54 GMT até Ter, 19 Jan 2038 03:14:07 GMT. Estas são datas que
> correspondem aos valores máximos e mínimos para
> um inteiro sem sinal em sistemas de 32 bits.
>
> Em versões do PHP em 64 bits, a faixa válida de um timestamp é praticamente
> infinita, já que 64 bits podem representar aproximadamente 293 bilhões de anos em ambas
> direções.

> **Nota**:
>
> O uso desta função para operações matemáticas não é recomendado.
> É melhor utilizar os métodos [DateTime::add()](datetime.add.md) e
> [DateTime::sub()](datetime.sub.md).

### Veja também

- [DateTimeImmutable](class.datetimeimmutable.md)
- [DateTimeImmutable::createFromFormat()](datetimeimmutable.createfromformat.md) - Interpreta um string de data/horário de acordo com o formato especificado
- [Formatos de Data e Horário](datetime.formats.md)
- [checkdate()](function.checkdate.md) - Valida uma data gregoriana
- [strptime()](function.strptime.md) - Interpreta uma data/horário gerada pela função strftime

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
