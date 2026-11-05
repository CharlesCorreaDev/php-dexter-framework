# Fornece ao trabalhador um identificador para que ele possa ser rastreado ao solicitar ao gearmand a lista de trabalhadores disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.setid.php

---

# GearmanWorker::setId

(No version information available, might only be in Git)

GearmanWorker::setId — Fornece ao trabalhador um identificador para que ele possa ser rastreado ao solicitar ao gearmand a lista de trabalhadores disponíveis

### Descrição

public function **GearmanWorker::setId**([string](language.types.string.md) `$id`): [bool](language.types.boolean.md)

Atribui um identificador ao trabalhador.

### Parâmetros

`id`
:   Uma string de identificação.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **GearmanWorker::setId()****

Define um identificador para um trabalhador simples.

```
<?php
$worker= new GearmanWorker();
$worker->setId('teste');
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Execute o seguinte comando:
gearadmin --workers

Resultado:
30 ::3a3a:3361:3361:3a33%976303667 - : teste
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
