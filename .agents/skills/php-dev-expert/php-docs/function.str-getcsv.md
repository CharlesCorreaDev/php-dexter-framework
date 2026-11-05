# Analisa uma string CSV e retorna os dados em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-getcsv.php

---

# str\_getcsv

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

str\_getcsv — 
Analisa uma string CSV e retorna os dados em um array

### Descrição

function **str\_getcsv**(  
    [string](language.types.string.md) `$string`,  
    [string](language.types.string.md) `$separator` = ",",  
    [string](language.types.string.md) `$enclosure` = "\"",  
    [string](language.types.string.md) `$escape` = "\\"  
): [array](language.types.array.md)

Interpreta uma string de entrada procurando por campos no formato CSV
e retorna um array contendo os campos encontrados.

> **Nota**:
>
> As configurações de localidade são consideradas por esta função.
> Por exemplo, dados em certas codificações de um byte podem ser interpretados
> incorretamente se **`LC_CTYPE`** for
> `en_US.UTF-8`.

### Parâmetros

`string`
:   A string a ser analisada.

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

Retorna um array indexado contendo os campos lidos.

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
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se `separator`, `enclosure`, ou `escape` for inválido. Isto imita o comportamento de [fgetcsv()](function.fgetcsv.md) e de [fputcsv()](function.fputcsv.md). |
| 8.3.0 | Uma string vazia é retornada ao invés de uma string com um único byte nulo para o último campo, se ele contiver apenas um demarcador não terminado. |
| 7.4.0 | O parâmetro `escape` agora interpreta uma string vazia como o sinal para desabilitar o mecanismo de escape. Antes, uma string vazia era tratada como valor padrão do parâmetro. |

### Examples

**Exemplo #1 Exemplo de **str\_getcsv()****

```
<?php

$string = 'PHP,Java,Python,Kotlin,Swift';
$data = str_getcsv($string, escape: '\\');

var_dump($data);
?>
```

O exemplo acima produzirá:

```
array(5) {
  [0]=>
  string(3) "PHP"
  [1]=>
  string(4) "Java"
  [2]=>
  string(6) "Python"
  [3]=>
  string(6) "Kotlin"
  [4]=>
  string(5) "Swift"
}
```

**Exemplo #2 Exemplo de **str\_getcsv()**com uma string vazia**

**Cuidado**

Com uma string vazia esta função retorna o valor `[null]`
em vez de um array vazio.

```
<?php

$string = '';
$data = str_getcsv($string, escape: '\\');

var_dump($data);
?>
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  NULL
}
```

### Veja também

- [fputcsv()](function.fputcsv.md) - Formata a linha como CSV e a escreve em um ponteiro de arquivo
- [fgetcsv()](function.fgetcsv.md) - Lê uma linha do ponteiro de arquivos e a interpreta como campos CSV
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
