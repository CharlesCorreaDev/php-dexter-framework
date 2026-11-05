# Interpreta a leitura de um arquivo de acordo com um formato

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fscanf.php

---

# fscanf

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

fscanf — Interpreta a leitura de um arquivo de acordo com um formato

### Descrição

function **fscanf**([resource](language.types.resource.md) `$stream`, [string](language.types.string.md) `$format`, [mixed](language.types.mixed.md) `&...$vars`): [array](language.types.array.md)|[int](language.types.integer.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

A função **fscanf()** é semelhante à
[sscanf()](function.sscanf.md), mas usa como entrada um arquivo
associado com o fluxo `stream` e interpreta a
entrada de acordo com o especificado em `format`.

Qualquer espaço em branco na string do formato corresponde a quaisquer espaços em branco
no fluxo de entrada. Isto significa que até mesmo uma tabulação (`\t`) na
string do formato pode corresponder a um único caractere de espaço no fluxo de entrada.

Cada chamada a **fscanf()** lê uma linha do arquivo.

### Parâmetros

`stream`
:   Um [resource](language.types.resource.md) de ponteiro do sistema de arquivos
    que normalmente é criado usando [fopen()](function.fopen.md).

`format`
:   O formato interpretado para `string`, que é
    descrito na documentação para [sprintf()](function.sprintf.md) com
    as seguintes diferenças:

    - A função não reconhece a localidade.
    - `F`, `g`, `G` e
      `b` não são suportados.
    - `D` significa número decimal.
    - `i` significa inteiro com detecção de base.
    - `n` representa o número de caracteres processados até o momento.
    - `s` pára de ler em qualquer caractere de espaço em branco.
    - `*` em vez de `argnum$` suprime
      a atribuição desta especificação de conversão.

`vars`
:   Os valores opcionais atribuídos.

### Valor Retornado

Se somente dois parâmetros forem passados a esta função, os valores interpretados
serão retornados como um [array](language.types.array.md). Do contrário, se parâmetros opcionais forem passados,
a função retornará o número de valores atribuídos. Os parâmetros opcionais
devem ser passados por referência.

Se houver mais substrings esperadas no parâmetro `format`
do que estiverem disponíveis na `string`,
**`null`** será retornado. Para outros erros, **`false`** será retornado.

Quando parâmetros opcionais são usados e o fim da entrada lida de
`stream` é alcançado antes que qualquer valor tenha sido
interpretado, `-1` é retornado.

### Examples

**Exemplo #1 Exemplo de **fscanf()****

```
<?php
$handle = fopen("users.txt", "r");
while ($userinfo = fscanf($handle, "%s\t%s\t%s\n")) {
    list ($name, $profession, $countrycode) = $userinfo;
    //... faz algo com os valores
}
fclose($handle);
?>
```

**Exemplo #2 Conteúdo de users.txt**

```
javier  argonaut        pe
hiroshi sculptor        jp
robert  slacker us
luigi   florist it
```

### Veja também

- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fgetss()](function.fgetss.md) - Ler uma linha de um ponteiro de arquivo e retira as tags HTML
- [sscanf()](function.sscanf.md) - Interpreta a entrada de uma string de acordo com um formato
- [printf()](function.printf.md) - Envia uma string formatada para a saída
- [sprintf()](function.sprintf.md) - Retona uma string formatada

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
