# Lê dados de uma instância GLO e grava-os em um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-load-from-glo.php

---

# cubrid\_load\_from\_glo

(PECL CUBRID >= 8.3.0)

cubrid\_load\_from\_glo — Lê dados de uma instância GLO e grava-os em um arquivo

### Descrição

function **cubrid\_load\_from\_glo**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`, [string](language.types.string.md) `$file_name`): [int](language.types.integer.md)

A função **cubrid\_load\_from\_glo()** é usada para ler
dados de uma instância GLO e gravá-los em um arquivo designado.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância GLO de onde os dados serão lidos.

`file_name`
:   Nome do arquivo onde os dados serão gravados.

### Valor Retornado

**`true`** em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_load\_from\_glo()****

```
<?php
$req = cubrid_execute($con, "select image from person where id=1");
if ($req) {
    list($oid) = cubrid_fetch($req);
    cubrid_close_request($req);
    $res = cubrid_load_from_glo($con, $oid, "output.jpg");
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
> **cubrid\_load\_from\_glo()**

> **Nota**:
>
> Esta função foi removida no CUBRID 3.1.

### Veja também

- [cubrid\_new\_glo()](function.cubrid-new-glo.md) - Cria uma instância GLO
- [cubrid\_save\_to\_glo()](function.cubrid-save-to-glo.md) - Grava o arquivo solicitado em uma instância GLO
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
