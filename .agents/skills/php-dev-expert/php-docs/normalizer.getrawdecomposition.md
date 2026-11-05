# Obtém a propriedade Decomposition_Mapping para o ponto de código UTF-8 fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/normalizer.getrawdecomposition.php

---

# Normalizer::getRawDecomposition

# normalizer\_get\_raw\_decomposition

(PHP 7 >= 7.3, PHP 8)

Normalizer::getRawDecomposition -- normalizer\_get\_raw\_decomposition — Obtém a propriedade Decomposition\_Mapping para o ponto de código UTF-8 fornecido

### Descrição

Estilo orientado a objetos

public static function **Normalizer::getRawDecomposition**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$form` = **`Normalizer::FORM_C`**): [?](language.types.null.md)[string](language.types.string.md)

Estilo procedural

function **normalizer\_get\_raw\_decomposition**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$form` = **`Normalizer::FORM_C`**): [?](language.types.null.md)[string](language.types.string.md)

Obtém a propriedade Decomposition\_Mapping, como especificada no
Banco de Dados de Caracteres Unicode (UCD), para o ponto de código fornecido, codificado em UTF-8.

### Parâmetros

`string`
:   A string de entrada, que deve ser um único ponto de código, codificado em UTF-8.

### Valor Retornado

Retorna uma [string](language.types.string.md) contendo a propriedade Decomposition\_Mapping, caso presente na UCD.

Retorna **`null`** se não houver propriedade Decomposition\_Mapping para o caractere.

### Examples

**Exemplo #1 Exemplo de **Normalizer::getRawDecomposition()****

```
<?php

$result = "";
$strings = [
    "a",
    "\u{FFDA}",
    "\u{FDFA}",
    "",
    "aa",
    "\xF5",
];

foreach ($strings as $string) {
    $decomposition = Normalizer::getRawDecomposition($string);
    // $decomposition = normalizer_get_raw_decomposition($string); Modo procedural

    $error_code = intl_get_error_code();
    $error_message = intl_get_error_message();

    $string_hex = bin2hex($string);
    $result .= "---------------------\n";

    if ($decomposition === null) {
        $result .= "'$string_hex' não tem mapeamento de decomposição\n" ;
    } else {
        $result .= "'$string_hex' tem o mapeamento de decomposição '" . bin2hex($decomposition) . "'\n" ;
    }

    $result .= "informação de erro: '$error_message' ($error_code)\n";
}

echo $result;
?>
```

O exemplo acima produzirá:

```
---------------------
'61' não tem mapeamento de decomposição
informação de erro: 'U_ZERO_ERROR' (0)
---------------------
'efbf9a' tem o mapeamento de decomposição 'e385a1'
informação de erro: 'U_ZERO_ERROR' (0)
---------------------
'efb7ba' tem o mapeamento de decomposição 'd8b5d984d98920d8a7d984d984d98720d8b9d984d98ad98720d988d8b3d984d985'
informação de erro: 'U_ZERO_ERROR' (0)
---------------------
'' não tem mapeamento de decomposição
informação de erro: 'Input string must be exactly one UTF-8 encoded code point long.: U_ILLEGAL_ARGUMENT_ERROR' (1)
---------------------
'6161' não tem mapeamento de decomposição
informação de erro: 'Input string must be exactly one UTF-8 encoded code point long.: U_ILLEGAL_ARGUMENT_ERROR' (1)
---------------------
'f5' não tem mapeamento de decomposição
informação de erro: 'Code point out of range: U_ILLEGAL_ARGUMENT_ERROR' (1)
```

### Veja também

- [Normalizer::normalize()](normalizer.normalize.md) - Normaliza a entrada fornecida e retorna a string normalizada
- [Normalizer::isNormalized()](normalizer.isnormalized.md) - Verifica se a string fornecida já está normalizada
  na forma especificada.

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
