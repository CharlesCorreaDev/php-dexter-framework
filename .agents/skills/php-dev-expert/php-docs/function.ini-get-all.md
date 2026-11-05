# Obtém todas as opções de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ini-get-all.php

---

# ini\_get\_all

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ini\_get\_all — Obtém todas as opções de configuração

### Descrição

function **ini\_get\_all**([?](language.types.null.md)[string](language.types.string.md) `$extension` = **`null`**, [bool](language.types.boolean.md) `$details` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna todas as opções de configuração cadastradas.

### Parâmetros

`extension`
:   Um nome de extensão opcional. Se diferente de **`null`** ou igual à [string](language.types.string.md) `core`, a função retorna apenas opções
    específicas para aquela extensão.

`details`
:   Recupera configurações detalhadas ou apenas o valor atual de cada configuração.
    O padrão é **`true`** (recuperar detalhes).

### Valor Retornado

Retorna um array associativo com o nome da diretiva como chave do array.
Retorna **`false`** e gera um erro de nível **`E_WARNING`**
se a extensão informada em `extension` não existir.

Quando `details` for **`true`** (padrão) o array
conterá `global_value` (definido no
php.ini), `local_value` (talvez definido com
[ini\_set()](function.ini-set.md) ou .htaccess) e
`access` (o nível de acesso).

Quando `details` for **`false`** o valor será o
atual da opção.

Consulte a [seção do manual](configuration.changes.modes.md)
para informação sobre o que significam os níveis de acesso.

> **Nota**:
>
> É possível que uma diretiva tenha múltiplos níveis de acesso, e é por
> isso que `access` mostra os valores apropriados da máscara de bits.

### Examples

**Exemplo #1 Exemplos de **ini\_get\_all()****

```
<?php
print_r(ini_get_all("pcre"));
print_r(ini_get_all());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [pcre.backtrack_limit] => Array
        (
            [global_value] => 100000
            [local_value] => 100000
            [access] => 7
        )

    [pcre.recursion_limit] => Array
        (
            [global_value] => 100000
            [local_value] => 100000
            [access] => 7
        )

)
Array
(
    [allow_call_time_pass_reference] => Array
        (
            [global_value] => 0
            [local_value] => 0
            [access] => 6
        )

    [allow_url_fopen] => Array
        (
            [global_value] => 1
            [local_value] => 1
            [access] => 4
        )

    ...

)
```

**Exemplo #2 Desabilitando `details`**

```
<?php
print_r(ini_get_all("pcre", false)); // Adicionado no PHP 5.3.0
print_r(ini_get_all(null, false)); // Adicionado no PHP 5.3.0
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [pcre.backtrack_limit] => 100000
    [pcre.recursion_limit] => 100000
)
Array
(
    [allow_call_time_pass_reference] => 0
    [allow_url_fopen] => 1
    ...
)
```

### Notas

> **Nota**:
>
> **ini\_get\_all()** ignora opções ini de "array" como, por exemplo,
> `pdo.dsn.*`.

### Veja também

- [Como mudar as configurações](configuration.changes.md)
- [ini\_get()](function.ini-get.md) - Obtém o valor de uma opção de configuração
- [ini\_restore()](function.ini-restore.md) - Restaura o valor de uma opção de configuração
- [ini\_set()](function.ini-set.md) - Define o valor de uma opção de configuração
- [get\_loaded\_extensions()](function.get-loaded-extensions.md) - Retorna um array com os nomes de todos os módulos compilados e carregados
- [phpinfo()](function.phpinfo.md) - Mostra informações sobre a configuração do PHP
- [ReflectionExtension::getINIEntries()](reflectionextension.getinientries.md) - Obtém entradas de extensão ini

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
