# Adiciona um bucket ao início da brigada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-bucket-prepend.php

---

# stream\_bucket\_prepend

(PHP 5, PHP 7, PHP 8)

stream\_bucket\_prepend — 
Adiciona um bucket ao início da brigada

### Descrição

function **stream\_bucket\_prepend**([resource](language.types.resource.md) `$brigade`, [StreamBucket](class.streambucket.md) `$bucket`): [void](language.types.void.md)

Esta função pode ser chamada para adicionar um bucket ao início da brigada. É
tipicamente chamada por [php\_user\_filter::filter()](php-user-filter.filter.md).

### Parâmetros

`brigade`
:   `brigade` é um recurso que aponta para uma `brigada de bucket`
    que contém um ou mais objetos `bucket`.

`bucket`
:   Um objeto bucket.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `bucket` agora espera uma instância de [StreamBucket](class.streambucket.md); anteriormente, esperava um [stdClass](class.stdclass.md). |

### Examples

**Exemplo #1 Exemplos de **stream\_bucket\_prepend()****

```
<?php

class foo extends php_user_filter {
  protected $calls = 0;
  public function filter($in, $out, &$consumed, $closing) {
    while ($bucket = stream_bucket_make_writeable($in)) {
      $consumed += $bucket->datalen;
      if ($this->calls++ == 2) {
        // Este bucket irá aparecer novamente antes de qualquer outro bucket.
        stream_bucket_prepend($in, $bucket);
      }
    }
    return PSFS_FEED_ME;
  }
}
stream_filter_register('test', 'foo');
print  file_get_contents('php://filter/read=test/resource=foo');
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
