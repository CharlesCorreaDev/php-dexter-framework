# Modelo de Armazenamento Criptografado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.database.storage.php

---

## Modelo de Armazenamento Criptografado

SSL/SSH protege dados transitando de um cliente para o servidor, mas
não protege os dados guardados em um banco de dados. SSL é um
protocolo on-the-wire.

Uma vez que o atacante ganhe acesso direto ao seu banco de dados (perpassando o
servidor web), os dados armazenados podem ser expostos ou usados inadequadamente, a não ser
que a informação seja protegida pelo banco em si. Criptografar os dados é
uma boa maneira de diminuir essa ameaça, mas poucos bancos de dados oferecem
esse tipo de criptografia de dados.

A maneira mais fácil de contornar esse problema é primeiro criar seu próprio
pacote de criptografia, e então usá-lo no seus scripts PHP. O PHP pode
ajudá-lo com várias extensões, tais como [OpenSSL](book.openssl.md) e [Sodium](book.sodium.md), cobrindo uma grande variedade de algoritmos
de criptografia. O script criptografa os dados antes de inseri-los no banco de dados e
descriptografa quando os recupera. Veja as referências para outros exemplos de como
a criptografia funciona.

### Hashing

No caso de dados realmente ocultos, se sua representação bruta não for necessária
(ou seja, não será exibido), o hashing deve ser levado em consideração.
O exemplo conhecido de hashing é armazenar o hash criptográfico de uma
senha em um banco de dados, em vez da própria senha.

As funções [password](ref.password.md)
fornecem uma maneira conveniente para criar o hash de dados confidenciais e trabalhar com esses hashes.

[password\_hash()](function.password-hash.md) é usado para criar o hash uma determinada string usando o
algoritmo mais forte atualmente disponível e [password\_verify()](function.password-verify.md)
verifica se a senha fornecida corresponde ao hash armazenado no banco de dados.

**Exemplo #1 Usando campo de senha hasheado**

```
<?php

// guardando hash da senha
$query  = sprintf("INSERT INTO users(name,pwd) VALUES('%s','%s');",
            pg_escape_string($username),
            password_hash($password, PASSWORD_DEFAULT));
$result = pg_query($connection, $query);

// consultando se o usuário enviou a senha correta
$query = sprintf("SELECT pwd FROM users WHERE name='%s';",
            pg_escape_string($username));
$row = pg_fetch_assoc(pg_query($connection, $query));

if ($row && password_verify($password, $row['pwd'])) {
    echo 'Bem-vindo, ' . htmlspecialchars($username) . '!';
} else {
    echo 'Autenticação falhou para ' . htmlspecialchars($username) . '.';
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
