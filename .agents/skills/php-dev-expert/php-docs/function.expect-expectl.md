# Espera até que a saída de um processo corresponda a um
  dos padrões, um período de tempo especificado tenha passado ou um EOF seja alcançado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.expect-expectl.php

---

# expect\_expectl

(PECL expect >= 0.1.0)

expect\_expectl — Espera até que a saída de um processo corresponda a um
dos padrões, um período de tempo especificado tenha passado ou um EOF seja alcançado

### Descrição

function **expect\_expectl**([resource](language.types.resource.md) `$expect`, [array](language.types.array.md) `$cases`, [array](language.types.array.md) `&$match` = ?): [int](language.types.integer.md)

Espera até que a saída de um processo corresponda a um dos padrões,
um período de tempo especificado tenha passado ou um EOF seja alcançado.

Se `match` for fornecido, então ele será preenchido com o resultado da pesquisa.
A string correspondente pode ser encontrada em `match[0]`.
As substrings de correspondência (de acordo com os parênteses) no padrão original podem ser encontradas
em `match[1]`, `match[2]` e assim por
diante, até `match[9]` (a limitação do libexpect).

### Parâmetros

`expect`
:   Um fluxo Expect, previamente aberto com
    [expect\_popen()](function.expect-popen.md).

`cases`
:   Um array de casos Expect. Cada caso é um array indexado,
    como descrito na tabela a seguir:

    **Array de Casos Expect**

    | Chave do Índice | Tipo do Valor | Descrição | Mandatório | Valor Padrão |
    | --- | --- | --- | --- | --- |
    | 0 | string | padrão que será comparado com a saída do fluxo | sim |  |
    | 1 | mixed | valor que será retornado por esta função se o padrão for correspondido | sim |  |
    | 2 | inteiro | tipo do padrão, uma das opções: [**`EXP_GLOB`**](expect.constants.md#constant.exp-glob), [**`EXP_EXACT`**](expect.constants.md#constant.exp-exact) ou [**`EXP_REGEXP`**](expect.constants.md#constant.exp-regexp) | não | [**`EXP_GLOB`**](expect.constants.md#constant.exp-glob) |

### Valor Retornado

Retorna o valor associado com o padrão que foi correspondido.

Em caso de falha, esta função retorna:
[**`EXP_EOF`**](expect.constants.md#constant.exp-eof),
[**`EXP_TIMEOUT`**](expect.constants.md#constant.exp-timeout)
ou
[**`EXP_FULLBUFFER`**](expect.constants.md#constant.exp-fullbuffer)

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL expect 0.2.1 | Antes da versão 0.2.1, uma string de correspondência era retornada no parâmetro `match`, e não um array de substrings correspondidas. |

### Examples

**Exemplo #1 Exemplo de **expect\_expectl()****

```
<?php
// Copia arquivo do servidor remoto:
ini_set("expect.timeout", 30);

$stream = fopen("expect://scp user@remotehost:/var/log/messages /home/user/messages.txt", "r");

$cases = array(
    // array(padrão, valor a retornar se houver correspondência)
    array("senha:", "pediu senha"),
    array("sim/não)?",  "perguntou sim ou não")
);

while (true) {
    switch (expect_expectl($stream, $cases)) {
        case "pediu senha":
            fwrite($stream, "minha senha\n");
            break;
        case "perguntou sim ou não":
            fwrite($stream, "sim\n");
            break;
        case EXP_TIMEOUT:
        case EXP_EOF:
            break 2; // sai do switch e do while
        default:
            die("Ocorreu um erro!");
    }
}

fclose($stream);
?>
```

### Veja também

- [expect\_popen()](function.expect-popen.md) - Executa comando via Bourne shell, e abre o fluxo PTY para
  o processo

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
