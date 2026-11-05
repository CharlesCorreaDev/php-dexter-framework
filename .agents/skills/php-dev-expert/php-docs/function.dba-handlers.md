# Lista todos os manipuladores disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-handlers.php

---

# dba\_handlers

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

dba\_handlers — Lista todos os manipuladores disponíveis

### Descrição

function **dba\_handlers**([bool](language.types.boolean.md) `$full_info` = **`false`**): [array](language.types.array.md)

**dba\_handlers()** lista todos os manipuladores suportados por esta
extensão.

### Parâmetros

`full_info`
:   Liga/desliga a exibição de informação completa no resultado.

### Valor Retornado

Retorna um array de manipuladores de bancos de dados. Se `full_info`
for definido para **`true`**, o array será associativo com os nomes dos manipuladores como
chaves, e suas informações de versão como valores. Caso contrário, o resultado será
um array indexado de nomes de manipuladores.

> **Nota**:
>
> Quando a biblioteca CDB interna estiver em uso, o resultado será
> `cdb` e `cdb_make`.

### Examples

**Exemplo #1 Exemplo de **dba\_handlers()****

```
<?php

echo "Manipuladores DBA disponíveis:\n";
foreach (dba_handlers(true) as $handler_name => $handler_version) {
  // limpa as versões
  $handler_version = str_replace('$', '', $handler_version);
  echo " - $handler_name: $handler_version\n";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Manipuladores DBA disponíveis:
 - cdb: 0.75, Revision: 1.3.2.3
 - cdb_make: 0.75, Revision: 1.2.2.4
 - db2: Sleepycat Software: Berkeley DB 2.7.7: (08/20/99)
 - inifile: 1.0, Revision: 1.6.2.3
 - flatfile: 1.0, Revision: 1.5.2.4
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
