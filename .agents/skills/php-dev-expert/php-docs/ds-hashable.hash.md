# Retorna um valor escalar a ser usado como valor de hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-hashable.hash.php

---

# Ds\Hashable::hash

(PECL ds >= 1.0.0)

Ds\Hashable::hash — Retorna um valor escalar a ser usado como valor de hash

### Descrição

abstract public function **Ds\Hashable::hash**(): [mixed](language.types.mixed.md)

Retorna um valor escalar a ser usado como valor de hash dos objetos.

Embora o valor de hash não defina igualdade, todos os objetos que são iguais de acordo com [Ds\Hashable::equals()](ds-hashable.equals.md)
devem ter o mesmo valor de hash. Os valores de hash de objetos iguais não precisam ser exclusivos. Por exemplo,
pode-se simplesmente retornar **`true`** para todos os objetos e nada quebraria - a única
implicação seria que as tabelas de hash se transformariam em listas encadeadas porque todos
os seus objetos seriam hashados para o mesmo bucket. Portanto, é muito importante
escolher um bom valor de hash, como um ID ou endereço de e-mail.

Este método permite que objetos sejam usados como chaves em estruturas como
[Ds\Map](class.ds-map.md) e [Ds\Set](class.ds-set.md), ou qualquer
outra estrutura de pesquisa que honre esta interface.

**Cuidado**

Não escolha um valor que possa mudar dentro do objeto, como uma propriedade pública.
As consultas de tabela de hash falhariam porque o hash mudou.

**Cuidado**

Todos os objetos que são iguais devem ter o mesmo valor de hash.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um valor escalar a ser usado como valor de hash deste objeto.

### Examples

**Exemplo #1 Exemplo de **Ds\Hashable::hash()****

```
<?php
class HashableObject implements \Ds\Hashable
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name  = $name;
        $this->email = $email;
    }

    /**
     * Deve retornar o mesmo valor para todos os objetos iguais, mas não precisa
     * ser exclusivo. Este valor não será usado para determinar igualdade.
     */
    public function hash()
    {
        return $this->email;
    }

    /**
     * Isto determina a igualdade, normalmente durante uma pesquisa de tabela de hash para determinar
     * se a chave corresponde à chave sendo pesquisada. O hash precisa ser igual se
     * os objetos são iguais, caso contrário esta determinação não seria alcançada.
     */
    public function equals($obj): bool
    {
        return $this->name  === $obj->name
            && $this->email === $obj->email;
    }
}
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
