# Obtêm e configura notas de requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apache-note.php

---

# apache\_note

(PHP 4, PHP 5, PHP 7, PHP 8)

apache\_note — Obtêm e configura notas de requisição

### Descrição

function **apache\_note**([string](language.types.string.md) `$note_name`, [?](language.types.null.md)[string](language.types.string.md) `$note_value` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função chama as funções `table_get` e
`table_set` do Apache. Edita as tabelas de notas que existem
durante uma requisição. O objetivo das tabelas é permitir que os módulos do Apache
se comuniquem entre entre si.

O principal uso da função **apache\_note()** é passar informações
de um módulo para outro dentro da mesma requisição.

### Parâmetros

`note_name`
:   O nome da nota.

`note_value`
:   O valor da nota.

### Valor Retornado

Se `note_value` for omitido ou **`null`**, retorna o valor atual da nota
`note_name`. Se chamado com dois argumentos,
define o valor da nota `note_name` para o valor
`note_value` e retorna o valor anterior da
nota `note_name`.
Se a nota não puder ser retornada **`false`** é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `note_value` agora permite null. |

### Examples

**Exemplo #1 Passando informações entre PHP e Perl**

```
<?php

apache_note('name', 'Fredrik Ekengren');

// Chama o script perl
virtual("/perl/some_script.pl");

$result = apache_note("resultdata");
?>
```

```
# Obtém o objeto request do Apache
my $r = Apache->request()->main();

# Obtém o dado repassado
my $name = $r->notes('name');

# algum processamento

# Devolce o resultado ao PHP
$r->notes('resultdata', $result);
```

**Exemplo #2 Logar valores no access.log**

```
<?php

apache_note('sessionID', session_id());

?>
```

```
# "%{sessionID}n" pode ser utilizado numa diretiva LogFormat
```

### Veja também

- [virtual()](function.virtual.md) - Realiza uma sub-requisição Apache

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
