# Redefine um objeto e o marca como lento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.resetaslazyproxy.php

---

# ReflectionClass::resetAsLazyProxy

(PHP 8 >= 8.4.0)

ReflectionClass::resetAsLazyProxy — Redefine um objeto e o marca como lento

### Descrição

public function **ReflectionClass::resetAsLazyProxy**([object](language.types.object.md) `$object`, [callable](language.types.callable.md) `$factory`, [int](language.types.integer.md) `$options` = 0): [void](language.types.void.md)

O comportamento deste método é o mesmo de
[ReflectionClass::resetAsLazyGhost()](reflectionclass.resetaslazyghost.md) exceto que
ele usa a estratégia de proxy.

O próprio objeto definido em `object` se torna o proxy. Da mesma forma que
[ReflectionClass::resetAsLazyGhost()](reflectionclass.resetaslazyghost.md), o objeto não é
substituído por outro e sua identidade não muda, mesmo após a
inicialização. O proxy e a instância real são objetos distintos, com
identidades distintas.

### Parâmetros

`object`
:   Um objeto não-lento ou um objeto lento inicializado.

`factory`
:   Uma função de retorno fábrica com a mesma assinatura e finalidade que em
    [ReflectionClass::newLazyProxy()](reflectionclass.newlazyproxy.md).

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

- [ReflectionClass::newLazyProxy()](reflectionclass.newlazyproxy.md) - Cria uma nova instância de proxy lento
- [ReflectionClass::resetAsLazyGhost()](reflectionclass.resetaslazyghost.md) - Redefine um objeto e o marca como lento

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
