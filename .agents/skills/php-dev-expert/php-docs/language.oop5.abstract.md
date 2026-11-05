# Abstração de Classes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.abstract.php

---

## Abstração de Classes

O PHP possui métodos, classes e propriedades abstratas. Classes definidas como
abstratas não podem ser instanciadas, e qualquer classe que
contenha ao menos um método abstrato ou uma propriedade abstrata também deve ser abstrata.
Métodos definidos como abstratos simplesmente declaram a assinatura e se ele é público ou protegido;
eles não podem definir a implementação. Propriedades definidas como abstratas
podem declarar um requisito para o comportamento de `get` ou `set`,
e podem fornecer uma implementação para uma das operações, mas não para ambas.

Quando herdando de uma classe abstrata, todos os métodos marcados como abstratos
da classe herdada precisam ser definidos na classe implementante.
além de seguir as regras usuais de
[herança](language.oop5.inheritance.md) e
[compatibilidade de assinatura](language.oop5.basic.md#language.oop.lsp).

A partir do PHP 8.4, uma classe abstrata pode declarar uma propriedade abstrata, seja pública ou protegida.
Uma propriedade abstrata protegida pode ser satisfeita por uma propriedade que pode ser lida/gravada no
escopo protegido ou público.

Uma propriedade abstrata pode ser satisfeita por uma propriedade padrão ou por uma propriedade
com [ganchos](language.oop5.property-hooks.md) definidos, correspondentes à operação necessária.

**Exemplo #1 Exemplo de método abstrato**

```
<?php

abstract class ClasseAbstrata
{
    // Força a classe que estende ClasseAbstrata a definir esse método
    abstract protected function pegarValor();
    abstract protected function valorComPrefixo( $prefixo );

    // Método comum
    public function imprimir()
    {
        print $this->pegarValor();
    }
}

class ClasseConcreta1 extends ClasseAbstrata
{
    protected function pegarValor()
    {
        return "ClasseConcreta1";
    }

    public function valorComPrefixo( $prefixo )
    {
        return "{$prefixo}ClasseConcreta1";
    }
}

class ClasseConcreta2 extends ClasseAbstrata
{
    protected function pegarValor()
    {
        return "ClasseConcreta2";
    }

    public function valorComPrefixo( $prefixo )
    {
        return "{$prefixo}ClasseConcreta2";
    }
}

$classe1 = new ClasseConcreta1();
$classe1->imprimir();
echo $classe1->valorComPrefixo('FOO_'), "\n";

$classe2 = new ClasseConcreta2();
$classe2->imprimir();
echo $classe2->valorComPrefixo('FOO_'), "\n";

?>
```

O exemplo acima produzirá:

```
ConcreteClass1
FOO_ConcreteClass1
ConcreteClass2
FOO_ConcreteClass2
```

**Exemplo #2 Exemplo de método abstrato**

```
<?php

abstract class ClasseAbstrata
{
    // Um método abstrato precisa definir apenas os parâmetros requeridos
    abstract protected function prefixName($name);
}

class ClasseConcreta extends ClasseAbstrata
{
    // Uma classe filha pode definir parâmetros opcionais que não estão presentes na assinatura da classe superior
    public function prefixName($name, $separator = ".")
    {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }

        return "{$prefix}{$separator} {$name}";
    }
}

$class = new ClasseConcreta();
echo $class->prefixName("Pacman"), "\n";
echo $class->prefixName("Pacwoman"), "\n";

?>
```

O exemplo acima produzirá:

```
Mr. Pacman
Mrs. Pacwoman
```

**Exemplo #3 Exemplo de propriedade abstrata**

```
<?php

abstract class A
{
    // A extensão de classes deve ter uma propriedade que pode ser obtida publicamente.
    abstract public string $readable {
        get;
    }

    // A extensão de classes deve ter uma propriedade gravável protegida ou pública.
    abstract protected string $writeable {
        set;
    }

    // A extensão de classes deve ter uma propriedade simétrica protegida ou pública.
    abstract protected string $both {
        get;
        set;
    }
}

class C extends A
{
    // Isto satisfaz o requisito e também o torna configurável, o que é válido.
    public string $readable;

    // Isso NÃO satisfaria o requisito, pois não é legível publicamente.
    protected string $readable;

    // Isso satisfaz exatamente o requisito, portanto é suficiente.
    // Pode ser alterado, somente a partir do escopo protegido.
    protected string $writeable {
        set => $value;
    }

    // Isso expande a visibilidade de protegida para pública, o que é aceitável.
    public string $both;
}

?>
```

Uma propriedade abstrata em uma classe abstrata pode fornecer implementações para qualquer gancho,
mas deve ter `get` ou `set` declarado, mas não definido (como no exemplo acima).

**Exemplo #4 Exemplo de propriedade abstrata com ganchos**

```
<?php

abstract class A
{
    // Isso fornece uma implementação de conjunto padrão (mas substituível)
    // e requer que classes filhas forneçam uma implementação get.
    abstract public string $foo {
        get;

        set {
            $this->foo = $value
        }
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
