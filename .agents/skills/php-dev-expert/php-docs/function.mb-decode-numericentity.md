# Decodifica referência de string numérica HTML para caractere

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-decode-numericentity.php

---

# mb\_decode\_numericentity

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_decode\_numericentity — Decodifica referência de string numérica HTML para caractere

### Descrição

function **mb\_decode\_numericentity**([string](language.types.string.md) `$string`, [array](language.types.array.md) `$map`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

Converte a referência de string numérica de [string](language.types.string.md)
`string`, em um bloco especificado, para caractere.

### Parâmetros

`string`
:   A [string](language.types.string.md) sendo decodificada.

`map`
:   `map` é um [array](language.types.array.md) que especifica
    a área de código a ser convertida.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

A [string](language.types.string.md) convertida.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se
`map` não for uma lista de [int](language.types.integer.md)s.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **mb\_decode\_numericentity()** agora lança uma exceção [ValueError](class.valueerror.md) se `map` não for uma lista de [int](language.types.integer.md)s. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de `map`**

```
<?php
$convmap = array (
   int start_code1, int end_code1, int offset1, int mask1,
   int start_code2, int end_code2, int offset2, int mask2,
   //  ........
   int start_codeN, int end_codeN, int offsetN, int maskN );
// Especifique o valor Unicode para start_codeN e end_codeN
// Adicione offsetN ao valor e faça 'AND' bit a bit com maskN,
// em seguida, converta o valor para referência de string numérica.
?>
```

**Exemplo #2 Exemplo de `map` escapando string JavaScript**

```
<?php
function escape_javascript_string($str) {
  $map = [
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,0,0, // 49
          0,0,0,0,0,0,0,0,1,1,
          1,1,1,1,1,0,0,0,0,0,
          0,0,0,0,0,0,0,0,0,0,
          0,0,0,0,0,0,0,0,0,0,
          0,1,1,1,1,1,1,0,0,0, // 99
          0,0,0,0,0,0,0,0,0,0,
          0,0,0,0,0,0,0,0,0,0,
          0,0,0,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1, // 149
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1, // 199
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1,
          1,1,1,1,1,1,1,1,1,1, // 249
          1,1,1,1,1,1,1, // 255
          ];
  // Codificação de caractere é UTF-8
  $mblen = mb_strlen($str, 'UTF-8');
  $utf32 = bin2hex(mb_convert_encoding($str, 'UTF-32', 'UTF-8'));
  for ($i=0, $encoded=''; $i < $mblen; $i++) {
      $u = substr($utf32, $i*8, 8);
      $v = base_convert($u, 16, 10);
      if ($v < 256 && $map[$v]) {
        $encoded .= '\\x'.substr($u, 6,2);
      } else if ($v == 2028) {
        $encoded .= '\\u2028';
      } else if ($v == 2029) {
        $encoded .= '\\u2029';
      } else {
        $encoded .= mb_convert_encoding(hex2bin($u), 'UTF-8', 'UTF-32');
      }
   }
   return $encoded;
}

// Dados de teste
$convmap = [ 0x0, 0xffff, 0, 0xffff ];
$msg = '';
for ($i=0; $i < 1000; $i++) {
  // chr() não pode gerar dados UTF-8 corretos com valor maior que 128, use mb_decode_numericentity().
  $msg .= mb_decode_numericentity('&#'.$i.';', $convmap, 'UTF-8');
}

// var_dump($msg);
var_dump(escape_javascript_string($msg));
```

### Veja também

- [mb\_encode\_numericentity()](function.mb-encode-numericentity.md) - Codificar caractere para referência numérica HTML

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
