# Redefine um objeto e o marca como lento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.resetaslazyghost.php

---

# ReflectionClass::resetAsLazyGhost

(PHP 8 >= 8.4.0)

ReflectionClass::resetAsLazyGhost — Redefine um objeto e o marca como lento

### Descrição

public function **ReflectionClass::resetAsLazyGhost**([object](language.types.object.md) `$object`, [callable](language.types.callable.md) `$initializer`, [int](language.types.integer.md) `$options` = 0): [void](language.types.void.md)

Redefine um objeto existente informado em `object` e marca-o como lento.

O destrutor do objeto é chamado (se existir), a menos que
a opção **`ReflectionClass::SKIP_DESTRUCTOR`** seja especificada. No
caso especial em que o objeto é um proxy inicializado, a instância real
é desanexada do proxy. Se a instância real não for mais referenciada
em outro lugar, seu destrutor será chamado independentemente da
opção **`SKIP_DESTRUCTOR`**.

As propriedades dinâmicas são removidas e o valor das propriedades declaradas na
classe é descartado como se [unset()](function.unset.md) tivesse sido chamada, e
marcado como lento. Isso implica que se o objeto for uma instância de uma subclasse
com propriedades adicionais, essas propriedades não serão modificadas e não serão
tornadas lentas.
[Propriedades
somente leitura](language.oop5.properties.md#language.oop5.properties.readonly-properties) também não são modificadas e não se tornam lentas se forem
marcadas com `final` ou se a própria classe for `final`.

Se nenhuma propriedade foi marcada como lenta, o objeto não será marcado como lento. Consulte
também
[Ciclo de Vida de Objetos
Lentos](language.oop5.lazy-objects.md#language.oop5.lazy-objects.lifecycle).

Caso contrário, após chamar este método, o comportamento do objeto será o mesmo
de um objeto criado por
[ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md) (exceto para
propriedades de subclasse e somente leitura, conforme descrito acima).

O objeto não é substituído por outros, e sua identidade se mantém
inalterada. Funcionalidades como [spl\_object\_id()](function.spl-object-id.md),
[spl\_object\_hash()](function.spl-object-hash.md),
[SplObjectStorage](class.splobjectstorage.md), [WeakMap](class.weakmap.md),
[WeakReference](class.weakreference.md) ou
[o operador identidade
(`===`)](language.oop5.object-comparison.md) não são afetadas.

### Parâmetros

`object`
:   Um objeto não-lento ou um objeto lento inicializado.

`initializer`
:   Uma função de retorno do inicializador com a mesma assinatura e finalidade de
    [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md).

`options`
:   `options` pode ser uma combinação das seguintes
    opções:

    **`ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE`**
    :   Por padrão, a serialização de um objeto lento aciona sua
        inicialização. Definir esta opção impede a inicialização, permitindo
        que objetos lentos sejam serializados sem serem inicializados.

    **`ReflectionClass::SKIP_DESTRUCTOR`**
    :   Por padrão, o destrutor de objetos é chamado (se houver) antes de torná-lo
        lento. Isso fornece segurança em relação a qualquer estado preexistente
        no objeto. Esta opção desativa esse comportamento, permitindo que os objetos sejam redefinidos
        como lentos sem chamar o destrutor.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Uma exceção [ReflectionException](class.reflectionexception.md) é lançada se o objeto for lento e
não inicializado.

Um [Error](class.error.md) é lançado se o objeto estiver sendo inicializado, ou se as
propriedades do objeto estão sendo iteradas com
[`foreach`](control-structures.foreach.md).

### Veja também

- [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md) - Cria uma nova instância de fantasma lento
- [ReflectionClass::resetAsLazyProxy()](reflectionclass.resetaslazyproxy.md) - Redefine um objeto e o marca como lento

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
