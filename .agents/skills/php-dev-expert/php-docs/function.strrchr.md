# Encontra a última ocorrência de um caractere em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strrchr.php

---

# strrchr

(PHP 4, PHP 5, PHP 7, PHP 8)

strrchr — Encontra a última ocorrência de um caractere em uma string

### Descrição

function **strrchr**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`, [bool](language.types.boolean.md) `$before_needle` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função retorna a porção de `haystack` que
inicia na última ocorrência de `needle` e continua
até o final de `haystack`.

### Parâmetros

`haystack`
:   A string na qual a pesquisa será realizada.

`needle`
:   Se `needle` contiver mais de um caractere,
    apenas o primeiro será usado. Este comportamento é diferente quando comparado com
    [strstr()](function.strstr.md).

    Antes do PHP 8.0.0, se `needle` não for uma string, ela será convertida
    para um número inteiro e aplicada como o valor ordinal de um caractere.
    Este comportamento foi descontinuado a partir do PHP 7.3.0 e depender dele é altamente
    desaconselhado. Dependendo do comportamento pretendido, o parâmetro
    `needle` deve ser explicitamente convertido em string
    ou uma chamada explícita para [chr()](function.chr.md) deve ser realizada.

`before_needle`
:   Se for **`true`**, **strrchr()**
    retorna a parte de `haystack` antes da última
    ocorrência do caractere `needle` (excluindo o caractere).

### Valor Retornado

Esta função retorna a porção de uma string, ou **`false`** se
`needle` não for encontrado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | O parâmetro `before_needle` foi adicionado. |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | Passar um [int](language.types.integer.md) em `needle` não é mais suportado. |
| 7.3.0 | Passar um [int](language.types.integer.md) em `needle` foi descontinuado. |

### Examples

**Exemplo #1 Exemplo de **strrchr()****

```
<?php
$ext = strrchr('algum_arquivo.txt', '.');
echo "extensão do arquivo: $ext \n";
$ext = $ext ? strtolower(substr($ext, 1)) : '';
echo "extensão do arquivo: $ext";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
extensão do arquivo: .txt
extensão do arquivo: txt
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
- [strrpos()](function.strrpos.md) - Encontra a posição da última ocorrência de uma substring em uma string

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
