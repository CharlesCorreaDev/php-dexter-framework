# Lê uma linha do ponteiro de arquivos e a interpreta como campos CSV

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fgetcsv.php

---

# fgetcsv

(PHP 4, PHP 5, PHP 7, PHP 8)

fgetcsv — Lê uma linha do ponteiro de arquivos e a interpreta como campos CSV

### Descrição

function **fgetcsv**(  
    [resource](language.types.resource.md) `$stream`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**,  
    [string](language.types.string.md) `$separator` = ",",  
    [string](language.types.string.md) `$enclosure` = "\"",  
    [string](language.types.string.md) `$escape` = "\\"  
): [array](language.types.array.md)|[false](language.types.singleton.md)

Similar à função [fgets()](function.fgets.md), exceto que a
**fgetcsv()** interpreta a linha em busca de campos no
formato CSV e retorna um array contendo os campos
lidos.

> **Nota**:
>
> As configurações de localidade são consideradas por esta função.
> Por exemplo, dados em certas codificações de um byte podem ser interpretados
> incorretamente se **`LC_CTYPE`** for
> `en_US.UTF-8`.

### Parâmetros

`stream`
:   Um ponteiro de arquivo válido para um arquivo aberto com sucesso por
    [fopen()](function.fopen.md), [popen()](function.popen.md) ou
    [fsockopen()](function.fsockopen.md).

`length`
:   Deve ser maior do que a maior linha (em caracteres) a ser encontrada no
    arquivo CSV (considerando também os caracteres de fim-de-linha). Caso contrário a
    linha é dividida em partes de `length` caracteres,
    a não ser que a divisão ocorra dentro de um caractere que cerca os campos (enclosure).

    Se este parâmetro for omitido (ou definido em 0
    ou **`null`** a partir do PHP 8.0.0), o tamanho máximo das linhas não é limitado, o que é
    um pouco mais lento.

`separator`
:   O parâmetro `separator` define o delimitador de campo.
    Precisa ser um caractere de um byte.

`enclosure`
:   O parâmetro `enclosure` define o caractere que cerca um campo.
    Precisa ser um caractere de um byte.

`escape`
:   O parâmetro `escape` define o caractere de escape.
    Precisa ser um caractere de um byte ou uma string vazia.
    Uma string vazia (`""`) desabilita o mecanismo de escape proprietário.

    **Aviso**

    No fluxo de entrada, o caractere `enclosure`
    sempre pode ser escapado por duplicação dentro de uma string delimitada,
    resultando em um único caractere `enclosure`
    no resultado interpretado.
    O caractere `escape` funciona de forma diferente:
    Se uma sequência de caracteres `escape` e
    `enclosure` aparecerem no fluxo,
    ambos os caracteres estarão presentes no valor interpretado.
    Portanto, para os parâmetros padrão, uma linha CSV como
    `"a""b","c\"d"` terá os campos interpretados como
    `a"b` e `c\"d`, respectivamente.

    **Aviso**

    A partir do PHP 8.4.0, depender do valor padrão de
    `escape` foi descontinuado.
    Ele precisa ser fornecido explicitamente tanto por posição quanto pelo uso
    de [argumentos nomeados](functions.arguments.md#functions.named-arguments).

**Aviso**

Quando o parâmetro `escape` for definido para algo diferente de uma string vazia
(`""`), isso pode resultar em um CSV que não esteja conforme a
[» RFC 4180](https://datatracker.ietf.org/doc/html/rfc4180) ou que não seja capaz de sobreviver a uma viagem de ida e volta
através das funções CSV do PHP. O padrão para `escape` é
`"\\"`, portanto é recomendado defini-lo explicitamente para a string vazia.
O valor padrão será alterado em uma versão futura do PHP, mas não antes do PHP 9.0.

### Valor Retornado

Retorna um array indexado contendo os campos lidos em caso de sucesso, ou **`false`** em caso de falha.

> **Nota**:
>
> Uma linha em branco em um arquivo CSV será retornada como um array
> contendo um único campo nulo ([null](language.types.null.md)) e não será tratada
> como um erro.

> **Nota**:
>
> Se o PHP não estiver reconhecendo corretamente
> os finais de linha ao ler arquivos em um computador Macintosh ou que foram criados
> em um, habilitar a opção de configuração em tempo de execução
> [auto\_detect\_line\_endings](filesystem.configuration.md#ini.auto-detect-line-endings)
> pode ajudar a resolver o problema.

### Erros/Exceções

Lança uma [ValueError](class.valueerror.md) se
`separator` ou `enclosure`
não tiver comprimento de um byte.

Lança uma [ValueError](class.valueerror.md) se
`escape` não tiver comprimento de um byte ou se for uma string vazia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Depender do valor padrão de `escape` agora está descontinuado. |
| 8.3.0 | Uma string vazia é retornada ao invés de uma string com um único byte nulo para o último campo, se ele contiver apenas um demarcador não terminado. |
| 8.0.0 | O parâmetro `length` agora pode ser nulo. |
| 7.4.0 | O parâmetro `escape` agora aceita uma string vazia para desabilitar o mecanismo de escape proprietário. |

### Examples

**Exemplo #1 Lê e imprime todo o conteúdo de um arquivo CSV**

```
<?php

if (($handle = fopen("test.csv", "r")) !== false) {
    $row = 1;

    while (($fields = fgetcsv($handle, 1000, ",", "\"", "\\")) !== false) {
        $num = count($fields);

        echo "\n<p>$num campos na linha $row:</p>\n<ol>";

        for ($c = 0; $c < $num; $c++) {
            echo "\n\t<li>", $fields[$c], "</li>";
        }

        echo "\n</ol>";

        $row++;
    }

    fclose($handle);
}
```

### Veja também

- [fputcsv()](function.fputcsv.md) - Formata a linha como CSV e a escreve em um ponteiro de arquivo
- [str\_getcsv()](function.str-getcsv.md) - Analisa uma string CSV e retorna os dados em um array
- [SplFileObject::fgetcsv()](splfileobject.fgetcsv.md) - Obtém linha do arquivo e interpreta como campos CSV
- [SplFileObject::fputcsv()](splfileobject.fputcsv.md) - Escreve um array de campos como uma linha CSV
- [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md) - Definir o delimitador, o encapsulador e o caractere de escape para CSV
- [SplFileObject::getCsvControl()](splfileobject.getcsvcontrol.md) - Obtém o delimitador, o caractere de fechamento e o caractere de escape para CSV
- [explode()](function.explode.md) - Divide uma string com base em outra string
- [file()](function.file.md) - Lê todo o arquivo para um array
- [pack()](function.pack.md) - Empacota dados em uma string binária

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
