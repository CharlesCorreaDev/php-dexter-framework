# Escreve um array de campos como uma linha CSV

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fputcsv.php

---

# SplFileObject::fputcsv

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SplFileObject::fputcsv — Escreve um array de campos como uma linha CSV

### Descrição

public function **SplFileObject::fputcsv**(  
    [array](language.types.array.md) `$fields`,  
    [string](language.types.string.md) `$separator` = ",",  
    [string](language.types.string.md) `$enclosure` = "\"",  
    [string](language.types.string.md) `$escape` = "\\",  
    [string](language.types.string.md) `$eol` = "\n"  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Escreve o array de `fields` no arquivo
como uma linha CSV.

### Parâmetros

`fields`
:   Um array de valores.

`separator`
:   O delimitador de campo (apenas um caractere de um byte).
    Padrão é uma vírgula (`,`) ou o valor definido por uma chamada anterior a
    [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md).

`enclosure`
:   O caractere de delimitador de campo (apenas um caractere de um byte).
    Padrão é uma aspa dupla (`"`) ou o valor definido por uma chamada anterior a
    [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md).

`escape`
:   O caractere de escape (no máximo um caractere de um byte).
    Padrão é uma barra invertida (`\`) ou o valor definido por uma chamada anterior a
    [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md).
    Uma string vazia (`""`) desativa o mecanismo de escape proprietário.

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
    de [argumentos nomeados](functions.arguments.md#functions.named-arguments),
    ou por uma chamada a [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md).

`eol`
:   O parâmetro opcional `eol` define uma
    sequência de fim de linha personalizada.

**Aviso**

Quando o parâmetro `escape` for definido para algo diferente de uma string vazia
(`""`), isso pode resultar em um CSV que não esteja conforme a
[» RFC 4180](https://datatracker.ietf.org/doc/html/rfc4180) ou que não seja capaz de sobreviver a uma viagem de ida e volta
através das funções CSV do PHP. O padrão para `escape` é
`"\\"`, portanto é recomendado defini-lo explicitamente para a string vazia.
O valor padrão será alterado em uma versão futura do PHP, mas não antes do PHP 9.0.

> **Nota**:
>
> Se um caractere de `enclosure` estiver contido em um campo,
> ele será escapado duplicando-o, a menos que seja imediatamente precedido por um
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
| 7.4.0 | O parâmetro `escape` agora também aceita uma string vazia para desativar o mecanismo de escape proprietário. |

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fputcsv()****

```
<?php

$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$file = new SplFileObject('file.csv', 'w');

foreach ($list as $fields) {
    $file->fputcsv($fields);
}

?>
```

O exemplo acima escreverá o seguinte em `file.csv`:

```
aaa,bbb,ccc,dddd
123,456,789
"""aaa""","""bbb"""
```

### Veja também

- [SplFileObject::fgetcsv()](splfileobject.fgetcsv.md) - Obtém linha do arquivo e interpreta como campos CSV
- [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md) - Definir o delimitador, o encapsulador e o caractere de escape para CSV
- [SplFileObject::getCsvControl()](splfileobject.getcsvcontrol.md) - Obtém o delimitador, o caractere de fechamento e o caractere de escape para CSV
- [fputcsv()](function.fputcsv.md) - Formata a linha como CSV e a escreve em um ponteiro de arquivo
- [fgetcsv()](function.fgetcsv.md) - Lê uma linha do ponteiro de arquivos e a interpreta como campos CSV
- [str\_getcsv()](function.str-getcsv.md) - Analisa uma string CSV e retorna os dados em um array

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
