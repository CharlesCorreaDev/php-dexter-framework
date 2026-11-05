# Aglutina elementos de um array com uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.implode.php

---

# implode

(PHP 4, PHP 5, PHP 7, PHP 8)

implode — Aglutina elementos de um array com uma string

### Descrição

function **implode**([string](language.types.string.md) `$separator`, [array](language.types.array.md) `$array`): [string](language.types.string.md)

Assinatura alternativa (não suportada com argumentos nomeados):

function **implode**([array](language.types.array.md) `$array`): [string](language.types.string.md)

Assinatura legada (descontinuada a partir do PHP 7.4.0, removida a partir do PHP 8.0.0):

function **implode**([array](language.types.array.md) `$array`, [string](language.types.string.md) `$separator`): [string](language.types.string.md)

Combina elementos de um array com um string de separação definida por `separator`.

### Parâmetros

`separator`
:   Opcional. O padrão é uma string vazia.

`array`
:   O array de strings a implodir.

### Valor Retornado

Retorna uma string contendo um representação de todos os elementos do
array na mesma ordem, com a string separadora entre eles.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Passar `separator` depois de `array` não é mais suportado. |
| 7.4.0 | Passar `separator` depois de `array` (isto é, usando a assinatura legada) foi descontinuado. |

### Examples

**Exemplo #1 Exemplo de **implode()****

```
<?php

$array = ['sobrenome', 'email', 'telefone'];
var_dump(implode(",", $array)); // string(24) "sobrenome,email,telefone"

// String vazia ao usar um array vazio:
var_dump(implode('olá', [])); // string(0) ""

// O separador é opcional:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"

?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [explode()](function.explode.md) - Divide uma string com base em outra string
- [preg\_split()](function.preg-split.md) - Divide uma string com base em expressão regular
- [http\_build\_query()](function.http-build-query.md) - Gera a string de consulta em formato URL

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
