# Definir o delimitador, o encapsulador e o caractere de escape para CSV

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.setcsvcontrol.php

---

# SplFileObject::setCsvControl

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

SplFileObject::setCsvControl — Definir o delimitador, o encapsulador e o caractere de escape para CSV

### Descrição

public function **SplFileObject::setCsvControl**([string](language.types.string.md) `$separator` = ",", [string](language.types.string.md) `$enclosure` = "\"", [string](language.types.string.md) `$escape` = "\\"): [void](language.types.void.md)

Define o delimitador, o caractere de contorno e o caractere de escape para a
análise dos campos CSV.

### Parâmetros

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

Nenhum valor é retornado.

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

**Exemplo #1 Exemplo de **SplFileObject::setCsvControl()****

```
<?php
$file = new SplFileObject("data.csv");
$file->setFlags(SplFileObject::READ_CSV);
$file->setCsvControl('|');
foreach ($file as $row) {
    list ($fruit, $quantity) = $row;
    // Faça algo com os valores
}
?>
```

Conteúdo de data.csv

```
<?php
apples|20
bananas|14
cherries|87
?>
```

### Veja também

- [SplFileObject::getCsvControl()](splfileobject.getcsvcontrol.md) - Obtém o delimitador, o caractere de fechamento e o caractere de escape para CSV
- [SplFileObject::fgetcsv()](splfileobject.fgetcsv.md) - Obtém linha do arquivo e interpreta como campos CSV
- [SplFileObject::fputcsv()](splfileobject.fputcsv.md) - Escreve um array de campos como uma linha CSV
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
