# Verifica se uma string contém JSON válido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.json-validate.php

---

# json\_validate

(PHP 8 >= 8.3.0)

json\_validate — Verifica se uma string contém JSON válido

### Descrição

function **json\_validate**([string](language.types.string.md) `$json`, [int](language.types.integer.md) `$depth` = 512, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Retorna se a [string](language.types.string.md) informada é um JSON válido sintaticamente.
Se **json\_validate()** retornar **`true`**, [json\_decode()](function.json-decode.md)
irá decodificar com sucesso a string informada ao usar a mesma profundidade de
`depth` e as opções em `flags`.

Se **json\_validate()** retornar **`false`**, a causa
pode ser obtida usando [json\_last\_error()](function.json-last-error.md) e
[json\_last\_error\_msg()](function.json-last-error-msg.md).

**json\_validate()** usa menos memória que
[json\_decode()](function.json-decode.md) se o JSON decodificado não
for usado, porque ela não precisa construir o array ou
a estrutura de objeto que contém a decodificação.

**Cuidado**

Chamar **json\_validate()** imediatamente antes de
[json\_decode()](function.json-decode.md) irá analisar a string duas vezes
desnecessariamente, já que [json\_decode()](function.json-decode.md) implicitamente realiza
a validação durante a decodificação.

Portanto, **json\_validate()** deve somente ser utilizada
se o JSON decodificado não for usado imediatamente e se for necessário
saber se a string contém JSON válido.

### Parâmetros

`json`
:   A string a ser validada.

    Esta função funciona somente com strings codificadas com UTF-8.

    > **Nota**:
    >
    > O PHP implementa um superconjunto de JSON conforme especificado na
    > [» RFC 7159](https://datatracker.ietf.org/doc/html/rfc7159) original.

`depth`
:   A máxima profundidade de aninhamento da estrutura sendo decodificada.
    O valor precisa ser maior que `0`,
    e menor ou igual a `2147483647`.

`flags`
:   Atualmente apenas a constante
    **`JSON_INVALID_UTF8_IGNORE`**
    é aceita.

### Valor Retornado

Retorna **`true`** se a string fornecida for um JSON válido sintaticamente, caso contrário
retorna **`false`**.

### Erros/Exceções

Se `depth` estiver fora do intervalo permitido,
uma exceção [ValueError](class.valueerror.md) é lançada.

Se `flags` não for uma opção válida,
uma exceção [ValueError](class.valueerror.md) é lançada.

### Examples

**Exemplo #1 Exemplos de **json\_validate()****

```
<?php
var_dump(json_validate('{ "test": { "foo": "bar" } }'));
var_dump(json_validate('{ "": "": "" } }'));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Veja também

- [json\_decode()](function.json-decode.md) - Decodifica uma string JSON
- [json\_last\_error()](function.json-last-error.md) - Retorna o último erro ocorrido
- [json\_last\_error\_msg()](function.json-last-error-msg.md) - Retorna a string de erro da última chamada a json\_validate(), json\_encode() ou json\_decode()

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
