# Lê dados de uma instância GLO e envia-os à saída padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-send-glo.php

---

# cubrid\_send\_glo

(PECL CUBRID >= 8.3.0)

cubrid\_send\_glo — Lê dados de uma instância GLO e envia-os à saída padrão

### Descrição

function **cubrid\_send\_glo**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`): [int](language.types.integer.md)

A função **cubrid\_send\_glo()** é usada para ler dados de uma instância GLO e enviá-los à saída padrão do PHP.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância GLO de onde os dados serão lidos.

### Valor Retornado

**`true`** em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_send\_glo()****

```
<?php
$req = cubrid_execute($con, "select image from person where id =1");
if ($req) {
    list ($oid) = cubrid_fetch($req);
    cubrid_close_request($req);
    header("Content-type: image/jpeg");
    cubrid_send_glo($con, $oid);
}
?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **cubrid\_send\_glo()**

> **Nota**:
>
> Esta função foi removida no CUBRID 3.1.

### Veja também

- [cubrid\_new\_glo()](function.cubrid-new-glo.md) - Cria uma instância GLO
- [cubrid\_save\_to\_glo()](function.cubrid-save-to-glo.md) - Grava o arquivo solicitado em uma instância GLO
- [cubrid\_load\_from\_glo()](function.cubrid-load-from-glo.md) - Lê dados de uma instância GLO e grava-os em um arquivo

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
