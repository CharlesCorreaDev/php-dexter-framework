# Comparação de strings segura para ataque de temporização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-equals.php

---

# hash\_equals

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

hash\_equals — Comparação de strings segura para ataque de temporização

### Descrição

function **hash\_equals**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$known_string`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$user_string`): [bool](language.types.boolean.md)

Verifica se duas strings são iguais sem vazar informações sobre o
conteúdo de `known_string` por meio do tempo de execução.

Esta função pode ser usada para mitigar ataques de temporização. Executar uma
comparação regular com `===` levará mais ou menos tempo para executar
dependendo se os dois valores são diferentes ou não e em qual
posição a primeira diferença pode ser encontrada, vazando assim informações sobre
o conteúdo do `known_string` secreto.

**Cuidado**

É importante fornecer a string fornecida pelo usuário como o segundo
parâmetro, em vez do primeiro.

### Parâmetros

`known_string`
:   A [string](language.types.string.md) conhecida que deve ser mantida em segredo.

`user_string`
:   A [string](language.types.string.md) fornecida pelo usuário para comparação.

### Valor Retornado

Retorna **`true`** quando as duas strings são iguais, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **hash\_equals()****

```
<?php
$secretKey = '8uRhAeH89naXfFXKGOEj';

// O valor e a assinatura são fornecidos pelo usuário, por exemplo, dentro da URL
// e recuperados usando $_GET.
$value = 'username=rasmuslerdorf';
$signature = '8c35009d3b50caf7f5d2c1e031842e6b7823a1bb781d33c5237cd27b57b5f327';

if (hash_equals(hash_hmac('sha256', $value, $secretKey), $signature)) {
    echo "O valor está assinado corretamente.", PHP_EOL;
} else {
    echo "O valor foi adulterado.", PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
O valor está assinado corretamente.
```

### Notas

> **Nota**:
>
> Ambos os argumentos devem ter o mesmo comprimento para serem comparados com sucesso.
> Quando argumentos de comprimentos diferentes são fornecidos, **`false`** é retornado imediatamente e
> o comprimento da string conhecida pode ser vazado em caso de um ataque de temporização.

### Veja também

- [hash\_hmac()](function.hash-hmac.md) - Gera um valor de hash com chave usando o método HMAC

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
