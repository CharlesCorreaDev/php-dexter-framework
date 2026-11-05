# Obtém o caminho base do SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.getbasepath.php

---

# SeasLog::getBasePath

(PECL seaslog >=1.0.0)

SeasLog::getBasePath — Obtém o caminho base do SeasLog

### Descrição

public static function **Seaslog::getBasePath**(): [string](language.types.string.md)

O método **SeasLog::getBasePath()**
é usado para obter o valor de [seaslog.default\_basepath](seaslog.configuration.md#ini.seaslog.default-basepath)
configurado no php.ini (ou seaslog.ini).

Usar o método [Seaslog::setBasePath()](seaslog.setbasepath.md) altera o resultado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna [seaslog.default\_basepath](seaslog.configuration.md#ini.seaslog.default-basepath) como uma string.

### Examples

**Exemplo #1 Exemplo de **SeasLog::getBasePath()****

```
<?php

var_dump(SeasLog::getBasePath());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(12) "/var/log/www"
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
