# Grava o arquivo solicitado em uma instância GLO

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-save-to-glo.php

---

# cubrid\_save\_to\_glo

(PECL CUBRID >= 8.3.0)

cubrid\_save\_to\_glo — Grava o arquivo solicitado em uma instância GLO

### Descrição

function **cubrid\_save\_to\_glo**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`, [string](language.types.string.md) `$file_name`): [int](language.types.integer.md)

A função **cubrid\_save\_to\_glo()** é usada para salvar o arquivo solicitado em uma instância GLO.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância GLO de onde o arquivo será gravado.

`file_name`
:   O nome do arquivo a ser gravado.

### Valor Retornado

**`true`** em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_save\_to\_glo()****

```
<?php
$req = cubrid_execute($con, "select image from person where id=1");
if ($req) {
    list($oid) = cubrid_fetch($req);
    cubrid_close_request($req);
    $res = cubrid_save_to_glo($con, $oid, "input.jpg");
    if ($res) {
        echo "imagem alterada com sucesso";
    }
}
?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **cubrid\_save\_to\_glo()**

> **Nota**:
>
> Esta função foi removida no CUBRID 3.1.

### Veja também

- [cubrid\_new\_glo()](function.cubrid-new-glo.md) - Cria uma instância GLO
- [cubrid\_load\_from\_glo()](function.cubrid-load-from-glo.md) - Lê dados de uma instância GLO e grava-os em um arquivo
- [cubrid\_send\_glo()](function.cubrid-send-glo.md) - Lê dados de uma instância GLO e envia-os à saída padrão

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
