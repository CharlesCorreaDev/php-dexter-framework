# Analisa a entrada do arquivo de acordo com um formato

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fscanf.php

---

# SplFileObject::fscanf

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::fscanf — Analisa a entrada do arquivo de acordo com um formato

### Descrição

public function **SplFileObject::fscanf**([string](language.types.string.md) `$format`, [mixed](language.types.mixed.md) `&...$vars`): [array](language.types.array.md)|[int](language.types.integer.md)|[null](language.types.null.md)

Lê uma linha do arquivo e a interpreta de acordo com o `format` especificado.

Qualquer espaço em branco na string `format` corresponde a qualquer espaço em branco na linha do arquivo.
Isso significa que até mesmo um tab (`\t`) na string de formato pode corresponder a um único caractere de espaço na sequência de entrada.

### Parâmetros

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
:   Os valores atribuídos opcionais.

### Valor Retornado

Se apenas um parâmetro for passado para este método, os valores analisados serão
retornados como uma [array](language.types.array.md). Caso contrário, se parâmetros opcionais forem passados, o
método retornará o número de valores atribuídos. Os parâmetros opcionais
devem ser passados por referência.

Se houver mais substrings esperadas em `format`
do que estiverem disponíveis na linha lida do arquivo,
**`null`** será retornado.

Quando parâmetros opcionais são usados e o fim da linha lida do
arquivo é alcançado antes que qualquer valor tenha sido interpretado,
`-1` é retornado.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fscanf()****

```
<?php
$file = new SplFileObject("misc.txt");
while ($userinfo = $file->fscanf("%s %s %s")) {
   list ($name, $profession, $countrycode) = $userinfo;
   // Faça algo com $name $profession $countrycode
}
?>
```

Conteúdo de users.txt

```
javier   argonaut    pe
hiroshi  sculptor    jp
robert   slacker     us
luigi    florist     it
```

### Veja também

- [fscanf()](function.fscanf.md) - Interpreta a leitura de um arquivo de acordo com um formato
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
