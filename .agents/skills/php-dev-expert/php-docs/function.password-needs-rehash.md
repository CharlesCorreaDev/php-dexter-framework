# Verifica se o hash informado corresponde às opções especificadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.password-needs-rehash.php

---

# password\_needs\_rehash

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

password\_needs\_rehash — Verifica se o hash informado corresponde às opções especificadas

### Descrição

function **password\_needs\_rehash**([string](language.types.string.md) `$hash`, [string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$algo`, [array](language.types.array.md) `$options` = []): [bool](language.types.boolean.md)

Esta função verifica se o hash fornecido implementa o algoritmo
e as opções indicadas. Se não, ela assume que o hash precisa ser
recalculado.

### Parâmetros

`hash`
:   Um hash criado por [password\_hash()](function.password-hash.md).

`algo`
:   Uma [constante de algoritmo de senha](password.constants.md) denotando o algoritmo a ser usado ao fazer o hash da senha.

`options`
:   Um array associativo contendo opções. Consulte as [constantes de algoritmo de senha](password.constants.md) para obter a documentação sobre as opções suportadas por cada algoritmo.

### Valor Retornado

Retorna **`true`** se o hash deve ser recalculado para corresponder ao algortimo informado em
`algo` e às opções em `options`, ou **`false`**
caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | O parâmetro `algo` agora espera uma [string](language.types.string.md), mas ainda aceita [int](language.types.integer.md)s para compatibilidade com versões anteriores. |

### Examples

**Exemplo #1 Utilização de **password\_needs\_rehash()****

```
<?php

$password = 'rasmuslerdorf';
$hash = '$2y$12$4Umg0rCJwMswRw/l.SwHvuQV01coP0eWmGzd61QH2RvAOMANUBGC.';

$algorithm = PASSWORD_BCRYPT;
// o parâmetro de custo de bcrypt pode mudar com o tempo com a evloução dos equipamentos
$options = ['cost' => 13];

// Verifica o hash armazenado comparando com uma senha em texto puro
if (password_verify($password, $hash)) {
    // Verifica se o algoritmo ou o custo mudaram
    if (password_needs_rehash($hash, $algorithm, $options)) {
        // Caso positivo, cria um hash novo, e substitui o antigo
        $newHash = password_hash($password, $algorithm, $options);

        // Atualiza o registro do usuário com $newHash
    }

    // Faz login
}
?>
```

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
