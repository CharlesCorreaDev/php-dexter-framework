# Atualiza o arquivo de banco de dados RRD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rrdupdater.update.php

---

# RRDUpdater::update

(PECL rrd >= 0.9.0)

RRDUpdater::update — Atualiza o arquivo de banco de dados RRD

### Descrição

public function **RRDUpdater::update**([array](language.types.array.md) `$values`, [string](language.types.string.md) `$time`
 = time()
): [bool](language.types.boolean.md)

Atualiza o arquivo RRD definido via [RRDUpdater::\_\_construct()](rrdupdater.construct.md).
O arquivo é atualizado com valores específicos.

### Parâmetros

`values`
:   Dados para atualização. A chave é o nome da fonte de dados.

`time`
:   Valor de horário para atualizar o RRD com um dado específico. O valor padrão
    é o horário atual.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança uma [Exception](class.exception.md) em caso de erro.

### Examples

**Exemplo #1 Exemplo de **RRDUpdater::update()****

```
<?php
$updator = new RRDUpdater("speed.rrd");
// atualiza a fonte de dados "speed" com o valor "12411"
// para o horário definido pelo timestamp "920807700"
$updator->update(array("speed" => "12411"), "920807700");
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
