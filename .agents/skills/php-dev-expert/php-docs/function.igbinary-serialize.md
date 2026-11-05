# Gera uma representação binária compacta e armazenável de um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.igbinary-serialize.php

---

# igbinary\_serialize

(PECL igbinary >= 1.1.1)

igbinary\_serialize — Gera uma representação binária compacta e armazenável de um valor

### Descrição

function **igbinary\_serialize**([mixed](language.types.mixed.md) `$value`): [string](language.types.string.md)|[false](language.types.singleton.md)

Gera uma representação armazenável de um valor.

Isso é útil para armazenar ou passar valores PHP sem
perder seu tipo e estrutura.

Para transformar a string serializada em um valor PHP novamente,
a função [igbinary\_unserialize()](function.igbinary-unserialize.md) pode ser usada.

### Parâmetros

`value`
:   O valor a ser serializado. **igbinary\_serialize()**
    lida com todos os tipos, exceto o tipo [resource](language.types.resource.md) e alguns [object](language.types.object.md)s (veja nota abaixo).
    Mesmo [array](language.types.array.md)s que contenham referências a si mesmo podem ser processados ​​por **igbinary\_serialize()**.
    As referências circulares dentro do [array](language.types.array.md) ou [object](language.types.object.md) que está sendo serializado também serão armazenadas.
    Qualquer outra referência será perdida.

    Ao serializar objetos, igbinary tentará chamar as funções membro
    [\_\_serialize()](language.oop5.magic.md#object.serialize) ou
    [\_\_sleep()](language.oop5.magic.md#object.sleep) antes da serialização.
    Isso permite que o objeto faça qualquer limpeza de última hora, etc., antes
    de ser serializado. Da mesma forma, quando o objeto é restaurado usando
    [igbinary\_unserialize()](function.igbinary-unserialize.md), a função membro [\_\_unserialize()](language.oop5.magic.md#object.unserialize) ou
    [\_\_wakeup()](language.oop5.magic.md#object.wakeup) será chamada.

    > **Nota**:
    >
    > Membros privados de [object](language.types.object.md)s têm o nome da classe anexado ao nome do
    > membro; membros protegidos têm um `'*'` prefixando o nome do membro.
    > Esses valores prefixados possuem bytes nulos em ambos os lados.

### Valor Retornado

Retorna uma string contendo uma representação de fluxo de bytes de
`value` que pode ser armazenada em qualquer lugar.

Observe que esta é uma string binária que pode incluir qualquer valor de byte e precisa
ser armazenada e tratada como tal. Por exemplo,
a saída de **igbinary\_serialize()** geralmente deve ser armazenada em um campo `BLOB`
em um banco de dados, em vez de um campo `CHAR` ou `TEXT`.

### Examples

**Exemplo #1 Exemplo de **igbinary\_serialize()****

```
<?php
$ser = igbinary_serialize(['test', 'test']);
echo urlencode($ser), "\n";
var_export(igbinary_unserialize($ser));
?>
```

O exemplo acima produzirá:

```
%00%00%00%02%14%02%06%00%11%04test%06%01%0E%00
array (
  0 => 'test',
  1 => 'test',
)
```

### Notas

> **Nota**:
>
> Observe que muitos objetos integrados no PHP não podem ser serializados. No entanto, aqueles com
> essa habilidade implementam a interface [Serializable](class.serializable.md) ou os métodos
> mágicos [\_\_serialize()](language.oop5.magic.md#object.serialize)/[\_\_unserialize()](language.oop5.magic.md#object.unserialize)
> ou [\_\_sleep()](language.oop5.magic.md#object.sleep)/[\_\_wakeup()](language.oop5.magic.md#object.wakeup). Se uma
> classe interna não atender a nenhum desses requisitos, ela não poderá ser serializada
> de forma confiável com nenhum serializador.
>
> Existem algumas exceções históricas à regra acima, onde alguns objetos internos
> poderiam ser serializados sem implementar a interface ou expor os métodos.

### Veja também

- [serialize()](function.serialize.md) - Gera uma representação armazenável de um valor
- [igbinary\_unserialize()](function.igbinary-unserialize.md) - Cria um valor PHP a partir de uma representação armazenada por igbinary\_serialize
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
