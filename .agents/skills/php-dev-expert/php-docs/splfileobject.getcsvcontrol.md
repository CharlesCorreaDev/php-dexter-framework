# Obtém o delimitador, o caractere de fechamento e o caractere de escape para CSV

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.getcsvcontrol.php

---

# SplFileObject::getCsvControl

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

SplFileObject::getCsvControl — Obtém o delimitador, o caractere de fechamento e o caractere de escape para CSV

### Descrição

public function **SplFileObject::getCsvControl**(): [array](language.types.array.md)

Obtém o delimitador, o caractere de contorno e o caractere de escape usados para
analisar os campos CSV.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array indexado contendo o delimitador, o caractere de contorno e o caractere de escape.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | O caractere de escape agora pode ser uma string vazia. |
| 7.0.10 | Adicionado o caractere de escape ao array retornado. |

### Examples

**Exemplo #1 Exemplo de **SplFileObject::getCsvControl()****

```
<?php
$file = new SplFileObject("data.txt");
print_r($file->getCsvControl());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => ,
    [1] => "
    [2] => \
)
```

### Veja também

- [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md) - Definir o delimitador, o encapsulador e o caractere de escape para CSV
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
