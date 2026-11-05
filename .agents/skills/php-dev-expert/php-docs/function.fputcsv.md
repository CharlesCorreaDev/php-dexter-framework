# Formata a linha como CSV e a escreve em um ponteiro de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fputcsv.php

---

# fputcsv

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

fputcsv — Formata a linha como CSV e a escreve em um ponteiro de arquivo

### Descrição

function **fputcsv**(  
    [resource](language.types.resource.md) `$stream`,  
    [array](language.types.array.md) `$fields`,  
    [string](language.types.string.md) `$separator` = ",",  
    [string](language.types.string.md) `$enclosure` = "\"",  
    [string](language.types.string.md) `$escape` = "\\",  
    [string](language.types.string.md) `$eol` = "\n"  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**fputcsv()** formata uma linha (passada como um
array de campos `fields`) como CSV e a escreve
(terminando com uma nova linha `eol`) no fluxo de arquivo
especificado por `stream`.

### Parâmetros

`stream`
:   O ponteiro de arquivo deve ser válido e deve apontar para
    um arquivo aberto com sucesso por [fopen()](function.fopen.md) ou
    [fsockopen()](function.fsockopen.md) (e ainda não fechado por
    [fclose()](function.fclose.md)).

`fields`
:   Um array de [string](language.types.string.md)s.

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

`eol`
:   O parâmetro opcional `eol` define
    uma sequência customizada de Fim de Linha.

**Aviso**

Quando o parâmetro `escape` for definido para algo diferente de uma string vazia
(`""`), isso pode resultar em um CSV que não esteja conforme a
[» RFC 4180](https://datatracker.ietf.org/doc/html/rfc4180) ou que não seja capaz de sobreviver a uma viagem de ida e volta
através das funções CSV do PHP. O padrão para `escape` é
`"\\"`, portanto é recomendado defini-lo explicitamente para a string vazia.
O valor padrão será alterado em uma versão futura do PHP, mas não antes do PHP 9.0.

> **Nota**:
>
> Se um caractere `enclosure` estiver contido em um campo,
> ele sofrerá escape por duplicação, a menos que seja imediatamente precedido por um
> `escape`.

### Valor Retornado

Retorna o comprimento da string escrita ou **`false`** em caso de falha.

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
| 8.1.0 | O parâmetro opcional `eol` foi adicionado. |
| 7.4.0 | O parâmetro `escape` agora aceita uma string vazia para desabilitar o mecanismo de escape proprietário. |

### Examples

**Exemplo #1 Exemplo da **fputcsv()****

```
<?php

$lista = [
    ['aaa', 'bbb', 'ccc', 'dddd'],
    ['123', '456', '789'],
    ['"aaa"', '"bbb"']
];

$fp = fopen('file.csv', 'w');

foreach ($lista as $linha) {
    fputcsv($fp, $linha, ',', '"', '');
}

fclose($fp);
?>
```

O exemplo acima irá escrever o seguinte no arquivo `file.csv`:

```
aaa,bbb,ccc,dddd
123,456,789
"""aaa""","""bbb"""
```

### Veja também

- [fgetcsv()](function.fgetcsv.md) - Lê uma linha do ponteiro de arquivos e a interpreta como campos CSV
- [str\_getcsv()](function.str-getcsv.md) - Analisa uma string CSV e retorna os dados em um array
- [SplFileObject::fgetcsv()](splfileobject.fgetcsv.md) - Obtém linha do arquivo e interpreta como campos CSV
- [SplFileObject::fputcsv()](splfileobject.fputcsv.md) - Escreve um array de campos como uma linha CSV
- [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md) - Definir o delimitador, o encapsulador e o caractere de escape para CSV
- [SplFileObject::getCsvControl()](splfileobject.getcsvcontrol.md) - Obtém o delimitador, o caractere de fechamento e o caractere de escape para CSV

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
