# Verifica se uma senha corresponde a um hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.password-verify.php

---

# password\_verify

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

password\_verify — Verifica se uma senha corresponde a um hash

### Descrição

function **password\_verify**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`, [string](language.types.string.md) `$hash`): [bool](language.types.boolean.md)

Verifica se o hash fornecido corresponde à senha informada
**password\_verify()** é compatível com [crypt()](function.crypt.md).
Portanto, hashes de senha criadas por [crypt()](function.crypt.md) podem ser usados com
**password\_verify()**.

Perceba que [password\_hash()](function.password-hash.md) retorna o algoritmo, custo e o salt
como parte do hash retornado. Por isso, toda a informação necessária para verificar
o hash está incluída nele. Isso permite que a função de verificação faça isso
sem precisar de um armazenamento separado para a informação do salt ou do algoritmo.

Esta função é segura contra ataques de sincronismo.

### Parâmetros

`password`
:   A senha do usuário.

`hash`
:   Um hash criado por [password\_hash()](function.password-hash.md).

### Valor Retornado

Retorna **`true`** se o password e o hash corresponderem, ou **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **password\_verify()****

Este é um exemplo simplificado; é recomendável recalcular o hash de uma senha correta
se necessário; consulte a página da função [password\_needs\_rehash()](function.password-needs-rehash.md) para um exemplo.

```
<?php
// Veja o exemplo de password_hash() para ver de onde veio esta string.
$hash = '$2y$12$4Umg0rCJwMswRw/l.SwHvuQV01coP0eWmGzd61QH2RvAOMANUBGC.';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Senha válida!';
} else {
    echo 'Senha inválida';
}
?>
```

O exemplo acima produzirá:

```
Senha válida!
```

### Veja também

- [password\_needs\_rehash()](function.password-needs-rehash.md) - Verifica se o hash informado corresponde às opções especificadas
- [password\_hash()](function.password-hash.md) - Cria um hash de senha
- [sodium\_crypto\_pwhash\_str\_verify()](function.sodium-crypto-pwhash-str-verify.md) - Verifica se uma senha corresponde a um hash

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
