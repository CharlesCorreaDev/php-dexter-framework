# Retorna informação sobre um grupo a partir de um ID de grupo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getgrgid.php

---

# posix\_getgrgid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getgrgid — Retorna informação sobre um grupo a partir de um ID de grupo

### Descrição

function **posix\_getgrgid**([int](language.types.integer.md) `$group_id`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém informação sobre um grupo a partir de seu ID fornecido.

### Parâmetros

`group_id`
:   O ID de grupo.

### Valor Retornado

Os elementos de array retornados são:

**O array de informação de grupo**

| Elemento | Descrição |
| --- | --- |
| name | Este elemento contém o nome do grupo. É um nome curto, geralmente um "identificador" do grupo com menos de 16 caracteres, mas não o nome real, completo, do grupo. |
| passwd | Ese elemento contém a senha do grupo em um formato criptografado. Muitas vezes, por exemplo, em um sistema que emprega senhas "ofuscadas", um asterisco é retornado. |
| gid | ID do grupo, deve ser o mesmo que o parâmetro `group_id` usado na chamada à função e, por isso, redundante. |
| members | Consiste em um [array](language.types.array.md) de [string](language.types.string.md)s para todos os membros do grupo. |

A função retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getgrgid()****

```
<?php

$groupid   = posix_getegid();
$groupinfo = posix_getgrgid($groupid);

print_r($groupinfo);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [name]    => toons
    [passwd]  => x
    [members] => Array
        (
            [0] => tom
            [1] => jerry
        )
    [gid]     => 42
)
```

### Veja também

- [posix\_getegid()](function.posix-getegid.md) - Retorna o ID do grupo efetivo do processo atual
- [posix\_getgrnam()](function.posix-getgrnam.md) - Retorna informação sobre um grupo a partir do nome
- [filegroup()](function.filegroup.md) - Lê o grupo do arquivo
- [stat()](function.stat.md) - Obtém informações sobre um arquivo
- Página GETGRNAM(3) do manual POSIX

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
