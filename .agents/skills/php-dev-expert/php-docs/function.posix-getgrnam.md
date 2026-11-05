# Retorna informação sobre um grupo a partir do nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getgrnam.php

---

# posix\_getgrnam

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getgrnam — Retorna informação sobre um grupo a partir do nome

### Descrição

function **posix\_getgrnam**([string](language.types.string.md) `$name`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém informação sobre um grupo a partir do nome fornecido.

### Parâmetros

`name`
:   O nome do grupo

### Valor Retornado

Retorna um [array](language.types.array.md) em caso de sucesso, ou **`false`** em caso de falha.
Os elementos de array retornados são:

**O array de informação de grupo**

| Elemento | Descrição |
| --- | --- |
| name | Este elemento contém o nome do grupo. É um "identificador" curto do grupo, normalmente com menos de 16 caracteres, e não o nome real completo. Deve ser igual ao parâmetro `name` usado ao chamar a função e, portanto, reduntante. |
| passwd | Este elemento contém a senha do grupo em um formato criptografado. Frequentemente, por exemplo, em um sistema que emprega senhas "ofuscadas", um asterisco é retornado. |
| gid | ID do grupo em formato numérico. |
| members | Este elemento consistem em um [array](language.types.array.md) de [string](language.types.string.md)s para todos os membros no grupo. |

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getgrnam()****

```
<?php

$groupinfo = posix_getgrnam("toons");

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
- [posix\_getgrgid()](function.posix-getgrgid.md) - Retorna informação sobre um grupo a partir de um ID de grupo
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
