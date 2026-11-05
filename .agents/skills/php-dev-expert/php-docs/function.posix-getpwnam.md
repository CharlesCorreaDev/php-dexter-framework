# Retorna informações sobre um usuário por nome de usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getpwnam.php

---

# posix\_getpwnam

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getpwnam — Retorna informações sobre um usuário por nome de usuário

### Descrição

function **posix\_getpwnam**([string](language.types.string.md) `$username`): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um [array](language.types.array.md) de informações sobre um determinado usuário.

### Parâmetros

`username`
:   Um nome de usuário alfanumérico.

### Valor Retornado

Em caso de sucesso, um array com os seguintes elementos é retornado, caso
contrário **`false`** é retornado:

**O array de informações do usuário**

| Elemento | Descrição |
| --- | --- |
| name | Este elemento contém o nome do usuário. É um "identificador" curto do usuário, geralmente com menos de 16 caracteres, e não o nome completo e real. Deve ser igual ao parâmetro `username` usado ao chamar a função e, portanto, redundante. |
| passwd | Este elemento contém a senha do usuário em formato criptografado. Freqüentemente, por exemplo, em um sistema que utiliza senhas "ofuscadas", um asterisco é retornado. |
| uid | ID do usuário em formato numérico. |
| gid | O ID do grupo do usuário. Use a função [posix\_getgrgid()](function.posix-getgrgid.md) para resolver o nome do grupo e uma lista de seus membros. |
| gecos | GECOS é um termo obsoleto que se refere ao campo de informações digitais em um sistema de processamento em lote da Honeywell. O campo, entretanto, continua vivo e seu conteúdo foi formalizado pelo POSIX. O campo contém uma lista separada por vírgulas contendo o nome completo do usuário, telefone comercial, número do escritório e número de telefone residencial. Na maioria dos sistemas, apenas o nome completo do usuário está disponível. |
| dir | Este elemento contém o caminho absoluto para o diretório inicial do usuário. |
| shell | Este elemento contém o caminho absoluto para o executável do shell padrão do usuário. |

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getpwnam()****

```
<?php

$userinfo = posix_getpwnam("tom");

print_r($userinfo);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [name]    => tom
    [passwd]  => x
    [uid]     => 10000
    [gid]     => 42
    [gecos]   => "tom,,,"
    [dir]     => "/home/tom"
    [shell]   => "/bin/bash"
)
```

### Veja também

- [posix\_getpwuid()](function.posix-getpwuid.md) - Retorna informações sobre um usuário por ID de usuário
- Página GETPWNAM(3) do manual POSIX

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
