# Obtém linha do arquivo e interpreta como campos CSV

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fgetcsv.php

---

# SplFileObject::fgetcsv

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::fgetcsv — Obtém linha do arquivo e interpreta como campos CSV

### Descrição

public function **SplFileObject::fgetcsv**([string](language.types.string.md) `$separator` = ",", [string](language.types.string.md) `$enclosure` = "\"", [string](language.types.string.md) `$escape` = "\\"): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém uma linha do arquivo no formato CSV e retorna um array contendo os campos lidos.

> **Nota**:
>
> As configurações de localidade são consideradas por esta função.
> Por exemplo, dados em certas codificações de um byte podem ser interpretados
> incorretamente se **`LC_CTYPE`** for
> `en_US.UTF-8`.

### Parâmetros

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

**Aviso**

Quando o parâmetro `escape` for definido para algo diferente de uma string vazia
(`""`), isso pode resultar em um CSV que não esteja conforme a
[» RFC 4180](https://datatracker.ietf.org/doc/html/rfc4180) ou que não seja capaz de sobreviver a uma viagem de ida e volta
através das funções CSV do PHP. O padrão para `escape` é
`"\\"`, portanto é recomendado defini-lo explicitamente para a string vazia.
O valor padrão será alterado em uma versão futura do PHP, mas não antes do PHP 9.0.

### Valor Retornado

Retorna um array indexado contendo os campos lidos, ou **`false`** em caso de erro.

> **Nota**:
>
> Uma linha em branco em um arquivo CSV será retornada como um array
> composto por um único campo **`null`** a menos que esteja usando **`SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE`**,
> caso em que as linhas em branco são ignoradas.

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
| 7.4.0 | O parâmetro `escape` agora também aceita uma string vazia para desativar o mecanismo de escape proprietário. |

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fgetcsv()****

```
<?php
$file = new SplFileObject("data.csv");
while (!$file->eof()) {
    var_dump($file->fgetcsv());
}
?>
```

**Exemplo #2 Exemplo de **`SplFileObject::READ_CSV`****

```
<?php
$file = new SplFileObject("animals.csv");
$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $row) {
    list($animal, $class, $legs) = $row;
    printf("A %s is a %s with %d legs\n", $animal, $class, $legs);
}
?>
```

Conteúdo de animals.csv

```
crocodile,reptile,4
dolphin,mammal,0
duck,bird,2
koala,mammal,4
salmon,fish,0
```

O exemplo acima produzirá
algo semelhante a:

```
A crocodile is a reptile with 4 legs
A dolphin is a mammal with 0 legs
A duck is a bird with 2 legs
A koala is a mammal with 4 legs
A salmon is a fish with 0 legs
```

### Veja também

- [SplFileObject::fputcsv()](splfileobject.fputcsv.md) - Escreve um array de campos como uma linha CSV
- [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md) - Definir o delimitador, o encapsulador e o caractere de escape para CSV
- [SplFileObject::getCsvControl()](splfileobject.getcsvcontrol.md) - Obtém o delimitador, o caractere de fechamento e o caractere de escape para CSV
- [SplFileObject::setFlags()](splfileobject.setflags.md) - Define as opções para o SplFileObject
- **`SplFileObject::READ_CSV`**
- [SplFileObject::current()](splfileobject.current.md) - Recupera linha atual do arquivo
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
