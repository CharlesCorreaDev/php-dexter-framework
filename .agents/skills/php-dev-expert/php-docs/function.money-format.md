# Formata um número como uma string de moeda

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.money-format.php

---

# money\_format

(PHP 4 >= 4.3.0, PHP 5, PHP 7)

money\_format — Formata um número como uma string de moeda

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **money\_format**([string](language.types.string.md) `$format`, [float](language.types.float.md) `$number`): [string](language.types.string.md)

**money\_format()** retorna uma versão formatada do número
informado no parâmetro `number`. Esta função engloba a biblioteca de
função do C **strfmon()**, com a diferença que esta
implementação converte apenas um número por vez.

### Parâmetros

`format`
:   A especificação do formato consiste na seguinte sequência:

    - um caractere `%`
    - opções facultativas
    - largura de campo, opcional
    - precisão à esquerda, opcional
    - precisão à direita, opcional
    - conversão de caractere, requerida

    ##### Opções

    Uma ou mais das opções abaixo podem ser usadas:

    `=`f
    :   O caracter `=` seguido por um caractere (único byte)
        f para ser usado como o caractere númerico de
        preenchimento. O caractere de preenchimento padrão é o espaço.

    `^`
    :   Desabilita o uso de agrupamento de caractere (como definido
        pela localidade atual).

    `+` ou `(`
    :   Especifica o estilo de formatação para números positivos e negativos.
        Se `+` for usado, o equivalente da localidade para
        `+` e `-` será usado. Se
        `(` for usado, quantidades negativas são fechadas entre parênteses.
        se nenhuma especificação é passada, o padrão será
        `+`.

    `!`
    :   Suprime o símbolo atual da string de saída.

    `-`
    :   Se presente, isto fará todos os campos justificados à esquerda (arrumados para a
        direita), em oposição ao padrão que é para campos serem justificados à direita
        (arrumados para a esquerda).

    ##### Largura de campo

    w
    :   Uma string de dígito decimal especificando uma largura de campo mínima. O campo
        será justificado à direita a menos que a opção `-` seja usada.
        Valor padrão é 0 (zero) por definição.

    ##### Precisão à esquerda

    `#`n
    :   O número máximo de dígitos (n) esperado à
        esquerda do caracatere separador de decimais (ex.: vírgula). Isto é usado
        normalmente para manter a saída formatada alinhada nas mesmas colunas,
        usando o caractere de preenchimento se o número de dígitos for menor que
        n. Se o número de dígitos atual for maior que
        n, esta especificação é
        ignorada.

        Se o agrupamento foi suprimido usando a opção `^`,
        separadores de agrupamento serão inseridos antes dos caracteres de
        preenchimento (se houver), mesmo se o caractere de preenchimento
        for um dígito.

        Para garantir alinhamento, quaisquer caracteres que ocorrerem antes ou depois do
        número na saída formatada, como moeda ou símbolos de sinal, são arrumados conforme
        necessário, com caracteres de espaço para fazer seus formatos positivos e negativos
        em um comprimento igual.

    ##### Precisão à direita

    `.`p
    :   Um ponto seguido por um número de dígitos (p) depois
        do caractere separador de decimais. Se o valor de p for 0 (zero), o
        caractere separador de decimais e os digitos à sua direita serão omitidos. Se nenhuma precisão à
        direita for incluida, o padrão será ditado pela localidade atual em uso. A quantidade sendo
        formatada é arredondada para o número de dígitos especificados a priori para ser
        formatado.

    ##### Caracteres de conversão

    `i`
    :   O número é formatado de acordo com o formato de moeda internacional da localidade
        (ex. para a localidade en\_US: USD 1,234.56).

    `n`
    :   O número é formatado de acordo com o formato de moeda nacional da localidade
        (ex. para a localidade de\_DE: DM1.234,56).

    `%`
    :   Retorna o caractere `%`.

`number`
:   O número a ser formatado.

### Valor Retornado

Retorna a string formatada. Os caracteres antes e depois da string de
formatação serão retornados sem modificação.
O parâmetro `number` com dígitos inválidos causa o retorno de **`null`** e
o lançamento de um **`E_WARNING`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. Utilize [NumberFormatter::formatCurrency()](numberformatter.formatcurrency.md) em seu lugar. |

### Examples

**Exemplo #1 Exemplo de **money\_format()****

Diferentes localidades e especificações de formatos são usados no exemplo abaixo para
ilustrar o uso desta função.

```
<?php

$number = 1234.56;

// Exibindo o formato internacional para a localidade en_US
setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $number) . "\n";
// USD 1,234.56

// Formato italiano com duas casas decimais
setlocale(LC_MONETARY, 'it_IT');
echo money_format('%.2n', $number) . "\n";
// Eu 1.234,56

// Usando número negativo
$number = -1234.5672;

// Formato nacional americano, usando () para números negativos
// e 10 dígitos de precisão à esquerda
setlocale(LC_MONETARY, 'en_US');
echo money_format('%(#10n', $number) . "\n";
// ($        1,234.57)

// Formato similar ao anterior, adicionando o uso de 2 dígitos para precisão
// à direita e '*' como caractere de preenchimento
echo money_format('%=*(#10.2n', $number) . "\n";
// ($********1,234.57)

// Valor alinhado à esquerda, com 14 posições de largura, 8 dígitos de
// precisão à esquerda, 2 à direita, sem caractere de agrupamento
// e usando o formato internacional da localidade de_DE.
setlocale(LC_MONETARY, 'de_DE');
echo money_format('%=*^-14#8.2i', 1234.56) . "\n";
// Eu 1234,56****

// Adicionando texto antes e depois da especificação de conversão
setlocale(LC_MONETARY, 'en_GB');
$fmt = 'O valor final é %i (depois de 10%% de desconto)';
echo money_format($fmt, 1234.56) . "\n";
// O valor final é  GBP 1,234.56 (depois de 10%% de desconto)

?>
```

### Notas

> **Nota**:
>
> A função **money\_format()** é apenas definida se
> o sistema tem capacidades de strfmon. Por exemplo, o Windows não tem esta definição,
> portanto, **money\_format()** está indefinida no Windows.

> **Nota**:
>
> A categoria **`LC_MONETARY`** de configurações de localidade,
> afeta o comportamento desta função. Utilize [setlocale()](function.setlocale.md) para definir
> a localidade padrão adequadamente antes de usar esta função.

### Veja também

- [setlocale()](function.setlocale.md) - Define informação de localidade
- [sscanf()](function.sscanf.md) - Interpreta a entrada de uma string de acordo com um formato
- [sprintf()](function.sprintf.md) - Retona uma string formatada
- [printf()](function.printf.md) - Envia uma string formatada para a saída
- [number\_format()](function.number-format.md) - Formata um número com milhares agrupados

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
