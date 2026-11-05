# Gera uma representação armazenável de um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.serialize.php

---

# serialize

(PHP 4, PHP 5, PHP 7, PHP 8)

serialize — Gera uma representação armazenável de um valor

### Descrição

function **serialize**([mixed](language.types.mixed.md) `$value`): [string](language.types.string.md)

Gera uma representação armazenável de um valor.

É útil para armazenar ou passar um valor do PHP sem
perder seu tipo ou estrutura.

Para restaurar uma string serializada de volta a um valor PHP, use
[unserialize()](function.unserialize.md).

### Parâmetros

`value`
:   O valor a ser serializado. **serialize()**
    lida com todos os tipos, exceto recursos ([resource](language.types.resource.md)) e alguns objetos ([object](language.types.object.md))s (veja nota abaixo).
    Pode-se até usar **serialize()** para array que contenha
    referência a si mesmo. Referências circulaes dentro do array/objeto
    a ser serializado também serão armazenadas. Qualquer outra
    referência será perdida.

    Ao serializar objetos, o PHP tentará chamar as funções membro
    [\_\_serialize()](language.oop5.magic.md#object.serialize) ou
    [\_\_sleep()](language.oop5.magic.md#object.sleep) antes da serialização.
    Isto serve para permitir ao objeto alguma limpeza de última hora, etc. antes
    de ser realizado. Da mesma forma, quando o objeto é restaurado usando
    [unserialize()](function.unserialize.md), a função membro [\_\_unserialize()](language.oop5.magic.md#object.unserialize) ou
    [\_\_wakeup()](language.oop5.magic.md#object.wakeup) será chamada.

    > **Nota**:
    >
    > Os membros privados terão o nome da classe prefixando o nome do
    > membro; membros protegidos terão um '\*' prefixando o nome.
    > Estes prefixos serão envolvidos por bytes nulos, um de cada lado.

### Valor Retornado

Retorna uma string contendo uma representação em fluxo de bytes de
`value` que pode ser armazenada em qualquer lugar.

Note que esta string é binária e pode incluir bytes nulos, e precisa
ser armazenada e gerenciada como tal. Por exemplo,
a saída de **serialize()** deveria ser armazenada geralmente em um
campo BLOB de um banco de dados, e não em um campo tipo CHAR ou TEXT.

### Examples

**Exemplo #1 Exemplo de **serialize()****

```
<?php
// $session_data contém um array multi-dimensional com informação
// de sessão do usuário atual. serialize() será utilizada para armazenar
// a variável em um banco de dados ao final da requisição.

$conn = odbc_connect("webdb", "php", "chicken");
$stmt = odbc_prepare($conn,
      "UPDATE sessions SET data = ? WHERE id = ?");
$sqldata = array (serialize($session_data), $_SERVER['PHP_AUTH_USER']);
if (!odbc_execute($stmt, $sqldata)) {
    $stmt = odbc_prepare($conn,
     "INSERT INTO sessions (id, data) VALUES(?, ?)");
    if (!odbc_execute($stmt, array_reverse($sqldata))) {
        /* Algo deu errado.. */
    }
}
?>
```

### Notas

> **Nota**:
>
> Note que muitos objetos internos do PHP não podem ser serializados. Entretanto, os que tiverem
> esta habilidade ou implementam a interface [Serializable](class.serializable.md) ou os
> métodos mágicos [\_\_serialize()](language.oop5.magic.md#object.serialize)/[\_\_unserialize()](language.oop5.magic.md#object.unserialize)
> ou [\_\_sleep()](language.oop5.magic.md#object.sleep)/[\_\_wakeup()](language.oop5.magic.md#object.wakeup). Se uma
> classe interna não preencher algum desses requisitos, ela não poderá
> ser serializada com confiança.
>
> Existem algumas exceções histórias à regra acima, onde alguns objetos internos
> poderiam ser serializados sem implementar a interface ou expor os métodos.

**Aviso**

Quando **serialize()** serializa objetos, a barra invertida no início não é incluída nas classes com espaço de nomes para máxima compatibilidade.

### Veja também

- [unserialize()](function.unserialize.md) - Cria um valor PHP a partir de uma representação armazenada
- [var\_export()](function.var-export.md) - Mostra ou retorna uma representação string analisável de uma variável
- [json\_encode()](function.json-encode.md) - Retorna a representação JSON de um valor
- [Serializando Objetos](language.oop5.serialization.md)
- [\_\_sleep()](language.oop5.magic.md#object.sleep)
- [\_\_wakeup()](language.oop5.magic.md#object.wakeup)
- [\_\_serialize()](language.oop5.magic.md#object.serialize)
- [\_\_unserialize()](language.oop5.magic.md#object.unserialize)

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
