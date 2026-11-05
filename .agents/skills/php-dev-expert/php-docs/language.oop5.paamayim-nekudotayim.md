# Operador de Resolução de Escopo (::)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php

---

## Operador de Resolução de Escopo (::)

O Operador de Resolução de Escopo (também chamado de Paamayim Nekudotayim), ou em
termos mais simples, dois pontos duplos, é um símbolo que permite acesso a
uma [constante](language.oop5.constants.md),
a uma propriedade [estática](language.oop5.static.md),
ou a um método [estático](language.oop5.static.md)
de uma classe ou a um dos pais dessa classe.
Além disso, propriedades ou métodos estáticos podem ser substituídos através de
[vinculação estática tardia](language.oop5.late-static-bindings.md).

Ao referenciar estes itens do lado de fora da definição da classe, use
o nome da classe.

É possível referenciar a classe usando uma variável.
O valor da variável não pode ser uma palavra-chave (por exemplo, `self`,
`parent` e `static`).

Paamayim Nekudotayim pode parecer, de início, uma escolha estranha para chamar
dois pontos duplos. No entanto, na hora de escrever o Motor Zend 0.5
(que equipa o PHP 3), foi como a equipe da Zend decidiu chamá-lo.
Na verdade, vem do hebraico e significa literalmente "duplo dois pontos".

**Exemplo #1 :: de fora da definição da classe**

```
<?php
class MyClass {
    const CONST_VALUE = 'Um valor constante';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;

echo MyClass::CONST_VALUE;
?>
```

Três palavras-chave especiais, self, parent e
static, são utilizadas para acessar propriedades e métodos de dentro
de uma definição de classe.

**Exemplo #2 :: de dentro da definição da classe**

```
<?php
class MyClass {
    const CONST_VALUE = 'Um valor constante';
}

class OtherClass extends MyClass
{
    public static $my_static = 'variável estática';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
echo $classname::doubleColon();

OtherClass::doubleColon();
?>
```

Quando uma subclasse substitui a definição de um método do pai,
o PHP não chamará o método pai. Fica a cargo da subclasse
chamar o método pai ou não. Isso também se aplica a definições de métodos [Construtores e Destrutores](language.oop5.decon.md), [de Sobrecarga](language.oop5.overloading.md) e [Mágicos](language.oop5.magic.md).

**Exemplo #3 Chamando um método pai**

```
<?php
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass extends MyClass
{
    // Substitui a definição do método pai
    public function myFunc()
    {
        // Mas ainda consegue chamar o método da classe herdada
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();
?>
```

Veja também [alguns exemplos de
chamadas estáticas mais complexas](language.oop5.basic.md#language.oop5.basic.class.this).

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
