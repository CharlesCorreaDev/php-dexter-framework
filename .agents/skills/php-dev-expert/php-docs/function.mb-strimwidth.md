# Obtém string truncada com largura especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strimwidth.php

---

# mb\_strimwidth

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_strimwidth — Obtém string truncada com largura especificada

### Descrição

function **mb\_strimwidth**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$start`,  
    [int](language.types.integer.md) `$width`,  
    [string](language.types.string.md) `$trim_marker` = "",  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [string](language.types.string.md)

Trunca a [string](language.types.string.md) `string` para a largura especificada `width`,
onde caracteres de meia largura contam como `1`, e caracteres de largura total
contam como `2`.
Consulte [» https://www.unicode.org/reports/tr11/](https://www.unicode.org/reports/tr11/)
para detalhes sobre larguras de caracteres do leste asiático.

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser decodificada.

`start`
:   O deslocamento da posição inicial. Número de
    caracteres a partir do início da string (o primeiro caractere é 0),
    ou se start for negativo, o número de caracteres a partir do final da string.

`width`
:   A largura do corte desejado.
    Se uma largura negativa for especificada, conta a partir do final da string.
    > **Nota**:
    >
    > Passar uma largura negativa foi descontinuado a partir do PHP 8.3.0.

`trim_marker`
:   Uma string que é adicionada ao final de string
    quando a string é truncada.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

A [string](language.types.string.md) truncada. Se `trim_marker` estiver definido,
`trim_marker` substitui os últimos caracteres para corresponder à `width`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Passar uma largura negativa `width` para **mb\_strimwidth()** agora foi descontinuado. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |
| 7.1.0 | Adicionado suporte para `start`s e `width`s negativos. |

### Examples

**Exemplo #1 Exemplo de **mb\_strimwidth()****

```
<?php
echo mb_strimwidth("Hello World", 0, 10, "...");
// saída: "Hello W..."
?>
```

### Veja também

- [mb\_strwidth()](function.mb-strwidth.md) - Retorna a largura da string
- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna

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
