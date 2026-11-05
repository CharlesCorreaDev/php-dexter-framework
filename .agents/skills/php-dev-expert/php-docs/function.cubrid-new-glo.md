# Cria uma instância GLO

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-new-glo.php

---

# cubrid\_new\_glo

(PECL CUBRID >= 8.3.0)

cubrid\_new\_glo — Cria uma instância GLO

### Descrição

function **cubrid\_new\_glo**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$class_name`, [string](language.types.string.md) `$file_name`): [string](language.types.string.md)

A função **cubrid\_new\_glo()** é usada para criar uma instância GLO na classe solicitada (classe GLO). A instância criada é do tipo LO e é gravada no arquivo informado em `file_name`.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`class_name`
:   Nome da classe onde a instância GLO será criada.

`file_name`
:   Nome do arquivo que onde será gravada a nova instância de GLO.

### Valor Retornado

OID da instância criada em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_new\_glo()****

```
<?php
$oid = cubrid_new_glo($con, "glo", "input.jpg");
if ($oid){
    // o tipo da coluna "image" é "object"
    $req = cubrid_execute($con, "insert into person(image) values($oid)");
    if ($req) {
        echo "imagem inserida com sucesso";
        cubrid_close_request($req);
        cubrid_commit($con);
    }
}
?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **cubrid\_new\_glo()**

> **Nota**:
>
> Esta função foi removida no CUBRID 3.1.

### Veja também

- [cubrid\_save\_to\_glo()](function.cubrid-save-to-glo.md) - Grava o arquivo solicitado em uma instância GLO
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
