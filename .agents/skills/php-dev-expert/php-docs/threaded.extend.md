# Manipulação em tempo de execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.extend.php

---

# Threaded::extend

(PECL pthreads >= 2.0.8)

Threaded::extend — Manipulação em tempo de execução

### Descrição

public function **Threaded::extend**([string](language.types.string.md) `$class`): [bool](language.types.boolean.md)

Torna a classe padrão segura para threads em tempo de execução.

### Parâmetros

`class`
:   A classe a ser estendida.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Herança em tempo de execução**

```
<?php
class My {}

Threaded::extend(My::class);

$my = new My();

var_dump($my instanceof Threaded);
?>
```

O exemplo acima produzirá:

```
bool(true)
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
