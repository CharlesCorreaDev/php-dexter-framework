# Cria um valor PHP a partir de uma representação armazenada por igbinary_serialize

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.igbinary-unserialize.php

---

# igbinary\_unserialize

(PECL igbinary >= 1.1.1)

igbinary\_unserialize — 
Cria um valor PHP a partir de uma representação armazenada por [igbinary\_serialize()](function.igbinary-serialize.md)

### Descrição

function **igbinary\_unserialize**([string](language.types.string.md) `$str`): [mixed](language.types.mixed.md)

**igbinary\_unserialize()** pega uma única variável serializada de
[igbinary\_serialize()](function.igbinary-serialize.md) e a converte de volta em um valor PHP.

**Aviso**

Entradas não confiáveis de usuários ​​não devem ser passadas para **igbinary\_unserialize()**.
A desserialização pode resultar no carregamento e execução do código devido à instanciação
e carregamento automático do objeto, e um usuário mal-intencionado pode explorar
isso. Em vez disso, um formato de intercâmbio de dados padrão e seguro, como JSON (via
[json\_decode()](function.json-decode.md) e [json\_encode()](function.json-encode.md)) deve ser usado,
se dados serializados precisarem ser passados ​​para um cliente.

Se houver necessidade de desserializar dados serializados armazenados externamente,
[hash\_hmac()](function.hash-hmac.md) pode ser usada para validação de dados.
É importante garantir que ninguém tenha adulterado os dados.

**Aviso**

O formato de serialização igbinary não fornece uma maneira de distinguir entre diferentes grupos de
referência para o mesmo valor. Todas as referências PHP a um determinado valor são tratadas como parte
do mesmo grupo de referência quando desserializadas,
mesmo que façam parte de grupos de referência diferentes quando serializadas.

### Parâmetros

`str`
:   A string serializada gerada por [igbinary\_serialize()](function.igbinary-serialize.md).

    Se o valor que está sendo desserializado for um [object](language.types.object.md), após a reconstrução
    bem-sucedida do objeto, o igbinary tentará automaticamente chamar os métodos
    [\_\_unserialize()](language.oop5.magic.md#object.unserialize) ou
    [\_\_wakeup()](language.oop5.magic.md#object.wakeup) (se existirem).

    > **Nota**:
    > **Diretiva
    > [unserialize\_callback\_func](var.configuration.md#ini.unserialize-callback-func)**  
    >
    > A função de retorno especificada na diretiva
    > [unserialize\_callback\_func](var.configuration.md#ini.unserialize-callback-func)
    > é chamada quando uma classe indefinida é desserializada.
    > Se nenhuma função de retorno for especificada, o objeto será instanciado como
    > uma [\_\_PHP\_Incomplete\_Class](class.php-incomplete-class.md).

### Valor Retornado

O valor convertido é retornado, e pode ser dos tipos [bool](language.types.boolean.md),
[int](language.types.integer.md), [float](language.types.float.md), [string](language.types.string.md),
[array](language.types.array.md), [object](language.types.object.md) ou [null](language.types.null.md).

Caso a string passada não for desserializável, **`false`** é retornado e
um **`E_NOTICE`** ou **`E_WARNING`** é emitido.

### Erros/Exceções

Objetos podem lançar [Throwable](class.throwable.md)s em seus manipuladores de desserialização.

### Notas

**Aviso**

**`null`** ou **`false`** serão retornados tanto em caso de erro quanto em caso de desserialização
dos valores **`null`** ou **`false`** serializados. É possível capturar este caso especial
comparando `str` com
`igbinary_serialize(null)` ou `igbinary_serialize(false)`
ou capturando o **`E_NOTICE`** emitido.

### Veja também

- [unserialize()](function.unserialize.md) - Cria um valor PHP a partir de uma representação armazenada
- [json\_encode()](function.json-encode.md) - Retorna a representação JSON de um valor
- [json\_decode()](function.json-decode.md) - Decodifica uma string JSON
- [hash\_hmac()](function.hash-hmac.md) - Gera um valor de hash com chave usando o método HMAC
- [igbinary\_serialize()](function.igbinary-serialize.md) - Gera uma representação binária compacta e armazenável de um valor
- [Auto-carregamento de Classes](language.oop5.autoload.md)
- [unserialize\_callback\_func](var.configuration.md#ini.unserialize-callback-func)
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
